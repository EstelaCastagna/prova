<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Screen</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Secretaria Escolar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="logout()">Logout <i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Cadastro de Turma</h2>
                <form>
                    <div class="form-group">
                        <label for="codigoTurma">Código da Turma</label>
                        <input type="text" class="form-control" id="codigoTurma" placeholder="Código da Turma">
                    </div>
                    <div class="form-group">
                        <label for="nomeCurso">Nome do Curso</label>
                        <input type="text" class="form-control" id="nomeCurso" placeholder="Nome do Curso">
                    </div>
                    <div class="form-group">
                        <label for="sala">Sala</label>
                        <input type="text" class="form-control" id="sala" placeholder="Sala">
                    </div>
                    <div class="form-group">
                        <label for="horario">Horário</label>
                        <input type="text" class="form-control" id="horario" placeholder="Horário">
                    </div>
                    <div class="form-group">
                        <label for="uc">UC (Unidade Curricular)</label>
                        <select multiple class="form-control" id="uc">
                            <option value="">Selecione uma UC</option>
                            <!-- Add options for each UC -->
                             
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="{{route('inicio')}}" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
  </html>