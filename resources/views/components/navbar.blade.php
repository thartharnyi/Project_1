<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Home</a>
      <div class="d-flex">

          <form action="/logout" method="post">@csrf

            @if (auth()->check())
              <button class="btn btn-danger">Logout</button>
            @else
              <a href="/login" class="nav-link">Login</a>
              <a href="/register" class="nav-link">Register</a>
            @endif
           
          </form>
          
      </div>
    </div>
  </nav>