
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
                    <strong>Lectures This Week</strong>
                </div>

                <div class="card-body" >
                    @if($week_course_lectures->isEmpty())
                    <div>  
                            <strong style="color:red">Empty</strong>
                        </div>
                    @endif

                        <table class="table table-borderd table-hover">
                        <th>Lecture Name </th>
                        
                        @foreach($week_course_lectures as $lecture)

                          
                            <tr>
                                <td>{{ $lecture->name }}</td>
                            </tr>
                            
                            @endforeach
                        </table>
                       
                </div>
            </div>

        </div>
       
    </div>
</div>

@endsection
