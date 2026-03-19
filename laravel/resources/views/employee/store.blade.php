@extends('layouts.app')

@section('content')
<div class="bg-dark text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Vehicle Showroom</h1>
        <p class="lead">Explore our premium selection of certified pre-owned and new vehicles.</p>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-3 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Filter Search</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Brand</label>
                            <select class="form-select border-0 bg-light">
                                <option>All Brands</option>
                                <option>Toyota</option>
                                <option>Honda</option>
                                <option>Mitsubishi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Price Range</label>
                            <input type="range" class="form-range" min="0" max="5000000" step="100000">
                            <div class="d-flex justify-content-between small text-muted">
                                <span>₱0</span>
                                <span>₱5M+</span>
                            </div>
                        </div>
                        <button class="btn btn-danger w-100 mt-2">Apply Filters</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <span class="text-muted">Showing 1–12 of 48 results</span>
                <select class="form-select form-select-sm w-auto">
                    <option>Sort by: Latest</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                </select>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-xl-4">
                    <div class="card h-100 border-0 shadow-sm vehicle-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Vehicle Image">
                            <span class="position-absolute top-0 start-0 m-3 badge bg-danger">Featured</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">2024 Toyota Fortuner</h5>
                            <p class="text-muted small mb-2"><i class="fas fa-gas-pump me-1"></i> Diesel | <i class="fas fa-cog me-1"></i> Automatic</p>
                            <h4 class="text-danger fw-bold">₱2,450,000</h4>
                            <hr>
                            <div class="d-grid">
                                <a href="#" class="btn btn-outline-dark">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card h-100 border-0 shadow-sm vehicle-card">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Vehicle Image">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">2023 Honda Civic RS</h5>
                            <p class="text-muted small mb-2"><i class="fas fa-gas-pump me-1"></i> Gasoline | <i class="fas fa-cog me-1"></i> CVT</p>
                            <h4 class="text-danger fw-bold">₱1,680,000</h4>
                            <hr>
                            <div class="d-grid">
                                <a href="#" class="btn btn-outline-dark">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card h-100 border-0 shadow-sm vehicle-card">
                        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Vehicle Image">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">2022 Mitsubishi Montero</h5>
                            <p class="text-muted small mb-2"><i class="fas fa-gas-pump me-1"></i> Diesel | <i class="fas fa-cog me-1"></i> Manual</p>
                            <h4 class="text-danger fw-bold">₱1,450,000</h4>
                            <hr>
                            <div class="d-grid">
                                <a href="#" class="btn btn-outline-dark">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection