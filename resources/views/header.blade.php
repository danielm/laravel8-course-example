<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Laravel Press</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('posts') }}">Home</a>
      </li>
    </ul>

    <div class="navbar-nav">
      @guest
      <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
      @else
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hi, <strong>{{ Auth::user()->name }}</strong>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="{{ route('posts.index') }}">Manage Posts</a>
          <div class="dropdown-divider"></div>
          
          <a class="dropdown-item" href="#" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">Logout</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>

        </div>
      </div>
      @endguest
    </div>

  </div>
</nav>