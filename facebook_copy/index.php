<?php
	session_start();
	if (isset($_SESSION['id'])) {
        header("Location: profile.html");
    }
?>

<!DOCTYPE html>
	<html lang="en">
		<head>
			<!--Fonts-->
            <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Droid+Sans:400,700|Noto+Sans:400,400i,700,700i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Space+Mono:400,400i,700,700i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
            
            <!--CSS Stylesheets-->
            <link rel="stylesheet" href="site/css/style.css" />
            
            <!--scale and charset-->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" >
            
            <!--Title of page-->
            <title>Famebook</title>
            
            <!--Icon Head-->
            <link rel="icon" href="site/img/browser_icon_fb.png" sizes="32x32" />
            
            <!-- Icon library FB TW IG etc. -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
             
            <!-- JS Code -->
            <script src="site/js/main.js"></script>
		</head>
		<body>
            <div class="container grid">
            	<div class="header grid _1span" role="banner">
            		<div class="headerContent grid _1span">
            			<div class="headerMiddleContent grid">
            				<div class="headerMiddleLeftContent grid _1span">
            					<h1>famebook</h1>
            				</div>
            				<div class="headerMiddleRightContent grid _1span">
            					<form action="database/login.php" method="post" class="form_login grid _1span">
            						<div class="formContent grid _1span">
            						    <div class="formUidLogin grid _1span">
                                            <label for="uid" class="loginLabel grid">Username</label>
            						        <input type="text" id="uid" class="loginInput" name="uid">
            						    </div>
            						    <div class="formPwdLogin grid _1span">
                                            <label for="pwd" class="loginLabel grid">Password</label>
            						        <input type="password" id="pwd" class="loginInput" name="pwd">
            						    </div>
            						    <div class="formSubmitLogin grid _1span">
            						        <button type="submit" name="submitLogin" class="submitLoginButton">Login</button>
            						    </div>
            						</div>
            					</form>
            				</div>
            			</div>
            		</div>
            	</div>
            	<div class="main grid _1span" role="main">
            		<div class="mainContent grid _1span">
            			<div class="mainMiddleContent grid">
            			    <div class="mainMiddleLeftContent grid _1span">
            			        <div class="mainMiddleLeftGrid grid _1span">
            			        	<div class="mainMiddlePlac grid">
            			        		<div class="mainPlacHeadline2 grid">
            			        			<h2 class="mainPlachH2">Just sign up and live the adventure!</h2>
            			        		</div>
            			        		<img src="site/img/world_people_image_red.png" alt="">
            			        	</div>
            			        </div>
            			    </div>
            			    <div class="mainMiddleRightContent grid _1span">
            			        <div class="mainMiddleRightGrid grid _1span">
            			            <div class="mainSignUpFormHeadline grid">
            			                <h1 class="signUpFormH1">Sign Up</h1>
            			                <p class="signUpFormP">and experience your biggest dream.</p>
            			            </div>
            			            <form action="database/signup.php" method="post" class="form_signup grid">
            			                <div class="signUpFirstName grid">
            			                    <input type="text" class="inputSignUpText" placeholder="Firstname" name="firstname">
            			                </div>
            			                <div class="signUpLastName grid">
            			                    <input type="text" class="inputSignUpText" placeholder="Lastname" name="lastname">
            			                </div>
            			                <div class="signUpEmail grid">
            			                    <input type="email" class="inputSignUpText" placeholder="Email" name="email">
            			                </div>
            			                <div class="signUpUsername grid">
            			                    <input type="text" class="inputSignUpText" placeholder="Username" name="uid">
            			                </div>
            			                <div class="signUpPassword grid">
            			                    <input type="password" class="inputSignUpText" placeholder="Password" name="pwd">
										</div>
										<div class="signUpConConfirmPassword grid">
											<input type="password" class="inputSignUpText" placeholder="Confirm Password" name="conpwd">
										</div>
            			                <div class="signUpGender grid">
            			                	<div class="gender grid _1span" id="genderMale">
            			                		<input type="radio" id="male" value="male" name="gender" class="inputGender" checked>
            			                		<label for="male" class="labelGender grid">Male</label>
            			                	</div>
            			                	<div class="gender grid _1span" id="genderFemale">
            			                		<input type="radio" value="female" id="female" name="gender" class="inputGender">
            			                		<label for="female" class="labelGender grid">Female</label>
            			                	</div>
            			                	<div class="gender grid _1span" id="genderOther">
            			                		<input type="radio" value="other" id="other" name="gender" class="inputGender">
            			                		<label for="other" class="labelGender grid">Other</label>
            			                	</div>
            			                </div>
            			                <div class="signUpSubmit grid">
            			                    <button class="submitSignUpButton" name="submitSignUp" type="submit">Create Account</button>
            			                </div>
            			            </form>
            			        </div>
            			    </div>
            			</div>
            		</div>
            	</div>
            	<div class="footer grid _1span" role="footer">
            	    <div class="footerContent grid _1span">
            	    	<div class="footerInfo grid">
            	    		<p class="footerCopyright">© 2018 Felix Hörnfeldt</p>
            	    	</div>
            	    </div>
            	</div>
            </div>
		</body>
	</html>