<?php
include "database.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/font/fontawesome/css/all.css">
    <script src="assets/js/plugin/JQuery3.3.1.js"></script>
    <script src="assets/js/plugin/sweetalert.min.js"></script>
    <style>
        .error {
            color: crimson;
            padding: 10px 0px 0px 0px;
            font-size: 16px;
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
            font-size: 16px;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h1>welcome 🙏</h1>
        <div class="grid">
            <!-- REGISTER FORM   -->
            <div class="box-1">
                <form action="register.php" method="POST" enctype="multipart/form-data">
                    <h3>Create Profile</h3>


                    <div class="form-groupp">
                        <img src="assets/img/placeholder.png" alt="Profile" id="profileDisplay" onclick="triggerClick()"><br>
                        <label for="">Upload Profile</label>
                        <input type="file" name="profileImage" onchange="displayImg(this)" id="profileImage" class="form-control" style="display: none;">
                    </div><br>

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

                    <!-- end -->
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
            <!-- END OF REGISTER FORM -->

            <!-- LOGIN FORM -->
            <div class="box-2">
                <form action="login.php" method="POST">
                    <h3>Sign in</h3>

                    <!-- ERROR MSG -->
                    <?php
                    if (isset($_SESSION['message1'])) {
                    ?>
                        <script>
                            swal({
                                title: "<?php echo $_SESSION['message1']; ?>",
                                icon: "<?php echo $_SESSION['status_code1']; ?>",
                                button: "Ok",
                            });
                        </script>
                    <?php
                        unset($_SESSION['message1']);
                    }
                    ?>
                    <!-- END OF ERROR MSG -->

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
            <!-- END OF LOGIN FORM   -->
        </div>
    </div>




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
    <script>
        var hi = document.getElementById("hide");

        function show() {
            setTimeout(() => {
                hi.style.display = "none";
                hi.style.transition = "1s";
            }, 3700);
        }
        show();
    </script>
    <script>
        window.history.forward();
    </script>

</body>

</html>