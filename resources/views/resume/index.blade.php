@extends('layouts.app')
<!-- About Section-->
@section('content')
    <!-- Page Content-->
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                        <!-- Download resume button-->
                        <!-- Note: Set the link href target to a PDF file within your project-->
                        <a class="btn btn-primary px-4 py-3" href="{{ asset('CV-Rikky-Yulanda-Terbaru13.pdf') }}" download>
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Download Resume
                        </a>
                    </div>
                    {{-- <!-- Experience Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">2024 - Present</div>
                                        <div class="small fw-bolder">Web Developer</div>
                                        <div class="small text-muted"></div>
                                        <div class="small text-muted">Palembang, CA</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                                        laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet
                                        officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro
                                        fuga.</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Experience Card 2-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">2023</div>
                                        <div class="small fw-bolder">Bootcamp Fullstacks web Dev - Sewa Mobil</div>
                                        <div class="small text-muted">Build With Angga</div>
                                        <div class="small text-muted">Jakarta, </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>My experience at the Build with Angga bootcamp was both engaging and fulfilling. I
                                        had the extraordinary opportunity to learn how to create a car rental website using
                                        Laravel 9 and Tailwind CSS. Each learning session provided deep insights into modern
                                        web development concepts.

                                        Our instructors were highly experienced and knowledgeable in their field, guiding me
                                        through every step with dedication. Group discussions and practical assignments
                                        helped me apply the knowledge I gained in real-world situations. The support team
                                        was also very helpful, always ready to assist me in overcoming any obstacles
                                        encountered during the bootcamp.

                                        I greatly appreciated collaborating with fellow participants, which enriched my
                                        learning experience even more. Overall, this bootcamp has provided me with a solid
                                        foundation to become a more competent and confident web developer. I am excited to
                                        continue this journey and apply the skills I have learned in my future career
                                        endeavors.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Education Section-->
                <section>
                    <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                    <!-- Education Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2017 - 2021</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">STISIPOL Candradimuka</div>
                                            <div class="small text-muted">Palembang,</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">Sarjana</div>
                                            <div class="small text-muted">Ilmu Administrasi Negara</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>I have embarked on an educational journey at Stisipol Candradimuka, undergoing four
                                        years of study in the field of Public Administration. Throughout my academic
                                        journey, I have been committed to deepening my understanding of various aspects of
                                        public administration, ranging from fundamental theories to practical applications
                                        in the context of public policy.

                                        With passion and dedication, I have continuously developed my skills in policy
                                        analysis, public organization management, and regional development strategies. As a
                                        result, I have achieved satisfactory academic performance, obtaining a Cumulative
                                        Grade Point Average (GPA) of 3.65. This serves as evidence of my perseverance and
                                        hard work in pursuing higher education in a field that I am passionate about.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <!-- Education Card 2-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2011 - 2015</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">ULA</div>
                                            <div class="small text-muted">Los Angeles, CA</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">Undergraduate</div>
                                            <div class="small text-muted">Computer Science</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                                        laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet
                                        officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro
                                        fuga.</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Skills Section-->
                <section>
                    <!-- Skillset Card-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <!-- Professional skills list-->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        <i class="bi bi-tools"></i>
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional
                                            Skills</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                            Marketing</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                            Canva Design</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web
                                            Development</div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Time
                                            Management</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe
                                            Software Suite</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">User
                                            Interface Design</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Languages list-->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        <i class="bi bi-code-slash"></i>
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML
                                        </div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Tailwind CSS
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                            JavaScript</div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Php
                                        </div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Framwork
                                            Laravel
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Node.js
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
