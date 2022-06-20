<?php

session_start();

if(!isset($_SESSION["user_id"])){
    header("Location: Login1.php");
  }

// echo $_SESSION["user_id"];    show which no. of user has logged in

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Ǥᗴ丅ᕼᎥᖇᗴᗪ</title>
    <link rel="stylesheet" href="main.css">
    <!-- for review -->
    <!--Fav-icon----------------------------------->
    <link rel="shortcut icon" href="https://cdn2.vectorstock.com/i/1000x1000/80/06/abstract-comment-logo-icon-design-template-element-vector-30598006.jpg"/>
    <!--poppins-font-family------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--using-Font-Awesome-------------------------------->
    <script src="http://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="flex">
            <div class="logo">
                <h1 style="font-size: 25px; padding: 0px; margin:0px; color: white; font-weight: 600;">  Ǥᗴ丅<span style="color: #FFB320;">ᕼᎥᖇᗴᗪ</span></h1>
            </div>
            <nav>
                <button id="nav-toggle" class="hamburger-menu">
                    <span class="strip"></span>
                    <span class="strip"></span>
                    <span class="strip"></span>
                </button>
                <ul id="nav-menu-container">
                    <li><a href="#">Home</a></li>
                    <li><a href="#recent-games">Popular Jobs</a></li>
                    <li><a href="AboutUs.php">About Us</a></li>
                    <li><a href="logout.php">Log Out</a></li>

                </ul>
            </nav>
            <a href="#aman" id="Contact-Us-button">Contact Us</a>
        </div>
    </header>

    <main>
        <div class="slider">
            <div class="slides">
              <!--radio buttons start-->
              <input type="radio" name="radio-btn" id="radio1">
              <input type="radio" name="radio-btn" id="radio2">
              <input type="radio" name="radio-btn" id="radio3">
              <input type="radio" name="radio-btn" id="radio4">
              <!--radio buttons end-->
              <!--slide images start-->
              <div class="slide first">
                <img src="g1.jpg" alt="">
              </div>
              <div class="slide">
                <img src="g2.jpg" alt="">
              </div>
              <div class="slide">
                <img src="g3.jpg" alt="">
              </div>
              <div class="slide">
                <img src="g4.jpg" alt="">
              </div>
              <!--slide images end-->
              <!--automatic navigation start-->
              <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
              </div>
              <!--automatic navigation end-->
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
              <label for="radio1" class="manual-btn"></label>
              <label for="radio2" class="manual-btn"></label>
              <label for="radio3" class="manual-btn"></label>
              <label for="radio4" class="manual-btn"></label>
            </div>
            <!--manual navigation end-->
          </div>
          <!--image slider end-->
      
          <script type="text/javascript">
          var counter = 1;
          setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 4){
              counter = 1;
            }
          }, 5000);
          </script>
      
        
        <section id="latest-news">
            <div class="flex">
                <h5 style="text-align: center; font-size: 22px;">Resume is the basic need..</h5>
                <div id="latest-news-container">
                    <div class="latest-news-item">
                        <span class="badge new"><a href="https://www.resume.com/">Resume Builder</a></span>
                    </div>
                </div>
            </div>
            
        </section>

        <section id="game-types-boxes">
            <div class="flex">
                <div class="box new">
                    <div class="shade"></div>
                    <span class="badge new">Google</span>
                    <div class="contents">
                        <h2 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px;">SOFTWARE ENGINEER</h2>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;"  >Experience : 0-3yrs<br>Salary : ₹ 10,50,000 - 15,50,000 P.A.<br>Location : Banglore </h5>
                        <a class="apply-btn" href="form.php" id="login-register-button" >Apply</a>
                    </div>
                </div>

                <div class="box strategy">
                    <div class="shade"></div>
                    <span class="badge strategy">Amazon</span>
                    <div class="contents">
                        <h2 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px;">Full Stack web developer</h2>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;" >Experience : 0-3yrs<br>Salary : ₹ 7,00,000 - 10,50,000 P.A.<br>Location : Chandigarh </h5>
                        <a class="apply-btn" href="form.php" id="login-register-button">Apply</a>
                    </div>
                </div>

                <div class="box rpg">
                    <div class="shade"></div>
                    <span class="badge rpg">Uber</span>
                    <div class="contents">
                        <h2 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px;">Android Developer</h2>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;">Experience : 3+ yrs<br>Salary : ₹ 2,00,000 - 3,25,000 P.A.<br>Location : Surat </h5>
                        <a class="apply-btn" href="form.php" id="login-register-button">Apply</a>
                    </div>
                </div>

                <div class="box racing">
                    <div class="shade"></div>
                    <span class="badge racing">Microsoft</span>
                    <div class="contents">
                        <h2 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px; padding-bottom: 35px;">ML Engineer</h2>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;">Experience : 2-5 yrs<br>Salary : ₹ 10,00,000 - 15,50,000 P.A.<br>Location : Hyderabadh </h5>
                        <a class="apply-btn" href="form.php" id="login-register-button">Apply</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="recent-games">
            <h1>Popular Jobs</h1>
            <div class="flex">
                <div class="box new">
                    <span class="badge new">Google</span>
                    <img src="g9.PNG" />
                    <div class="box-lower-section">
                        <h3 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px;">Data Scientist</h3>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;">Experience : 4+ yrs<br>Salary : ₹ 8,60,000 - 16,50,000 P.A.<br>Location : Dehradun</h5>
                        <a href="form.php" id="login-register-button">Apply</a>
                    </div>
                </div>

                <div class="box">
                    <span class="badge racing">Facebook</span>
                    <img src="g10.png" />
                    <div class="box-lower-section">
                        <h3 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px;">Cloud Engineer</h3>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;">Experience : 3+ yrs<br>Salary : ₹ 8,70,000 - 13,50,000 P.A.<br>Location : Ranchi</h5>
                        <a href="form.php" id="login-register-button">Apply</a>
                    </div>
                </div>

                <div class="box">
                    <span class="badge adventure">Microsoft</span>
                    <img src="g12.png" />
                    <div class="box-lower-section">
                        <h3 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px;">Node JS Developer</h3>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;">Experience : 1+ yrs<br>Salary : ₹ 5,00,000 - 9,50,000 P.A.<br>Location : Mumbai</h5>
                        <a href="form.php" id="login-register-button">Apply</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="tournaments">
            <div class="flex">
                <span class="badge tournaments">Why Both love us </span>
                <div class="box">
                    <span class="badge premium-tournament">Job Seekers</span>
                    <div class="tournaments-image"> 
                    </div>
                    <div class="tournaments-content">
                        <div><label>* </label> <strong>Unique jobs at startups and tech companies you can't find anywhere else..</strong></div>
                        <div><label>* </label> <strong>Everything you need to know to job search - including seeing salary and stock options upfront when looking..</strong></div>
                        <div><label>* </label> <strong>Connect directly with founders at top startups - no third party recruiters allowed..</strong></div>
                        
                    </div>
                </div>

                <div class="box">
                    <span class="badge premium-tournament">Job recruiters</span>
                    <div class="tournaments-image">
                    </div>
                    <div class="tournaments-content">
                        <div><label>* </label> <strong>Popular online job portal..</strong></div>
                        <div><label>* </label> <strong>8 million responsive and startup-ready candidates, with all the information you need to vet them..</strong></div>
                        <div><label>* </label> <strong>Everything you need to kickstart your recruiting - get job posts, company branding, and HR tools set up within 10 minutes, for free..</strong></div>                    
                        
                    </div>
                </div>
            </div>
        </section>
        
        <section id="testimonials">
        <!--heading--->
        <div class="testimonal-heading">
            <h1>Hired Employee Says</h1>
            </div>
            <!--testimonials-box-container---------->
            <div class="testimonial-box-container">

                <!--BOX-1------------------------->
                <div class="testimonial-box">
                <!--top------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="https://i0.wp.com/ieltsfever.org/wp-content/uploads/2022/02/Describe-a-Company-Where-You-Live-that-Employs-a-Lot-of-People-Speaking-Cue-Card-1-1.jpg?fit=1200%2C800&ssl=1"/>
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Anant Dev Pandey</strong>
                            <span>@crazzy_beautiful_mind</span>
                        </div>
                        </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                    </div>

                    <!--Comments---------------------------------->
                    <div class="client-comment">
                        <p>Get-Hired has helped us tremendously to build and plan according to the recruitment challenges.  Especially the Client Relations Personnel who have always facilitated and guided us through tough times.  If you are someone who wishes to attain your business goals by hiring expert resources, then Get-Hired is an apt and compelling partner to start with!</p>
                    </div>
                    </div>

                    <!--BOX-2------------------------->
                <div class="testimonial-box">
                <!--top------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="data:image/jpeg;base64,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"/>
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Deepak Kumar</strong>
                            <span>@deepak_dallan</span>
                            </div>
                        </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                        </div>
                    </div>

                    <!--Comments---------------------------------->
                    <div class="client-comment">
                        <p>Get-Hired is an excellent job portal, we value the resumes received through this channel. It provides relevant and accurate matches as per the job openings. Magic Search and Power search are extremely useful tools. We are very satisfied with their service. We thank Get-Hired for providing quality search and service over the years.</p>
                        </div>
                    </div>

                    <!--BOX-3------------------------->
                <div class="testimonial-box">
                <!--top------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="data:image/jpeg;base64,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"/>
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Rahul Raj</strong>
                            <span>@rahulraj</span>
                            </div>
                        </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><!--Empty star-->
                        </div>
                    </div>

                    <!--Comments---------------------------------->
                    <div class="client-comment">
                        <p>The Get-Hired database has been one of our reliable sources for recruitment, backed by a very efficient team who would go out of their way to make sure that requests are taken ahead with immediate and complete closure. Also, their services are any day more economical than print. This kind of prompt, valuable and value for money service is appreciated!</p>
                        </div>
                    </div>

                    <!--BOX-4------------------------->
                <div class="testimonial-box">
                <!--top------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgDWZWilnCme9GButXnYJiZOYP-lnYaaOrsmnmZYtyKUedPXUKR_fB9ltUCesPJlzbDm0&usqp=CAU"/>
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Harsh Vishnoi</strong>
                            <span>@harshvishnoi</span>
                            </div>
                        </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                        </div>
                    </div>

                    <!--Comments---------------------------------->
                    <div class="client-comment">
                        <p>The portal is very user friendly in terms of searching resumes and job postings. Also, they have a good database to search resumes. As far as services are concerned it�s excellent! Their turnaround time for resolving any issue is just a few minutes and that is really appreciable. Their Business Development Team is always there to help at any point of time. Thank you so much for all your effort.</p>
                        </div>
                    </div>
                </div>
            </section>

        <section class="team-wrapper"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-light">
                        <div class="section-title">
                            <h2>Our Team</h2>
                            <p>The best teamwork comes from men who are working independently toward one goal in unison..</p>
                        </div>
                    </div>
                </div>
    
                <div class="row">
    
                    <!-- Our Team item start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="team-item">
                            <div class="item-image">
                                <img src="teamleader1.jpg" alt="" width="100%" height="395px">
                            </div>
                            <div class="item-meta">
                                <h3 class="item-title">Aman Singh Negi</h3>
                                <h6 class="item-position">20BCS9380</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Our Team item end -->
    
                    <!-- Our Team item start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="team-item">
                            <div class="item-image">
                                <img src="team-member2.jpg" alt="" width="100%">
                            </div>
                            <div class="item-meta">
                                <h3 class="item-title">Kunwar Vabhav Mishra</h3>
                                <h6 class="item-position">20BCS9361</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Our Team item end -->
    
                    <!-- Our Team item start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="team-item">
                            <div class="item-image">
                                <img src="team-member4.jpg" alt="" width="100%" height="395px">
                            </div>
                            <div class="item-meta">
                                <h3 class="item-title">Nagendra Singh</h3>
                                <h6 class="item-position">20BCS9395</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Our Team item end -->
    
                    <!-- Our Team item start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="team-item">
                            <div class="item-image">
                                <img src="team-member3.jpg" alt="" width="100%" height="395px">
                            </div>
                            <div class="item-meta">
                                <h3 class="item-title">Keshav</h3>
                                <h6 class="item-position">20BCS9369</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Our Team item end -->
    
                </div>
            </div>
        </section>
        
    
        <!-------- Bootstrap Bundle Js-------->
        <script src="bootstrap.bundle.min.js"></script>
    </main>

    <footer style="width: 100%; background: rgba(0,0,0,0.9);">
        <div class="flex">
            <small>Copyright &copy; 2022 All rights reserved </small>
            <p id="aman" style="margin: 0px; padding: 0px; position: relative; bottom: 0px;">Contact Us - <span> <a href="#" style="color: #E92159;">hiredget8@gamil.com </a></span> </p>
        </div>
    </footer>
</body>
</html>