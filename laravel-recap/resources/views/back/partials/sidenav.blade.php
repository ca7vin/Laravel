  <div class="sidebar">
      <div class="logo-details">
          <div class="logo_name">
              <img class='ps-2' src="{{ asset('images/white-logo.png') }}" alt="">
          </div>
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
                <i class='bx bxs-server' ></i>
                  <span class="links_name">Services</span>
              </a>
              <span class="tooltip">Services</span>
          </li>
          <li>
              <a href="{{ route('clients.index') }}">
                <i class='bx bxs-message-rounded-dots' ></i>
                  <span class="links_name">Clients</span>
              </a>
              <span class="tooltip">Clients</span>
          </li>
          <li>
              <a href="{{ route('banner.index') }}">
                <i class='bx bxs-image' ></i>
                  <span class="links_name">Banners</span>
              </a>
              <span class="tooltip">Banners</span>
          </li>
          <li>
              <a href="{{ route('role.index') }}">
                <i class='bx bxs-ghost'></i>
                  <span class="links_name">Roles</span>
              </a>
              <span class="tooltip">Roles</span>
          </li>
          <li>
              <a href="{{ route('users.index') }}">
                <i class='bx bxs-user'></i>
                  <span class="links_name">Users</span>
              </a>
              <span class="tooltip">Users</span>
          </li>
          <li class="profile">
              <div class="profile-details">
                  <!--<img src="profile.jpg" alt="profileImg">-->
                  <div class="name_job">
                      <div class="name">{{ Auth::user()->name }}</div>
                      <div class="job">{{ Auth::user()->role->role }}</div>
                  </div>
              </div>
              <a id='btnLogOut' href="{{ route('home') }}">
                  <i class='bx bx-log-out' id="log_out"></i>
              </a>
          </li>
      </ul>
  </div>
