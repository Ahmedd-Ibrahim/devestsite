@extends('front.layout.app')
@section('content')
{{--    style="background-image: url({{asset('front/images/bg_1.jpg')}});"--}}
    <section id="particles-js"  class="hero-wrap"  data-stellar-background-ratio="0.3">
        <div class="slide-box" id="index">
{{--            <div class="overlay"></div>--}}
            <div class="container">
                <div class="row no-gutters slider-text align-items-center">
                    <div class="col-md-10 col-lg-7 ftco-animate d-flex align-items-end">
                        <div class="text">
                            <h1 class="mb-4"> شركة تطوير برمجيات وحلول تقنية مخصصة</h1>
                            <p style="font-size: 18px;">نعمل على برمجة وتطوير خدمات ومنصات توفر حلولاً للأعمال التجارية اﻹلكترونية في الشرق اﻷوسط والوطن العربي.</p>
                            <div class="d-flex meta">
                                <div class=""><p class="mb-0"><a href="#about" class="btn btn-primary py-3 px-2 px-md-4 slider-button">معرفة المزيد عنا</a></p></div>
                                <a href="#contact" class="d-flex align-items-center button-link slider-button">
                                    <div class=""><p class="mb-0"><a href="#contact" class="btn btn-primary py-3 px-2 px-md-4">تواصل معنا</a></p></div>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div >
    </div>
    <section class="ftco-section ftco-portfolio about" id="about">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">معلومات وتفاصيل عن الشركة وآلية عملها وأهدافها</span>
                <h2 class="mb-2">معلومات عن الشركة</h2>
            </div>
        </div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 portfolio-wrap">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-5 img js-fullheight" style="background-image: url({{asset('front/images/work-1.jpg')}});">

                        </div>
                        <div class="col-md-7">
                            <div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">

                                    <div class="desc">
                                        <div >
                                            <h3 class="mb-4">من نحن؟ وماذا نفعل؟ وما هي أهدافنا ؟</h3>
                                        </div>
                                        <div class="absolute">
                                            <p>Devest هي شركة استشارات ادارية لمساعدة القادة على تطوير شركاتهم وبناء شركات رائدة من خلال اجراء تحسينات مميزة وجوهرية بشكل مستمر، يتطلب ذلك تضمين التقنيات الرقمية والتحليلات والتسويق الفعال </p>
                                            <p><a href="#our-work" class="custom-btn">مجالات العمل</a></p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 portfolio-wrap">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-5 order-md-last img js-fullheight" style="background-image: url({{asset('front/images/work-2.jpg')}});">

                        </div>
                        <div class="col-md-7">
                            <div class="text pt-5 pr-md-5 ftco-animate">
                                <div class="px-4 px-lg-4">
                                    <div class="desc text-md-right">
                                        <div class="">

                                            <h3 class="mb-4">نطور برمجيات وأنظمة مخصصة ومتطورة!</h3>
                                        </div>
                                        <div class="absolute">
                                            <p>يستخدم فريق عمل شركة DEVEST أحدث تقنيات البرمجة والتصميم لتطوير المواقع واﻷنظمة وتطبيقات Android و IOS وكذلك برامج الحاسوب  مما يمكننا من تنفيذ اﻷفكار واﻹبتكارات بشكل مخصص وإطلاق منصات حديثة، سريعة، وقوية تشمل مميزات غير مسبوقة باﻷنظمة اﻷخرى في الشرق اﻷوسط والوطن العربي!</p>
                                            <p><a href="#our-work" class="custom-btn">مجالات العمل</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<hr>
    <section class="our-work" id="our-work">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">المجالات والصناعات التي نعمل حالياً على تطوير برمجيات متقدمة لدعمها وحل مشكلاتها</span>
                    <h2>مجالات عملنا</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div>
                      <div class="icon d-flex justify-content-center align-items-center "><span class="flaticon-blueprint"></span></div>
                      <div class="plan-box text-center">
                          <h3>إدارة المشاريع</h3>
                          <p>نعمل على برمجة وتطوير برمجيات متطورة تساعد الشركات والمشاريع التجارية على اﻹدارة والمحاسبة بإستخدام التكنولوجيا الحديثة.</p>
                      </div>
                  </div>
                </div>
                  <div class="col-md-4 col-sm-6">
                  <div>
                      <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-store fa-3x"></i></div>
                      <div class="plan-box text-center">
                          <h3>تطوير البرمجيات والحلول الذكية</h3>
                          <p>نعمل على تطوير منصات وبرمجيات وحلول لمجال التكنولوجيا المالية والتحويلات المالية الذي يواجه الكثير من المشاكل في الشرق اﻷوسط وتحديداً الوطن العربي</p>
                      </div>
                  </div>
                </div>
                  <div class="col-md-4 col-sm-6">
                  <div>
                      <div class="icon d-flex justify-content-center align-items-center projects-box"><i class="fas fa-shopping-basket  fa-3x"></i></div>
                      <div class="plan-box text-center">
                          <h3>التجارة اﻹلكترونية</h3>
                          <p>نعمل على تطوير وإدارة منصات تقدم حلولاً لمجال التجارة اﻹلكترونية والعاملين فيه مما يعطي قوة أكبر للبائع في الوصول للمشتري وكذلك للمشتري في الوصول لمنتج أفضل.</p>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
