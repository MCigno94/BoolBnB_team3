@extends('layouts.app')

@section('content')
    <form  action="{{route('user.apartments.store')}}" class="ms-2" method="post">
        @csrf

        <div class="title">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" placeholder="titolo dell'annuncio">
        </div>

        <div class="image">
            <label for="image">Immagine dell'apartamento</label>
            <input type="text" name="image" id="image" placeholder="htttp//url">
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

        <button type="submit">invia testa di cazzo</button>
    </form>
@endsection