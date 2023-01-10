<?php
session_start();
if(!isset($_SESSION['username'])){
?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<h1> THIS IS THE LOGGED IN PAGE </h1>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Name</span>
  <input id="namess" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
    <!-- Button trigger modal -->
<button onclick="store()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"  >
    Log Out

</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Logout Title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Logout</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
 function store(){
  var reallyLogout=confirm("Are you sure you want to logout?");
    if(reallyLogout){
      window.location.href='logout.php';
    }
}
</script>
</html>
<?php
} 

else{
?>
<h1> THIS IS NOT LOGGED IN PAGE </h1>
<?php
}
?>
