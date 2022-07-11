
@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Biometric Devices'
])
@section('content')
        <div class="content">
            <div class="container-fluid mt--7">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ trans('global.create') }} {{ trans('cruds.finger_device.title_singular') }}
                        </h3>

                    </div>
                    @if (Session::has('Unable to connect'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session::get('Unable to connect')}}
                                    </div>
                                @endif

                    <div class="card-body">

                        <form method="POST" action="{{ route("finger.store") }}">

                            @csrf

                            <div class="form-group">

                                <label class="required" for="title">{{ trans('cruds.finger_device.fields.name') }}</label>

                                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"

                                       name="name"

                                       id="title" value="{{ old('name', '') }}" required>

                                @if($errors->has('name'))

                                    <span class="text-danger">{{ $errors->first('name') }}</span>

                                @endif

                                <span class="help-block">{{ trans('cruds.finger_device.fields.name_helper') }}</span>

                            </div>

                            <div class="form-group">

                                <label class="required" for="ip">{{ trans('cruds.finger_device.fields.ip') }}</label>

                                <input class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" type="text"

                                       name="ip"

                                       id="ip" value="{{ old('ip', '') }}" required>

                                @if($errors->has('ip'))

                                    <span class="text-danger">{{ $errors->first('ip') }}</span>

                                @endif

                                <span class="help-block">{{ trans('cruds.finger_device.fields.ip_helper') }}</span>

                            </div>

                            <div class="form-group">

                                <button class="btn btn-danger" type="submit">

                                    {{ trans('global.save') }}

                                </button>

                            </div>

                        </form>

                    </div>

                </div>
 @endsection
