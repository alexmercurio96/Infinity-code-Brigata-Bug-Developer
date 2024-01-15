<x-layout>
    
    
  <x-navbar></x-navbar>
  
  <x-masthead
  
  title="Compila il form per richiedere di diventare revisore"
  
  ></x-masthead>
  
  @if (session('message'))
  <div class="alert alert-success text-center">
    {{ session('message') }}<button type="button" class="btn-close mx-2" data-bs-dismiss="alert"
    aria-label="Close"></button>
  </div>
  @endif
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
    <form class="p-4  my-5 rounded-4 text-center bg-dark text-white form-custom" method="POST" action="{{route('emails.becomeRevisor')}}">
      @csrf 
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" value="{{Auth::user()->name}}" class="form-control @error('name') is-invalid @enderror "id="name" >
        </div>

      <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="decimal" value="{{Auth::user()->email}}" class="form-control @error('email') is-invalid @enderror" id="email">
      </div>
        
        <div class="mb-3">
            <label for="body" class="form-label">Perché vuoi diventare revisore?</label>
            <textarea type="text" value="" name="motivo"  class="form-control @error('body') is-invalid @enderror"  cols="30" rows="10"id="body"></textarea>
    </div>
         
        
        <button type="submit" class="btn btn-primary m-5">Diventa Revisore</button> 
      </form>
    </div>
  </div>
</div>
      
      
      

      
      
  </x-layout>