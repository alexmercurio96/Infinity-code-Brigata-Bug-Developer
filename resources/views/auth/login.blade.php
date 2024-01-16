<x-layout>


    <x-navbar></x-navbar>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">E-mail </label>
                      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">{{__('ui.password')}}</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="remember" class="form-check-label">{{__('ui.remember')}}</label>
                        <input type="checkbox" name="remember" class="form-check-label" id="password">
                      </div>
                    <button type="submit" class="btn btn-primary">{{__('ui.login')}}</button>
                  </form>
            </div>
        </div>
    </div>
    

    
    <x-footer></x-footer>

</x-layout>    