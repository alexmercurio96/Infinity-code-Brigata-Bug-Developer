

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
                  {{-- <a href="#" class="btn btn-primary">Visualizza</a> --}}
                  <a href="" class="btn my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Catagoria:{{$announcement->category->name}}</a>
                  <p class="acrd-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
  </div>