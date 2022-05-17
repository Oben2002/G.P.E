@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Personnel'
])
@section('content')
         <div class="content">
            <section style="padding: 60px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="card" style="padding: 10%; width:500px;">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h3 class="mb-0">Add Personnel</h3>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="{{route('page.index','personnels')}}" class="btn btn-sm btn-primary">Go Back</a>
                                        </div>
                                    </div>
                                </div>
                                @if (Session::has('personnel_created'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session::get('personnel_created')}}
                                    </div>
                                @endif


                                <div class="card-body">
                                    <form method="POST" action="{{route('personnel.create')}}">
                                        @csrf

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Ex. John Doe">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Biometric ID</label>
                                            <small style="color: red" >(optional)</small>
                                            <input type="text" name="idB" class="form-control" placeholder="Enter Biometric ID">
                                        </div>
                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <input type="text" name="role" class="form-control" placeholder="Enter role">
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-info btn-round">{{ __('Add Personnel') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
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
