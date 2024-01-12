@extends('.layouts/app')




@section('content')


    this is  content

    @if (session('status'))
        <div class="alert alert-success">
         x ==   {{ session('status') }}
        </div>
    @endif


@endsection
