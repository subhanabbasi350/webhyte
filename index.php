
<?php include 'include/header.php' ?>
<script>
        document.addEventListener("DOMContentLoaded", function() {
            var titles = ["HOME | WEBHYTE", "Websites", "Logo", "Animation" ,"Marketing" ,"Branding"];
            var index = 0;

            function changeTitle() {
                document.title = titles[index];
                index = (index + 1) % titles.length;
            }

            setInterval(changeTitle, 2000); // Change title every 2 seconds
        });
    </script>

<?php include 'include/navigation.php' ?>
<!------loader------->

    <!-- Loader -->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
<section class="banner-home bg__detail">
    <div class="container home-banner-container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="banner-content">
                    <h6>Proficient Design Agency.</h6>
                    <h1 class="gradient-text"><span class="header-text">Surpassing with <br />the Modernization <br /></span>& <span id="switching-text">Originality.</span></h1>
                   
                 <p>Helping brands to digitally transform with a spice of innovation and technical expertise.</p>
                    <div class="banner-btn-wrap">
                    <a href="#" id="openPopupButton" class="btn-style-2"><span class="moving-circle"></span>Get Started</a>
                    <!-- <a href='' target='_blank' class='bark-widget' data-type='pro' data-id='wmRlJ' data-image='medium-navy' data-version='3.0'>Webhyte  </a> -->
                        <script type='text/javascript' src='../' defer></script>
                        <!-- TrustBox widget - Micro Review Count -->
                        <!-- <div class="trustpilot-widget" data-locale="en-US" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="60400501e17b6a00013e8118" data-style-height="24px" data-style-width="100%" data-theme="">
                            <a href="#" target="_blank" rel="noopener">Trustpilot</a>
                        </div> -->
                        <!-- End TrustBox widget -->
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12">

            <img src="assets/images/elements/banner-image.png" class="img-fluid home-banner-image"/>

            </div>
        </div>
    </div>    
</section>

