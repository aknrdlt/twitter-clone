@extends('form.main')

@section('content')
    @foreach($forms as $post)
        @isset(auth()->user()->email)  
            @if(file_exists(public_path() . '/uploads/' . auth()->user()->email . '-' . $post->name . '.jpg'))
                 <div class="post">
                    <div class="image">
                        <img src="{{URL::asset('/uploads/' . auth()->user()->email . '-' . $post->name . '.jpg')}}" height="300" width="400" alt="de">
                    </div>
                    <div class="info">
                        <h1>{{$post->name}}</h1>
                        <p style="font-size: 26px;">{{$post->body}}</p>
                    </div>
                </div>
            @endif
        @endisset
    @endforeach
@endsection
