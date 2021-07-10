<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/admin.css? <?php echo time(); ?>">
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
                <a href="#" class="sidebar-nav-link active">
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
                <a href="team.php" class="sidebar-nav-link">
                    <div><i class="fas fa-users"></i></div>
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
                <a href="form.php" class="sidebar-nav-link">
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
            <div class="card-grid">
                <div class="card-box-1">
                    <i class="fas fa-users" style="margin-right: 35px;"></i>
                    <div>
                        <h3>Visitor</h3>
                        <p>1,294</p>
                    </div>
                </div>
                <div class="card-box-1">
                    <i class="fas fa-user-plus" style="background: #FFAF57;"></i>
                    <div>
                        <h3>Subscribers</h3>
                        <p>945</p>
                    </div>
                </div>
                <div class="card-box-1">
                    <i class="fas fa-chart-pie" style="background:#6861CE;"></i>
                    <div>
                        <h3>Number</h3>
                        <p>150GB</p>
                    </div>
                </div>
                <div class="card-box-1">
                    <i class="fab fa-twitter" style="background: #48ABF7"></i>
                    <div>
                        <h3>Followers</h3>
                        <p>+45K</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pro">
        <div class="max-width1">
            <div class="pro-grid">
                <div class="pro-box-1">
                    <h3>Top Products</h3>
                    <div class="pro-content-1">
                        <img src="assets/img/css.svg" alt="css">
                        <div>
                            <h4>CSS</h4>
                            <p>Cascading Style Sheets</p>

                        </div>
                        <span>+$17</span>
                    </div>
                    <div class="line"></div>
                    <div class="pro-content-1">
                        <img src="assets/img/css.svg" alt="css">
                        <div>
                            <h4>J.CO Donuts</h4>
                            <p>The Best Donuts</p>

                        </div>
                        <span>+$300</span>
                    </div>
                    <div class="line"></div>
                    <div class="pro-content-1">
                        <img src="assets/img/ready.svg" alt="css">
                        <div>
                            <h4>Ready Pro</h4>
                            <p>Bootstrap 4 Admin Dashboard</p>

                        </div>
                        <span>+$350</span>
                    </div>
                    <div class="pull-in">
                        <canvas id="topProductsChart"></canvas>
                    </div>
                </div>
                <div class="pro-box-2">
                    <h3>Suggested People</h3>
                    <div class="pro-content-2">
                        <img src="assets/img/profile3.jpg" alt="css">
                        <div>
                            <h4>Jimmy Denis</h4>
                            <p>Graphic Designer</p>

                        </div>
                        <a href="#"><i class="fas fa-plus-circle"></i></a>
                    </div>
                    <div class="pro-content-2">
                        <img src="assets/img/profile5.png" alt="css">
                        <div>
                            <h4>Maze</h4>
                            <p>Graphic Designer</p>

                        </div>
                        <a href="#"><i class="fas fa-plus-circle"></i></a>
                    </div>
                    <div class="pro-content-2">
                        <img src="assets/img/profile2.jpg" alt="css">
                        <div>
                            <h4>Talha</h4>
                            <p>Front End Designer</p>

                        </div>
                        <a href="#"><i class="fas fa-plus-circle"></i></a>
                    </div>
                    <div class="pro-content-2">
                        <img src="assets/img/profile4.jpg" alt="css">
                        <div>
                            <h4>Chole</h4>
                            <p>Back End Developer</p>

                        </div>
                        <a href="#"><i class="fas fa-plus-circle"></i></a>
                    </div>
                    <div class="pro-content-2">
                        <img src="assets/img/profile.jpg" alt="css">
                        <div>
                            <h4>John Doe </h4>
                            <p>Graphic Designer</p>

                        </div>
                        <a href="#"><i class="fas fa-plus-circle"></i></a>
                    </div>

                </div>
                <div class="pro-box-3">
                    <h3>Active user right now</h3>
                    <div class="line"></div><br>
                    <span class="size">17</span>
                    <p>Page view per minutes</p>
                    <div class="line"></div>
                    <div class="pull-inn">
                        <canvas id="activeUsersChart"></canvas>
                    </div>
                    <h4>Top active pages</h4>
                    <div>
                        <span>/product/readypro/index.html</span>
                        <span>7</span>
                    </div>
                    <div>
                        <span>/product/admin/index.html</span>
                        <span>10</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end pro card -->

    <!-- map -->
    <section class="map">
        <h3>Users Geolocation</h3>
        <p>Map of the distribution of users around the world</p>
        <div class="mapcontainer">
            <div id="map-example" class="vmap" style="height: 400px"></div>
        </div>
    </section>
    <!-- end map -->

    <!-- notification -->
    <section class="notif">
        <div class="notif-box">

            <p><i class="fas fa-bell"></i>Lucifer liked Admin</p>
        </div>
    </section>
    <!-- end of notification -->

    <!-- footer -->
    <footer>
        <p>Created by <a href="admin.php">VISHWANATH</a> | © 2020</p>
    </footer>
    <!-- end of footer -->

    <script src="assets/js/script.js"></script>
    <script src="assets/js/plugin/chart.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/plugin/jquery-1.10.2.js"></script>
    <script src="assets/js/plugin/map/jquery.vmap.min.js"></script>
    <script src="assets/js/plugin/map/jquery.vmap.world.js"></script>

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
        $(document).ready(function() {
            $(window).scroll(function() {

                if (this.scrollY > 5) {
                    $(".notif").addClass("hidden");
                } else {
                    $(".notif").removeClass("hidden");
                }
            })
        })
    </script>

    <script>
        $('#map-example').vectorMap({
            map: 'world_en',
            backgroundColor: 'transparent',
            borderColor: '#fff',
            borderWidth: 2,
            color: '#e4e4e4',
            enableZoom: true,
            hoverColor: '#35cd3a',
            hoverOpacity: null,
            normalizeFunction: 'linear',
            scaleColors: ['#b6d6ff', '#005ace'],
            selectedColor: '#35cd3a',
            selectedRegions: ['IN', 'RU', 'US', 'AU'],
            showTooltip: true,
            onRegionClick: function(element, code, region) {
                return false;
            },
            onResize: function(element, width, height) {
                console.log('Map Size: ' + width + 'x' + height);
            },
        });
    </script>

</body>

</html>