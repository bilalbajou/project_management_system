<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-7" href="{{route('Homepage')}}"><img src="assets/images/full2_logo.png" class="mr-2" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="{{route('Homepage')}}"><img src="assets/images/small_logo.png" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
    
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="icon-bell mx-0"></i>
            <span class="count"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
            
          </div>
        </li>
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="{{ route('profile.show') }}">
              <i class="ti-settings text-primary"></i>
              Profile
            </a> 
            <a href="dropdown-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              
              <x-jet-dropdown-link href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                              this.closest('form').submit();"> 
               <i class="ti-power-off text-primary"></i>  {{ __('Déconnexion') }}
              </x-jet-dropdown-link> 
              </form>
              </a> 
           
        </div>
        </li>
        <li class="nav-item nav-settings d-none d-lg-flex">
          <a class="nav-link" href="#">
            <i class="icon-ellipsis"></i>
          </a>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
  </nav>