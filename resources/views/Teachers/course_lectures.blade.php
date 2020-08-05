@extends('layouts.front-end')

@section('title')
Add New Lecture
@endsection

@section('style')
<style>
    .lec-name{
        border: 1px solid #eeeeee;
        margin-top: 100px;
        text-align: center;
    }
    .lec-name .card-header{
        padding: 10px 17px  !important;
    }
    .lec-name .table th{
        background-color: #f7f7f7;
    }
    .lec-name .table td{
        border: 1px solid #f7f7f7;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-xs-12 wow zoomInUp" >
            <div class="lec-name">
                <div class="card-header">
                    {{ __('site.course') }} <strong style="color:red">{{ $course->name }}</strong> {{ __('site.lectures') }}
                </div>

                <div class="card-body" >
                    @if($course_lectures->isEmpty())
                    <div>  
                        <strong>{{ __('site.empty') }}  </strong>
                    </div>
                    @endif

                        <table class="table table-borderd table-hover">
                        <th><strong>{{ __('site.lecture name') }}  </strong></th>
                        
                        @foreach($course_lectures as $lecture)

                          
                            <tr>
                                <td>{{ $lecture->name }}</td>
                            </tr>
                            
                            @endforeach
                        </table>
                       
                </div>
            </div>

        </div>
        <div class="offset-md-1 col-md-7 col-xs-12 wow zoomInDown" >

            <div class="card" style="margin-top: 100px;">
            
                <div class="card">
                    <div class="card-header">
                        <strong>{{ __('site.add new lecture to course') }}</strong>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('teacher.create-lecture', [app()->getLocale(), $course->id]) }}" method="POST">
                            @csrf
                            @include('partials.errors')
                
                            <div class="form-group">
                                <label for="">{{ __('site.lecture name') }}: </label>
                                <input type="text" class="form-control" name="name">
                            </div>
                
                            <div class="form-group">
                                <label for="">{{ __('site.lecture date') }}: </label>
                                <input type="Date" class="form-control" name="lecture_date">
                            </div>
                
                            <div class="form-group">
                                <label for="">{{ __('site.meeting name') }}: </label>
                                <input type="text" class="form-control" name="meeting_name">
                            </div>
                
                            <div class="form-group">
                                <label for="">{{ __('site.meeting password') }}: </label>
                                <input type="text" class="form-control" name="meeting_password">
                            </div>
                
                            <button class="btn btn-success btn-s">{{ __('site.add lecture') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
