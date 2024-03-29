<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
          <a href="{{route('blog.index')}}" class="navbar-brand">Laravel </a>
          <ul class="nav navbar-nav">
            <li><a href="#">Blog</a></li>
            <li><a href="{{route('other.about')}}">About</a></li>
              @if(!Auth::check())
              <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
              <li> <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
              @else
                <li><a href="{{route('admin.index')}}" >Posts</a></li>
                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>

                </li>
               @endif
          </ul>
        </div>
    </div>
</nav>
