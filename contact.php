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
        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <section id="header">
            <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
            
            <div>
                <ul id="navbar">
                    <li><a href="Index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a class="active" href="contact.php">Contact</a></li>
                    <li class="nav-item">
                        <a href="logout.php" id="button">Logout<br></a>
                    </li>
                    <li><a href="cart.php"><i class="fa-regular fa-bag-shopping"></i></a></li>
                </ul>
            </div>

            <div id="mobile">
                <a href="cart.html"><i class="fa-regular fa-bag-shopping"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>
<!-- contact section start -->
<section class="contact" id="contact">
    <div class="max-width">
        <br>
        <h2 class="title">Contact VELOCITY</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text"></div>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Name</div>
                            <div class="sub-title">Angeles, Ken</div>
                            <div class="sub-title">Tai, Jhaevien</div>
                            <div class="sub-title">Vergel de Dios, Jandrue</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">Quezon City, Metro Manila</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">velocity@email.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column right">
                <div class="text">Message Us</div>
                <form action="#">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="Name" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Subject" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                    </div>
                    <div class="button-area">
                        <button type="submit">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</div>

<!-- footer section start -->
<br>
<footer>
    <span>Created By ANGELES, TAI, VERGEL DE DIOS</a> | <span class="far fa-copyright"></span> 2023 All rights reserved.</span>
</footer>

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