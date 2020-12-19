<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin Login">
    <meta name="author" content="Login">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../public/admin/bower_components/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../public/admin/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../public/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="col-md-12">
                    
                </div>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php include '../views/admin/blocks/error.php' ?>
                        <form name="username" role="form" action="../routes/admin/check_login.php" onsubmit="return validateForm()" method="POST" >
                            <fieldset>
                                <div class="form-group">
                                    <input id="username-login-form" class="form-control" placeholder="Username" name="username" type="text" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input id = "password-login-form" class="form-control" placeholder="Password" name="password" type="password" required value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script type="text/javascript" src="../public/admin/js/validate.js"></script>
</body>
</html>
