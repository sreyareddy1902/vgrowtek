<?php include 'includes/header.php';?>


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/contact-back.png);">
            </div>
          <!--  <div class="page-header__shape-1 float-bob-y">
                <img src="assets/images/shapes/page-header-shape-1.png" alt="">
            </div>
            <div class="page-header__shape-2 float-bob-x">
                <img src="assets/images/shapes/page-header-shape-2.png" alt="">
            </div>
            <div class="page-header__shape-3 float-bob-y">
                <img src="assets/images/shapes/page-header-shape-3.png" alt="">
            </div>
            <div class="page-header__shape-4 float-bob-x">
                <img src="assets/images/shapes/page-header-shape-4.png" alt="">
            </div>-->
            <div class="container">
                <div class="page-header__inner">
                    <h2>Contact</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span class="icon-down-arrow"></span></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Information Start-->
        <section class="information">
            <div class="container">
                <div class="row">
                 
                    <!--Information Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="information__single" style="padding-bottom: 58px;">
                            <div class="information__icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <p class="information__text">Call Us</p>
                            <p class="information__number"><a href="tel:+1 469-935-8758">+1 469-935-8758</a></p>
                           <!-- <a href="" class="information__btn">Call Us<span class="icon-right-arrow1"></span></a>-->
                        </div>
                    </div>
                    <!--Information Single End-->
                    <!--Information Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="information__single" style="padding-bottom: 58px;">
                            <div class="information__icon">
                                <span class="icon-gmail"></span>
                            </div>
                            <p class="information__text">Mail Us</p>
                            <p class="information__number"><a href="mailto:hr@vgrowtech.com">hr@vgrowtech.com</a>
                            </p>
                           <!-- <a href="" class="information__btn">Drop Us A Line<span
                                    class="icon-right-arrow1"></span></a>-->
                        </div>
                    </div>
                    <!--Information Single End-->
                    <!--Information Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="information__single">
                            <div class="information__icon">
                                <span class="icon-location-2"></span>
                            </div>
                            <p class="information__text">Office Address</p>
                            <p class="information__number">14934 Webb Chapel Road, Suite 12, Farmers Branch, Texas, 75234</p>
                          <!--  <a href="" class="information__btn">Directions<span class="icon-right-arrow1"></span></a>-->
                        </div>
                    </div>
                    <!--Information Single End-->
                </div>
            </div>
        </section>
        <!--Information End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-page__left">
                            <h3 class="contact-page__title">Get in Touch</h3>
                            <p class="contact-page__sub-title">LEAVE US A MESSAGE</p>
                            <div class="contact-page__form-box">
                                <form action="assets/inc/sendemail.php"
                                    class="contact-page__form contact-form-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box">
                                                <h3 class="contact-page__input-title">Full Name *</h3>
                                                <input type="text" placeholder="Jhon Smith" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="contact-page__input-box">
                                                <h3 class="contact-page__input-title">Email *</h3>
                                                <input type="email" placeholder="e.g:" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="contact-page__input-box">
                                                <h3 class="contact-page__input-title">Phone Number *</h3>
                                                <input type="text" placeholder="+1 (00)" name="Phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box">
                                                <h3 class="contact-page__input-title">subject*</h3>
                                                <div class="contact-page__showing-sort">
                                                    <select class="selectpicker" aria-label="Default select example">
                                                        <option selected>Select ...</option>
                                                        <option value="1">Sort by popular-01</option>
                                                        <option value="2">Sort by popular-02</option>
                                                        <option value="3">Sort by popular-03</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box text-message-box">
                                                <h3 class="contact-page__input-title">Message
                                                    <span>(Oprional)</span></h3>
                                                <textarea name="message" placeholder="Type here..."></textarea>
                                            </div>
                                            <div class="contact-page__btn-box">
                                                <button type="submit" class="thm-btn contact-page__btn"><span
                                                        class="fas fa-paper-plane"></span>SEND
                                                    MESSAGE</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-page__right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.944405411645!2d-96.87293462453245!3d32.952477173590864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c26f3d16a9b03%3A0x3e945ea1d62ae444!2s14934%20Webb%20Chapel%20Rd%20%2312%2C%20Farmers%20Branch%2C%20TX%2075234%2C%20USA!5e0!3m2!1sen!2sin!4v1731568629415!5m2!1sen!2sin" width="600" height="750" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->


        <?php include 'includes/footer.php';?>