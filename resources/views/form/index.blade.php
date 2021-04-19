@extends('form.main')

@section('content')
    @foreach($forms as $post)
        <div class="post">
            <div class="image">
                <img src="{{URL::asset('/uploads/' . $post->name . '.jpg')}}" height="300" width="400" alt="de">
            </div>
            <div class="info">
                <h1>{{$post->name}}</h1>
                <p style="font-size: 26px;">{{$post->body}}</p>
            </div>
        </div>
    @endforeach
@endsection
