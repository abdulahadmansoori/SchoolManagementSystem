console.log($);
var serializedData;
$(document).ready(function () {
    console.log("main document is ready");


    // $('p').click(function(){
    //     console.log("you click on "+ this.innerText);
    //     $(this).hide(1000);
    //     $('p:first').show(1000);
    // })
    // $('p:last').click(function () { 
    //     $('p:first').fadeToggle(1000);
    // });
    // $('p:first').animate({
    //     opacity:0.3
    // }, 1000)

    // $('p:first').animate({
    //     opacity:1
    // }, 1000)

    $('p:first').click(function (e) {
        $('p:first').html("htmlString");
    });

    // $('p').hover(function () {
    //         // over
    //         console.log("you hovered in "+ this.innerText);

    //     }, function () {
    //         // out
    //         console.log("you hovered out "+ this.innerText);
    //     }
    // );
    // $('p').mousemove(function (e) { 
    //     // values: e.clientX, e.clientY, e.pageX, e.pageY
    //     console.log("you mousemove on "+ this.innerText);
    // });
    // $('p').mouseenter(function () { 
    //     console.log("you mouseenter on "+ this.innerText);

    // });

        $("#fee").click(function () {
            $("#fee_operations").slideToggle(500);
            console.log("mouseover")
        });

        $("#reg").click(function () {
            $("#reg_operations").slideToggle(500);
        });

        $("#mng").click(function () {
            $("#mng_operations").slideToggle(500);
        });

        $("#std").click(function () {
            $("#std_operations").slideToggle(500);
        });

        $("#teh").click(function () {
            $("#teh_operations").slideToggle(500);
        });
        $("#exm").click(function () {
            $("#exm_operations").slideToggle(500);
        });
        $("#stf").click(function () {
            $("#stf_operations").slideToggle(500);
        });
        // $("#hamburgar").click(function () { 
        //     $("#reg").toggle(500);
        //     $("#exm").toggle(500);
        //     $("#teh").toggle(500);
        //     $("#std").toggle(500);
        //     $("#mng").toggle(500);
        //     $("#fee").toggle(500);
        // })
        // count = 0;
        // $("#hambargar").click(function () { 
        //     count++;
        //     $("#nav_links").animate({opacity:'toggle'},0);
        //     $("#nav").animate({width:'toggle'},0);
        //     if(count==1){
        //         $("#Main-Content").addClass("col-lg-12").removeClass("col-lg-10");
        //     }
        //     else if(count==2){
        //         $("#Main-Content").removeClass("col-lg-12").addClass("col-lg-10");
        //         count=0;
        //     }
        // })

        // // student registration
        // var request;
        // $('#reg_student').on("click", function(event){
        //     console.log("in register std function");
        //     event.preventDefault();
        //     if (request) {
        //         request.abort();
        //     }
        //     var $form = $(this);
        //     var $inputs = $form.find("input, select, button, textarea");
        //     var str ="{";
        //     for(i=0;i<$("input").length;i++){
        //         key = $("input")[i].name;
        //         value = $("input")[i].value;
        //         str += `"${key}" : "${value}"`;
        //         if(i<$("input").length-1){
        //             str += ",";
        //         }
        //     }
        //     str +="}";
        //     $inputs.prop("disabled", true);
        //     $.ajax({
        //         url: "http://localhost/SMS/api/student/addStudent.php",
        //         type: "POST",
        //         data: str,
        //         success: function(data) {   
        //             console.log(data);
        //         }
        //     });
        //     $inputs.prop("disabled", false);
        // });
});