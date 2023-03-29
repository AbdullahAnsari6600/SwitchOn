<?php
include("connectiondb.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
    <div class="box">
        <div class="form">
            <h2>sign up</h2>
            <div class="inputbox">
                <input type="text" required="required" name="username">
                <span>username</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" required="required" name="password">
                <span>password</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" required="required" name="confirm_password">
                <span> confirm password</span>
                <i></i>
            </div>

            <div class="inputbox">
                <input type="email" required="required" name="email">
                <span>Email</span>
                <i></i>
            </div>
                <div class="links">
            
                    <a href="#">signin</a>
                    
                    <input type="submit" class="btn" value="login" name="register">
                    
                </div>    
                
       
        </div>
    </div>
</body>
</html>
<?php
if ($_POST['register']) {
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['confirm_password'];
    $email = $_POST['email'];
    $sel = "SELECT username FROM signup WHERE username='$uname'";
    $datas = mysqli_query($conn, $sel);

    if (mysqli_num_rows($datas)==0)
     {
        if ($uname != "" && $pwd != "" && $cpwd != "" && $email != "") 
        {
            $query = "INSERT INTO signup VALUES('$uname','$pwd','$cpwd','$email')";
            $data = mysqli_query($conn, $query);
            if ($data)
            {
                session_start();
                echo "<script>alert('registered successfully')</script>";
                header("Location: http://localhost/innovatia-panoply-main/html/home.php");
                $_SESSION['username'] = $uname;
            }

        }
         
    }

        else {

            echo "<script>alert('User-name already exist')</script>";
        }
}
?>