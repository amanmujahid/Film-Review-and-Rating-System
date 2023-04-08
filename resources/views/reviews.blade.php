@extends('layouts.main')

@section('content')


<div class="container row my-3">

    @foreach($reviews as $review)
        <div class="card" style="width: 18rem; margin-left:20px">
            <div class="card-body">
                <h5 class="card-title">{{$review->review}}</h5>
                <p class="card-text">{{$review->text}}</p>
            </div>
        </div>
    @endforeach
            

    <div class="container mb-3 mt-3">
        <div class="card-body">
                <h5 class="card-title">Total reviews: {{$current_review}}</h5>
        </div>
    </div>

    <form action="{{route('insert_review')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$id}}">
        Give rating out of 10:
        <div class="form-group mb-2">
            <input type="text" name="number" class="form-control">
        </div>
        Give review:
        <div class="form-group mb-2">
            <input type="text" name="text" class="form-control">
        </div>
        <input type="submit" value="submit" class="btn btn-primary">
    </form>
    
</div>

@endsection