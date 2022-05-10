  <div class="sidebar">
      <div class="logo-details">
          <i class='bx bxl-c-plus-plus icon'></i>
          <div class="logo_name">CodingLab</div>
          <i class='bx bx-menu' id="btn"></i>
      </div>
      <ul class="nav-list p-0">
          <li>
              <i class='bx bx-search'></i>
              <input type="text" placeholder="Search...">
              <span class="tooltip">Search</span>
          </li>
          <li>
              <a href="{{ route('services.index') }}">
                  <i class='bx bx-grid-alt'></i>
                  <span class="links_name">Services</span>
              </a>
              <span class="tooltip">Services</span>
          </li>
          <li>
              <a href="{{ route('clients.index') }}">
                  <i class='bx bx-grid-alt'></i>
                  <span class="links_name">Clients</span>
              </a>
              <span class="tooltip">Clients</span>
          </li>
          <li>
              <a href="{{ route('banner.index') }}">
                  <i class='bx bx-grid-alt'></i>
                  <span class="links_name">Banners</span>
              </a>
              <span class="tooltip">Banners</span>
          </li>
          <li class="profile">
              <div class="profile-details">
                  <!--<img src="profile.jpg" alt="profileImg">-->
                  <div class="name_job">
                      <div class="name">Prem Shahi</div>
                      <div class="job">Web designer</div>
                  </div>
              </div>
              <a href="{{ route('home') }}">
                  <i class='bx bx-log-out' id="log_out"></i>
              </a>
          </li>
      </ul>
  </div>
