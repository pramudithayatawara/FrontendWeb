<!-- include header file -->
<?php include("./header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>Create New Vaccine</title>
<!--link css file-->
<link rel= "stylesheet" href="vaccine.css" >
<script src = "vaccine.js"></script>

</head>

<body style="height: auto;">

<form method = "post" action = "crud.php" id = "new_vaccine">
<fieldset>
  
<marquee><h2 id= "heading">Manage Vaccine</h2></marquee>
<hr id = "hrline">

<div class = "main_img">
<div class = "background_border">

<!--Enter new vaccine-->
    ID  <br>
      <input type = "text" name = "vid">
      <br><br>

    Vaccine Name  <br>
      <input type = "text" name = "vname" placeholder="Enter Vaccine name" autocomplete="off">
      <br><br>

    Quantity <br>
      <input type = "text" name = "vquantity" placeholder="Enter Quantity" autocomplete="off">
      <br><br>

    Supplier Name  <br>
      <input type = "text" name = "vsname" placeholder="Enter supplier name" autocomplete="off">
      <br><br>

    Country  <br>
      <input type = "text" name = "vcountry" placeholder="Enter country" autocomplete="off">
      <br><br>

    

    <input type = "submit" value = "Submit" onclick = "my_function2()">
    <input type = "reset" value = "Reset" onclick = "my_function1()">

</div>
</div>


</fieldset>
</form>


</body>
</html>

<div>
<!-- include footer file -->
 <?php include("./footer.php") ?>
</div>