<hr>

<section class="ftco-section" id="projects">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">المجالات والصناعات التي نعمل حالياً على تطوير برمجيات متقدمة لدعمها وحل مشكلاتها</span>
                <h2>مشاريعنا</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="block-7">
                    <div class="img" style="background-image: url({{asset('front/images/soon.jpg')}});"></div>
                    <div class="p-4">
                        <ul class="pricing-text mb-2 text-center">
                            <li><span class="fa fa-check-circle mr-2"></span>نظام المنتسبين</li>
                            <li><p>Advanced and Modern E-commerce platform that helps sellers connect with marketers and affiliates people that have the ability to reach buyers easily by their selling channels</p></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="block-7">
                    <div class="img" style="background-image: url({{asset('front/images/soon.jpg')}});"></div>
                    <div class="p-4">
                        <ul class="pricing-text mb-2  text-center">
                            <li><span class="fa fa-check-circle mr-2"></span>منصة التجارة الالكترونية</li>
                            <li><p>E-Commerce Project, we'll publish more info at the right time</p></li>

                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="block-7">
                    <div class="img" style="background-image: url({{asset('front/images/soon.jpg')}});"></div>
                    <div class="p-4">
                        <ul class="pricing-text mb-2  text-center">
                            <li><span class="fa fa-check-circle mr-2"></span>مشروع تجارة إلكترونية</li>
                            <li><p>E-commerce Project that will help merchants and small-to-medium stores to start selling online!</p></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">اراء العملاء</span>
                <h2 class="mb-3">ماذا قالوا عنا</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('front/images/person_1.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('front/images/person_2.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('front/images/person_3.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('front/images/person_1.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('front/images/person_2.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
    <section class="contact" id="contact">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">

                <h2 class="mb-2">تواصل معنا</h2>
                <span class="subheading">اترك لنا رسالة وسوف نقوم بالرد عليك بأسرع وقت ممكن</span>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <dive class="col-md-9 sm-12">
                    @include('front.messages.session')
                    <form method="POST" action="{{route('front.send')}}" class="bg-light p-5 contact-form">
                      @csrf

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="الاسم " required>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">

                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="الاميل الخاص بك" required>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="الموضوع" required>
                            @error('subject')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea required name="message" id=""  cols="30" rows="5" class="form-control" minlength="15" placeholder="الرساله"></textarea>
                            @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submit" class="submit btn btn-danger py-3 px-5 message">إرسال الرسالة  </button>
                        </div>
                    </form>
                </dive>
                <dive class="col-md-3 sm-12 text-right">
                    <p class="text-right text-box">أو تواصل معنا عبر الوسائل اﻵتية:</p>

                    <a class="box-info ">
                        <div class="col-md-12">
                          <div class="row">
                              <div class="col-md-2">
                                  <div class="socail-icon-box">
                                      <i class="fas fa-envelope fa-2x"></i>
                                  </div>
                              </div>
                              <div class="col-md-10">
                             <div class="box">
                                 <p>  البريد الالكتروني</p>
                                 <p>info@devest.com</p>
                             </div>
                              </div>
                          </div>
                        </div>
                    </a>


                    <a class="box-info ">
                        <div class="col-md-12">
                          <div class="row">
                              <div class="col-md-2">
                                  <div class="socail-icon-box">
                                      <i class="fab fa-facebook-f "></i>
                                  </div>
                              </div>
                              <div class="col-md-10">
                             <div class="box">
                                 <p>الفيسبوك</p>
                                 <p>info@devest.com</p>
                             </div>
                              </div>
                          </div>
                        </div>
                    </a>


                    <a class="box-info ">
                        <div class="col-md-12">
                          <div class="row">
                              <div class="col-md-2">
                                  <div class="socail-icon-box">
                                      <i class="fas fa-mobile-alt"></i>
                                  </div>
                              </div>
                              <div class="col-md-10">
                             <div class="box">
                                 <p>  التيلفون </p>
                                 <p class="phone">+20 502 727 737</p>
                             </div>
                              </div>
                          </div>
                        </div>
                    </a>


                </dive>
            </div>
        </div>
    </section>
@endsection
