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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/home.css" />
    <script
      src="https://kit.fontawesome.com/3e0ba4391f.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/7e2a4a2bc0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
  </head>
  
  <body>
    <div class="backgroundimg">
    <div class="main">
      <div class="logo">
        <h1>switch on</h1>
      </div>
      <div class="nav">
        <strong>
        <ul>
          <li>Home</li>
          <li>About</li>
          <li>feature</li>
          <li>Contact</li>
        </ul>
        </strong>
        <div class="ig">
          <img src="../images/userlogo.jpg" id="navbar" alt="" />
        </div>
        <div class="float" id="flow">
          <div class="profile">
            <img src="../images/userlogo.jpg" alt="" />
            <h4>
              <?php
              session_start();
              echo "$_SESSION[username]";
              ?>
            </h4>
          </div>
          <hr />
          <div class="ic">
       <a href="#">
          <i class="fa-solid fa-table-columns"></i>
            <!-- <p>Dashboard</p> -->
            Dashboard
        </a>
          </div>
          <div class="ic">
        <a href="./edit.php?fn=$result[username]">
            <i class="fa-regular fa-user"></i>
            <!-- <p>Edit Profile</p> -->
            edit profile
       </a>
          </div>
          <div class="ic" >
        <a href="#">
            <i class="fa-solid fa-sliders" ></i>
            <!-- <p>Help & Support</p> -->
            help & Support
        </a>
          </div>
          <div class="ic">
        <a href="./logout.php ">
            <i class="fa-solid fa-right-from-bracket"></i>
            <!-- <p>Logout</p> -->
            Logout
       </a>
          </div>
        </div>
      </div>
    </div>
    <!-- about -->
    <div class="outerabout">
    <div class="about">
      <div class="about-in">
        <h1>About Us</h1>
        <p >
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam maxime officiis, culpa soluta recusandae, quasi explicabo, perspiciatis natus veritatis quibusdam assumenda! Nihil dolores deserunt alias quibusdam, dolore praesentium culpa quae?
        </p>
      </div>
    </div>
    </div>
</div>
 
    <!-- features 
    
    <div id="service">
      <div class="container">
          <h1 class="sub">
              features </h1>
  <div class="service-list">
      <div >
        <a href="./phoneno.php " class="alink">
        <i class="fa-solid fa-address-book"></i>
          <h2>contacts</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, fuga. Nemo quasi natus nesciunt, eius nostrum, autem amet officia ea dicta atque optio praesentium quam ipsum impedit perferendis ab. Fugiat?</p>
          </a>
      </div>
      <div>
        <i class="fa-solid fa-image"></i>
          <h2>images</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, fuga. Nemo quasi natus nesciunt, eius nostrum, autem amet officia ea dicta atque optio praesentium quam ipsum impedit perferendis ab. Fugiat?</p>
          
      </div>
      <div>
        <i class="fa-solid fa-file-pdf"></i>
          <h2>Documents</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, fuga. Nemo quasi natus nesciunt, eius nostrum, autem amet officia ea dicta atque optio praesentium quam ipsum impedit perferendis ab. Fugiat?</p>
          
      </div>
  </div>
          
  
      </div>
   </div>-->
   <!-- new feature -->
   <div id="container">
        <div class="header">
            <h1>Feature</h1>
        </div>
        <div class="sub-container">
          <a href="./phoneno.php">
            <div class="features">
                 <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/hursldrn.json"
    trigger="morph"
    style="width:250px;height:250px">
</lord-icon>
<div class="name">Contact</div>
                <div class="fabout">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum labore quam
                    reprehenderit
                    vitae aliquam dicta! </div>

               </a>
            </div>

            <div class="features">
                
                <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/lxotnbfa.json"
    trigger="hover"
    style="width:250px;height:250px">
</lord-icon>
<div class="name">images</div>
                <div class="fabout">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum labore quam
                    reprehenderit
                    vitae aliquam dicta! </div>

            </div>

            <div class="features">
            <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
            <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/ggqtvqxi.json"
    trigger="hover"
    style="width:250px;height:250px">
</lord-icon>
                
                <div class="name">Documents </div>
                <div class="fabout">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum labore quam
                    reprehenderit
                    vitae aliquam dicta! </div>

                <!-- <div class="social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div> -->
            </div>
        </div>
    </div>
    <script 
    src="./js/nav.js"></script>

    <!-- <script src="./js/home.js"></script> -->
    <!-- contact us -->
    <section class="contactus">
      <div class="content">
        <h2>Contact Us</h2>
      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, nulla! Quo modi iste est, labore eius, tempore optio ducimus, odit fuga possimus tempora nisi quam vero iure animi quas quos!</p>
      </div>
      <div class="innercontact">
         <div class="contactinfo">
           <div class="box">
            <div class="icon"><i><i class="fa-solid fa-address-book"></i></i></div>
              <div class="text">
                <h3>address</h3>
                <p>banjara hills road no.3 <br> Hyderabad , telangana <br> 5000034
              </p>
              </div>
            </div>
            <div class="box">
            <div class="icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
              <div class="text">
                <h3>phone</h3>
                <p>37289-231980-392
              </p>
              </div>
            </div>
            <div class="box">
              <div class="icon"><i class="fa-solid fa-envelope-circle-check"></i></div>
              <div class="text">
                <h3>email</h3>
                <p>maryamkhanita@gmail.com
              </p>
              </div>
            </div>
          </div>
          <div class="form">
            <form action="#">
              <h2>send message</h2>
              <div class="inputbox">
                <input type="text" name="" required="required">
                <span>full name</span>
              </div> 
              <div class="inputbox">
                <input type="email" name="" required="required">
                <span>email</span>
              </div> 
              <div class="inputbox">
               <textarea name="" required="required" ></textarea>
                <span>message</span>
              </div>
              <div class="inputbox">
                <input type="submit" name="" required="required">
                
              </div>
            </form>
          </div>
       </div>
    </section>
    <!-- footer  -->
    <footer class="footer">
    <div class="innerfooter">
      <div class="social">
        <ul>
        <li class="sociallink"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
        <li class="sociallink"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
        <li class="sociallink"><a href="#"><i class="fa-brands fa-telegram" ></i></a></li>
        <li class="sociallink"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
        </ul>
      </div>
      <div class="quicklink">
        <ul>
          <li class="quickitems"><a href="#">home</a></li>
          <li class="quickitems"><a href="#">features</a></li>
          <li class="quickitems"><a href="#">About</a></li>
          <li class="quickitems"><a href="#">contact</a></li>
          <li class="quickitems"><a href="#">logout</a></li>
        </ul>
      </div>
    </div>
    <div class="outerfooter">
      Copyright &copy; Web coding pro. All rights reserved
    </div>
    </footer>
</body>
</html>
