<?php include 'include/header.php' ?>
<script>
        document.addEventListener("DOMContentLoaded", function() {
            var titles = ["Portfolio | WEBHYTE", "Websites", "Logo", "Mareting", "Branding", "Animations"];
            var index = 0;

            function changeTitle() {
                document.title = titles[index];
                index = (index + 1) % titles.length;
            }

            setInterval(changeTitle, 2000); // Change title every 2 seconds
        });
    </script>
<?php include 'include/navigation.php' ?>

<!-- banner start -->
<!-- banner start -->
<section class="responsive-website logo-banner bg__detail">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="inner-banner-content">
                    <h6>Our Portfolio</h6>
                    <h1>Visit Our Portfolio</h1>
                    <p>
                   We believe in letting our work speak for us. Take a look at our creative portfolio and make your decision.
                    </p>
                    <div class="banner-btn-wrap">
                        <a href="#" class="btn-style-2 banner-btn-1">Avail Flat 70% Off</a>
                        <a href="#" class="btn-style-2 banner-btn-2" style="background:transparent !important;"><span class="moving-circle"></span>View Pricing</a>
                        
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="assets/images/elements/portfolio-banner.png" class="img-fluid website-banner-image" alt="Responsive Banner">
            </div>
        </div>
    </div>
</section>
<!-- banner end -->

<!-- banner end -->

<!-- visonary start -->
<section class="visionary-businesses-website">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="text-center visionary-box">
                    <h1 class="blue-text"><span class="dark-blue"><span class="count">250</span>+</h1>
                    <h6>Website development and design</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="text-center visionary-box">
                    <h1 class="blue-text"><span class="count">150</span>+</h1>
                    <h6>Developers & Engineers under one roof</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="text-center visionary-box">
                    <h1 class="blue-text"><span class="green"><span class="count">10</span>+</span></h1>
                    <h6>Years in Digital Marketing & Branding Business</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="text-center visionary-box">
                    <h1 class="blue-text"><span class="dark-blue"><span class="count">99</span>%</h1>
                    <h6>Client Retention<br>Rate</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="text-center visionary-box">
                    <h1 class="blue-text"><span class="green"><span class="count">250</span>+</span></h1>
                    <h6>Industry Proven Professionals</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="text-center visionary-box">
                    <h1 class="blue-text"><span class="count">100</span>%</h1>
                    <h6>Ownership<br>Rights</h6>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- visonary end -->

<!-- content sec start -->


<!-- content sec end -->

