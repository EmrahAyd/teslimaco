<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESLİM EDİLEN ANALİZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar','corechart']});
      google.charts.setOnLoadCallback(drawChart);
      let teslim = 0;
      let donen = 0;
      let ilisi = "";
      function drawChart(ek,i,ce) {
        document.getElementById("spinner").classList.remove("show");

// Create the data table.
var data = google.visualization.arrayToDataTable(ek);

// Set chart options
var options = {
          chart: {
            title: ce+' ilçesi',
            colors: ['#388E3C', '#db4437', '#ec8f6e', '#f3b49f', '#f6c7b6'],
            width:500,
            height:400,


          }
        };
  var nameofchart = "chart_div"+i;
  var chart = new google.charts.Bar(document.getElementById(nameofchart));
  chart.draw(data, google.charts.Bar.convertOptions(options));




  var data = google.visualization.arrayToDataTable([
          ['Durum', 'Adet'],
          ['Teslim',     teslim],
          ['Dönen',     donen],

        ]);

        var options = {
          title: ilisi,
          is3D: true,
          colors: ['#388E3C', '#db4437', '#ec8f6e', '#f3b49f', '#f6c7b6'],
          width:1500,
          height:500,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
}






    </script>

<?php
$today = date("Y-m-d");
$prev_date = date('Y-m-d', strtotime($date .' -30 day'));



?>








</head>
<body>
<div id="spinner">
      <img   width="100" src="ZZ5H.gif"/>
  </div>
    <div class="container" style="margin-top: 100px ;">
        <div class="row">
          <h1 id="ils" style="text-align: center;"></h1>
        <form action="/teslimatsor" method="post">
            <div class="col-md-6 offset-md-3" style="text-align: center; ">
                <div class="" style="text-align: center; ">
                    <label for="checkout-il">ŞEHİR*</label>
                    <select class="form-control custom-select" style="text-align: center;" name="il" id="checkout-il" required>
                            <option disabled="" selected="" value=""> -- Seçiniz -- </option>
                            <option value="adana">ADANA</option>
                            <option value="ad%yaman">ADIYAMAN</option>
                            <option value="afyon">AFYONKARAHİSAR</option>
                            <option value="a%gr">AĞRI</option>
                            <option value="amasya">AMASYA</option>
                            <option value="ankara">ANKARA</option>
                            <option value="antalya">ANTALYA</option>
                            <option value="artv%n">ARTVİN</option>
                            <option value="ayd%n">AYDIN</option>
                            <option value="bal%kes">BALIKESİR</option>
                            <option value="b%lec%k">BİLECİK</option>
                            <option value="b%ng%l">BİNGÖL</option>
                            <option value="b%tl%s">BİTLİS</option>
                            <option value="bolu">BOLU</option>
                            <option value="burdur">BURDUR</option>
                            <option value="bursa">BURSA</option>
                            <option value="anakkale">ÇANAKKALE</option>
                            <option value="ank&rı">ÇANKIRI</option>
                            <option value="%orum">ÇORUM</option>
                            <option value="den%zl">DENİZLİ</option>
                            <option value="d%yarbak">DİYARBAKIR</option>
                            <option value="ed%rne">EDİRNE</option>
                            <option value="elaz%">ELAZIĞ</option>
                            <option value="erz%ncan">ERZİNCAN</option>
                            <option value="erzurum">ERZURUM</option>
                            <option value="esk%eh">ESKİŞEHİR</option>
                            <option value="az%antep">GAZİANTEP</option>
                            <option value="g%resun">GİRESUN</option>
                            <option value="g%m%hane">GÜMÜŞHANE</option>
                            <option value="hakkar">HAKKARİ</option>
                            <option value="hatay">HATAY</option>
                            <option value="sparta">ISPARTA</option>
                            <option value="mers%n">MERSİN</option>
                            <option value="stanbul">İSTANBUL</option>
                            <option value="zm%r">İZMİR</option>
                            <option value="kars">KARS</option>
                            <option value="kastamonu">KASTAMONU</option>
                            <option value="kayser">KAYSERİ</option>
                            <option value="k%rklarel">KIRKLARELİ</option>
                            <option value="k%r%eh%r">KIRŞEHİR</option>
                            <option value="kocael">KOCAELİ</option>
                            <option value="konya">KONYA</option>
                            <option value="k%tahya">KÜTAHYA</option>
                            <option value="malatya">MALATYA</option>
                            <option value="man%sa">MANİSA</option>
                            <option value="kahramanmara">KAHRAMANMARAŞ</option>
                            <option value="mard%n">MARDİN</option>
                            <option value="mu%la">MUĞLA</option>
                            <option value="nev%eh">NEVŞEHİR</option>
                            <option value="n%de">NİĞDE</option>
                            <option value="ordu">ORDU</option>
                            <option value="r%ze">RİZE</option>
                            <option value="sakarya">SAKARYA</option>
                            <option value="samsun">SAMSUN</option>
                            <option value="s%rt">SİİRT</option>
                            <option value="s%nop">SİNOP</option>
                            <option value="s%vas">SİVAS</option>
                            <option value="tek%rda">TEKİRDAĞ</option>
                            <option value="tokat">TOKAT</option>
                            <option value="trabzon">TRABZON</option>
                            <option value="tuncel">TUNCELİ</option>
                            <option value="anl%urfa">ŞANLIURFA</option>
                            <option value="u%ak">UŞAK</option>
                            <option value="van">VAN</option>
                            <option value="yoz%at">YOZGAT</option>
                            <option value="zonguldak">ZONGULDAK</option>
                            <option value="aksaray">AKSARAY</option>
                            <option value="bayburt">BAYBURT</option>
                            <option value="karaman">KARAMAN</option>
                            <option value="k%r%kkale">KIRIKKALE</option>
                            <option value="batman">BATMAN</option>
                            <option value="rnak">ŞIRNAK</option>
                            <option value="bart%n">BARTIN</option>
                            <option value="ardahan">ARDAHAN</option>
                            <option value="d%r">IĞDIR</option>
                            <option value="yalova">YALOVA</option>
                            <option value="karab%k">KARABÜK</option>
                            <option value="k%l%s">KİLİS</option>
                            <option value="osman%iye">OSMANİYE</option>
                            <option value="d%zce">DÜZCE</option>
                            <option value="yurtd%sı">YURTDISI</option>
                    </select>
                </div>
                <div class="col-md-6 offset-md-3">
                    <div class="">
                    <label for="checkout-firma">Firma</label>
                    <select class="form-control custom-select" name="firma" id="checkout-firma">
                        <option value="" selected>TÜMÜ</option>
                        <option value="IST">KARGOIST</option>
                        <option value="ver">VERAR</option>
                        <option value="gel">GEL AL</option>
                        <option value="ptt">PTT</option>
                        <option value="yaka">YakamozEX</option>
                        <option value="MNG">MNG</option>
                        <option value="aras">ARAS</option>
                    </select>

                    </div>
                </div>
                <div class="col-md-6 offset-md-3" style="display: block !important; text-aling:center;" >
                    <input style="margin-top: 10px;" type="date" id="tarb" value="<?=$prev_date;?>"> ile <input style="margin-top: 10px" type="date" id="tarbi" value="<?php echo $today; ?>"> arası.
                </div>

            </div>
        </form>

        <div class="col-md-4 offset-md-4" style="display: block !important; text-aling:center;">
                  <button style="background-color:#ff0000c9; color:white; margin-bottom:10px; margin-left:38px;" id="lig">Seçili Tarihler arası en düşükler ligi gör.</button>
        </div>

        <div class="row">
          <div id="endusuk" style="text-aling:center;" class="fixed_headers">
          </div>

          <div class="col-sm-12"><div id="chart_div" style="width: 500px;"></div></div>
          <div class="col-sm-12"><div id="chart_div1"></div></div>
          <div class="col-sm-12"><div id="chart_div2"></div></div>
          <div class="col-sm-12"><div id="chart_div3"></div></div>
          <div class="col-sm-12"><div id="chart_div4"></div></div>
          <div class="col-sm-12"><div id="chart_div5"></div></div>
          <div class="col-sm-12"><div id="chart_div6"></div></div>
          <div class="col-sm-12"><div id="chart_div7"></div></div>
          <div class="col-sm-12"><div id="chart_div8"></div></div>
          <div class="col-sm-12"><div id="chart_div9"></div></div>
          <div class="col-sm-12"><div id="chart_div10"></div></div>
          <div class="col-sm-12"><div id="chart_div11"></div></div>
          <div class="col-sm-12"><div id="chart_div12"></div></div>
          <div class="col-sm-12"><div id="chart_div13"></div></div>
          <div class="col-sm-12"><div id="chart_div14"></div></div>
          <div class="col-sm-12"><div id="chart_div15"></div></div>
          <div class="col-sm-12"><div id="chart_div16"></div></div>
          <div class="col-sm-12"><div id="chart_div17"></div></div>
          <div class="col-sm-12"><div id="chart_div18"></div></div>
          <div class="col-sm-12"><div id="chart_div19"></div></div>
          <div class="col-sm-12"><div id="chart_div20"></div></div>
          <div class="col-sm-12"><div id="chart_div21"></div></div>
          <div class="col-sm-12"><div id="chart_div22"></div></div>
          <div class="col-sm-12"><div id="chart_div23"></div></div>
          <div class="col-sm-12"><div id="chart_div24"></div></div>
          <div class="col-sm-12"><div id="chart_div26"></div></div>
          <div class="col-sm-12"><div id="chart_div27"></div></div>
          <div class="col-sm-12"><div id="chart_div28"></div></div>
          <div class="col-sm-12"><div id="chart_div29"></div></div>
          <div class="col-sm-12"><div id="chart_div30"></div></div>
          <div class="col-sm-12"><div id="chart_div31"></div></div>
          <div class="col-sm-12"><div id="chart_div32"></div></div>
          <div class="col-sm-12"><div id="chart_div33"></div></div>
          <div class="col-sm-12"><div id="chart_div34"></div></div>
          <div class="col-sm-12"><div id="chart_div35"></div></div>
          <div class="col-sm-12"><div id="chart_div36"></div></div>
          <div class="col-sm-12"><div id="chart_div37"></div></div>
          <div class="col-sm-12"><div id="chart_div38"></div></div>
          <div class="col-sm-12"><div id="chart_div39"></div></div>
          <div class="col-sm-12"><div id="chart_div40"></div></div>


        </div>


        </div>
      </div>
    </div>






    <script type="text/javascript">

function show () {
  document.getElementById("spinner").classList.add("show");
}
function hide () {
  document.getElementById("spinner").classList.remove("show");
}
    $(document).ready(function() {
      $('#lig').on('click', function () {
        document.getElementById("spinner").classList.add("show");
        var btar = ($("#tarbi").val())+" 00:00:00"
        var star = $("#tarb").val()+" 00:00:00"
        $("#lig").attr("disabled", true);
        var Status = $(this).val();
        $.ajax({
            url: 'dusuk',
            data: {
              btar: btar,
              star: star
            },
            success: function(data) {

              const datw = JSON.parse(data);

                  // Create a table element
                  const table = document.createElement("table");

                  // Create table head
                  const thead = document.createElement("thead");
                  const headRow = document.createElement("tr");
                  const headCity = document.createElement("th");
                  headCity.innerText = "City";
                  const headDelivered = document.createElement("th");
                  headDelivered.innerText = "Delivered";
                  const headReturned = document.createElement("th");
                  headReturned.innerText = "Returned";
                  const headOverall = document.createElement("th");
                  headOverall.innerText = "Overall";
                  headRow.appendChild(headCity);
                  headRow.appendChild(headDelivered);
                  headRow.appendChild(headReturned);
                  headRow.appendChild(headOverall);
                  thead.appendChild(headRow);
                  table.appendChild(thead);

                  // Create table body
                  const tbody = document.createElement("tbody");

                  // Loop through the data and create rows for each object
                  datw.forEach(item => {
                    const row = document.createElement("tr");
                    const city = document.createElement("td");
                    city.innerText = item.il;
                    const delivered = document.createElement("td");
                    delivered.innerText = item.teslim;
                    const returned = document.createElement("td");
                    returned.innerText = item.donen;
                    const overall = document.createElement("td");
                    overall.innerText = item.genelO;
                    row.appendChild(city);
                    row.appendChild(delivered);
                    row.appendChild(returned);
                    row.appendChild(overall);
                    tbody.appendChild(row);
                  });
                  table.appendChild(tbody);

                  // Append the table to the body of the HTML document
                  document.getElementById("endusuk").appendChild(table);
                  document.getElementById("spinner").classList.remove("show");

              $("#lig").attr("disabled", false);
            }
        });
    });

      $("#checkout-il").change(function() {
        document.getElementById("spinner").classList.add("show");
        var id = $(this).find("option:selected").val(); //alert(id);
        ilisi = $(this).find("option:selected").html(); //alert(id);
        var star = $('#tarb').val();
        var btar = $('#tarbi').val();
        $('#ils').html(ilisi);


        $.ajax({
          url: "tjson",
          method: "GET",
          data: {
            id: id,
            star: star+' 00:00:00',
            btar: btar+' 00:00:00'
          },
          success: function(data) {
            dataa = JSON.parse(data);
            teslim = 0;
            donen = 0;

            for (var i = 0; i < data.length; i++) {

              teslim = teslim + parseInt(dataa[i].verT)+parseInt(dataa[i].stT)+parseInt(dataa[i].pttT)+parseInt(dataa[i].arasT)+parseInt(dataa[i].gelT);
              donen = donen + parseInt(dataa[i].verD)+parseInt(dataa[i].stD)+parseInt(dataa[i].pttD)+parseInt(dataa[i].arasD)+parseInt(dataa[i].gelD);



              let ek = [['Firma', 'Teslim', 'Dönen'],
                ['Aras'+" (%"+(((parseInt(dataa[i].arasT)*100/(parseInt(dataa[i].arasT)+parseInt(dataa[i].arasD)))).toFixed(1)) + ")",parseInt(dataa[i].arasT),parseInt(dataa[i].arasD)],
                ['Verar'+" (%"+(((parseInt(dataa[i].verT)*100/(parseInt(dataa[i].verT)+parseInt(dataa[i].verD)))).toFixed(1)) + ")",parseInt(dataa[i].verT),parseInt(dataa[i].verD)],
                ['GelAl'+" (%"+(((parseInt(dataa[i].gelT)*100/(parseInt(dataa[i].gelT)+parseInt(dataa[i].gelD)))).toFixed(1)) + ")",parseInt(dataa[i].gelT),parseInt(dataa[i].gelD)],
                ['KargoIST'+" (%"+(((parseInt(dataa[i].stT)*100/(parseInt(dataa[i].stT)+parseInt(dataa[i].stD)))).toFixed(1)) + ")",parseInt(dataa[i].stT),parseInt(dataa[i].stD)],
                ['PTT'+" (%"+(((parseInt(dataa[i].pttT)*100/(parseInt(dataa[i].pttT)+parseInt(dataa[i].pttD)))).toFixed(1)) + ")",parseInt(dataa[i].pttT),parseInt(dataa[i].pttD)],
              ];
              // dataa[i].ilce+((teslim/(teslim+donen))*0,01)

              drawChart(ek,i+1, dataa[i].ilce);

}

          }
        });
});



      $(".teslimat-form-trgr").click(function() {

        //$( "#teslimat-form" ).submit();

      });

    });



    // (A) SHOW & HIDE SPINNER


// (B) AJAX DEMO - USE HTTP:// NOT FILE://
function demoAJAX () {
  show(); // BLOCK PAGE WHILE LOADING
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "page.html");
  xhr.onload = function(){
    document.getElementById("container").innerHTML = this.response;
    hide(); // UNBLOCK PAGE
  };
  xhr.send();
}





    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
      .div{
        margin:5px;
        padding:5px;
      }

      .col-sm-12{
        border-bottom:5px solid;
      }

      /* (A) FULL SCREEN WRAPPER */
