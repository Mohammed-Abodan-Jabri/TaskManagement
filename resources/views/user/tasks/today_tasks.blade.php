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
            @if (!$tasks->isEmpty())
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-news">
                        <thead>
                        <tr class="table-primary text-white">
                            <td>Title</td>
                            <td>Description</td>
                            <td>Start date</td>
                            <td>End Date</td>
                            <td>status</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>
                                    <p>{{ $task->title }}</p>
                                </td>
                                <td>
                                    <p>{{ Illuminate\Support\Str::limit($task->description, 70, $end='...') }}</p>
                                </td>
                                <td>
                                    <p>{{ $task->start_task }}</p>
                                </td>
                                <td>
                                    <p>{{ $task->end_task }}</p>
                                </td>
                                <td>
                                    @if( $task->percentage==0 )
                                        <p style="color: green; font-weight: bolder">New</p>
                                    @elseif($task->percentage==100)
                                        <p style="color: #4378eb; font-weight: bolder">Completion</p>
                                    @else
                                        <p style="color: #f5a623; font-weight: bolder">In Progress</p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-danger" role="alert">
                    There are no tasks starting today
                </div>
            @endif
        </div>
    </section>
@endsection

