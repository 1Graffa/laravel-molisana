@extends('layouts.app')

@section('title')
    Prodotti
@endsection

@section('content')
    <div class="container">
        <h2>Le Lunghe</h2>
        <div class="card-container">
        @foreach($lunga as $key => $formato)
            <div class="card">
                <img src="{{ $formato['src'] }}" alt="{{ $formato['titolo'] }}">
                <div class="overlay">
                    <a href="{{ route('pagina-dettagli', ['id' => $key]) }}">{{ $formato['titolo'] }}</a>
                </div>
            </div>
        @endforeach
        </div>
        <h2>Le Corte</h2>
        <div class="card-container">
            @foreach($corta as $key => $formato)
                <div class="card">
                    <img src="{{ $formato['src'] }}" alt="{{ $formato['titolo'] }}">
                    <div class="overlay">
                        <a href="{{ route('pagina-dettagli', ['id' => $key]) }}">{{ $formato['titolo'] }}</a>
                    </div>
                </div>
            @endforeach
        </div>
        <h2>Le Cortissime</h2>
        <div class="card-container">
            @foreach($cortissima as $key => $formato)
                <div class="card">
                    <img src="{{ $formato['src'] }}" alt="{{ $formato['titolo'] }}">
                    <div class="overlay">
                        <a href="{{ route('pagina-dettagli', ['id' => $key]) }}">{{ $formato['titolo'] }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection



