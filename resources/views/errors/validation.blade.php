@extends('.layouts.app')
@section('content')
    <h2>Errors</h2><br>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach

            </ul>
        </div>
    @endif

@endsection
