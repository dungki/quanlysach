<?php 

if (!empty($_POST)) {
	$CheckEmail = $CheckPassword = '';
    if (isset($_POST['fullname'])) {
        setcookie('fullname', $_POST['fullname'], time() + 300, '/');
    }
    if (isset($_POST['email'])) {
        setcookie('email', $_POST['email'], time() + 300, '/');
    }
    if (isset($_POST['account'])) {
        setcookie('account', $_POST['account'], time() + 300, '/');
    }
    if (isset($_POST['password'])) {
        setcookie('password', $_POST['password'], time() + 300, '/');
    }
    if (isset($_POST['address'])) {
        setcookie('address', $_POST['address'], time() + 300, '/');
    }
    if (isset($_POST['phonenumber'])) {
        setcookie('phonenumber', $_POST['phonenumber'], time() + 300, '/');
    }
    if (isset($_POST['acc']) && isset($_POST['pass'])) {
        if (($_COOKIE['account'] == $_POST['acc']) && ($_COOKIE['password'] == $_POST['pass'])) {
            setcookie('status', 'success', time() + 300, '/');
            header('Location: booklist.php');
            die();    
	}
}
}

 ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading pt-5">
                <h2 class="text-center">Login</h2>
            </div>
            <form action="" method="post">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="acc">Account:</label>
                        <input required="true" type="acc" class="form-control" id="acc" name="acc">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input required="true" type="password" class="form-control" id="pwd" name="pass">
                    </div>
                    <button class="btn btn-success">Login </button>

                </div>
            </form>
            <div class="pt-3">
                <a href="register.php"><button class="btn btn-danger">Register</button></a>
            </div>
        </div>
    </div>
</body>

</html>