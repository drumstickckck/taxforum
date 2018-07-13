$(function(){
    $(".nav li ").click(function(){
        //var divShow=$(".desc").children("div");
        //$(this).siblings("li").removeClass("current");
        //$(this).siblings("li").children("a")[0].removeClass("current");
        //var _index=$(this).index();
        //$(this).addClass("current");
        //$(this).children("a")[0].addClass("current");
       // $(".search").css('display','block');
       // $(".search1").css('display','none');
       var a=$(this).children()[0];
       a.css('color','red')
       console.log(a);

    });
    var vdefault=$("#search_input").val();
    $("#search_input").focus(function(){
        if($(this).val()==vdefault)
            $(this).val('');
    });
    $('#search_input').blur(function() {
        //失去焦点时，如果值为空，则设置为默认值
        if ($(this).val()== "") {
            $(this).val(vdefault);
        }
    });
    $("#search_input1").focus(function(){
        if($(this).val()==vdefault)
            $(this).val('');
    });
    $('#search_input1').blur(function() {
        //失去焦点时，如果值为空，则设置为默认值
        if ($(this).val()== "") {
            $(this).val(vdefault);
        }
    });
})
// $(function () {
//     $("#home").click(function () {
//         $(".search").css('display','none');
//         $(".search1").css('display','block');
//     })
// })