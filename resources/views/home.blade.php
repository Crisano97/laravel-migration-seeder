@extends('layout.main')

@section('main-content')
<h1>treni in partenza oggi:</h1>
    <div class="trains-container">
        @foreach ($trains as $train)
        <div class="train-card">
            <span>Data di partenza: {{ $train->departure_date }}</span>
            <span> Agenzia: {{ $train->agency }}</span>
            <span>Codice Treno: {{ $train->train_code }}</span>
            <span>Tratta: {{ $train->departure_station }} - {{ $train->arrival_station }}</span>
            <span></span>
        </div>
        @endforeach
    </div>
@endsection