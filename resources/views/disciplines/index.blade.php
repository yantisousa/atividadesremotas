    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <style>
        .table {
            width: 600px !important;
            position: relative;
            left: 30%;
        }

        a {
            color: white;
            text-decoration: none;
        }

        .empty-alunos {
            position: relative;
            top: 130px;
        }

        .empty-btn-alunos {
            position: relative;
            top: 130px;

        }

        .empty-btn-alunos a {
            color: white;
            text-decoration: none;
        }
    </style>

    <body>
        <button class="btn btn-primary criar-disciplines"><a href="{{ route('disciplines.create') }}">Criar
                Disciplinas</a></button>
        <h1 style="text-align: center;">Disciplinas</h1>
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                    <table class="table" sty>
                        <thead>
                            <tr>
                                <th scope="col-3">Nome</th>
                                <th scope="col-3" colspan="3">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($disciplines as $disciplina)
                                <tr>
                                    <td>{{ $disciplina->name }}</td>
                                    <td><button class="btn btn-warning"><a href="{{route('atividades.index', $disciplina->id)}}">Atividades</a></button></td>
                                    <td><button  class="btn btn-info btn-edit"> <a href="{{route('disciplines.edit', $disciplina->id)}}">Editar</a></button></td>
                                    <td><button class="btn btn-danger" onclick="excluir({{$disciplina->id}})">Excluir </button></td>
                                </tr>
                            @empty
                                <h6>Sem disciplinas existentes.</h6>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <script src="/assets/js/jquery.js"></script>
        <script src="/assets/js/index.js"></script>
    </body>

    </html>
