<div class="container fluid my-5">
    <div class="position-relative p-5 text-center  rounded rounded-4  header-custom">
      <video id="video-background" preload muted autoplay loop>
        <source src="{{Storage::url('video.mp4')}}" type="">
      </video>
      <h1 class="text-body-light mb-5 fw-bold display-4">{{$title}}</h1>
      <p class="col-lg-6 mx-auto mb-4 fw-bold my-4">
        
      </p>
      <button class="btn-custom " type="button">
        <a class="nav-link" href="{{route('announcements.create')}}">{{__('ui.create')}}</a>
      </button>
    </div>
  </div>


