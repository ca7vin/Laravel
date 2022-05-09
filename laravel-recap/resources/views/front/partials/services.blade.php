<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>Amazing <em>Services &amp; Features</em> for you</h4>
                    <img src={{ asset('images/heading-line-dec.png') }} alt="">
                    <p>If you need the greatest collection of HTML templates for your business, please visit <a
                            rel="nofollow" href="https://www.toocss.com/" target="_blank">TooCSS</a> Blog. If you need
                        to have a contact form PHP script, go to <a href="https://templatemo.com/contact"
                            target="_parent">our contact page</a> for more information.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            @foreach ($services as $service)
                <div class="col-lg-3">
                    <div class="service-item {{ $service->class }}">
                        <div class="icon" style='background-image:url(../images/{{ $service->icon }})'  onmouseout='this.style.backgroundImage="url(../images/{{ $service->icon }})"' onmouseover='this.style.backgroundImage="url(../images/{{ $service->iconhover }})"'>
                        </div>
                        <h4>{!! $service->name !!}</h4>
                        <p>{!! $service->text !!}</p>
                        <div class="text-button">
                            <a href="{{ $service->link }}">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
