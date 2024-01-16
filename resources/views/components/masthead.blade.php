<div class="container fluid my-5" data-bs-theme="dark">
    <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
      <video id="video-background" preload muted autoplay loop>
        <source src="{{Storage::url('video.mp4')}}" type="">
      </video>
      <h1 class="text-body-emphasis fw-bold display-2">{{$title}}</h1>
      <p class="col-lg-6 mx-auto mb-4 fw-bold my-4">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum, voluptatum quisquam id modi nemo laudantium exercitationem illo animi itaque fuga quo nostrum ullam eveniet, ipsa repellendus aut voluptatem consequatur quaerat.
      </p>
      <button class="btn-custom " type="button">
        <a class="nav-link" href="{{route('announcements.create')}}">{{__('ui.create')}}</a>
      </button>
    </div>
  </div>


