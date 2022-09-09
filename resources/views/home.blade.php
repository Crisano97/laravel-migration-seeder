@extends('layout.main')

@section('main-content')
<h1>Treni in partenza oggi:</h1>
    <div class="trains-container">
        @foreach ($trains as $train)
        <div class="train-card">
            <span>Data di partenza: {{ $train->departure_date }}</span>
            <span> Agenzia: {{ $train->agency }}</span>
            <span>Codice Treno: {{ $train->train_code }}</span>
            <span>Tratta: {{ $train->departure_station }} - {{ $train->arrival_station }}</span>
            <span>Orario di partenza : {{ $train->departure_time }}</span>
        </div>
        @endforeach
    </div>
@endsection