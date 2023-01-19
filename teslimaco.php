<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESLİM EDİLEN ANALİZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<?php
$today = date("Y-m-d");



?>








</head>
<body>

    <div class="container" style="margin-top: 100px ;">
        <div class="row">
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
                    <input style="margin-top: 10px;" type="date" name="tarb" value="<?php $_POST["tarb"] ?>"> ile <input style="margin-top: 10px" type="date" name="tarbi" value="<?php echo $today; ?>"> arası.
                </div>
                <div class="col-md-4 offset-md-4">
                    <button class="button" type="submit" style="text-aling:center; margin-top: 15px; width: 100%; " name="sor">SORGULA</button>
                </div>
            </div>
        </form>


        </div>
    </div>






    <script type="text/javascript">
    $(document).ready(function() {


      $("#checkout-il").change(function() {
        var id = $(this).find("option:selected").val(); //alert(id);
        console.log(id);

        $.ajax({
          url: "tjson",
          method: "GET",
          data: {
            id: id
          },
          success: function(data) {
            dataa = JSON.parse(data);
            for (var i = 0; i < data.length; i++) {

            console.log("Ilce: " + dataa[i].ilce);
            console.log("Kargo Firma: " + dataa[i].arasT);
            console.log("Durum 3 Sayisi: " + dataa[i].arasD);
            console.log("Durum 4 Sayisi: " + dataa[i].pttT);
            console.log("Durum 4 Sayisi: " + dataa[i].pttD);


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