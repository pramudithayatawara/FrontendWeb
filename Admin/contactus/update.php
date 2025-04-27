<?php
include '../../DB_Connection.php';

$id = $_GET['updateid'];

$sql = "SELECT * FROM contact WHERE Id= '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$message = $row['message'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];


    $sql = "UPDATE contact SET
            name='$name',
            email='$email', 
            mobile='$mobile', 
            message='$message'  WHERE id=$id";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "updated successfully";
        header('location:CUdisplay.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <!-- add boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CUdisplay.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./contactUs.css">
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
                        <div >



                        <div class="main">
        <div class="contact">
            <!-- update form-->
            <div class="Cform">
                <fieldset>
                    <legend>Fill the form</legend>
                    <form class="set" name="myForm" action="./pluggins/CUdisplay.php" method="post" onsubmit="return validateForm()">
                        <b>Full Name:</b><br />
                        <input type="text" name="name" placeholder="Full Name" autocomplete="off"><br /><br />

                        <b> E-mail:</b><br />
                        <input type="email" name="email" placeholder="abc@gmail.com" autocomplete="off"><br /><br />

                        <b>Mobile Number:</b><br />
                        <input type="phone" name="mobile" placeholder="07x-xxx-xxxx" autocomplete="off"><br /><br />

                        <b>Enter Your Message:</b><br />
                        <textarea name="message" rows="8" cols="40" required></textarea><br /><br />

                        <!--update button-->
                        <div class="SRbtn">
                            <button id="submitBtn1" type="submit" value="Submit" name="submit" onclick="myfunction()">Update</button>
                            <br><br>


                </fieldset>
                </form>
            </div>
        </div>
    </div>



</body>
<!--footer-->
<footer class="myfooter">
    &copy; 2024 Copyright Reserved - Vax-Portal
    <small>viewportaliwt@gmail.com</small>
</footer>

</html>