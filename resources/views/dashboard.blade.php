@extends('layout')
@section('Title', 'DashBoard')

@section('content')


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
              </tr>
            @endforeach

            <tbody class="table-group-divider">

            </tbody>
          </table>
    </div>
@endsection
