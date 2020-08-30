@extends('front.layout.app')
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('front/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-3 bread">Services</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center px-3 pb-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-lamp"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Planning</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center px-3 pb-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-house"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Interior Design</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center px-3 pb-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-relax"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Exterior Design</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center px-3 pb-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-kitchen"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Decoration</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center px-3 pb-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-kitchen"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Furniture</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center px-3 pb-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-debate"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Consultation</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center px-3 pb-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-wall"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Restoration</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center px-3 pb-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-hotel"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Building</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Pricing</span>
                    <h2>Price &amp; Plans</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="block-7">
                        <div class="img" style="background-image: url({{asset('front/images/work-1.jpg')}});"></div>
                        <div class="p-4">
                            <ul class="pricing-text mb-2">
                                <li><span class="fa fa-check-circle mr-2"></span>Planning Solution</li>
                                <li><span class="fa fa-check-circle mr-2"></span>10 Construction Drawings</li>
                                <li><span class="fa fa-check-circle mr-2"></span>Selection Materials</li>
                                <li><span class="fa fa-check-circle mr-2"></span>Unlimited Revision</li>
                            </ul>
                        </div>
                        <div class="d-lg-flex align-items-center w-100 bg-light py-2 px-4">
                            <span class="price"><sup>$</sup> <span class="number">78</span> <sub>/mos</sub></span>
                            <p class="w-100 mb-0">
                                <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="block-7">
                        <div class="img" style="background-image: url({{asset('front/images/work-2.jpg')}});"></div>
                        <div class="p-4">
                            <ul class="pricing-text mb-2">
                                <li><span class="fa fa-check-circle mr-2"></span>Planning Solution</li>
                                <li><span class="fa fa-check-circle mr-2"></span>10 Construction Drawings</li>
                                <li><span class="fa fa-check-circle mr-2"></span>Selection Materials</li>
                                <li><span class="fa fa-check-circle mr-2"></span>Unlimited Revision</li>
                            </ul>
                        </div>
                        <div class="d-lg-flex align-items-center w-100 bg-light py-2 px-4">
                            <span class="price"><sup>$</sup> <span class="number">88</span> <sub>/mos</sub></span>
                            <p class="w-100 mb-0">
                                <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="block-7">
                        <div class="img" style="background-image: url({{asset('front/images/work-3.jpg')}});"></div>
                        <div class="p-4">
                            <ul class="pricing-text mb-2">
                                <li><span class="fa fa-check-circle mr-2"></span>Planning Solution</li>
                                <li><span class="fa fa-check-circle mr-2"></span>10 Construction Drawings</li>
                                <li><span class="fa fa-check-circle mr-2"></span>Selection Materials</li>
                                <li><span class="fa fa-check-circle mr-2"></span>Unlimited Revision</li>
                            </ul>
                        </div>
                        <div class="d-lg-flex align-items-center w-100 bg-light py-2 px-4">
                            <span class="price"><sup>$</sup> <span class="number">98</span> <sub>/mos</sub></span>
                            <p class="w-100 mb-0">
                                <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
