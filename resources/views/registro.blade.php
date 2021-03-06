@extends ('layout')

@section ('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between">
  <div class="d-flex align-items-center">
    <img src="https://i.ibb.co/XS0bQ31/pinguino.png" alt="penguin.png" width="8%" class="mr-2">
    <a class="navbar-brand" href="/start">Notes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
  <div class="d-flex align-items-center">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Inicia sesión <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ayuda</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endsection ('navbar')

@section ('content')
<div class="row">
  <div class="col-4">

  </div>
  <div class=" col-md-4 p-4">
    <div class="card">
      <div class="card-header text-center font-weight-bold">
        <h4>Regístrate</h4>
      </div>
      <div class="card-body  align-items-center">
        <form method="post" action="/registro">
          @csrf
          <div class="form-group">
            <label for="exampleInputName1">Nombre</label>
            <input type="name" class="form-control" id="exampleInputName1" name="name" aria-describedby="nameHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Correo electrónico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">nombre@ejemplo.com</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
          </div>
          <div class=" d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Entrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-4">

  </div>

</div>
@endsection ('content')
