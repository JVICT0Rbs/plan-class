@extends('layout')
@section('Title', 'DashBoard')

@section('content')


   <div class="col-8 m_auto">

    <form name="formCad" id="formCad" method="post" action="/books/create">
      @csrf

      <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título:">
      <input type="text" class="form-control" name="subtitulo" id="subtitulo" placeholder="Subtitulo:">
      <input type="text" class="form-control" name="autor" id="autor" placeholder="Autor:">
      <input type="text" class="form-control" name="edição" id="edicao" placeholder="Edição:">
      <input type="text" class="form-control" name="editora" id="editora" placeholder="Editora:">
      <input type="number" class="form-control" name="ano_da_publicação" id="ano_da_publicação" placeholder="Ano de Publicação:">
      
      <input type="submit" class="btn btn-primary" value="Cadastrar">


    </form>


  </div>
@endsection
