@extends('Main.structure')

@section('container')

@include('Partial.YellowNavAdmin')

<link rel="stylesheet" href="/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="icon" href="https://cdn.pixabay.com/photo/2020/04/17/19/48/city-5056657__340.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/AccountMaintenance.css">

<div class="AccountMaintenance-Body">
    <div class="AccountMaintenance-Positioning">
        <div class="AccountMaintenance-Title-Left">
            <h4><u><b>Account</b></u></h4>
            @foreach ($Prof as $tag)
                <div class="AccountMaintenance-Box">
                    <div class="AccountMaintenance-Detail">
                        {{ $tag->FirstName }} - {{ $tag->Role }}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="AccountMaintenance-Title-Right">
            <h4><u><b>Action</b></u></h4>
            @foreach ($Prof as $tag)
            <div class="AccountMaintenance-Box">
                <div class="AccountMaintenance-Detail">
                    <a href="/UpdateRole/{{ $tag->id }}">Update Role</a> - <a href="/action/DeleteRole/{{ $tag->id }}">Delete</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

@endsection
