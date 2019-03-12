<?php
$spear = $_POST['spear'];
$sword = $_POST['sword'];
$axe = $_POST['axe'];
$spy = $_POST['spy'];
$light = $_POST['light'];
$heavy = $_POST['heavy'];
$ram = $_POST['ram'];
$coord = $_POST['coord'];
$make = $_POST['make'];
$lume = $_POST['lume'];

function check ($id){
    if(empty($id))
    {
        $id = 0;
        return $id;
    }
    else
    {
        return $id;
    }
}
?>
<html>
    <head>
        <title>Cei mai importanti oameni ai planetei</title>
        <script src='js/jquery.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <link rel='stylesheet' type='text/css' href='css/style.css' />
        <link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
        <link rel='stylesheet' type='text/css' href='css/atom.css' />
    </head>
    <body>
        <div class='menu'>
        <center><h2>Meniu</h2></center>
        <ul class='pri'>
            <li><a href='index.php'>HomePage</a></li>
        </ul>
        </div>
        <header>
            <div class='section-wapper'>
                <h1>
                    Enjoy!<br/>
                    <h2 class='sub'>Your script its DONE! Just put on your bookmark!</h2>
                </h1>
            </div>
        </header>
            <!----------------------------HEADER&MENU--------------------------->
        <section class='intro section-wrapper'>
            <div class='span-9' style='word-wrap: break-word;'>
            <center><h1>Check befor use! BETA!</h1></center>
                <div class='well' style="width:100%;min-height:200px;">
<?php
    if(isset($make, $lume))
    {
            $spear = check($spear);
            $sword = check($sword);
            $axe = check($axe);
            $spy = check($spy);
            $light = check($light);
            $heavy = check($heavy);
            $ram = check($ram);
            $coord = check($coord);
            $lume = check($lume);
            echo "javascript:sp=$spear;sw=$sword;ax=$axe;ar=0;scout=$spy;lc=$light;mount=0;hv=$heavy;cat=0;ra=$ram;pal=0;nob=0;coords='$coord';var server='$lume';var doc=document;var serv='http://ro'+server+'.triburile.ro/game.php?screen=place';if(window.frames.length>0)doc=window.main.document;url=document.URL;if(url.indexOf('screen=place')==-1)$(location).attr('href',serv);coords=coords.split(' ');index=0;farmcookie=document.cookie.match('(^|;) ?farm=([^;]*)(;|$)');if(farmcookie!=null)index=parseInt(farmcookie[2]);if(index>=coords.length)alert('Ultimul sat');if(index>=coords.length)index=0;coords=coords[index];coords=coords.split('|');index=index+1;cookie_date=new Date(2020,12,12);document.cookie='farm='+index+';expires='+cookie_date.toGMTString();doc.forms[0].x.value=coords[0];doc.forms[0].y.value=coords[1];insertUnit(doc.forms[0].spear,sp);insertUnit(doc.forms[0].sword,sw);insertUnit(doc.forms[0].axe,ax);insertUnit(doc.forms[0].archer,ar);insertUnit(doc.forms[0].spy,scout);insertUnit(doc.forms[0].light,lc);insertUnit(doc.forms[0].marcher,mount);insertUnit(doc.forms[0].heavy,hv);insertUnit(doc.forms[0].ram,ra);insertUnit(doc.forms[0].catapult,cat);insertUnit(doc.forms[0].knight,pal);insertUnit(doc.forms[0].snob,nob);end()";
        }
        else 
        {
            echo " NU SUNT DATE ";
        }
?>
            </div>

<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
                    </section>
        <!----------------------------FOOTER--------------------------->
        <footer>
                <h3>
                <center>&copy; Fmohican 2015<center>
                </h3>
        </footer>
    </body>
</html>