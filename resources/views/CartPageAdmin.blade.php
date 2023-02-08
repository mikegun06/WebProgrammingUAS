@extends('Main.structure')

@section('container')

@include('Partial.YellowNavAdmin')

<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/cart.css">
<link rel="stylesheet" href="css/indexstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="CartPage-Body">
        <div class="CartPage-Outer-Box">
            <h4><u>Cart</u></h4>
            <div class="Detail-Flexbox">
                <div class="Image-Detail">
                    <div class="Detail-Purple-Image">
                        <img src="#" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="Description-Main-Detail">
                    <div class="Description-Detail">
                        <p>Vegetable 3</p>
                    </div>
                    <div class="Description-Detail">
                        <a><b>Rp.100.000,-</b></a>
                    </div>
                    <div class="Description-Detail">
                        <p>{{ $Detail->Detail }}</p>
                    </div>
                    <div class="Description-Detail">
                        <form action="/CartPage" method="get">
                            @method('delete')
                            @csrf
                        <p><button style="font-size:18px;" onclick="return confirm('Are You Sure?')">{{ __('Words.DeleteCart') }}</button></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="CartPage-Total">
            <div class="CartPage-Total-Calculation">
                <p><b>Total: Rp.100.000,-</b></p> 
            </div>
            <div class="CartPage-Checkout-Box">
                <button style="font-size:18px;background-color:yellow;font-color:black;" onclick="location.href='/Success'"><b>{{ __('Words.CheckOutCart') }}</b></button>
            </div>
        </div>
    </div>

    <div class="Index-Footer">
        <div class="Index-Footer-Detail">
            <p>@ Amazing E-Grocery 2023</p>
        </div>
    </div>

@endsection