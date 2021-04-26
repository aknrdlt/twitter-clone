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
                        <p style="width:300px;overflow-wrap: break-word;font-size: 16px;">{{$post->body}}</p>
                        <p class="author"><strong>Author: {{$post->email}}</strong></p>
                        <form method="get" action="{{ route('send-comment') }}" style="position: absolute; bottom: 0; left: 5px;" class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                                <!-- <span id="heart" style="margin-right: 10px;">
                                    <i class="far fa-h  eart fa-lg" aria-hidden="true"></i> 
                                </span> -->
                                <input type="text" hidden value="{{$post->id}}" name="id" id="id">
                                <input type="text" name="comment" class="form-control" placeholder="Comment">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Send</button>
                        </form>
                    </div>  
                </div>
            @endif
        @endforeach
        {{ $forms->links() }}
    @endisset
@endsection
