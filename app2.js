/**
 * Created by root on 10/3/17.
 */
$(function () {

    $("#btnReg").on('click',function () {
       var name=$("#name").val();
       var email=$("#email").val();
       var password=$("#password").val();
       var password_confirm=$('#password_confirm').val();

       $.ajax({
          type:'post',
           url:'regConfig.php',
           data:{name:name,email:email,password:password,password_confirm:password_confirm},
           success:function (msg) {
               $("#info").html(msg);
           }
       });
    });
});