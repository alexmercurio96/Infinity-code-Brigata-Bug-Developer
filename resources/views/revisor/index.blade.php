<x-layout>
  
  
  <x-navbar></x-navbar>
  
  <x-masthead
  
  title="{{$announcement_to_check ? 'Ecco l annuncio da revisionare' : 'non ci sono annunci da revisionare'}}"
  
  ></x-masthead>
  

  
  
  @if($announcement_to_check)
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
              @if (count($announcement_to_check->images))
                  @foreach($announcement_to_check->images as $image)
                      <div class="carousel-item @if($loop->first) active @endif">
                        <img src="{{ Storage::url($image->path) }}" class="d-block w-100 img-carousel" alt="...">
                         
                      </div>
                  @endforeach
              @else
                  <div class="carousel-item active">
                      <img class="d-block w-100 img-carousel" src="https://picsum.photos/400/200" alt="Placeholder Image">
                  </div>
              @endif
          </div>
      
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      
          
      </div>
      </div>
      <div class="col-12 col-md-6 d-flex  flex-column justify-content-center align-items-center">
    
          <h5 class="card-title display-4 mb-2 fw-bold">{{ $announcement_to_check->title }}</h5>
          <p class="card-text fw-bold">Descrizione: {{ $announcement_to_check->body }}</p>
          <p class="card-text">Prezzo: {{ $announcement_to_check->price }} €</p>
          <form action="{{route('revisor.accept_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-success btn-lg shadow my-5">Accetta</button>
        </form>
    
   
        <form action="{{route('revisor.reject_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-danger  btn-lg shadow">Rifiuta</button>
        </form>

      </div>
    </div>
  </div>
 
  @endif
  
  
  


<x-footer></x-footer>


</x-layout>