<section class="visionary-businesses">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="text-center">
                    <h1 class="blue-text"><span class="count">400</span>+</h1>
                    <h6>Projects Ordered</h6>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="text-center">
                <h1 class="blue-text"><span class="count">1000</span>+</h1>
                <h6>Happy Clients</h6>                
                </div>
            </div>
            <div class="col-lg-3">
                <div class="text-center">
                <h1 class="blue-text"><span class="count">900</span>+</h1>
                <h6>Projects Completed</h6>                
                </div>
            </div>
            <div class="col-lg-3">
                <div class="text-center">
                <h1 class="blue-text"><span class="count">300</span>+</h1>
                <h6>reviews</h6>               
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="area-service spacing__x">
    <div class="element element-3"><img src="assets/images/elements/element1.png" /></div>
    <div class="element element-4"><img src="assets/images/elements/element2.png" /></div>
    <div class="element element-5"><img src="assets/images/elements/element2.png" /></div>
    <div class="element element-6"><img src="assets/images/elements/element1.png" /></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="headingstyle1">
                    <h6>Our unparalleled websites</h6>
                    <h3>To Build Concrete Digital Existence.</h3>
                    <p>Our thorough website development process starts by comprehending your business aims and the targeted audience so that we can design <br />and create striking websites, logo designs, digital marketing, mobile apps, and video animation.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="custom-tab-list">
                    <ul>
                        <li data-targetit="box-types-webdesign" class="active"><a href="javascript:;">Website Design</a></li>
                        <li data-targetit="box-types-logodesign" class=""><a href="javascript:;">Logo Design</a></li>
                        <li data-targetit="box-types-digitalmarketing" class=""><a href="javascript:;">Digital Marketing</a></li>
                        <li data-targetit="box-types-mobapp" class=""><a href="javascript:;">Mobile Apps</a></li>
                        <li data-targetit="box-types-videoanimation" class=""><a href="javascript:;">Video Animation</a></li>
                        <li data-targetit="box-types-marketingcollateral" class=""><a href="javascript:;">Marketing Collateral</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12 service-box-section">
                <div class="box-types-webdesign showfirst">
                    <ul class="service-type-listing responsive-slider">
                        <li class="active">
                                <div class="service-type-box">
                                    <img src="assets/images/elements/static.gif" alt="" class="gif-img"/>
                                    <h4>Static website</h4>
                                </div>
                        </li>
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/portal.gif" alt="" class="gif-img"/>
                                    <h4>B2B Portal</h4>
                                </div>
                        </li>
                        <!-- <li>
                                <div class="service-type-box">
                                    <img src="assets/images/service-type/website/b2b.png" alt="" />
                                    <h4>B2C Portal</h4>
                                </div>
                        </li> -->
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/ecom.gif" alt="" class="gif-img"/>
                                    <h4>Ecommerce Website</h4>
                                </div>
                        </li>
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/web-portal.gif" alt="" class="gif-img"/>
                                    <h4>Web Portal</h4>
                                </div>
                           
                        </li>
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/web.gif" alt="" class="gif-img"/>
                                    <h4>Web Development</h4>
                                </div>
                        </li>
                    </ul>
                </div>
                <div class="box-types-logodesign ">
                <ul class="service-type-listing responsive-slider">
                        <li class="active">
                                <div class="service-type-box">
                                    <img src="assets/images/elements/3d.gif" alt="" class="gif-img"/>
                                    <h4>3D Logo</h4>
                                </div>
                        </li>
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/animated.gif" alt="" class="gif-img"/>
                                    <h4>Animated Logo</h4>
                                </div>
                        </li>
                        <!-- <li>
                                <div class="service-type-box">
                                    <img src="assets/images/service-type/website/b2b.png" alt="" />
                                    <h4>B2C Portal</h4>
                                </div>
                        </li> -->
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/iconic.gif" alt="" class="gif-img"/>
                                    <h4>Iconic Logo</h4>
                                </div>
                        </li>
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/illustration.gif" alt="" class="gif-img"/>
                                    <h4>Illustration Logo</h4>
                                </div>
                           
                        </li>
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/typhographic.gif" alt="" class="gif-img"/>
                                    <h4>Typhographic Logo</h4>
                                </div>
                        </li>
                    </ul>
                </div>
                <div class="box-types-digitalmarketing">
                <ul class="service-type-listing responsive-slider">
                        <li class="active">
                                <div class="service-type-box">
                                <img src="assets/images/elements/email.gif" alt="" class="gif-img"/>
                                <h4>Email</h4>
                                </div>
                        </li>
                        <li>
                                <div class="service-type-box">
                                <img src="assets/images/elements/ORM.gif" alt="" class="gif-img"/>
                                <h4>ORM</h4>
                                </div>
                        </li>
                        <!-- <li>
                                <div class="service-type-box">
                                    <img src="assets/images/service-type/website/b2b.png" alt="" />
                                    <h4>B2C Portal</h4>
                                </div>
                        </li> -->
                        <li>
                                <div class="service-type-box">
                                <img src="assets/images/elements/PPC.gif" alt="" class="gif-img"/>
                                <h4>PPC</h4>
                                </div>
                        </li>
                        <li>
                                <div class="service-type-box">
                                <img src="assets/images/elements/SMM.gif" alt="" class="gif-img"/>
                                <h4>Social Media Marketing</h4>
                                </div>
                           
                        </li>
                        <li>
                                <div class="service-type-box">
                                <img src="assets/images/elements/seo.gif" alt="" class="gif-img"/>
                                <h4>SEO</h4>
                                </div>
                        </li>
                    </ul>
                </div>
                <div class="box-types-mobapp">
                <ul class="service-type-listing responsive-slider">
                        <li class="active">
                                <div class="service-type-box">
                                <img src="assets/images/elements/android.gif" alt="" class="gif-img"/>
                                <h4>Android</h4>
                                </div>
                        </li>
                        <li>
                                <div class="service-type-box">
                                <img src="assets/images/elements/flutter.gif" alt="" class="gif-img"/>
                                <h4>Flutter</h4>
                                </div>
                        </li>
                        <!-- <li>
                                <div class="service-type-box">
                                    <img src="assets/images/service-type/website/b2b.png" alt="" />
                                    <h4>B2C Portal</h4>
                                </div>
                        </li> -->
                        <li>
                                <div class="service-type-box">
                                <img src="assets/images/elements/hybrid.gif" alt="" class="gif-img"/>
                                <h4>Hybrid</h4>
                                </div>
                        </li>
                        <li>
                                <div class="service-type-box">
                                <img src="assets/images/elements/ios.gif" alt="" class="gif-img"/>
                                <h4>IOS</h4>
                                </div>
                           
                        </li>
                        <li>
                                <div class="service-type-box">
                                <img src="assets/images/elements/nativ.gif" alt="" class="gif-img"/>
                                <h4>Native</h4>
                                </div>
                        </li>
                    </ul>
                </div>
                <div class="box-types-videoanimation">
                <ul class="service-type-listing responsive-slider">
                        <li class="active">
                                <div class="service-type-box">
                                    <img src="assets/images/elements/2d.gif" alt="" class="gif-img"/>
                                    <h4>2D Videos</h4>
                                </div>
                        </li>
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/3d-video.gif" alt="" class="gif-img"/>
                                    <h4>3D Videos</h4>
                                </div>
                        </li>
                        <!-- <li>
                                <div class="service-type-box">
                                    <img src="assets/images/service-type/website/b2b.png" alt="" />
                                    <h4>B2C Portal</h4>
                                </div>
                        </li> -->
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/explan.gif" alt="" class="gif-img"/>
                                    <h4>Explaination</h4>
                                </div>
                        </li>
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/logo-video.gif" alt="" class="gif-img"/>
                                    <h4>Logo Video</h4>
                                </div>
                           
                        </li>
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/illustration-video.gif" alt="" class="gif-img"/>
                                    <h4>Illustration</h4>
                                </div>
                        </li>
                    </ul>
                </div>
                <div class="box-types-marketingcollateral">
                <ul class="service-type-listing responsive-slider">
                        <li class="active">
                                <div class="service-type-box">
                                    <img src="assets/images/elements/banner.gif" alt="" class="gif-img"/>
                                    <h4>Banner</h4>
                                </div>
                        </li>
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/brochure.gif" alt="" class="gif-img"/>
                                    <h4>Brochure</h4>
                                </div>
                        </li>
                        <!-- <li>
                                <div class="service-type-box">
                                    <img src="assets/images/service-type/website/b2b.png" alt="" />
                                    <h4>B2C Portal</h4>
                                </div>
                        </li> -->
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/card.gif" alt="" class="gif-img"/>
                                    <h4>Cards</h4>
                                </div>
                        </li>
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/magzine.gif" alt="" class="gif-img"/>
                                    <h4>Magzine</h4>
                                </div>
                           
                        </li>
                        <li>
                                <div class="service-type-box">
                                    <img src="assets/images/elements/letter.gif" alt="" class="gif-img"/>
                                    <h4>Letter</h4>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta__1 bg__detail" style="background-image: url(assets/images/bg/bg-cta.jpg)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pos-unset">
                <div class="cta-slider-1">
                    <img class="item-slide business-banner-image" src="assets/images/elements/banner2.png"/>
                    <!-- <img class="item-slide" src="assets/images/icon.png" />
                    <img class="item-slide" src="assets/images/icon.png" /> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="headingstyle1 left">
                    <h6>Endorse Your Business</h6>
                    <h3>With Influential Client Experience-Driven Websites.</h3>
                    <p>The creative team at Webhyte   knows how crucial a website presence in the digital world is. We believe in providing our customers with premium website solutions, therefore, we work closely with our clients to understand their requirements, deliver timely results, and boost up your business proficiency.</p>
                </div>
                <div class="contact-details">
                    <ul class="inline-block">
                        <li><a href="#" class="btn-style-2 color-white #"><span class="moving-circle"></span>Get In Touch</a></li>
                        <li><a href="tel:(972)944 5323"><span>Call Us At</span> (972)944 5323</a></li>
                        <li><a href="#" class="chat"><span>Click here to <i class="fa fa-wechat" aria-hidden="true"></i></span> Live Chat</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

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













