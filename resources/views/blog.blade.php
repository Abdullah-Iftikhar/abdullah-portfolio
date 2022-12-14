@extends('layout.main')
@section('content')
    <section class="ftco-section bg-light" id="blog">
        <div class="container-xl">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Blog</span>
                    <h2>Recent From Blog</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                         data-aos-delay="100">
                        <a href="blog-detail.blade.php" class="block-20 img"
                           style="background-image:url({{asset('assets/images/ximage_1.jpg.pagespeed.ic.sYEsLcUyj_.jpg')}})">
                        </a>
                        <div class="text">
                            <p class="meta">
                                <span><i class="fa fa-calendar me-1"></i>Jan. 18, 2021</span>
                                <span><a href="#">
                                        <i class="fa fa-comment me-1"></i> 3 Comments</a>
                                </span>
                            </p>
                            <h3 class="heading mb-3">
                                <a href="#">Tips About Creating A New Web Design</a>
                            </h3>
                            <p>
                                A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.
                            </p>

                            <div class="tag-widget post-tag-container mt-1">
                                <div class="tagcloud-list">
                                    <a href="#" class="tag-cloud-link">coding</a>
                                    <a href="#" class="tag-cloud-link">education</a>
                                    <a href="#" class="tag-cloud-link">courses</a>
                                    <a href="#" class="tag-cloud-link">online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
