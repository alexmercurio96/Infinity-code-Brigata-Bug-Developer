<x-layout>
    
    
    <x-navbar></x-navbar>
    
    <x-masthead
    
    title="{{$announcement_to_check ? __('ui.toReview') : __('ui.noNew') }}"
    
    ></x-masthead>
    
    @if($announcement_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="showCrousel" class="carousel slide" data-ride="carousel">
                  @if (count($announcement_to_check->images))
                  <div class="carousel-inner">
                    @foreach($announcement_to_check->images as $image)
                    <div class="carousel-item @if($loop->first) active @endif">
                     <img src="{{Storage::url($image->path)}}" class="img-fluid p-3 rounded" alt="...">
                    </div>
                    @endforeach
                  </div>
                  @else
                   
                    <div class="carousel-inner">
                    
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://picsum.photos/200" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 " src="https://picsum.photos/201" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 " src="https://picsum.photos/202" alt="Third slide">
                        </div>
                    </div>
                    @endif
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                        
                    </a>
                </div>
                <h5 class="card-title">{{__('ui.title')}}: {{$announcement_to_check->title}}</h5>
                <p class="card-text">{{__('ui.description')}}: {{$announcement_to_check->body}}</p>
                <p class="card-text">{{__('ui.price')}}: {{$announcement_to_check->price}}</p>
                <a href="{{route('categoryShow',['category'=>$announcement_to_check->category])}}" class="my-2 border-top
                    pt-2 border-dark card-link shadow btn btn-success">{{__('ui.category')}}: {{$announcement_to_check->category->name}}</a>
                    <p class="card-footer">{{__('ui.published')}}: {{$announcement_to_check->created_at->format('d/m/Y')}} - {{__('ui.author')}} {{ $announcement_to_check->user->name ?? ''}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.accept_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-succes shadow">{{__('ui.accept')}}</button>
                </form>
            </div>
            <div class="col-12 col-md-6 text-end">
                <form action="{{route('revisor.reject_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-succes shadow">{{__('ui.refuse')}}</button>
                </form>
            </div>
        </div>
    </div>

        @endif
        
        
        
        <x-footer></x-footer>
        
        
    </x-layout>