<section class="cta__3">
<span class="cta-before">
</span>
    <div class="element element-10">
        <img src="assets/images/mix/cta-3-element-1.png" />
    </div>
    <!-- <div class="element element-11">
        <img src="assets/images/mix/cta-3-element-2.png" />
    </div> -->
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2 cta-before-image">
                <!-- <img src="assets/images/elements/cta-before.png" alt=""> -->
            </div>
            <div class="col-lg-2">
                <div class="title">
                    <h4>We are widely <span>Recognized on</span></h4>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="price">
                    <img src="assets/images/elements/trust-pilot.png" class="review-image"/>
                    <img src="assets/images/elements/speaker.png" class="speaker-image"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="get-in-touch">
                    <h6><span>Get In Touch</span> With Our Support Agent or</h6>
                    <ul class="inline-block">
                        <li><a href="#" class="btn-style-2 #"><span class="moving-circle"></span>ORDER NOW</a></li>
                        <li><a href="javascript:$zopim.livechat.window.show();" class="chat"><span>Click here to <i class="fa fa-wechat" aria-hidden="true"></i></span>Live Chat</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 cta-after-image">
                <!-- <img src="assets/images/elements/cta-before.png" alt=""> -->
            </div>
        </div>
    </div>
</section>


<section class="combo-package spacing__x">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 combo-text">
                <div class="package-details">
                    <h5>All in one</h5>
                    <h3 class="gradient-text">COMBO</h3>
                    <p>Ultimate Value for Start-ups and Businesses</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item-list">
                                <ul>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Unlimited Custom Logo Design Concepts</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i>6 Dedicated Designers</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> UNLIMITED Pages Website</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Mobile Responsive</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Icon Design</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Business Card, Letterhead, Envelope</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> MS Word Letterhead</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> 5 Stock Photos + 3 Banner Designs</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Complete W3C Certified HTML</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Complete Deployment</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Facebook Page Design</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> All Final File Formats</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item-list">
                                <ul>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Dedicated Account Manager</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> 100% Ownership Rights</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> 100% Unique Design Guarantee</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> 100% Money Back Guarantee</li>
                                    <li><a href="#" class="btn-style-2 combo-btn">Start Project <span class="moving-circle"></span></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 combo-box">
                <div class="box">
                <!-- <img src="assets/images/elements/combo-image.png" class="img-fluid combo-image"> -->
    </div>
    <div class="element element-3 combo-element"><img src="assets/images/elements/element1.png"></div>
    <!-- <div class="element element-12"><img src="assets/images/elements/element1.png" /></div> -->
    <div class="element element-6 element1 combo-image-element"><img src="assets/images/elements/element1.png"></div>
