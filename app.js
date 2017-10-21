$(function () {
    setInterval(function () {
        showUser();
    },3000);
    showUser();

    function showUser() {
        $.ajax({
           type:'post',
            url:'showUser.php',
            success:function (msg) {
                $("#showData").html(msg);
            }
        });
    }
    $("#btnSave").on('click',function () {
       var name=$("#name").val();
       var email=$("#email").val();
       var age=$("#age").val();

       $.ajax({
          type:'post',
           url:'addUser.php',
           data:{name:name,email:email,age:age},
           success:function (msg) {
               $("#info").html(msg);
               showUser();
               $("#name").val('');
               $("#email").val('');
               $("#age").val('');
           }
       });
    });
    $("body").delegate('.btnDel','click',function () {
        var user_id=$(this).attr('uid');
        var con=confirm("Are you sure want to delete?");
        if(con){
            $.ajax({
                type:'post',
                url:'deleteUser.php',
                data:{uId:user_id},
                success:function (msg) {
                    showUser();
                }
            });
        }
    });
});