@extends('form.main')

@section('content')
    @isset(auth()->user()->email)  
        @foreach($forms as $post)  
            @if(!file_exists(public_path() . '/uploads/' . auth()->user()->email . '-' . $post->name . '.png'))
                 <div class="post">
                    <div class="image">
                        <img src="{{URL::asset('/uploads/' .  $post->email . '-' . $post->name . '.png')}}" height="250" width="400" alt="no">
                    </div>
                    <div class="info">
                        <h3 style="font-weight: bold;">{{$post->name}}</h3>
                        <p style="width:600px;overflow-wrap: break-word;font-size: 16px;">{{$post->body}}</p>
                        <p class="author"><strong>Author: {{$post->email}}</strong></p>
                    </div>  
                </div>
            @endif
        @endforeach
        {{ $forms->links() }}
    @endisset
@endsection
