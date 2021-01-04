<nav class="navbar navbar-expand-lg navbar-light menuBack menuShadow">
    <a class="navbar-brand" href="{{route('index')}}"><img src="{{ url('images/logo.png') }}" style="height:70px;"/></a>
    <h2>INTRANET</h2>
    <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Familles
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($familles as $famille)
                        <a class="dropdown-item" href="{{ route('familles.medicaments', [$famille->getKey()]) }}">{{$famille->libelle}}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('medicaments.create') }}">Ajouter Médicament</a>
            </li>
        </ul>
        @auth()
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
            </form>
        @endauth
    </div>
</nav>
