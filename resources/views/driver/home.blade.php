<h1 style="color: blue;">trang home</h1>
<a href="{{route('auth.changepass')}}">Đổi Mật Khẩu</a><br>
<a href="{{ route('admin.dashboard') }}">dashboard</a><br>
@auth
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
      </a>                    
@endauth
@guest
  <form id="login-form" action="{{ route('login') }}" method="POST" style="display: none;">
          @csrf
      </form>
      <a class="nav-link" href="{{ route('login') }}">Login</a>                     
@endguest
