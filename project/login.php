
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap');
        body{
            padding: 50px;
            background: rgb(0,254,123);
            background: radial-gradient(circle, rgba(0,254,123,1) 0%, rgba(180,82,255,1) 100%);
        }
        .container{
            max-width: 600px;
            margin: 0 auto;
            padding: 50px;
            box-shadow: rgba(100,100,111,0.2) 0px 7px 29px 0px;
        }
        .form-group{
            margin-bottom:30px ;
        }
        form a{
            font-size: smaller;
        }
        .logo{
            font-size: larger;
            text-align: center;
            cursor: pointer;
            margin-bottom: 20px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="favicon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            if(isset($_POST["login"])){
                $email = $_POST["email"];
                $password = $_POST["password"];
                require_once "database.php";
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn,$sql);
                $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
                if($user){
                    if(password_verify($password,$user["password"])){
                        session_start();
                        $_SESSION["user"] = "yes";
                        header("Location: index.php");
                        die();
                    }else{
                        echo "<div class='alert alert-danger'>Password does not match</div>";     
                    }
                }else{
                    echo "<div class='alert alert-danger'>Email does not match</div>";     
                }
            }
        ?>
        <form action="login.php" method="post">
        <div class="logo" style="font-family:'Sedgwick Ave Display';">Sneaker Spot</div>
            <div class="form-group">
                <input id="email" type="email" name="email" placeholder="Enter email" class="form-control" onkeyup="success('email')">
            </div>
            <div class="form-group">
                <input id="password" type="password" name="password" placeholder="Enter password" class="form-control" onkeyup="success('password')">
            </div>
            <div class="form-btn">
                <input id="login" type="submit" name="login" value="Login" class="btn btn-primary" disabled>
            </div>
            <a style="color:white;text-decoration:none;" href="registration.php">Register</a>
        </form>
    </div>
    <script>
        function success(id){
            if(document.getElementById(id).value==""){
                document.getElementById("login").disabled = true;
            }
            else{
                document.getElementById("login").disabled = false;
            }
        }
    </script>
</body>
</html>