@extends('layouts.organisationDashboard')

@section('content')
    {{-- Modal to read cover letter --}}
    <div class="modal fade rounded-5" id="proposelCRead-{{ $proposel->id }}" tabindex="-1"
        aria-labelledby="proposelReadLabel-{{ $proposel->id }}" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">COVER LETTER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="task-container">
                        <div class="task-content">
                            {{ $proposel->reason }}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal to read available time --}}
    <div class="modal fade rounded-5" id="proposelARead-{{ $proposel->id }}" tabindex="-1"
        aria-labelledby="proposelReadLabel-{{ $proposel->id }}" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">AVAILABLE TIME</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="task-container">
                        <div class="task-content">
                            {{ $proposel->available_time }}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    {{-- modal for selecting user status --}}
    <div class="modal fade" id="proposel-{{ $proposel->id }}" tabindex="-1"
        aria-labelledby="proposelLabel-{{ $proposel->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/organization/proposel/{{ $proposel->internship->id }}/{{ $proposel->id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- {{ method_field('delete') }} --}}

                    <div class="modal-body">
                        <label for="userStatusModal" class="form-label">Select status of intern</label>
                        <select class="form-select" id="userStatusModal" name="status">
                            <option value="Rejected">Reject</option>
                            <option value="Active" selected>Accept</option>
                            <option value="Blocked">Block</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                        <button type="submit" class="btn btn-success">YES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container card mt-4">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="candidate-list-images">
                        <a href="javascript:void(0)"><img
                                src="{{ asset('ProfilePhoto/' . $proposel->intern->profile_image) }}" alt=""
                                style="width: 60px; height:60px;" class="avatar-md img-thumbnail rounded-circle"></a>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-5">
                    <div class="candidate-list-content mt-3 mt-lg-0">
                        <h5 class="fs-19 mb-0"><a
                                href="/organization/internship/{{ $proposel->internship->id }}/proposels/{{ $proposel->id }}"
                                class="primary-link">{{ $proposel->intern->first_name }}</a> </h5>

                    </div>
                </div>
                <!--end col-->


            </div>
            <table class="table mt-10">
                <thead>
                    <tr>
                        <th scope="col">Cover letter</th>
                        <th scope="col">Available time</th>
                        <th scope="col">Action</th>
                        <th scope="col">Task</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <button class="bedge btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#proposelCRead-{{ $proposel->id }}">Read</button> </td>
                        <td> <button class="bedge btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#proposelARead-{{ $proposel->id }}">Read</button></td>
                        <td><button class="btn btn-{{ $color }} bg-{{ $color }}" data-bs-toggle="modal"
                                data-bs-target="#proposel-{{ $proposel->id }}">{{ $proposel->status }}</button></td>

                        <td ><a href="/organization/internship/{{ $proposel->internship_id }}/dashboard/{{ $proposel->id }}"
                                class="btn btn-primary">
                            <x-go-link-external-16 class="w-5 h-5 " />
                            </a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
