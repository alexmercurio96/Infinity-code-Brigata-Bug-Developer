<x-layout>
    <x-navbar></x-navbar>
    <x-masthead
    title="{{__('ui.detail')}}"
    
    ></x-masthead>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
                        <img class="d-block w-100" src="https://picsum.photos/201" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://picsum.photos/202" alt="Third slide">
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
                  <h5 class="card-title">{{__('ui.title')}}: {{$announcement->title}}</h5>
                  <p class="card-text">{{__('ui.description')}}: {{$announcement->body}}</p>
                  <p class="card-text">{{__('ui.price')}}: {{$announcement->price}}</p>
                  <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="my-2 border-top
                    pt-2 border-dark card-link shadow btn btn-success">{{__('ui.category')}}: {{$announcement->category->name}}</a>
                    <p class="card-footer">{{__('ui.published')}} {{$announcement->created_at->format('d/m/Y')}} - {{__('ui.author')}} {{ $announcement->user->name ?? ''}}</p>
                  
            </div>
        </div>
    </div>
    


</x-layout>