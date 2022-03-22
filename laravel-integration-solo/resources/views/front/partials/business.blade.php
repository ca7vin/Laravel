 <!-- business -->
 <div class="business" id="About">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <span>{{ $dataBusiness[0]->titreTop }}</span>
                <h2>{{ $dataBusiness[0]->titreMid }}</h2>
                <p>{{ $dataBusiness[0]->titreBottom }}</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-10 offset-md-1">
             <div class="row">
                <div class="col-md-12">
                   <div class="business_box ">
                      <figure><img src="{{ $dataBusiness[0]->image }}" alt="#"/></figure>
                      <p>{{ $dataBusiness[0]->texte }}</p>
                      <a class="read_more" href="#">{{ $dataBusiness[0]->lien }}</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end business -->