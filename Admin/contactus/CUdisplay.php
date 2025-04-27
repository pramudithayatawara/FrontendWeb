<?php
include '../../DB_Connection.php';
?>

<?php


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];


    //Correct the SQL syntax by using backticks around the table name
    $sql = "INSERT INTO contact (Name, Email, Mobile, Message)
                VALUES ('$name', '$email', '$mobile', '$message') ";


    // Execute the query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        //header('location:CUdisplay.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="./CUdisplay.css">
    <link rel="stylesheet" href="../style.css">
    <!-- js files -->
    <script src="./CUdisplay.js"></script>
</head>

<body style="overflow-X:hidden;height:auto;min-height:100vh;">
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
        <table style="width: 100%;">
            <tr>
                <!-- left navigation -->
                <?php require_once "../adminNavbar.php"; ?>

                <!-- content area -->
                <td id="dataDisplay">

                    <!-- display contact details -->
                    <div>

                        <!--Read data -->
                        <div class="displayArea">
                            <center>
                                <h1 id="top">Customer Care</h1>
                            </center>
                            <button id="add"><a href="../../contact/contactUs.php" style="color: #ffffff;">Add user</a></button>

                            <!-- display table -->
                            <table id="customers"  style="width: 100%;">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>

                                <?php
                                $sql = "SELECT id, name, email, mobile, message FROM contact";
                                $result = mysqli_query($conn, $sql);


                                // Check if the query returned any results
                                if ($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        //Fetch individual fields from the current row
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $email = $row['email'];
                                        $mobile = $row['mobile'];
                                        $message = $row['message'];

                                        // Output the data 
                                        echo '
                            <tr>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $email . '</td>
                                <td>' . $mobile . '</td>
                                <td>' . $message . '</td>
                                <td>
                                    <button id="upd" >
                                        <a href="update.php? updateid=' . $id . '" style="color: #ffffff;">Update</a>
                                    </button>
                                    <button id="del" onclick="displaydelete()">
                                        <a href="delete.php? deleteid=' . $id . '" style="color: #ffffff;">Delete</a>
                                    </button>
                                </td>
                            </tr>';
                                    }
                                } else {
                                    echo '<tr><td colspan="6">No records found.</td></tr>';
                                }
                                ?>
                            </table>
                        </div>

                    </div>
                </td>
            </tr>
        </table>
    </div>


</body>

</html>