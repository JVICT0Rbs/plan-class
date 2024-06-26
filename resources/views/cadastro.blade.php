@extends('layout')
@section('Title', 'Cadastro')

@section('content')
<form method="POST" action="{{ route('register') }}">
        @csrf

<section class="container general">
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Nome</label>
        <input type="text" class="form-control" name ="name">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Endereço de Email</label>
      <input type="email" class="form-control" name ="email" placeholder="Seu email será guardado">

    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Senha</label>
      <input type="password" class="form-control" name="password">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Confirmar senha</label>
      <input type="password" class="form-control" name="password_confirmation">
    </div>
    
    <button type="submit" class="btn btn-primary">Cadastrar</button>

    <a href="/">Login</a>


  </section>
  </form>
@endsection
