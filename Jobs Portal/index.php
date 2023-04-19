<?php include 'header.php' ?>
<div class="content" >
<p>
  <!-- <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
  
</p>
<div class="collapse" id="collapseExample">
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
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $sql="select cname,position,CTC From jobs";
   $result=mysqli_query($conn,$sql);
   $i=0;
   if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
      echo "
    <tbody>
      <tr>
   


          <td>" .++$i."</td>
          <td>".$row['cname']."</td>
          <td>".$row['position']."</td>
          <td>".$row['CTC']."</td>
      </tr>";

    
   }}
   else{
    echo"";
   }

   ?>
  
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
<!-- BOOTSTRAP SCRIPt below link is a bundle -->
           
</body>

</html>