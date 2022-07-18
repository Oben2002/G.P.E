

@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Personnel'
])

@section('content')           <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Attendance</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{route('attendance.add')}}" class="btn btn-sm btn-primary">Add Attendance</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                                                    </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th data-priority="1">Date</th>
                                        <th data-priority="2">Personnel ID</th>

                                        <th data-priority="6">Time In</th>
                                        <th data-priority="7">Time Out</th>
                                        <th data-priority="4">Attendance</th>

                                    </tr>
                                </thead>
                                <tbody>
                                            <tr>
                                                <td>2022-07-14</td>
                                                <td>1</td>
                                                <td>08:01:00</td>
                                                <td>17:00:00</td>
                                                <td>9hrs</td>

                                            </tr>
                                            @foreach ($attendances as $attendance)
                                            <tr>
                                                <td>{{ $attendance->date }}</td>
                                                <td>{{ $attendance->user_id }}</td>
                                                <td>{{ $attendance->in_time }}
                                                <td>{{ $attendance->out_time }}
                                                <td>{{ $attendance->time_calc }}


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

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
                demo.initChartsPages();
            });
        </script>
    @endpush
