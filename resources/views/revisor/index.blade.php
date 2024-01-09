<x-layout>
    
    
    <x-navbar></x-navbar>
    
    <x-masthead
    
    title="{{$announcement_to_check ? 'Ecco l annuncio da revisionare' : 'non ci sono annunci da revisionare'}}"
    
    ></x-masthead>
    
    @if($announcement_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="showCrousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 " src="https://picsum.photos/201" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 " src="https://picsum.photos/202" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        
                    </a>
                </div>
                <h5 class="card-title">Titolo: {{$announcement_to_check->title}}</h5>
                <p class="card-text">Descrizione: {{$announcement_to_check->body}}</p>
                <p class="card-text">Prezzo: {{$announcement_to_check->price}}</p>
                <a href="{{route('categoryShow',['category'=>$announcement_to_check->category])}}" class="my-2 border-top
                    pt-2 border-dark card-link shadow btn btn-success">Categoria: {{$announcement_to_check->category->name}}</a>
                    <p class="card-footer">Pubblico il: {{$announcement_to_check->created_at->format('d/m/Y')}} - Autore {{ $announcement_to_check->user->name ?? ''}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.accept_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-succes shadow">Accetta</button>
                </form>
            </div>
            <div class="col-12 col-md-6 text-end">
                <form action="{{route('revisor.reject_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-succes shadow">Rifiuta</button>
                </form>
            </div>
        </div>
        @endif
        
        
        
        <x-footer></x-footer>
        
        
    </x-layout>