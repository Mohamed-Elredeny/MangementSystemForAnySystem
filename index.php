<?php include('php/PurePhp.php'); ?>

<!DOCTYPE html>
<html>
  <?php include($head); ?>


<body>
	
<div class="container">
<h1>login</h1>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<a href="html/temps.php"><input type="button" value="Create System"></a>

<a href="html/managementPage.php"><input type="button" value="Manage System"></a>


		

</body>
</html>