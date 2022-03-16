@extends('layouts.organisationDashboard')

@section('content')
    <div class="container">
        {{-- @if ($message) --}}
        {{-- {{ $message }} --}}
        {{-- @endif --}}
        @isset($message)
            <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ $message }}
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        @endisset

        {{-- <div class="row">
            <div class="col-lg-9"> --}}

        @isset($error)
            {{ $error }}
        @endisset
        <div class="task-fluid-container">

            @if (count($histories) < 1)
                <div class="task-container " id="createError">
                    <div class="task-content">
                        <svg aria-hidden="true" height="24" viewBox="0 0 24 24" version="1.1" width="24"
                            data-view-component="true" class="octicon octicon-issue-opened blankslate-icon">
                            <path fill-rule="evenodd"
                                d="M2.5 12a9.5 9.5 0 1119 0 9.5 9.5 0 01-19 0zM12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 13a2 2 0 100-4 2 2 0 000 4z">
                            </path>
                        </svg>
                        <h3>Welcome to tasks!</h3>
                        <p>Issues are used to track todos, bugs, feature requests, and more. As issues are created,
                            they’ll
                            appear
                            here in a searchable and filterable list. To get started, you should.</p>
                        <a href="#" class="btn bg-soft-success" onclick="showTaskForm()">create a new task</a>
                    </div>
                </div>
                <div class="task-main-container">
                    <div class="task-profile-container">
                        <div class="candidate-list-images">
                            <a href=""><img src="{{ asset('ProfilePhoto/' . auth()->user()->organization->profile_image) }}"
                                    alt="" style="width: 50px; height:50px;"
                                    class="avatar-md img-thumbnail rounded-circle"></a>
                        </div>
                    </div>
                    <div class="task-container" style="display: none" id="taskForm">
                        <div class="task-content">
                            <form method="post" action="/organization/task/create" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="owner" value="{{ auth()->user()->user_type }}">
                                <input type="hidden" name="internshipId" value="{{ $internshipId }}">

                                <div class="form-group">
                                    <input type="text" name="title" id="" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <textarea class="ckeditor form-control" name="description"></textarea>
                                </div>

                                <button type="submit" class="btn-success btn"> Add Task </button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                @foreach ($histories as $history)
                    <div class="modal fade rounded-5" id="editHistory-{{ $history->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="task-container">
                                        <div class="task-content">
                                            <form method="post" action="/organization/task/update/{{ $history->id }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="owner" value="{{ auth()->user()->user_type }}">

                                                <div class="form-group">
                                                    <input type="text" name="title" id="" placeholder="Title"
                                                        value="{{ $history->title }}">
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="ckeditor form-control" name="description">{{ $history->description }}</textarea>
                                                </div>
                                                <button type="submit" class="btn-success btn">Edit Task </button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteHistory-{{ $history->id }}" tabindex="-1"
                        aria-labelledby="deleteHistoryLabel-{{ $history->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="/organization/task/delete/{{ $history->id }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <div class="modal-body">

                                        Do you really want to delete <b>" {{ $history->title }} "</b> task?

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                                        <button type="submit" class="btn btn-success">YES</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="task-main-container">
                        <div class="task-profile-container">
                            <div class="candidate-list-images">
                                @if ($history->owner == 'Intern')
                                    <a href=""><img
                                            src="{{ asset('ProfilePhoto/' . $history->user->intern->profile_image) }}"
                                            alt="" style="width: 50px; height:50px;"
                                            class="avatar-md img-thumbnail rounded-circle"></a>
                                @elseif ($history->owner == 'Organization')
                                    <a href=""><img
                                            src="{{ asset('ProfilePhoto/' . $history->user->organization->profile_image) }}"
                                            alt="" style="width: 50px; height:50px;"
                                            class="avatar-md img-thumbnail rounded-circle"></a>
                                @endif
                            </div>
                        </div>
                        <div class="task-edit-container">
                            <div class="task-edit-heading">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h3> <strong> {{ $history->title }} </strong> created on
                                            <span>{{ \Carbon\Carbon::parse($history->created_at)->format('j F, Y H:i') }}</span> 
                                        </h3><span class="badge badge-secondary"> {{ $history->status }} </span>
                                    </div>
                                    <div class="col-lg-2">
                                        @can('isOwner', $history)
                                            <button type="button" class="task-btn" data-bs-toggle="modal"
                                                data-bs-target="#editHistory-{{ $history->id }}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" class="task-btn" data-bs-toggle="modal"
                                                data-bs-target="#deleteHistory-{{ $history->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        @endcan


                                        {{-- <i class="fa-solid fa-ellipsis"></i> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="task-edit-content">
                                {!! $history->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
                <div class="task-main-container">
                    <div class="task-profile-container">
                        <div class="candidate-list-images">
                            <a href=""><img
                                    src="{{ asset('ProfilePhoto/' . auth()->user()->organization->profile_image) }}" alt=""
                                    style="width: 50px; height:50px;" class="avatar-md img-thumbnail rounded-circle"></a>
                        </div>
                    </div>
                    <div class="task-container">
                        <div class="task-content">

                            <form method="post" action="/organization/task/create" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="internshipId" value="{{ $internshipId }}">
                                <input type="hidden" name="proposelId" value="{{ $proposelId }}">
                                <input type="hidden" name="owner" value="{{ auth()->user()->user_type }}">
                                <div class="form-group">
                                    <input type="text" name="title" id="" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <textarea class="ckeditor form-control" id="ckeditor" name="description"></textarea>
                                </div>

                                <button type="submit" class="btn-success btn"> Add Task </button>

                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        {{-- </div> --}}

        {{-- <div class="col-lg-3">
                <ul >
                    @foreach ($proposels as $proposel)
                        <li class="row align-items-center">
                            <div class="col-auto">
                                <div class="candidate-list-images">
                                    <a href=""><img src="{{ asset('ProfilePhoto/' . $proposel->intern->profile_image) }}"
                                            alt="" style="width: 60px; height:60px;"
                                            class="avatar-md img-thumbnail rounded-circle"></a>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-lg-8">
                                <div class="candidate-list-content mt-3 mt-lg-0">
                                    <h5 class="fs-19 mb-0"><a
                                            href="/organization/internship/{{ $proposel->internship->id }}/dashboard/{{ $proposel->id }}"
                                            class="primary-link">{{ $proposel->intern->first_name }}
                                           </a> </h5>
                                </div>
                            </div>

                        </li>
                    @endforeach
                </ul>
            </div>
        </div> --}}
    </div>


@endsection


@section('script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script> --}}

    <script type="text/javascript">
        // $('.ckeditor').ckeditor();
        function showTaskForm() {
            document.querySelector('#createError').style.display = 'none';;
            document.querySelector('#taskForm').style.display = 'block';;
        }
    </script>
@endsection
