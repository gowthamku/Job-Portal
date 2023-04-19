
<!DOCTYPE html>

   <html lang="eng">
<?php include 'config.php' ?>


  <head>
    <meta charset ="UTF-8">
    <meta http-equiv="x-UA-compatible" content="IE=edge">
   
    <meta name ="viewport" content="width=device-width,intial-scale= 1.0">
    <link href="style\style.css">
    <!-- css bootstramp -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      
      .navbar {
         overflow:hidden;
         background-color:#333;
         position:fixed;
         top:0;
         width:100%;
      }
      h1,
      p{
        color:#fff;
      }
      .jobs{
        border:1px solid black;
        box-shadow:5px 5px 4px 5px grey;
        margin:10px;
        padding:10px;
      }
          

      


    

    </style>
</head>
<body>
  <div class="row"> 
    <div class="col-32">


    <div class="jumbotron jumbotron-fluid" style="background-image: url('backimage.jpg');background-size:cover;">

      <div class="container">
      <h1 class="display-4">job portal</h1>
      <p class="lead">Best Job available matching your skills</p>
        


      </div>

    </div>

  </div> 
  <div class ="row">
    <?php
      $sql="SELECT  cname,position,CTC from jobs";
      $result=mysqli_querry($conn,$sql);
      
      if($result->num_rows>0){
       while($rows=$result->fetch_assoc()){
         echo '
          <div class="col-md-4">

             <div class="jobs">
             <h3 style="text-align: center;">'.$rows['position'].'</h3>
             <h4 style="text-align: center;">'.$rows['cname'].'</h4>
             <p style="color: black:text-align:justify;">'.$rows['jdesc'].'</p>
             <p style="color: black;"><b>skills Required:</b>'.$rows['skills'].'</p>
             <p style="color: black;">CTC:<b></b>'.$rows['CTC' ].'</p>
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</label>
             <button type="button" class="btn btn-primary">APPLY Now</button>

            

             </div>
          </div>';
       }}
       
    ?>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">APPLY FOR JOB</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Apply for</label>
            <input type="text" class="form-control" name="name">
            
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="name">
            
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Year Passed</label>
            <input type="text" class="form-control" name="name">
            
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</label>
        <button type="button" class="btn btn-primary">APPLY</button>
        </form>
      </div>
    </div>
  </div>
</div>


  


<!-- 
<div class="content" >
<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  <!-- <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
  
</p> --> 
<!-- <div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname" >

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Position</label>
    <input type="password" class="form-control" id="exampleInputPosition" name="position">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label"  >Job Description</label>
    <textarea name="" id=""  cols ="30" rows="10"class="form-control2" name="jdesc"  ></textarea>
    

  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC"  name="CTC">

  </div>
  
  <div class="mb-3">
    <label for="skills" class="form-label">skills required</label>
    <input type="text" class="form-control" id="skills"  name="skills">

  </div>
  
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
  </div>
</div> -->
<!-- <div class="containerfluid">

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="   position: fixed; ">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav> -->
<!-- <div>
<img src="image2.jpg" alt="" class="" width="1300" height="150" > -->

<!-- </div>


</div>   -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  

</body>
</html>

