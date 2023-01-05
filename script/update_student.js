$('document').ready(function (event) {
    console.log("in update student info");
    var str = {
        'id': +$('#id').val()
    };
    console.log(str);
    $.ajax({
        url: "http://localhost/SMS/api/student/student_by_id.php",
        type: "GET",
        datatype: 'JSON',
        data: str,
        success: function (data) {
            $("#first_name").val(data['first_name']);
            $("#last_name").val(data['last_name']);
            $("#gender").val(data['gender']);
            $("#blood_group").val(data['blood_group']);
            $("#email").val(data['email']);
            $("#DOB").val(data['DOB']);
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
            $("#guardian_name").val(data['guardian_name']);
            $("#guardian_state").val(data['guardian_state']);
            $("#guardian_city").val(data['guardian_city']);
            $("#guardian_address").val(data['guardian_address']);
            $("#guardian_email").val(data['guardian_email']);
            $("#guardian_contact").val(data['guardian_contact']);
            $("#previous_school_name").val(data['previous_school_name']);
            $("#previous_school_state").val(data['previous_school_state']);
            $("#previous_school_city").val(data['previous_school_city']);
            $("#previous_school_address").val(data['previous_school_address']);
            $("#last_class").val(data['last_class']);
            $("#last_class_year").val(data['last_class_year']);
            $("#applied_class").val(data['applied_class']);
            console.log(data);
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log('Error in Database', xhr, textStatus, errorThrown);
        }
    });
    $("#update_student").on("click",function(event){
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
                url: "http://localhost/SMS/api/student/updateStudent.php",
                type: "POST",
                datatype: 'json',
                data: str,
                success: function (data) {
                    console.log(data);
                    if(data.status == 202){
                        location.replace("http://localhost/SMS/students.php");
                        alert("Students Data Updated Successfully");
                        
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
    $("#cancel_student_update").on("click",function(){
        if(confirm("Are you sure, You want to cancel this?, Remember all Changes you done will be lost!"))
        {
            console.log("form canceled");
            location.replace("http://localhost/SMS/students.php");
        }
    })
});