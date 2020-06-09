@extends('layouts.app')

@section('title', 'Little Fortune')

@section('extra-style')
<style>
    body { 	height: 100vh; background: linear-gradient(#2C3E50, #808B96); }
    .portfolio {
        padding: 2%;
        text-align: center;
    }
    .heading {
        background: #fff;
        padding: 1%;
        text-align: left;
        box-shadow: 0px 0px 4px 0px #545b62;
    }
    .heading-img {
        width: 10%;
    }
    .bio-info {
        padding: 5%;
        background: #fff;
        box-shadow: 0px 0px 4px 0px #b0b3b7;
    }
    .name {
        font-family: 'Charmonman', cursive;
        font-weight: 600;
    }
    .bio-image {
        text-align: center;
    }
    .bio-image img {
        border-radius: 50%;
    }
    .bio-content {
        text-align: left;
    }
</style>
@endsection

@section('content')
   <div class="container portfolio">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <img src="{{ url('/images/profile/logo.png') }}" width="100"/>
                </div>
            </div>
        </div>
        <div class="bio-info">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bio-image">
                                <img src="{{ asset('/images/profile/profile.jpg') }}" alt="profile" width="200" height="200">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="bio-content mt-3">
                        <h2>Nongnapat Somdangdech</h2>
                        <h6>Web Developer</h6>
                        <p>
                           Experienced and driven Software Developer with a decent understanding of industrial best practices, clean code, 
                           cloud computing and microservices architecture. Experienced collecting requirements, designing and developing web applications 
                           for healthcare and office management.
                        </p>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection
