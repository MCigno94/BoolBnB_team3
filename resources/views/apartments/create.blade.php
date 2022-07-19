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
                <form action="{{route('user.apartments.store')}}" method="post">
                    @csrf
                    
                    <h2 class="text-center display-4 pb-4">Add new apartment</h2>
                    <!-- TITLE -->
                    <div class="form-group row title m-0 py-1">
                        <label class="col-form-label px-0" for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>

                    <!-- ADDRESS -->
                    <div class="form-group row image m-0 py-1">
                        <label class="col-form-label px-0" for="address">Address</label>
                        <input class="form-control" type="text" name="address" id="address">
                    </div>
            
                    <!-- IMAGE -->
                    <div class="form-group row image m-0 py-1">
                        <label class="col-form-label px-0" for="image">Image</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
            
                    <!-- DESCRIPTION -->
                    <div class="form-group row m-0 description">
                        <label class="col-form-label px-0" for="description">Description</label>
                        <textarea name="description" id="description" cols="" rows="4" placeholder="Describe your apartment"></textarea>
                    </div>

                    <div class="d-flex gap-4">
                        <!-- MQ -->
                        <div class="form-group row image m-0 py-1 w-50">
                            <label class="col-form-label px-0" for="square_meters">MQ</label>
                            <input class="form-control" type="number" name="square_meters" id="square_meters">
                        </div>
                        
                        <!-- ROOMS -->
                        <div class="form-group row image m-0 py-1 w-50">
                            <label class="col-form-label px-0" for="rooms_number">Rooms</label>
                            <input class="form-control" type="number" name="rooms_number" id="rooms_number">
                        </div>
                    </div>

                    <div class="d-flex gap-4">
                        <!-- BEDS -->
                        <div class="form-group row image m-0 py-1 w-50">
                            <label class="col-form-label px-0" for="beds_number">Beds</label>
                            <input class="form-control" type="number" name="beds_number" id="beds_number">
                        </div>
                        
                        <!-- BATHROOMS -->
                        <div class="form-group row image m-0 py-1 w-50">
                            <label class="col-form-label px-0" for="bathrooms_number">Bathrooms</label>
                            <input class="form-control" type="number" name="bathrooms_number" id="bathrooms_number">
                        </div>
                    </div>
            
                    <div class="d-flex align-items-center">
                        <!-- DAILY PRICE -->
                        <div class="form-group row image m-0 py-1 w-50 pe-3">
                            <label class="col-form-label px-0" for="daily_price">Daily price</label>
                            <input class="form-control" type="number" name="daily_price" id="daily_price">
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
                        <button class="btn btn-light fw-bold w-25" type="submit">POST</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection