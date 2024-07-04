@extends('layouts.userLayout')
@section('content')
    <style>
        /*Range style*/
        .range-slider__range {
            appearance: none;
            width: calc(95% - (73px));
            height: 10px;
            border-radius: 5px;
            background: #d7dcdf;
            outline: none;
            padding: 0;
            margin: 0;
        }

        /*Range black ⚫ thumb*/
        .range-slider__range::-webkit-slider-thumb {
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 100%;
            background: #7335b7;
            cursor: pointer;
            transition: background 0.15s ease-in-out;
        }

        .range-slider__range::-webkit-slider-thumb:hover {
            transform: scale(1.1);
            background: #f8842b;
        }

        .range-slider__range:active::-webkit-slider-thumb {
            transform: scale(1.1);
            background: #f8842b;
        }

        /*Range current value*/
        .range-slider__value {
            display: inline-block;
            position: relative;
            width: 60px;
            color: #fff;
            line-height: 20px;
            text-align: center;
            border-radius: 3px;
            background: #7335b7;
            padding: 5px 10px;
            margin-left: 8px;
        }

        .range-slider__value:after {
            position: absolute;
            top: 8px;
            left: -7px;
            width: 0;
            height: 0;
            border-top: 7px solid transparent;
            border-right: 7px solid #2c3e50;
            border-bottom: 7px solid transparent;
            content: "";
        }


    </style>
    <section class=" mt-5">
        <a href="{{route('task.create')}}" class="btn btn-primary  fw-bold">
            <i class="fa-solid fa-plus"></i>
            Add task
        </a>
        <div class="container  p-4 rounded-5">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-header" style="border-bottom:3px solid #3fe671">New Tasks
                            ({{count($new_tasks)}})
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @foreach( $new_tasks as $task)
                                    <li class="list-group-item d-flex justify-content-between">
                                        <p class="m-0">{{$task->title}}</p>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" data-bs-toggle="modal"
                                               data-bs-target="#editModal-{{ $task->id }}"
                                               style="padding-right: 10px; color: rgb(240, 180, 13);font-size:18px"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{ route('task.show', ['task' => $task->id])}}"  style="padding-right: 10px; color: #3fe671;font-size:20px"><i
                                                    class="fa-solid fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="modal"
                                               data-bs-target="#deleteModal-{{ $task->id }}"
                                               style="padding-right: 10px; color: #dc3545;font-size:20px"><i
                                                    class="fa-solid fa-trash-can"></i></a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-header" style="border-bottom:3px solid #f5a623">In progress
                            ({{count($in_progress_tasks)}})
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @foreach( $in_progress_tasks as $task)
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <p class="m-0">{{$task->title}}</p>
                                            <div>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#editModal-{{ $task->id }}" style="padding-right: 10px; color: rgb(240, 180, 13);font-size:18px"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('task.show', ['task' => $task->id])}}" style="padding-right: 10px; color: #3fe671;font-size:20px"><i class="fa-solid fa-eye"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $task->id }}" style="padding-right: 10px; color: #dc3545;font-size:20px"><i class="fa-solid fa-trash-can"></i></a>
                                            </div>
                                        </div>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar" role="progressbar"
                                                 style="width: {{$task->percentage}}% ; background-color: #f5a623"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-header" style="border-bottom:3px solid #4378eb">Done
                            ({{count($finished_tasks)}})
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @foreach( $finished_tasks as $task)
                                    <li class="list-group-item d-flex justify-content-between">
                                        <p class="m-0">{{$task->title}}</p>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" data-bs-toggle="modal"
                                               data-bs-target="#editModal-{{ $task->id }}"
                                               style="padding-right: 10px; color: rgb(240, 180, 13);font-size:18px"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{ route('task.show', ['task' => $task->id])}}" style="padding-right: 10px; color: #3fe671;font-size:20px"><i
                                                    class="fa-solid fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="modal"
                                               data-bs-target="#deleteModal-{{ $task->id }}"
                                               style="padding-right: 10px; color: #dc3545;font-size:20px"><i
                                                    class="fa-solid fa-trash-can"></i></a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @foreach($new_tasks as $task)
        <div class="modal fade" id="editModal-{{ $task->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" aria-labelledby="editModalLabel-{{ $task->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editing Task</h5>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <form action="{{ route('task.update', $task->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" value="{{ $task->title }}" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="description" value="{{ $task->description }}"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="percentage" class="col-sm-2 col-form-label">Completion rate</label>
                                <div class="col-sm-10">
                                    <input class="range-slider__range" name="percentage" type="range"
                                           value="{{$task->percentage}}" min="0" max="100">
                                    <span class="range-slider__value">{{$task->percentage}}</span>
                                    {{--                                <input type="range" class="" name="percentage" min="0" max="100" value="{{$task->percentage}}" step="5" />--}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="start_task" class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="start_task" value="{{ $task->start_task }}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="end_task" class="col-sm-2 col-form-label">End Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="end_task" value="{{ $task->end_task }}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" style="background-color: gray"
                                        data-bs-dismiss="modal">Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach($in_progress_tasks as $task)
        <div class="modal fade" id="editModal-{{ $task->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" aria-labelledby="editModalLabel-{{ $task->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editing Task</h5>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <form action="{{ route('task.update', $task->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" value="{{ $task->title }}" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="description" value="{{ $task->description }}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="percentage" class="col-sm-2 col-form-label">Percentage</label>
                                <div class="col-sm-10">
                                    <input class="range-slider__range" name="percentage" type="range"
                                           value="{{$task->percentage}}" min="0" max="100">
                                    <span class="range-slider__value">{{$task->percentage}}</span>
                                    {{--                                <input type="range" class="" name="percentage" min="0" max="100" value="{{$task->percentage}}" step="5" />--}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="start_task" class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="start_task" value="{{ $task->start_task }}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="end_task" class="col-sm-2 col-form-label">End Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="end_task" value="{{ $task->end_task }}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" style="background-color: gray"
                                        data-bs-dismiss="modal">Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach($finished_tasks as $task)
        <div class="modal fade" id="editModal-{{ $task->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" aria-labelledby="editModalLabel-{{ $task->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editing Task</h5>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <form action="{{ route('task.update', $task->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" value="{{ $task->title }}" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="description" value="{{ $task->description }}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="percentage" class="col-sm-2 col-form-label">Completion rate</label>
                                <div class="col-sm-10">
                                    <input class="range-slider__range" type="range" name="percentage"
                                           value="{{$task->percentage}}" min="0" max="100">
                                    <span class="range-slider__value">{{$task->percentage}}</span>
                                    {{--                                <input type="range" class="" name="percentage" min="0" max="100" value="{{$task->percentage}}" step="5" />--}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="start_task" class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="start_task" value="{{ $task->start_task }}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="end_task" class="col-sm-2 col-form-label">End Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="end_task" value="{{ $task->end_task }}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" style="background-color: gray"
                                        data-bs-dismiss="modal">Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach($new_tasks as $task)
        <div class="modal fade" id="deleteModal-{{ $task->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" aria-labelledby="deleteModalLabel-{{ $task->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Task</h5>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <p class="fw-bold">{{ __('comon.message_delete') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="cursor: pointer;">
                                <i class="fa-solid fa-trash-can"></i>
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @foreach($in_progress_tasks as $task)
        <div class="modal fade" id="deleteModal-{{ $task->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" aria-labelledby="deleteModalLabel-{{ $task->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Task</h5>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <p class="fw-bold">{{ __('comon.message_delete') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="cursor: pointer;">
                                <i class="fa-solid fa-trash-can"></i>
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @foreach($finished_tasks as $task)
        <div class="modal fade" id="deleteModal-{{ $task->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" aria-labelledby="deleteModalLabel-{{ $task->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Task</h5>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <p class="fw-bold">{{ __('comon.message_delete') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="cursor: pointer;">
                                <i class="fa-solid fa-trash-can"></i>
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <script src="{{ asset('assets/js/percentage.js') }}"></script>
@endsection

