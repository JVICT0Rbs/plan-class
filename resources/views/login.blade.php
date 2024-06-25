@extends('layout')
@section('Title', 'Login')

@section('content',)


<form method="POST" action="/">
    @csrf


<section class="container general">

<div class="mb-3">
    <label for="exampleInputName" class="form-label">Nome</label>
    <input type="text" class="form-control" name ="name" placeholder="Adicione seu nome de usuário">
    <div id="emailHelp" class="form-text"></div>
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Endereço de Email</label>
  <input type="email" class="form-control" name ="email" placeholder="Seu email estará seguro">

</div>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Senha</label>
  <input type="password" class="form-control" name="password" placeholder="Mínimo 8 dígitos">
</div>


<button type="submit" class="btn btn-primary">Logar</button>
<a href="/register">Cadastrar</a>




    @if ($errors->all())
        @foreach ($errors->all() as $erros)
            <p>{{ $erros }}</p>
        @endforeach
    @endif

</section>
</form>


@endsection
