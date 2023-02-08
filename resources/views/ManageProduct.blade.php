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


<div class="ManageProduct-Body">
    <div class="Top-Things-ManageProduct">
    
        <button type="button" class="btn btn-primary" onclick="window.location.href='/AddProduct/{lang}';"
            style="--bs-btn-padding-y: 5px; --bs-btn-padding-x: 30px; --bs-btn-font-size: 15px; white-space: nowrap; background-color: gray">
            <a>{{ __('Words.AddProductManageProduct') }}</a>
        </button>
    </div>

    @foreach ($Manage as $Items)
    <div class="Product-Display-ManageProduct">
        <div class="ManageProduct-Outer-Box">
            <div class="ManageProduct-Left-Image">
                <img src="{{ url('storage/images/'.$Items->Photo) }}" class="card-img-top" alt="...">
            </div>  
            <div class="ManageProduct-Right-Detail">
                <a>{{ $Items["Name"] }}</a>
            </div>
            <div class="ManageProduct-Button">
                <p><button type="button" class="btn btn-default btn-sm" onclick="window.location.href='{{url('Update',['id' =>$Items->id]) }}';">
                    <span class="glyphicon glyphicon-pencil"></span>
                </button>
                </p>
                <form action="/ManageProduct/{{ $Items->id }}/{lang}" method="get">
                    @method('delete')
                    @csrf
                <p><button style="font-size:18px" onclick="return confirm('Are You Sure?')"><i class="fa fa-trash-o"></i></button></p>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>



@endsection