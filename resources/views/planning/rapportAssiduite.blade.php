@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Personnel'
])
<style>
  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13px;
    font-family: Arial, Helvetica, sans-serif;
  }
  .serif {
    font-family: "Times New Roman", Times, serif;
  }
  td {
    text-align: center;
  }
  .a-center td {
    text-align: left;
  }
  .border td,th,
  .border {
    border: 2px solid #000;
  }
  .no-border td {
    border: none;
  }
  td.no-border {
    border-color: transparent;
  }
  td.bl {
    border-left: 1px solid #000;
  }
  td.br {
    border-right: 1px solid #000;
  }
  h1,
  h2,
  h3,
  h4,
  h5,
  p {
    margin: 0;
    padding: 0;
  }
  .a-left,
  .a-left td {
    text-align: left;
  }
  .a-left {
    padding-left: 5px;
  }
  .a-right {
    text-align: right;
    padding-right: 5px;
  }
  .bg-gris td {
    background-color: #aaa;
  }
  .gras {
    font-weight: bold;
  }
  .maj {
    text-transform: uppercase;
  }
  .bas td {
    vertical-align: top;
  }
  .demi td {
    width: 50%;
  }
  .tiers td {
    width: 33.33%;
  }
</style>
<!-- Page Content -->
@section('content')
{{--  <div id="page-content-wrapper">
        <div class="row">
          <div class="btn-group btn-breadcrumb">
              <div class="btn-group btn-breadcrumb">
                <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
                <a href="#" class="btn btn-default">gpe</a>
                <a href="#" class="btn btn-default">reporting</a>
                <a href="#" class="btn btn-default">production bulletin</a>
              </div>
          </div>

       </div>
</div>  --}}
<!-- /#page-content-wrapper -->

<div id="yccontentbi">
<div id='jqxExpander'>
      <div><br />
        <br />
        <br />

    </div>
    <div>
        <br />

         <table  class="tableprint" style = "background: white; ">
        <tr>


            <td><label for="month"> Période: </label></td>
            <td>
                    <select name="month" id="month" class="form-control custom-select">
                        <option value="" disable="true" selected="true" >Sélectionner le mois</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="Novemeber">November</option>
                        <option value="December">December</option>
                    </select>
                </td>
                <td>
                     <button title="Mettre à jour" id="update" class="oufbutton btn btn-success"><i class="bi bi-arrow-clockwise"></i> Mettre à jour</button>

                </td>
                <td>
                    <a class="btn btn-primary" href="#"><i class="bi bi-printer"></i> Sauvegarder</a>
                </td>
                <td>
                    <a class="btn btn-success" href="{{ route('rapport.pdf') }}"><i class="bi bi-printer"></i> Export as PDF</a>
                </td>


         </tr>
      </table>
      <br />
     </div>
</div>
</div>

<div  id="printer" style = "background: white; ">
<table class="serif">
  <tr>
    <td style=" width:35%;">
      <h3>REPUBLIQUE DU CAMEROUN</h2>
      <h4 class="maj">Paix-Travail-Patrie</h4>
      <p>***********</p>
      <h5>UNIVERSITÉ DE YAOUNDÉ I</h5>
      <p>***********</p>
      <h5>FACULTE DES SCIENCES</h5>
      <p>***********</p>
      <h5>Département dInformatique</h5>
      <p>***********</p>
      <h6>BP/P.O.Box 812 Yaoundé-CAMEROUN  <br>
        Tél : 222 234 496<br>
         Email:
        diplome@facsciences.uy1.cm</h6>
      <p>***********</p>

    </td>

    <td style="">
      <img src="{{ asset('paper/img/uni_logo.jpg') }}">

    </td>

    <td style=" width:35%;">
      <h3>REPUBLIC OF CAMEROON</h2>
      <h4 class="maj">Peace-Work-Fatherland</h4>
      <p>***********</p>
      <h5>UNIVERSITY OF YAOUNDE I</h5>
      <p>***********</p>
      <h5>FACULTY OF SCIENCES</h5>
      <p>***********</p>
      <h5>Computer Science Department</h5>
      <p>***********</p>
      <h6>BP/P.O.Box 812 Yaoundé-CAMEROUN <br>
      Tél : 222 234 496 <br>
      Email:
      diplome@facsciences.uy1.cm
      </h6>
      <p>***********</p>
    </td>

  </tr>
</table>