</section>


<section class="no-of-projects spacing__x bg__detail" style="background-image: url(assets/images/bg/no-of-projects-bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headingstyle1 icons-heading">
                    <h6><!-- Logos,  -->Web Design, Development and Marketing Solutions for</h6>
                    <h3>Fortune 500 Companies From 40+ Industries</h3>
                    <!-- <p>We take pride in delivering crystal clear and spotless work to our clients. Ensuring every step is according to your needs, Webhyte   delivers what <br />it promises. Keeping you in mind, we offer all types of website and logo designs, video animations, and mobile applications.</p> -->
                </div>
            </div>
        </div>
        <!-- <div class="row justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-3 col-6">
                <div class="industrie-number">
                    <h3>400+</h3>
                    <p>Projects Ordered</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6">
                <div class="industrie-number">
                    <h3>1000+</h3>
                    <p>Happy Clients</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6">
                <div class="industrie-number">
                    <h3>900+</h3>
                    <p>Projects Completed</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6">
                <div class="industrie-number">
                    <h3>300+</h3>
                    <p>Comments</p>
                </div>
            </div>
        </div> -->
        <div class="point-wrap">
            <div class="row responsive-slider">
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="industrie-point">
                        <ul>
                            <li><img src="assets/images/elements/engineering.png" class="industy-icon"/> Engineering</li>
                            <li><img src="assets/images/elements/construction.png" class="industy-icon"/> Construction</li>
                            <li><img src="assets/images/elements/technology.png" class="industy-icon"/> Technology</li>
                            <li><img src="assets/images/elements/Automotive.png" class="industy-icon"/> Automotive</li>
                            <li><img src="assets/images/elements/Catalogues.png" class="industy-icon"/> Catalogues</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="industrie-point">
                        <ul>
                            <li><img src="assets/images/elements/relegious.png" class="industy-icon"/> Religion</li>
                            <li><img src="assets/images/elements/Social icon.png" class="industy-icon"/> Social</li>
                            <li><img src="assets/images/elements/education.png" class="industy-icon"/> Education</li>
                            <li><img src="assets/images/elements/resource.png" class="industy-icon"/> Resource</li>
                            <li><img src="assets/images/elements/sports.png" class="industy-icon"/> Sports</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="industrie-point">
                        <ul>
                            <li><img src="assets/images/elements/Finaincial.png" class="industy-icon"/> Financial</li>
                            <li><img src="assets/images/elements/insurance.png" class="industy-icon"/> Insurance</li>
                            <li><img src="assets/images/elements/consultation.png" class="industy-icon"/> Consultation</li>
                            <li><img src="assets/images/elements/Architectural.png" class="industy-icon"/> Architectural</li>
                            <li><img src="assets/images/elements/food.png" class="industy-icon"/>Food</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="industrie-point">
                        <ul>
                            <li><img src="assets/images/elements/medical.png" class="industy-icon"/> Medical</li>
                            <li><img src="assets/images/elements/health.png" class="industy-icon"/> Health</li>
                            <li><img src="assets/images/elements/travel.png" class="industy-icon"/> Travel</li>
                            <li><img src="assets/images/elements/marriage.png" class="industy-icon"/> Matrimony</li>
                            <li><img src="assets/images/elements/art.png" class="industy-icon"/>Art</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="industrie-point">
                        <ul>
                            <li><img src="assets/images/elements/communications.png" class="industy-icon"/> Communication</li>
                            <li><img src="assets/images/elements/entertainment .png" class="industy-icon"/> Entertainment</li>
                            <li><img src="assets/images/elements/environment.png" class="industy-icon"/> Environmental</li>
                            <li><img src="assets/images/elements/fashion.png" class="industy-icon"/> Fashion</li>
                            <li><img src="assets/images/elements/spa.png" class="industy-icon"/> Spa</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="industrie-point">
                        <ul>
                            <li><img src="assets/images/elements/children.png" class="industy-icon"/>Children</li>
                            <li><img src="assets/images/elements/craft.png" class="industy-icon"/> Craft</li>
                            <li><img src="assets/images/elements/music.png" class="industy-icon"/>Music</li>
                            <li><img src="assets/images/elements/navigation.png" class="industy-icon"/> Navigation</li>
                            <li><img src="assets/images/elements/news.png" class="industy-icon"/> News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="work-with-us">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-3 p-0">
                <div class="ready text-center">
                    <h1>READY</h1>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="wit_us">
                    <h2>TO WORK WITH US?</h2>
                    <p>Contact us to discuss your logo design or general inquiries</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 with_us_content">
                <div class="call_us">
                    <div class="icon">
                        <img src="assets/images/elements/phone.png" class="ready-icon" alt="" />
                    </div>
                    <div class="icondetai">
                        <p>Call Us Anytime</p>
                        <h5 class="work-text"><a href="tel:(972)944 5323"> (972)944 5323</a></h5>
                    </div>
                </div>
                <div class="call_us">
                    <div class="icon">
                        <img src="assets/images/elements/chat-icon.png" class="ready-icon" alt="" />
                    </div>
                    <div class="icondetai">
                        <p>Talk To Us Now To</p>
                        <h5 class="work-text"><a href="javascript:$zopim.livechat.window.show();" class="chat"> Discuss Your Project</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="element element-25 ready1-image" src="assets/images/elements/ready1.png" />
    <img class="element element-29 ready3-image" src="assets/images/elements/ready1.png" />

    <!-- <img class="element element-26" src="assets/images/elements/element1.png" /> -->
    <!-- <img class="element element-27" src="assets/images/elements/element1.png" /> -->
    <img class="element element-28 ready2-image" src="assets/images/elements/ready2.png" />
    <img class="element element-29 ready4-image" src="assets/images/elements/ready2.png" />

