
@extends('layouts.auth')
@section('content')
<h3 class="text-center mb-4">Cadastrar Novo Usuário</h3>
<x-alert />
<form action="{{ route('login.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="mb-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="name" value="{{ old('name') }}" name="name" placeholder="name">
            <label for="name">Nome</label>
        </div>    
    </div>
    <div class="mb-3">
        <div class="form-floating">
            <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" placeholder="email">
            <label for="email">Email</label>
        </div>    
    </div>

    <div class="mb-3">
        <div class="input-group">
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="password">
                <label for="password">Senha</label>
            </div>
            <span class="input-group-text" role="button" onclick="togglePassword('password', this)"><i class="bi bi-eye"></i></span>
        </div>
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
    </div>
    <div class="text-center">
        <a href="{{ route('login') }}" class="text-decoration-none">Login</a>
    </div>
</form>
@endsection