<table class="serif">
  <tr>
    <td class="gras maj">
      <h2 style="text-decoration: underline; margin-bottom: 10px;">
      RAPPORT SYNTHESE D’ASSIDUITE  ET DE PONCTUALITE
      </h2>
      <h5 style=" margin-bottom: 10px;">
      Mois de :<span id="mois"> </span>
      <script>
        var mois= document.getElementById("month").options[select.selectedIndex].value;
        var document.getElementById("mois").innerHTML=mois;
      </script>
    </h5>
    </td>
  </tr>
</table>
<br/>

<table  class="border a-center" style="font-size: 12.5px;">
  <tr><td  style="text-align:center;color:white;size:18px;background-color:hsl(318, 55%, 45%)" colspan="15">1.Du Cadre administratif</td></tr>
    <tr>
     <th rowspan="3">Id</th>
      <th style="width:23%" rowspan="3">Noms et prenoms</th>
      <th rowspan="3" style="width:4%">Fonction</th>
      <th colspan="5" style="text-align:center;">Assiduité</th>
      <th colspan="5" style="text-align:center;">Ponctualité</th>
      <th rowspan="3">Observations</th>

    </tr>
    <tr>
        <td colspan="2">Heures</td>
          <td style="width:3%" rowspan="2">Heures Faites</td>
          <td style="width:3%" rowspan="2">Heures D'absence</td>
          <td style="width:3%" rowspan="2">Taux d'assiduité</td>
          <td colspan="2">Fréquence Dues</td>
          <td style="width:3%" rowspan="2">Fréq.Faites</td>
          <td style="width:3%" rowspan="2">FréqNfaites</td>
          <td rowspan="2">Taux de ponctualité</td>

    </tr>
    <tr>
      <td>Hebdo</td>
      <td>Mensuel</td>
      <td>Hebdo</td>
      <td>Mensuel</td>
    </tr>
    <tbody  id="admin_perm">


        @foreach ($personnel as $person)
        <tr>
            @if($person->role=='Cadre Administratif')
            <td>000{{ $person->id }}</td>
            <td>{{ $person->name }}</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>Ponctuel</td>
            @endif
        </tr>
        @endforeach


    </tbody>
</table>
<br/>
<br/>
  <table   class="border a-center" style="font-size: 12.5px;border-top-style:none;">
    <tr><td  style="text-align:center;color:white;size:18px;background-color:hsl(318, 55%, 45%)" colspan="15">2. Du personnel </td></tr>
    <tr>
     <th rowspan="3">N°</th>
      <th style="width:23%" rowspan="3">Noms et prenoms</th>
      <th rowspan="3" style="width:4%" >Fonction</th>
      <th colspan="5" style="text-align:center;">Assiduité</th>
      <th colspan="5" style="text-align:center;">Ponctualité</th>
      <th rowspan="3">Observations</th>

    </tr>
    <tr>
        <td colspan="2">Heures</td>
          <td style="width:3%" rowspan="2">Heures Faites</td>
          <td style="width:3%" rowspan="2">Heures D'absence</td>
          <td style="width:3%" rowspan="2">Taux d'assiduité</td>
          <td colspan="2">Fréquence Dues</td>
          <td style="width:3%" rowspan="2">Fréq.Faites</td>
          <td style="width:3%" rowspan="2">FréqNfaites</td>
          <td rowspan="2">Taux de ponctualité</td>

    </tr>
    <tr>
      <td>Hebdo</td>
      <td>Mensuel</td>
      <td >Hebdo</td>
      <td>Mensuel</td>
    </tr>
      <tbody  id="admin_vac">
        @foreach ($personnel as $person)
        <tr>
            @if($person->role=='Personnel')
            <td>000{{ $person->id }}</td>
            <td>{{ $person->name }}</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>3</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>5</td>
            <td>2</td>
            <td>80%</td>
            <td>Ponctuel</td>
            @endif
        </tr>
        @endforeach
      </tbody>

  </table><br/>
  <br/>
  <br/>
<table>
  <tr>
    <td class="gras"><h5>Fait à Yaounde, le <span id="day"></span> </h5></td>
    <td class="gras"><h5>Le Chef de departement</h5></td>
  </tr>
</table>
<br/>
<br/>
<br/>
</div>

@endsection
<script type="text/javascript">
    var d = new Date();
    var date = d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear();
    var fullDate = date;
    $("#day").text(fullDate);
    $('#month').on('change', function(e){
        var optionSelected = $("option:selected", this);
        alert(optionSelected);
    }



    </script>
