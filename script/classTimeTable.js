$("document").ready(function(){
    console.log("in class time table");
    $.ajax({
        type: "Get",
        url: "http://localhost/SMS/api/class/getClasses.php",
        // data: str,
        dataType: "JSON",
        success: function (data) {
            var options = $("#class").html();
            // console.log(options);
            data.body.forEach(element => {
                $("#class").html(options += `<option value="${element.id}">${element.name}</option>`);
                // console.log(element);
            });
            // console.log(data);
        },
        error: function (xhr,textStatus, errorThrown) {
            console.log('Error in Database', xhr,textStatus, errorThrown);
        }
    });
    $.ajax({
        type: "Get",
        url: "http://localhost/SMS/api/class/getSections.php",
        // data: str,
        dataType: "JSON",
        success: function (data) {
            var options = $("#section").html();
            // console.log(options);
            data.body.forEach(element => {
                $("#section").html(options += `<option value="${element.id}">${element.name}</option>`);
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
        var selectedClass = document.getElementById('class');
        var selectedClassValue = '"class_id" : "' + selectedClass.options[selectedClass.selectedIndex].value +'"';
        var selectedSection = document.getElementById('section');
        var selectedSectionValue = '"sec_id": "' + selectedSection.options[selectedSection.selectedIndex].value+'"';
        str+= selectedClassValue+","+selectedSectionValue;
        str += "}";
        console.log(str);
        console.log("fetching data");
        $.ajax({
            type: "Get",
            url: "http://localhost/SMS/api/class/getClassTimetable.php",
            // data: str,
            dataType: "JSON",
            success: function (data) {
                // var options = $("#section").html();
                console.log(options);
                data.body.forEach(element => {
                    // $("#section").html(options += `<option value="${element.id}">${element.name}</option>`);
                    console.log(element);
                });
                // console.log(data);
            },
            error: function (xhr,textStatus, errorThrown) {
                console.log('Error in Database', xhr,textStatus, errorThrown);
            }
        });
    });
    //     event.preventDefault();
    //     var str = "{";
    //     var selectedClass = document.getElementById('class');
    //     var selectedClassValue = '"applied_class" : "' + selectedClass.options[selectedClass.selectedIndex].value +'"';
    //     var selectedSection = document.getElementById('section');
    //     var selectedSectionValue = '"sec_id": "' + selectedSection.options[selectedSection.selectedIndex].value+'"';
    //     str+= selectedClassValue+","+selectedSectionValue;
    //     str += "}";
    //     console.log(str);
    //     console.log("fetching data");
    //     $.ajax({
    //         type: "POST",
    //         url: "http://localhost/SMS/api/class/getClassStudents.php",
    //         data: str,
    //         dataType: "JSON",
    //         success: function (data) {
    //             var count = 0;
    //             if(data.body){
    //                 data.body.forEach(element => {
    //                     count++;
    //                     console.log(data);
    //                     var text = $("#classStudents").html();
    //                     $("#classStudents").html( text += `
    //                         <tr>
    //                             <th id="${count}"> ${count}</th>
    //                             <td id="${element.id}"> ${element.id}</td>
    //                             <td> ${element.first_name}</td>
    //                             <td> ${element.last_name}</td>
    //                             <td> ${element.created}</td>
    //                             <td> ${element.id}</td>
    //                             <td> 
    //                                 <a class="text-black" href="./view_student_info.php?id=${element.id}"><i class="bi bi-eye-fill" onclick="" id="${element.id}"> </i></a>
    //                                 <a class="text-black" href="./update_std_info.php?id=${element.id}"><i class="bi bi-pencil-square" onclick="" id="${element.id}" > </i></a>
    //                                 <a class="text-black" href="#"><i class="bi bi-trash3-fill" onclick="" id="${element.id}" > </i></a>
    //                             </td>
    //                         </tr>
    //                     `);
    //                 });
    //             }
    //             else{
    //                 alert(data.message);
    //             }
    //         },
    //         error: function (xhr,textStatus, errorThrown) {
    //             console.log('Error in Database', xhr,textStatus, errorThrown);
    //         }
    //     });
    // })
});