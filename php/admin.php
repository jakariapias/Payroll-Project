<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/style-2.css">
    <link rel="icon" href="images/1.png" type="image/gif/png">


    <style media="screen">


body {
            /* Set background image */
             /* Replace 'your-image-url.jpg' with the path to your image */
            
            /* Set background size and repeat properties */
            background-size: cover; /* Adjust as needed: 'cover', 'contain', or specific values like '100% 100%' */
            background-repeat: no-repeat; /* 'repeat', 'repeat-x', 'repeat-y', 'no-repeat' */
            
        
            background-color: #f0f0f0; 
            
            
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif; /* Choose your preferred font */
        }

      div{
        /* border: 2px solid black; */
        width: 400px;
        padding: 50px;
        margin-left: 540px;
        margin-top: 200px;
        
        

        
      }
      #firstname,#lastname,#number,#email,#password{
        width: 300px;
        padding: 5px;
        margin-top: 5px;
      }
      label{
        font-weight: bold;
        font-size: 18px;
      }
      form{
        margin-left: 30px;
      }
      #submit{
        margin-left: 100px;
        width: 150px;
        padding: 6px;
        font-size: 18px;
        font-weight: bold;
        background-color: blue;
        color: white;
        border-radius: 20px;
        border: 1px solid blue;
      }

    

    </style>
  </head>
  <body class="registration-form">
    
 <section id="registration-form" >
 <div style="background-color: rgb(194, 138, 138);">
      <form class="" action="admin.php" method="post">
      <h2 style="color:white; text-align:center" >Registration Form</h2>
        <label for="">ID</label><br>
        <input id="id" type="text" name="id" value="" placeholder="Enter Your First Name" required>
        <br> <br>
        
        <label for="">Username</label><br>
        <input id="username" type="text" name="username" value="" placeholder="Enter your username" required><br> <br>
        <label for="">Set Password</label>
        <input id="password" type="password" name="password" value="" placeholder="Set a Password" required><br><br>
        <input id="submit" type="submit" name="submit" value="Submit"><br>
      </form>
    </div>
 </section>


    
    <?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="payroll";

    $conn=mysqli_connect($host,$user,$pass,$db);

    if (isset($_POST['submit'])) {
      $id=$_POST['id'];
      $username=$_POST['username'];
      $password=$_POST['password'];

      $sql="INSERT INTO admin(id,Username,Password)
       values('$id','$username','$password')";
       $query=mysqli_query($conn,$sql);
       if ($query) {
         ?>
            <script type="text/javascript">
              alert('Successfully Registered');

            </script>
         <?php
         // code...
       }
    }

     ?>

  </body>
</html>