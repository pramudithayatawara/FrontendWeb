<style>
    button{
        cursor: pointer;
    }
    #nav{
        width: 20%;
        padding:40px 20px 0px 20px;
        border-right: 1px solid black;
        vertical-align:top;
    }
    body{
        background: linear-gradient(0deg, rgb(107, 118, 203) 0%,  rgba(195, 198, 225, 1) 100%);
        height: 100vh;
    }
</style>

<?php

echo '<td id="nav">
            <hr>
            <a href="./dashboard.php"><button class="leftNavbtn">Dashboard</button></a> <br>
            <hr>
            <a href="./manageUsers/manageUsers_staff.php"><button class="leftNavbtn">Manage Users</button></a> <br>
            <hr>
            <a href="./contactus/CUdisplay.php"><button class="leftNavbtn">Contact Us Details</button></a> <br>
            <hr>
            <a href="./dashboard.php"><button class="leftNavbtn">Manage Orders</button></a> <br>
            <hr>
            <a href="./booking/displayBookingDetails.php"><button class="leftNavbtn">Booking Details</button></a> <br>
            <hr>
            <a href="./dashboard.php"><button class="leftNavbtn">Manage Suppliers</button></a> <br>
            <hr>
            <a href="./dashboard.php"><button class="leftNavbtn">Setting</button></a> <br>
        </td>';

?>