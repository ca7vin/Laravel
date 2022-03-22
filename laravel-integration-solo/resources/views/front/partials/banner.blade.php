<!-- banner -->
<section class="banner_main">
    <div class="container-fluid">
       <div class="row d_flex">
          <div class="col-md-6">
             <div class="text-bg">
                <h1>{{ $dataBanner[0]->titre }}</h1>
                <p>{{ $dataBanner[0]->texte }}</p>
                <a href="#">{{ $dataBanner[0]->lien }}</a>
             </div>
          </div>
          <div class="col-md-6">
             <div class="text-img">
                <figure><img src="{{ $dataBanner[0]->image }}" alt="#"/></figure>
             </div>
          </div>
       </div>
    </div>
 </section>
</div>
</header>
<!-- end banner -->