</section>

<section class="testimonials spacing__x">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="headingstyle2">
                        <h6>Our clients simply</h6>
                        <h3>Love Our Work</h3>
                        <p>To provide your business with customized and unique website development services at reasonable prices.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-area">
                        <p><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> Rated 4.9/5.0 by 300+ clients for Design and Marketing Services on various platforms.</p>
                        <img src="assets/images/elements/partners.png" class="testimonial-partner-image"/>
                    </div>
                </div>
            </div>
        </div>
</section>

<section>
    <div class="container">
        <div class="row testimonial-slider">
            <div class="slide-testimonial">
                <div class="testimonial-box">
                    <div class="review">
                        <p>Webhyte   is a life savior. My business was all set to operate but my website crashed at the last moment. Thanks to the team at Webhyte  .</p>
                    </div>
                    <div class="review-by">
                        <img src="assets/images/elements/testi-1.png" />
                        <div class="name">
                            <h6>Trina Gill, Senior Publisher</h6>
                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-testimonial">
                <div class="testimonial-box">
                    <div class="review">
                        <p>Worth sharing my experience with Webhyte  . The team has all the expertise to design a business logo and they also guided me through the process.</p>
                    </div>
                    <div class="review-by">
                        <img src="assets/images/elements/testi-2.png" />
                        <div class="name">
                            <h6>Tyrone Turner, Editor</h6>
                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-testimonial">
                <div class="testimonial-box">
                    <div class="review">
                        <p>Highly appreciated their work and the level of commitment. They worked according to our business needs and their work was flawless.</p>
                    </div>
                    <div class="review-by">
                        <img src="assets/images/elements/testi-3.png" class="testi-images"/>
                        <div class="name">
                            <h6>Milton Sims, Brand Manager</h6>
                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-testimonial">
                <div class="testimonial-box">
                    <div class="review">
                        <p>A loud shout out to the team at Webhyte  . My mobile application is running smoothly and all my clients are satisfied. This was not possible without their effort.</p>
                    </div>
                    <div class="review-by">
                        <img src="assets/images/elements/testi-4.png" class="testi-images" />
                        <div class="name">
                            <h6>Belle Boyd, Senior Content Creator</h6>
                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--</section>-->
