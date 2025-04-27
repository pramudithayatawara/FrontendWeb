<?php
// make db connection
require_once "../DB_Connection.php";


?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <style>
        /* header styles --- start----*/
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

        body {
            background: linear-gradient(0deg, rgb(107, 118, 203) 0%, rgba(195, 198, 225, 1) 100%);
            height: 100vh;
        }

        /* header styles --- end----*/


        #dashboard {
            width: 30%;
            margin-top: 5%;
        }

        #dashboard button {
            width: 300px;
            height: 50px;
            margin-top: 20px;
            border-radius: 10px;
            border: 1px solid blue;
            box-shadow: 1px 1px 5px 2px #313d97cb;
            transition: 0.3s;
        }
        #dashboard button:hover{
            scale: 1.02;
        }
    </style>
    <script src="../pluggins/dashboard.js"></script>
    <!-- fontawsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
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

    <center>
        <div id="dashboard">
            <a href="./manageUsers/manageUsers_staff.php"><button>
                    <h3> Manage Users </h3>
                </button></a> <br>
            <a href="./contactus/CUdisplay.php"><button>
                    <h3> Contact Us Details </h3>
                </button></a> <br>
            <a href="./vaccineDetails/readvaccine.php"><button>
                    <h3> Manage Vaccine Details </h3>
                </button></a> <br>
                <a href=""><button>
                    <h3> Manage Orders </h3>
                </button></a> <br>
                <a href="./booking/displayBookingDetails.php"><button>
                    <h3> Booking Details </h3>
                </button></a> <br>
            <a href=""><button>
                    <h3> Manage Doctors </h3>
                </button></a> <br>
            <a href=""><button>
                    <h3> Manage Suppliers </h3>
                </button></a> <br>
            
        </div>
    </center>

</body>

</html>