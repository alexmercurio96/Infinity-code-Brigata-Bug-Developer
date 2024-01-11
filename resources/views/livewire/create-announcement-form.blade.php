<div>
    @if ($errors->any())
        <div class="alert bg-danger" data-bs-dismiss="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="p-4  my-5 rounded-4 text-center bg-dark text-white form-custom" wire:submit="store">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" wire:model.blur='title'
                            class="form-control @error('title') is-invalid @enderror "id="title">
                    </div>
            
                    <div class="mb-3">
                        <select class="form-select" wire:model.defer="category" aria-label="Default select example">
                            <option selected>Seleziona categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
            
                    <div class="mb-3">
                        <label for="body" class="form-label">Testo</label>
                        <textarea type="text" wire:model.blur='body' class="form-control @error('body') is-invalid @enderror" cols="30"
                            rows="10"id="body"></textarea>
            
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="decimal" wire:model.live='price' class="form-control @error('price') is-invalid @enderror"
                            id="price">
                    </div>
            
                    <div class="class mb-3">
                        <input wire:model="temporary_images" type="file" name="images" multiple
                            class="form-control shadow @error('temporary_image')is-invalid @enderror" placeholder="Img" />
                        @error('temporary_images.*')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    @if (!empty($images))
                        <div class="class row">
                            <div class="class col-12">
            
                                <p>Photo preview:</p>
                                <div class="row border-4 border-info rounded py-4">
                                    @foreach ($images as $key => $image)
                                        <div class="col my-3">
                                            <div class="img-preview mx-auto shadow rounded"
                                                style="background-image: url({{ $image->temporaryUrl() }});">
                                                <button type="button"
                                                    class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                                    wire:click="removeImage({{ $key }})">Cancella</button>
                                            </div>
                                    @endforeach
            
                                </div>
            
                            </div>
            
            
                        </div>
                    @endif
            
                    <button type="submit" class="btn btn-primary">Inserisci Annuncio</button>
                </form>
            </div>
        </div>
    </div>
   

</div>
