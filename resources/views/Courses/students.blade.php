@extends('layouts.front-end')

@section('title')
teacher-students
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('/css/teacher-students.css')}}">
@endsection


@section('content')

    <div class="teacher-students">
        <div class="container">
            <div class="content">
                @if($course_students->count() > 0)
                <table class="table table-bordered mt-5">
                    <tr>
                        <td colspan="2"  style="padding-bottom: 2rem !important;"><h1>My Students</h1> <i class="fas fa-user-graduate float-right"></i></td>
                    </tr>
                    @foreach($course_students as $student)
                    <tr>
                        <td>
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid mx-2" width="80"> 
                            <div class="info">
                              <h3>{{ $student->name }}</h3>
                              <ul class="list-group">
                              <li><i class="fas fa-mobile"></i> {{ $student->phone_number }}</li>
                                  <li><i class="fas fa-map-marker"></i> st-el ahram -cairo</li>
                                  <li> <i class="fas fa-edit"></i> last-exame : 90%</li>
                              </ul>
                            </div>

                        </td>
                        <td style="text-align: center;">
                            <!--  trigger modal -->
                            <i class="fas fa-question-circle mt-4" data-toggle="modal" data-target="#centralModalSm"></i>
                            
                            <!-- Central Modal Small -->
                            <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">
                            
                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-lg " role="document">
                            
                            
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h4 class="modal-title w-100" id="myModalLabel">Ahmed's Questions</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <!--Accordion wrapper-->
                                  <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                                      <!-- Accordion card -->
                                      <div class="card">
                                    
                                        <!-- Card header -->
                                        <div class="card-header" role="tab" id="headingOne1">
                                          <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                            aria-controls="collapseOne1">
                                            <h5 class="mb-0">
                                              Collapsible Group Item #1 <i class="fas fa-angle-down rotate-icon"></i>
                                            </h5>
                                          </a>
                                        </div>
                                    
                                        <!-- Card body -->
                                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                                          data-parent="#accordionEx">
                                          <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                            labore sustainable VHS.
                                          </div>
                                        </div>
                                    
                                      </div>
                                      <!-- Accordion card -->
                                    
                                      <!-- Accordion card -->
                                      
                                      
                                      <!-- Accordion card -->
                                    
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- Central Modal Small -->

                        </td>
                    </tr>
                    @endforeach
                </table>
                @else
                  <strong style="color:red">No Students Enrolled For This Course Yet!</strong>
                @endif
            </div>
        </div>
    </div>
@section('scripts')

@endsection

@endsection