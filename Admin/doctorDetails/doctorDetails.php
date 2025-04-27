<!-- include header file -->
<?php include("../../DB_Connection.php") ?>

<!-- Update details -->
<?php



if (isset($_POST["update"])) {
    $email = $_POST["email"];
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $pNumber = $_POST["pNum"];
    $address = $_POST["address"];

    $updateDetails = "UPDATE doctor
        SET First_Name = '$fName',
        Last_Name = '$lName',
        Contact_Number = '$pNumber',
        Addres = '$address' 
        WHERE E_mail = '$email'";

    if (mysqli_query($conn, $updateDetails)) {
        echo "<script>
                    alert ('Data update successfull...');
                </script>";
    } else {
        echo "<script>
                    alert ('Data update unsuccessfull...');
                </script>";
    }
}

?>

<!-- Delete details -->
<?php

if (isset($_POST["delete"])) {
    $email = $_POST["email"];

    $deleteDetails = "DELETE FROM doctor WHERE E_mail = '$email'";

    if (mysqli_query($conn, $deleteDetails)) {
        echo "<script>
                alert ('Data delete successfull...');
            </script>";
    } else {
        echo "<script>
                alert ('Data delete unsuccessfull...');
            </script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./doctorDetails.css">
    <!-- js files -->
    <script src="./CUdisplay.js"></script>
</head>

<body style="overflow-X:hidden;height:auto;">

    <script>
        alert("Contact Us page loaded!");
        document.write(Date());
    </script>


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
    <!-- end header -->

    <div>
        <table style="width:100%; ">
            <tr>
                <!-- left navigation -->
                <?php require_once "../adminNavbar.php"; ?>

                <!-- content area -->
                <td id="dataDisplay">

                    <!-- display contact details -->
                    <div>

                        <!--Read data -->

                        <?php

                        // select doctor details

                        $selectData = "SELECT * FROM doctor WHERE E_mail = 'savindakusal@gmail.com' ";
                        $result = mysqli_query($conn, $selectData);

                        if ($result->num_rows > 0) {
                            $rows = $result->fetch_assoc();

                            //Display doctor details 

                            echo "
<Div class='manage-form'>
    <form action='#' method='post'>
    <table>
        <tr>
        <td> <label for='fName'> First Name : </label> </td>
        <td> <input  class='text' type='text' name = 'fName' value = " . $rows['First_Name'] . "> </td> <br>
        </tr>
        <tr>
        <td> <label for='lName'> Last Name : </label> </td>
        <td> <input  class='text' type='text' name = 'lName' value = " . $rows['Last_Name'] . ">  </td><br>
        </tr>
        <tr>
        <td> <label for='email'> email : </label> </td>
        <td> <input  class='text' type='text' name = 'email' value = " . $rows['E_mail'] . " readonly> </td> <br>
        </tr>
        <tr>
        <td> <label for='pNum'> Phone Number : </label> </td>
        <td> <input  class='text' type='text' name = 'pNum' value = " . $rows['Contact_Number'] . "> </td> <br>
        </tr>
        <tr>
        <td> <label for='address'> Address : </label> </td>
        <td> <input  class='text' type='text' name = 'address' value = " . $rows['Addres'] . "> </td> <br>
        </tr>
        <tr>
        <td>
        <td> <input class='btn' type='submit' name = 'update' value = 'update'>
        <input class='btn' type='submit' name = 'delete' value = 'delete'> 
        </td>
        </tr>
    </table>
    </form>
</Div>

";
                        }

                        ?>


                    </div>
                </td>
            </tr>
        </table>
    </div>


</body>

</html>