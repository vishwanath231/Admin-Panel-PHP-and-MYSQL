<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/payment.css? <?php echo time(); ?>">
    <link rel="stylesheet" href="assets/font/fontawesome/css/all.css">
    <script src="assets/js/plugin/JQuery3.3.1.js"></script>
    <script src="assets/js/plugin/sweetalert.min.js"></script>
    <style>
        .error {
            color: crimson;
            padding: 10px 0px 10px 0px;
            font-size: 16px;
            text-align: center;
            font-weight: 600;
        }

        .color {
            color: #000;
            font-weight: 600;
        }

        .red {
            color: crimson;
            font-weight: 600;
        }

        .green {
            color: green;
            font-weight: 600;
            text-align: center;
        }
    </style>
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
                <a href="#" class="sidebar-nav-link active">
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




    <!-- payment -->
    <section class="payment">
        <div class="max-width1">
            <form action="payment_insert.php" method="post">
                <div class="checkout_form">
                    <section class="card">
                        <div class="max-width">
                            <div class="card-box-1">
                                <i class="fas fa-credit-card" style="margin-right: 35px;"></i>
                                <div>
                                    <h3>Payment Gateway</h3>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- ERROR MSG -->
                    <?php
                    if (isset($_SESSION['message'])) {
                    ?>
                        <script>
                            swal({
                                title: "<?php echo $_SESSION['message']; ?>",
                                icon: "<?php echo $_SESSION['status_code']; ?>",
                                button: "Ok",
                            });
                        </script>
                    <?php
                        unset($_SESSION['message']);
                    }
                    ?>
                    <!-- END OF ERROR MSG -->

                    <div class="form-field">
                        <label>Username</label><br>
                        <input type="text" id="username" name="username" style="text-align: left; width:100%;" required>
                    </div><br>
                    <div class="form-field">
                        <label>Category</label>
                        <select name="category" class="pad" required>
                            <option value="slect">select</option>
                            <option value="Basic">Basic</option>
                            <option value="Standard">Standard</option>
                            <option value="Professional">Professional</option>
                        </select>
                        <label>Amount</label>
                        <select name="amount" required>
                            <option value="select">select</option>
                            <option value="$99">$99</option>
                            <option value="$199">$199</option>
                            <option value="$299">$299</option>
                        </select>
                    </div><br>
                    <div class="card_number" id="card-container">
                        <label>Card Number</label><br>
                        <input type="text" class="input" id="card" name="cardNumber" autocomplete="off" placeholder="0000 0000 0000 0000" style="color: #000;" required>
                        <div id="logo"></div>
                    </div>
                    <div class="card_number" id="card-container">
                        <label>Card Holder</label><br>
                        <input type="text" name="cardHolder" style="width: 100%; text-align:left;" required>
                    </div>
                    <div class="flex">
                        <p>Exp Date / Year</p>
                        <p style="margin-right: 80px;">cvv</p>
                    </div>
                    <div class="card_grp">
                        <div class="expiry_date">
                            <input type="text" class="expiry_input" name="expDate" data-mask="00" placeholder="00" required>
                            <input type="text" class="expiry_input" name="expYear" data-mask="00" placeholder="00" required>
                        </div>
                        <div class="cvc">
                            <input type="text" class="cvc_input" name="cvv" data-mask="000" placeholder="000" required>
                            <div class="cvc_img">
                                ?
                                <div class="img">
                                    <img src="assets/img/card.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button href="#" class="btn">pay</button>
                </div>
            </form>
        </div>
    </section>
    <!-- end of payment -->














    <!-- footer -->
    <!-- <footer style="position:absolute; bottom:0;">
        <p>Created by <a href="partner.php">VISHWANATH</a> | © 2020</p>
    </footer> -->
    <!-- end of footer -->








    <script src="assets/js/plugin/JQuery3.3.1.js"></script>
    <script src="assets/js/plugin/jquery.mask.min.js"></script>
    <script src="assets/js/plugin/card-validator.js"></script>
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
        var hi = document.getElementById("hide");

        function show() {
            setTimeout(() => {
                hi.style.display = "none";
                hi.style.transition = "1s";
            }, 3500);
        }
        show();
    </script>


</body>

</html>