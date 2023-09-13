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
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section id="header">
            <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
            
            <div>
                <ul id="navbar">
                    <li><a href="Index.php">Home</a></li>
                    <li><a class="active" href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" id="button">Logout <br></a>
                    </li>
                    <li><a href="cart.html"><i class="fa-regular fa-bag-shopping"></i></a></li>
                </ul>
            </div>
            <div id="mobile">
                <a href="cart.html"><i class="fa-regular fa-bag-shopping"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>

        <section id="hero">
            <div class="slider">
                <img src="img/hero4.png" alt="Image 1">
                <img src="img/hero1.PNG" alt="Image 2">
                <img src="img/hero2.PNG" alt="Image 3">
                <img src="img/hero3.PNG" alt="Image 4">
              </div>
        </section>
  
        <section id="product1" class="section-p1">
            <div class="pro-container">
                <div class="pro">
                    <img src="img/Shirts/f1.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>"Great Things"Tie Dye Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱450</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f2.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>"Great Things"Tie Dye Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱450</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f3.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>"Take it Slow" White Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱350</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f4.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>VLCT White Dri-Fit</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱450</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f5.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>VLCT Black Dri-Fit</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱450</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f6.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>"Ocean Waves" Tye-Die Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱500</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f7.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>"Rainbow" Tye-Die Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱500</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f8.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>"Miami Vice" Tye-Die Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱500</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

            </div>

            <div class="pro-container">
                <div class="pro">
                    <img src="img/Shirts/f9.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>Reverse Bucket Hat</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱299</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f16.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>"No-Limits" Black Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱400</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f10.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>Black Tote Bag</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱299</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f11.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>"Be Unique" Dri-Fit</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱500</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f12.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>"Game Changer" White Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱300</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f13.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>"Game Changer" Black Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱300</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f14.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>"Game Changer" Black Jacket</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱500</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="img/Shirts/f15.PNG" alt="">
                    <div class="des">
                        <span>VLCT Apparel Co.</span>
                        <h5>"No Limits" Black Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>₱400</h4>
                    </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>

            </div>
        </section>

   
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