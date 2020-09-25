@extends('layouts.master')

@section('content')
<div class="container-fluid mycontainer">

<div class="row justify-content-center">
    <form class="mt-4 mb-4">

        <div class="form-group my-form-group">
            {{-- <input type="text" id="input-title" class="form-control my-input" placeholder="Title"> --}}

            <input type="text" id="input-notes" class="form-control my-input" placeholder="Take a note...">
        </div>

      </form>
</div>

<div class="row ml-lg-3 mr-lg-3">

    <div class="card mr-lg-3">
        <div class="card-body">
            <h5 class="card-title">1st Card</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            <div class="row mycard-align">

                <div class="myborder-test">
                    <img class="d-inline mycard-icon" src="{{ asset('css/228.png') }}">
                </div>

                <div class="myborder-test">
                    <img class="d-inline mycard-icon" src="{{ asset('css/228.png') }}">
                </div>

                <div class="myborder-test">
                    <img class="d-inline mycard-icon" src="{{ asset('css/228.png') }}">
                </div>

                <div class="myborder-test">
                    <img class="d-inline mycard-icon" src="{{ asset('css/228.png') }}">
                </div>

                <div class="myborder-test">
                    <img class="d-inline mycard-icon" src="{{ asset('css/228.png') }}">
                </div>

                <div class="myborder-test">
                    <img class="d-inline mycard-icon" src="{{ asset('css/228.png') }}">
                </div>
            </div>
        </div>
    </div>

    <div class="card mr-lg-3">
        <div class="card-body">
            <h5 class="card-title">2nd Card</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>


    <div class="card mr-lg-3">
        <div class="card-body">
            <h5 class="card-title">3rd Card</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>


    <div class="card mr-lg-3">
        <div class="card-body">
            <h5 class="card-title">4th Card</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <div class="card mr-lg-3">
        <div class="card-body">
            <h5 class="card-title">5th Card</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

</div>
</div>

@endsection