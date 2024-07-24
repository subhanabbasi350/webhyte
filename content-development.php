<?php include 'include/header.php' ?>
<script>
        document.addEventListener("DOMContentLoaded", function() {
            var titles = ["Content | WEBHYTE", "Content", "Development"];
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
<section class="responsive-website bg__detail logo-banner">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="inner-banner-content">
                    <h6>Content Development</h6>
                    <h1>Power Your Brand with Content That Converts</h1>
                    <p>
                    Our content development service collates information and engagement through 
effective marketing copies.
                    </p>
                    <div class="banner-btn-wrap">
                        <a href="#" class="btn-style-2 banner-btn-1">Avail Flat 70% Off</a>
                        <a href="#" class="btn-style-2 banner-btn-2" style="background:transparent !important;"><span class="moving-circle"></span>View Pricing</a>
                        
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="assets/images/elements/content-banner.png" class="img-fluid animation-banner-image" alt="Responsive Banner">
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
    <div class="container content-development-section text-center">
        <h1><span>The Web Hyte Process</span></h1>
        <p>Don’t know what to expect? Fret not because our team follows a tried and tested process while leaving plenty of room for tailoring the experience to your needs.</p>

        <div class="row">
            <!-- Brand Analysis Section -->
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="content-section-text">
                    <h1 class="content-section-heading">Brand Analysis</h1>
                    <p>We look at your website, niches, and audience to determine the requirements and timeline.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="content-section">
                    <img src="assets/images/elements/content-section1.png" class="img-fluid content-image" alt="Brand Analysis Image" />
                </div>
            </div>

            <!-- Content Strategy Section -->

            <div class="col-lg-5 col-md-6 col-sm-12 mb-4">
                <div class="content-section">
                    <img src="assets/images/elements/content-section2.png" class="img-fluid content-image mobile-images" alt="Content Strategy Image" />
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 mb-4">
                <div class="content-section-text">
                    <h1 class="content-section-heading">Content Strategy</h1>
                    <p>We create a strategy deck for how we will move forward with your content creation.</p>
                </div>
            </div>
            

            <!-- Content Development Section -->
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="content-section-text">
                    <h1 class="content-section-heading">Content Development</h1>
                    <p>Once approved, we will work on creating your website’s content, integrating keywords and other elements.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="content-section">
                    <img src="assets/images/elements/content-section1.png" class="img-fluid content-image" alt="Content Development Image" />
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
