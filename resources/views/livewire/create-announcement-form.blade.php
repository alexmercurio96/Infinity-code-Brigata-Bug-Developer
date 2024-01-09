<div>
  @if ($errors->any())
  <div class="alert bg-danger" data-bs-dismiss="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
  </div>
  @endif
  @if (session('message'))
  <div class="alert alert-success">
    {{ session('message') }}<button type="button" class="btn-close mx-2" data-bs-dismiss="alert"
    aria-label="Close"></button>
  </div>
  @endif
    <form class="p-4  my-5 rounded-4 text-center bg-dark text-white form-custom" wire:submit='announcementStore'> 
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" wire:model.blur='title' class="form-control @error('title') is-invalid @enderror "id="title" >
        </div>
        
        <div class="mb-3">
          <select  class="form-select" wire:model.defer="category" aria-label="Default select example">
            <option selected>Seleziona categoria</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
        </div>
        
        <div class="mb-3">
            <label for="body" class="form-label">Testo</label>
            <textarea type="text"  wire:model.blur='body' class="form-control @error('body') is-invalid @enderror"   cols="30" rows="10"id="body"></textarea>

        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="decimal"  wire:model.live='price' class="form-control @error('price') is-invalid @enderror" id="price">
        </div>
         
        
        <button type="submit" class="btn btn-primary">Inserisci Annuncio</button>
      </form>
    
</div>
