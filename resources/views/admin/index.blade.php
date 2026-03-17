@extends('Admin.layouts.master')

@section('title', 'Dashboard')
@section('content')
    <section>
        <div class="row g-6">

            <div class="col-lg-12 mb-3">
                <div class="card">
                    <div class="card-body pb-1">
                    <!-- Basic Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);" class="text-heading fw-bold">@lang('app.Admin')</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">@lang('app.Dashboard')</a>
                            </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- View sales -->
            <div class="col-xl-4">
                <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-7">
                    <div class="card-body text-nowrap">
                        <h5 class="card-title mb-0">Congratulations John! 🎉</h5>
                        <p class="mb-2">Best seller of the month</p>
                        <h4 class="text-primary mb-1">$48.9k</h4>
                        <a href="javascript:;" class="btn btn-primary">View Sales</a>
                    </div>
                    </div>
                    <div class="col-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{asset('assets/img/illustrations/card-advance-sale.png')}}" height="140" alt="view sales" />
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- View sales -->

            <!-- Statistics -->
            <div class="col-xl-8 col-md-12">
                <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">Statistics</h5>
                    <small class="text-body-secondary">Updated 1 month ago</small>
                </div>
                <div class="card-body d-flex align-items-end">
                    <div class="w-100">
                    <div class="row gy-3">
                        <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded bg-label-primary me-4 p-2">
                            <i class="icon-base ti tabler-chart-pie-2 icon-lg"></i>
                            </div>
                            <div class="card-info">
                            <h5 class="mb-0">230k</h5>
                            <small>Sales</small>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded bg-label-info me-4 p-2">
                            <i class="icon-base ti tabler-users icon-lg"></i>
                            </div>
                            <div class="card-info">
                            <h5 class="mb-0">8.549k</h5>
                            <small>Customers</small>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded bg-label-danger me-4 p-2">
                            <i class="icon-base ti tabler-shopping-cart icon-lg"></i>
                            </div>
                            <div class="card-info">
                            <h5 class="mb-0">1.423k</h5>
                            <small>Products</small>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded bg-label-success me-4 p-2">
                            <i class="icon-base ti tabler-currency-dollar icon-lg"></i>
                            </div>
                            <div class="card-info">
                            <h5 class="mb-0">$9745</h5>
                            <small>Revenue</small>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!--/ Statistics -->

            <!-- Profit last month -->
            <div class="col-xl-3 col-sm-6">
                <div class="card h-100">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-1">Profit</h5>
                    <p class="card-subtitle">Last Month</p>
                </div>
                <div class="card-body">
                    <div id="profitLastMonth"></div>
                    <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                    <h4 class="mb-0">624k</h4>
                    <small class="text-success">+8.24%</small>
                    </div>
                </div>
                </div>
            </div>
            <!--/ Profit last month -->

            <!-- Expenses -->
            <div class="col-xl-3 col-sm-6">
                <div class="card h-100">
                <div class="card-header pb-2">
                    <h5 class="card-title mb-1">82.5k</h5>
                    <p class="card-subtitle">Expenses</p>
                </div>
                <div class="card-body">
                    <div id="expensesChart"></div>
                    <div class="mt-3 text-center">
                    <small class="text-body-secondary mt-3">$21k Expenses more than last month</small>
                    </div>
                </div>
                </div>
            </div>
            <!--/ Expenses -->

            <!-- Average Daily Sales -->
            <div class="col-xl-3 col-sm-6">
                <div class="card h-100">
                <div class="card-header pb-0">
                    <h5 class="mb-3 card-title">Average Daily Sales</h5>
                    <p class="mb-0 text-body">Total Sales This Month</p>
                    <h4 class="mb-0">$28,450</h4>
                </div>
                <div class="card-body px-0">
                    <div id="averageDailySales"></div>
                </div>
                </div>
            </div>
            <!--/ Average Daily Sales -->

            <!-- Sales Overview -->
            <div class="col-xl-3 col-sm-6">
                <div class="card h-100">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                    <p class="mb-0 text-body">Sales Overview</p>
                    <p class="card-text fw-medium text-success">+18.2%</p>
                    </div>
                    <h4 class="card-title mb-1">$42.5k</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-4">
                        <div class="d-flex gap-2 align-items-center mb-2">
                        <span class="badge bg-label-info p-1 rounded"
                            ><i class="icon-base ti tabler-shopping-cart icon-sm"></i
                        ></span>
                        <p class="mb-0">Order</p>
                        </div>
                        <h5 class="mb-0 pt-1">62.2%</h5>
                        <small class="text-body-secondary">6,440</small>
                    </div>
                    <div class="col-4">
                        <div class="divider divider-vertical">
                        <div class="divider-text">
                            <span class="badge-divider-bg bg-label-secondary">VS</span>
                        </div>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                        <p class="mb-0">Visits</p>
                        <span class="badge bg-label-primary p-1 rounded"
                            ><i class="icon-base ti tabler-link icon-sm"></i
                        ></span>
                        </div>
                        <h5 class="mb-0 pt-1">25.5%</h5>
                        <small class="text-body-secondary">12,749</small>
                    </div>
                    </div>
                    <div class="d-flex align-items-center mt-6">
                    <div class="progress w-100" style="height: 10px">
                        <div
                        class="progress-bar bg-info"
                        style="width: 70%"
                        role="progressbar"
                        aria-valuenow="70"
                        aria-valuemin="0"
                        aria-valuemax="100"></div>
                        <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 30%"
                        aria-valuenow="30"
                        aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!--/ Sales Overview -->
            <div class="col-xxl-4 col-12">
                <div class="row g-6">
                

                <!-- Generated Leads -->
                <div class="col-xl-12">
                    <div class="card h-100">
                    <div class="card-body d-flex justify-content-between">
                        <div class="d-flex flex-column">
                        <div class="card-title mb-auto">
                            <h5 class="mb-0 text-nowrap">Generated Leads</h5>
                            <p class="mb-0">Monthly Report</p>
                        </div>
                        <div class="chart-statistics">
                            <h3 class="card-title mb-0">4,350</h3>
                            <p class="text-success text-nowrap mb-0">
                            <i class="icon-base ti tabler-chevron-up me-1"></i> 15.8%
                            </p>
                        </div>
                        </div>
                        <div id="generatedLeadsChart"></div>
                    </div>
                    </div>
                </div>
                <!--/ Generated Leads -->
                </div>
            </div>

            <!-- Revenue Report -->
            <div class="col-xxl-8">
                <div class="card h-100">
                <div class="card-body p-0">
                    <div class="row row-bordered g-0">
                    <div class="col-md-8 position-relative p-6">
                        <div class="card-header d-inline-block p-0 text-wrap position-absolute">
                        <h5 class="m-0 card-title">Revenue Report</h5>
                        </div>
                        <div id="totalRevenueChart" class="mt-n1"></div>
                    </div>
                    <div class="col-md-4 p-4">
                        <div class="text-center mt-5">
                        <div class="dropdown">
                            <button
                            class="btn btn-sm btn-label-primary dropdown-toggle"
                            type="button"
                            id="budgetId"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetId">
                            <a class="dropdown-item prev-year1" href="javascript:void(0);">
                                <script>
                                document.write(new Date().getFullYear() - 1);
                                </script>
                            </a>
                            <a class="dropdown-item prev-year2" href="javascript:void(0);">
                                <script>
                                document.write(new Date().getFullYear() - 2);
                                </script>
                            </a>
                            <a class="dropdown-item prev-year3" href="javascript:void(0);">
                                <script>
                                document.write(new Date().getFullYear() - 3);
                                </script>
                            </a>
                            </div>
                        </div>
                        </div>
                        <h3 class="text-center pt-8 mb-0">$25,825</h3>
                        <p class="mb-8 text-center"><span class="fw-medium text-heading">Budget: </span>56,800</p>
                        <div class="px-3">
                        <div id="budgetChart"></div>
                        </div>
                        <div class="text-center mt-8">
                        <button type="button" class="btn btn-primary">Increase Button</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!--/ Revenue Report -->

            

            <!-- Earning Reports -->
            <div class="col-md-6">
                <div class="card h-100">
                <div class="card-header pb-0 d-flex justify-content-between">
                    <div class="card-title mb-0">
                    <h5 class="mb-1">Earning Reports</h5>
                    <p class="card-subtitle">Weekly Earnings Overview</p>
                    </div>
                    <div class="dropdown">
                    <button
                        class="btn btn-text-secondary rounded-pill text-body-secondary border-0 p-2 me-n1"
                        type="button"
                        id="earningReportsId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <i class="icon-base ti tabler-dots-vertical icon-md text-body-secondary"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center g-md-8">
                    <div class="col-12 col-md-5 d-flex flex-column">
                        <div class="d-flex gap-2 align-items-center mb-3 flex-wrap">
                        <h2 class="mb-0">$468</h2>
                        <div class="badge rounded bg-label-success">+4.2%</div>
                        </div>
                        <small class="text-body">You informed of this week compared to last week</small>
                    </div>
                    <div class="col-12 col-md-7 ps-xl-8">
                        <div id="weeklyEarningReports"></div>
                    </div>
                    </div>
                    <div class="border rounded p-5 mt-5">
                    <div class="row gap-4 gap-sm-0">
                        <div class="col-12 col-sm-4">
                        <div class="d-flex gap-2 align-items-center">
                            <div class="badge rounded bg-label-primary p-1">
                            <i class="icon-base ti tabler-currency-dollar icon-18px"></i>
                            </div>
                            <h6 class="mb-0 fw-normal">Earnings</h6>
                        </div>
                        <h4 class="my-2">$545.69</h4>
                        <div class="progress w-75" style="height: 4px">
                            <div
                            class="progress-bar"
                            role="progressbar"
                            style="width: 65%"
                            aria-valuenow="65"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                        </div>
                        </div>
                        <div class="col-12 col-sm-4">
                        <div class="d-flex gap-2 align-items-center">
                            <div class="badge rounded bg-label-info p-1">
                            <i class="icon-base ti tabler-chart-pie-2 icon-18px"></i>
                            </div>
                            <h6 class="mb-0 fw-normal">Profit</h6>
                        </div>
                        <h4 class="my-2">$256.34</h4>
                        <div class="progress w-75" style="height: 4px">
                            <div
                            class="progress-bar bg-info"
                            role="progressbar"
                            style="width: 50%"
                            aria-valuenow="50"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                        </div>
                        </div>
                        <div class="col-12 col-sm-4">
                        <div class="d-flex gap-2 align-items-center">
                            <div class="badge rounded bg-label-danger p-1">
                            <i class="icon-base ti tabler-brand-paypal icon-18px"></i>
                            </div>
                            <h6 class="mb-0 fw-normal">Expense</h6>
                        </div>
                        <h4 class="my-2">$74.19</h4>
                        <div class="progress w-75" style="height: 4px">
                            <div
                            class="progress-bar bg-danger"
                            role="progressbar"
                            style="width: 65%"
                            aria-valuenow="65"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!--/ Earning Reports -->

            <!-- Support Tracker -->
            <div class="col-12 col-md-6">
                <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                    <h5 class="mb-1">Support Tracker</h5>
                    <p class="card-subtitle">Last 7 Days</p>
                    </div>
                    <div class="dropdown">
                    <button
                        class="btn btn-text-secondary rounded-pill text-body-secondary border-0 p-2 me-n1"
                        type="button"
                        id="supportTrackerMenu"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <i class="icon-base ti tabler-dots-vertical icon-md text-body-secondary"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                    </div>
                </div>
                <div class="card-body row">
                    <div class="col-12 col-sm-4">
                    <div class="mt-lg-4 mt-lg-2 mb-lg-6 mb-2">
                        <h2 class="mb-0">164</h2>
                        <p class="mb-0">Total Tickets</p>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex gap-4 align-items-center mb-lg-3 pb-1">
                        <div class="badge rounded bg-label-primary p-1_5">
                            <i class="icon-base ti tabler-ticket icon-md"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 text-nowrap">New Tickets</h6>
                            <small class="text-body-secondary">142</small>
                        </div>
                        </li>
                        <li class="d-flex gap-4 align-items-center mb-lg-3 pb-1">
                        <div class="badge rounded bg-label-info p-1_5">
                            <i class="icon-base ti tabler-circle-check icon-md"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                            <small class="text-body-secondary">28</small>
                        </div>
                        </li>
                        <li class="d-flex gap-4 align-items-center pb-1">
                        <div class="badge rounded bg-label-warning p-1_5">
                            <i class="icon-base ti tabler-clock icon-md"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 text-nowrap">Response Time</h6>
                            <small class="text-body-secondary">1 Day</small>
                        </div>
                        </li>
                    </ul>
                    </div>
                    <div class="col-12 col-md-8">
                    <div id="supportTracker"></div>
                    </div>
                </div>
                </div>
            </div>
            <!--/ Support Tracker -->

            <!-- Card Border Shadow -->
            <div class="col-lg-3 col-sm-6">
                <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-primary"
                        ><i class="icon-base ti tabler-truck icon-28px"></i
                        ></span>
                    </div>
                    <h4 class="mb-0">42</h4>
                    </div>
                    <p class="mb-1">On route vehicles</p>
                    <p class="mb-0">
                    <span class="text-heading fw-medium me-2">+18.2%</span>
                    <small class="text-body-secondary">than last week</small>
                    </p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card card-border-shadow-warning h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-warning"
                        ><i class="icon-base ti tabler-alert-triangle icon-28px"></i
                        ></span>
                    </div>
                    <h4 class="mb-0">8</h4>
                    </div>
                    <p class="mb-1">Vehicles with errors</p>
                    <p class="mb-0">
                    <span class="text-heading fw-medium me-2">-8.7%</span>
                    <small class="text-body-secondary">than last week</small>
                    </p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card card-border-shadow-danger h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-danger"
                        ><i class="icon-base ti tabler-git-fork icon-28px"></i
                        ></span>
                    </div>
                    <h4 class="mb-0">27</h4>
                    </div>
                    <p class="mb-1">Deviated from route</p>
                    <p class="mb-0">
                    <span class="text-heading fw-medium me-2">+4.3%</span>
                    <small class="text-body-secondary">than last week</small>
                    </p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card card-border-shadow-info h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-info"
                        ><i class="icon-base ti tabler-clock icon-28px"></i
                        ></span>
                    </div>
                    <h4 class="mb-0">13</h4>
                    </div>
                    <p class="mb-1">Late vehicles</p>
                    <p class="mb-0">
                    <span class="text-heading fw-medium me-2">-2.5%</span>
                    <small class="text-body-secondary">than last week</small>
                    </p>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@endsection
