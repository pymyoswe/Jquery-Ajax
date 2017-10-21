/**
 * Created by root on 10/3/17.
 */
$(function () {

    $("#btnLogin").on('click',function () {

        var email=$("#email").val();
        var password=$("#password").val();

        $.ajax({
            type:'post',
            url:'loginConfig.php',
            data:{email:email,password:password},
            success:function (msg) {
                $("#info").html(msg);
                if(msg==="<span class='alert alert-success'>Login success !</span>"){
                    setInterval(function () {
                        window.location.replace("home.php");
                    },3000);
                }
            }
        });
    });
});