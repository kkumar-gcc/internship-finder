@extends('layouts.organisationDashboard')

@section('content')
    <div class="container">
        @foreach ($proposels as $proposel)
            
        
        <div class="candidate-list-box card mt-4">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="candidate-list-images">
                            <a href="javascript:void(0)"><img src="{{ asset('ProfilePhoto/'.$proposel->intern->profile_image) }}" alt="" style="width: 100px; height:100px;"
                                    class="avatar-md img-thumbnail rounded-circle"></a>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-5">
                        <div class="candidate-list-content mt-3 mt-lg-0">
                            <h5 class="fs-19 mb-0"><a href="/organization/internship/{{ $proposel->internship->id}}/proposels/{{ $proposel->id}}" class="primary-link">{{ $proposel->intern->first_name}}</a> </h5>
                        </div>
                    </div>
                    <!--end col-->
                </div>
               
            </div>
        </div>
        @endforeach
    </div>
@endsection
