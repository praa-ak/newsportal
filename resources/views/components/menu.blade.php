<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          @foreach ($menu as $value )
          <li class="nav-item">
            <a class="nav-link" href="/{{$value['slug']}}">{{$value['eng_name']}}</a>
          </li>

          @endforeach
          {{-- <button type="submit">
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Log In</a>
        </button>
        <li class="nav-item">
        <div class="btn border-t-cyan-400">Log In</div>



          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Register</a>
          </li> --}}

        </ul>

      </div>
      <p class="d-inline-flex gap-1">
        <a  href="/login" >
          Login
        </a>
        <a href="/register">
          Register
        </a>
      </p>
      {{-- <div class="collapse" id="collapseExample">
        <div class="card card-body">
          Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
        </div> --}}
      </div>
    </div>
  </nav>
