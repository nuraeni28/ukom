@include('home.partials.header')
@include('home.partials.navbar')


<section class="explore-section section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="mb-4">Informasi Kegiatan Sekolah</h1>
            </div>

        </div>
    </div>



    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel"
                        aria-labelledby="design-tab" tabindex="0">
                        <div class="row">
                            @foreach ($datas as $data)
                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block bg-white shadow-lg">

                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">{{ $data->nama }}</h5>

                                                <p class="mb-0">{{ $data->deskripsi }}
                                                </p>
                                            </div>

                                            <span class="badge bg-design rounded-pill ms-auto"
                                                style="color: white">Kegiatan
                                                Jubel</span>
                                        </div>

                                        <img src="{{ asset('Dokumentasi/' . $data->dokumentasi) }}"
                                            class="custom-block-image img-fluid" alt="">

                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>

                    <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Advertising</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                                        </div>

                                        <img src="images/topics/undraw_online_ad_re_ol62.png"
                                            class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Video Content</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-advertising rounded-pill ms-auto">65</span>
                                        </div>

                                        <img src="images/topics/undraw_Group_video_re_btu7.png"
                                            class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Viral Tweet</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                                        </div>

                                        <img src="images/topics/undraw_viral_tweet_gndb.png"
                                            class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Investment</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                        </div>

                                        <img src="images/topics/undraw_Finance_re_gnv2.png"
                                            class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-block custom-block-overlay">
                                    <div class="d-flex flex-column h-100">
                                        <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg"
                                            class="custom-block-image img-fluid" alt="">

                                        <div class="custom-block-overlay-text d-flex">
                                            <div>
                                                <h5 class="text-white mb-2">Finance</h5>

                                                <p class="text-white">Lorem ipsum dolor, sit amet consectetur
                                                    adipisicing elit. Sint animi necessitatibus aperiam
                                                    repudiandae nam omnis</p>

                                                <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn
                                                    More</a>
                                            </div>

                                            <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                        </div>

                                        <div class="social-share d-flex">
                                            <p class="text-white me-4">Share:</p>

                                            <ul class="social-icon">
                                                <li class="social-icon-item">
                                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                                </li>

                                                <li class="social-icon-item">
                                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                                </li>

                                                <li class="social-icon-item">
                                                    <a href="#" class="social-icon-link bi-pinterest"></a>
                                                </li>
                                            </ul>

                                            <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                        </div>

                                        <div class="section-overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Composing Song</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-music rounded-pill ms-auto">45</span>
                                        </div>

                                        <img src="images/topics/undraw_Compose_music_re_wpiw.png"
                                            class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Online Music</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-music rounded-pill ms-auto">45</span>
                                        </div>

                                        <img src="images/topics/undraw_happy_music_g6wc.png"
                                            class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Podcast</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-music rounded-pill ms-auto">20</span>
                                        </div>

                                        <img src="images/topics/undraw_Podcast_audience_re_4i5q.png"
                                            class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="education-tab-pane" role="tabpanel"
                        aria-labelledby="education-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Graduation</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-education rounded-pill ms-auto">80</span>
                                        </div>

                                        <img src="images/topics/undraw_Graduation_re_gthn.png"
                                            class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="topics-detail.html">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-education rounded-pill ms-auto">75</span>
                                        </div>

                                        <img src="images/topics/undraw_Educator_re_ju47.png"
                                            class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>






{{-- <section class="timeline-section section-padding" id="section_3">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">How does it work?</h1>
                    </div>

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="timeline-container">
                            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                <div class="list-progress">
                                    <div class="inner"></div>
                                </div>

                                <li>
                                    <h4 class="text-white mb-3">Search your favourite topic</h4>

                                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Reiciendis, cumque magnam? Sequi, cupiditate quibusdam alias illum sed esse ad
                                        dignissimos libero sunt, quisquam numquam aliquam? Voluptas, accusamus omnis?
                                    </p>

                                    <div class="icon-holder">
                                        <i class="bi-search"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Bookmark &amp; Keep it for yourself</h4>

                                    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Sint animi necessitatibus aperiam repudiandae nam omnis est vel quo, nihil
                                        repellat quia velit error modi earum similique odit labore. Doloremque,
                                        repudiandae?</p>

                                    <div class="icon-holder">
                                        <i class="bi-bookmark"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Read &amp; Enjoy</h4>

                                    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Animi vero quisquam, rem assumenda similique voluptas distinctio, iste est hic
                                        eveniet debitis ut ducimus beatae id? Quam culpa deleniti officiis autem?</p>

                                    <div class="icon-holder">
                                        <i class="bi-book"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-5">
                        <p class="text-white">
                            Want to learn more?
                            <a href="#" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="faq-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Frequently Asked Questions</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-5 col-12">
                        <img src="images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                    </div>

                    <div class="col-lg-6 col-12 m-auto">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is Topic Listing?
                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Topic Listing is free Bootstrap 5 CSS template. <strong>You are not allowed to
                                            redistribute this template</strong> on any other template collection website
                                        without our permission. Please contact TemplateMo for more detail. Thank you.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        How to find a topic?
                                    </button>
                                </h2>

                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can search on Google with <strong>keywords</strong> such as templatemo
                                        portfolio, templatemo one-page layouts, photography, digital marketing, etc.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Does it need to paid?
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can modify any of this with custom CSS or overriding our default variables.
                                        It's also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}

{{-- 

        <section class="contact-section section-padding section-bg" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-5">Lokasi</h2>
                    </div>

                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                        <iframe class="google-map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10125.94090680756!2d119.42922923939958!3d-5.1208127078191925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDM1JzQ2LjMiTiAxMTnCsDUzJzIwLjAiUyAxMTnCsDAwJzAyLjkiRQ!5e1!3m2!1sen!2sus!4v1684340239744!5m2!1sen!2sus"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-6">
                        <h5>Jl. Sunu No. 11, Suwangga, Tallo, 90211, Kota Makassar, Sulawesi Selatan,
                            Indonesia </h5>

                        <h5>Work Hours : 07.00 - 16.00
                        </h5>
                        <h5> Monday - Friday </h5>


                    </div>
                </div>
        </section> --}}
</main>

@include('home.partials.footer')
