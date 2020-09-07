<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
file_put_contents('UIDContainer.php',$Write);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>

    body{
        background-color:#227093;
    }
    .container {
        width: 40%;
        padding: 30px;
    }

    button {
        width: 48%;
    }

    .card {
        border-radius: 20px;
        margin-top: 9%;
        box-shadow: 0 3px 30px rgba(0, 0, 0, 0.7);
        padding: 30px;
    }
    </style>

</head>

<body>
    <div class="container">

        <div class="card">
            <h3 class="text-center">LOG-IN RFID ACCESS</h3>
            <form action="login_proses.php" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                            <input type="text" name="username" class="form-control" id="" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Password</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-unlock-alt"></i></div>
                        </div>
                        <input type="password" name="password" class="form-control" id="" placeholder="Password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="submit" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- MAIN -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>