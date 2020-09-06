<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Vabilo na najino poroko</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arsenal">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Atma">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bellefair">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin+Sketch">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cormorant+Infant">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Just+Me+Again+Down+Here">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="/assets/css/Article-Clean.css">
    <link rel="stylesheet" href="/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="/assets/css/Map-Clean.css">
    <link rel="stylesheet" href="/assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/Team-Clean.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<?php

$show = False;
$ime = "";
$id = "";
$cerkvena = False;
$navadna = False;

$servername = "****";
$username = "****";
$password = "****";
$dbname = "****";
$sqltable = "****";


if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
    // read id
    $id = $_GET['id'];
    if (!empty($id))
    {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $conn->set_charset("utf8");

        $sqlquery = ('SELECT * FROM '.$sqltable.' WHERE webid = "'.$id.'";');
        $check = $conn->query($sqlquery);
        $row = $check->fetch_array();

        if(is_array($row))
        {
            if(count($row) == 22)
            {
                $show = True;
                $ime = $row[1];
                $cerkvena = boolval($row[2]);
                $navadna = boolval($row[3]);
            }
        }

        $conn->close();
    } 

    $urnik_suffix = '';
    if($cerkvena){$urnik_suffix .= '_cerk';}
    if($navadna){$urnik_suffix .= '_civ';}

}

?>

<body class="text-center" style="background-color: rgb(244,241,225);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#" style="font-weight: normal;font-family: Catamaran, sans-serif;">26. 9. 2020&nbsp;</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="font-family: Catamaran, sans-serif;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#vabilo">VABILO</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#urnik">URNIK</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#potrdi">POTRDI UDELEŽBO</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#informacije">INFO</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#zemljevid">ZEMLJEVID</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="team-clean" style="background-color: rgb(244,241,225);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="font-weight: normal;font-family: 'Cabin Sketch', cursive;font-size: 60px;margin-bottom: 15px; padding-top: 20px;">KLEMEN &nbsp;in &nbsp;KLARA<br></h2>
                <h2 class="text-center" style="font-weight: normal;font-family: 'Cabin Sketch', cursive;font-size: 50px;padding-top: 0px; margin-bottom: 15px;">26. &nbsp;september 2020<br></h2>
                <p class="text-center" style="font-family: Catamaran, sans-serif;width: 100%;">Živjo <?php if($show){echo('<strong>'.$ime.'</strong>.');} ?> Dobrodošel(-a) na spletni strani najinega poročnega dogodka, močno se ga veseliva preživeti s tabo!<br><br>To stran sva ustvarila kot priročno mesto vseh potrebnih informacij o najinem poročnem dnevu. Na njej najdeš vse potrebno<?php if($id != 'skavt'){
echo(', tudi svojo udeležbo nama lahko sporočiš kar preko nje');}?>.<br><br>Iz srca se ti zahvaljujeva za vso nepresahljivo podporo in radost ob najini dosedanji skupni poti. Tako da komaj čakava, da ta dan deliva z vami, najinimi najbližjimi!<br><br></p>
            </div>
        </div>
        <div style="width:100%; background-color: rgb(255,255,255);">
        &nbsp;
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 text-center" style="background-color: rgb(255,255,255);"><img class="rounded-circle" src="/assets/img/Klemen2.jpg" style="width: 160px;">
                    <h3 class="name" style="font-weight: normal;">Klemen Čotar</h3>
                    <p class="title">ženin</p>
                    <p class="description" style="font-family: Catamaran, sans-serif;">Razpet med Zemljo in vesoljem ter resnično in izmišljeno znanostjo, vendar vedno z računalnikom v torbi.<br><br>Vpleten v dogajnanje na NMN, Zavod 404, Space-si, FMF, ADL, Belesija in še kje... Zbiram tudi zelene kvadratke na GitHub-u in točke na sicris-u. Interneti znajo verjetno povedat več.</p>
                </div>
                <div class="col-md-6 col-lg-4 text-center" style="background-color: rgb(255,255,255);"><img class="rounded-circle" src="/assets/img/skupna4.jpg" style="width: 160px;">
                    <h3 class="name" style="font-weight: normal;">zaročenca</h3>
                    <p class="title">najina skupna zgodba</p>
                    <p class="text-center description" style="font-family: Catamaran, sans-serif;">Po poletju 2016, ko sva se prvič srečala in z LARP skupino odpotovala v Nemčijo na večji dogodek, se je najino nadaljno spoznavanje začelo počasi, a vztrajno. Zdelo se je, da se je vsak nov korak zgodil čisto spontano in preden sva se zavedala, je bilo to to... Še veva ne kdaj!<br><br>Skupaj sva od takrat preživela že marsikatero dogodivščino na izletih po Sloveniji, poleti 2018 prepotovala Škotsko in lanskega maja odšla v Belo krajino. Tam pa Klemena Klara preseneti s prstanom in vprašanjem...<br>&nbsp; <br>Tako sva, po malo več kot treh letih najine skupne poti, tik pred novim poglavjem najinih življenj.<br><br></p>
                </div>
                <div class="col-md-6 col-lg-4 text-center" style="background-color: rgb(255,255,255);"><img class="rounded-circle" src="/assets/img/Klara.jpg" style="width: 160px;">
                    <h3 class="name" style="font-weight: normal;">Klara Povše</h3>
                    <p class="title">nevesta</p>
                    <p class="description" style="font-family: Catamaran, sans-serif;">Zapletena v zračno svilo, misli domišlije in niti šivanja se pogosto znajdem visoko med oblaki, metri blaga in popackanimi čopiči.&nbsp;<br><br>Odraščala sem v Ljubljani v družbi dveh starejših sester in čudovitih staršev. <br></p>
                </div>
            </div>
        </div>
        </div>
    </div>
