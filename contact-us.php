<?php include 'head.php';?>

<?php include 'header.php';?>



<!-- breadcrumb-area start -->
<div class="breadcrumb-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumb-title">Contact Us</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- Page Conttent -->
<main class="page-content section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <div class="contact-form">
                    <div class="contact-form-info">
                        <div class="contact-title">
                            <h3 class="mb-0">GET IN TOUCH</h3>
                            <p class="mb-4">Get in touch with us to explore personalised gifting options. Fill in the contact form below and our sales team will get in touch with you</p>
                        </div>
                        <form id="contact-form" action="http://hasthemes.com/file/mail.php" method="post">
                            <div class="contact-page-form">
                                <div class="contact-input">
                                    <div class="contact-inner">
                                        <input name="con_name" type="text" placeholder="Name *">
                                    </div>
                                    <div class="contact-inner">
                                        <input name="con_email" type="email" placeholder="Email *">
                                    </div>
                                    <div class="contact-inner">
                                        <input name="con_phone" type="text" placeholder="Phone *">
                                    </div>
                                    <div class="contact-inner">
                                        <input name="con_subject" type="text" placeholder="Subject *">
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <textarea name="con_message" placeholder="Message *"></textarea>
                                    </div>
                                </div>
                                <div class="contact-submit-btn">
                                    <button class="submit-btn" type="submit">Send Email</button>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12">
                <div class="contact-infor">
                    <div class="contact-title">
                        <h3>CONTACT US</h3>
                    </div>
                    <div class="contact-dec">
                        <p>Please feel free to contact us. Below are the details.</p>
                    </div>
                    <div class="contact-address">
                        <ul>
                            <li><i class="zmdi zmdi-home"></i> <strong>Address :</strong> 55A, Ground Floor LP Colony, Sector 30-33, Faridabad,Haryana 121003</li>
                            <li><i class="zmdi zmdi-email"></i> <strong>Email :</strong> info@bmvestito.com</li>
                            <li><i class="zmdi zmdi-phone"></i> <strong>Mobile No. :</strong>+91-8826116007</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--// Page Conttent -->
<?php include 'footer.php';?>