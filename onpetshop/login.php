<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <!-- <title>Neumorphism Login Form UI</title> -->
      <link rel="stylesheet" href="stylelog.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <form method="POST">
      <div class="content">
         <div class="text">
            Login Form
         </div>
         <form action="#">
            <div class="field">
               <input type="text" name="username" required >
               <span class="fas fa-user"></span>
               <label>Email or Phone</label>
            </div>
            <div class="field">
               <input type="password" name="password" required >
               <span class="fas fa-lock"></span>
               <label>Password</label>
            </div>
            <div class="forgot-pass">
               <a href="#">Forgot Password?</a>
            </div>
            <!-- <button>Sign in</button> -->
            <input type="submit" name="submit" value="submit">
            <div class="sign-up">
               Not a member?
               <a href="custreg.php">signup now</a>
               <a href="home.html">Return Home</a>

            </div>
         </form>
      </div>
</form>
      <?php
   session_start();
    include('DatabaseConnection.php');
    if (isset($_POST['submit'])) 
    {
        $username  = $_POST['username'];
        $password = $_POST['password'];
    
        $qry = "select * from login where username='$username' and  password='$password'";
        // echo $qry;
        $result = mysqli_query($con, $qry);
        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_array($result);
            
            $_SESSION['username']=$row['username'];
            $_SESSION['password']=$row['password'];

            $_SESSION['usertype']=$row['usertype'];
            if($row['usertype']=='admin')
            {
         
               echo '<script>
					window.alert("Registered successfully!")
					window.location.href="adminhome.php";
				</script>';
            }
            
            else if($row['usertype']=='user')
            {
               echo '<script>
					window.alert("REgistered syccessfully!")
					window.location.href="custhome.php";
				</script>';
        } 
        else
         {
            echo '<script>
					window.alert("Your not registered user!")
					window.location.href="index.php";
				</script>';
         }
      }
    }
      ?>
   </body>
</html>