<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
                        $_SESSION['status'] = "Welcome.";
						header("Location: index.php");
						die;
					}
                    else{
                        echo '<script type="text/javascript">/'.'/ <![CDATA[
                            window.onload = function(){
                              alert("Wrong password");
                            }
                          /'.'/ ]]>
                          </script>';
				    }
                } 
                else {
                    echo '<script type="text/javascript">/'.'/ <![CDATA[
                        window.onload = function(){
                          alert("Email does not exist");
                        }
                      /'.'/ ]]>
                      </script>';
                }
            }
		}
	}

    ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Velocity</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <section id="header">
            <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
            
            <div>
                <ul id="navbar">
                    <li><a href="Index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="nav-item">
                        <a class="nav-link" class="active" id="button">Login <br></a>
                    </li>
                    <li><a href="cart.html"><i class="fa-regular fa-bag-shopping"></i></a></li>
                </ul>
            </div>

            <div id="mobile">
                <a href="cart.html"><i class="fa-regular fa-bag-shopping"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>

        <?php 
    
    if(isset($_SESSION['status1']))
    {
        ?>
            <div class="alert" role="alert">
                <?= $_SESSION['status1']; ?>
            </div>
        <?php 
        unset($_SESSION['status1']);
    }

?>
<br><br>
                        <div class="form-container">
                            <div class="btn">
                                <span>Login</span>
                                <hr id="Indicator">
                            </div>
							<form id = "LoginForm" method="post">
                                <br>
								<input id="text" type="email" name="user_name" placeholder="Email" required>
                                <br><br>
								<input id="text" type="password" name="password" placeholder="Password" required>
                                <br><br>
								<button id ="button" type="submit" class="hero-btn blue-btn" value="Login" id="btn3">Login</button><br><br>
								<a href="signup.php" class="btn-sl">Create an Account</a>
</div>
<br><br>

      

        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="img/logo.png" alt="">
                <h4>Contact</h4>
                <p><strong>Address: </strong> Address</p>
                <p><strong>Phone: </strong> Number</p>
                <p><strong>Hours: </strong> time</p>
                <div class="follow">
                    <h4>Follow us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-pinterest"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
                <div class="col">
                    <h4>About</h4>
                    <a href="#">About Us</a>
                    <a href="#">Delivery Information</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Contact Us</a>
                </div>

                <div class="col">
                    <h4>My Account</h4>
                    <a href="#">Sign In</a>
                    <a href="#">View Cart</a>
                    <a href="#">My Wishlist</a>
                    <a href="#">Track My Order</a>
                    <a href="#">Help</a>
                </div>

                <div class="col install">
                    <h4>Install App</h4>
                    <p>From App Store or Google Play</p>
                    <div class="row">
                        <img src="img/pay/app.jpg" alt="">
                        <img src="img/pay/play.jpg" alt="">
                    </div>
                    <p>Secured Payment Gateways</p>
                    <img src="img/pay/pay.png" alt="">
                </div>

                <div class="copyright">
                    <p>@ 2020, Velocity</p>
                </div>
        </footer>





        <script src="script.js"></script>
        <script>

            document.getElementById("button").addEventListener("click", function () {
                document.querySelector(".popup").style.display = 'flex';
            })

            document.querySelector(".close").addEventListener("click", function () {
                document.querySelector(".popup").style.display = 'none';
            })

            document.getElementById("register").addEventListener("click", function () {
                document.querySelector(".popup1").style.display = 'flex';
            })

            document.querySelector(".close1").addEventListener("click", function () {
                document.querySelector(".popup1").style.display = 'none';
            })

            document.querySelector(".submit").addEventListener("click", function () {
                document.querySelector(".popup1").style.display = 'none';
            })

        </script>

    </body>
</html>

<!--2:00:00-->