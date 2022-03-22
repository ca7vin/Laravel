     <!-- contact -->
     <div id="Contact" class="contact">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>{{ $dataContact[0]->titreTop }}</h2>
                    <span>{{ $dataContact[0]->titreBottom }}</span>
                 </div>
              </div>
           </div>
        </div>
        <div class="container">
           <div class="row">
              <div class="col-md-12 ">
                 <form class="main_form ">
                    <div class="row">
                       <div class="col-md-12 ">
                          <input class="form_contril" placeholder="Name " type="text" name="Name ">
                       </div>
                       <div class="col-md-12">
                          <input class="form_contril" placeholder="Phone Number" type="text" name=" Phone Number">
                       </div>
                       <div class="col-md-12">
                          <input class="form_contril" placeholder="Email" type="text" name="Email">
                       </div>
                       <div class="col-md-12">
                          <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                       </div>
                       <div class="col-sm-12">
                          <button class="send_btn">Send</button>
                       </div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
     <!-- end contact -->
