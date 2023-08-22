<?php
    session_start();

    if (isset($_SESSION['customer'])){
        header('Location:my-account.php');
    }
    include 'config/db.php';
    date_default_timezone_set('asia/dhaka');

    if (isset($_POST['login'])){
         $email = $_POST['email'];
         $password = $_POST['password'];

        if (!empty($email) && !empty($password)){
            $sql = "SELECT * FROM customers WHERE `email` = '$email' AND `password`= '$password' AND `status` = 1";
            $data = $db->query($sql);
            if ($data->num_rows > 0 ){

                $_SESSION['customer'] = $data->fetch_assoc();

                header('Location:my-account.php');

            }else{
                $message = "Email or Passwor Invalid";
            }
        }else{
            $message = "Email or Password can not be empty";
        }

    }


    include 'includes/header.php';

    
?>



      <div class="main">
         <div class="col-md-12">
            <div id='frame'>
               <div class='search'><h1>Sign In Here</h1>
                   <p style="color: red; margin-left: 15px">

                   <?php
                   if (isset($message)){
                       echo $message;
                   }
                   ?>
                   </p>
                  <form method="POST" action="">
                     <div class="content">
                       <input type="text" class="box" id="username" name="email" placeholder="Enter Email"/>
                       <input type="password" class="box" id="password" name="password" placeholder="Enter Password"/> 
                       <input type="submit" name="login" value="Login">
                       <a href="register.php">Don't have account?</a>
                      </div>
                  </form>
               </div>
            </div>  
                                
         </div> 
      </div>
 
<?php include 'includes/footer.php';?>