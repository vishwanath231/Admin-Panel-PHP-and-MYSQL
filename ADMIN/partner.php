<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/partner.css?<?php echo time(); ?>">
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
                <a href="team.php" class="sidebar-nav-link">
                    <div><i class="fas fa-users"></i></div>
                    <span>Team</span>
                </a>
            </li>
            <li class="sidebar-nav-item">
                <a href="partner.php" class="sidebar-nav-link active">
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
            <div class="card-box-1">
                <i class="fas fa-user-plus" style="margin-right: 35px;"></i>
                <div>
                    <h3>Users</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="user-img" style="text-align: center; margin-top:70px">
        <img src="assets/img/users.png" alt="user-image" style="width:600px;">
    </section>

    <?php

    include "database.php";

    $sql = "SELECT * FROM users";
    $query = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    ?>


    <table>
        <tr>
            <th>ID</th>
            <th>Profile</th>
            <th>Username</th>
            <th>Email</th>
            <th>Date</th>
        </tr>
        <?php foreach ($result as $result) : ?>
            <tr>
                <td>
                    <?php echo $result['id']; ?>
                </td>
                <td>
                    <img src="profile/<?php echo $result['profile']; ?>" alt="User profile">
                </td>
                <td>
                    <?php echo $result['username']; ?>
                </td>
                <td>
                    <?php echo $result['email']; ?>
                </td>
                <td>
                    <?php echo $result['date']; ?>
                </td>
                <td>
                    <a href="setting.php?edit=<?php echo $result['id']; ?>"><i class="fas fa-edit"></i></a>
                    <a href="partner.php?delete=<?php echo $result['id']; ?>"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


    <?php

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $mysqli = (" DELETE FROM users WHERE id = '$id'");
        $query1 = mysqli_query($con, $mysqli);
    } else {
        echo "error";
    }



    ?>







    <!-- footer -->
    <footer>
        <p>Created by <a href="partner.php">VISHWANATH</a> | © 2020</p>
    </footer>
    <!-- end of footer -->


    <script src="assets/js/plugin/JQuery3.3.1.js"></script>
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


</body>

</html>