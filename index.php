<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr.V. Nagarjuna Maturu - Pulmonologist</title>
     <?php
       include "head.php";
     ?>
    <style>
        .slick-dots li button:before {
            font-size: 7px !important;
            top: 2px !important;
        }
        .slick-dots li button {
            border: 2px solid var(--orange-color) !important;
            border-radius: 50%;
        }
        .slick-dots li.slick-active button:before {
            opacity: 1 !important;
        }
        .slick-slide {
            height: auto !important;
        }
        .slick-dots {
            bottom: 40px !important;
        }
        .slick-dots li {
            width: 35px !important;
        }
        .slick-slide {
            outline: none !important;
        }
        .home-testimonial-main .slick-dots {
            bottom: -60px !important;
        }
        .testimonials img {
            width: 95%;
            border: 1px solid grey;
        }
        @media(max-width: 600px) {
            .slick-dots {
                bottom: -27px !important;
            }
            .slick-dots li button {
                width: 14px  !important;
                height: 14px !important;

            }
            .slick-dots li button:focus:before, .slick-dots li button:hover:before {
                line-height: 13px !important;
            }
            .slick-dots li button:before {
                top: -1px !important;
                width: 14px !important;
            }
            
        }
    </style>
    
   
</head>
<body>

<!-- header start here  -->
<?php
  include "header.html";
?>

<!-- header ends here  -->

<!-- hero section or slider section start here -->
<section class="home-slider header-height-manu">
    <div class="slider-bg"></div>
    <div class="home-slider-container main-slider">
        <!-- 1 -->
        <div class="slider">
            <a href="./about.php">
              <img src="./media/sliders/1-newslider.jpeg" alt="" class="desk-slider">
              <img src="./media/sliders/mobile-slider1.svg" alt="" class="mobile-slider">
            </a>
        </div>
        <!-- 2 -->
        <div class="slider">
            <a href="./interventional-pulmonology.php">
              <img src="./media/sliders/2-newslider.jpeg" alt="" class="desk-slider">
              <img src="./media/sliders/mobile-slider2.jpg" alt="" class="mobile-slider">
            </a>
        </div>
        <!-- 3 -->
        <div class="slider">
          <img src="./media/sliders/3-newslider.jpeg" alt="" class="desk-slider">
          <img src="./media/sliders/mobile-slider3.jpg" alt="" class="mobile-slider">
        </div>
        <!-- 4 -->
        <!-- 5 -->
    </div>
</section>

<!-- hero section or slider section ends here  -->

<!-- about section start here -->
<section class="home-about-main">
    <div class="home-about-container dr-container dr-flex">
        <div class="home-about-left">
            <img src="./media/about-home-img.png" alt="">
        </div>
        <div class="home-about-right overflow">
            <h1 data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">Dr. Venkata Nagarjuna Maturu</h1>
            <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">Dr. Venkata Nagarjuna Maturu is a renowned interventional pulmonologist and somnologist with over 8 years of experience in pulmonology medicine. Dr. Nagarjuna holds an M.D. in Internal Medicine, and D.M. in Pulmonary and Critical Care Medicine. He is an expert in conducting complex procedures like thoracoscopy, bronchoscopy, bronchial thermoplasty, and bronchoscopic cryotherapy.</p>
            <div data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">
                <a href="./about.php">Know More</a>
            </div>
        </div>
        <div class="home-about-more">
            <h2 data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">Achievements</h2>
            <ul>
                <li data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">Best undergraduate student in the department of medicine</li>
                <li data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000">Highest mark in single common exam in parasitology</li>
                <li data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">Highest mark in single notified prize exam in anaesthesiology</li>
                <li data-aos="fade-up" data-aos-delay="450" data-aos-duration="1000">Highest mark in single common exam in cardiology</li>
                <li data-aos="fade-up" data-aos-delay="550" data-aos-duration="1000">Highest marks in internal assessment in surgery</li>
            </ul>
            <div data-aos="fade-up" data-aos-delay="750" data-aos-duration="1000">
                <a href="./about.php#achievements">Know More</a>
            </div>
        </div>
    </div>
</section>

<section class="home-about-nav">
    <div class="home-aboutnav-container dr-container dr-flex">
        <!-- 1 -->
      
        <!-- 2 -->
        <div class="home-aboutnav-box">
            <div class="home-aboutnavinnerbox" data-aos="zoom-out" data-aos-delay="50" data-aos-duration="1000">
              <ul class="dr-flex">
                <a href="./about.php#awards">
                   <li class="dr-flex"><img src="./media/award-img.svg" alt=""><span>Awards</span></li>
                </a>
              </ul>
            </div>
        </div>
        <!-- 3 -->
        <div class="home-aboutnav-box">
            <div class="home-aboutnavinnerbox" data-aos="zoom-out" data-aos-delay="250" data-aos-duration="1000">
              <ul class="dr-flex">
                <a href="./about.php#training">
                    <li class="dr-flex"><img src="./media/training-img.svg" alt=""><span>Training</span></li>
                </a>
              </ul>
            </div>
        </div>
        <!-- 4 -->
        <div class="home-aboutnav-box">
            <div class="home-aboutnavinnerbox" data-aos="zoom-out" data-aos-delay="450" data-aos-duration="1000">
              <ul class="dr-flex">
                <a href="./research-publications.php">
                <li class="dr-flex"><img class="nav-research-img" src="./media/report-img.svg" alt=""><span>Research & <br> Publications</span></li>
                </a>
              </ul>
            </div>
        </div>
        <!-- 5 -->
    </div>
</section>

<!-- about section ends here  -->

<!-- home specialities section start here  -->
 <section class="home-specialiites-main overflow">
    <div class="homespecialities-container dr-container">
        <h3 data-aos="fade-up" data-aos-delay="650" data-aos-duration="1000">SPECILITIES</h3>
      <div class="home-specialities-wrapper dr-flex overflow">
        <!-- 1 -->
        <div class="home-specialities-box" data-aos="zoom-out" data-aos-delay="850" data-aos-duration="1000">
            <img src="./media/home-special-general-img.png" alt="">
            <h4>General <br>Pulmonology</h4>
            <a href="./general-pulmonology.php">
                <img src="./media/Arrow-right-special.svg" alt="">
            </a>
            <div class="h-special-design">
                <img src="./media/home-special-design.svg" alt="">
            </div>
        </div>
        <!-- 2 -->
        <div class="home-specialities-box" data-aos="zoom-out" data-aos-delay="1050" data-aos-duration="1000">
            <img src="./media/home-interventional-special.png" alt="">
            <h4>Interventional <br>Pulmonology</h4>
            <a href="./interventional-pulmonology.php">
                <img src="./media/Arrow-right-special.svg" alt="">
            </a>
            <div class="h-special-design">
                <img src="./media/home-special-design.svg" alt="">
            </div>
        </div>
        <!-- 3 -->
        <div class="home-specialities-box" data-aos="zoom-out" data-aos-delay="1250" data-aos-duration="1000">
            <img src="./media/home-sleep-special-img.png" alt="">
            <h4>Sleep <br>Medicine</h4>
            <a href="./sleep-medicine.php">
                <img src="./media/Arrow-right-special.svg" alt="">
            </a>
            <div class="h-special-design">
                <img src="./media/home-special-design.svg" alt="">
            </div>
        </div>
        <!-- 4 -->
      </div>
    </div>
 </section>
<!-- home specialities section ends here  -->




<!-- footer starts here  -->
<?php
  include "footer.html";
?>
<!-- footer ends here  -->
 <!-- main slider initialization    -->
 
 
</body>
</html>