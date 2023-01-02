$("document").ready(function () {  
    console.log("in View Staff info");
    var str = {
        'id': +$('#id').text()
    };
    console.log(str);
    $.ajax({
        url: "http://localhost/SMS/api/staff/staff_by_id.php",
        type: "GET",
        datatype: 'JSON',
        data: str,
        success: function (data) {
            console.log(data);
            $("#first_name").text(data['first_name']);
            $("#last_name").text( data['last_name']);
            $("#gender").text(data['gender']);
            $("#blood_group").text(data['blood_group']);
            $("#email").text(data['email']);
            $("#date_of_birth").text(data['date_of_birth']);
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
            $("#education01").text(data['education01']);
            $("#education01_year").text(data['education01_year']);
            $("#education01_subject").text(data['education01_subject']);
            $("#education02").text(data['education02']);
            $("#education02_year").text(data['education02_year']);
            $("#education02_subject").text(data['education02_subject']);
            $("#education03").text(data['education03']);
            $("#education03_year").text(data['education03_year']);
            $("#education03_subject").text(data['education03_subject']);
            $("#education04").text(data['education04']);
            $("#education04_year").text(data['education04_year']);
            $("#education04_subject").text(data['education04_subject']);
            console.log(data);
        },
        error: function (xhr,textStatus, errorThrown) {
            console.log('Error in Database', xhr,textStatus, errorThrown);
        }
});
});
