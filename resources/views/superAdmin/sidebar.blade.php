
<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{Auth::user()->name }}</span>
                  <span class="text-secondary text-small"><em style="font-style: normal;" >@</em>{{Auth::user()->username }}</span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/order')}}">
                <span class="menu-title">Orders</span>
                <i class="mdi mdi-apps menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/view_users')}}">
                <span class="menu-title">Users</span>
                <i class="mdi mdi mdi-account-multiple menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>