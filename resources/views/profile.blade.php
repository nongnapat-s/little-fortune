@extends('layouts.app')

@section('title', 'Little Fortune')

@section('extra-style')
<style>
    body { 	
        height: 100vh; background: linear-gradient(#2C3E50, #808B96); 
        color: #2C3E50;
    }
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
        padding: 3%;
        background: #fff;
        box-shadow: 0px 0px 4px 0px #b0b3b7;
    }
    .name {
        font-family: 'Charmonman', cursive;
        font-weight: 600;
    }
    .bio-content {
        text-align: left;
    }
    .image-outer-container {
       	margin-top: auto;
       	margin-bottom: auto;
       	border-radius: 50%;
       	position: relative;
    }
    .image-inner-container {
       	border-radius: 50%;
       	padding: 5px;
        background: #833ab4; 
        background: -webkit-linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4); 
        background: linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
    }
    .image-inner-container img {
       	height: 200px;
       	width: 200px;
       	border-radius: 50%;
       	border: 5px solid white;
    }
    h5, h6 {
        color: #808B96;
    }
    ul {
        padding: 0;
        list-style-type: none;
    }
    a {
      text-decoration:none !important;
      color: #2C3E50;
    }
    a:hover {
        color: #808B96;
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
                            <div class="d-flex justify-content-center h-100">
                                <div class="image-outer-container">
                                    <div class="image-inner-container">
                                        <img src="{{ asset('/images/profile/profile.jpg') }}">
                                    </div>
                                </div>
		                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="bio-content mt-3">
                        <h2>Nongnapat Somdangdech</h2>
                        <h5>Web Developer</h5>
                        <p>
                           Experienced and driven Software Developer with a decent understanding of industrial best practices, clean code, 
                           cloud computing and microservices architecture. Experienced collecting requirements, designing and developing web applications 
                           for healthcare and office management.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row text-left mt-2">
                <div class="col-md-4">
                    <h6>WORK LINK</h6>
                    <ul>
                        <li><a href="https://github.com/nongnapat-s" target="_blank">Github</a></li>
                        <li><a href="https://www.linkedin.com/in/nongnapat-somdangdech-a7182b184/" target="_blank">Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
   </div>
@endsection
