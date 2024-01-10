<x-layout>
    <x-navbar></x-navbar>

    <x-masthead title='Esplora la Categoria'> {{$category->name}}
    </x-masthead>

    <div class="container">
        <div class="row">
          @forelse ($category->announcements as $announcement)
            <div class="col-12 col-md-6">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$announcement->title}}</h5>
                      <p class="card-text">{{$announcement->body}}</p>
                      
                      <p class="card-text"></p>
                      <a href="#" class="btn btn-custom2">Visualizza</a>
                      <a href="" class="btn my-2  card-link shadow btn btn-custom2">Catagoria:{{$announcement->category->name}}</a>
                      <p class="acrd-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}
                     - Autore: {{$announcement->user->name ?? ''}}
                    </p>
                    </div>
                  </div>
            </div>
            @empty
            <div class="col-12">
                <p class=""> Non sono presenti annunci per questa categoria</p>
                <p class=""> Pubblica uno: <a href="{{route('announcements.create')}}" class="btn btn-success shadow">Nuovo Annuncio</a></p>
            </div>
        

            @endforelse
        </div>
    </div>
    


</x-layout>