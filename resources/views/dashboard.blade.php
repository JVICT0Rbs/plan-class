@extends('layout')
@section('Title', 'DashBoard')

@section('content')

  <div class="text-center">
      <a href="">
        <button class="btn btn-success">Cadastrar</button>
      </a>
  </div>

    <div class="col-8 m_auto">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">AUTOR</th>
                <th scope="col">TÍTULO</th>
                <th scope="col">SUBTITULO</th>
                <th scope="col">EDIÇÃO</th>
                <th scope="col">EDITORA</th>
                <th scope="col">PUBLIÇÃO</th>
                <th scope="col">AÇÕES</th>
              </tr>
            </thead>

            @foreach ($books as $books)
            <tr>
                <th scope="row">{{$books->id}}</th>
                <td>{{$books->autor}}</td>
                <td>{{$books->titulo}}</td>
                <td>{{$books->subtitulo}}</td>
                <td>{{$books->edição}}</td>
                <td>{{$books->editora}}</td>
                <td>{{$books->ano_da_publicação}}</td>
                <td>
                  <a href="{{url("book/$books->id")}}">
                      <button class="btn btn-dark">Visualizar</button>
                  </a>

                  <a href="">
                      <button class="btn btn-primary">Editar</button>
                  </a>

                  <a href="">
                      <button class="btn btn-danger">Deletar</button>
                  </a>

                </td>
              </tr>
            @endforeach

            <tbody class="table-group-divider">

            </tbody>
          </table>
    </div>
@endsection
