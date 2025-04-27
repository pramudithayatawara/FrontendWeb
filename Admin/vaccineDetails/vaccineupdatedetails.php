<?php
// make db connection
require_once "../../DB_Connection.php";
?>

<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <!-- css files -->
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="vaccine.css">
  <script src="vaccine.js"></script>
</head>

<body style="overflow-X:hidden;height:auto;">
  <!-- headedr -->
  <div id="header" style="border: none;">
    <table style="width: 100%;">
      <tr>
        <td style="width: 25%">
          <img src="../images/allPages/logo.png" alt="campanyLogo" width="30%">
        </td>
        <td>
          <h1><span>V</span>AX-<span>P</span>ORTAL</h1>
        </td>
        <td style="width: 25%;">
          <button style="float: right;margin-right:40px;">Log out</button>
        </td>
      </tr>
    </table>
  </div>

  <div>
    <table style="width:100%; ">
      <tr>
        <!-- left navigation -->
        <?php require_once "../adminNavbar.php"; ?>

        <!-- content area -->
        <td id="dataDisplay">

          <?php

          if (isset($_POST["update"])) {

            // create date base connection
            require_once "../../DB_Connection.php";

            $id_num = $_POST["vid"];

            $sql = "SELECT * FROM vaccine WHERE vaccineID = $id_num";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

              $row = $result->fetch_assoc();





              echo "

<form method = 'POST' action ='updatevaccine.php' id='new_vaccine'>
<fieldset>
<legend>Update Vaccine Details</legend>
<marquee><h2 id= 'heading'>Manage Vaccine</h2></marquee>

<!--Enter new vaccine-->
ID  <br>
      <input type = 'text' name = 'vid'  value='" . $row['vaccineID'] . "'>
      <br><br>

    Vaccine Name  <br>
      <input type = 'text' name ='vname' placeholder='Enter Vaccine name' autocomplete='off'  value='" . $row['vaccName'] . "'>
      <br><br>

    Quantity <br>
      <input type = 'text' name ='vquantity' placeholder='Enter Quantity' autocomplete='off' value='" . $row['vacQty'] . "'>
      <br><br>

    Supplier Name  <br>
      <input type = 'text' name = 'vsname' placeholder='Enter supplier name' autocomplete='off'value='" . $row['supplierName'] . "'>
      <br><br>

    Country  <br>
      <input type = 'text' name = 'vcountry' placeholder='Enter country' autocomplete='off' value='" . $row['country'] . "'>
      <br><br>

    
    <input type = 'submit' name='update' value = 'Update' onclick = 'my_function5()'>
    

</form>
</fieldset>
</div>

";
            }
          }

          ?>



        </td>
      </tr>
    </table>
  </div>


</body>

</html>