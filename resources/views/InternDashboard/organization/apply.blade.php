@extends('layouts.internDashboard')
@section('content')
    <div class="max-width-container m-20">
        <div class="content_inner">
            <div class="application_form_container">
                <div class="main_heading heading_1_4 with_line">Web Development internship at MT Academy India Private
                    Limited</div>
                <div id="form-container">
                    <form action="/intern/proposel/{{ Str::slug($internship->title) }}/{{ $internship->id }}"
                        method="post" enctype="multipart/form-data">
                        <div id="assessment_questions_container" class="">
                            <div class=""></div>
                            <div id="assessment_questions">
                                <input type="hidden" name="internshipId" value="{{ $internship->id }}">
                                <input type="hidden" name="status" value="Applied">
                                @csrf
                                <h4>Cover letter</h4>
                                <div class="form-group">
                                    <div class="assessment_question">
                                        <label>
                                            Why should you be hired for this role? </label>
                                    </div>

                                    <div class="cover_letter_container">
                                        <textarea name="reason" class="textarea form-control @error('reason') is-invalid @enderror"
                                            placeholder="{{ auth()->user()->name }}, employers see the answer to this question even before they view your resume. Answer this question carefully and add relevant information like your skills/experience and why you find the role exciting."
                                            {{ $proposel->status != 'Apply' ? 'disabled' : '' }}>{{ $proposel->status != 'Apply' ? $proposel->reason :old('reason') }}</textarea>
                                        
                                        @error('reason')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <h4>Availability</h4>
                                <div class="form-group">
                                    <div class="assessment_question">
                                        <label>
                                            Are you available for 2 months, starting immediately, for this internship at
                                            Kanpur? If not, what is the time period you are available for and the earliest
                                            date you can start this internship on? Please also mention your preferred
                                            location along with whether you are available full time or part time. If part
                                            time, specify the number of hours you can spend on this internship every day.
                                        </label>
                                    </div>
                                    <textarea name="available_time" id="text_3273911" class="textarea form-control @error('available_time') is-invalid @enderror"
                                        placeholder="e.g. I am available full time in Pune for the next 6 months, but will have exams for 15 days in June."
                                        aria-required="true"
                                        {{ $proposel->status != 'Apply' ? 'disabled' : '' }}>{{ $proposel->status != 'Apply' ? $proposel->available_time :old('available_time') }}</textarea>
                                    <label id="text_3273911-error" class="help-block form-error" for="text_3273911"></label>
                                    @error('available_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="submit_button_container">
                                    <input type="submit" name="submit" id="submit"
                                        class="btn btn-large {{ $proposel->status != 'Apply' ? 'bg-soft-success' : 'bg-secondary' }}  text-light"
                                        {{ $proposel->status != 'Apply' ? 'disabled' : '' }}
                                        value="{{ $proposel->status }}">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection
