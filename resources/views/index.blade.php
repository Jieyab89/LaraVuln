@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Main Content -->
    <h1 class="text-center my-4">Welcome to LaraVuln</h1>
    
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.w3schools.com/bootstrap/la.jpg" class="d-block w-100" alt="IMG">
            </div>
            <div class="carousel-item">
                <img src="https://www.w3schools.com/bootstrap/ny.jpg" class="d-block w-100" alt="img">
            </div>
            <div class="carousel-item">
                <img src="https://www.w3schools.com/bootstrap/chicago.jpg" class="d-block w-100" alt="img">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>
    <h1 class="text-center my-4">A simple web application for pentest</h1>

    <!-- First set of cards -->
    <div class="container my-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Black Box</h5>
                        <p class="card-text">Learn web pentesting with black box.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gray Box</h5>
                        <p class="card-text">Learn web pentesting with gray box.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">White Box</h5>
                        <p class="card-text">Learn web pentesting with white box.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-center my-4">Available vulnerability lists</h1>

    <!-- Second set of cards -->
    <div class="container my-5">
        <div class="row">
            <!-- Card 4 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">IDOR</h5>
                        <p class="card-text">Insecure direct object reference.</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">BAC</h5>
                        <p class="card-text">Broken access control.</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Information Disclosure</h5>
                        <p class="card-text">Information leakage exposure of sensitive information.</p>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Security Misconfiguration</h5>
                        <p class="card-text">Application's settings are not configured correctly, or when essential configurations are missing.</p>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Weak Authentication</h5>
                        <p class="card-text">Using weak username and password, allowed username enumeration and allow brute force.</p>
                    </div>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Command Injection</h5>
                        <p class="card-text">Execution of arbitrary commands on the host operating system via a vulnerable application.</p>
                    </div>
                </div>
            </div>

            <!-- Card 10 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LFI</h5>
                        <p class="card-text">Local file inclusion (also known as LFI) is the process of including files, that are already locally present on the server.</p>
                    </div>
                </div>
            </div>

            <!-- Card 11 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Insecure Design</h5>
                        <p class="card-text">Insecure design architecture.</p>
                    </div>
                </div>
            </div>

            <!-- Card 12 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cross-Site Scripting</h5>
                        <p class="card-text">Attacks are a type of injection, in which malicious scripts are injected into otherwise benign and trusted websites.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
