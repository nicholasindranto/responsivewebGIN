@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Welcome to Dashboard Resi</h2>
        <p class="text-justify">Our Resi Dashboard streamlines manual resi management by transitioning to a digital platform, enhancing administrative efficiency. Administrators can effortlessly manage and review shipment records on our user-friendly website, eliminating the tedious process of searching through physical logbooks. This transition not only brings ease but also significantly improves tasks such as creating, reviewing, updating, and canceling resi. Experience a seamless and efficient resi management system, empowering administrators to navigate and review shipments without the hassle of multiple manual records.</p>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6">
            <!-- Card 1 -->
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Total Resi</h3>
                        <p class="card-text">{{ $totalResi }}</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Total Cash</h3>
                        <p class="card-text">Rp {{ number_format($totalCash, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Total COD</h3>
                        <p class="card-text">Rp {{ number_format($totalCOD, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Total Profit</h3>
                        <p class="card-text">Rp {{ number_format(($totalCash + $totalCOD) * 0.2, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection