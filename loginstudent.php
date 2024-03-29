<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1920, initial-scale=1.0, minimum-scale=1, user-scalable=no">
    <title>Sunibngajar - Login Student</title>
    <link rel="stylesheet" href="Style/loginstudent.css">
</head>
<body> 
    <?php 
        session_start();
    ?>
    <div class="login-page">
        <header class="header-central">
            <div class="header-left">
                <img src="Assets/logo.png" id="img-logo">
                <p id="header-left-text">SUNIBNGAJAR</p>
            </div>
            <div class="header-right">
                <a href="about.html" id="header-right-about">About</a>
                <a href="registerstudent.php" id="header-right-signup">Sign Up</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="55" viewBox="0 0 37 36" fill="none">
                    <path d="M18.0788 12.3877L8.47696 20.2959V28.8312C8.47696 29.0522 8.56475 29.2641 8.72102 29.4204C8.87729 29.5767 9.08923 29.6645 9.31023 29.6645L15.1462 29.6494C15.3665 29.6483 15.5774 29.56 15.7328 29.4038C15.8881 29.2477 15.9753 29.0364 15.9753 28.8161V23.8316C15.9753 23.6106 16.0631 23.3986 16.2194 23.2424C16.3757 23.0861 16.5876 22.9983 16.8086 22.9983H20.1417C20.3627 22.9983 20.5746 23.0861 20.7309 23.2424C20.8872 23.3986 20.975 23.6106 20.975 23.8316V28.8125C20.9746 28.9221 20.9959 29.0307 21.0376 29.1321C21.0794 29.2335 21.1407 29.3257 21.2181 29.4034C21.2955 29.481 21.3875 29.5426 21.4887 29.5847C21.59 29.6267 21.6986 29.6483 21.8082 29.6483L27.6421 29.6645C27.8631 29.6645 28.0751 29.5767 28.2314 29.4204C28.3876 29.2641 28.4754 29.0522 28.4754 28.8312V20.2902L18.8756 12.3877C18.7628 12.2967 18.6222 12.2471 18.4772 12.2471C18.3323 12.2471 18.1917 12.2967 18.0788 12.3877ZM33.2459 17.7628L28.8921 14.174V6.96049C28.8921 6.79475 28.8262 6.63579 28.709 6.51859C28.5918 6.40138 28.4328 6.33554 28.2671 6.33554H25.3507C25.1849 6.33554 25.0259 6.40138 24.9087 6.51859C24.7915 6.63579 24.7257 6.79475 24.7257 6.96049V10.742L20.063 6.90581C19.6156 6.5376 19.0541 6.33628 18.4746 6.33628C17.8951 6.33628 17.3337 6.5376 16.8862 6.90581L3.70337 17.7628C3.64008 17.8151 3.58773 17.8794 3.54929 17.9519C3.51085 18.0244 3.48708 18.1039 3.47934 18.1856C3.47161 18.2673 3.48005 18.3498 3.50419 18.4283C3.52833 18.5067 3.5677 18.5797 3.62004 18.6429L4.94806 20.2574C5.00026 20.3209 5.06447 20.3734 5.13701 20.412C5.20954 20.4507 5.28899 20.4746 5.37079 20.4825C5.45259 20.4904 5.53514 20.4821 5.61372 20.458C5.6923 20.4339 5.76536 20.3946 5.82872 20.3423L18.0788 10.2524C18.1917 10.1615 18.3323 10.1118 18.4772 10.1118C18.6222 10.1118 18.7628 10.1615 18.8756 10.2524L31.1263 20.3423C31.1895 20.3946 31.2625 20.434 31.3409 20.4581C31.4194 20.4823 31.5019 20.4907 31.5836 20.483C31.6653 20.4752 31.7447 20.4515 31.8173 20.413C31.8898 20.3746 31.9541 20.3222 32.0064 20.2589L33.3344 18.6445C33.3867 18.5809 33.4259 18.5076 33.4498 18.4287C33.4736 18.3499 33.4817 18.2672 33.4734 18.1852C33.4652 18.1033 33.4409 18.0238 33.4018 17.9513C33.3628 17.8788 33.3098 17.8147 33.2459 17.7628Z" fill="#444B59" id="header-right-svg"/>
                  </svg>
            </div>
        </header>
        <content>
            
            <div class="login">
                <?php
                    if(isset($_GET['success']) && isset($_SESSION['success_register'])){
                        echo "<p id='success-messages'>Success Registered !</p>"; 
                        unset($_SESSION['success_register']);
                    };
                ?>
                <div class="welcome-back-class">
                    <p id="welcome-back">Welcome Back!</p>
                    <div class="welcome-gap">
                        <span id="dont-have">Don't have an account, <span id="sign-up"><a href="registerstudent.php" id="sign-up">Sign up</a></span></span>
                    </div>
                </div>
                <form action="controllers/authcontrollers.php" method="POST">
                    <div class="input-field">
                        <div class="username">
                            <p id="email">Email</p>
                            <div id="Frame-4-username-div">
                                <input type="email" name="email" id="Frame-4-username">
                            </div>  
                        </div>
                        <div class="password">
                            <p id="password">Password</p>
                            <input type="password" name="password" id="frame-4-password">
                        </div>
                        
                        <div class="remember">
                            <div class="frame-8">
                                <input type="checkbox" id="group 2">
                                <div class="frame-9">
                                    <p id="remember-me">Remember me</p>
                                </div>
                            </div>
                            <div class="frame-11">
                                <p id="frame-11-forgot">Forgot password?</p>
                            </div>
                        </div>

                    <?php
                        if(isset($_GET['error']) && isset($_SESSION['error_message'])){
                            $error_message = $_SESSION['error_message'];
                            echo "<p id='error-messages'>Wrong Email or Password</p>"; 
                            unset($_SESSION['error_message']);
                        };
                    ?>
                    
                    <div class="sign-in-div">
                        <button id="sign-in-button" name="login" value="login">Sign In</button>
                    </div>
                    
                </form>
                
                    <p id="or-continue">or continue with</p>
                    
                    <div class="social-alt">
                        <svg xmlns="http://www.w3.org/2000/svg" width="39" height="38" viewBox="0 0 39 38" fill="none" class="google">
                            <g clip-path="url(#clip0_242_204)">
                                <path d="M9.14865 22.9639L7.82593 27.9018L2.99139 28.0041C1.54657 25.3243 0.727051 22.2582 0.727051 19C0.727051 15.8493 1.49329 12.8782 2.85149 10.2621H2.85253L7.15662 11.0512L9.04208 15.3294C8.64745 16.4799 8.43237 17.7149 8.43237 19C8.43252 20.3947 8.68516 21.731 9.14865 22.9639Z" fill="#FBBB00"/>
                                <path d="M38.3951 15.4506C38.6133 16.5999 38.7271 17.7869 38.7271 19C38.7271 20.3603 38.5841 21.6872 38.3116 22.9671C37.3867 27.3224 34.9699 31.1256 31.622 33.8169L31.6209 33.8158L26.1997 33.5392L25.4324 28.7495C27.6539 27.4467 29.3901 25.4078 30.3046 22.9671H20.1448V15.4506H30.4528H38.3951Z" fill="#518EF8"/>
                                <path d="M31.6209 33.8158L31.6219 33.8169C28.3659 36.434 24.2297 38 19.7271 38C12.4915 38 6.2006 33.9557 2.99146 28.0041L9.14872 22.9639C10.7533 27.2462 14.8842 30.2946 19.7271 30.2946C21.8087 30.2946 23.7589 29.7319 25.4323 28.7495L31.6209 33.8158Z" fill="#28B446"/>
                                <path d="M31.8548 4.37416L25.6996 9.41331C23.9677 8.33076 21.9204 7.70539 19.7271 7.70539C14.7746 7.70539 10.5664 10.8936 9.04222 15.3294L2.8526 10.2621H2.85156C6.01373 4.16538 12.3839 0 19.7271 0C24.3372 0 28.5642 1.64216 31.8548 4.37416Z" fill="#F14336"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_242_204">
                                <rect width="38" height="38" fill="white" transform="translate(0.727051)"/>
                                </clipPath>
                            </defs>
                        </svg>
    
                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none" class="facebook">
                            <path d="M44.727 24.121C44.727 13.0726 35.7754 4.121 24.727 4.121C13.6787 4.121 4.72705 13.0726 4.72705 24.121C4.72705 34.1033 12.0408 42.3775 21.602 43.8791V29.9025H16.5214V24.121H21.602V19.7146C21.602 14.7025 24.5859 11.9339 29.1561 11.9339C31.3448 11.9339 33.6335 12.3242 33.6335 12.3242V17.2436H31.1109C28.627 17.2436 27.852 18.7855 27.852 20.367V24.121H33.3988L32.5117 29.9025H27.852V43.8791C37.4133 42.3775 44.727 34.1033 44.727 24.121Z" fill="#8699DA"/>
                        </svg>
    
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none" class="apple">
                            <g clip-path="url(#clip0_242_212)">
                              <path d="M30.9754 0C28.6296 0.162249 25.8879 1.66374 24.2902 3.61898C22.8327 5.39272 21.6337 8.0272 22.1012 10.5874C24.6642 10.6672 27.3124 9.12995 28.8469 7.14171C30.2824 5.29097 31.3686 2.67298 30.9754 0Z" fill="#444B59"/>
                              <path d="M40.2453 14.7619C37.9931 11.9377 34.8278 10.2987 31.8386 10.2987C27.8924 10.2987 26.2231 12.1879 23.4814 12.1879C20.6544 12.1879 18.5067 10.3042 15.094 10.3042C11.7417 10.3042 8.17224 12.3529 5.909 15.8564C2.72727 20.7899 3.27177 30.0656 8.42799 37.9663C10.2732 40.7933 12.7372 43.9723 15.9602 43.9998C18.8284 44.0273 19.6369 42.16 23.5227 42.1408C27.4084 42.1188 28.1454 44.0245 31.0081 43.9943C34.2338 43.9695 36.8326 40.4468 38.6778 37.6198C40.0006 35.5931 40.4928 34.5728 41.5185 32.2848C34.0578 29.4441 32.8616 18.8347 40.2453 14.7619Z" fill="#444B59"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_242_212">
                                <rect width="44" height="44" fill="white" transform="translate(0.727051)"/>
                              </clipPath>
                            </defs>
                          </svg>
                    </div>
                </div>
            </div>
            <div class="image">
                <img src="Assets/Photo.png" id="photo">
            </div>
        </content>
    </div>
</body>
</html>