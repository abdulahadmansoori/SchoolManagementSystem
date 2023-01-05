$("document").ready(function () {  
    console.log("in View Faculty info");
    var str = {
        'id': +$('#id').text()
    };
    console.log(str);
    $.ajax({
        url: "http://localhost/SMS/api/student/student_by_id.php",
        type: "GET",
        datatype: 'JSON',
        data: str,
        success: function (data) {
            $("#first_name").text(data['first_name']);
            $("#last_name").text(data['last_name']);
            $("#gender").text(data['gender']);
            $("#blood_group").text(data['blood_group']);
            $("#email").text(data['email']);
            $("#DOB").text(data['DOB']);
            $("#birth_place").text(data['birth_place']);
            $("#religion").text(data['religion']);
            $("#nationality").text(data['nationality']);
            $("#state").text(data['state']);
            $("#city").text(data['city']);
            $("#address").text(data['address']);
            $("#father_name").text(data['father_name']);
            $("#mother_name").text(data['mother_name']);
            $("#parent_state").text(data['parent_state']);
            $("#parent_city").text(data['parent_city']);
            $("#parent_address").text(data['parent_address']);
            $("#parent_email").text(data['parent_email']);
            $("#parent_contact").text(data['parent_contact']);
            $("#guardian_name").text(data['guardian_name']);
            $("#guardian_state").text(data['guardian_state']);
            $("#guardian_city").text(data['guardian_city']);
            $("#guardian_address").text(data['guardian_address']);
            $("#guardian_email").text(data['guardian_email']);
            $("#guardian_contact").text(data['guardian_contact']);
            $("#previous_school_name").text(data['previous_school_name']);
            $("#previous_school_state").text(data['previous_school_state']);
            $("#previous_school_city").text(data['previous_school_city']);
            $("#previous_school_address").text(data['previous_school_address']);
            $("#last_class").text(data['last_class']);
            $("#last_class_year").text(data['last_class_year']);
            $("#applied_class").text(data['applied_class']);
            $("#sec_id").text(data['sec_id']);
            console.log(data);
        },
        error: function (xhr,textStatus, errorThrown) {
            console.log('Error in Database', xhr,textStatus, errorThrown);
        }
    });
});
