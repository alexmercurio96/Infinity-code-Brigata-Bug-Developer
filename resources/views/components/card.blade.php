

  <div class="container">
    <div class="row justify-content-center">
      @foreach ($announcements as $announcement)
        <div class="col-12 col-md-6 my-4 d-flex justify-content-center">
            <div class="card p-2 card-custom text-white" data-bs-theme="dark" style="width: 18rem;">
                <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path):Storage::url('images/default.jpg')}} "card-img-top  alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$announcement->title}}</h5>
                  <p class="card-text">{{$announcement->body}}</p>
                  <p class="card-text">{{$announcement->price}}</p>
                  <p class="card-text"></p>
                   <a href="{{route('announcements.show', compact('announcement'))}}" class="btn btn-primary">Visualizza</a> 
                  <a href="" class="btn my-2 border-top pt-2 border-dark card-link shadow btn btn-light">Categoria:{{$announcement->category->name}}</a>
                  <p class="acrd-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                </div>
              </div>
        </div>
        @endforeach
        
    </div>
  </div>