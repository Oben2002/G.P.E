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
                    <select name="month" class="form-control custom-select">
                        <option value="">Sélectionner le mois</option>
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
                     <button title="Mettre à jour" id="update" class="oufbutton btn btn-primary"><i class="bi bi-arrow-clockwise"></i> Mettre à jour</button>

                </td>
         <td>
               <button type='button' id='print'class='oufbutton btn btn-success'><i class="bi bi-printer"></i> Imprimer</button>
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
      Période allant du :  <span id="periodeD" >13/02/2017 </span> au <span id="periodeF">10/03/2017</span>
    </h5>
    </td>
  </tr>
</table>
<br/>

<table  class="border a-center" style="font-size: 12.5px;">
  <tr><td  style="text-align:center;color:white;size:18px;background-color:hsl(318, 55%, 45%)" colspan="15">1.Du Cadre administratif</td></tr>
    <tr>
     <th rowspan="3">N°</th>
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
        <tr>
            <td>1</td>
            <td>Kenne</td>
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
          </tr>
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
      <tbody  id="admin_vac"></tbody>

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

    $("#update").on("click",function(){
      if($("#date1").val()!="" && $("#date2").val()!=""  ) {
      $("#periodeD").text($("#date1").val());
      $("#periodeF").text($("#date2").val());
      $("#admin_perm").html("");
      $("#ensei_perm").html("");
      $("#ensei_vac").html("");
      $("#admin_vac").html("");
      $.ajax({
      type: 'GET',
      url: '/ajaxassiduite/'+$("#date1").val()+"/"+$("#date2").val(),
      success: function (response) {
            var ath=0,atm=0,athf=0,atha=0,atta=0,atfh=0,atfm=0,atff=0,atfnf=0,attp=0;
            var eth=0,etm=0,ethf=0,etha=0,etta=0,etfh=0,etfm=0,etff=0,etfnf=0,ettp=0;
            var pth=0,ptm=0,pthf=0,ptha=0,ptta=0,ptfh=0,ptfm=0,ptff=0,ptfnf=0,pttp=0;
            num1=0,num2=0,num3=0,num4=0;
            if(response.length==0){
                alert("Données absentes pour charger le rapport");
            }else{
            for(i=0;i<response.length;i++){

                if(response[i].statut=="Permanent" && response[i].fonction!="ENSEIGNANT"){
                  num1++;
                  $("#admin_perm").append("<tr><td>"+num1+"</td><td>"+response[i].nom+" "+response[i].prenom+"</td><td>"+response[i].grade+"</td><td>"+response[i].fonction+"</td><td>"+response[i].heures_heb+"</td><td>"+response[i].heures_mois+"</td><td>"+response[i].heures_faites+"</td><td>"+response[i].heures_abs+"</td><td>"+response[i].taux_assiduite+"</td><td>"+response[i].freq_heb+"</td><td>"+response[i].freq_mois+"</td><td>"+response[i].freq_faites+"</td><td>"+response[i].freq_Nfaites+"</td><td>"+response[i].taux_ponctualite+"</td><td></td></tr>");
                  ath+=response[i].heures_heb;
                  atm+=response[i].heures_mois;
                  athf+=response[i].heures_faites;
                  atha+=response[i].heures_abs;
                  atta+=response[i].taux_assiduite;
                  atfh+=response[i].freq_heb;
                  atfm+=response[i].freq_mois;
                  atff+=response[i].freq_faites;
                  atfnf+=response[i].freq_Nfaites;
                  attp+=response[i].taux_ponctualite;
                }
                if(response[i].statut=="Permanent" && response[i].fonction=="ENSEIGNANT"){
                  num2++;
                  $("#ensei_perm").append("<tr><td>"+num2+"</td><td>"+response[i].nom+" "+response[i].prenom+"</td><td>"+response[i].grade+"</td><td>"+response[i].fonction+"</td><td>"+response[i].heures_heb+"</td><td>"+response[i].heures_mois+"</td><td>"+response[i].heures_faites+"</td><td>"+response[i].heures_abs+"</td><td>"+response[i].taux_assiduite+"</td><td>"+response[i].freq_heb+"</td><td>"+response[i].freq_mois+"</td><td>"+response[i].freq_faites+"</td><td>"+response[i].freq_Nfaites+"</td><td>"+response[i].taux_ponctualite+"</td><td></td></tr>");
                  eth+=response[i].heures_heb;
                  etm+=response[i].heures_mois;
                  ethf+=response[i].heures_faites;
                  etha+=response[i].heures_abs;
                  etta+=response[i].taux_assiduite;
                  etfh+=response[i].freq_heb;
                  etfm+=response[i].freq_mois;
                  etff+=response[i].freq_faites;
                  etfnf+=response[i].freq_Nfaites;
                  ettp+=response[i].taux_ponctualite;
                }
                if(response[i].statut=="Vacataire" && response[i].fonction=="ENSEIGNANT"){
                  num3++;
                  $("#ensei_vac").append("<tr><td>"+num3+"</td><td>"+response[i].nom+" "+response[i].prenom+"</td><td>"+response[i].grade+"</td><td>"+response[i].fonction+"</td><td>"+response[i].heures_heb+"</td><td>"+response[i].heures_mois+"</td><td>"+response[i].heures_faites+"</td><td>"+response[i].heures_abs+"</td><td>"+response[i].taux_assiduite+"</td><td>"+response[i].freq_heb+"</td><td>"+response[i].freq_mois+"</td><td>"+response[i].freq_faites+"</td><td>"+response[i].freq_Nfaites+"</td><td>"+response[i].taux_ponctualite+"</td><td></td></tr>");
                  eth+=response[i].heures_heb;
                  etm+=response[i].heures_mois;
                  ethf+=response[i].heures_faites;
                  etha+=response[i].heures_abs;
                  etta+=response[i].taux_assiduite;
                  etfh+=response[i].freq_heb;
                  etfm+=response[i].freq_mois;
                  etff+=response[i].freq_faites;
                  etfnf+=response[i].freq_Nfaites;
                  ettp+=response[i].taux_ponctualite;
                }
                if(response[i].statut=="Vacataire" && response[i].fonction!="ENSEIGNANT"){
                  num4++;
                  $("#admin_vac").append("<tr><td>"+num4+"</td><td>"+response[i].nom+" "+response[i].prenom+"</td><td>"+response[i].grade+"</td><td>"+response[i].fonction+"</td><td>"+response[i].heures_heb+"</td><td>"+response[i].heures_mois+"</td><td>"+response[i].heures_faites+"</td><td>"+response[i].heures_abs+"</td><td>"+response[i].taux_assiduite+"</td><td>"+response[i].freq_heb+"</td><td>"+response[i].freq_mois+"</td><td>"+response[i].freq_faites+"</td><td>"+response[i].freq_Nfaites+"</td><td>"+response[i].taux_ponctualite+"</td><td></td></tr>");
                  ath+=response[i].heures_heb;
                  atm+=response[i].heures_mois;
                  athf+=response[i].heures_faites;
                  atha+=response[i].heures_abs;
                  atta+=response[i].taux_assiduite;
                  atfh+=response[i].freq_heb;
                  atfm+=response[i].freq_mois;
                  atff+=response[i].freq_faites;
                  atfnf+=response[i].freq_Nfaites;
                  attp+=response[i].taux_ponctualite;
                }


            }
            $("#admin_vac").append('<tr><td id="totalAdmin" style="color:white;size:18px;background-color:red" colspan="4">Total personnel administratif</td><td id="ATH"></td><td id="ATM"></td><td id="ATHF"></td><td id="ATHA"></td><td id="ATTA"></td><td id="ATFH"></td><td id="ATFM"></td><td id="ATFF"></td><td id="ATFNF"></td><td id="ATTP"></td><td></td></tr>');
            $("#ensei_vac").append('<tr><td id="totalEnsei" colspan="4" style="color:white;size:18px;background-color:red">Total personnel Enseignant</td><td id="ETH"></td><td id="ETM"></td><td id="ETHF"></td><td id="ETHA"></td><td id="ETTA"></td><td id="ETFH"></td><td id="ETFM"></td><td id="ETFF"></td><td id="ETFNF"></td><td id="ETTP"></td><td></td></tr><tr><td id="totalPers" colspan="4" style="color:white;size:18px;background-color:red">Total du personnel du lycée</td><td id="PTH"></td><td id="PTM"></td><td id="PTHF"></td><td id="PTHA"></td><td id="PTTA"></td><td id="PTFH"></td><td id="PTFM"></td><td id="PTFF"></td><td id="PTFNF"></td><td id="PTTP"></td><td ></td></tr>');
            //totaux des totux
            pth+=ath+eth;
            ptm+=atm+etm;
            pthf+=athf+ethf;
            ptha+=atha+etha;
            ptta+=atta+etta;
            ptfh+=atfh+etfh;
            ptfm+=atfm+etfm;
            ptff+=atff+etff;
            ptfnf+=atfnf+etfnf;
            pttp+=attp+ettp;

            $("#PTH").text(pth);
            $("#PTM").text(ptm);
            $("#PTHF").text(pthf);
            $("#PTHA").text(pthf);
            $("#PTTA").text(ptta);
            $("#PTFH").text(ptfh);
            $("#PTFM").text(ptfm);
            $("#PTFF").text(ptff);
            $("#PTFNF").text(ptfnf);
            $("#PTTP").text(pttp);
            //Totaux du personnels administratifs
            $("#ATH").text(ath);
            $("#ATM").text(atm);
            $("#ATHF").text(athf);
            $("#ATHA").text(athf);
            $("#ATTA").text(atta);
            $("#ATFH").text(atfh);
            $("#ATFM").text(atfm);
            $("#ATFF").text(atff);
            $("#ATFNF").text(atfnf);
            $("#ATTP").text(attp);
            //totaux Enseignants
            $("#ETH").text(eth);
            $("#ETM").text(etm);
            $("#ETHF").text(ethf);
            $("#ETHA").text(ethf);
            $("#ETTA").text(etta);
            $("#ETFH").text(etfh);
            $("#ETFM").text(etfm);
            $("#ETFF").text(etff);
            $("#ETFNF").text(etfnf);
            $("#ETTP").text(ettp);
          }
      },
      error: function (jqXHR, exception) {
        alert(jqXHR);
      }
    });
    }else alert("veuillez sélectionner toutes les dates svp!!!");
    });
    $("#jqxExpander").jqxExpander({ theme: "ui-redmond" });
    $("#print").jqxButton();
    $("#print").click(function () {
                  var gridContent = $("#printer").html();
                  var newWindow = window.open('', '', 'width=800, height=500'),
                  document = newWindow.document.open(),
                  pageContent =
                      '<!DOCTYPE html>\n' +
                      '<html>\n' +
                      '<head>\n' +
                      '<meta charset="utf-8" />\n' +
                      '<title>G.P.E</title>\n' +
                      '<link href="../css/rapport-print.css" rel="stylesheet"/>\n' +
                      '</head>\n' +
                      '<body>\n' + gridContent + '\n</body>\n</html>';
                  document.write(pageContent);
                  document.close();
                  document.print();
              });

    </script>