<!--    <section class="brand spacing__x">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <img class="img-fluid" src="assets/images/mix/brands.jpg" />-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
	<section class="brand spacing__x">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 brand-section">
                <img class="img-fluid brand-image" src="assets/images/elements/brands.png" />
            </div>
        </div>
    </div>
</section>

<section class="footer-form-wrap" id="footer-form">
    <span class="form-before">
    </span>
    <div class="container">
        <div class="row footer-row">
            <div class="col-lg-5 col-md-6">
                <div class="footer-text-sec">
                    <div class="quote">
                        <p class="footer-blue-text">Let creativity take over</p>
                    </div>
                    <p class="footer-blue-text">Ask us anything, we have the friendliest customer service folks</p>
                    <a class="contact-info footer-blue-text" href="tel:(972)944 5323"> (972)944 5323</a>
                    <a class="contact-info footer-blue-text-email" href="mailto:support@webhyte.com">spport@webhyte.com</a>
                    <a href="javascript:$zopim.livechat.window.show();" class="chat footer-chat" class="btn-white"><strong> Chat now </strong> to avail this offer</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 footer-form-section">
                <div class="footer-form-sec">
                    <h3 class="footer-blue-text">Let’s get started!</h3>
                    <p>Contact us by using the form below or send us an email.</p>
                    <div class="footer-form" data-form-type="signup_form">
                        <form class="leadForm" id="regForm" method="post" enctype="multipart/form-data" action="form.php">
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="name_new" minlength="2" placeholder="Enter Your Name" data-validation="required" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email_new" placeholder="Email Address" data-validation="required" required>
                            </div>
                            <div class="form-group">
                                 <select type="text" class="form-control" id="service_select" name="service_select" data-validation="required" required>
                                  <option disabled selected>Select Services</option>
                                  <option value="website-design">Website Design</option>
                                  <option value="ecommerce">Ecommerce</option>
                                  <option value="landing-page">Landing Page</option>
                                  <option value="responsive">Responsive</option>
                                  <option value="basic-business-website">Basic Business Website</option>
                                  <option value="logo-design">Logo Design</option>
                                  <option value="mascot">Mascot</option>
                                  <option value="abstract">Abstract</option>
                                  <option value="logo-illustartion">Logo Illustartion</option>
                                  <option value="3d-logo">3D Logo</option>
                                  <option value="3d-logo-animation">3D Logo Animation</option>
                                  <option value="video-animaiton">Video Animation</option>
                                  <option value="print-colateral">Print Collateral</option>
                                  <option value="business-cards">Business cards</option>
                                  <option value="seo">Search Engine Optimization</option>
                                  <option value="social-media-marketing">Social Media Marketing</option>
                                  <option value="content-development">Content Development</option>
                                  <option value="post-banner">Post & Banner Ads</option>
                                  <option value="affiliate-marketing">Affiliate Marketing</option>
                                  <option value="tiktok-marketing">Tiktok-marketing</option>
                                  <option value="digital-strategies">Digital-strategies</option>
                                  <option value="brand-merchandise">Brand Merchandise</option>
                                  <option value="packaging-labels">Packaging & Labels</option>
                                  <option value="art-illustration">Arts & Illustration</option>




                                </select>
                            </div>
                            <div class="form-group">
                                <input id="" type="phone" class="form-control " maxlength="10" name="phone_new" placeholder="Phone Number"  data-validation="required" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-style-2" name="submit" id=""><span class="moving-circle"></span>Send Now</button>
                                <div id="formResult"></div>
                            </div>
                        </form>
                    </div>               
                </div>
            </div>
        </div>
    </div>
</section>





<!-- <a class="contact-whatsapp" href="tel:+1(972)944 5323"><img src="assets/images/elements/whatsapp.png" /></a> -->
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
<?php include 'include/footer.php' ?>

</html>