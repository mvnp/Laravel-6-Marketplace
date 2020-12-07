@auth
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 25px">
    <a class="navbar-brand" href="{{ route('home') }}">Marketplace L6</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item @if(request()->is('home')) active @endif">
                <a class="nav-link" href="{{ route('home') }}">Início</a>
            </li>
            <li class="nav-item @if(request()->is('admin/stores')) active @endif">
                <a class="nav-link" href="{{ route('admin.stores.index') }}">Lojas</a>
            </li>
            <li class="nav-item @if(request()->is('admin/products')) active @endif">
                <a class="nav-link" href="{{ route('admin.products.index') }}">Produtos</a>
            </li>
            <li class="nav-item @if(request()->is('admin/products')) active @endif">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.querySelector('form.logout').submit();">Sair</a>
                <form action="{{ route('logout') }}" class="logout" method="post" style="display:none">
                    @csrf
                </form>
            </li>
        </ul>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="..." aria-label="Search" />
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>
@endauth