@extends('layouts.customer')
@section('content')
    <section class="slider_section">
        <ul id="main-slider" class="owl-carousel main_slider">
            <li class="main_slide d-flex align-items-center" style="background-image: url('{{ asset('img/slide-1.jpg') }}');">
                <div class="container">
                    <div class="slider_content">
                        <h3>Its Not Just a Haircut, Its an Experience.</h3>
                        <h1>Being a barber is about <br>taking care of the people.</h1>
                        <p>Our barbershop is the territory created purely for males who appreciate<br> premium quality,
                            time and flawless look.</p>
                        <button id="app_submit" class="default_btn" type="submit">Make Appointment</button>

                    </div>
                </div>
            </li>
            <li class="main_slide d-flex align-items-center"
                style="background-image: url('{{ asset('img/slide-2.jpg') }}');">
                <div class="container">
                    <div class="slider_content">
                        <h3>Classic Hair Style & Shaves.</h3>
                        <h1>Our hair styles<br>enhances your smile.</h1>
                        <p>Our barbershop is the territory created purely for males who appreciate<br> premium quality,
                            time and flawless look.</p>
                        <button id="app_submit" class="default_btn" type="submit">Make Appointment</button>

                    </div>
                </div>
            </li>
            <li class="main_slide d-flex align-items-center"
                style="background-image: url('{{ asset('img/slide-3.jpg') }}');">
                <div class="container">
                    <div class="slider_content">
                        <h3>Its Not Just a Haircut, Its an Experience.</h3>
                        <h1>Where mens want <br>to look there very best.</h1>
                        <p>Our barbershop is the territory created purely for males who appreciate<br> premium quality,
                            time and flawless look.</p>
                        <button id="app_submit" class="default_btn" type="submit">Make Appointment</button>

                    </div>
                </div>
            </li>
        </ul>
    </section>
    <section id="about" class="about_section bd-bottom padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_content align-center">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">Introducing</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms">Salon@Door <br>Since 2023</h2>
                        <img class="wow fadeInUp" data-wow-delay="500ms" src="{{ asset('img/about-logo.png') }}"
                            alt="logo">
                        <p class="wow fadeInUp" data-wow-delay="600ms">Barber is a person whose occupation is mainly to
                            cut dress groom style and shave men's and boys' hair. A barber's place of work is known as a
                            "barbershop" or a "barber's". Barbershops are also places of social interaction and public
                            discourse. In some instances, barbershops are also public forums.</p>
                        <a href="#" class="default_btn wow fadeInUp" data-wow-delay="600ms">More About Us</a>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="about_img">
                        <img src="{{ asset('img/about-1.jpg') }}" alt="idea-images" class="about_img_1 wow fadeInLeft"
                            data-wow-delay="200ms">
                        <img src="{{ asset('img/about-2.jpg') }}" alt="idea-images" class="about_img_2 wow fadeInRight"
                            data-wow-delay="400ms">
                        <img src="{{ asset('img/about-3.jpg') }}" alt="idea-images" class="about_img_3 wow fadeInLeft"
                            data-wow-delay="600ms">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service_section bg-grey padding">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Our Services</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                    <div class="service_box">
                        <i class="bs bs-scissors-1"></i>
                        <h3>Haircut Styles</h3>
                        <p>"Barbers: Crafting Confidence, One Cut at a Time."</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                    <div class="service_box">
                        <i class="bs bs-razor-2"></i>
                        <h3>Beard Triming</h3>
                        <p>"Barbers: Where Style Meets Precision."</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                    <div class="service_box">
                        <i class="bs bs-brush"></i>
                        <h3>Smooth Shave</h3>
                        <p>"Barbers: Shaping Lives, One Haircut at a Time."</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                    <div class="service_box">
                        <i class="bs bs-hairbrush-1"></i>
                        <h3>Face Masking</h3>
                        <p>"Barbers: Masters of the Blade, Architects of Style."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="book_section padding">
        <div class="book_bg"></div>
        <div class="map_pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <form class="form-horizontal appointment_form" method="post" action="{{ route('customer.store') }}">
                        @csrf
                        @method('post')

                        <div class="book_content">
                            <h2>Make an appointment</h2>
                            <p>Barber is a person whose occupation is mainly to cut dress groom <br>style and shave
                                men's and boys hair.</p>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <input type="text" id="app_name" name="name" class="form-control" placeholder="Name"
                                    required>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="email" id="app_email" name="email" class="form-control"
        placeholder="Your Email" required>
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <input type="text" id="app_phone" name="phone_no" class="form-control"
            placeholder="Your Phone No" required pattern="[0-9]{1,10}">
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="time" id="app_free_time" name="time" class="form-control"
                                    placeholder="Your Free Time" required>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="date" id="app_free_date" name="date" class="form-control"
                                min="{{ date('Y-m-d') }}" placeholder="Your Free day" required>
                            </div>
                            <div class="col-md-6 padding-10">
                                 <input type="text" id="app_name" name="address" class="form-control" placeholder="addres"
                                required>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <select class="form-control" id="app_services" name="service">
                                    <option value="">Services</option>
                                    <option value="hair_styling">Hair Styling</option>
                                    <option value="shaving">Shaving</option>
                                    <option value="face_mask">Face Mask</option>
                                    <option value="hair_wash">Hair Wash</option>
                                    <option value="beard_trim">Beard Trimming</option>
                                </select>

                            </div>
                            <div class="col-md-6 padding-10">
                                <select class="form-control" id="app_barbers" name="barber">
                                    <option value="">Choose Barbers</option>
                                    <option value="michel_brown">Michel Brown</option>
                                    <option value="jonathan_smith">Jonathan Smith</option>
                                    <option value="jack_tosan">Jack Tosan</option>
                                    <option value="martin_lane">Martin Lane</option>
                                </select>

                            </div>
                        
                        </div>
                        <button class="default_btn" type="submit">Make Appointment</button>

                        <div class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="team_section bd-bottom padding">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Our Barbers</h2>
                <div class="heading-line"></div>
            </div>
            <ul class="team_members row">
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                    <div class="team_member">
                        <img src="{{ asset('img/team-1.jpg') }}" alt="Team Member">
                        <div class="overlay">
                            <h3>Kyle Frederick</h3>
                            <p>hair cutting</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                    <div class="team_member">
                        <img src="{{ asset('img/team-2.jpg') }}" alt="Team Member">
                        <div class="overlay">
                            <h3>José Carpio</h3>
                            <p>pedicure</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                    <div class="team_member">
                        <img src="{{ asset('img/team-3.jpg') }}" alt="Team Member">
                        <div class="overlay">
                            <h3>Michel Ibáñez</h3>
                            <p>face masking</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                    <div class="team_member">
                        <img src="{{ asset('img/team-4.jpg') }}" alt="Team Member">
                        <div class="overlay">
                            <h3>Adam Castellon</h3>
                            <p>hair coloring</p>
                        </div>
                       
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section id="reviews" class="testimonial_section padding">
        <div class="container">
            <ul id="testimonial_carousel" class="testimonial_items owl-carousel">
                <li class="testimonial_item">
                    <p>"Discover a sanctuary of elegance and relaxation, where every visit is a journey to self-care.<br>
                        Our skilled stylists and therapists are dedicated to bringing out your inner radiance.<br>
                        Unwind, rejuvenate, and emerge feeling utterly transformed."</p>
                    <h4 class="text-white">salon@door.</h4>
                </li>
                <li class="testimonial_item">
                    <p>"At our salon, we don't just style hair, we craft experiences.<br>
                        Every appointment is an opportunity to enhance your natural beauty.<br>
                        Join us and discover the art of self-expression through our expert touch."
                    </p>
                    <h4 class="text-white">salon@door.</h4>
                </li>
                <li class="testimonial_item">
                    <p>"Welcome to our salon, where beauty is more than skin deep.<br>
                        Indulge in our transformative treatments, tailored to elevate your confidence.<br>
                        Step inside and let your radiance shine brighter than ever before."</p>
                    <h4 class="text-white">salon@door.</h4>
                </li>
            </ul>
        </div>
    </section>
    <section class="pricing_section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Save 20% On Beauty Spa</h3>
                <h2>Our Barber Pricing</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 sm-padding">
                    <div class="price_wrap">
                        <h3>Hair Styling</h3>
                        <ul class="price_list">
                            <li>
                                <h4>Hair Cut</h4>
                                <p>A great haircut is the perfect accessory for every occasion, effortlessly elevating your
                                    look and boosting your confidence.
                                </p>
                                <span class="price">₹249</span>
                            </li>
                            <li>
                                <h4>Hair Styling</h4>
                                <p>A great haircut is the perfect accessory for every occasion, effortlessly elevating your
                                    look and boosting your confidence.
                                </p>
                                <span class="price">₹349</span>
                            </li>
                            <li>
                                <h4>Hair Triming</h4>
                                <p>A great haircut is the perfect accessory for every occasion, effortlessly elevating your
                                    look and boosting your confidence.
                                </p>
                                <span class="price">₹279</span>
                            </li>
                        </ul>
                        <h3>Pedicure</h3>
                        <ul class="price_list">
                            <li>
                                <h4>Classic Pedicure</h4>
                                <p>"Pedicures are a treat for the feet, offering relaxation, rejuvenation, and a touch of
                                    pampering that leaves you walking on air."
                                </p>
                                <span class="price">₹499</span>
                            </li>
                            <li>
                                <h4>Spa Pedicure</h4>
                                <p>"Pedicures are a treat for the feet, offering relaxation, rejuvenation, and a touch of
                                    pampering that leaves you walking on air."
                                </p>
                                <span class="price">₹699</span>
                            </li>
                            <li>
                                <h4>Gel Pedicure</h4>
                                <p>"Pedicures are a treat for the feet, offering relaxation, rejuvenation, and a touch of
                                    pampering that leaves you walking on air."
                                </p>
                                <span class="price">₹649</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-padding">
                    <div class="price_wrap">
                        <h3>Shaving</h3>
                        <ul class="price_list">
                            <li>
                                <h4>Clean Shaving</h4>
                                <p>"Shaving: Where precision meets sophistication."
                                </p>
                                <span class="price">₹149</span>
                            </li>
                            <li>
                                <h4>Beard Triming</h4>
                                <p>"Shaving: Where precision meets sophistication."
                                </p>
                                <span class="price">₹199</span>
                            </li>
                            <li>
                                <h4>Smooth Shave</h4>
                                <p>"Shaving: Where precision meets sophistication."
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </p>
                                <span class="price">₹239</span>
                            </li>

                        </ul>
                        <h3>Massage Therapy</h3>
                        <ul class="price_list">
                            <li>
                                <h4>Swedish Massage</h4>
                                <p>Massage therapy is a blissful escape from the stresses of everyday life, offering a
                                    soothing touch that relaxes both the body and the mind.
                                </p>
                                <span class="price">₹799</span>
                            </li>
                            <li>
                                <h4>Deep Tissue Massage</h4>
                                <p>Massage therapy is a blissful escape from the stresses of everyday life, offering a
                                    soothing touch that relaxes both the body and the mind.
                                </p>
                                <span class="price">₹1999</span>
                            </li>
                            <li>
                                <h4>Hot Stone Massage</h4>
                                <p>Massage therapy is a blissful escape from the stresses of everyday life, offering a
                                    soothing touch that relaxes both the body and the mind.
                                </p>
                                <span class="price">₹1499</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 sm-padding">
                    <div class="price_wrap">
                        <h3>Face Masking</h3>
                        <ul class="price_list">
                            <li>
                                <h4>White Facial</h4>
                                <p>"Face masking is a refreshing treat for the skin, leaving it feeling rejuvenated and
                                    glowing!"
                                </p>
                                <span class="price">₹199</span>
                            </li>
                            <li>
                                <h4>Face Cleaning</h4>
                                <p>"Face masking is a refreshing treat for the skin, leaving it feeling rejuvenated and
                                    glowing!"
                                </p>
                                <span class="price">₹199</span>
                            </li>
                            <li>
                                <h4>Bright Tuning</h4>
                                <p>"Face masking is a refreshing treat for the skin, leaving it feeling rejuvenated and
                                    glowing!"
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </p>
                                <span class="price">₹299</span>
                            </li>
                        </ul>
                        <h3>Hair Coloring</h3>
                        <ul class="price_list">
                            <li>
                                <h4>Highlights and Lowlights</h4>
                                <p>"Hair coloring is a transformative art, adding vibrancy and personality to every strand."
                                </p>
                                <span class="price">₹449</span>
                            </li>
                            <li>
                                <h4>Balayage</h4>
                                <p>"Hair coloring is a transformative art, adding vibrancy and personality to every strand."
                                </p>
                                <span class="price">₹499</span>
                            </li>
                            <li>
                                <h4>All-Over Hair Color</h4>
                                <p>"Hair coloring is a transformative art, adding vibrancy and personality to every strand."
                                </p>
                                <span class="price">₹399</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta_section padding">
        <div class="container">
            <div class="display-table">
                <div class="table-cel">
                    <div class="cta_content align-center wow fadeInUp" data-wow-delay="300ms">
                        <h2>Making You Look Good <br> Is In Our Heritage.</h2>
                        <p>Barber is a person whose occupation is mainly to cut dress groom <br>style and shave men's
                            and boys hair.</p>
                        <button id="app_submit" class="default_btn" type="submit">Make Appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-section bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>From Blog</h3>
                <h2>A Good Newspaper Is A <br> Nation Talking To Itself</h2>
            </div>
            <div class="row blog-wrap">
                <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="{{ asset('img/post-1.jpg') }}" alt="post">
                            <span class="category"><a href="#">interior</a></span>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Minimalist trending in modern architecture 2019</a></h3>
                            <p>Building first evolved out dynamics between needs means available building materials
                                attendant skills.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="{{ asset('img/post-2.jpg') }}" alt="post">
                            <span class="category"><a href="#">Architecture</a></span>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Terrace in the town yamazaki kentaro design workshop.</a></h3>
                            <p>Building first evolved out dynamics between needs means available building materials
                                attendant skills.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="{{ asset('img/post-3.jpg') }}" alt="post">
                            <span class="category"><a href="#">Design</a></span>
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">W270 house são paulo arquitetos fabio jorge architeqture.</a></h3>
                            <p>Building first evolved out dynamics between needs means available building materials
                                attendant skills.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sponsor_section bg-grey padding">
        <div class="container">
            <ul id="sponsor_carousel" class="sponsor_items owl-carousel">
                <li class="sponsor_item">
                    <img src="{{ asset('img/sponsor-1.png') }}" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{ asset('img/sponsor-2.png') }}" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{ asset('img/sponsor-3.png') }}" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{ asset('img/sponsor-4.png') }}" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{ asset('img/sponsor-5.png') }}" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{ asset('img/sponsor-1.png') }}" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{ asset('img/sponsor-2.png') }}" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="{{ asset('img/sponsor-3.png') }}" alt="sponsor-image">
                </li>
            </ul>
        </div>
    </div>
    <section class="widget_section padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <img class="mb-15" src="img/logo.png')}}" alt="Brand">
                        <p>Our barbershop is created for men who appreciate premium quality, time and flawless look. </p>
                        <ul class="widget_social">
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_googleplus"></i></a></li>
                            <li><a href="#"><i class="social_instagram"></i></a></li>
                            <li><a href="#"><i class="social_linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <h3>Headquarters</h3>
                        <p>123, Brigade Road,
                            Bangalore - 560001,
                            Karnataka, India.</p>
                        <h3>E-mail US</h3>
                        <p>salonatdoor@gmail.com</p>
                        <br>
                        <h3>Toll-free number</h3>
                        <p>+(91) 98 7654 3210</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <h3>Opening Hours</h3>
                        <ul class="opening_time">
                            <li>24X7</li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 sm-padding">
                    <div class="footer_widget">
                        <h3>Subscribe to our contents</h3>
                        <div class="subscribe_form">
                            <form action="#" class="subscribe_form">
                                <input type="email" name="email" id="subs-email" class="form_input"
                                    placeholder="Email Address...">
                                <button type="submit" class="submit"
                                    onclick="location.href='subscribed.html'">SUBSCRIBE</button>
                                <div class="clearfix"></div>
                                <div id="subscribe-result">
                                    <p class="subscription-success"></p>
                                    <p class="subscription-error"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="copyright">&copy;
                        <script type="text/javascript">
                            document.write(new Date().getFullYear())
                        </script> Barber Shop

                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <ul class="footer_social">
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Report Problem</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection
