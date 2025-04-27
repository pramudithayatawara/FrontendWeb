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
  <link rel="stylesheet" href="./vaccine.css">

  <!--Css part to table -->


</head>

<body style="overflow-X:hidden;height:auto;">
  <!-- headedr -->
  <div id="header">
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

          <form method="post" action="crud.php" id="new_vaccine">
            <fieldset>

              <marquee>
                <h2 id="heading">Manage Vaccine</h2>
              </marquee>
              <hr id="hrline">

              <div class="main_img">
                <div class="background_border">

                  <!--Enter new vaccine-->
                  

                  Vaccine Name <br>
                  <input type="text" name="vname" placeholder="Enter Vaccine name" autocomplete="off">
                  <br><br>

                  Quantity <br>
                  <input type="text" name="vquantity" placeholder="Enter Quantity" autocomplete="off">
                  <br><br>

                  Supplier Name <br>
                  <input type="text" name="vsname" placeholder="Enter supplier name" autocomplete="off">
                  <br><br>

                  Country <br>
                  <input type="text" name="vcountry" placeholder="Enter country" autocomplete="off">
                  <br><br>



                  <input type="submit" value="Submit" onclick="my_function2()">
                  <input type="reset" value="Reset" onclick="my_function1()">

                </div>
              </div>


            </fieldset>
          </form>

        </td>

      </tr>
    </table>
  </div>


</body>

</html>