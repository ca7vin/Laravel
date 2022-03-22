     <!-- Projects -->
     <div class="projects">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <span>{{ $dataProject[0]->titreTop }}</span>
                    <h2>{{ $dataProject[0]->titreMid }}</h2>
                    <p>{{ $dataProject[0]->titreBottom }}</p>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-10 offset-md-1">
                 <div class="row">
                    <div class="col-md-6 offset-md-3">
                       <div class="projects_box ">
                          <figure><img src="{{ $dataProject[0]->image }}" alt="#"/></figure>
                       </div>
                    </div>
                    <div class="col-md-12">
                       <div class="projects_box ">
                          <p>{{ $dataProject[0]->texte }}</p>
                          <a class="read_more" href="#">{{ $dataProject[0]->lien }}</a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end projects -->
