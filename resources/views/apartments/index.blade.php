@extends('layouts.app')

@section('content')

        <div class="add_apartment">
                <div class="button">
                        <a class="btn btn-primary" href="{{route('user.apartments.create')}}" role="button">Create New Post</a>
                </div>
        </div>
        @foreach($apartments as $apartment)
                <h2>{{$apartment->title}}</h2>
                <img src="{{$apartment->image}}" alt="un immagine bella bella">
                <p>{{$apartment->description}}</p>
                <div>{{$apartment->daily_price}}</div>

                <a class="btn btn-primary" href="{{route('user.apartments.show',$apartment->id)}}">Views</a>
                <a class="btn btn-secondary" href="{{route('user.apartments.edit',$apartment->id)}}">Edit</a>

                <form action="{{route('user.apartments.destroy',$apartment->id)}}" method="post">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>

                <br><br><hr>
                
        @endforeach
@endsection