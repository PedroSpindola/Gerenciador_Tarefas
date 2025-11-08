@extends('layouts.main')
@section('content')
    <form class="p-4" method="post" action="{{ route('login.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleDropdownFormEmail2" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="exampleDropdownFormEmail2" placeholder="email@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleDropdownFormPassword2" class="form-label">Senha</label>
            <input type="password" class="form-control" name="password" id="exampleDropdownFormPassword2" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
@endsection