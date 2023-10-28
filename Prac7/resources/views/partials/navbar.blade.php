<nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link {{ request()->routeIs('apodoInicio')? 'text-warning':'' }}" aria-current="page" href="{{ route('apodoInicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ request()->routeIs('apodoFormulario')? 'text-warning':'' }}" aria-current="page" href="{{ route('apodoFormulario') }}">Registro</a>
                </li>
              </ul>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>