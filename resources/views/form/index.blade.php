@extends('form.main')

@section('content')
    @php
        $b = 1;
    @endphp
    @isset(auth()->user()->email)  
        @foreach($forms as $post)  
            @if(file_exists(public_path() . '/uploads/' . auth()->user()->email . '-' . $post->name . '.png'))
                 <div class="post">
                 @php
                    $b = 2;
                 @endphp
                    <div class="image">
                        <img src="{{URL::asset('/uploads/' . auth()->user()->email . '-' . $post->name . '.png')}}" height="250" width="400" alt="no">
                    </div>
                    <div class="info">
                        <h3 style="font-weight: bold;">{{$post->name}}</h3>
                        <p style="width:600px;overflow-wrap: break-word;font-size: 16px;">{{$post->body}}</p>
                    </div>
                </div>
            @endif
        @endforeach
        @if($b == 2)
            {{ $forms->links() }}
        @else
            <h3><strong>No posts yet!</strong></h3>
        @endif
    @endisset
@endsection
