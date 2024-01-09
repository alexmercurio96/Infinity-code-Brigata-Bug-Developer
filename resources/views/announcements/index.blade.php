<x-layout>


    <x-navbar></x-navbar>
    
    <x-masthead
    
    title='Tutti gli annunci'
    
    ></x-masthead>

   
    <div class="container">
        <div class="row">
          @foreach ($announcements as $announcement)
            <div class="col-12 col-md-6">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$announcement->title}}</h5>
                      <p class="card-text">{{$announcement->body}}</p>
                      <p class="card-text">{{$announcement->price}}</p>
                      <p class="card-text"></p>
                       <a href="{{route('announcements.show', compact('announcement'))}}" class="btn btn-primary">Visualizza</a> 
                       <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="my-2 border-top
                        pt-2 border-dark card-link shadow btn btn-success">Categoria: {{$announcement->category->name}}</a>
                      
                      <p class="acrd-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                    </div>
                  </div>
            </div>
            @endforeach
            {{$announcements->links}}
        </div>
      </div>
   
    
    <x-footer></x-footer>
    
    
    </x-layout>