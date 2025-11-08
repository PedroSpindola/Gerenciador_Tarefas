<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">GTS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <a href="{{ route('login.index') }}" class="btn btn-outline-light" type="submit">Entrar</a>
        </div>
    </div>
</nav>