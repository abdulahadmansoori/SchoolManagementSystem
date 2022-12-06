console.log($);

$(document).ready(function () {
    console.log("document is ready");


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
            $("#fee_operations").toggle(500);
        });

        $("#reg").click(function () {
            $("#reg_operations").toggle(500);
        });

        $("#mng").click(function () {
            $("#mng_operations").toggle(500);
        });

        $("#std").click(function () {
            $("#std_operations").toggle(500);
        });

        $("#teh").click(function () {
            $("#teh_operations").toggle(500);
        });
        $("#exm").click(function () {
            $("#exm_operations").toggle(500);
        });
        $("#hamburgar").click(function () { 
            $("#reg").toggle(500);
            $("#exm").toggle(500);
            $("#teh").toggle(500);
            $("#std").toggle(500);
            $("#mng").toggle(500);
            $("#fee").toggle(500);
        })
});