#spinner {
  position: fixed;
  top: 0; left: 0;
  width: 100vw; height: 100vh;
  z-index: 9999;
  background: #05252c47;
}

/* (B) CENTER LOADING SPINNER */
#spinner img {
  position: absolute;
  top: 33%; left: 50%;
  transform: translate(-50%);
}

/* (C) SHOW & HIDE */
#spinner {
  visibility: hidden;
  opacity: 0;
}
#spinner.show {
  visibility: visible;
  opacity: 1;
}
text{
  font-weight:bolder;
}

.fixed_headers {
  width: 100%;
  border-collapse: collapse;
}
.fixed_headers th {
  text-decoration: underline;
}
.fixed_headers th,
.fixed_headers td {
  padding: 5px;
  text-align: left;
}
.fixed_headers td:nth-child(1),
.fixed_headers th:nth-child(1) {
  min-width: 200px;
}
.fixed_headers td:nth-child(2),
.fixed_headers th:nth-child(2) {
  min-width: 200px;
}
.fixed_headers td:nth-child(3),
.fixed_headers th:nth-child(3) {
  width: 100%;
}
.fixed_headers thead {
  background-color: #333;
  color: #FDFDFD;
}
.fixed_headers thead tr {
  position: relative;
}
.fixed_headers tbody {
  width: 100%;
}
.fixed_headers tbody tr:nth-child(even) {
  background-color: #DDD;
}
::selection
{
   background-color: #37ffc4;
   color : #fff
}

    </style>
</body>
</html>