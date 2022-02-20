@extends('layouts.organisationDashboard')

@section('content')
    <div class="container">
        <div class="candidate-list-box card mt-4">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="candidate-list-images">
                            <a href="javascript:void(0)"><img src="assets/images/user/img-01.jpg" alt=""
                                    class="avatar-md img-thumbnail rounded-circle"></a>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-5">
                        <div class="candidate-list-content mt-3 mt-lg-0">
                            <h5 class="fs-19 mb-0"><a href="candidate-details.html" class="primary-link">Charles
                                    Dickens</a> <span class="badge bg-success ms-1"><i
                                        class="mdi mdi-star align-middle"></i> 4.8</span></h5>
                            <p class="text-muted mb-2"> Project Manager</p>
                            <ul class="list-inline mb-0 text-muted">
                                <li class="list-inline-item">
                                    <i class="mdi mdi-map-marker"></i> Oakridge Lane Richardson
                                </li>
                                <li class="list-inline-item">
                                    <i class="uil uil-wallet"></i> $650 / hours
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-4">
                        <div class="mt-2 mt-lg-0">
                            <span class="badge bg-soft-muted fs-14 mt-1">Leader</span> <span
                                class="badge bg-soft-muted fs-14 mt-1">Manager</span>
                            <span class="badge bg-soft-muted fs-14 mt-1">Developer</span>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="favorite-icon">
                    <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                </div>
            </div>
        </div>

    </div>
@endsection