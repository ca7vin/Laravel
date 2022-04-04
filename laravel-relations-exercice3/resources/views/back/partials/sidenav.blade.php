<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">CodingLab</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-liste p-0">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="{{ Route('equipes.index') }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Equipes</span>
        </a>
         <span class="tooltip">Equipes</span>
      </li>
      <li>
       <a href="{{ Route('joueurs.index') }}">
         <i class='bx bx-user' ></i>
         <span class="links_name">Joueurs</span>
       </a>
       <span class="tooltip">Joueurs</span>
     </li>
      <li>
       <a href="{{ Route('welcome') }}">
         <i class='bx bxs-dashboard'></i>
         <span class="links_name">Dashboard</span>
       </a>
       <span class="tooltip">Dashboard</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           <div class="name_job">
             <div class="name">Prem Shahi</div>
             <div class="job">Web designer</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Dashboard Volleyball</div>
  </section>

</body>
</html>
