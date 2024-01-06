@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Main content area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="card mt-3 p-3">
                    <div class="card-header">
                        <h3 class="card-title">Dashboard</h3>
                    </div>
                    <div class="card-body">
                        <h2>Selamat datang di Dashboard!</h2>

                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                            <!-- Card 1 -->
                            <div class="col mb-4">
                                <div class="card h-100 shadow">
                                    <div class="card-body">
                                        <h3 class="card-title">Total Resi</h3>
                                        <p class="card-text">{{ $totalResi }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col mb-4">
                                <div class="card h-100 shadow">
                                    <div class="card-body">
                                        <h3 class="card-title">Card Title 2</h3>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col mb-4">
                                <div class="card h-100 shadow">
                                    <div class="card-body">
                                        <h3 class="card-title">Card Title 3</h3>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Tambahkan lebih banyak kartu jika diperlukan -->

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
