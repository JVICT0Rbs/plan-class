@extends('layout')
@section('Title', 'DashBoard')

@section('content')

  <div class="text-center">
      <a href="{{url('dashboard/create')}}">
        <button class="btn btn-success">Cadastrar</button>
      </a>
  </div>

    <div class="col-8 m_auto">

        <table class="table">

        <a href="/logout">Logout</a>

            <thead>
              <tr>
                
                <th scope="col">AUTOR</th>
                <th scope="col">TÍTULO</th>
                <th scope="col">SUBTITULO</th>
                <th scope="col">EDIÇÃO</th>
                <th scope="col">EDITORA</th>
                <th scope="col">PUBLIÇÃO</th>
                <th scope="col">AÇÕES</th>
              </tr>
            </thead>
            
            <tbody class="table-group-divider">
            @foreach ($books as $book)
            <tr>
                
                <td>{{$book->autor}}</td>
                <td>{{$book->titulo}}</td>
                <td>{{$book->subtitulo}}</td>
                <td>{{$book->edição}}</td>
                <td>{{$book->editora}}</td>
                <td>{{$book->ano_da_publicação}}</td>
                <td class="Bottons">
                  <a href="{{url("book/$book->id")}}">
                      <button class="btn btn-dark">Visualizar ID</button>
                  </a>

                  <a href="{{url("edit/$book->id")}}">
                      <button class="btn btn-primary">Editar</button>
                  </a>

                  <form action="{{route('delet.book', $book->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Deletar</button>
                  </form>
                </td>
              </tr>
              
            @endforeach


            </tbody>
          </table>

    

    </div>

   {{ $books->links() }}
@endsection
