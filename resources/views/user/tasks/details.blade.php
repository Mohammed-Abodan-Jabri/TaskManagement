@extends('layouts.userLayout')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <section class="section bg-white mt-5">
        <div class="container bg-white p-4 rounded-5">
            <div class="pagetitle p-2 text-primary  d-flex justify-content-between">
                <h4 class="fw-bold">
                    <i class="fa-regular fa-chart-bar"></i>
                    {{__('Details task')}}
                </h4>
                <a href="{{route('task.list')}}" class="btn btn-primary  fw-bold">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    {{__('comon.back')}}
                </a>
            </div>
           <div class="row">
               <div class="col-sm-6">
                  <div class="d-flex">
                      <h5 >Title:</h5>
                      <p class="mb-3 me-2">{{$task->title}}</p>
                  </div>
                   <h5>Start Date for task:</h5>
                   <p class="mb-3">{{$task->start_task}}</p>
                   <h5>End Date for task:</h5>
                   <p class="mb-3">{{$task->end_task}}</p>
               </div>
               <div class="col-sm-6">
                   <h5>Description:</h5>
                   <p class="mb-3">{{$task->description}}</p>

               </div>
           </div>
            <div class="row">
                <h5>Completion rate:</h5>
                <div class="progress w-75 p-0">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{$task->percentage}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

