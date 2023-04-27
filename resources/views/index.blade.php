@extends('layouts.main')

@section('content')


<div class="container row my-3">



    @foreach($movies as $movie)
        <div class="card" style="width: 18rem; margin-left:20px">
            <img src="images/{{$movie->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$movie->name}}</h5>
                <p class="card-text">{{$movie->description}}</p>
                <form action="{{route('write_review')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$movie->id}}">
                    <input type="submit" value="Give Review" class="btn btn-primary">
                </form>
            </div>
        </div>
    @endforeach        

    
</div>



@endsection