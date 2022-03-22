<!-- header -->
<header id='Home'>
    <!-- header inner -->
    <div  class="head_top">
       <div class="header">
          <div class="container-fluid">
             <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                   <div class="full">
                      <div class="center-desk">
                         <div class="logo">
                            <a href="index.html"><img src="{{ $dataHeader[0]->image }}" alt="#" /></a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                   <nav class="navigation navbar navbar-expand-md navbar-dark ">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarsExample04">
                         <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                               <a class="nav-link" href="{{ $dataHeader[0]->navLink }}"> {{ $dataHeader[0]->navText }}  </a>
                            </li>
                            <li class="nav-item">
                               <a class="nav-link" href="{{ $dataHeader[1]->navLink }}">{{ $dataHeader[1]->navText }}</a>
                            </li>
                            <li class="nav-item">
                               <a class="nav-link" href="{{ $dataHeader[2]->navLink }}">{{ $dataHeader[2]->navText }}</a>
                            </li>
                         </ul>
                         <button class="btn btn-dark text-white"><a class='text-white text-decoration-none' href="{{ $dataHeader[3]->navLink }}">{{ $dataHeader[3]->navText }}</a></button>
                      </div>
                   </nav>
                </div>
             </div>
          </div>
       </div>
       <!-- end header inner -->
       <!-- end header -->