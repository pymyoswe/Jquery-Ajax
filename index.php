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
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Ajax Tutorials</h1>
        </div>
        <div class="clearfix">

        </div>
        <div class="row col-sm-4">
            <div id="info"></div>
            <form role="form">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="User Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="age" id="age" placeholder="Age">
                </div>
                    <button type="button" class="btn btn-lg btn-success" name="btnSave" id="btnSave">Save</button>
            </form>
        </div>
        <div class="row col-sm-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="showData">

                </tbody>
            </table>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="bootstrap/js/jquery.js" type="text/javascript"></script>
    <script src="app.js" type="text/javascript"></script>

</body>
</html>