@extends('layouts.internDashboard')
@section('style')

@endsection
@section('content')
<section id="show-interns" class="ftco-section ftco-agent ">
    <div class="show-container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">organizations</span>
                <h2 class="mb-4">Meet Various Organizations</h2>
            </div>
        </div>
        
        @foreach($organizations->chunk(3) as $chunk)
        <div class="row justify-content-center">
            @foreach($chunk as $organization)
           
            <div class="col-lg-4 col-md-12">
                <div class="card  show-card">
                    <div class="card-body show-card-body">
                        {{-- <div class="featured-label">
                            <span class="featured">4.9 <i class="mdi mdi-star-outline"></i></span>
                        </div> --}}
                        <img src="{{asset ('ProfilePhoto')}}/i{{$organization->id%26}}.jpg" alt="">
                        <div class="mt-4 mb-4">
                            <a href="company-details.html" class="primary-link"><h6 class="fs-18 mb-2">{{$organization->name}}</h6></a>
                            <p class="text-muted mb-4">New York</p>

                            <a href="/intern/organizations/{{ $organization->id }}" class="btn btn-primary show-card-btn">{{ $organization->internships->count() }} Opening Internships</a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            @endforeach
        </div>
        @endforeach
        <div class="row">
            <div class="col-lg-12 mt-4 pt-2">
                <nav aria-label="Page navigation example p-4">
                    {{ $organizations->onEachSide(5)->links() }}
                </nav>
            </div>
            <!--end col-->
        </div><!-- end row -->
    </div>
</section>
@endsection