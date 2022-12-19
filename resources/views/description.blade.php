@extends('layouts.app')

@section('content')
<section class="banner_blue">
</section>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="my_card p-5 fs-5">
                    <h3 class="fw-bold">{{$thumb[0]['title']}}</h3>
                    <p>{{$thumb[0]['description']}}</p>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center">
                <img src="{{ Vite::asset('resources/img/infoImage.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>


@endsection