<!-- portfoilio sec start -->
<section class="portfolio spacing__x top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headingstyle1">
                    <h6>Goal and Client-Oriented Web Designs</h6>
                    <h3>Together With Focused Marketing Methods</h3>
                    <p>We create brands with impeccable and design knowledge incorporated with terms that <br>attract your target audience.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="custom-tab-list">
                    <ul>
                        <li data-targetit="box-webdesign" class="active"><a href="javascript:;">Website Design</a></li>
                        <li data-targetit="box-logodesign" class=""><a href="javascript:;">Logo Design</a></li>
                        <li data-targetit="box-ecommerceweb" class=""><a href="javascript:;">Ecommerce Website</a></li>
                        <li data-targetit="box-videoanimation" class=""><a href="javascript:;">Video Animation</a></li>
                        <li data-targetit="box-illustration" class=""><a href="javascript:;">Responsive</a></li>
                        <li data-targetit="box-branding" class=""><a href="javascript:;">Marketing Collateral</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="conatiner-fluid">
        <div class="box-webdesign showfirst">
            <div class="col-lg-12">
                <div class="portfolio-box">
                    <ul class="responsive-slider">
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/1.jpg">
                                    <img src="assets/images/portfolio/website/half/1.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/1.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/2.jpg">
                                    <img src="assets/images/portfolio/website/half/2.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/2.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/3.jpg">
                                    <img src="assets/images/portfolio/website/half/3.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/3.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/4.jpg">
                                    <img src="assets/images/portfolio/website/half/4.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/4.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/5.jpg">
                                    <img src="assets/images/portfolio/website/half/5.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/5.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/6.jpg">
                                    <img src="assets/images/portfolio/website/half/6.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/6.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/7.jpg">
                                    <img src="assets/images/portfolio/website/half/7.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/7.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/8.jpg">
                                    <img src="assets/images/portfolio/website/half/8.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/8.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/9.jpg">
                                    <img src="assets/images/portfolio/website/half/9.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/9.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/10.jpg">
                                    <img src="assets/images/portfolio/website/half/10.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/10.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/11.jpg">
                                    <img src="assets/images/portfolio/website/half/11.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/11.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/12.jpg">
                                    <img src="assets/images/portfolio/website/half/12.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/12.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!-- <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/13.jpg">
                                    <img src="assets/images/portfolio/website/half/13.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/13.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/14.jpg">
                                    <img src="assets/images/portfolio/website/half/14.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/14.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/15.jpg">
                                    <img src="assets/images/portfolio/website/half/15.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/15.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/16.jpg">
                                    <img src="assets/images/portfolio/website/half/16.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliowebsite" href="assets/images/portfolio/website/full/16.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        






            <!-- Read More Button -->


    <!-- Hidden Rows (Initially Hidden) -->
    <div id="hiddenRows" style="display: none;">
        <div class="col-lg-12">
                <div class="portfolio-box text-center">

                    <ul class="responsive-slider">
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/1.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/1.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/1.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/2.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/2.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/2.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/3.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/3.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/3.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/4.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/4.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/4.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/5.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/5.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/5.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/6.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/6.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/6.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/7.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/7.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/7.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/8.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/8.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/8.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/website/full/13.jpg">
                                    <img src="assets/images/portfolio/website/half/13.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/website/full/13.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/website/full/14.jpg">
                                    <img src="assets/images/portfolio/website/half/14.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/website/full/14.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/website/full/15.jpg">
                                    <img src="assets/images/portfolio/website/half/15.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/website/full/15.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/website/full/16.jpg">
                                    <img src="assets/images/portfolio/website/half/16.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/website/full/16.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
   
                    </ul>
                </div>
            </div>

    </div>
    <div class="text-center">
        <button id="readMoreButton" class="btn btn-primary">Show More</button>
    </div>



        
        </div>
        <div class="box-logodesign ">
            <div class="col-lg-12">
                <div class="portfolio-box">
                    <ul class="responsive-slider">
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/1.jpg">
                                    <img src="assets/images/portfolio/logo/1.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/1.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/2.jpg">
                                    <img src="assets/images/portfolio/logo/2.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/2.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/3.jpg">
                                    <img src="assets/images/portfolio/logo/3.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/3.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/4.jpg">
                                    <img src="assets/images/portfolio/logo/4.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/4.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/5.jpg">
                                    <img src="assets/images/portfolio/logo/5.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/5.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/6.jpg">
                                    <img src="assets/images/portfolio/logo/6.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/6.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/9.jpeg">
                                    <img src="assets/images/portfolio/logo/9.jpeg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/9.jpeg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/11.jpeg">
                                    <img src="assets/images/portfolio/logo/11.jpeg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/11.jpeg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/10.jpeg">
                                    <img src="assets/images/portfolio/logo/10.jpeg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/logo/10.jpeg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        
        
        
        
        
            <!-- Read More Button -->


    <div id="hiddenRowslogo" style="display: none;">
        <div class="col-lg-12">
                <div class="portfolio-box text-center">

                <ul class="responsive-slider">
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/1.png">
                                    <img src="assets/images/portfolio/mascot/1.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/1.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/2.png">
                                    <img src="assets/images/portfolio/mascot/2.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/2.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/3.png">
                                    <img src="assets/images/portfolio/mascot/3.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/3.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/4.png">
                                    <img src="assets/images/portfolio/mascot/4.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/4.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/5.png">
                                    <img src="assets/images/portfolio/mascot/5.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/5.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/6.png">
                                    <img src="assets/images/portfolio/mascot/6.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/6.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/7.png">
                                    <img src="assets/images/portfolio/mascot/7.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/7.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/8.png">
                                    <img src="assets/images/portfolio/mascot/8.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/8.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/9.png">
                                    <img src="assets/images/portfolio/mascot/9.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/9.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/10.png">
                                    <img src="assets/images/portfolio/mascot/10.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/10.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/11.png">
                                    <img src="assets/images/portfolio/mascot/11.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/11.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/12.png">
                                    <img src="assets/images/portfolio/mascot/12.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/mascot/12.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
   
                    </ul>
                </div>
            </div>

    </div>
    <div class="text-center">
        <button id="readMoreButtonlogo" class="btn btn-primary">Show More</button>
    </div>
        
        
        
        
        
        </div>
        <div class="box-ecommerceweb">
            <div class="col-lg-12">
                <div class="portfolio-box">
                    <ul class="responsive-slider">
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/1.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/1.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/1.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/2.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/2.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/2.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/3.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/3.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/3.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/4.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/4.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/4.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/5.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/5.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/5.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/6.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/6.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/6.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/7.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/7.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/7.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/8.jpg">
                                    <img src="assets/images/portfolio/ecommerce/half/8.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/8.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                         <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/website/full/13.jpg">
                                    <img src="assets/images/portfolio/website/half/13.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/website/full/13.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        
            <div id="hiddenRowsecom" style="display: none;">
        <div class="col-lg-12">
                <div class="portfolio-box text-center">

                <ul class="responsive-slider">
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/1.png">
                                    <img src="assets/images/portfolio/business/half/1.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/1.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/2.png">
                                    <img src="assets/images/portfolio/business/half/2.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/2.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/3.png">
                                    <img src="assets/images/portfolio/business/half/3.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/3.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/4.png">
                                    <img src="assets/images/portfolio/business/half/4.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/4.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/5.png">
                                    <img src="assets/images/portfolio/business/half/5.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/5.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/6.png">
                                    <img src="assets/images/portfolio/business/half/6.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/6.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/7.png">
                                    <img src="assets/images/portfolio/business/half/7.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/7.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/8.png">
                                    <img src="assets/images/portfolio/business/half/8.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/8.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/9.png">
                                    <img src="assets/images/portfolio/business/half/9.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/9.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/10.png">
                                    <img src="assets/images/portfolio/business/half/10.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/10.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/11.png">
                                    <img src="assets/images/portfolio/business/half/11.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/11.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/12.png">
                                    <img src="assets/images/portfolio/business/half/12.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/business/full/12.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
   
                    </ul>
                </div>
            </div>

    </div>
    <div class="text-center">
        <button id="readMoreButtonecom" class="btn btn-primary">Show More</button>
    </div>
        
        
        
        
        </div>
        <div class="box-videoanimation">
            <div class="col-lg-12">
            <div class="portfolio-box">
                    <ul class="responsive-slider">
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/1.gif">
                                    <img src="assets/images/portfolio/video/half/1.gif">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/1.gif">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/2.gif">
                                    <img src="assets/images/portfolio/video/half/2.gif">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/2.gif">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/3.gif">
                                    <img src="assets/images/portfolio/video/half/3.gif">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/3.gif">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/4.gif">
                                    <img src="assets/images/portfolio/video/half/4.gif">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/4.gif">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/5.gif">
                                    <img src="assets/images/portfolio/video/half/5.gif">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/5.gif">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/10.gif">
                                    <img src="assets/images/portfolio/video/half/10.gif">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/10.gif">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/7.gif">
                                    <img src="assets/images/portfolio/video/half/7.gif">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/7.gif">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/8.gif">
                                    <img src="assets/images/portfolio/video/half/8.gif">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/8.gif">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/6.gif">
                                    <img src="assets/images/portfolio/video/half/6.gif">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/6.gif">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        
        
        
        
            <div id="hiddenRowsvideo" style="display: none;">
                 <div class="col-lg-12">
                <div class="portfolio-box text-center">

                <ul class="responsive-slider">
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/9.gif">
                                    <img src="assets/images/portfolio/video/half/9.gif">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/9.gif">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/11.gif">
                                    <img src="assets/images/portfolio/video/half/11.gif">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/11.gif">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/12.gif">
                                    <img src="assets/images/portfolio/video/half/12.gif">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/video/full/12.gif">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>

        

    </div>
    <div class="text-center">
        <button id="readMoreButtonvideo" class="btn btn-primary">Show More</button>
    </div>
        
        </div>
        <div class="box-illustration">
            <div class="col-lg-12">
            <div class="portfolio-box">
                    <ul class="responsive-slider">
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/1.jpg">
                                    <img src="assets/images/portfolio/responsive/half/1.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/1.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/2.jpg">
                                    <img src="assets/images/portfolio/responsive/half/2.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/2.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/3.jpg">
                                    <img src="assets/images/portfolio/responsive/half/3.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/3.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/4.jpg">
                                    <img src="assets/images/portfolio/responsive/half/4.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/4.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/5.jpg">
                                    <img src="assets/images/portfolio/responsive/half/5.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/ecommerce/full/5.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/6.jpg">
                                    <img src="assets/images/portfolio/responsive/half/6.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/6.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/7.jpg">
                                    <img src="assets/images/portfolio/responsive/half/7.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/7.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/8.jpg">
                                    <img src="assets/images/portfolio/responsive/half/8.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/8.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                         <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/9.jpg">
                                    <img src="assets/images/portfolio/responsive/half/9.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/9.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>
        
  
            <div id="hiddenRowsresponsive" style="display: none;">
                 <div class="col-lg-12">
                <div class="portfolio-box text-center">

                <ul class="responsive-slider">
                <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/10.jpg">
                                    <img src="assets/images/portfolio/responsive/half/10.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/10.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/11.jpg">
                                    <img src="assets/images/portfolio/responsive/half/11.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/11.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/12.jpg">
                                    <img src="assets/images/portfolio/responsive/half/12.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/responsive/full/12.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li> 
                        
                    </ul>
                </div>
            </div>

        

    </div>
    <div class="text-center">
        <button id="readMoreButtonresponsive" class="btn btn-primary">Show More</button>
    </div>
        
        
        
        
        
        
        
        
        
        </div>
        <div class="box-branding">
            <div class="col-lg-12">
            <div class="portfolio-box">
                    <ul class="responsive-slider">
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/1.jpg">
                                    <img src="assets/images/portfolio/marketing/half/1.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/1.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/2.jpg">
                                    <img src="assets/images/portfolio/marketing/half/2.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/2.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/3.jpg">
                                    <img src="assets/images/portfolio/marketing/half/3.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/3.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/4.jpg">
                                    <img src="assets/images/portfolio/marketing/half/4.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/4.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/5.jpg">
                                    <img src="assets/images/portfolio/marketing/half/5.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/5.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/6.jpg">
                                    <img src="assets/images/portfolio/marketing/half/6.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/6.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/7.jpg">
                                    <img src="assets/images/portfolio/marketing/half/7.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/7.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/8.jpg">
                                    <img src="assets/images/portfolio/marketing/half/8.jpg">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/8.jpg">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                         <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/9.png">
                                    <img src="assets/images/portfolio/marketing/half/9.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfolioecommerce" href="assets/images/portfolio/marketing/full/9.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    </ul>
                </div>
            </div>
       
       
       
       
       
            <div id="hiddenRowsmarketing" style="display: none;">
                 <div class="col-lg-12">
                <div class="portfolio-box text-center">

                <ul class="responsive-slider">
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/1.png">
                                    <img src="assets/images/portfolio/print/1.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/1.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/2.png">
                                    <img src="assets/images/portfolio/print/2.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/2.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/3.png">
                                    <img src="assets/images/portfolio/print/3.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/3.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/4.png">
                                    <img src="assets/images/portfolio/print/4.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/4.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/5.png">
                                    <img src="assets/images/portfolio/print/5.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/5.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>                       
                         <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/6.png">
                                    <img src="assets/images/portfolio/print/6.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/6.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                       
                                       
                                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/7.png">
                                    <img src="assets/images/portfolio/print/7.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/7.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        
                                        
                                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/8.png">
                                    <img src="assets/images/portfolio/print/8.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/8.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        
                                        
                                        <li>
                            <div class="portfolio-item">
                                <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/9.png">
                                    <img src="assets/images/portfolio/print/9.png">
                                </a>
                                <div class="hover-effect">
                                    <a data-fancybox="portfoliologo" href="assets/images/portfolio/print/9.png">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </li>                       
   
                    </ul>
                </div>
            </div>

        

    </div>
    <div class="text-center">
        <button id="readMoreButtonmarketing" class="btn btn-primary">Show More</button>
    </div>
       
       
       
       
       
       
       
       
       
       
       
       
        </div>
    </div>
    <!-- CTA 2 -->
    <div class="cta__2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="items">
                        <ul>
                            <li><a href="tel:(972)944 5323"><span>Call Us Now</span>(972) 944-5323</a></li>
                            <li><a href="#footer-form" class="btn-style-2 #">Request a Quote <span class="moving-circle"></span></a></li>
                            <li><a href="#" class="chat"><span>24/7 Support</span> Live Chat</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio sec end -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script>
    
    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
<?php include 'include/inner-pages-footer.php' ?>
