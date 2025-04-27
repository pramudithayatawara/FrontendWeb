<?php
// make db connection
require_once "../../DB_Connection.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <style>
        #header h1>span {
            color: #313d97;
            font-size: 50px;
        }

        #header h1 {
            margin-top: 20px;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            letter-spacing: 5px;
            font-weight: bold;
        }

        .leftNavbtn {
            width: 100%;
            height: 40px;
            border: none;
            background-color: transparent;
            font-size: medium;
        }

        #dataDisplay td {
            padding-left: 10px;
        }

        #dataDisplay tr {
            height: 35px;
        }

        #dataDisplay tr button {
            width: 75px;
        }

        .editBtn {
            background-color: #37e93d;
        }

        .deleteBtn {
            background-color: #e93737;
        }

        #addNewUsers tr button {
            width: 200px;
            height: 30px;
            margin-left: 800px;
            margin-bottom: 25px;
            background-color: #313d97;
            color: white;
        }
    </style>
</head>

<body style="overflow-X:hidden;min-height:100vh;height:auto;">
    <!-- headedr -->
    <div id="header">
        <table style="width: 100%;">
            <tr>
                <td style="width: 25%">
                    <!-- logo image -->
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

    <!-- body area -->
    <div>




        <table style="width:100%; ">
            <tr>
                <!-- left navigation -->
                <?php require_once "../adminNavbar.php"; ?>

                <!-- content area -->
                <td id="dataDisplay">



                    <!-- display users details -->
                    <center>
                        <div>

                            <div id="addNewUsers">
                                <table>
                                    <tr>
                                        <td> <a href="./newUser.php"><button>Add New Users</button></a> </td>
                                    </tr>
                                </table>
                            </div>

                            <table style="width: 90%;">

                                <tr>
                                    <th>Employee Id</th>
                                    <th>Employee First Name</th>
                                    <th>Employee Last Name</th>
                                    <th>Contact Number</th>
                                    <th>E-mail</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                <tr>
                                    <td colspan='9'>
                                        <hr>
                                    </td>
                                </tr>

                                <?php
                                $display = "SELECT * FROM employee";
                                $result = $conn->query($display);

                                if ($result->num_rows > 0) {
                                    while ($rows = $result->fetch_assoc()) {
                                        echo "<tr>
                                    <td>" . $rows['employee_id'] . "</td>
                                    <td>" . $rows['employee_Fname'] . "</td>
                                    <td>" . $rows['employee_Lname'] . "</td>
                                    <td>" . $rows['contact_number'] . "</td>
                                    <td>" . $rows['e_mail'] . "</td>
                                    <td>" . $rows['age'] . "</td>
                                    <td>" . $rows['addres'] . "</td>
                                    <form method='POST' action='./update.php'>
                                        <input type='hidden' name='id' value='" . $rows['employee_id'] . "'>
                                    <td><input class='editBtn' type='submit' name='edit' value='Edit'></td>
                                    </form>
                                    <form method='POST' action='./deeteDatabase.php'>
                                            <input type='hidden' name='employee_id' value='" . $rows['employee_id'] . "'>
                                            <td><input class='deleteBtn' type='submit' name='delete' value='Delete'></td>
                                        </form>
                                    </tr>";
                                        echo "<tr><td colspan='9'><hr></td></tr>";
                                    }
                                }
                                ?>
                            </table>
                        </div>
                    </center>
                </td>
            </tr>
        </table>
    </div>

    <script>





    </script>

</body>

</html>