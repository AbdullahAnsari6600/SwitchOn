<?php 
include("connectiondb.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notes app</title>
    <link rel="stylesheet" href="../css/phoneno.css">
</head>

<body>
    <nav>
        <div class="logo">Contacts</div>
        <div class="logos">
         <a href="./display.php">display</a> 
        </div>
    </nav>
    <div class="container">
        <form  method="POST">
            <div class="form-control">
                <label for="title">Name</label>
                <input type="text" id="text" placeholder="Enter Name" autocomplete="off" name="title">
            </div>
            <div class="form-control">
                <label for="desc">phone no.</label>
                <input type="tel" id="desc" placeholder="Number"
                    autocomplete="off" name="desc">
            </div>
                <!-- <button class="submit" name="add">+</button>     -->
           <input type="submit" class="submits" value="+" name="add">  
        </form>
    </div>
    <div class="notes">
    </div>
    <script src="./js/phoneno.js"></script>
</body>

</html>
<?php
if($_POST['add'])
{
    $name = $_POST['title'];
    $number = $_POST['desc'];
   session_start();
   // echo "$_SESSION[username]";
  $uname= $_SESSION['username'];
 // $data = mysqli_query($conn, $query);
            if ( $number != "" && $name!= "" && $uname!="" ) 
            {
                $query = "INSERT INTO contact VALUES('$uname','$number','$name')";
                $data = mysqli_query($conn, $query);
                if ($data)
                {
                   
                    echo "<script>alert('registered successfully')</script>";  
          //  header("Location:http://localhost/innovatia-panoply-main/html/phoneno.php");               
                }
                else {

                    echo "<script>alert('User-name already exist')</script>";
                }
    
            }

}
?>