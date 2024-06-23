@extends('layout')
@section('Title', 'DashBoard')

@section('content')


   <div class="col-8 m_auto">

  @if (isset($book))
      <form method="POST" action="{{ url("books/$book->id")}}" >
          @method('PUT')
  @else
      <form method="POST" action="{{ route('register.books') }}">
  @endif

  @csrf
    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título:" value="{{ $book->titulo }}">
    <input type="text" class="form-control" name="subtitulo" id="subtitulo" placeholder="Subtitulo:" value="{{ $book->subtitulo }}">
    <input type="text" class="form-control" name="autor" id="autor" placeholder="Autor:" value="{{ $book->autor }}">
    <input type="text" class="form-control" name="edição" id="edicao" placeholder="Edição:" value="{{ $book->edição }}">
    <input type="text" class="form-control" name="editora" id="editora" placeholder="Editora:" value="{{ $book->editora }}">
    <input type="number" class="form-control" name="ano_da_publicação" id="ano_da_publicação" placeholder="Ano de Publicação:" value="{{ $book->ano_da_publicação }}">      
      <input type="submit" class="btn btn-primary" value="Editar">


    </form>


  </div>
@endsection
