<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diaristas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('home')}}">e-diaristas</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>
      </header>
    <h2>Pagina Inicial</h2>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @forelse($diaristas as $diarista)
                <th scope="row">{{$diarista->id}}</th>
                <td>{{$diarista->nome_completo}}</td>
                <td>{{$diarista->telefone}}</td>
                <td><a href="{{route('diarista.edit', $diarista)}}" class="btn btn-primary">Atualizar</a></td>
                <td><a href="{{route('diarista.destroy', $diarista)}}" class="btn btn-danger">Deletar</a></td>
              </tr>
              @empty
              <th scope="row"></th>
                <td>Nenhum registro cadastrado</td>
                <td></td>
                <td></td>
              </tr>
              @endforelse
            </tbody>
          </table>
          <a href="{{route('diarista.create')}}" class="btn btn-success"> Nova Diarista</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
