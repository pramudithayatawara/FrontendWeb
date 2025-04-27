<!DOCTYPE html>
<html>

<head>
    <title>Vax-Portal</title>
    <!-- add boostrap CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    <!-- fontawsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- css files -->
    <link rel="stylesheet" href="./pluggins/style.css">
    <!-- aos animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<style>

</style>

<body>

    <!-- start headre file -->
    <div id="headerArea">

        <table style="width: 100%;">
            <tr>
                <td style="width: 15%;">
                    <!-- add logo  -->
                    <img src="./images/allPages/logo.png" alt="logo" width="50%" height="auto">
                </td>
                <td style="width: 70%;">
                    <div>
                        <table>
                            <tr>
                                <h3 class="title"><span>V</span>AX-<span>P</span>ORTAL</h3>
                            </tr>
                            <tr>
                                <nav>
                                    <a href="./index.php">
                                        <h6>Home</h6>
                                    </a>
                                    <a href="./contact/contactUs.php">
                                        <h6>Customer Care</h6>
                                    </a>
                                    <a href="./aboutus.php">
                                        <h6>About Us</h6>
                                    </a>
                                    <a href="./Booking/booking.php">
                                        <h6>Booking</h6>
                                    </a>
                                    <a href="./signInForm.php">
                                        <h6>Sign Up</h6>
                                    </a>
                                </nav>
                            </tr>
                        </table>
                    </div>
                </td>
                <td class="logo">
                    <a href="./Admin/loginForm.php"><button class="btn">
                            <h4><i class="fa-solid fa-user"></i></h4>
                        </button></a>
                    <button class="btn">
                        <h4><i class="fa-solid fa-cart-shopping"></i></h4>
                    </button>
                </td>
            </tr>
        </table>


    </div>
    <!-- end the header area -->


    <!-- main content -->
    <div style="width:100%;" id="mainCon">

        <!-- carousel start -->
        <table style="margin-top: 30px;">
            <tr>
                <td>
                    <div style="margin:50px 0px 0px 50px;" data-aos="fade-right">
                        <h1 style="color: #313d97;"><b>With Vaccination We Can End This Pandemic</b></h1>
                        <div style="padding: 0px 25px;">
                            <h3>With vaccination,We can reduce the number of cases of covid-19 transmission and can create safe comunity</h3>
                            <h4>With vaccination,We can reduce the number of cases of covid-19 transmission and can create safe comunity
                                With vaccination,We can reduce the number of cases of covid-19 transmission and can create safe comunity</h4>
                        </div>
                    </div>
                </td>
                <td>
                    <div data-aos="fade-left" data-aos-offset="600" data-aos-easing="ease-in-sine" style="display:flex;margin-right:-100px;">
                        <img src="./images/allPages/carousel1.png" alt="" width="auto" height="80%">
                        <img src="./images/allPages/carousel2.png" alt="" width="auto" height="80%">

                    </div>
                </td>
            </tr>
        </table>
        <!-- carousel end -->


        <!-- featured area star -->
        <div id="featured_area">
            <h4 class="topic">Feacured Vaccines</h4>
            <table>
                <tr>
                    <td style="text-align: center;"><img src="./images/allPages/feature1.jpg" alt=""></td>
                    <td class="description">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nostrum, repellat veritatis placeat voluptas veniam assumenda architecto, et ad distinctio tempore officia totam, praesentium voluptatibus quisquam deserunt dolorum consequatur expedita.</p>
                    </td>
                    <td class="price">
                        <h5>Rs: 3500/=</h5>
                        <h6>Qty-1</h6>
                    </td>
                    <td class="Btn">
                        <button type="button">Buy Now</button><br>
                        <button type="button">Book Now</button><br>
                        <button type="button" class="add_cart">Add to Cart</button>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;"><img src="./images/allPages/feature2.jpg" alt=""></td>
                    <td class="description">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nostrum, repellat veritatis placeat voluptas veniam assumenda architecto, et ad distinctio tempore officia totam, praesentium voluptatibus quisquam deserunt dolorum consequatur expedita.</p>
                    </td>
                    <td class="price">
                        <h5>Rs: 3500/=</h5>
                        <h6>Qty-1</h6>
                    </td>
                    <td class="Btn">
                        <button type="button">Buy Now</button><br>
                        <button type="button">Book Now</button><br>
                        <button type="button" class="add_cart">Add to Cart</button>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;"><img src="./images/allPages/feature3.jpg" alt=""></td>
                    <td class="description">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nostrum, repellat veritatis placeat voluptas veniam assumenda architecto, et ad distinctio tempore officia totam, praesentium voluptatibus quisquam deserunt dolorum consequatur expedita.</p>
                    </td>
                    <td class="price">
                        <h5>Rs: 3500/=</h5>
                        <h6>Qty-1</h6>
                    </td>
                    <td class="Btn">
                        <button type="button">Buy Now</button><br>
                        <button type="button">Book Now</button><br>
                        <button type="button" class="add_cart">Add to Cart</button>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;"><img src="./images/allPages/feature1.jpg" alt=""></td>
                    <td class="description">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem nostrum, repellat veritatis placeat voluptas veniam assumenda architecto, et ad distinctio tempore officia totam, praesentium voluptatibus quisquam deserunt dolorum consequatur expedita.</p>
                    </td>
                    <td class="price">
                        <h5>Rs: 3500/=</h5>
                        <h6>Qty-1</h6>
                    </td>
                    <td class="Btn">
                        <button type="button">Buy Now</button><br>
                        <button type="button">Book Now</button><br>
                        <button type="button" class="add_cart">Add to Cart</button>
                    </td>
                </tr>
                <tr style="border: none;">
                    <th class="Btn" colspan="4">
                        <button id="view_more_btn">View More</button>
                    </th>
                </tr>
            </table>
        </div>
        <!-- featured area end -->

        <!-- start about numbers of users  -->
        <div id="users">
            <center>
                <table>
                    <tr>
                        <td colspan="4">
                            <h6>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias voluptate perferendis ipsam, vero modi laborum ratione obcaecati? Et ipsum consequatur velit tempore ipsa, minus repellendus iure, provident, nobis sequi quos?Lorem ipsum dolor sit amet consectetur.</h6>
                            <h6>adipisicing elit. Alias voluptate perferendis ipsam Et ipsum consequatur velit tempore ipsa, minus repellendus iure, provident, nobis sequi quos?Lorem ipsum dolor sit amet consectetur.</h6>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h1><i class="bi bi-person-circle"></i></h1>
                            <h3>15,000+</h3>
                            <h4>viwers</h4>
                        </td>
                        <td>
                            <h1><i class="bi bi-person-circle"></i></h1>
                            <h3>8,000+</h3>
                            <h4>Users</h4>
                        </td>
                        <td>
                            <h1><i class="bi bi-person-circle"></i></h1>
                            <h3>50+</h3>
                            <h4>Verified Vaccines Companies</h4>
                        </td>
                        <td>
                            <h1><i class="bi bi-person-circle"></i></h1>
                            <h3>1000+</h3>
                            <h4>Experienced Doctars & Staff</h4>
                        </td>
                    </tr>
                </table>
            </center>
        </div>
        <!-- start about numbers of users  -->



    </div>



    <!-- start footer area -->
    <div id="footer">
        <!-- footer start -->
        <table style="width: 100%;">
            <tr>
                <td>
                    <h5>Contact Us</h5>
                    <div style="margin-left: 20px;">
                        <h6>No:78,Kandy Road, malabe</h6>
                        <h6>+94 77 890 7002</h6>
                        <h6>viewportaliwt@gmail.com</h6>
                    </div>
                </td>
                <td>
                    <h5>Follow Us</h5>
                    <div class="icons" style="font-size: 25px;color:white; padding:0px 25px;">
                        <div class="col"><i class="fa-brands fa-facebook"></i></div>
                        <div class="col"><i class="fa-brands fa-twitter"></i></div>
                        <div class="col"><i class="fa-brands fa-linkedin"></i></div>
                        <div class="col"><i class="fa-solid fa-g"></i></i></div>
                    </div>
                    <h5>Payement Methods</h5>
                </td>
            </tr>
        </table>
    </div>

    <!-- end footer area -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>