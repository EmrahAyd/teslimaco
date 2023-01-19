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
      function drawChart(ek,i,ce,x) {

// Create the data table.
var data = google.visualization.arrayToDataTable(ek);

// Set chart options
var options = {
          chart: {
            title: ce+' ilçesi',
            colors: ['#388E3C', '#db4437', '#ec8f6e', '#f3b49f', '#f6c7b6'],

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
                <div class="col-md-4 offset-md-4">
                </div>
            </div>
        </form>


        <div class="row">
          <div class="col-sm-12"><div id="chart_div" style="width: 500px;"></div></div>
          <div class="col-sm-6"><div id="chart_div1"></div></div>
          <div class="col-sm-6"><div id="chart_div2"></div></div>
          <div class="col-sm-6"><div id="chart_div3"></div></div>
          <div class="col-sm-6"><div id="chart_div4"></div></div>
          <div class="col-sm-6"><div id="chart_div5"></div></div>
          <div class="col-sm-6"><div id="chart_div6"></div></div>
          <div class="col-sm-6"><div id="chart_div7"></div></div>
          <div class="col-sm-6"><div id="chart_div8"></div></div>
          <div class="col-sm-6"><div id="chart_div9"></div></div>

        </div>


        </div>
    </div>






    <script type="text/javascript">
    $(document).ready(function() {


      $("#checkout-il").change(function() {
        var id = $(this).find("option:selected").val(); //alert(id);
        ilisi = $(this).find("option:selected").html(); //alert(id);
        var star = $('#tarb').val();
        var btar = $('#tarbi').val();
        $('#ils').html(ilisi);
        console.log(id,btar+' 00:00:00',star+' 00:00:00');

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

              teslim += parseInt(dataa[i].istD) + parseInt(dataa[i].arasD) + parseInt(dataa[i].gelD) + parseInt(dataa[i].verD) + parseInt(dataa[i].pttT) + parseInt(dataa[i].pttD);
              donen += parseInt(dataa[i].istT) + parseInt(dataa[i].arasT) + parseInt(dataa[i].gelT) + parseInt(dataa[i].verT) + parseInt(dataa[i].pttT);
              let ek = [['Firma', 'Teslim', 'Dönen'],
                ['Aras'+(parseInt(dataa[i].istT),parseInt(dataa[i].istD)+1),parseInt(dataa[i].arasT)+1,parseInt(dataa[i].arasD)+1],
                ['PTT',parseInt(dataa[i].pttT),parseInt(dataa[i].pttD)],
                ['Verar',parseInt(dataa[i].verT),parseInt(dataa[i].verD)],
                ['GelAl',parseInt(dataa[i].gelT),parseInt(dataa[i].gelD)],
                ['KargoIST',parseInt(dataa[i].istT),parseInt(dataa[i].istD)]

              ];

              drawChart(ek,i+1,dataa[i].ilce,"Bar");

}

          }
        });
      });



      $(".teslimat-form-trgr").click(function() {

        //$( "#teslimat-form" ).submit();

      });

    });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>