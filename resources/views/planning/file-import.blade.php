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
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary m-2" data-toggle="modal" data-target="#demoModal">Instructions</button>
                                        <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="demoModalLabel">How to import</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-
                                            label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                            <p>At first trial export the data and fill in the informations as follows:</p>

                                                   <span><i class="bi bi-brightness-alt-high-fill"></i> </span>   ---->
                                                    0 = 8hr30 -17hr30</br>

                                                   <span><i class="bi bi-brightness-high"></i></span>   ---->
                                                    1 = 8hr30 -14hr30</br>

                                                    <span><i class="bi bi-cloud-moon-fill cyan-text"></i></span>   ---->
                                                   2 = 13hr30 -20hr</br>
                                                   <span><i class="bi bi-moon-fill cyan-text"></i></span>   ---->
                                                    3 = 22hr -4hr</br>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                                    </div>                                </div>
                            </div>
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
    @if ($planning === NULL){
        <h3>No data present</h3>
    }

    @else {
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Employee</th>
                        <th scope="col">Lundi</th>
                        <th scope="col">Mardi</th>
                        <th scope="col">Mercredi</th>
                        <th scope="col">Jeudi</th>
                        <th scope="col">Vendredi</th>
                        <th scope="col">Samedi</th>
                        <th scope="col">Dimanche</th>
                    </tr>
                </thead>
                <tbody class="text-center" style="color: #666666";">
                            @foreach ($planning as $plan)
                                <tr>
                                    <td>{{$plan->id}}</td>
                                    <td></td>
                                    <td>{{$plan->Employee}}</td>
                                    <td>
                                        @if ($plan->Lundi===0)
                                        <i class="bi bi-brightness-alt-high-fill"></i>
                                        @elseif ($plan->Lundi===1)
                                        <i style="color: ;" class="bi bi-brightness-high cyan-text"></i>
                                        @elseif($plan->Lundi===2)
                                        <i class="bi bi-cloud-moon-fill cyan-text"></i>
                                        @elseif($plan->Lundi===3)
                                        <i class="bi bi-moon-fill cyan-text"></i>
                                        @else
                                        <i  style="color: #f01515;" class="bi bi-x"></i>
                                        @endif
        
                                    </td>
                                    <td>
                                        @if ($plan->Mardi===0)
                                        <i class="bi bi-brightness-alt-high-fill"></i>
                                        @elseif ($plan->Mardi===1)
                                        <i class="bi bi-brightness-high"></i>
                                        @elseif($plan->Mardi===2)
                                        <i class="bi bi-cloud-moon-fill"></i>
                                        @elseif($plan->Mardi===3)
                                        <i class="bi bi-moon-fill"></i>
                                        @else
                                        <i  style="color: #f01515;" class="bi bi-x"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($plan->Mercredi===0)
                                        <i class="bi bi-brightness-alt-high-fill"></i>
                                        @elseif ($plan->Mercredi===1)
                                        <i class="bi bi-brightness-high"></i>
                                        @elseif($plan->Mercredi===2)
                                        <i class="bi bi-cloud-moon-fill"></i>
                                        @elseif($plan->Mercredi===3)
                                        <i class="bi bi-moon-fill"></i>
                                        @else
                                        <i  style="color: #f01515;" class="bi bi-x"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($plan->Jeudi===0)
                                        <i class="bi bi-brightness-alt-high-fill"></i>
                                        @elseif ($plan->Jeudi===1)
                                        <i class="bi bi-brightness-high"></i>
                                        @elseif($plan->Jeudi===2)
                                        <i class="bi bi-cloud-moon-fill"></i>
                                        @elseif($plan->Jeudi===3)
                                        <i class="bi bi-moon-fill"></i>
                                        @else
                                        <i style="color: #f01515;" class="bi bi-x"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($plan->Vendredi===0)
                                        <i class="bi bi-brightness-alt-high-fill"></i>
                                        @elseif ($plan->Vendredi===1)
                                        <i class="bi bi-brightness-high"></i>
                                        @elseif($plan->Vendredi===2)
                                        <i class="bi bi-cloud-moon-fill"></i>
                                        @elseif($plan->Vendredi===3)
                                        <i class="bi bi-moon-fill"></i>
                                        @else
                                        <i style="color: #f01515;" class="bi bi-x"></i>
                                        @endif
                                    </td>
        
                                    <td>
                                        @if ($plan->Samedi===0)
                                        <i style="color: rebeccapurple;" class="bi bi-brightness-alt-high-fill"></i>
                                        @elseif ($plan->Samedi===1)
                                        <i style="color: rebeccapurple;" class="bi bi-brightness-high"></i>
                                        @elseif($plan->Samedi===2)
                                        <i style="color: rebeccapurple;" class="bi bi-cloud-moon-fill"></i>
                                        @elseif($plan->Samedi===3)
                                        <i style="color: rebeccapurple;"class="bi bi-moon-fill"></i>
                                        @else
                                        <i style="color: #f01515;" class="bi bi-x"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($plan->Dimanche===0)
                                        <i class="bi bi-brightness-alt-high-fill"></i>
                                        @elseif ($plan->Dimanche===1)
                                        <i class="bi bi-brightness-high"></i>
                                        @elseif($plan->Dimanche===2)
                                        <i class="bi bi-cloud-moon-fill"></i>
                                        @elseif($plan->Dimanche===3)
                                        <i class="bi bi-moon-fill cyan-text"></i>
                                        @else
                                        <i style="color: #f01515;" class="bi bi-x"></i>
                                        @endif
                                    </td>
                                    <td></td>
        
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
    }


                        </div>
                        </div>
                        </div>
                </div>
@endsection
