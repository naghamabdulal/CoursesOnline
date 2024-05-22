<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- START header -->
    <section class="navv">
        <div class="logo"> <a href="#home" class="logo">
                <h1>Education</h1>
            </a></div>

        <nav>
            <ul class="sidebar">
                <li onclick=hideside()> <a><img src="close_24dp_FILL0_wght400_GRAD0_opsz24.png" height="26" alt=""></a>
                </li>
                <li> <a href="#home">Home</a></li>
                <li> <a href="#about">about</a></li>
                <li> <a href="#courses">courses</a></li>
                <li> <a href="#teachers">teachers</a></li>
                <li> <a href="#reviews">reviews</a></li>
                <li> <a href="#joinus">join us</a></li>
            </ul>




            <ul>
                <!-- NOTE : GIVE IT CLASS HIDEON MOBILE TO DISPLAY NONE IN CSS -->
                <li> <a href="#home" class="hideOnMobile">Home</a></li>
                <li> <a href="#about " class="hideOnMobile">about</a></li>
                <li> <a href="#courses" class="hideOnMobile">courses</a></li>
                <li> <a href="#teachers" class="hideOnMobile"> teachers</a></li>
                <li> <a href="#reviews" class="hideOnMobile">reviews</a></li>
                <li> <a href="#joinus" class="hideOnMobile">join us</a></li>
                <li class="menu-button"><a href="" onmouseover=showSidebar()> <img
                            src="hamburger-button-computer-icons-menu-clip-art-menu-thumbnail.jpg" class="sbar"></a>
                </li>
            </ul>
        </nav>
    </section>

    <!-- header end -->
    <!-- start home -->
    <section class="home" id="home">
        <div class="roww">
            <div class="image">
                <img id="img" src="pic/Confused-Woman-Work-On-Laptop-Cartoon-Graphics-63402946-1-1-580x387.png"
                    alt="" />
            </div>
            <div class="content">
                <h3 id="landing">Online Courses</h3>
                <button class="btn" id="contact-btn">Contact Us</button>
            </div>
        </div>
    </section>
    <!-- end home -->


    <!-- box start -->
    <section class="count">
        <div class="box-container">
            <div class="box">
                <div class="contant">
                    <img src="pic/icons8-course-50.png" alt="" height="60px" />
                    <h4>150+</h4>
                    <p>courses</p>
                </div>
                <div class="box">
                    <div class="contant">
                        <img src="pic/icons8-students-64.png" alt="" />
                        <h4>2000+</h4>
                        <p>students</p>
                    </div>
                </div>
                <div class="box">
                    <div class="contant">
                        <img src="pic/icons8-school-director-50.png" alt="" height="60px" />
                        <h4>90+</h4>
                        <p>teachers</p>
                    </div>
                </div>
            </div>
    </section>
    <!-- box end -->
    <!-- about section start-->
    <section class="about" id="about">
        <div class="roww">
            <div class="image">
                <img src="pic/young-man-working-on-laptop-illustration-in-flat-cartoon-style-vector.jpg" alt=""
                    class="images">
            </div>
            <div class="content">
                <h3 class="h"> why you choose us?</h3>
                <p class="para">Among the many benefits of an online learning, you are will find virtual classrooms
                    are great for people who are advancing their education while working</p>

                <button class="btn" id="contact-btn2">Contact Us</button>
            </div>
        </div>

    </section>



    <!-- end about us -->
    <!-- courses start -->
    <div class="courses" id="courses">
        <h1 class="heading">Our <span> Courses</span></h1>

        <div class="cover ">
            <div class="boxy">
                <img src="pic/download.png" alt="">
                <h2>Graphic design</h2>
                <p> projecting ideas with visual and textual content</p>
            </div>
            <div class="boxy">
                <img src="pic/images.png" alt="">
                <h2>Web development</h2>
                <p>This course work ondeveloping a website for the Internet</p>
            </div>
            <div class="boxy">
                <img src="pic/digitalmar.jpg" alt="">
                <h2>Digital Marketing</h2>
                <p> connect with potential customers using
                    the internet and digital communication</p>
            </div>
            <div class="boxy">
                <img src="pic/istockphoto-1173996894-612x612.jpg" alt="">
                <h2>Science and biology</h2>
                <p>study of living things and their vital processess</p>
            </div>
            <div class="boxy">
                <img src="pic/civil-engineer-cartoon-character-vector-illustration_188398-1498.avif" alt="">
                <h2>engineering</h2>
                <p>the engineering design process to solve
                    technical problems</p>
            </div>
            <div class="boxy">
                <img src="pic/boy-teaching.png" alt="">
                <h2>English Course</h2>
                <p> The practice implemented by a teacher aimed at transmitting skill</p>
            </div>
        </div>
        <!-- end of courses -->



        <section class="teachers" id="teachers">
            <h1 class="heading"> Expert <span>tutors</span></h1>

            <div class="cover">
                <div class="box2">
                    <div class="imgt"> <img src="pic/images (2).jpg" alt=""></div>
                    <h2>Ali Ahmad</h2>
                    <p>Calculus Instructor that make calculus more clear</p>
                </div>
                <div class="box2">
                    <div class="imgt"> <img src="pic/teacher.png" alt=""></div>
                    <h2>Teya Ali</h2>

                    <p>English Instructor that make english as a game for students</p>
                </div>

                <div class="box2">
                    <div class="imgt"> <img src="pic/images.jpg" alt=""></div>
                    <h2>Mohammed Omar</h2>
                    <p> physics Instractor make the students love phy </p>
                </div>
            </div>

        </section>


        <!-- teachers end -->
        <!-- reviews start -->
        <section class="reviews" id="reviews">
            <h1 class="heading"> students <span>reviews</span></h1>
        </section>

        <form action="connect.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" class="text" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" class="email" required>

            <label for="course">Course Name:</label>
            <input type="text" class="text" id="course" name="course" required>

            <label for="rating">Rating (out of 5):</label>
            <input type="number" id="rating" name="rating" min="1" max="5" required>

            <label for="review">Your Review:</label>
            <textarea id="review" name="review" required></textarea>

            <input type="submit" value="Submit Review" class="submit" name="submit">
        </form>


        <!-- revies end -->
        <!-- joinus -->
        <div class="co">
            <section class="reviews" id="joinus">
                <h1 class="heading"> Join<span>Us</span></h1>

            </section>

            <form action="connect.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="text" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required class="email">

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required class="password">

                <input type="submit" value="Create Account" class="submit" name="joinus">
            </form>
        </div>



        <footer>
            <h3 class="footer">Thank you for visiting our website</h3>
        </footer>
















        <script src="main.js"></script>
</body>

</html>