@extends('layouts.app')
<!-- About Section-->
@section('content')
    <!-- Projects Section-->
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Project Card 1-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">Website Sewa Mobil</h2>
                                <p>This project is a website built using Laravel 9 and Tailwind CSS frameworks as part of
                                    the Build with Angga bootcamp. The website integrates DataTable to efficiently present
                                    data to users. DataTable allows users to easily search, filter, and sort data
                                    interactively. Leveraging Laravel and Tailwind CSS technologies, this website aims to
                                    provide users with a seamless experience while ensuring clean, structured, and easily
                                    understandable code.</p>
                            </div>
                            <img class="img-fluid" src="{{ asset('pictures/SS-sewa-mobil.png') }}" alt="Projects 1"
                                style="width: 400px; height: 300px;">
                        </div>
                    </div>
                </div>
                <!-- Project Card 2-->
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">Website Personal Portfolio</h2>
                                <p>This project involves creating a personal portfolio website using Laravel and Bootstrap 5
                                    frameworks. The website serves as a showcase of individual skills, experiences, and
                                    projects. It aims to provide visitors with a comprehensive overview of the developer's
                                    capabilities and previous work. By leveraging Laravel's powerful backend functionalities
                                    and Bootstrap 5's responsive design components, the website ensures an engaging and
                                    visually appealing user experience across various devices.</p>
                            </div>
                            <img class="img-fluid" src="{{ asset('pictures/SS-portfolio-rikky.png') }}" alt="Projects 2"
                                style="width: 400px; height: 300px;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
