 
<!-- Extends template page-->
@extends('admin.layout.header')

<!-- Specify content -->
@section('content')
<h3 class="head-title">Dashboard</h3>

@if ($message = Session::get('success'))
<div class="alert alert-primary alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
    </button>
    <strong>Success!</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('failed'))
<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
    </button>
    <strong>Error!</strong> {{ $message }}
</div>
@endif

<div class="row">
    <div class="col-xl-12 box-warpper">
        <div class="row">
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card bg-primary-light">
                            <div class="card-body depostit-card">
                                <div class="depostit-card-media d-flex justify-content-between">
                                    <div>
                                        <h6 class="font-w400 mb-0">Tasks Not Finisheds</h6>
                                        <h3>20</h3>
                                    </div>
                                    <div class="icon-box">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_71_124)">
                                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M8 3V3.5C8 4.32843 8.67157 5 9.5 5H14.5C15.3284 5 16 4.32843 16 3.5V3H18C19.1046 3 20 3.89543 20 5V21C20 22.1046 19.1046 23 18 23H6C4.89543 23 4 22.1046 4 21V5C4 3.89543 4.89543 3 6 3H8Z" fill="#252525"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.875 15.75C10.6354 15.75 10.3958 15.6542 10.2042 15.4625L8.2875 13.5458C7.90417 13.1625 7.90417 12.5875 8.2875 12.2042C8.67083 11.8208 9.29375 11.8208 9.62917 12.2042L10.875 13.45L14.0375 10.2875C14.4208 9.90417 14.9958 9.90417 15.3792 10.2875C15.7625 10.6708 15.7625 11.2458 15.3792 11.6292L11.5458 15.4625C11.3542 15.6542 11.1146 15.75 10.875 15.75Z" fill="#252525"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11 2C11 1.44772 11.4477 1 12 1C12.5523 1 13 1.44772 13 2H14.5C14.7761 2 15 2.22386 15 2.5V3.5C15 3.77614 14.7761 4 14.5 4H9.5C9.22386 4 9 3.77614 9 3.5V2.5C9 2.22386 9.22386 2 9.5 2H11Z" fill="#252525"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_71_124">
                                                    <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="progress-box mt-0 custome-progress">
                                    <div class="d-flex justify-content-between">
                                        <p class="">Complete Task</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-white" style="width:60%; height:12px; border-radius:8px;" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card same-card-chart bg-danger-light diposit-bg">
                            <div class="card-body depostit-card p-0">
                                <div class="depostit-card-media d-flex justify-content-between pb-0">
                                    <div>
                                        <h6 class="mb-0 font-w400">Total Deposit</h6>
                                        <h3>$1200.00</h3>
                                    </div>
                                    <div class="icon-box rounded-circle">
                                        <svg width="15" height="15" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z" fill="#111828"/>
                                        </svg>
                                    </div>
                                </div>
                                <div id="NewExperience"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-warning-light">
                            <div class="card-header border-0 flex-wrap">
                                <div class="revenue-date">
                                    <h6 class="mb-0 font-w400">Revenue</h6>
                                    <h4 class="">$310.45</h4>
                                </div>
                                <div class="avatar-list avatar-list-stacked me-2">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="" />
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="" />
                                    <a href="app-profile-2.html"><span class="avatar avatar-md rounded-circle bg-white">25+</span></a>
                                </div>

                            </div>
                            <div class="card-body pb-0 pt-0 custome-tooltip d-flex align-items-center">
                                <div id="chartBar" class="chartBar"></div>
                                <div class="grouth">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="10" cy="10" r="10" fill="white"/>
                                        <g clip-path="url(#clip0_3_443)">
                                            <path opacity="0.3" d="M13.0641 7.54535C13.3245 7.285 13.3245 6.86289 13.0641 6.60254C12.8038 6.34219 12.3817 6.34219 12.1213 6.60254L6.46445 12.2594C6.2041 12.5197 6.2041 12.9419 6.46445 13.2022C6.7248 13.4626 7.14691 13.4626 7.40726 13.2022L13.0641 7.54535Z" fill="black"/>
                                            <path d="M7.40729 7.26921C7.0391 7.26921 6.74062 6.97073 6.74062 6.60254C6.74062 6.23435 7.0391 5.93587 7.40729 5.93587H13.0641C13.4211 5.93587 13.7147 6.21699 13.7302 6.57358L13.9659 11.9947C13.9819 12.3626 13.6966 12.6737 13.3288 12.6897C12.961 12.7057 12.6498 12.4205 12.6338 12.0526L12.4258 7.26921H7.40729Z" fill="black"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3_444">
                                                <rect width="16" height="16" fill="white" transform="matrix(-1 0 0 -1 18 18)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="d-block font-w600 text-black mt-1">45%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-info-light">
                            <div class="card-header border-0 flex-wrap">
                                <div class="revenue-date">
                                    <h6 class="mb-0 font-w400">Expenses</h6>
                                    <h4 class="">$310.45</h4>
                                </div>
                                <a href="#" class="diposit-bg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <div class="icon-box  rounded-circle">
                                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83333 6.08333V1.41667C5.83333 0.772334 6.35567 0.25 7 0.25C7.64433 0.25 8.16667 0.772334 8.16667 1.41667V6.08333H12.8333C13.4777 6.08333 14 6.60567 14 7.25C14 7.89433 13.4777 8.41667 12.8333 8.41667H8.16667V13.0833C8.16667 13.7277 7.64433 14.25 7 14.25C6.35567 14.25 5.83333 13.7277 5.83333 13.0833V8.41667H1.16667C0.522334 8.41667 0 7.89433 0 7.25C0 6.60567 0.522334 6.08333 1.16667 6.08333H5.83333Z" fill="#222B40"/>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body pb-0 pt-0 custome-tooltip d-flex align-items-center">
                                <div id="expensesChart" class="chartBar"></div>
                                <div class="grouth"> 
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="10" cy="10" r="10" fill="white"/>
                                        <g clip-path="url(#clip0_3_443)">
                                            <path opacity="0.3" d="M13.0641 7.54535C13.3245 7.285 13.3245 6.86289 13.0641 6.60254C12.8038 6.34219 12.3817 6.34219 12.1213 6.60254L6.46445 12.2594C6.2041 12.5197 6.2041 12.9419 6.46445 13.2022C6.7248 13.4626 7.14691 13.4626 7.40726 13.2022L13.0641 7.54535Z" fill="black"/>
                                            <path d="M7.40729 7.26921C7.0391 7.26921 6.74062 6.97073 6.74062 6.60254C6.74062 6.23435 7.0391 5.93587 7.40729 5.93587H13.0641C13.4211 5.93587 13.7147 6.21699 13.7302 6.57358L13.9659 11.9947C13.9819 12.3626 13.6966 12.6737 13.3288 12.6897C12.961 12.7057 12.6498 12.4205 12.6338 12.0526L12.4258 7.26921H7.40729Z" fill="black"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3_443">
                                                <rect width="16" height="16" fill="white" transform="matrix(-1 0 0 -1 18 18)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="d-block font-w600 text-black mt-1">45%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card overflow-hidden">
                    <div class="card-header border-0 pb-0 flex-wrap">
                        <h4 class="card-title mb-0">Projects Overview</h4>
                        <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab"  aria-selected="true">Week</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab"  aria-selected="false">Month</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab"  aria-selected="false">Year</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body custome-tooltip p-0">
                        <div id="overiewChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Profile </h4>
                        <div class="dropdown custom-dropdown mb-0">
                            <div class="btn sharp btn-primary light tp-btn" data-bs-toggle="dropdown">
                                <svg width="6" height="15" viewBox="0 0 6 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z" fill="#000000"/>
                                </svg>
                            </div>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="projectChart" class="project-chart"></div>
                        <div class="project-date">
                            <div class="project-media">
                                <p class="mb-0">
                                    <svg class="me-2" width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1.5" y="1.9248" width="14" height="14" rx="7" fill="white" stroke="var(--primary-light)" stroke-width="3"/>
                                    </svg>
                                    Male
                                </p>
                                <span>50%</span>
                            </div>	
                            <div class="project-media">
                                <p class="mb-0">
                                    <svg class="me-2" width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1.5" y="1.9248" width="14" height="14" rx="7" fill="white" stroke="#F4CF0C" stroke-width="3"/>
                                    </svg>
                                    Female
                                </p>
                                <span>20%</span>
                            </div>
                            <div class="project-media">
                                <p class="mb-0">
                                    <svg class="me-2" width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1.5" y="1.9248" width="14" height="14" rx="7" fill="white" stroke="#FF7C7C" stroke-width="3"/>
                                    </svg>
                                    Other
                                </p>
                                <span>30%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-md-12">
                <div class="card overflow-hidden mandal-map">
                    <div class="card-header">
                        <h4 class="card-title">Active users</h4>
                    </div>
                    <div class="card-body pt-0  ps-2">
                        <div class="row">
                            <div class="col-xl-8 active-map-main col-sm-7">
                                <div id="world-map" class="active-map"></div>  
                            </div>
                            <div class="col-xl-4 impressionbox col-sm-5">
                                <h4 class="card-title left-title">Weekly</h4>
                                <div class="d-flex justify-content-between">
                                    <div class="wickly-update">
                                        <small>This Week</small>
                                        <h6 class="text-primary">+ 20%</h6>
                                    </div>
                                    <div class="wickly-update">
                                        <small>Last Week</small>
                                        <h6 class="text-warning">+ 20%</h6>
                                    </div>
                                </div>
                                <h5 class="fs-16 font-w700 mt-3">Impression</h5>
                                <div id="impressionChart" class="impression"></div>
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <h5 class="mb-0 fs-18 font-w700">12.345%</h5>
                                    <p class="mb-0"><span class="text-primary font-w700">5.4%</span> than last year</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects">
                            <div class="tbl-caption">
                                <h4 class="card-title mb-0">Active Projects</h4>
                            </div>
                            <table id="projects-tbl" class="table">
                                <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Project Lead</th>
                                        <th>Progress</th>
                                        <th>Assignee</th>
                                        <th>Status</th>
                                        <th>Due Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Yash-Admin</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="" />
                                                <p class="mb-0 ms-2">Liam Risher</p>	
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="progress-box tbl-progress-box">
                                                <div class="progress">
                                                    <div class="progress-bar bg-success-light" style="width:60%; height:10px; border-radius:8px;" role="progressbar"></div>
                                                </div>
                                                <span class="text-success">53%</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="" />
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <span class="badge badge-sm badge-success light border-0">Completed</span>
                                        </td>
                                        <td>
                                            <span>07 Oct 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CRM Project</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="images/contacts/pic2.jpg" class="avatar rounded-circle" alt="" />
                                                <p class="mb-0 ms-2">Oliver Noah</p>	
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="progress-box tbl-progress-box">
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger-light" style="width:60%; height:10px; border-radius:8px;" role="progressbar"></div>
                                                </div>
                                                <span class="danger-text">53%</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="" />
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <span class="badge badge-sm badge-danger light border-0">Pending</span>
                                        </td>
                                        <td>
                                            <span>08 Nov 2022</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EasyLife</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="images/contacts/pic888.jpg" class="avatar rounded-circle" alt="" />
                                                <p class="mb-0 ms-2">Elijah James</p>	
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="progress-box tbl-progress-box">
                                                <div class="progress">
                                                    <div class="progress-bar bg-success-light" style="width:55%; height:10px; border-radius:8px;" role="progressbar"></div>
                                                </div>
                                                <span class="text-success">55%</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="images/contacts/pic666.jpg" class="avatar  rounded-circle" alt="" />
                                                <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic666.jpg" class="avatar  rounded-circle" alt="" />
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <span class="badge badge-sm badge-success light border-0">Completed</span>
                                        </td>
                                        <td>
                                            <span>10 Mar 2023</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Zapalo</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="" />
                                                <p class="mb-0 ms-2">William Risher</p>	
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="progress-box tbl-progress-box">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary-light" style="width:40%; height:10px; border-radius:8px;" role="progressbar"></div>
                                                </div>
                                                <span class="text-primary">40%</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="" />
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <span class="badge badge-sm badge-primary light border-0">Inprogress</span>
                                        </td>
                                        <td>
                                            <span>06 Oct 2020</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BodyClub</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="images/contacts/pic777.jpg" class="avatar rounded-circle" alt="" />
                                                <p class="mb-0 ms-2">Donald Benjamin</p>	
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="progress-box tbl-progress-box">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary-light" style="width:45%; height:10px; border-radius:8px;" role="progressbar"></div>
                                                </div>
                                                <span class="text-primary">45%</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic777.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="" />
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <span class="badge badge-sm badge-primary light border-0">Inprogress</span>
                                        </td>
                                        <td>
                                            <span>06 Sep 2021</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lezato</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="images/contacts/pic888.jpg" class="avatar rounded-circle" alt="" />
                                                <p class="mb-0 ms-2">Liam Risher</p>	
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="progress-box tbl-progress-box">
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger-light" style="width:35%; height:10px; border-radius:8px;" role="progressbar"></div>
                                                </div>
                                                <span class="text-danger">35%</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="images/contacts/pic777.jpg" class="avatar  rounded-circle" alt="" />
                                                <img src="images/contacts/pic555.jpg" class="avatar  rounded-circle" alt="" />
                                                <img src="images/contacts/pic666.jpg" class="avatar  rounded-circle" alt="" />
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <span class="badge badge-sm badge-danger light border-0">Pending</span>
                                        </td>
                                        <td>
                                            <span>06 Sep 2021</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Owlio</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="images/contacts/pic2.jpg" class="avatar rounded-circle" alt="" />
                                                <p class="mb-0 ms-2">Oliver Noah</p>	
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="progress-box tbl-progress-box">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary-light" style="width:35%; height:10px; border-radius:8px;" role="progressbar"></div>
                                                </div>
                                                <span class="text-primary">35%</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic777.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic666.jpg" class="avatar rounded-circle" alt="" />
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <span class="badge badge-sm badge-primary light border-0">Completed</span>
                                        </td>
                                        <td>
                                            <span>06 Sep 2021</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>JobZilla</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="images/contacts/pic999.jpg" class="avatar rounded-circle" alt="" />
                                                <p class="mb-0 ms-2">Elijah James</p>	
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="progress-box tbl-progress-box">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary-light" style="width:35%; height:10px; border-radius:8px;" role="progressbar"></div>
                                                </div>
                                                <span class="text-primary">35%</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="images/contacts/pic666.jpg" class="avatar  rounded-circle" alt="" />
                                                <img src="images/contacts/pic555.jpg" class="avatar  rounded-circle" alt="" />
                                                <img src="images/contacts/pic1.jpg" class="avatar  rounded-circle" alt="" />
                                                <img src="images/contacts/pic666.jpg" class="avatar  rounded-circle" alt="" />
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <span class="badge badge-sm badge-primary light border-0">Completed</span>
                                        </td>
                                        <td>
                                            <span>06 Sep 2021</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CryptoZone</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="images/contacts/pic2.jpg" class="avatar rounded-circle" alt="" />
                                                <p class="mb-0 ms-2">Lucas</p>	
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="progress-box tbl-progress-box">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary-light" style="width:35%; height:10px; border-radius:8px;" role="progressbar"></div>
                                                </div>
                                                <span class="text-primary">35%</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="images/contacts/pic1.jpg" class="avatar  rounded-circle" alt="" />
                                                <img src="images/contacts/pic555.jpg" class="avatar  rounded-circle" alt="" />
                                                <img src="images/contacts/pic999.jpg" class="avatar  rounded-circle" alt="" />
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <span class="badge badge-sm badge-primary light border-0">Inprogress</span>
                                        </td>
                                        <td>
                                            <span>06 Sep 2021</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bookland</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="" />
                                                <p class="mb-0 ms-2">William Risher</p>	
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="progress-box tbl-progress-box">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary-light" style="width:55%; height:10px; border-radius:8px;" role="progressbar"></div>
                                                </div>
                                                <span class="primary-text">55%</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="images/contacts/pic1.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic555.jpg" class="avatar rounded-circle" alt="" />
                                                <img src="images/contacts/pic999.jpg" class="avatar rounded-circle" alt="" />
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <span class="badge badge-sm badge-primary light border-0">Inprogress</span>
                                        </td>
                                        <td>
                                            <span>06 Sep 2021</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-header flex-wrap">
                        <div>
                            <h4 class="card-title">My To Do Items</h4>
                        </div>	
                        <div class="d-flex">
                            <a href="contacts.html" class="btn btn-link text-primary btn-sm">View All</a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btn btn-link text-info btn-sm text-black">+ Add To Do</a>
                        </div>
                    </div>
                    <div class="card-body p-0 pb-3">
                        <div class="dt-do-bx">
                            <div class="draggable-zone dropzoneContainer to-dodroup dz-scroll">
                                <div class="sub-card draggable-handle draggable">
                                    <div class="d-items">
                                        <span class="text-warning dang d-block mb-2">
                                            <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.61051 15.3276H14.3978C15.5843 15.3276 16.329 14.0451 15.7395 13.0146L10.35 3.59085C9.75676 2.5536 8.26126 2.55285 7.66726 3.5901L2.26876 13.0139C1.67926 14.0444 2.42326 15.3276 3.61051 15.3276Z" stroke="#FF9F00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9.00189 10.0611V7.7361" stroke="#FF9F00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.99625 12.375H9.00375" stroke="#FF9F00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Latest to do's
                                        </span>
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="d-items-2">
                                                <div class="svg-icon">
                                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="1" height="1" fill="#888888"/>
                                                        <rect y="3" width="1" height="1" fill="#888888"/>
                                                        <rect y="6" width="1" height="1" fill="#888888"/>
                                                        <rect y="9" width="1" height="1" fill="#888888"/>
                                                        <rect y="12" width="1" height="1" fill="#888888"/>
                                                        <rect y="15" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="3" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="6" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="9" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="12" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="15" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="3" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="6" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="9" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="12" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="15" width="1" height="1" fill="#888888"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                            <label class="form-check-label" for="customCheckBox1">Compete this projects</label>
                                                    </div>
                                                    <span>2023-12-26 07:15:00</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="icon-box icon-box-sm bg-danger-light me-1">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M13.8055 4.1598H2.50012" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                                <div class="icon-box icon-box-sm bg-primary-light">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.16492 13.6286H14" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.34723 4.00059L10.9821 6.79201" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>	
                                    </div>
                                </div>
                                <div class="sub-card draggable-handle draggable">
                                    <div class="d-items">
                                        <span class="text-success dang d-block mb-2">
                                            <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 4.5L6.75 12.75L3 9" stroke="#3AC977" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Latest finished to do's
                                        </span>
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="d-items-2">
                                                <div class="svg-icon">
                                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="1" height="1" fill="#888888"/>
                                                        <rect y="3" width="1" height="1" fill="#888888"/>
                                                        <rect y="6" width="1" height="1" fill="#888888"/>
                                                        <rect y="9" width="1" height="1" fill="#888888"/>
                                                        <rect y="12" width="1" height="1" fill="#888888"/>
                                                        <rect y="15" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="3" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="6" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="9" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="12" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="15" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="3" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="6" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="9" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="12" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="15" width="1" height="1" fill="#888888"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox2" required>
                                                            <label class="form-check-label" for="customCheckBox2">Lorem Ipsum is simply</label>
                                                    </div>
                                                    <span>2023-12-26 07:15:00</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="icon-box icon-box-sm bg-danger-light me-1">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M13.8055 4.1598H2.50012" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                                <div class="icon-box icon-box-sm bg-primary-light">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.16492 13.6286H14" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.34723 4.00059L10.9821 6.79201" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>	
                                    </div>
                                </div>
                                <div class="sub-card draggable-handle draggable">
                                    <div class="d-items">
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="d-items-2">
                                                <div class="svg-icon">
                                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="1" height="1" fill="#888888"/>
                                                        <rect y="3" width="1" height="1" fill="#888888"/>
                                                        <rect y="6" width="1" height="1" fill="#888888"/>
                                                        <rect y="9" width="1" height="1" fill="#888888"/>
                                                        <rect y="12" width="1" height="1" fill="#888888"/>
                                                        <rect y="15" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="3" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="6" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="9" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="12" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="15" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="3" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="6" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="9" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="12" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="15" width="1" height="1" fill="#888888"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox3" required>
                                                            <label class="form-check-label" for="customCheckBox3">Compete this projects</label>
                                                    </div>
                                                    <span>2023-12-26 07:15:00</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="icon-box icon-box-sm bg-danger-light me-1">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M13.8055 4.1598H2.50012" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                                <div class="icon-box icon-box-sm bg-primary-light">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.16492 13.6286H14" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.34723 4.00059L10.9821 6.79201" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>	
                                    </div>
                                </div>
                                <div class="sub-card draggable-handle draggable">
                                    <div class="d-items">
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="d-items-2">
                                                <div class="svg-icon">
                                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="1" height="1" fill="#888888"/>
                                                        <rect y="3" width="1" height="1" fill="#888888"/>
                                                        <rect y="6" width="1" height="1" fill="#888888"/>
                                                        <rect y="9" width="1" height="1" fill="#888888"/>
                                                        <rect y="12" width="1" height="1" fill="#888888"/>
                                                        <rect y="15" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="3" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="6" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="9" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="12" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="15" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="3" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="6" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="9" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="12" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="15" width="1" height="1" fill="#888888"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox4" required>
                                                            <label class="form-check-label" for="customCheckBox4">Lorem Ipsum has been</label>
                                                    </div>
                                                    <span>2023-12-26 07:15:00</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="icon-box icon-box-sm bg-danger-light me-1">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M13.8055 4.1598H2.50012" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                                <div class="icon-box icon-box-sm bg-primary-light">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.16492 13.6286H14" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.34723 4.00059L10.9821 6.79201" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>	
                                    </div>
                                </div>
                                <div class="sub-card draggable-handle draggable">
                                    <div class="d-items">
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="d-items-2">
                                                <div class="svg-icon">
                                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="1" height="1" fill="#888888"/>
                                                        <rect y="3" width="1" height="1" fill="#888888"/>
                                                        <rect y="6" width="1" height="1" fill="#888888"/>
                                                        <rect y="9" width="1" height="1" fill="#888888"/>
                                                        <rect y="12" width="1" height="1" fill="#888888"/>
                                                        <rect y="15" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="3" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="6" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="9" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="12" width="1" height="1" fill="#888888"/>
                                                        <rect x="4" y="15" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="3" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="6" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="9" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="12" width="1" height="1" fill="#888888"/>
                                                        <rect x="8" y="15" width="1" height="1" fill="#888888"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox5" required>
                                                            <label class="form-check-label" for="customCheckBox5">The industry's standard</label>
                                                    </div>
                                                    <span>2023-12-26 07:15:00</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="icon-box icon-box-sm bg-danger-light me-1">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M13.8055 4.1598H2.50012" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                                <div class="icon-box icon-box-sm bg-primary-light">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.16492 13.6286H14" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.34723 4.00059L10.9821 6.79201" stroke="#111828" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>	
                                    </div>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <h4 class="card-title my-2 mb-3 fs-20">User Reviews</h4>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h6>Belle Epoque</h6>
                                        <div class="star-rating ms-3">
                                            <ul>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.54894 1.42705C7.8483 0.505742 9.1517 0.505739 9.45106 1.42705L10.6329 5.06434C10.7668 5.47636 11.1507 5.75532 11.5839 5.75532H15.4084C16.3771 5.75532 16.7799 6.99494 15.9962 7.56434L12.9021 9.81231C12.5516 10.0669 12.405 10.5183 12.5389 10.9303L13.7207 14.5676C14.02 15.4889 12.9656 16.2551 12.1818 15.6857L9.08779 13.4377C8.7373 13.1831 8.2627 13.1831 7.91222 13.4377L4.81815 15.6857C4.03444 16.2551 2.97996 15.4889 3.27931 14.5676L4.46114 10.9303C4.59501 10.5183 4.44835 10.0669 4.09787 9.81231L1.00381 7.56434C0.220092 6.99494 0.622867 5.75532 1.59159 5.75532H5.41606C5.84929 5.75532 6.23324 5.47636 6.36712 5.06434L7.54894 1.42705Z" fill="#E4E4E4"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.54894 1.42705C7.8483 0.505742 9.1517 0.505739 9.45106 1.42705L10.6329 5.06434C10.7668 5.47636 11.1507 5.75532 11.5839 5.75532H15.4084C16.3771 5.75532 16.7799 6.99494 15.9962 7.56434L12.9021 9.81231C12.5516 10.0669 12.405 10.5183 12.5389 10.9303L13.7207 14.5676C14.02 15.4889 12.9656 16.2551 12.1818 15.6857L9.08779 13.4377C8.7373 13.1831 8.2627 13.1831 7.91222 13.4377L4.81815 15.6857C4.03444 16.2551 2.97996 15.4889 3.27931 14.5676L4.46114 10.9303C4.59501 10.5183 4.44835 10.0669 4.09787 9.81231L1.00381 7.56434C0.220092 6.99494 0.622867 5.75532 1.59159 5.75532H5.41606C5.84929 5.75532 6.23324 5.47636 6.36712 5.06434L7.54894 1.42705Z" fill="#E4E4E4"/>
                                                    </svg>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <p class="user-comment">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been electronic.
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h6>Nagita Almania</h6>
                                        <div class="star-rating ms-3">
                                            <ul>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <p class="user-comment">
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when unchanged an unknown
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h6>Esmeralda Striff</h6>
                                        <div class="star-rating ms-3">
                                            <ul>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.54894 1.42705C7.8483 0.505742 9.1517 0.505739 9.45106 1.42705L10.6329 5.06434C10.7668 5.47636 11.1507 5.75532 11.5839 5.75532H15.4084C16.3771 5.75532 16.7799 6.99494 15.9962 7.56434L12.9021 9.81231C12.5516 10.0669 12.405 10.5183 12.5389 10.9303L13.7207 14.5676C14.02 15.4889 12.9656 16.2551 12.1818 15.6857L9.08779 13.4377C8.7373 13.1831 8.2627 13.1831 7.91222 13.4377L4.81815 15.6857C4.03444 16.2551 2.97996 15.4889 3.27931 14.5676L4.46114 10.9303C4.59501 10.5183 4.44835 10.0669 4.09787 9.81231L1.00381 7.56434C0.220092 6.99494 0.622867 5.75532 1.59159 5.75532H5.41606C5.84929 5.75532 6.23324 5.47636 6.36712 5.06434L7.54894 1.42705Z" fill="#E4E4E4"/>
                                                    </svg>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <p class="user-comment">
                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center review-slider">
                                        <h6>Belle Epoque</h6>
                                        <div class="star-rating ms-3">
                                            <ul>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>

                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.97553 1.58156L10.1574 5.21885C10.3582 5.83688 10.9341 6.25532 11.5839 6.25532H15.4084C15.8928 6.25532 16.0942 6.87513 15.7023 7.15983L12.6082 9.4078C12.0825 9.78976 11.8625 10.4668 12.0633 11.0848L13.2452 14.7221C13.3948 15.1828 12.8676 15.5659 12.4757 15.2812L9.38168 13.0332C8.85595 12.6512 8.14405 12.6512 7.61832 13.0332L4.52426 15.2812C4.1324 15.5659 3.60516 15.1828 3.75484 14.7221L4.93667 11.0848C5.13748 10.4668 4.91749 9.78976 4.39176 9.4078L1.2977 7.15983C0.905841 6.87513 1.10723 6.25532 1.59159 6.25532H5.41606C6.0659 6.25532 6.64183 5.83688 6.84265 5.21885L8.02447 1.58156C8.17415 1.1209 8.82585 1.12091 8.97553 1.58156Z" fill="#FFF37A" stroke="black"/>
                                                    </svg>

                                                </li>
                                                <li>
                                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.54894 1.42705C7.8483 0.505742 9.1517 0.505739 9.45106 1.42705L10.6329 5.06434C10.7668 5.47636 11.1507 5.75532 11.5839 5.75532H15.4084C16.3771 5.75532 16.7799 6.99494 15.9962 7.56434L12.9021 9.81231C12.5516 10.0669 12.405 10.5183 12.5389 10.9303L13.7207 14.5676C14.02 15.4889 12.9656 16.2551 12.1818 15.6857L9.08779 13.4377C8.7373 13.1831 8.2627 13.1831 7.91222 13.4377L4.81815 15.6857C4.03444 16.2551 2.97996 15.4889 3.27931 14.5676L4.46114 10.9303C4.59501 10.5183 4.44835 10.0669 4.09787 9.81231L1.00381 7.56434C0.220092 6.99494 0.622867 5.75532 1.59159 5.75532H5.41606C5.84929 5.75532 6.23324 5.47636 6.36712 5.06434L7.54894 1.42705Z" fill="#E4E4E4"/>
                                                    </svg>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <p class="user-comment">
                                        Sed eligendi facere repellendus. Ipsam ipsam incidunt minima harum tenetur. Ab sit asperiores architecto repudiandae.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="calendar-warpper">
        <div class="card">
            <div class="my-calendar dz-scroll event-scroll">
                <div class="card-body schedules-cal p-2">
                    <input type="text" class="form-control d-none" id="datetimepicker1" />
                    <div class="events">
                        <h6>events</h6>
                        <div class="">
                            <div class="event-media">
                                <div class="d-flex align-items-center">
                                    <div class="event-box">
                                        <h5 class="mb-0">20</h5>
                                        <span class="text-black">Tue</span>
                                    </div>
                                    <div class="event-data ms-2">
                                        <h5 class="mb-0"><a href="contacts.html">Development planning</a></h5>
                                        <span>w3it Technologies</span>
                                    </div>
                                </div>
                                <span class="">12:05 PM</span>
                            </div>
                            <div class="event-media">
                                <div class="d-flex align-items-center">
                                    <div class="event-box">
                                        <h5 class="mb-0">03</h5>
                                        <span class="text-black">Wed</span>
                                    </div>
                                    <div class="event-data ms-2">
                                        <h5 class="mb-0"><a href="contacts.html">Desinging planning</a></h5>
                                        <span>w3it Technologies</span>
                                    </div>
                                </div>
                                <span class="">05:05 AM</span>
                            </div>
                            <div class="event-media">
                                <div class="d-flex align-items-center">
                                    <div class="event-box">
                                        <h5 class="mb-0">05</h5>
                                        <span class="text-black">Tue</span>
                                    </div>
                                    <div class="event-data ms-2">
                                        <h5 class="mb-0"><a href="contacts.html">Frontend Designing</a></h5>
                                        <span>w3it Technologies</span>
                                    </div>
                                </div>
                                <span class="">03:06 PM</span>
                            </div>
                            <div class="event-media">
                                <div class="d-flex align-items-center">
                                    <div class="event-box">
                                        <h5 class="mb-0">21</h5>
                                        <span class="text-black">Thu</span>
                                    </div>
                                    <div class="event-data ms-2">
                                        <h5 class="mb-0"><a href="contacts.html">Software planning</a></h5>
                                        <span>w3it Technologies</span>
                                    </div>
                                </div>
                                <span class="">06:05 AM</span>
                            </div>	
                        </div>	
                    </div>
                    <div class="contacts-group">	
                        <div class="group-list d-flex align-items-center justify-content-between">
                            <h6 class="mb-0">Contacts</h6>
                            <a href="contacts.html" class="btn-link text-primary">View All</a>
                        </div>	
                        <div>
                            <div class="friend-list1">
                                <div class="d-flex">
                                    <a href="contacts.html">
                                        <div class="friend-user">
                                            <img src="images/profile/friends/f3.jpg" class="avatar avatar-lg" alt="" />
                                            <p>Tony</p>
                                        </div>
                                    </a>	
                                    <a href="contacts.html">
                                        <div class="friend-user">
                                            <img src="images/contacts/pic2.jpg" class="avatar avatar-lg" alt="" />
                                            <p>Lucas</p>
                                        </div>
                                    </a>	
                                    <a href="contacts.html">
                                        <div class="friend-user">
                                            <img src="images/contacts/pic3.jpg" class="avatar avatar-lg" alt="" />
                                            <p>Oliver</p>
                                        </div>
                                    </a>
                                    <a href="contacts.html">	
                                        <div class="friend-user">
                                            <img src="images/profile/friends/f2.jpg" class="avatar avatar-lg" alt="" />
                                            <p>Karen</p>
                                        </div>
                                    </a>	
                                </div>
                                <div class="d-flex">
                                    <a href="contacts.html">
                                        <div class="friend-user">
                                            <img src="images/contacts/pic1.jpg" class="avatar avatar-lg" alt="" />
                                            <p>Donald</p>
                                        </div>	
                                    </a>
                                    <a href="contacts.html">															
                                        <div class="friend-user">
                                            <img src="images/contacts/d4.jpg" class="avatar avatar-lg" alt="" />
                                            <p>Elijah</p>
                                        </div>
                                    </a>
                                    <a href="contacts.html">	
                                        <div class="friend-user">
                                            <img src="images/profile/friends/f4.jpg" class="avatar avatar-lg" alt="" />
                                            <p>Lucas</p>
                                        </div>
                                    </a>	
                                    <a href="contacts.html">
                                        <div class="friend-user">
                                            <img src="images/profile/friends/f1.jpg" class="avatar avatar-lg" alt="" />
                                            <p>Karen</p>
                                        </div>
                                    </a>	
                                </div>
                            </div>
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
</div>



@stop

