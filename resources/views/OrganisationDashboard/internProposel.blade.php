@extends('layouts.organisationDashboard')

@section('content')
    <div class="container ">
        <table class="table mt-10" style="font-size: 20px;font-weight:600;">
            <thead>
                <tr>
                    <th scope="col">Intern Profile</th>
                    <th scope="col">Proposel</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($proposels as $proposel)
                    <tr>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href=""><img
                                                src="{{ asset('ProfilePhoto/' . $proposel->intern->profile_image) }}" alt=""
                                                style="width: 60px; height:60px;"
                                                class="avatar-md img-thumbnail rounded-circle"></a>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0"><a href=""
                                                class="primary-link">{{ $proposel->intern->first_name }}</a> </h5>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </td>
                        <td><a href="/organization/internship/{{ $proposel->internship->id }}/proposels/{{ $proposel->id }}"
                                class="btn btn-primary row">
                                <x-go-link-external-16 class="w-5 h-5" />
                            </a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>


    </div>
@endsection