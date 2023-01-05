$("document").ready(function(){
    console.log("in class time table");
    $.ajax({
        type: "Get",
        url: "http://localhost/SMS/api/faculty/faculties.php",
        // data: str,
        dataType: "JSON",
        success: function (data) {
            var options = $("#employee").html();
            // console.log(options);
            data.body.forEach(element => {
                $("#employee").html(options += `<option value="${element.id}">${element.first_name} ${element.last_name}</option>`);
                // console.log(element);
            });
            // console.log(data);
        },
        error: function (xhr,textStatus, errorThrown) {
            console.log('Error in Database', xhr,textStatus, errorThrown);
        }
    });
    $("#fetch").on("click", function(event){
        event.preventDefault();
        var str = "{";
        var selectedEmployee = document.getElementById('employee');
        var selectedEmployeeValue = '"fac_id" : "' + selectedEmployee.options[selectedEmployee.selectedIndex].value +'"';
        
        // var selectedSection = document.getElementById('section');
        // var selectedSectionValue = '"sec_id": "' + selectedSection.options[selectedSection.selectedIndex].value+'"';
        // str+= selectedClassValue+","+selectedSectionValue;
        str+= selectedEmployeeValue;
        str += "}";
        console.log(str);
        console.log("fetching data");
        $.ajax({
            url: "http://localhost/SMS/api/attendence/getAttendance.php",
            type: "POST",
            dataType: "JSON",
            data: str,
            success: function (data) {
                // var options = $("#section").html();
                // console.log(options);
                var status = [0,0,0];
                data.body.forEach(element => {
                    // $("#section").html(options += `<option value="${element.id}">${element.name}</option>`);
                    console.log(element);
                    if(element.status == 'A'){
                        status[0]+=1;
                    }
                    else if(element.status == 'P'){
                        status[1]+=1;
                    }
                    else if(element.status == 'L'){
                        status[2]+=1;
                    }
                    $("#emp_id").html(element.fac_id);
                });
                $("#salary").html(40000+"/-");
                $("#late").html(status[2]);
                $("#lateAmount").html('-'+status[2] * 200+'/-');
                $("#absent").html(status[0]);
                $("#absentAmount").html('-'+status[0] * 800+'/-');
                $("#prasent").html(status[1]);
                $("#totalSalary").html(40000 - status[2] * 200 - status[0] * 800+"/-");
                
                console.log(status);
            },
            error: function (xhr,textStatus, errorThrown) {
                console.log('Error in Database', xhr,textStatus, errorThrown);
            }
        });
        });
});