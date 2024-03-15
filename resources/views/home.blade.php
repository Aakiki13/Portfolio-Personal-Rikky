@extends('layouts.app')

@section('content')
    <!-- Home section-->
    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row align-items-center justify-content-center justify-content-md-between">
                <div class="col-md-6 text-center text-md-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <span class="text-uppercase">Copywritter &middot; Jr.Development &middot; Marketing</span>
                    </div>
                    <p class="fs-3 fw-light text-muted">I can help your business to</p>
                    <h1 class="display-3 fw-bolder mb-5">
                        <span class="text-gradient d-inline">Get online and grow fast</span>
                    </h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-md-start">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder">Resume</a>
                        <a href="#" class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder">Projects</a>
                    </div>
                </div>
                <!-- Foto section-->
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="profile bg-gradient-primary-to-secondary d-flex justify-content-center">
                        <img class="profile-img" src="{{ asset('pictures/Profil-Rikky.jpg') }}" alt="Profile-Rikky" />
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About Section-->
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p class="lead fw-light mb-4">My name is Rikky Yulanda and I am an entry-level administrator
                        and web
                        developer.</p>
                    <p class="text-muted">Rikky Yulanda is a graduate of STISIPOL Candradimuka Palembang with a
                        GPA of
                        3.65
                        in Public Administration. He has a two-month internship at the Social Services Office in
                        Palembang
                        and six months working at PT. Sako Indah Gemilang. Rikky has also taken PTIK lessons at
                        Palcomtech
                        and a Fullstack Web Developers bootcamp at Build with Angga, focusing on the car rental
                        industry.
                    </p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
