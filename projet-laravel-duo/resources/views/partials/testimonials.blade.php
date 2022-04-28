<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>{{ $title[3]->petit }}</h6>
                    <h4>{{ $title[3]->grand }} <em>{{ $title[3]->grand2 }}</em></h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
                    @foreach ($testi as $testimonial)
                    <div class="item">
                        <p>“{{ $testimonial->text }}”</p>
                        <h4>{{ $testimonial->name }}</h4>
                        <span>{{ $testimonial->role }}</span>
                        <img src="{{ asset('/images/quote.png') }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
