<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="author" content="Charles Miller">
        <meta name="description" content="Digital Portfolio for Charles Miller - Web Developer, Software Engineer, UX/UI Designer">
        <meta property="og:image" content="assets/logo.png">
        <meta property="og:description" content="Digital Portfolio for Charles Miller - Web Developer, Software Engineer, UX/UI Designer">
        <meta property="og:title" content="Charles Miller | Web Developer, Software Engineer, &amp; UX/UI Designer">
        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/site.webmanifest">
        <!-- SET VIEWPORT SCALING -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/kvl0bwk.css">
        <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <!-- RECAPTCHA -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <!-- SLICK -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- MY STYLES -->
        <link rel="stylesheet" href="css/dark.css" title="default">
        <link rel="alternate stylesheet" href="css/light.css" title="alternate">
        

        <title>Charles Miller | Web Developer - Software Engineer - UX/UI Designer</title>

    </head>
    <body onload="hideIntro(), setCookie('charlesmiller.dev','noVideo',1);">

        <header>
            <nav class="navbar d-none d-lg-flex col-12">
                <a href="#"><img src="assets/logoDark.png" alt="logo" class="navbar__image" id="logo"></a>

                <ul class="navbar__links col-8">
                    <li><a href="#homeJump" id="home">HOME</a></li>
                    <li><a href="#aboutJump" id="about">ABOUT ME</a></li>
                    <li><a href="#projectsJump" id="projects">PROJECTS</a></li>
                    <li><a href="#contactJump" id="contact">CONTACT ME</a></li>
                </ul>
                <!-- THEME BUTTONS -->
                <button type="button" id="darkMode" onclick="toggleTheme(this)"><i class="fas fa-moon fa-2x"></i></button>
                <button type="button" id="lightMode" onclick="toggleTheme(this)"><i class="fas fa-sun fa-2x"></i></button>

                <ul class="navbar__social">
                    <li><a href="mailto:charles@charlesmiller.dev"><i class="fas fa-envelope-square fa-3x"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/charlesmiller0412" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a></li>
                    <li><a href="https://www.github.com/charlesmiller0412" target="_blank"><i class="fab fa-github-square fa-3x"></i></a></li>
                    <li><a href="https://www.behance.net/charlesmiller0412" target="_blank"><i class="fab fa-behance-square fa-3x"></i></a></li>
                </ul>
            </nav>

            <!-- BEGIN MOBILE NAV -->
            <nav class="mobileNav d-lg-none">
            <a href="#"><img src="assets/logoDark.png" alt="mobile logo" id="logoMobile"></a>
            <button type="button" id="darkMode" onclick="toggleTheme(this)"><i class="fas fa-moon fa-3x"></i></button>
            <button type="button" id="lightMode" onclick="toggleTheme(this)"><i class="fas fa-sun fa-3x"></i></i></button>
                <div class="mobileNav__overlay" id="mobileNav">
                    <div class="mobileNav__overlay-links">
                        <ul>
                            <a href="#homeJump"><li id="home" onclick="toggleNav()">Home</li></a>
                            <a href="#aboutJump"><li id="about" onclick="toggleNav()">About</li></a>
                            <a href="#projectsJump"><li id="projects" onclick="toggleNav()">Projects</li></a>
                            <a href="#contactJump"><li id="contact" onclick="toggleNav()">Contact</li></a>
                            <li class="mobileNav__overlay-links--social">
                                <a href="mailto:charles@charlesmiller.dev"><i class="fas fa-envelope-square fa-3x" onclick="toggleNav()"></i></a>  
                                <a href="https://www.linkedin.com/in/charlesmiller0412" target="_blank"><i class="fab fa-linkedin fa-3x" onclick="toggleNav()"></i></a>
                                <a href="https://www.github.com/charlesmiller0412" target="_blank"><i class="fab fa-github-square fa-3x" onclick="toggleNav()"></i></a>
                                <a href="https://www.behance.net/charlesmiller0412" target="_blank"><i class="fab fa-behance-square fa-3x" onclick="toggleNav()"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mobileButton__container" onclick="toggleNav(this)">
                    <div class="bar1" id="bar1"></div>
                    <div class="bar2" id="bar2"></div>
                    <div class="bar3" id="bar3"></div>
                </div>
            </nav>
        </header>


        <main>
            <!-- INTRO SHAPES -->
            <section class="intro" id="intro">
                <div class="intro__blink"></div>
                <img src="assets/introLogoDark.png" alt="logo" class="intro__image">
                <div class="intro__block"></div>
                <div class="intro__block-1"></div>
                <div class="intro__block-2"></div>
                <div class="intro__block-3"></div>
                <div class="intro__block-4"></div>
            </section>

            <!-- COOKIE BANNER -->
            <div class="cookie__container">
                <div class="cookie__container-text">
                    <p>
                        By using this website, you agree to the use of cookies. Cookies are used to remove the introduction
                        video so it does not replay for 3 days.<br>
                        <button type="button" class="cookie-btn" onclick="deleteCookie('charlesmiller.dev')">Delete cookie to play video again.</button>
                    </p>
                    <button type="button" class="cookieClose-btn" onclick="closeCookie()"><i class="fas fa-times fa-2x"></i></button>
                </div>
            </div>

            <section class="home" id="homeJump">
                <div class="home__text">
                    <h1>CHARLES MILLER</h1>
                    <h2>Front-End Web Developer | Software Engineer | UX/UI designer</h2>
                </div>
            </section>

            <section class="about d-lg-flex justify-content-center align-items-center" id="aboutJump">
                <div class="about__image pt-5 pt-lg-0 text-center">
                    <img src="assets/photo.png" alt="my photo" class="m-auto">
                </div>

                <div class="about__text pt-2 col-11 col-lg-5">
                    <p>
                        My long time passion has been to create beautiful websites and applications
                        using the appropriate project lifecycle and the latest technologies. I use my passion for design
                        and my knowledge of code to design and bring the most intricate projects to life.
                    </p>
                    <p>
                        I spent my early adult life serving as a firefighter in the United States Air Force and the
                        Department of Defense before being told I could no longer perform the duties due to a medical
                        condition. I took this as my opportunity to pursue my passion in web development (that I had
                        been doing as a hobby for 16 years) as a career.
                    </p>
                    <p>
                        I am now able to combine the Air Force core values (Integrity, Service, and Excellence) with my
                        own (Ambition, Detail Oriented, Professional, and Compassion) in order to be a great asset to
                        any company.
                    </p>
                </div>
            </section>

            <section class="projects d-flex justify-content-center" id="projectsJump">
                <div class="slick__container d-flex justify-content-center">
                    <div class="projects__container" id="weatherAPP">
                        <div class="projects__container-image">
                            <img src="assets/projects/weatherImage.png" alt="Weather app image">
                        </div>
                        <div class="projects__container-text">
                            <p>
                                Given the task to create a project that would display my skills and knowledge that were obtained
                                while completing my degree. This opportunity was used to challenge myself and learn something
                                new while still applying my already known skills. A web application using React.JS was the chosen 
                                project. Within React, OpenWeatherMap API using JSON was used for all of the data that was necessary 
                                to populate the application. This project was delivered fully operational and on-time with proper 
                                validation to ensure there is no failure within the application.
                            </p>
                            <h5>Created with React, CSS, Bootstrap, JSON, API</h5>
                        </div>
                        <div class="projects__container-links text-center">
                            <button class="btn"><a href="https://www.charlesmiller.dev/weather-app/" target="_blank">See the site</a></button>
                            <button class="btn"><a href="https://github.com/charlesmiller0412/weatherApp" target="_blank">See the code</a></button>
                    </div>
                </div> 


                <div class="projects__container" id="dutchBros">
                    <div class="projects__container-image">
                        <img src="assets/projects/dutchBros.jpg" alt="Dutch Bros Image">
                    </div>
                    <div class="projects__container-text">
                        <p>
                            The Dutch Bros coffee chain website had several issues and needed a complete redesign. To
                            achieve the results that we had presented to the Dutch Bros, we conducted several usability tests
                            and created multiple prototypes in order to ensure all errors and issues identified in testing were
                            resolved.
                        </p>
                        <h5>Strategy included Usability Testing, Persona Creation, Mockups delivered through Adobe XD.</h5>
                    </div>
                    <div class="projects__container-links text-center">
                        <button class="btn"><a href="/dutchbros.html" target="_blank">See My Process</a></button>
                    </div>
                </div>

                <div class="projects__container" id="natours">
                    <div class="projects__container-image">
                        <img src="assets/projects/natours.png" alt="natours image">
                    </div>
                    <div class="projects__container-text">
                        <p>
                            Natours is a landing page for a company that provides multi-day nature tours to groups. This
                            landing page was very detailed and includes many different engaging effects for the user to
                            include a video for a background and rotating cards using only SCSS while also being fully
                            responsive. This gave an enjoyable experience to the user while incorporating a very unique
                            design to make Natours memorable.
                        </p>
                        <h5>Created with HTML, Bootstrap, SCSS</h5>
                    </div>
                    <div class="projects__container-links text-center">
                        <button class="btn"><a href="https://www.charlesmiller.dev/projects/Web/natours/index.html" target="_blank">See the site</a></button>
                        <button class="btn"><a href="https://github.com/charlesmiller0412/natours" target="_blank">See the code</a></button>
                    </div>
                </div>

                <div class="projects__container" id="twoTrees">
                    <div class="projects__container-image">
                        <img src="assets/projects/twotrees.png" alt="two trees image">
                    </div>
                    <div class="projects__container-text">
                        <p>
                            Tasked with creating a web page based on the given design file (Sketch/Figma), I was able to
                            successfully deliver a near pixel perfect page based on desktop view. This was one of my very
                            first projects and am currently working to make it fully responsive as well.
                        </p>
                        <h5>Created with HTML, CSS</h5>
                    </div>
                    <div class="projects__container-links text-center">
                        <button class="btn"><a href="https://www.charlesmiller.dev/projects/Web/Two%20Trees/index.html" target="_blank">See the site</a></button>
                        <button class="btn"><a href="https://github.com/charlesmiller0412/twotrees" target="_blank">See the code</a></button>
                    </div>
                </div>


                <div class="projects__container" id="hsa">
                    <div class="projects__container-image">
                        <img src="assets/projects/hsaPoster.png" alt="HSA poster image" class="tall">
                    </div>
                    <div class="projects__container-text">
                        <p>
                            This graphic was a compilation of both a logo design as well as a poster for the organization. My
                            initial task was to create the HSA logo based on the current branding of the company. Once the
                            logo was approved, the first poster was created based on the message HSA wanted to deliver,
                            “Celebrate 2020”. All images were delivered in appropriate color modes and resolutions.
                        </p>
                        <h5>Created with Adobe Illustrator, Adobe Photoshop</h5>
                    </div>
                    <div class="projects__container-links text-center">
                        <button class="btn"><a href="https://www.charlesmiller.dev/projects/Graphics/hsa_poster/Miller-poster1_fs.png" target="_blank">See my design</a></button>
                    </div>
                </div>
            </section>

            <section class="contact" id="contactJump">
                <form class="contact__form" method="post" name="contactform" action="index.php#contactJump">
                    <div class="contact__form-fields">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="E-Mail" required>
                        <input type="tel" name="phone" placeholder="Phone (Optional)">
                        <textarea name="message" aria-label="With textarea" placeholder="Message" required></textarea>
                        <div id="recaptcha">
                            <div
                                class="g-recaptcha"
                                data-sitekey=""
                            >
                            </div>
                            <div class="status">
                                <?php 
                                    if(isset($_POST['submit']))
                                        {
                                            $name = $_POST['name'];
                                            $visitor_email = $_POST['email'];
                                            $phone = $_POST['phone'];
                                            $message = $_POST['message'];

                                            $email_from = 'charles@charlesmiller.dev';
                                            $email_subject = 'Portfolio Form Submission';
                                            $email_body = "You have received a new message from " . $name .
                                            "\n\nEmail Address: " . $visitor_email .
                                            "\nPhone Number: " . $phone .
                                            "\nMessage:\n\n " . $message;

                                            $to = 'charles@charlesmiller.dev';
                                            $headers = 'From: ' . $visitor_email;

                                            $secretKey = '';
                                            $responseKey = $_POST['g-recaptcha-response'];
                                            $UserIP = $_SERVER['REMOTE_ADDR'];
                                            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";

                                            $response = file_get_contents($url);
                                            $response = json_decode($response);

                                            if ($response->success) {
                                                mail($to, $email_subject, $email_body, $headers);
                                                echo 'Message sent Successfully';
                                            } else {
                                                echo '<span>Invalid Captcha, Please Try Again</span>';
                                            }
                                        }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="contact__form-buttons text-center">
                        <input type="reset" class="btn">
                        <input type="submit" name="submit" value="Submit" class="btn" id="submitBtn">
                    </div>
                </form>
            </section>
        </main>


        <footer>
            Copyright &copy; Charles Miller. All rights reserved.
        </footer>

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!-- my script -->
        <script src="script.js"></script>
        <!-- SLICK -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        
        <script>

            // MOBILENAV
            function toggleNav() {
                $('.mobileNav__overlay').toggle("visible");
            }

            // THEME SELECTIONS
            function toggleTheme(x) {
                var styles = document.getElementsByTagName('link');
                if (x.id === 'darkMode') {
                    for (let i = 0; i < styles.length; i++) {
                        if (styles[i].getAttribute('href') === 'css/light.css') {
                            styles[i].setAttribute('href', 'css/dark.css');
                            $('#logo').attr('src', 'assets/logoDark.png');
                            $('#logoMobile').attr('src', 'assets/logoDark.png');
                            $('#darkMode').css('display', 'none');
                            $('#lightMode').css('display', 'flex');
                        }
                    }
                }
                if (x.id === 'lightMode') {
                    for (let i = 0; i < styles.length; i++) {
                        if (styles[i].getAttribute('href') === 'css/dark.css') {
                            styles[i].setAttribute('href', 'css/light.css');
                            $('#logo').attr('src', 'assets/logo.png');
                            $('#logoMobile').attr('src', 'assets/logo.png');
                            $('#lightMode').css('display', 'none');
                            $('#darkMode').css('display', 'flex');
                        }
                    }
                }
            }
            // HIDES INTRO AFTER 9 SECONDS
            function hideIntro() { 
                var x = getCookie('charlesmiller.dev');
                if (x) {
                    console.log('video skipped');
                    document.getElementById('intro').style.display='none';
                }
                setTimeout(
                    function() {
                    document.getElementById('intro').style.display='none';
                    }, 8000);
            }

              // COOKIES TO SKIP VIDEO
            function setCookie(name,value,days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days*24*60*60*1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "")  + expires + "; path=/";
            }
            function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for(var i=0;i < ca.length;i++) {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1,c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
                }
                return null;
            }

            function deleteCookie(name) {
                document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                console.log('cookie deleted');
                $('.cookie__container').css('display', 'none');
            }

            function closeCookie() {
                $('.cookie__container').css('display', 'none');
            }

        </script>
    </body>
</html>