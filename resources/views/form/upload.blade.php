@extends('form.main')

@section('upload')
       <div class="inputs">
            <form method="POST" action="{{ route('add-form') }}" enctype="multipart/form-data">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title: </label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" >
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Body: </label>
                <textarea type="textarea" name="body" class="form-control" id="exampleFormControlTextarea1" rows="5" ></textarea>
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Choose photo: </label>
                <input class="form-control" name="photos" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-success">Add</button>
            </form>
       </div>
@endsection