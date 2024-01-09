@extends('.layouts/app')


@section('content')

    <form action="/user" method="POST">

        @csrf
       <input name="name" />
       <input name="lastname"/>
       <input type="submit"/>
    </form>
@endsection
