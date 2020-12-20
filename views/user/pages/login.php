<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="chickenit07">

    <title>Login Page</title>

</head>
<body>
	<div class="container" style="text-align: center;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="col-md-12">
                </div>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="font-size:30px;">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
						<?php include './views/admin/blocks/error.php' ?>
						
                        <form role="form" action="./routes/user/check_login.php" onsubmit="return validateLoginForm()"  method="POST">
                                <div class="form-group">
                                    <input id="c-username" class="form-control" placeholder="Username" name="username" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input id = "c-password"class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                <button type="submit" class="btn btn-lg btn-success">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<script type="text/javascript" src="./public/user/js/validate.js"></script>
</body>
</html>