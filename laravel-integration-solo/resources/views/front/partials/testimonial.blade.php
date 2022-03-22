     <!-- Testimonial -->
     <div class="section">
        <div class="container">
           <div id="" class="Testimonial">
              <div class="row">
                 <div class="col-md-12">
                    <div class="titlepage">
                       <h2>{!! $dataTestimonial[0]->titre !!}</h2>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-3">
                    <div class="Testimonial_box">
                       <i><img src="{!! $dataTestimonial[0]->image !!}" alt="#"/></i>
                    </div>
                 </div>
                 <div class="col-md-9">
                    <div class="Testimonial_box">
                       <h4>{!! $dataTestimonial[0]->titre2 !!}</h4>
                       <p>{!! $dataTestimonial[0]->texte !!}
                       </p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    
     <!-- end Testimonial -->
