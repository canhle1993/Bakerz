<h1>Trang dashboard</h1>

<div
    class="collapse navbar-collapse menu-ui-design"
    id="navbar-menu"
  >
    <ul
      class="nav navbar-nav navbar-right"
      data-in="fadeInDown"
      data-out="fadeOutUp"
      
    >
      
      <li class="scroll active" >
        <a href="{{ route('driver.home') }}">home</a>
      </li>

      @auth

        <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>                    
        </li>
      @endauth
      @guest

        <li class="nav-item">
        <form id="login-form" action="{{ route('login') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a class="nav-link" href="{{ route('login') }}">Login</a>                     
        </li>

      @endguest
    </ul>
    <!--/.nav -->
  </div>