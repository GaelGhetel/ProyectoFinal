<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary sticky-topnavbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
          <label class="navbar-brand">No Info Sky</label>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('ProductosIndex')}}">Productos</a>
              </li>

              <li class="nav-item">
                <form action="{{route('LogoutStore')}}" method="post">
                @csrf
                  <button type="submit" class="btn btn-primary">Cerrar Sesion</button>
                </form>
              </li>
              <li class="nav-item">
                <span class="nav-link active">Usuario: {{auth()->user()->username}}</span>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  