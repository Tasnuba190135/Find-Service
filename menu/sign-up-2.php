<!-- Issue: birthday range can be greater than current date -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>Sign up</title>

    <!-- Icons font CSS-->
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


    <!--For navbar-->
    <link rel="stylesheet" href="../css/styles.css">
    <!--For awesome font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- regForm CSS-->
    <link href="../css/logInSignUp.css" rel="stylesheet" media="all">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Nav bar started -->
    <div class="container">
        <div class="nav_logo">
            <img class="logo" src="../images/logo.png" alt="logo">
        </div>
        <div class="nav">
            <ul class="nav_links_ul">
                <li class="nav_links_li"><a href="../index.html">Home</a></li>
                <li class="nav_links_li"><a href="find_services.php">Find Services</a></li>
                <li class="nav_links_li"><a href="post_a_service.php">Post a service</a></li>
                <li class="nav_links_li"><a href="about.php">About</a></li>
                <li class="nav_links_li"><a href="contact_us.php">Contact us</a></li>
            </ul>
        </div>
        <div class="nav">
            <ul class="nav_links_ul my-account">
                <li class="nav_links_li"><a href="my_account_1.php">My account</a></li>
            </ul>
        </div>
    </div>
    <!-- Nav bar finished -->


    <div>
        <h1 style="text-align: center; padding:10px 0 10px 0; color: grey;">Sign up</h1>
    </div>



    <!-- form start -->
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <!-- <h2 class="title">Sign up</h2> -->
                    <p><i>Field marked with red <b style="color: red;">*</b> sign must fillup</i></p><br><br>
                    <form action="sign-up-3.php" method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                            <label class="label"><i style="color: red;">*</i> Full name</label>
                            <input class="input--style-4" type="text" name="full_name" required>
                        </div>

                        <div class="input-group">
                            <label class="label"><i style="color: red;">*</i> Gender</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Male
                                    <input type="radio" checked="checked" name="gender" value="Male">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" value="Female">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Other
                                    <input type="radio" name="gender" value="Other">
                                    <span class="checkmark"></span>
                                </label>
                                <!-- <label class="radio-container m-r-45">Female
                                    <input type="radio" checked="checked" name="gender">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container m-r-45">Other
                                    <input type="radio" checked="checked" name="gender">
                                    <span class="checkmark"></span>
                                </label> -->

                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label"><i style="color: red;">*</i> Phone Number</label>
                            <input class="input--style-4" type="number" type="tel" name="phone" required>
                        </div>
                        <div class="input-group">
                            <label class="label"><i style="color: red;">*</i> Birthday</label>
                            <div class="input-group-icon">
                                <input class="input--style-4 js-datepicker" id="dt" type="text" name="birthday"
                                    min='01-01-1899' max="12-12-2021" required>
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label"><i style="color: red;">*</i> Profession</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="profession" required>
                                    <!-- <option disabled="disabled" selected="selected" value="None">Choose option</option> -->
                                    <option>Tutor</option>
                                    <option>Electrician</option>
                                    <option>Plumber</option>
                                    <option>Mechanics</option>
                                    <option>Computer technician</option>
                                    <option>Others</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <label class="label"><i style="color: red;">*</i> Picture</label>
                            <input type="file" name="my_file" id="my_file" />
                        </div>

                        <div class="input-group">
                            <label class="label"><i style="color: red;">*</i> About me</label>
                            <input class="input--style-4" type="text" name="about_me" required>
                        </div>
                        
                        <div class="input-group">
                            <label class="label"><i style="color: red;">*</i> Email</label>
                            <input class="input--style-4" type="email" name="email" required>
                        </div>
                        <div class="input-group">
                            <label class="label"><i style="color: red;">*</i> Password</label>
                            <p>-Must include a capital letter alphabet, a number and minimum of 6 character length</p>
                            <input
                                title="Password must contain at least 6 characters, including UPPER/lowercase and numbers"
                                class="input--style-4" type="password" name="password" required
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                            <!-- May require for further Op
                                https://www.the-art-of-web.com/javascript/validate-password/?hilite=%7Bwords%7D 
                            -->
                        </div>

                        <!-- <div class="input-group">
                            <label class="label">Preferred locations</label>
                            <input class="input--style-4" type="text" name="prefer_location" required>
                        </div> -->
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                            <li class="nav_links_li"><a href="../index.html">Return to home</a></li>
                            <!-- <button class="btn btn--radius-2 btn--radius" type="submit">Return to home</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- form finish -->

    <!-- foooter -->
    <footer class="footer-1">
        <p>Copyright
            <script>document.write(new Date().getFullYear())</script> &copy; <a href="#">Find Service</a>
        </p>
    </footer>
    <!-- End of Footer-->




    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../js/global.js"></script>
    

</body>

</html>
<!-- end document-->