<?php include_once('../includes/header.php'); ?>

<?php require_once('../products/db/products.php'); ?>

<body class="index promo_banner-show" data-money-format="${{ amount }}" data-new-gr-c-s-check-loaded="14.984.0"
    data-gr-ext-installed="">

    <?php include_once('../includes/nav.php'); ?>


    <div class="container">
        <div class="sixteen columns">
            <div class="section clearfix">
                <h1>Contact Us</h1>
            </div>
        </div>

        <div class="contact_form ">

            <div class="ten columns contact_content">

                <div class="contact_text">
                    <p><span style="text-decoration: underline;">Showroom visits by appointment only</span>. Please
                        contact Agathon&nbsp;at info@kloversales.com.</p>
                    <p><strong>Our warehouse is open for pick ups:</strong></p>
                    <p>Monday&nbsp;9:00am to 4:30pm<br>Tuesday&nbsp; <span>9:00am to 4:30pm<br></span>Wednesday&nbsp;
                        <span>9:00am to 4:30pm<br></span>Thursday&nbsp; <span>9:00am to 4:30pm<br></span>Friday&nbsp;
                        <span>9:00am to 3:30pm<br></span>Saturday closed<br>Sunday closed</p>
                    <p><strong>Our warehouse is located at:</strong></p>
                    <p>330 Wildcat Road<br>Toronto, ON M3J 2N5</p>
                    <p>You can reach us by phone at 416-900-4112 or email at info@kloversales.com.</p>
                </div>


            </div>
            <div class="six columns">
                <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8"
                    class="contact-form"><input type="hidden" name="form_type" value="contact"><input type="hidden"
                        name="utf8" value="✓">






                    <label for="contactFormName">Name <span class="red">*</span></label>
                    <input type="text" id="contactFormName" name="contact[contact-form-name]" placeholder="Name"
                        autocapitalize="words" value="" required="required">

                    <label for="contactFormEmail">Email <span class="red">*</span></label>
                    <input type="email" id="contactFormEmail" name="contact[email]" placeholder="Email"
                        autocorrect="off" autocapitalize="off" value="" required="required">

                    <label for="contactFormMessage">Message <span class="red">*</span></label>
                    <textarea rows="5" id="contactFormMessage" name="contact[body]" placeholder="Message"
                        required="required"></textarea>

                    <input type="submit" class="submit action_button" value="Send">
                </form>
            </div>
        </div>




    </div>

    <?php include_once('../includes/footer.php'); ?>
</body>

</html>