<nav class="navbar navbar-expand-lg navbar-light menuBack menuShadow">
    <a class="navbar-brand" href="{{route('index')}}"><img src="{{ url('images/logo.png') }}" style="height:70px;"/></a>
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
    </div>
</nav>
