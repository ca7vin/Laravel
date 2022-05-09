<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>{{ $banner[0]->title }}</h2>
                                    <p>{{ $banner[0]->text }}
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="white-button first-button scroll-to-section">
                                        <a href="{{ $banner[0]->link1 }}">Free Quote <i class="{{ $banner[0]->icon1 }}"></i></a>
                                    </div>
                                    <div class="white-button scroll-to-section">
                                        <a href="{{ $banner[0]->link2 }}">Free Quote <i class="{{ $banner[0]->icon2 }}"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src={{ asset('images/' . $banner[0]->img) }} alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>