$(document).ready(function () {
    console.log("document is ready");
    var request;
    $('#reg_faculty').on("click", function (event) {
        console.log("in register emp function");
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
            url: "http://localhost/SMS/api/faculty/addFaculty.php",
            type: "POST",
            datatype: 'json',
            data: str,
            success: function (data) {
                console.log(data);
                if(data.status == 202){
                    alert("Faculty Registered Successfully");
                }
            },
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database', xhr, textStatus, errorThrown);  
            }
        });
        
        $inputs.prop("disabled", false);
    });
    
});
$("#details").ready(function(){
    console.log("faculty details is ready");
    function loadData(){
        $.ajax({
            url: "http://localhost/SMS/api/faculty/faculties.php",
            type: "GET",
            datatype: 'json',
            success: function (data) {
                data.body.forEach(element => {
                    console.log(element);
                    var text = $("#emp_table").html();
                    $("#emp_table").html( text += `
                        <tr>
                            <th> ${element.id}</th>
                            <td> ${element.first_name}</td>
                            <td> ${element.last_name}</td>
                            <td> ${element.created}</td>
                            <td> 
                                <a class="text-black" href="./view_faculty_info.php?id=${element.id}"><i class="bi bi-eye-fill" onclick="" id="${element.id}"> </i></a>
                                <a class="text-black" href="./update_faculty_info.php?id=${element.id}"><i class="bi bi-pencil-square" onclick="" id="${element.id}" > </i></a>
                                <a class="text-black" href="#"><i class="bi bi-trash3-fill" onclick="delete_faculty(${element.id})" id="${element.id}" > </i></a>
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
