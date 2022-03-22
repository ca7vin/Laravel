<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Prepare to die</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>

      <li>
        <a href="{{ route("banners") }}">
          <i class="fas fa-image"></i>
          <span class="links_name">Banner</span>
        </a>
         <span class="tooltip">Banner</span>
      </li>
      <li>
        <a href="{{ route("business") }}">
          <i class="fas fa-dollar-sign"></i>
          <span class="links_name">Business</span>
        </a>
         <span class="tooltip">Business</span>
      </li>
      <li>
        <a href="{{ route("contact") }}">
          <i class="fas fa-address-book"></i>
          <span class="links_name">Contact</span>
        </a>
         <span class="tooltip">Contact</span>
      </li>
      <li>
        <a href="{{ route("footer") }}">
          <i class="fas fa-socks"></i>
          <span class="links_name">Footer</span>
        </a>
         <span class="tooltip">Footer</span>
      </li>
      <li>
        <a href="{{ route("header") }}">
          <i class="fas fa-head-side-virus"></i>
          <span class="links_name">Header</span>
        </a>
         <span class="tooltip">Header</span>
      </li>
      <li>
        <a href="{{ route("project") }}">
          <i class="fas fa-project-diagram"></i>
          <span class="links_name">Project</span>
        </a>
         <span class="tooltip">Project</span>
      </li>
      <li>
        <a href="{{ route("testimonial") }}">
          <i class="fas fa-comment"></i>
          <span class="links_name">Testimonial</span>
        </a>
         <span class="tooltip">Testimonial</span>
      </li>

      <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           <div class="name_job">
             <div class="name">Calvin</div>
             <div class="job">Web designer inchallah</div>
           </div>
         </div>
         <a href="/"><i class='bx bx-log-out' id="log_out" ></i></a>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="container-fluid">
        <h1 class='text'>Bienvenue en Enfer</h1>
      </div>
  </section>

