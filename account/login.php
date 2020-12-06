<?php include_once('../includes/header.php'); ?>

<?php require_once('../products/db/products.php'); ?>

<body class="index promo_banner-show" data-money-format="${{ amount }}" data-new-gr-c-s-check-loaded="14.984.0"
    data-gr-ext-installed="">

    <?php include_once('../includes/nav.php'); ?>


    <div class="container">
        <div class="sixteen columns clearfix collection_nav">
            <h1 class="collection_title">Customer Login</h1>
        </div>

        <div class="clearfix" id="customer">
            <div class="six offset-by-five columns" id="login_form">
                <br class="clear">
                <form method="post" action="/account/login" id="customer_login" accept-charset="UTF-8"><input
                        type="hidden" name="form_type" value="customer_login"><input type="hidden" name="utf8"
                        value="✓">


                    <label for="customer_email" class="login">Email</label>
                    <input type="email" value="" name="customer[email]" id="customer_email" class="large" size="30"
                        autocorrect="off" autocapitalize="off" tabindex="1">





                    <small class="right"><em><a href="#" onclick="showRecoverPasswordForm()">Forgot your
                                password?</a></em></small>
                    <label for="customer_password" class="login">Password</label>
                    <input type="password" value="" name="customer[password]" id="customer_password"
                        class="large password" size="16" tabindex="2">



                    <input class="btn action_button" type="submit" value="Sign In" style="margin-bottom: 5px !important"
                        tabindex="3">


                    <p class="right" style="padding-top: 8px;">
                        New Customer? <a href="/account/register" id="customer_register_link">Sign up <span
                                class="icon-arrow-right"></span></a>
                    </p>

                </form>


            </div>

            <div id="recover-password" style="display:none">
                <div class="six columns offset-by-five">

                    <h4>Reset Password</h4>

                    <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden"
                            name="form_type" value="recover_customer_password"><input type="hidden" name="utf8"
                            value="✓">




                        <div id="recover_email" class="clearfix large_form">
                            <label for="email" class="large">Email</label>
                            <input type="email" value="" size="30" name="email" id="recover-email" class="large"
                                autocorrect="off" autocapitalize="off">
                        </div>

                        <p>
                            <em class="note">We will send you an email to reset your password.</em>
                        </p>

                        <div class="action_bottom">
                            <input class="btn action_button" type="submit" value="Submit">
                            <span class="note">or <a href="#" onclick="hideRecoverPasswordForm()">Cancel</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../includes/footer.php'); ?>
</body>

</html>