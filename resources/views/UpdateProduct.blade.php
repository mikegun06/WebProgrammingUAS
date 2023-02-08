@extends('Main.structure')

@section('container')

@include('Partial.YellowNavAdmin')

<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/UpdateProduct.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="UpdateProduct-Body">
    <div class="Top-Things-UpdateProduct">
        <button type="button" class="btn btn-default btn-sm" onclick="window.location.href='/ManageProduct';">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Back
        </button>
    </div>
    <div class="UpdateProduct-Positioning">
        @foreach ($item as $x)           
        <form action="{{Route('Product.updateData',['id'=>$x->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="UpdateProduct-Input-Form">
                <label for="Name">Name</label>
                <input type="text" class="form-control" value="{{ $x->Name }}" name="Name" placeholder="First name" aria-label="First name" required>
            </div>
            <div class="UpdateProduct-Input-Form">
                <label for="Category">Category</label>
                <select class="form-select" aria-label="Default select example" value="{{ $x->Category }}" name="Category" required>
                    <option value="1">Vegetable</option>
                    <option value="2">Other</option>
                </select>
            </div>
            <div class="UpdateProduct-Input-Form mb-3 mt-3">
                <label for="comment">Comments:</label>
                <textarea class="form-control" rows="5" value="{{ $x->Detail }}" id="comment" name="Detail" required></textarea>
            </div>
            <div class="UpdateProduct-Input-Form">
                <label for="Price">Price</label>
                <input type="text" class="form-control" name="Price" value="{{ $x->Price }}" placeholder="Price" aria-label="Price" required>
            </div>
            <div class="UpdateProduct-Input-Form mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" name="Photo" value="{{ $x->Photo }}"  type="file" id="formFile" required>
            </div>
            <div class="UpdateProduct-Button">
                <button type="submit" class="btn btn-light">Update</button>
            </div>
        </form>
        @endforeach
    </div>
</div>

<div class="Index-Footer">
    <div class="Index-Footer-Detail">
        <p>@ Amazing E-Grocery 2023</p>
    </div>
</div>

@endsection