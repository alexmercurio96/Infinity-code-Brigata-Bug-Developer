<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">Infinity Code</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
      
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" data-bs-toggle="dropdown" aria-expanded="false" role="button">Categorie</a>
            
            <ul  class="dropdown-menu" aria-lbavelledby="catagriesDropdown">
              @foreach ($categories as $category)
              <li> <a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{($category->name)}}</a></li> 
            <li> <hr class="dropdown-divider"></li>
               @endforeach
            </ul>
          </li>
            
        
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Registrati</a>
          </li>
          @endguest
          @auth
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('announcements.create')}}">Nuovo Annuncio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="dropdown-item" type="submit">Logout</button>
            </form>
            </ul>
          </li>
          @endauth
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="ricerca annuncio" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Cerca</button>
        </form>
      </div>
    </div>
  </nav>