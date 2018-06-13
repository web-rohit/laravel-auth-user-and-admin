<div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-item has-sub">
              <a href="/dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
              </a>
            </li>
            @if(Auth::user()->admin)
            <li class="site-menu-item has-sub">
              <a href="/users">
                <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                <span class="site-menu-title">Users</span>
              </a>
            </li>
            @endif
            <li class="site-menu-item has-sub">
              <a href="/changePassword">
                <i class="site-menu-icon wb-info" aria-hidden="true"></i>
                <span class="site-menu-title">Change Password</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  