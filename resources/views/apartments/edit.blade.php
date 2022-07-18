@extends('layouts.app')

@section('content')
<div class="container ct-form bg-white bg-md-gray">
    <div class="row row-cols-1 row-cols-md-2 h-100 align-items-center justify-content-center">
        <div class="col d-none d-md-block">
            <div class="logo text-center">
                <div>
                    <img src="{{asset('img/logo.png')}}" alt="">
                </div>
                <div class="logo-text display-3 text-danger">
                    BoolBnB
                </div>
            </div>
        </div>
        <div class="form col bg-danger d-flex align-items-center justify-content-center py-5">
            <div class="text-white">
                <form action="{{route('user.apartments.update', $apartment->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    
                    <h2 class="text-center display-4 pb-4">Edit your apartment</h2>
                    <!-- TITLE -->
                    <div class="form-group row title m-0 py-1">
                        <label class="col-form-label px-0" for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{$apartment->title}}">
                    </div>

                    <!-- ADDRESS -->
                    <div class="form-group row image m-0 py-1">
                        <label class="col-form-label px-0" for="address">Address</label>
                        <input class="form-control" type="text" name="address" id="address" value="{{$apartment->address}}">
                    </div>
            
                    <!-- IMAGE -->
                    <div class="form-group row image m-0 py-1">
                        <label class="col-form-label px-0" for="image">Image</label>
                        <input class="form-control" type="text" name="image" id="image" value="{{$apartment->image}}">
                    </div>
            
                    <!-- DESCRIPTION -->
                    <div class="form-group row m-0 description">
                        <label class="col-form-label px-0" for="description">Description</label>
                        <textarea name="description" id="description" cols="" rows="4" placeholder="Describe your apartment">{{$apartment->description}}</textarea>
                    </div>

                    <div class="d-flex gap-4">
                        <!-- MQ -->
                        <div class="form-group row image m-0 py-1 w-50">
                            <label class="col-form-label px-0" for="square_meters">MQ</label>
                            <input class="form-control" type="number" name="square_meters" id="square_meters" value="{{$apartment->square_meters}}">
                        </div>
                        
                        <!-- ROOMS -->
                        <div class="form-group row image m-0 py-1 w-50">
                            <label class="col-form-label px-0" for="rooms_number">Rooms</label>
                            <input class="form-control" type="number" name="rooms_number" id="rooms_number" value="{{$apartment->rooms_number}}">
                        </div>
                    </div>

                    <div class="d-flex gap-4">
                        <!-- BEDS -->
                        <div class="form-group row image m-0 py-1 w-50">
                            <label class="col-form-label px-0" for="beds_number">Beds</label>
                            <input class="form-control" type="number" name="beds_number" id="beds_number" value="{{$apartment->beds_number}}">
                        </div>
                        
                        <!-- BATHROOMS -->
                        <div class="form-group row image m-0 py-1 w-50">
                            <label class="col-form-label px-0" for="bathrooms_number">Bathrooms</label>
                            <input class="form-control" type="number" name="bathrooms_number" id="bathrooms_number"value="{{$apartment->bathrooms_number}}">
                        </div>
                    </div>
            
                    <div class="d-flex align-items-center">
                        <!-- DAILY PRICE -->
                        <div class="form-group row image m-0 py-1 w-50 pe-3">
                            <label class="col-form-label px-0" for="daily_price">Daily price</label>
                            <input class="form-control" type="number" name="daily_price" id="daily_price"value="{{$apartment->daily_price}}">
                        </div>

                        <!-- VISIBILITY -->
                        <div class="visibility d-flex gap-2 align ps-4 align-self-end mb-2">
                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" style="transform: scale(1.75)">
                                <label class="form-check-label ms-3" for="flexSwitchCheckChecked">Make visible</label>
                            </div>
                        </div>
                    </div>

                    <!-- BUTTON -->
                    <div class="button pt-5">
                        <button class="btn btn-light fw-bold w-25 px-3" type="submit">EDIT</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection