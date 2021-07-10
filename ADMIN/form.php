<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/form.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/font/fontawesome/css/all.css">
</head>
<body class="overlay-scrollbar">
    <div class="navbar">
        <!-- nav left -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link">
                    <i class="fas fa-bars" onclick="collapseSidebar()"></i>
                </a>
            </li>
            <li class="nav-item">
                <img src="assets/img/AT-pro-black.png" alt="Admin" class="logo logo-light">
                <img src="assets/img/AT-pro-white.png" alt="Admin" class="logo logo-dark">
            </li>
        </ul>
        <!-- end nav left -->
        <!-- form -->
        <form class="navbar-search">
            <input type="search" name="Search" class="navbar-search-input" placeholder="what you looking for....">
            <i class="fas fa-search"></i>
        </form>
        <!-- end of form -->
        <!-- nav right -->
        <ul class="navbar-nav nav-right">
            <li class="nav-item mode">
                <a href="#" class="nav-link" onclick="switchTheme()">
                    <i class="fas fa-moon dark-icon"></i>
                    <i class="fas fa-sun light-icon"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link">
                    <i class="fas fa-bell dropdown-toggle" data-toggle="notification-menu"></i>
                    <span class="navbar-badge">5</span>
                </a>
                <ul id="notification-menu" class="dropdown-menu notification-menu">
                    <div class="dropdown-menu-header">
                        <span>Notifications</span>
                    </div>
                    <div class="dropdown-menu-content overlay-scrollbar scrollbar-hover">
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fa fa-user-plus"></i>
                                </div>
                                <span>
                                    New user registered
                                    <br>
                                    <span>5 minutes ago</span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fa fa-comment"></i>
                                </div>
                                <span>
                                    Akash commented on Admin
                                    <br>
                                    <span>12 minutes ago</span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <img src="./assets/img/profile2.jpg" alt="" style="width: 45px; border-radius: 50%; margin-left: 16px;">
                                </div>
                                <span>
                                    Reza send message to you
                                    <br>
                                    <span>12 minutes ago</span>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <span>
                                    Farrah linked Admin
                                    <br>
                                    <span>17 minutes ago</span>
                                </span>
                            </a>
                        </li>
                        <div id="more">
                            <li class="dropdown-menu-item">
                                <a href="#" class="dropdown-menu-link">
                                    <div>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <span>
                                        vishwa linked Admin
                                        <br>
                                        <span>17 minutes ago</span>
                                    </span>
                                </a>
                            </li>
                        </div>
                    </div>
                    <div class="dropdown-menu-footer">
                        <a href="#" id="show" onclick="show();">View all notification</a>
                    </div>
                </ul>
            </li>
            <li class="nav-item avt-wrapper">
                <div class="avt dropdown" style="max-width: 300px;">
                    <img src="assets/img/profile2.jpg" alt="User profile" class="dropdown-toggle" data-toggle="user-menu">

                    <ul id="user-menu" class="dropdown-menu">
                        <li class="dropdown-menu-item">
                            <a class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-user-tie" style="color: #202940;"></i>
                                </div>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-cog" style="color: #202940;"></i>
                                </div>
                                <span>Setting</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-credit-card" style="color: #202940;"></i>
                                </div>
                                <span>Payment</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-spinner" style="color: #202940;"></i>
                                </div>
                                <span>Projects</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a class="dropdown-menu-link" href="index.php">
                                <div>
                                    <i class="fas fa-sign-out-alt" style="color: #202940;"></i>
                                </div>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
        </ul>
        <!-- end nav right -->
    </div>
    <!-- end navbar -->

    <!-- sidebar -->
    <div class="sidebar">
        <ul class="sidebar-nav">
            <li class="sidebar-nav-item">
                <a href="admin.php" class="sidebar-nav-link ">
                    <div><i class="fas fa-house-user"></i></div>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="invoice.php" class="sidebar-nav-link">
                    <div><i class="fas fa-file-invoice"></i></div>
                    <span>Invoices</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="payment.php" class="sidebar-nav-link">
                    <div><i class="fas fa-credit-card"></i></div>
                    <span>payment</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="team.php" class="sidebar-nav-link ">
                    <div><i class=" fas fa-users"></i></div>
                    <span>Team</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="partner.php" class="sidebar-nav-link">
                    <div><i class="fas fa-handshake"></i></div>
                    <span>Users</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="datastore.php" class="sidebar-nav-link">
                    <div><i class="fas fa-database"></i></div>
                    <span>Database</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link active">
                    <div><i class="fas fa-table"></i></div>
                    <span>Form</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="setting.php" class="sidebar-nav-link">
                    <div><i class="fas fa-user-cog"></i></div>
                    <span>Setting</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="index.php" class="sidebar-nav-link">
                    <div><i class="fas fa-sign-out-alt"></i></div>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <section class="card">
        <div class="max-width">
            <div class="card-box-1">
                <i class="fas fa-file-alt" style="margin-right: 35px;"></i>
                <div>
                    <h3>Basic Form</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- team -->
    <div class="form-container">
        <div class="grid">
            <div class="box-1">
                <form action="#" enctype="multipart/form-data">
                    <h3>Create Profile</h3>
                    <div class="form-groupp">
                        <img src="assets/img/placeholder.png" alt="Profile" id="profileDisplay" onclick="triggerClick()"><br>
                        <label for="">Upload Profile</label>
                        <input type="file" name="profileImage" onchange="displayImg(this)" id="profileImage" class="form-control" style="display: none;">
                    </div><br>
                    <div class="form-group">
                        <i class="fas fa-user-alt"></i>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <i class="far fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-eye" onclick=show1();></i>
                        <input type="password" id="pass" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock" onclick=show2();></i>
                        <input type="password" id="cpass" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" name="submit" class="submit">Sign up</button>
                </form>
            </div>
            <div class="box-2">
                <form action="#">
                    <h3>Sign in</h3>
                    <div class="form-group">
                        <i class="far fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock lock" onclick=show3();></i>
                        <input type="password" id="lpass" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" name="submit" id="submit2">Log in</button>
                </form>
                <p class="social-text">Or Sign in with social platforms</p>
                <div class="icon">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-dribbble"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>

            </div>
        </div>

    </div>
    <!-- end of team -->






    <!-- footer -->
    <footer>
        <p>Created by <a href="partner.php">VISHWANATH</a> | © 2020</p>
    </footer>
    <!-- end of footer -->

    <script src="assets/js/script.js"></script>

    <script>
        var i = 0;

        function show() {
            if (!i) {
                document.getElementById("more").style.display = "inline";
                document.getElementById("show").innerHTML = "View less notification";
                i = 1;
            } else {
                document.getElementById("more").style.display = "none";
                document.getElementById("show").innerHTML = "View all notification";
                i = 0;
            }
        }
    </script>

    <script>
        function triggerClick() {
            document.querySelector('#profileImage').click();

        }

        function displayImg(e) {
            if (e.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
    </script>
    <script>
        function show1() {
            var password = document.getElementById('pass');
            var icon = document.querySelector('.fa-eye');
            if (password.type === "password") {
                password.type = "text";
                password.style.color = "#000";
                password.style.fontWeight = "600px";
                icon.style.cursor = "pointer";
                icon.style.color = " #F50057";


            } else {
                password.type = "password";
                password.style.color = "gray";
                icon.style.color = "gray";


            }
        }

        function show2() {
            var password = document.getElementById('cpass');
            var icon = document.querySelector('.fa-lock');
            if (password.type === "password") {
                password.type = "text";
                password.style.color = "#000";
                password.style.fontWeight = "600px";
                icon.style.cursor = "pointer";
                icon.style.color = " #F50057";
            } else {
                password.type = "password";
                password.style.color = "gray";
                icon.style.color = "gray";

            }
        }

        function show3() {
            var password = document.getElementById('lpass');
            var icon = document.querySelector('.lock');
            if (password.type === "password") {
                password.type = "text";
                password.style.color = "#000";
                password.style.fontWeight = "600px";
                icon.style.cursor = "pointer";
                icon.style.color = " #F50057";
            } else {
                password.type = "password";
                password.style.color = "gray";
                icon.style.color = "gray";

            }
        }
    </script>


</body>

</html>