<div id="vabilo"></div>
<?php
if($show & $cerkvena & $navadna){
echo('<div class="article-clean" style="background-color: rgb(244,241,225);">
        <div class="container" style="background-color: rgb(242,238,213);">
            <div class="row" style="background-color: rgb(244,241,225);">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2" style="font-family: Catamaran, sans-serif;">
                    <div class="intro">
                        <h1 class="text-center" style="font-family: \'Cabin Sketch\', cursive;font-style: normal;"><strong>VABIVA TE NA</strong><br /><strong>CERKVENO IN CIVILNO POROKO TER SLAVJE</strong><br /></h1>
                        <p class="text-center"> <span class="date" style="font-family: Catamaran, sans-serif;font-weight: normal;"><strong>26. september 2020</strong></span></p><img class="img-fluid" src="/assets/img/slavje2_nov.jpg" style="margin-top: 0px;"></div>
                    <div class="text">
                        <p class="text-center" style="font-weight: normal;">Zbor za obred cerkvene poroke bo v rojstni župniji neveste v Štepanji vasi,&nbsp;ob 11:30 uri v cerkvi sv. Štefana.&nbsp;&nbsp;<br />Mekinčeva ulica 3, 1000 Ljubljana.  <a href="https://zupnija-stepanja-vas.rkc.si/" target="_blank">Dodatne informacije o župniji</a>.</p>
                        <p
                            class="text-center">Zbor za obred civilne poroke bo na gozdni jasi Kmetije na Lanišah, &nbsp;ob 15:30 uri.<br />Naslov: Podlanišče 15, 5282 Cerkno.<br />Poročno slavje bo sledilo&nbsp;pod starim&nbsp;kmečkim kozolcem Kmetije na Lanišah. <a href="https://www.nalanisah.com/" target="_blank">Dodatne informacije o kmetiji</a>.<br />&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>');
}?>
<?php
if($show & $cerkvena & !$navadna){
echo('<div class="article-clean" style="background-color: rgb(244,241,225);">
        <div class="container" style="background-color: rgb(242,238,213);">
            <div class="row" style="background-color: rgb(244,241,225);">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2" style="font-family: Catamaran, sans-serif;">
                    <div class="intro">
                        <h1 class="text-center" style="font-family: \'Cabin Sketch\', cursive;"><strong>VABIVA TE NA&nbsp;</strong><br /><strong>NAJINO CERKVENO POROKO</strong><br></h1>
                        <p class="text-center"> <span class="date" style="font-family: Catamaran, sans-serif;"><strong>26. september 2020</strong></span></p><img class="rounded img-fluid border" src="/assets/img/cerkvena_skica2_nov.jpg" style="margin-top: 0px;"></div>
                    <div class="text">
                        <p class="text-center">Zbor za obred cerkvene poroke bo v rojstni župniji neveste v Štepanji vasi, ob 11:30 uri v cerkvi sv. Štefana<br>Mekinčeva ulica 3, 1000 Ljubljana. <a href="https://zupnija-stepanja-vas.rkc.si/" target="_blank">Dodatne informacije o župniji</a>.<br />&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>');
}?>
<?php
if($show & !$cerkvena & $navadna){
echo('<div class="article-clean" style="background-color: rgb(244,241,225);">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2" style="font-family: Catamaran, sans-serif;background-color: rgb(244,241,225);">
                    <div class="intro">
                        <h1 class="text-center" style="font-family: \'Cabin Sketch\', cursive;"><strong>VABIVA TE NA&nbsp;</strong><br><strong>NAJINO CIVILNO POROKO IN SLAVJE</strong><br /></h1>
                        <p class="text-center"> <span class="date" style="font-family: Catamaran, sans-serif;"><strong>26. september 2020</strong></span></p><img class="img-fluid" src="/assets/img/civilna4_nov.jpg" style="margin-top: 0px;"></div>
                    <div class="text">
                        <p class="text-center">Zbor za obred civilne poroke bo na gozdni jasi Kmetije na Lanišah ob 15:30 uri.<br>Naslov: Podlanišče 15, 5282 Cerkno.<br />Poročno slavje bo sledilo pod starim kmečkim kozolcem kmetije na Lanišah. <a href="https://www.nalanisah.com/" target="_blank">Dodatne informacije o kmetiji</a>.<br />&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>');
}?>
<?php
if($show & ($cerkvena | $navadna) & $id != 'skavt'){
echo('<div id="urnik"></div>
      <div class="contact-clean" style="background-color: rgb(255,255,255);padding-top: 0;padding-bottom: 0;">
        </div><img src="/assets/img/urnik_bel.jpg" width="100%" height="30px"><img src="/assets/img/urnik'.$urnik_suffix.'.jpg?id=2" width="100%" style="padding-top: 0px;margin-top: -10px;"></div>
    <div id="potrdi"></div>
    <div class="contact-clean" style="background-color: rgb(255,255,255);padding-top: 40px;padding-bottom: 40px;">
        <form>
            <h2 class="text-center" style="font-family: \'Cabin Sketch\', cursive;">POTRDI UDELEŽBO</h2>
            <p class="text-justify">Najlažji način za potrditev udeležbe je izpolnitev spodnjega obrazca. Seveda sprejemava odgovore tudi preko ostalih komunikacijskih kanalov. Vašo pristonost prosimo potrdite najkasneje do 10. septembra 2020.</p>
            <div class="form-group"><textarea class="form-control" id="gosti-imena" placeholder="Vnesite imena udeležencev." rows="5"></textarea></div>
            <div class="form-group"><input class="form-control" type="number" id="odrasli" placeholder="Število odraslih"></div>
            <div class="form-group"><input class="form-control" type="number" id="otroci" placeholder="Število otrok"></div>
            <p class="text-justify">Potrjujem udeležno na:</p>');
if($cerkvena){echo('<p class="text-justify">cerkveni poroki&nbsp;<select class="custom-select" style="width: 30%;" id="pridem1"><optgroup label=""><option value="False" selected="">Ne</option><option value="True">Da</option></optgroup></select></p>');}
if($navadna){echo('<p class="text-justify">civilni poroki in slavju&nbsp;<select class="custom-select" style="width: 30%;" id="pridem2"><optgroup label=""><option value="False" selected="">Ne</option><option value="True">Da</option></optgroup></select></p>');}
 echo('           <div class="form-group"><textarea class="form-control" id="razno" placeholder="Dodatne opombe - vaše prehranske omejitve, prenočitev itd." rows="14"></textarea></div>
            <div id="submit-div" class="form-group"><button class="btn btn-primary" id="submit" name="submit" type="button">Potrdi udeležbo *</button></div>
            <div name="response"> </div>
        </form>
    </div>');
}?>
<?php
if($show){
    echo('<div id="informacije"></div>
    <div style="background-color: rgb(255,255,255);">
        <h1 class="text-center" style="background-color: rgb(244,241,225);font-family: \'Cabin Sketch\', cursive;">OSTALE INFORMACIJE</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 text-center" style="background-color: rgb(255,255,255);"><img src="/assets/img/gift.PNG"><em class="text-center" style="font-family: Catamaran, sans-serif;"><br>Želiva si, da se za darila ne obremenjujete z idejami. Če nama vseeno želite kaj podariti, bi bila še najbolj vesela prispevka, ki ga bova lahko porabila za ureditev najinega novega doma.<br></em></div>');
}
if($show & $navadna){
                echo('<div class="col-md-6 col-lg-4 text-center" style="background-color: rgb(255,255,255);"><img src="/assets/img/shoe2.PNG"><em style="font-family: Catamaran, sans-serif;font-style: italic;"><br>Civilni obred se bo v primeru lepega vremena odvil na gozdni jasi. Pot do nje je kratka, a z rahlim vzponom po kamniti in vremensko pogojeni blatni gozdni poti, zato močno odsvetujeva obutev kot so petke ali ravno očiščeni čevlji.<br></em></div>');
}
if($show & $navadna){
                echo('<div class="col-md-6 col-lg-4 text-center" style="background-color: rgb(255,255,255);"><img src="/assets/img/tent.PNG"><em style="font-family: Catamaran, sans-serif;font-style: italic;"><br>Na lokaciji poročnega slavja je možnost prespati na prostem v šotorih, ki jih morate prinesti s seboj. Imejte pa v mislih, da je mesec september vremensko zelo nepredvidljiv in se na to primerno pripravite.<br></em></div>');
}
if($show){
                echo('<div class="col-md-6 col-lg-4 text-center" style="background-color: rgb(255,255,255);"><img src="/assets/img/reuse2.PNG"><em style="font-family: Catamaran, sans-serif;font-style: italic;"><br>Klemen in Klara skušava imeti navade, ki čim bolj delujejo po načelu "nič odpadkov". To je filozofija, ki spodbuja preoblikovanje virov življenjskega cikla tako, da so vsi izdelki lahko večkrat uporabljeni. Tudi na najini poroki bova skušala to načelo upoštevati, in upava da boste tudi sami kdaj poskusili kaj podobnega.<br></em></div>');
}
if($show & $id != 'skavt'){
                echo('<div class="col-md-6 col-lg-4 text-center" style="background-color: rgb(255,255,255);"><img src="/assets/img/parking.PNG" style="width:100%;"><em style="font-family: Catamaran, sans-serif;font-style: italic;"><br>Parkirišč na lokaciji je kar nekaj, vendar pozivava da se pripeljete skupaj. Če iščete še koga, nama lahko to tudi sporočite in bova poskusila urediti.<br></em></div>');
}
if($show){
                echo('<div class="col-md-6 col-lg-4 text-center" style="background-color: rgb(255,255,255);"><img src="/assets/img/email.PNG"><em style="font-family: Catamaran, sans-serif;font-style: italic;"><br>Nobena stran ni popolna brez generičnega elektronskega naslova. Torej, če ne veste drugega kontakta, je za vas vedno odprt nabiralnik <a href="mailto:info@klemenklara.eu">info@klemenklara.eu</a>.<br></em></div>');
}
if($show){
    echo('                
            </div>
        </div>
    </div>');
}
?>

<?php
if($show){
    echo('<div id="covid"></div>
    <div style="background-color: rgb(255,255,255);">
        <h1 class="text-center" style="background-color: rgb(244,241,225);font-family: \'Cabin Sketch\', cursive;">OSTANIMO ZDRAVI</h1>
        <div class="container">
            <div class="row">
                <div class="text-center" style="background-color: rgb(255,255,255);"><img src="/assets/img/covid.jpg" width="125px"><em class="text-center" style="font-family: Catamaran, sans-serif;"><br>Letošnje leto je zagotovo zaznamoval Covid-19. Zato vas kot goste prosiva, da spoštujete svoje zdravje in zdravje vseh ostalih, ter ob kakršnih koli znakih slabšega počutja ostanete doma. Tudi če znaki niso povezani s simptomi Covid-19, še vedno lahko s svojo prisotnostjo okuženi s katerokoli drugo boleznijo oslabite imunski sistem predvsem otrok in starejših gostov, ki ga v teh negotovih časih potrebujejo. Prosiva tudi, da upoštevate vsa splošna preventivna priporočila in omejtive prostorov najinega poročnega dne. Obljubiva, da v nobenem primeru zaradi vaše odsotnosti ne bo prišlo do zamer!<br></em></div>');

    echo('                
            </div>
        </div>
    </div>');
}
?>



<?php
if($show & ($cerkvena | $navadna)){
echo('<div id="zemljevid"></div>
    <div class="map-clean" style="background-color: rgb(244,241,225);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="font-family: \'Cabin Sketch\', cursive;margin-bottom: 20px;padding-top: 20px;">ZEMLJEVID LOKACIJ</h2>
            </div>
        </div>    
    </div>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgGaylA4mYsBZWP8JC8rf5wSPS5fBCEOc"></script>');
}
else{
echo('<div class="map-clean" style="background-color: rgb(244,241,225);">
        <div class="container">
            <div class="intro">
                <p class="text-center" style="font-family: Catamaran, sans-serif;width: 100%;"><strong>&nbsp;<br />Izgleda da ste na stran zašli brez ustreznega povabila, zato vam ne moremo razkriti več podrobnejših informacij.<br/></strong></p>
            </div>
        </div>    
    </div>
');
}
?>
    <div class="footer-basic">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" style="font-family: Catamaran, sans-serif;">^^^^^^^^^ Nazaj na vrh strani ^^^^^^^^^</a><br />&nbsp;<br />* Na strani ni piškotkov. Informacije zbrane preko vnosnega obrazca bodo uporabljene le za namen organizacije poroke in odstranjene po njenem zaključku. Kljub temu morava upoštevati navodila o hranjunju podatkov gostov vsaj en mesec po zaključku dogodka.</li>
            </ul>
            <p class="copyright" style="font-family: Catamaran, sans-serif;">Klemen&amp;Klara© 2020</p>
        </footer>
    </div>
    
    <script>
<?php
    if($show & ($cerkvena | $navadna)){
        echo('        var map;
        map = new google.maps.Map(document.getElementById(\'map\'), {
              center: {lat: 46.0830477, lng: 14.210087},
              zoom: 10
        });');
    }
    
    if($cerkvena){
        echo('        var marker1 = new google.maps.Marker({
            position: new google.maps.LatLng(46.0513079, 14.5412705),
            title: "Cerkev Sv. Štefan",
            map: map
        });
        var infowindow1 = new google.maps.InfoWindow({
            content: "Cerkev Sv. Štefana <br /> Lokacija cerkvene poroke"
        });
        infowindow1.open(map, marker1);');
    }
    if($navadna){
        echo('        var marker2 = new google.maps.Marker({
            position: new google.maps.LatLng(46.1135713, 14.0313143),
            title: "Kmetija Na Lanišah",
            map: map
        });
        var infowindow2 = new google.maps.InfoWindow({
            content: "Kmetija Na Lanišah <br /> Lokacija civilne poroke in slavja"
        });
        infowindow2.open(map, marker2);');
    }
?>
    </script>

    <style>
      #map {
        height: 400px;
        width: 100%;
      }
    </style>

    <script>
    $(document).ready(function(){
        $('#submit').click(function() {
            $.ajax({
                type  : "POST",
                url   : "http://klemenklara.eu/odziv.php",
                data  : {
                    gosti: document.getElementById('gosti-imena').value,
                    odrasli: document.getElementById('odrasli').value,
                    otroci: document.getElementById('otroci').value,
                    cerkvena_pride: <?php if($cerkvena){echo('document.getElementById("pridem1").value');} else{echo('"False"');} ?>,
                    navadna_pride: <?php if($navadna){echo('document.getElementById("pridem2").value');} else{echo('"False"');} ?>,
                    opombe: document.getElementById('razno').value,
                    id: "<?php if($show){echo($id);} else{echo('none');} ?>"
                },
                success : function (msg){
                    document.getElementsByName('response')[0].innerHTML = msg;
                    document.getElementById('submit-div').style.display = 'none';
                }
            }); 
        });
    });
    </script>

</body>

</html>
