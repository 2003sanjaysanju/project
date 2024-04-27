@extends('layouts.customer')
@section('content')
    <section class="not_found_section padding">
        <div class="container">
            <div class="404_content align-center">
                <section class="book_section padding">
                    <div class="book_bg"></div>
                    <div class="map_pattern"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                @if (isset($data))
                                    <div class="book_content">
                                        <h2 class="text-secondary">{{ $data->name ?? '' }}</h2>
                                        <h2 class="text-secondary">{{ $data->email ?? '' }}</h2>
                                        <h2 class="text-secondary">{{ $data->date ?? '' }}</h2>
                                        <h2 class="text-secondary">{{ $data->time ?? '' }}</h2>
                                    </div>
                                    @if(isset($data->cancel) && $data->cancel == 0)
                                    <form action="{{ route('customer.cancel') }}" method="post">
                                        @csrf
                                        <input name="id" type="hidden" value="{{$data->id ?? null}}" class="form-control"
                                                    placeholder="Your Email" required>
                                        <!-- Include any necessary form fields here -->
                                        <button type="submit" class="default_btn">Cancel Appointment</button>
                                    </form>
                                    @endif
                                @else
                                    <form class="form-horizontal appointment_form" method="post"
                                        action="{{ route('customer.checkSlote') }}">
                                        @csrf
                                        @method('post')
                                        <div class="book_content">
                                            <h2> Check appointment</h2>
                                            <p>Barber is a person whose occupation is mainly to cut dress groom <br>style
                                                and
                                                shave
                                                men's and boys hair.</p>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 padding-10">
                                                <input type="email" id="app_email" name="email" class="form-control"
                                                    placeholder="Your Email" required>
                                            </div>
                                            <div class="col-md-6 padding-10">
                                                <button class="default_btn" type="submit">Check Appointment</button>
                                            </div>

                                        </div>
                                        <div class="alert" role="alert"></div>

                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="widget_section padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <img class="mb-15" src="img/logo.png" alt="Brand">
                        <p>Our barbershop is created for men who appreciate premium quality, time and flawless look.
                        </p>
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
                                <button type="submit" class="submit">SUBSCRIBE</button>
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
