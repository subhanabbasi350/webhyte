<?php include 'include/header.php' ?>
<script>
        document.addEventListener("DOMContentLoaded", function() {
            var titles = ["Combo | WEBHYTE", "Combo Packages"];
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
<section class="responsive-website brand-banner bg__detail">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="inner-banner-content">
                    <h6>Combo Packages</h6>
                    <h1>Get Our Top Services in One Place!</h1>
                    <p>
                   We have blended our best services to bring offers that provide sets of services to target every kind of business.


                    </p>
                    <div class="banner-btn-wrap">
                        <a href="#" class="btn-style-2 banner-btn-1">Avail Flat 70% Off</a>
                        <a href="#" class="btn-style-2 banner-btn-2" style="background:transparent !important;"><span class="moving-circle"></span>View Pricing</a>
                        
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="assets/images/elements/combo-banner.png" class="img-fluid website-banner-image" alt="Responsive Banner">
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
