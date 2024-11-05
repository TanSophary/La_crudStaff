@extends('menu')
@section('dashboard')
    <div class="col-md-9 col-lg-10">
            <div class="container mt-4">
                <!-- Welcome Message -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="display-4" style="font-weight: 700; color: #4a4a4a;">Welcome! This is the Dashboard</h1>
                </div>

                <!-- Dashboard Cards -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Total Employees</h5>
                                <p class="card-text display-5 text-primary">150</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Active Projects</h5>
                                <p class="card-text display-5 text-primary">8</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Pending Tasks</h5>
                                <p class="card-text display-5 text-primary">23</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Content -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Recent Activities</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">John Doe completed a task</li>
                                    <li class="list-group-item">New employee added: Jane Smith</li>
                                    <li class="list-group-item">Project X updated</li>
                                    <!-- More activities -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Performance Chart</h5>
                                <div class="chart-placeholder bg-light d-flex justify-content-center align-items-center" style="height: 200px;">
                                    <p class="text-muted">Chart placeholder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
