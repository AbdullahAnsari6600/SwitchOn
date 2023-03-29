<?php
include("connectiondb.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/last.css">
    <title>Document</title>
</head>
<body>
    <div class="box">
        <div class="form">
            <h2>sign in</h2>
            <form method="post">
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
                <div class="links">
                    <a href="#">forgot password</a>
                    <a href="#">signup</a>
                  
                </div>
                <div>
                 <input type="submit" name="register" value="login" class="btn" >
                  <!-- <button type="submit" value="login"  -->
                 <!-- name="logins"> -->
                     <!-- login  -->
                </div>
                 </form>
        </div>
     </div>
</body>
</html>
<?php
if ($_POST['register']) {
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    // $cpwd = $_POST['confirm_password'];
    //$email = $_POST['email'];
    // $sel = "SELECT username FROM signup WHERE username='$uname'";
    // $datas = mysqli_query($conn, $sel);


    $query = "SELECT * FROM signup WHERE username='$uname'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if ($total == 1) {
        session_start();
        echo "<script>alert('registered successfully')</script>";
        header("Location: http://localhost/innovatia-panoply-main/html/home.php");
        $_SESSION['username'] = $uname;
    } else {

        echo "<script>alert('User-name doesnot exist')</script>";
    }
}
?>