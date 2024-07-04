@extends('layouts.userLayout')
@section('content')
    <style>
        /*Range style*/
        .range-slider__range {
            appearance: none;
            width: calc(100% - (73px));
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
    <section class="section bg-white mt-5">
        <div class="container bg-white p-4 rounded-5">
            <div class="pagetitle p-2 text-primary  d-flex justify-content-between">
                <h4 class="fw-bold">
                    <i class="fa-regular fa-chart-bar"></i>
                    {{__('task.adding_task')}}
                </h4>
                <a href="{{route('task.list')}}" class="btn btn-primary  fw-bold">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    {{__('comon.back')}}
                </a>
            </div>
            <form action="{{route('task.store')}}" method="post">
                @csrf
                <div class="row mb-2" style="margin-left: 5%; margin-right: 5%">
                    @if (session('error_store'))
                        <div class="alert alert-danger">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            {{ session('error_store') }}
                        </div>
                    @endif
                </div>
                <div class="row mb-4" style="margin-left: 5%; margin-right: 5%">
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @php
                                $i=0;
                            @endphp
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ ++$i.'_'.$error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title"  class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description"
                               class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="percentage" class="col-sm-2 col-form-label">Completion rate</label>
                    <div class="col-sm-10">
                        <input class="range-slider__range" name="percentage" type="range"
                               value="0" min="0" max="100">
                        <span class="range-slider__value"></span>
                        {{--                                <input type="range" class="" name="percentage" min="0" max="100" value="{{$task->percentage}}" step="5" />--}}
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="start_task" class="col-sm-2 col-form-label">Start Date</label>
                    <div class="col-sm-10">
                        <input type="date" name="start_task"
                               class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="end_task" class="col-sm-2 col-form-label">End Date</label>
                    <div class="col-sm-10">
                        <input type="date" name="end_task"
                               class="form-control">
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary mb-5 ms-3 fw-bold"> <i class="fa-regular fa-sd-card ms-2 me-2"></i>Save</button>
                    <a href="{{route('task.list')}}" class="btn btn-outline-danger mb-5 fw-bold"> <i
                            class="fa fa-ban ms-2 me-2"></i>cancel</a>
                </div>
            </form>
        </div>
    </section>
    <script src="{{ asset('assets/js/percentage.js') }}"></script>
@endsection
