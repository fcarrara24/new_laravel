@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>

        <section class="container">
            <h1>product</h1>
            <img src="{{ Vite::asset('resources/img/marchio-sito-test.png') }}" alt="">

            <img src="" alt="">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-12 col-md-4 col-lg-3 pb-3 ">
                        <img style="max-width: 100%" src="{{ $product['src'] }}" alt="{{ $product['titolo'] }}">
                    </div>
                @endforeach

            </div>
        </section>
    </main>

@endsection
