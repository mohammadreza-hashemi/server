@extends('.layouts/app')
@section('content')
    @isset($users)
        @foreach($users as $user)
            <h5>{{$user->name}}</h5><br>
        @endforeach
        @if($err)
            <h2>{{ $err }}</h2>

        @endif
    @endisset
    @unless(\Illuminate\Support\Facades\Auth::check())

        you are login
    @endunless
    @empty($x)
        is empty
    @endempty

    @auth()
        user is authenticated
    @endauth

    @guest()
        user is guest
    @endguest

    @production
        your application is production mode
    @endproduction

    @env(['local','production','staging'])
        your app is local production staginh
    @endenv
    <br>
    {{--    @include('.partials.conditions')--}}


    @push('script')
        <script>
            // alert('message');
            var users = {{ \Illuminate\Support\Js::from($users) }}
        </script>
    @endpush
    <br>
    @once
        this is once
    @endonce
    <br>

    <x-alert :message="'data'" class="error">
        @slot('x')
            warning
        @endslot

        <strong>Whoops!</strong> Something went wrong!

    </x-alert>
    <x-inputs.button/>
@endsection




