<x-layout>
    <x-navbar></x-navbar>
    <x-masthead
    title='Dettaglio Annuncio'
    
    ></x-masthead>
    
    @if($announcement)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6  d-flex flex-column justify-content-center align-items-center">
                <div id="showCrousel" class="carousel slide" data-ride="carousel">
                    
                  @if (count($announcement->images))
                  <div class="carousel-inner">
                    @foreach($announcement->images as $image)
                    <div class="carousel-item @if($loop->first) active @endif">
                     <img src="{{Storage::url($image->path)}}" class="img-fluid p-3 rounded" alt="...">
                    </div>
                    @endforeach
                  </div>
                  @else
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="https://picsum.photos/400/200" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="https://picsum.photos/400/200" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="https://picsum.photos/400/200" alt="Third slide">
                    </div>
                  </div>
                     @endif
                  <a class="carousel-control-prev carousel-custom" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                  </a>
                  <a class="carousel-control-next " href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only "></span>

                  </a>
                </div>
   
                  <div class="mt-5 ">
                  <h5 class="card-title display-4 mb-2 fw-bold "> {{$announcement->title}}</h5>
                  <p class="card-text fw-bold">Descrizione: {{$announcement->body}}</p>
                  <p class="card-text">Prezzo: {{$announcement->price}} €</p>
                  <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="my-2 border-top
                    pt-2 border-dark card-link shadow btn btn-success">Categoria: {{$announcement->category->name}}</a>
                    <p class="card-footer fw-light">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} - Autore : {{ $announcement->user->name ?? ''}}</p>
                  </div>
            </div>
        </div>
    </div>
    @endif
    


</x-layout>