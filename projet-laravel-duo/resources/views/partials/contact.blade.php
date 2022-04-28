<section class="contact-us" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div id="map">

                    <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
                    <iframe width="600" height="450" id="gmap_canvas"
                        src="https://maps.google.com/maps?q={{ $contact[0]->map }}&t=&z=17&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-1">
                            <div class="contact-info">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h4>Phone</h4>
                                <span>{{ $contact[0]->phone }}</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-info">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h4>Mobile</h4>
                                <span>{{ $contact[0]->mobile }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <form id="contact" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <h6>{{ $title[4]->petit }}</h6>
                                <h4>{{ $title[4]->grand }} <em>{{ $title[4]->grand2 }}</em></h4>
                                <p>{{ $title[4]->description }}</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on"
                                    required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="address" name="address" id="address" placeholder="Full Address"
                                    autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="phoneNumber" name="phoneNumber" id="phoneNumber"
                                    placeholder="Full Phone Number" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Your Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-gradient-button">Send
                                    Message</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <p class="copyright">Copyright © 2022 EduWell Co., Ltd. All Rights Reserved.

                    <br>Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                </p>
            </div>
        </div>
    </div>
</section>
