<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}"><i class="bi bi-x-diamond-fill"></i> Torneos de tenis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create-tournament', ['gender' => 'female']) }}">Crear torneo femenino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create-tournament', ['gender' => 'male']) }}">Crear torneo masculino</a>
                </li>
            </ul>
        </div>
    </div>
</nav>