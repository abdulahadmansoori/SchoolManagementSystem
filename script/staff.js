$(document).ready(function () {
    console.log("document is ready");
    var request;
    $('#reg_staff').on("click", function (event) {
        console.log("in register staff function");
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
            url: "http://localhost/SMS/api/staff/addStaff.php",
            type: "POST",
            datatype: 'json',
            data: str,
            success: function (data) {
                console.log(data);
                if(data.status == 202){
                    alert("Staff Registered Successfully");
                }
            },
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database', xhr, textStatus, errorThrown);  
            }
        });
        
        $inputs.prop("disabled", false);
    });
    
});
function deleteStaff(id){
    var txt="";
    // console.log(id);
    var text = {
        "id" : id
    };
    console.log(text);
    if (confirm("Are You Sure, You Want to Delete This Staff?")) {
        txt = "Yes";
        $.ajax({
            url: "http://localhost/SMS/api/staff/deleteStaff.php",
            type: "GET",
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
$("#details").ready(function(){
    console.log("staff details is ready");
    function loadData(){
        $.ajax({
            url: "http://localhost/SMS/api/staff/staff.php",
            type: "GET",
            datatype: 'json',
            success: function (data) {
                data.body.forEach(element => {
                    console.log(element);
                    var text = $("#staffs_table").html();
                    $("#staffs_table").html( text += `
                        <tr>
                            <th> ${element.id}</th>
                            <td> ${element.first_name}</td>
                            <td> ${element.last_name}</td>
                            <td> ${element.created_on}</td>
                            <td> ${element.id}</td>
                            <td> ${element.id}</td>
                            <td> 
                                <a class="text-black" href="./view_staff_info.php?id=${element.id}"><i class="bi bi-eye-fill" onclick="" id="${element.id}"> </i></a>
                                <a class="text-black" href="./update_staff_info.php?id=${element.id}"><i class="bi bi-pencil-square" onclick="" id="${element.id}" > </i></a>
                                <a class="text-black" href="#"><i class="bi bi-trash3-fill" onclick="" id="${element.id}" > </i></a>
                            </td>
                        </tr>
                    `);
                });
                
                console.log();
            },
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database', xhr, textStatus, errorThrown);  
                // console.log(xhr.responseText);
            }
        });
        
    };
    loadData();
});
