
@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Personnel'
])
@section('content')
        <div class="content">
            <div style="margin-bottom: 10px;" class="row">

                <div class="col-lg-12">

                    <a class="btn btn-success" href="{{ route('finger.create') }}">

                        Add new Biometric Device

                    </a>

                    {{-- <a class="btn btn-primary"
                       href="{{ route('finger_device.get.attendance') }}">
                        <i class="fas fa-cogs"></i>
                        Run Attendance Queue
                    </a> --}}



                </div>

            </div>


            <div class="card">

            <div class="card-header">

                {{ trans('cruds.finger_device.title_singular') }} {{ trans('global.list') }}

            </div>



            <div class="card-body">

                <div class="table-rep-plugin">
                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>

                        <tr>



                            <th>

                                {{ trans('cruds.finger_device.fields.id') }}

                            </th>

                            <th>

                                {{ trans('cruds.finger_device.fields.name') }}

                            </th>

                            <th>

                                {{ trans('cruds.finger_device.fields.ip') }}

                            </th>


                            <th>

                                Status

                            </th>

                            <th>
                                Actions

                            </th>

                        </tr>

                        </thead>


                        <tbody>

                        @foreach($fg as $fingerDevice)

                            <tr >

                                <td>

                                    {{ $fingerDevice->id ?? '' }}

                                </td>

                                <td>

                                    {{ $fingerDevice->model_name ?? '' }}

                                </td>

                                <td>

                                    {{ $fingerDevice->ip ?? '' }}

                                </td>



                                <td>


                                      @if($fingerDevice->status== 0)

                                        <div class="badge badge-success">

                                            Active

                                        </div>

                                    @else

                                        <div class="badge badge-danger">

                                            Deactivate

                                        </div>

                                    @endif





                                </td>

                                <td>

                                    <a class="btn btn-xs btn-outline-success"

                                           href="{{ route('finger.add'),'fingerDevice'  }}">

                                            <i class="fas fa-plus"></i>

                                            Add Employee

                                        </a>

                                        <a class="btn btn-xs btn-primary"

                                           href="{{ route('finger.show') }}">

                                            {{ trans('global.view') }}

                                        </a>

                                </td>

                            </tr>

                        @endforeach

                        </tbody>

                    </table>
                    </div>
                </div>

            </div>

            </div>





                </div>
           @endsection


           {{--    @livewireScripts--}}


