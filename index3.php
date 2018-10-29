<!--divs om elkaar heen bouwen. Zoveel mogelijk styling in de buitenste divs, zoveel mogelijk centraal houden
position: absolute: betekent dat de positie bepaald wordt vanaf links of rechts op de pagina, onafhankelijk van de locatie van de div
comment: command / (1regel)
boxshadow: x (-2 2), y, blurry, kleur-->

<!--ntd: animaties, database?, event listeners,        

git, form uitbreiden (numbers), hamburger weg bij click-out (Farhad body onclick display none?) slideout menu Alex, SQL,  

digitale klok
to-do lijst (twitter stijl grote foto, opacity)
tic tac toe, 
snake, 
currency converter
rekenmachine, 
Accordeon image gallery, 

editor.autoClosingBrackets?-->

<!DOCTYPE html>
<html>
<head>
<title>portfolio_sjoerd_veenstra</title>
<link rel="stylesheet" type="text/css" href="stylesheet3.css">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>

<body>
<!--header, navigation menu-->
<div id="topbar">
                
        <!-- <header> -->
                <!-- <h1></a></h1> -->
        <!-- </header> -->
        <a href="#About_me"><img src="images/screen2cropped.png" id="grow" height="70px" width="52px"></a>
    
         <nav>
                 <ul>
                        <li><h2><a href="#About_me" id="grow">About me</a></h2></li>
                        <li><h2><a href="#Quick_look">Quick look</a></h2></li>
                        <li><h2><a href="#Portfolio">Portfolio</a></h2></li>
                        <li><h2><a href="#Contact_me">Contact me</a></h2></li>
                </ul>
        </nav>

        <!--Hamburger menu start-->
        <div id="hamburger"><img src="images/hamburgermenu2.png" height="40px" width="40px" onclick="dropdownToggle()">
              <div id= "dropdown" onclick="clickOutside()">
                        <ul>
                                <li><h2><a href="#About_me">About me</a></h2></li>
                                <li><h2><a href="#Quick_look">Quick look</a></h2></li>
                                <li><h2><a href="#Portfolio">Portfolio</a></h2></li>
                                <li><h2><a href="#Contact_me">Contact me</a></h2></li>
                        </ul>    
              </div>

        </div>
    <!--Hamburger menu end -->
</div>

  <!-- Hero header start------------------------- -->
<div class="hero-image">
        <div class="hero-text">
                <h1>I am Sjoerd Veenstra</h1>
                <p>And I'm a junior fullstack web developer in training</p>
                <button id="grow"><a href="https://www.linkedin.com/in/sjoerd-veenstra-657093b1/" style="color:rgb(96, 171, 196); font-weight:bolder;" target="_blank">Hire me</a></button>
        </div>
</div>
  <!-- Hero header end -------------------------- -->


<!--sections, tables-->
<div id="home"></div>  
        <div id="About_me"></div>  
                <section class="section1">
            
                        <div id="call-to-action"><h1><a href="#Portfolio">Take a look at my study-projects!</a></h1></div> 
        
       <!--progressbar start-->

       <div class="grid-container">
                       
                <div id="progressbar" class="grid-item">
                       HTML:<br>
                        <progress value="35" max="100"></progress><br>
                       CSS:<br> 
                        <progress value="35" max="100"></progress><br>
                       Javascript:<br> 
                        <progress value="22" max="100"></progress><br>
                       PHP:<br>
                        <progress value="15" max="100"></progress><br>
                </div>

                <div id="introtext" class="grid-item">
                       <p>
                               My name is Sjoerd Veenstra, and I am a junior fullstack Web developer in training. I'm currently working on my front-end and back-end development skills, learning the ins and outs of HTML, CSS, Javascript and PHP. I've already aquired the Sololearn certificates of all four languages. I am proficient in several other software programs, such as Oracle client systems, Adobe Indesign, Adobe Illustrator and of course desktop appliances, such as Microsoft Office and it's MacOs counterparts Pages, Numbers and Keynote.
                       </p>   
                </div>
        </div>
               
        <!--progress bar end-->
                </section>
    
   
     <!--section 2------------------------------------------------------ -->
    <div id="Quick_look"></div>
       <section class="section2"><h1>Quick look</h1>

        <!--Slideshow----------------------------------------------------------- -->
                <div class="slideshow-container">
                        
                        <div class="mySlides fade">
                                <div class="numbertext">1 / 3</div>
                                        <img src="images/pic1.jpg" style="width:100%">
                                <div class="text"></div>
                        </div>

                        <div class="mySlides fade">
                                <div class="numbertext">2 / 3</div>
                                        <img src="images/pic2.jpg" style="width:100%">
                                <div class="text"></div>
                        </div>

                        <div class="mySlides fade">
                                <div class="numbertext">3 / 3</div>
                                        <img src="images/pic3.jpg" style="width:100%">
                                <div class="text"></div>
                        </div>

                        <div>
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <div style="text-align:center">
                                <span class="dot" onclick="currentSlide(1)"></span> 
                                <span class="dot" onclick="currentSlide(2)"></span> 
                                <span class="dot" onclick="currentSlide(3)"></span> 
                        </div>        
        </section>
     <!--end slideshow------------------------------------------------------ -->

       
       <!--section 3------------------------------------------------------ -->
     <div id="Portfolio"></div>
        <section class="section3"><h1>Portfolio</h1>
              


            </section>

     <!--section 4------------------------------------------------------ -->         
         <div id="Contact_me"></div>
                 <section class="section4"><h1>Contact me</h1>
                                <form action="applications/AMPPS/www/thanks.php" method="post" name="contactform" onsubmit="returnValidateForm() && 
                                validatePhoneNumber()">
                                        <input type="text" name="name" placeholder="Your name (required)" id="formrest"><br>
                                        <input type="email" name="email" placeholder="Your e-mail (required)" id="formrest"><br>
                                        <input type="number" name="phone" placeholder="Your phone number (required)" id="formrest"
                                        class = "phoneval"><br>
                                        <input type="text" name="subject" placeholder="Subject (required)" id="formrest"><br>
                                        <textarea rows="4" cols="50" placeholder="Your message..." id="formrest"></textarea><br>
                                        <input type="submit" name="submit" value="Submit" id="submitbutton" ><br>
                                </form>

                                <p>
                                        <h6>E-mail:<br>
                                        s.veenstra89@gmail.com</h6><br>
                                        <h6>Phone number:<br>
                                        (+31) 6 29 23 44 17</h6><br>
                                        <a href="https://www.linkedin.com/in/sjoerd-veenstra-657093b1/" target="_blank">
                                        <img src="images/linkedin.png" id="grow" style="width:45px; height:45px; margin-top: 5px;""></a>
                                </p>
                </section>

<!--footer-->
        <div id="footerbar">
                <footer>
                        <h4><a href="#home">Home</a></h4>
                </footer>
        </div>

    <script src="scripting3.js"></script> 
</body>

</html>
