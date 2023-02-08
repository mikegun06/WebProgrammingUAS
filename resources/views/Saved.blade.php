@extends('Main.structure')

@section('container')

<link rel="stylesheet" href="/css/success.css">
<link rel="stylesheet" href="/css/Profile.css">
<link rel="stylesheet" href="/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="icon" href="https://cdn.pixabay.com/photo/2020/04/17/19/48/city-5056657__340.png">

    <div class="success-Page">
        <div class="success-Square">
            <p class="success-Inner-Square-Text">
                {{ __('Words.SaveShow') }}
                <br/><br/>
                <a href="/Home/{lang}">{{ __('Words.ClickHere') }}</a>
            </p>
        </div>
    </div>

    <div class="success-Footer">
        <div class="success-Footer-Detail">
            <p>@ Amazing E-Grocery 2023</p>
        </div>
    </div>
    
@endsection