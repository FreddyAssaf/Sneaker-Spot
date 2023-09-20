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
            max-width: 800px;
            margin: 0 auto;
            padding: 50px;
            box-shadow: rgba(100,100,111,0.2) 0px 7px 29px 0px;
        }
        .form-group{
            margin-bottom:30px ;
        }
        .error{
            font-size: small;
            color:red;
            display: none;
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
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="favicon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        if(isset($_POST["submit"])){
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $passwordHash = password_hash($password,PASSWORD_DEFAULT);

            $errors = array();

            if(empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
                array_push($errors,"All fields are required");
            }
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                array_push($errors,"Email is not valid");
            }
            if(strlen($password)<8){
                array_push($errors,"Password must be atleast 8 characters long");
            }
            if($password !== $passwordRepeat){
                array_push($errors,"Password does not match");
            }

            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn,$sql);
            $rowCount = mysqli_num_rows($result);
            if($rowCount>0){
                array_push($errors,"Email already exists!");
            }

            if(count($errors)>0){
                foreach($errors as $error){
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }
            else{
                //add info to database
                require_once "database.php";
                $sql = "INSERT INTO users(full_name,email,password) VALUES (?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt = mysqli_stmt_prepare($stmt,$sql);

                if($preparestmt){
                    mysqli_stmt_bind_param($stmt,"sss",$fullName,$email,$passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully</div>";
                    header("Location: login.php");
                }
                else{
                    die("Something went wrong");
                }
            }
        }
        ?>
        <form id="form" action="registration.php" method="post">
        <div class="logo" style="font-family:'Sedgwick Ave Display';">Sneaker Spot</div>
            <div class="form-group">
                <input class="form-control" type="text" name="fullname" id="fn" placeholder="Full name:" onkeyup="success('fn')">
            </div>

            <div class="form-group">
                <input class="form-control" type="email" name="email" id="email" placeholder="Email:" onkeyup="valid()" onkeyup="success('email')">
            </div>
            <p id="error1" class="error">Invalid Email</p>
            <p id="error2" class="error">Should container numbers</p>
            
            <p id="error4" class="error">Should contain special characters</p>
            <p id="error5" class="error">Should contain capital letters</p>
            
            <div class="form-group">
                <input class="form-control" type="password" name="password" id="password" placeholder="Password:" onkeyup="success('password')">
            </div>

            <div class="form-group">
                <input class="form-control" type="password" name="repeat_password" id="repeat_password" placeholder="Repeat Passowrd:" onkeyup="success('repeat_password')">
            </div>

            <div class="form-btn">
                <input class="btn btn-primary" type="submit" name="submit" id="login" value="Create Account" disabled>
            </div>
            <a style="color:white;text-decoration:none;font-size:smaller;" href="login.php">Already registered</a>
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
        function valid(){
            var email = document.getElementById("email").value;

            if(!email.match(/^[^ ]+@[^ ]+\.[a-z]{2,3}$/)){
                var error = document.getElementById("error1")
                error.style.display = "block";
            }else{
                var error = document.getElementById("error1")
                error.style.display = "none"; 
            }

            if(!email.match(/[0-9]/i)){
                var error = document.getElementById("error2")
                error.style.display = "block";
            }else{
                var error = document.getElementById("error2")
                error.style.display = "none"; 
            }

            
            if(!email.match(/[^A-Za-z0-9-' ']/i)){
                var error = document.getElementById("error4")
                error.style.display = "block";
            }else{
                var error = document.getElementById("error4")
                error.style.display = "none"; 
            }
            if(!email.match(/[A-Z]/)){
                var error = document.getElementById("error5")
                error.style.display = "block";
            }else{
                var error = document.getElementById("error5")
                error.style.display = "none"; 
            }
        }
    </script>
</body>
</html>