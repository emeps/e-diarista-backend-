<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Diaristas</title>
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
    <h2>Editar Diarista</h2>
    <div class="container">
        <form action="{{route('diarista.update',$diarista)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="nome_completo" class="form-label">Nome</label>
              <input value= "{{$diarista->nome_completo}}" type="text" class="form-control" id="nome_completo" name="nome_completo" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Insira o nome completo.</div>
            </div>
            <div class="mb-3">
              <label for="cpf" class="form-label">CPF</label>
              <input value= "{{$diarista->cpf}}"type="text" class="form-control" id="cpf" name="cpf" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="telefone" class="form-label">Telefone</label>
              <input value= "{{$diarista->telefone}}"type="text" class="form-control" name="telefone" id="telefone" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="endereco_completo" class="form-label">Endereço</label>
              <input value= "{{$diarista->endereco_completo}}"type="text" class="form-control" name="endereco_completo" id="endereco_completo" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="cep" class="form-label">CEP</label>
              <input value= "{{$diarista->cep}}"type="number" class="form-control" name="cep" id="cep" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="ibge" class="form-label">IBGE</label>
              <input value= "{{$diarista->ibge}}"type="text" class="form-control" name="ibge" id="ibge" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="estado" class="form-label">Estado</label>
              <input value= "{{$diarista->estado}}"type="text" class="form-control" name="estado" id="estado" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input value= "{{$diarista->email}}"type="email" class="form-control" name="email" id="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#cep').mask('00000-000');
            $('#telefone').mask('(00) 0000-0000');
            $('#cpf').mask('000.000.000-00', {reverse: true});
            });
</body>
</html>
