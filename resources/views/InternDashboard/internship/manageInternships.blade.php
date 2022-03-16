@extends('layouts.internDashboard')
@section('content')
    {{-- <section id="show-interns" class="ftco-section ftco-agent"> --}}

    <section class="section">
        <div class="container">
            @if (count($proposels) < 1)
                <div class="container text-center mt-20">
                    <div>
                        <div class="col-md-12">
                            <div class="error-template">
                                <h1>
                                    Oops!</h1>
                                <h2>
                                    No internship to manage</h2>
                                <div class="error-details p-4">
                                    You haven't applied for any internship!
                                </div>
                                <div class="error-actions">
                                    <a href="/intern/internships" class="btn btn-primary btn-lg"><span
                                            class="glyphicon glyphicon-home"></span>
                                        Search Internship </a><a href="/intern/organizations"
                                        class="btn btn-secondary btn-lg ml-8"><span
                                            class="glyphicon glyphicon-envelope"></span> View Organizations </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="">
                    <div class="m-4 mb-lg-0">
                        <h2 class="text-center"> My Job Listings </h2>
                    </div>
                </div>

                <div class="table-responsive">

                    <table class="table mt-10" style="font-size: 18px;font-weight:600;">
                        <thead>
                            <tr>
                                <th scope="col">company</th>
                                <th scope="col">profile</th>
                                <th scope="col">Applied on</th>
                                <th scope="col">Number of Applicants</th>
                                <th scope="col">Application status</th>
                                <th scope="col">Review Application</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proposels as $proposel)
                                {{-- href="/organization/internship/{{ $proposel->internship->id }}/proposels/{{ $proposel->id }}"
                                               {{ $proposel->intern->first_name }}</a> </h5> --}}
                                <tr>
                                    <td><a href="/intern/organizations/{{ $proposel->internship->organization->id }}"
                                            title="visit  '{{ $proposel->internship->organization->name }}'">{{ $proposel->internship->organization->name }}</a>
                                    </td>
                                    <td>{{ $proposel->internship->title }}<a
                                            href="/intern/internships/{{ $proposel->internship->id }}"
                                            title="visit  '{{ $proposel->internship->title }}'">
                                            <x-go-link-external-16 class="w-5 h-5" />
                                        </a></td>
                                    <td>{{ date('d M Y H:i A', strtotime($proposel->created_at)) }}</td>
                                    <td>{{ $proposel->internship->proposels->count() }}</td>
                                    <td>
                                        @if ($proposel->status == 'Blocked' || $proposel->status == 'Active')
                                            <a href="/intern/internship/{{ $proposel->internship_id }}/dashboard/{{ $proposel->id }}"
                                                class="btn btn-{{ $colors[$proposel->status] }}">internship dashboard</a>
                                        @else
                                            <span
                                                class="badge badge-{{ $colors[$proposel->status] }}">{{ $proposel->status }}</span>
                                        @endif
                                    </td>
                                    <td>review</td>
                                    {{-- <td> <button class="bedge btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#proposelCRead-{{ $proposel->id }}">Read</button> </td>
                                        <td> <button class="bedge btn btn-primary" data-bs-toggle="modal"
                                          data-bs-target="#proposelARead-{{ $proposel->id }}">Read</button></td>
                                        <td><button class="bedge btn btn-{{ $color }}" data-bs-toggle="modal"
                                                data-bs-target="#proposel-{{ $proposel->id }}">{{ $proposel->status }}</button></td> --}}
                                </tr>



                                {{-- <a href="company-details.html"><img
                                    src="{{ asset('ProfilePhoto') }}/i{{ $proposel->id % 26 }}.jpg" alt=""
                                    class="img-fluid rounded-3"></a>

                            {{ $proposel->internship->organization->name }} --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-12 mt-4 pt-2">
                <nav aria-label="Page navigation example p-4">
                    {{ $proposels->onEachSide(5)->links() }}
                </nav>
            </div>
            <!--end col-->
        </div><!-- end row -->
        @endif
        </div>
        <!--end container-->
    </section>



@endsection
