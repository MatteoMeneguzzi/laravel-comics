@extends('layouts.main')

@section('heading')
DC Comics
@endsection

@section('content')
<section>
    <div class="container">
        <div class="cards">
           @foreach ($cards as $card)
            <div class="card">
                <div class="img-container">
                    <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}">
                </div>
                <div class="title">{{ $card['title'] }}</div>
            </div>
               
           @endforeach 
        </div>
        <button type="button" onclick="alert('Sorry, soon things will get better!')"><a href="#">Load more</a></button>
    </div>
</section>
@endsection