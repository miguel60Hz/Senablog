<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white; border-bottom: 4px solid #28a745;">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home.index') }}">
            <span class="logo">AdminSena</span>
        </a>
        <!-- Botón de menú -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menú de navegación -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.mision_vision') }}">Mision y vision</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts') }}">Publicaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.contact') }}">Contactanos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>