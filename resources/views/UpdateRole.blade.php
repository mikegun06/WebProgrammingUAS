@extends('Main.structure')

@section('container')

@include('Partial.YellowNavAdmin')

<link rel="stylesheet" href="/css/UpdateRole.css">
<link rel="stylesheet" href="/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="icon" href="https://cdn.pixabay.com/photo/2020/04/17/19/48/city-5056657__340.png">

<div class="UpdateRole-Body">
    @foreach ($Prof as $tag)
    <form action="/action/UpdateRole/{{ $tag->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
    <div class="UpdateRole-Positioning">
        <div class="UpdateRole-Title">
            <h4><u><b>{{ $tag->FirstName }}</b></u></h4>
        </div>
        <div class="UpdateRole-Role">
            <div class="form-floating mb-2" style="display: flex;align-items:center">
                Role:
                <div class="UpdateRole-input-form">
                    <select id="Role" name="Role" class="form-control" style="background-color: transparent" required>
                        <option value="1">User</option>
                        <option value="2">Admin</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="Profile-Submit-Button" style="text-align:left">
            <p><button style="font-size:18px;background-color:yellow" onclick="return confirm('Update, Continue?')">Save</button></p>
        </div>
    </div>
    @endforeach
    </form>
</div>

@endsection
