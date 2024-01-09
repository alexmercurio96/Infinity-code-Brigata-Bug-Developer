<div class="container fluid my-5">
    <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
      <video id="video-background" preload muted autoplay loop>
        <source src="{{Storage::url('video.mov')}}" type="">
      </video>
      <h1 class="text-body-emphasis">{{$title}}</h1>
      <p class="col-lg-6 mx-auto mb-4">
        This faded back jumbotron is useful for placeholder content. It's also a great way to add a bit of context to a page or section when no content is available and to encourage visitors to take a specific action.
      </p>
      <button class="btn-custom " type="button">
        <a class="nav-link" href="{{route('announcements.create')}}">Inserisci Annuncio</a>
      </button>
    </div>
  </div>


