$('document').ready(function (event) {
    console.log("in update Staff info");
    var str = {
        'id': +$('#id').val()
    };
    console.log(str);
    $.ajax({
        url: "http://localhost/SMS/api/staff/staff_by_id.php",
        type: "GET",
        datatype: 'JSON',
        data: str,
        success: function (data) {
            
            $("#first_name").val(data['first_name']);
            $("#last_name").val( data['last_name']);
            $("#gender").val(data['gender']);
            $("#blood_group").val(data['blood_group']);
            $("#email").val(data['email']);
            $("#date_of_birth").val(data['date_of_birth']);
            $("#birth_place").val(data['birth_place']);
            $("#religion").val(data['religion']);
            $("#nationality").val(data['nationality']);
            $("#state").val(data['state']);
            $("#city").val(data['city']);
            $("#address").val(data['address']);
            $("#father_name").val(data['father_name']);
            $("#mother_name").val(data['mother_name']);
            $("#parent_state").val(data['parent_state']);
            $("#parent_city").val(data['parent_city']);
            $("#parent_address").val(data['parent_address']);
            $("#parent_email").val(data['parent_email']);
            $("#parent_contact").val(data['parent_contact']);
            $("#education01").val(data['education01']);
            $("#education01_year").val(data['education01_year']);
            $("#education01_subject").val(data['education01_subject']);
            $("#education02").val(data['education02']);
            $("#education02_year").val(data['education02_year']);
            $("#education02_subject").val(data['education02_subject']);
            $("#education03").val(data['education03']);
            $("#education03_year").val(data['education03_year']);
            $("#education03_subject").val(data['education03_subject']);
            $("#education04").val(data['education04']);
            $("#education04_year").val(data['education04_year']);
            $("#education04_subject").val(data['education04_subject']);
            console.log(data);
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log('Error in Database', xhr, textStatus, errorThrown);
        }
    });

    $("#update_staff").on("click",function(event){
        event.preventDefault();
        if(confirm("Are you sure, You want to update this details?"))
        {
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
                url: "http://localhost/SMS/api/staff/updateStaff.php",
                type: "POST",
                datatype: 'json',
                data: str,
                success: function (data) {
                    console.log(data);
                    if(data.status == 202){
                        location.replace("http://localhost/SMS/staffs.php");
                        alert("Staff Updated Successfully");
                        
                    }
                },
                error: function(xhr, textStatus, errorThrown) {  
                    console.log('Error in Database', xhr, textStatus, errorThrown);  
                }
            });
            
            $inputs.prop("disabled", false);
            console.log("Details Updated!");
        }
    })
    $("#cancel_staff_update").on("click",function(){
        if(confirm("Are you sure, You want to cancel this?, Remember all Changes you done will be lost!"))
        {
            console.log("form canceled");
            location.replace("http://localhost/SMS/staffs.php");
        }
    })
});