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


<div class="AddProduct-Body">
    <div class="Top-Things-AddProduct">
        <button type="button" class="btn btn-default btn-sm" onclick="window.location.href='/ManageProduct/{lang}';">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Manage Product
        </button>
    </div>

    <div class="AddProduct-Box">
        <div class="Add-Product-Title">
            <b>{{ __('Words.AddProduct') }}</b>
        </div>


        <form action="/AddProduct" method="post" enctype="multipart/form-data">
            @csrf
            <div class="AddProduct-Input-Form">
                <label for="Name">{{ __('Words.NameProduct') }}</label>
                <input type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" placeholder="Product name" aria-label="First name" required autofocus>
            </div>
            <div class="AddProduct-Input-Form">
                <label for="Category">{{ __('Words.CategoryProduct') }}</label>
                <select class="form-select" aria-label="Default select example" name="Category" required>
                    <option value="1">Vegetable</option>
                    <option value="2">Card</option>
                    <option value="3">Other</option>
                </select>
            </div>
            <div class="AddProduct-Input-Form mb-3 mt-3">
                <label for="comment">{{ __('Words.CommentsProduct') }}:</label>
                <textarea class="form-control" rows="5" name="Detail" id="comment" name="text" required></textarea>
            </div>
            <div class="AddProduct-Input-Form">
                <label for="Price">{{ __('Words.PriceProduct') }}</label>
                <input type="text" class="form-control" name="Price" placeholder="Price" aria-label="Price" required>
            </div>
            <div class="AddProduct-Input-Form mb-3">
                <label for="formFile" class="form-label">{{ __('Words.InputPictureProduct') }}</label>
                <input class="form-control" type="file" name="Photo" id="formFile" required>
            </div>
            <div class="AddProduct-Button">
                <button type="submit" class="btn btn-light">{{ __('Words.AddProductButton') }}</button>
            </div>
        </form>
    </div>
</div>

<div class="Index-Footer">
    <div class="Index-Footer-Detail">
        <p>@ Amazing E-Grocery 2023</p>
    </div>
</div>

@endsection