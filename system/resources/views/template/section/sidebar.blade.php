        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{url('public')}}/assets/images/faces/face2.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Saya Dung So Beautiful</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('home')}}">
                <span class="menu-title">Home</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="{{url('product')}}" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Product</span>
                <i class="menu-arrow"></i>
               <i class="mdi mdi-cart-outline menu-icon"></i>

              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Vegetables</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fruits</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Juice</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Dried</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact')}}">
                <span class="menu-title">Contact</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register">
                <span class="menu-title">Register</span>
                <i class="mdi mdi-account-box menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Log Out</span>
               <i class="mdi mdi-logout menu-icon"></i>
              </a>
            </li>