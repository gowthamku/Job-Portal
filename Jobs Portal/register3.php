<?php


$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database);


if($conn->connect_error){
    die("connection failed:".$conn->connect_error);

}
echo"";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];



    $sql="INSERT INTO `users`( `Name`, `email`, `password`,`phone_no`) VALUES ('$name','$email','$password')";
    if(mysqli_query($conn,$sql)){
        echo "Record inserted successfully.";

    }
    else{
        echo "ERROR: could not ale to execute $sql." .mysqli_error($conn);
    }
}

 ?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset ="UTF-8">
    <meta http-equiv="x-UA-compatible" content="IE=edge">
   
    <meta name ="viewport" content="width=device-width,intial-scale= 1.0">
    <!-- css bootstramp -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
       body{
        background-image: url('backimag.jpg');
        background-size:cover;


        
       }
       form{
            background-color:#fff;
            margin-left:30em;
            margin-right:10em;
            margin-top:6em;
            padding: 30px;
            box-shadow:10px 10px 8px 10px #888888;
        }
    </style>

    <tile>Register</title>
</head>
<body>
    
    <div class="container">
    <form method="POST" >
  <div class="form-group">
    <label for="exampleInputEmail1">FULL NAme</label>
    <input type="name" class="form-control" id="exampleInputFULL NAME" name="name" >

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email addres</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=" email">
    <div id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">phonenumber</label>
    <input type="password" class="form-control" id="exampleInputphonenumber">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name='password' >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">confirm passpord</label>
    <input type="password" class="form-control" id="exampleInputconform passpord"  >
  </div>
  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary" namme="submit">Submit</button>
  <br>
  Already egister?<a href ="login.php">Login</a>
</form>
    </div>
    
</body>

</html>






