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
        <div class="form col bg-danger d-flex align-items-center justify-content-center">
            <div class="text-white">
            <form  action="{{route('user.apartments.store')}}" class="ms-4" method="post">
        @csrf


        <div class="form-group row title m-0 py-1">
            <label class="col-form-label text-md-right p-0" for="title">Titolo</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>


        <div class="form-group row image m-0 py-1">
            <label class="col-form-label text-md-right p-0" for="image">Immagine dell'apartamento</label>
            <input class="form-control" type="text" name="image" id="image">
        </div>


        <div class="description">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="inserisci qui la descrizione dell'apartamento"></textarea>
        </div>

        <div class="daily_price">
            <label for="daily_price">Prezzo giornaliero</label>
            <input type="number" name="daily_price" id="daily_price">
        </div>

        <div class="square_meters">
            <label for="square_meters">Metri quadri dell'appartamento </label>
            <input type="number" name="square_meters" id="square_meters">
        </div>

        <div class="rooms_number">
            <label for="rooms_number">Numero di camere </label>
            <input type="number" name="rooms_number" id="rooms_number">
        </div>

        <div class="beds_number">
            <label for="beds_number">Numero letti </label>
            <input type="number" name="beds_number" id="beds_number">
        </div>

        <div class="bathrooms_number">
            <label for="bathrooms_number">Numero bagni </label>
            <input type="number" name="bathrooms_number" id="bathrooms_number">
        </div>

        <div class="visibility">
            <p>vuoi che l'annuncio sia visibile</p>
            <label for="si"> si</label>
            <input type="radio" name="visibility" id="si" value="true">
            <label for="no"> no</label>
            <input type="radio" name="visibility" id="no" value="false">
        </div>

        <div class="address">
            <label for="address">Indirizzo</label>
            <input type="text" name="address" id="address" placeholder="indirizzo">
        </div>

        <div class="longitude">
            <label for="longitude">Longitudine </label>
            <input type="number" name="longitude" id="longitude">
        </div>

        <div class="latitude">
            <label for="latitude">Latitudine </label>
            <input type="number" name="latitude" id="latitude">
        </div>

        <button type="submit">invia</button>
    </form>
            </div>
        </div>
    </div>
</div>
@endsection