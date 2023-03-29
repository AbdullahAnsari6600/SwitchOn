<?php include("connectiondb.php");
session_start();


$id = $_GET['fn'];

$userprofile = $_SESSION['username'];
if ($userprofile != true) {
    header('location:./signup.php');
}

$query = "SELECT * FROM signup where username='$id'";
$data  = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
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
            <h2>Update</h2>
            <div class="inputbox">
                <input type="text" required="required" name="username" value="<?php echo $result['username']?> ">
                <span>username</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" required="required" name="password" value="<?php echo $result['password']?>">
                <span>password</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" required="required" name="confirm_password" value="<?php echo $result['confirmpassword']?>">
                <span> confirm password</span>
                <i></i>
            </div>

            <div class="inputbox">
                <input type="email" required="required" name="email" value="<?php echo $result['email']?>" >
                <span>Email</span>
                <i></i>
            </div>
                <div class="links">
            
                    <a href="./loginpage.php">signin</a>
                    
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
   // $sel = "SELECT username FROM signup WHERE username='$uname'";
    //$datas = mysqli_query($conn, $sel);

            $query = "UPDATE signup set username='$uname',password='$pwd',confirmpassword='$cpwd',email='$email'where fname='$id'";
            $data = mysqli_query($conn, $query);

            if ($data)
            {
                session_start();
                echo "<script>alert('record updated')</script>";
              //  header("Location: http://localhost/innovatia-panoply-main/html/mainpage.php");
                $_SESSION['username'] = $uname;
            }

        

        else {

            echo "<script>alert('record failed to update')</script>";
        }
}
?>