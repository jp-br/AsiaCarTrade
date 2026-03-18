@extends('layouts.app')

@section('content')
<div class="bg-dark text-white py-5 mb-5 shadow">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Practice Portal</h1>
        <p class="lead opacity-75">Paragraph text.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary Button</button>
            <button type="button" class="btn btn-outline-light btn-lg px-4">Secondary Button</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-primary text-white">
                <div class="card-body text-center py-4">
                    <h6 class="text-uppercase mb-2 opacity-75">Total Employees</h6>
                    <h2 class="mb-0 fw-bold">1,240</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-success text-white">
                <div class="card-body text-center py-4">
                    <h6 class="text-uppercase mb-2 opacity-75">Registered Users</h6>
                    <h2 class="mb-0 fw-bold">12.5M</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-warning text-dark">
                <div class="card-body text-center py-4">
                    <h6 class="text-uppercase mb-2 opacity-75">Courses Live</h6>
                    <h2 class="mb-0 fw-bold">542</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-info text-white">
                <div class="card-body text-center py-4">
                    <h6 class="text-uppercase mb-2 opacity-75">System Uptime</h6>
                    <h2 class="mb-0 fw-bold">99.9%</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-5">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold"><i class="bi bi-people-fill me-2"></i>Employee Directory</h3>
                <div class="input-group w-50">
                    <input type="text" class="form-control" placeholder="Search name..." aria-label="Search">
                    <button class="btn btn-outline-secondary" type="button">Find</button>
                </div>
            </div>

            <div class="card shadow-sm border-0 overflow-hidden">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="py-3 ps-4">Employee</th>
                            <th>Role</th>
                            <th>Department</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4">
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">JP</div>
                                    <div>
                                        <div class="fw-bold">John Paul</div>
                                        <small class="text-muted">john.paul@company.com</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge rounded-pill bg-light text-dark border">Full-Stack Dev</span></td>
                            <td>Engineering</td>
                            <td class="text-end pe-4">
                                <button class="btn btn-sm btn-outline-primary me-1">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-footer bg-white py-3">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm mb-0 justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <h3 class="fw-bold mb-4">Latest Updates</h3>
            <div class="list-group shadow-sm mb-4">
                <a href="#" class="list-group-item list-group-item-action py-3">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1 fw-bold">New Mentors Onboarded</h6>
                        <small class="text-muted">3d ago</small>
                    </div>
                    <p class="mb-1 small text-muted">Top industry experts joined the computer science faculty.</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1 fw-bold">Platform Maintenance</h6>
                        <small class="text-muted">5d ago</small>
                    </div>
                    <p class="mb-1 small text-muted">Scheduled server upgrades completed successfully.</p>
                </a>
            </div>

            <div class="card bg-gradient bg-primary text-white border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="fw-bold">Need Support?</h5>
                    <p class="small opacity-75">Our dedicated team is available 24/7 to help you with technical difficulties.</p>
                    <a href="#" class="btn btn-light btn-sm fw-bold">Contact Support</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection