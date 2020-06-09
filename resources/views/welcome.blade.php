@extends('layouts.app')

@section('title', 'Little Fortune')

@section('extra-style')
<style>
    body {
        font-family: 'Courgette', cursive;
        background-color: white;
        text-align: center;
        color: #4AC4B9;
    }
    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 80px;
    }

    .links > a {
        color: white;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
@endsection

@section('content')
    <div class="flex-center position-ref full-height">  
        <div class="content">
            <div class="title m-b-md">
                <img src="{{ url('images/fox.png') }}" width=250 height=250/><br>
                Little fortune..
            </div>
        </div>
    </div>
@endsection
