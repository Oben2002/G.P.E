@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Personnel'
])

@section('content')
<div class="content">
    <section >
        <div class="container">
            <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col">
                        <div class="card shadow">

                    <div class="card" style="padding: 5%; ">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Planning</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{route('page.index','personnels')}}" class="btn btn-sm btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                        </div>

<form action="{{ route('file.import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
        <div class="custom-file text-left">
            <input type="file" name="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
    </div>
    <button class="btn btn-primary">Import data</button>
    <a class="btn btn-success" href="{{ route('file.export') }}">Export data</a>
</form>
                                @if (Session::has('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session::get('status')}}
                                    </div>
                                @endif
<div class="table-responsive">
    <table class="table align-items-center table-flush table-striped">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Jour</th>
                <th scope="col">Horaire</th>
                <th scope="col">Employee</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
                    @foreach ($planning as $plan)
                        <tr>
                            <td>{{$plan->id}}</td>
                            <td>{{$plan->jour}}</td>
                            <td>{{$plan->horaire}}</td>
                            <td>{{$plan->employee}}</td>
                        </tr>
                    @endforeach
                    {{-- <td>Admin Admin</td>
                    <td>
                        <a href="mailto:admin@paper.com">admin@paper.com</a>
                    </td>
                    <td>25/02/2020 11:37</td>
                                                            </tr> --}}
         </tbody>
    </table>

</div>
                        </div>
                        </div>
                        </div>
                </div>
@endsection
