@extends ('layout')

@section ('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
  <div class="d-flex align-items-center">
    <img src="https://i.ibb.co/XS0bQ31/pinguino.png" alt="penguin.png" width="8%" class="mr-2">
    <a class="navbar-brand" href="#">Notes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
  <div class="d-flex align-items-center">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endsection ('navbar')
