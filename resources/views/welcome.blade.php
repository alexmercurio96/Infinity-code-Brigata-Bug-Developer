<x-layout>


<x-navbar></x-navbar>

@if (session('access.denied'))
    <div class="alert alert-danger text-center">
      {{ session('access.denied') }}<button type="button" class="btn-close mx-2" data-bs-dismiss="alert"
      aria-label="Close"></button>
    </div>
    @endif

    @if (session('messagge'))
    <div class="alert alert-success text-center">
      {{ session('messagge') }}<button type="button" class="btn-close mx-2" data-bs-dismiss="alert"
      aria-label="Close"></button>
    </div>
    @endif

<x-masthead

title='WELCOME TO INFINITY CODE'

></x-masthead>

<x-card 

:$announcements

></x-card>

<x-footer></x-footer>


</x-layout>