<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
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
            <div class="panel-heading">
                <h2 class="text-center pt-5">Register</h2>
            </div>
            <form action="login.php" method="post">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="acc">Account:</label>
                        <input required="true" type="text" class="form-control" id="acc" name="account">
                    </div>
                    <div class="form-group">
                        <label for="usr">Full Name:</label>
                        <input required="true" type="text" class="form-control" id="usr" name="fullname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input required="true" type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="text" class="form-control" id="phone" name="phonenumber">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input required="true" type="password" class="form-control" id="pwd" name="password">
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <button class="btn btn-success">Register</button>

                </div>
            </form>
            <div class="pt-3">
                <a href="login.php"><button class="btn btn-danger">Login</button></a>
            </div>
        </div>
    </div>
</body>

</html>