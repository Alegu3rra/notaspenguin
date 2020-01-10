@extends ('layout')
@section ('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between">
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

@section ('content')
<div class="container-fluid">

  <div class="row mt-4">
    <div class="col-2">
      <div class="card">
        <div class="card-header">
          Nota
        </div>
        <div class="card-body">
          <form method="POST" action="/start">
            @csrf
            <div class="form-group">
              <label for="titulo">titulo</label>
              <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Escribe aqui">
            </div>
            <div class="form-group">
              <label for="cuerpo">Nota</label>
              <input type="text" class="form-control" name="cuerpo" id="cuerpo" placeholder="Escribe aqui">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    @foreach ($notas as $nota)
    <div class="col-2">
      <div class="card">
        <div class="card-header">
          Nota
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$nota->titulo}}</h5>
          <p class="card-text">{{$nota->cuerpo}}</p>
          <!-- Button trigger modal -->
          <button action="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$nota->id}}">
            Editar
          </button>
          <!-- Button trigger modal -->
          <button action="" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModa2{{$nota->id}}">
            Borrar
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal{{$nota->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Editar "{{$nota->titulo}}"</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="titulo">titulo</label>
                      <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Escribe aqui" value="{{$nota->titulo}}">
                    </div>
                    <div class="form-group">
                      <label for="cuerpo">Nota</label>
                      <input type="text" class="form-control mb-3" name="cuerpo" id="cuerpo" placeholder="Escribe aqui" value="{{$nota->cuerpo}}">
                    </div>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Editar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModa2{{$nota->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro de borrar esta nota?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Borrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endforeach

  </div>
</div>
@endsection('content')
