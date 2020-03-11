<!DOCTYPE html>
<html>
<?php include ('C:\xampp1\htdocs\php_course\DrRedaProject\head.php'); ?>
<body>
<div class="container mt-3">
 <!-- for search -->
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
 <!-- end of search -->


<!-- table -->
   <table class="table table-hover table-bordered " style="position: absolute;left: 350px; width: 800px;top:100px;">
    <thead>
      <tr>
        <th>Number</th>
        <th>Name</th>
        <th>Price</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>-</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>-</td>
      </tr>
       <tr class="table-active">
        <td colspan="2">Total Price</td>
        
        <td>20$</td>
        <td><input type="button" name="reset" value="Reset"></td>
      </tr>
    </tbody>
  </table>
  <!-- end of the table -->


<!-- dropDownList -->
<div id="accordion" style="width: 300px;position: absolute;left: 20px;top:100px;">

  <div class="card" >
    <div class="card-header" id="car1">
      <a class="card-link" data-toggle="collapse" href="#collapseOne" id="m">
        Collapsible Group Item #1 
      </a>
      <input type="text" name="edit1" style="display: none;position: relative;left: 40px;" id="m2">
      <input type="submit" name="edit1" value="Save" style="display: none;position: relative;left: 100px;top:10px;" id="m1" onclick="saveFunction()">
      

      <input type="button" name="edit" value="Edit" style="position: relative;margin-left: 15px;" onclick="editFunction()" id="m3">
    </div>


    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
        mohamed 
      </div>
    </div>

  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        ali
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
        ali..
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        Collapsible Group Item #3
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
        x rami..
      </div>
    </div>
  </div>

</div>
<!-- end of dropDownList -->




<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#accordion div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

function editFunction(){
  document.getElementById("m").style.display = "none";
  document.getElementById("m1").style.display="block";
  document.getElementById("m2").style.display="block";
   document.getElementById("m3").style.display="none";
   document.getElementById("car1").style.height="100px";
}
function saveFunction(){
  document.getElementById("m").style.display = "block";
  document.getElementById("m1").style.display="none";
  document.getElementById("m2").style.display="none";
  document.getElementById("m3").style.display="block";
  document.getElementById("m3").style.left="200px";
  document.getElementById("m3").style.bottom="25px";
  document.getElementById("car1").style.height="60px";
}
</script>

</body>
</html>