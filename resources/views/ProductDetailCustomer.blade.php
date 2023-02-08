@extends('Main.structure')

@section('container')

@include('Partial.YellowNavUser')

<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/Detail.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="Detail-Body">
        <div class="Outer-Box">
            <div class="Detail-Title">
                <h3><u>{{ $Detail["Name"] }}</u></h3>
            </div>
            <div class="Detail-Flexbox">
                <div class="Image-Detail">
                    <div class="Detail-Purple-Image">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/' . $Detail->Photo) }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="Description-Main-Detail">
                    <div class="Title">
                        <a><b>Price : Rp. {{ $Detail->Price }},-</b></a>
                    </div>
                    <div class="Description-Detail">
                        <p>LIMITED VEGETABLE</p>
                    </div>
                    <div class="Description-Detail">
                        <p>{{ $Detail->Detail }}</p>
                    </div>
                    <form action="/CartPage" method="POST">
                        @csrf
                        <div class="Detail-Button-Detail">
                            <button type="submit" class="btn btn-light">Buy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection