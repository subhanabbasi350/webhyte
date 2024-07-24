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
                    <h6>Contact Us</h6>
                    <h1>We love to help you, Sincerely.</h1>
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
                                <input type="text" class="form-control" name="name_new" minlength="2" placeholder="Enter Your Name" data-validation="required"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email_new" placeholder="Email Address" data-validation="required">
                            </div>
                            <div class="form-group">
                                <input id="" type="phone" class="form-control " maxlength="10" name="phone_new" placeholder="Phone Number"  data-validation="required">
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

