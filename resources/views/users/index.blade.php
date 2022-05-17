
@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Personnel'
])
@section('content')
        </nav>            <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Personnel</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{route('personnel.add')}}" class="btn btn-sm btn-primary">Add personnel</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                                                    </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Biometric ID</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Creation Date</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                            @foreach ($personnel as $person)
                                                <tr>
                                                    <td>{{$person->id}}</td>
                                                    <td>{{$person->name}}</td>
                                                    <td>{{$person->idB}}</td>
                                                    <td>{{$person->role}}</td>
                                                    <td>{{$person->created_at}}</td>
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
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">

                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
        @endsection
