<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Lessons</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
        #btnSave{
            width: 200px;
        }
        body{
            background-color: #204d74;
        }
        .container{
            margin: 50px auto;
        }
        form{
            text-align: center;
            margin-right: 30px;
        }
        .table{
            color: #ffffff;
        }
        .title{
            color: #00bcd4;
        }
        #info{
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div id="info"></div>
    <div class="row col-sm-4">
        <form role="form">
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="User Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="Password confirm">
            </div>
            <button type="button" class="btn btn-lg btn-success" name="btnReg" id="btnReg">Register</button>
        </form>
    </div>
</div>

<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="bootstrap/js/jquery.js" type="text/javascript"></script>
<script src="app2.js" type="text/javascript"></script>

</body>
</html>