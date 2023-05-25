<header id="header" class="navbar navbar-light" style="background-color: #abd9fa;"  >

    <div class="d-flex align-items-center justify-content-between" style="padding-bottom: 20px;">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{url('assets/img/logo.png')}}" alt="" style="padding-left: 23px;">

        <span class="d-none d-lg-block">Premier University </span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>


    </div><!-- End Logo -->




    <nav class="header-nav ms-auto">
        {{--<h2>{{Session::get('userid')}}</h2>--}}
      <ul class="d-flex align-items-center">



        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

            <img src="{{url('assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            {{--<img src="{{ asset('thumbnail/'.userimg) }}" alt="Profile" class="rounded-circle">--}}

            <span class="d-none d-md-block dropdown-toggle ps-2">{{Session::get('username')}}</span>

          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span><form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                </form></span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
