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
    <button class="btn btn-primary criar-disciplines"><a href="{{ route('atividades.create', $disciplinasID->id) }}">Criar
            atividades</a></button>
    <h1 style="text-align: center;">Atividades de {{ $disciplinasID->name }}</h1>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <table class="table" sty>
                    <thead>
                        <tr>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($atividades as $atividade)
                            <tr>
                                <td>
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('storage/' . $atividade->filepath) }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">{{ $atividade->name }}</h5>
                                          <p class="card-text">{{ $atividade->description }}</p>
                                          <a href="#" class="btn btn-primary">Ver trabalho</a>
                                        </div>
                                      </div>
                                </td>
                                {{-- <td>{{ $atividade->name }}</td> --}}
                                {{-- <td><img style="width:300px;" src="{{ asset('storage/' . $atividade->filepath) }}" alt=""> </td> --}}
                                {{-- <td><button class="btn btn-warning"><a href="{{route('atividades.create', $atividade->id)}}">Atividades</a></button></td>
                                <td><button  class="btn btn-info btn-edit"> <a href="{{route('disciplines.edit', $atividade->id)}}">Editar</a></button></td>
                                <td><button class="btn btn-danger" onclick="excluir({{$atividade->id}})">Excluir </button></td> --}}
                            </tr>
                        @empty
                            <h6>Sem atividades existentes.</h6>
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
