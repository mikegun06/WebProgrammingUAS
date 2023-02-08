@extends('Main.structure')

@section('container')

@include('Partial.YellowNavAdmin')

<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="css/indexstyle.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="icon" href="https://cdn.pixabay.com/photo/2020/04/17/19/48/city-5056657__340.png">

<div class="Main-Body-Home">

    <div class="Home-Box-Main">
        <div class="Home-FlexBox">
            <div class="Box-Scroll">
                @foreach ($Home2 as $Variable)
                @if($Home2->count() > 0)
                <div class="Main-Body-Items">
                    <div class="Main-Body-Purple-Image">
                        <img src="/storage/{{ $Variable->Photo }}" class="card-img-top" alt="...">
                    </div>
                    <div class="Main-Body-Item-Description">
                        {{ $Variable->Name }}
                        <br/>
                        <a href="/ProductDetailAdmin/{{ $Variable->id }}">{{ __('Words.Detail') }}</a>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="Home-Box-Main">
        <div class="Home-FlexBox">
            <div class="Box-Scroll">
                @foreach ($Home2 as $Variable)
                @if($Home2->count() > 0)
                <div class="Main-Body-Items">
                    <div class="Main-Body-Purple-Image">
                        <img src="/storage/{{ $Variable->Photo }}" class="card-img-top" alt="...">
                    </div>
                    <div class="Main-Body-Item-Description">
                        {{ $Variable->Name }}
                        <br/>
                        <a href="/ProductDetailCustomer/{{ $Variable->id }}">{{ __('Words.Detail') }}</a>
                    </div>
                </div>
                @endif
                @endforeach

            </div>
        </div>
    </div>
    <div class="Home-Pagination-Controller">
        {{ $Home2->links() }}
    </div>
</div>

<div class="Index-Footer">
    <div class="Index-Footer-Detail">
        <p>@ Amazing E-Grocery 2023</p>
    </div>
</div>

@endsection
