<x-layout>


    <x-navbar></x-navbar>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">E-mail</label>
                      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">{{__('ui.name')}}</label>
                      <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">{{__('ui.password')}}</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                      <label for="password_confirmation" class="form-label">{{__('ui.confirm')}}</label>
                      <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    <button type="submit" class=" btn btn-primary ">{{__('ui.sign')}}</button>
                  </form>
            </div>
        </div>
    </div>
    

    
    <x-footer></x-footer>
    
    
</x-layout>