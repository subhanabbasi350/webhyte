<?php include 'include/header.php' ?>
<script>
        document.addEventListener("DOMContentLoaded", function() {
            var titles = ["Post Banner | WEBHYTE", "Post", "Banner"];
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
                    <h6>Digital Strategies</h6>
                    <h1>Unleash The Digital Potential of Your Business!</h1>
                    <p>
                    We are not just another digital marketing strategy services provider but
                    </p>
                    <div class="banner-btn-wrap">
                        <a href="#" class="btn-style-2 banner-btn-1">Avail Flat 70% Off</a>
                        <a href="#" class="btn-style-2 banner-btn-2" style="background:transparent !important;"><span class="moving-circle"></span>View Pricing</a>
                        
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="assets/images/elements/digital-banner.png" class="img-fluid tiktok-banner-image" alt="Responsive Banner">
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
<section class="content-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="assets/images/elements/digital-section.png" class="img-fluid" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 content-section">
                <h1><span>What is a Digital Strategy?</h1>
                <p>In simple terms, a digital strategy aids a business in developing and implementing a digital marketing strategy. We equip the brand with a well-crafted digital strategy that enjoys a multitude of benefits that propel it to success in the modern landscape.</p>

                <h6>Following are few of the advantages of having an ecommerce website</h6>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="item-list">
                            <ul>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i> We are affordable </li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i>We are a team of expert designers</li>                           
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="item-list">
                            <ul>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i> We offer immaculate designs </li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i>We are a team of expert designers</li>                           
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="contact-detail">
                            <ul class="inline-block">
                                <li><a href="#" class="btn btn-primary section-btn-1">Sign up now to Avail <span class="btn-blue-text">70% Discount</span></a></li> 
                            </ul>
                        </div> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="get-in-touch">
                            <ul class="inline-block">
                            <a href="#" class="btn btn-primary section-btn-2"><i class="fa fa-wechat" aria-hidden="true"></i><span> Lets Chat</a>
                               
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- content sec end -->

<!-- portfoilio sec start -->

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
