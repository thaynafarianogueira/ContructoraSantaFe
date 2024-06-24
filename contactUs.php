<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="css/contactUs.css">
    <link rel="stylesheet" href="css/mqcontactus.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>

<body>
    <header id="image-header">
        <div class="alert alert-success" style="display: none;">
            <button type="button" data-dismiss="alert" class="alert-dismissible close" aria-label="Close"
                onclick="this.parentElement.style.display='none';">&times;</button>
        </div>
        <div class="alert alert-danger" style="display: none;">
            <button type="button" data-dismiss="alert" class="alert-dismissible close" aria-label="Close"
                onclick="this.parentElement.style.display='none';">&times;</button>
        </div>
        <div class="topnav" id="myTopnav">
            <img class="logo-header" src="logos/NewColor logo - no background.png" alt="" srcset="">
            <a href="#home" class="active"></a>
            <a href="index.html">HOME</a>
            <div class="dropdown">
                <button class="dropbtn">SERVICES</button>
                <div class="dropdown-content">
                    <a href="services.html">KITCHENS</a>
                    <a href="bathrooms.html">BATHROOMS</a>
                    <a href="additions.html">ADDITIONS</a>
                    <div class="dropdown-content">
                        <a href="concreteConstructions.html">CONCRETE CONSTRUCTIONS</a>
                        <a href="waterlandscaspes.html">WATERLAND SCAPES</a>
                        <a href="outdoors.html">OUTDOORS</a>
                        <a href="roof.html">ROOFS</a>
                    </div>


                </div>
            </div>
            <a href="aboutUs.html">ABOUT US</a>
            <a href="projects.html">PROJECTS</a>
            <a href="contactUs.php">CONTACT US</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

        <div id="text-header">

            <h1>Over 25 years of experience, Our team <br> is dedicated to delivery solutions

            </h1>


            <button id="btn-quote-header"><a href="contactUs.php">GET A QUOTE</a></button>
            <button id="btn-project-header"><a href="projects.html">VIEW PROJECTS</a> </button>
        </div>

    </header>
    <main class="bg-logo">
        <div class="title-contactUs">
            <div class="border">
                <img src="icons/h1-small.png" alt="" srcset="">
            </div>
            <div>
                <h1>Trust Constructora Santa Fe</h1>
                <small>Our team of experts is at yout complete disposal</small>
            </div>
        </div>

        <div class="text-contactU">

            <p>At Santa Fe Constructora, We feel deeply grateful for your trust and for having chosen us to serve your
                needs. Your <br> preference motivates us to continue working with passion and dedication, always
                offering the best quality in our services <br>
                For us, it is an honor that you gives us the opportunity to be part of yout project. We are committed to
                providing you with <br>
                personalized service, attention to detail and friendly treatment at all times. We appreciate your trust
                and we hope to <br>
                continue counting on your preference in the future</p>
            <h1>Thank you for being part of our history!</h1>
            <img src="icons/liner.png" alt="">
        </div>
    </main>


    <section>
        <form id="forms-click" action="#">
            <h1 class="title-forms">SHARE YOUR REMODELING <br>NEEDS WITH US:</h1>
            <div class="group-box-one">

                <div class="nameAddress">
                    <div class="input-box">
                        <label for="fullName"></label>
                        <input id="fullName" type="text" name="fullName" placeholder="Full Name*" required>
                    </div>
                    <div class="input-box">
                        <label for="yourAddress"></label>
                        <input id="yourAddress" type="text" name="yourAddress" placeholder="Your Address*" required>
                    </div>
                </div>

                <div class="numberEmail">
                    <div class="input-box">
                        <label for="phoneNumber"></label>
                        <input id="phoneNumber" type="tel" name="PhoneNumber" placeholder="Phone Number*" required>
                    </div>
                    <div class="input-box">
                        <label for="email"></label>
                        <input id="email" type="email" name="email" placeholder="e-mail*" required>
                    </div>
                </div>
            </div>


            <div class="input-box">
                <label for="msg"></label>
                <textarea id="msg" name="msg" rows="2" cols="53"
                    placeholder="How did you find out about Santa Fe?*"></textarea>
            </div>
            <div class="input-box">
                <label for="msg"></label>
                <textarea id="msg" name="msg" rows="2" cols="53" placeholder="How can we help?*"></textarea>
            </div>
            <div class="Schedule-btn">
                <button>
                    <a href="javascript:submitFormsClick()">Send Your Information</a>
                </button>
            </div>
        </form>

        <aside>

            <h1>SANTA FE CONSTRUCTORA</h1>
            <small>Lic. 1107963</small>
            <p><img src="icons/phoneIcon.png" alt=""> +1 (619) 455-0669</p>

            <p>
                <img src="icons/mailIcon.png" alt=""> caesar@santafe-companies.com <br>
                

            </p>
            <p>info@santafe-companies.com</p>

            <h2>Connect With Us:</h2>
            <div class="icons">
                <a href="https://www.facebook.com/santafelconstructora" target= "_blank"><img src="icons/face-icon-yellow.png" alt=""></a>
                <a href="https://www.instagram.com/santafelconstructora/?igsh=c3dtMmpoaTRxMHFw" target= "_blank"><img src="icons/insta-icon-yellow.png" alt=""></a>
            </div>

            <div class="call-btn">
                <button type="button">
                    <a href="#">Schedule initial Call Now</a>
                </button>
            </div>
        </aside>
    </section>


    <footer class="bg-footer">
                    <div id="footer_content">
                    <div id="footer_contacts">
                    <img src="logos/NewColor logo - no background-footer.png" alt="">
                
                
                    <div id="footer_social_media">
                    <a href="https://www.instagram.com/santafelconstructora/?igsh=c3dtMmpoaTRxMHFw" target="_blank" class="footer-link" id="instagram">
                        <img src="icons/insta-icon.png" alt="">
                    </a>
            
                    <a href="https://www.facebook.com/santafelconstructora" target="_blank" class="footer-link" id="facebook">
                        <img src="icons/face-icon.png" alt="">
                    </a>
                </div>
                    </div>
                
                    <ul class="footer-list">
                    <li>
                        <h3>SANTA FE COMPANIES</h3>
                        <p>Lic. 1107963</p>
                    </li>
                    <li>
                        <img src="icons/phoneIcon.png" alt="">
                        <a href="#" class="footer-link">+1 (619) 455-0669</a>
                    </li>
                    <li>
                        <img src="icons/mailIcon.png" alt="">
                        <a href="#" class="footer-link">caesar@santafe-companies.com</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">info@santafe-companies.com</a>
                    </li>
                    </ul>
                
                    <ul class="footer-list">
                        <li>
                            <h3>Site Map</h3>
                        </li>
                        <li>
                            <a href="index.html" class="footer-link">Home</a>
                        </li>
                        <li>
                            <a href="aboutUs.html" class="footer-link">About</a>
                        </li>
                        <li>
                            <a href="services.html" class="footer-link">Services</a>
                        </li>
                        <li>
                            <a href="projects.html" class="footer-link">Projects</a>
                        </li>
                        <li>
                            <a href="contactUs.php" class="footer-link">Contact</a>
                        </li>
                        <li>
                            <a href="privacyPolice.html" class="footer-link">Privacy Police</a>
                        </li>
                    </ul>
                
                    <div id="footer_subscribe">
                
                        <button class="btn-get">
                            <a href="contactUs.php">GET A QUOTE</a>
                        </button>
                
                    <div class="whatsapp-btn" >
                        <a href="#" id="whatsapp">
                            <img src="icons/whatsButton.png" alt="">
                        </a>
                    </div>
                
                    </div>
                    </div>
                
                    <div id="footer_copyright">
                    &#169
                    2024 all rights reserved
                    </div>
                    </footer>



    <script src="js/index.js"></script>
</body>

</html>