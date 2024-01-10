<x-layout>
    
    
  <x-navbar></x-navbar>
  
  <x-masthead
  
  title="Compila il form per richiedere di diventare revisore"
  
  ></x-masthead>
  
{{--   @if (session('access.denied'))
  <div class="alert alert-danger text-center">
    {{ session('access.denied') }}<button type="button" class="btn-close mx-2" data-bs-dismiss="alert"
    aria-label="Close"></button>
  </div>
  @endif --}}
    <form class="p-4  my-5 rounded-4 text-center bg-dark text-white form-custom" wire:submit='announcementStore'> 
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" {{-- value="{{$user->name}}" --}} class="form-control @error('name') is-invalid @enderror "id="name" >
        </div>

      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="decimal" {{-- value="{{$user->email}}" --}} class="form-control @error('email') is-invalid @enderror" id="email">
      </div>
        
        <div class="mb-3">
            <label for="body" class="form-label">Perché vuoi diventare revisore?</label>
            <textarea type="text" value=""  class="form-control @error('body') is-invalid @enderror"  cols="30" rows="10"id="body"></textarea>
         
        
        <a href="{{route('emails.becomeRevisor')}}" class="btn btn-warning m-5">Diventa Revisore</a> 
      </form>
      
      
      

      
      
  </x-layout>