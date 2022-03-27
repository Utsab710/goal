<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>



    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body style="background-image:url('img/abc.jpg');
background-position:center;
background-size:150%;
background-repeat: no-repeat;">

    <div class="overlay"></div>
    <!-- login -->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <form method="post" action="db/login.php">
                    <h2 style=
                    "color:white;">Login:</h2>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="background-color: whitesmoke;" id="basic-addon1">Email </span>
                        <input type="email" style="background-color: whitesmoke;" name="email" class="form-control" placeholder="Email" aria-label="email"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="background-color: darkgray;" id="basic-addon1">Password </span>
                        <input type="password" style="background-color: whitesmoke;" placeholder="Password" name="password" class="form-control"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <hr>
                    <span style=
                    "color:white;"> ARE YOU NEW USER?</span> <a href="signup.php">Signup</a>
                    <input type="submit" value="Login" name="loginsubmit" style="float:right;"
                        class="btn btn-danger">
                </form>

                <hr>
                <?php include('include/message.php'); ?>
            </div>
        </div>
    </div>

</body>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>


</html>