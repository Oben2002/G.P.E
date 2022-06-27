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

    .headin{
        position: relative;
        text-align:center;
        font-size:18px;
        top: 50%;
        left: 50%;
        background-color:hsl(317, 32%, 37%);
    }
  </style>
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
          <img src="data:image/jpg;base64,{{ base64_encode(file_get_contents(public_path("uni_logo.jpg"))) }}">



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

        </td>
      </tr>
    </table>
    <br/>

    <table  class="border a-center" style="font-size: 12.5px;">
      <tr>
        <td class="headin" colspan="15">1.Du Cadre administratif</td></tr>
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
        <tr><td  class="headin" colspan="15">2. Du personnel </td></tr>
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
