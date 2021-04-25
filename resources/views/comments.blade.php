@extends('post_of_others')

@section('comments')
    @isset(auth()->user()->email)  
        @foreach($comments as $comment)  
              <div class="comment">
                $comment -> comment;
              </div>
        @endforeach
    @endisset
@endsection
