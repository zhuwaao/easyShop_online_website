
<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="/" class="nav-link">
                
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{Auth::user()->name }}</span>
                  <span class="text-secondary text-small"><em style="font-style: normal;" >@</em>{{Auth::user()->username }}</span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('view_category')}}">
                <span class="menu-title">Category</span>
                <i class="mdi mdi-apps menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-animation menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item "> <a class="nav-link" href="{{url('/view_product')}}">Add Products</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('/show_product')}}">View Products</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>