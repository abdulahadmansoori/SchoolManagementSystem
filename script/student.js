$(document).ready(function () {
    console.log("document is ready");
    var request;

    // this function is use to get data form std registration from and convert it into JSON and pass to api 
    $('#reg_student').on("click", function (event) {
        console.log("in register std function");
        event.preventDefault();
        if (request) {
            request.abort();
        }
        var $form = $(this);
        var $inputs = $form.find("input, select, button, textarea");
        var str = "{";
        for (i = 0; i < $("input").length; i++) {
            key = $("input")[i].name;
            value = $("input")[i].value;
            str += `"${key}" : "${value}"`;
            // if (i < $("input").length - 1) {
            //     str += ",";
            // }
            str += ",";
        }
        var selectedReligion = document.getElementById('religion');
        var selectedReligionValue = '"religion" : "' + selectedReligion.options[selectedReligion.selectedIndex].value +'"';
        var selectedGender = document.getElementById('gender');
        var selectedGengerValue = '"gender": "' + selectedGender.options[selectedGender.selectedIndex].value+'"';
        str+= selectedGengerValue+","+selectedReligionValue;
        str += "}";
        console.log(str);
        $inputs.prop("disabled", true);
        $.ajax({
            url: "http://localhost/SMS/api/student/addStudent.php",
            type: "POST",
            datatype: 'json',
            data: str,
            success: function (data) {
                console.log(data);
                if(data.status == 202){
                    alert("Student Registered Successfully");
                }
            },
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database', xhr, textStatus, errorThrown);  
            }
        });
        
        $inputs.prop("disabled", false);
    });  
    
    // this function is use to get data form api fetched data and fill into the input feilds 
    // $('#get_std_data_for_update').on("click", function (event) {
    //     event.preventDefault();
    //     var text = {
    //         "id" : "7"
    //     };
    //     console.log(text);
    //     $.ajax({
    //         url: "http://localhost/SMS/api/student/student.php",
    //         type: "POST",
    //         datatype: 'json',
    //         data: text,
    //         success: function (data) {
    //             console.log(data);
    //         },
    //         error: function(xhr, textStatus, errorThrown) {  
    //             console.log('Error in Database', xhr, textStatus, errorThrown);  
                
    //         }
    //     });
    // });  

    
});
// function edit(id){
//     console.log(id.id);
//     var text = {
//         "id" : id.id
//     };
//     console.log(text);
    // $.ajax({
    //     url: "http://localhost/SMS/api/student/student.php",
    //     type: "POST",
    //     datatype: 'json',
    //     data: text,
    //     success: function (data) {
    //         console.log(data['msg']);
    //     },
    //     error: function(xhr, textStatus, errorThrown) {  
    //         console.log('Error in Database', xhr, textStatus, errorThrown);  
            
    //     }
    // });
// }
function deleteStdRecord(id){
    var txt="";
    console.log(id.id);
    var text = {
        "id" : id.id
    };
    if (confirm("Are You Sure, You Want to Delete This Student?")) {
        txt = "Yes";
        $.ajax({
            url: "http://localhost/SMS/api/student/deleteStudent.php",
            type: "POST",
            datatype: 'json',
            data: text,
            success: function (data) {
                console.log(data['msg'], "data deleted successfully");
            },
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database', xhr, textStatus, errorThrown);  
                
            }
        });
      } else {
        txt = "You pressed Cancel!";
      }
      console.log(txt);
    
}
// function fun(id){
//     console.log(id);
//     location.replace("http://localhost/SMS/update_std_info.php");
// }

$("#details").ready(function(){
    console.log("details is ready");
    $("#updateInfoIcon").on("click", function (param) {
        
        console.log("in get id");
        
    });
    function loadData(){
        $.ajax({
            url: "http://localhost/SMS/api/student/students.php",
            type: "GET",
            datatype: 'json',
            success: function (data) {
                data.body.forEach(element => {
                    console.log(element);
                    var text = $("#std_table").html();
                    $("#std_table").html( text += `
                        <tr>
                            <th id="${element.id}"> ${element.id}</th>
                            <td> ${element.first_name}</td>
                            <td> ${element.last_name}</td>
                            <td> ${element.created}</td>
                            <td> ${element.id}</td>
                            <td> 
                                <a class="text-black" href="./view_student_info.php?id=${element.id}"><i class="bi bi-eye-fill" onclick="" id="${element.id}"> </i></a>
                                <a class="text-black" href="./update_std_info.php?id=${element.id}"><i class="bi bi-pencil-square" onclick="" id="${element.id}" > </i></a>
                                <a class="text-black" href="#"><i class="bi bi-trash3-fill" onclick="" id="${element.id}" > </i></a>
                            </td>
                        </tr>
                    `);
                });
                
                console.log();
            },
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database', xhr, textStatus, errorThrown);  
                
            }
        });
        
    };
    loadData();
});
