<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
?>

<!DOCTYPE html>
<html lang="cs">
  
  <head>
    <meta charset="utf-8">
    <title>Server side reponsive test</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    
    <style>
      body { padding-top: 60px; }
      @media (max-width: 980px) {
          body { padding-top: 0 }
      }   
    </style>    
    
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>

  </head>
  
  <body>
    <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="index.php">
            ČT test
          </a>
          <ul class="nav">
            <li>
              <a href="index.php">
                Adaptive Images
              </a>
            </li>
            <li>
              <a href="response-js.php">
                Response JS
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="span12 columns">
                <p class="well">
                    <?php if ($detect->isMobile() && !$detect->isTablet() && !$detect->isiOS() && !$detect->isAndroidOS()): ?>
                        Koukáte přes mobil, starý křáp nebo šedivou myš.
                    <?php elseif ($detect->isMobile() && !$detect->isTablet() && $detect->isiOS()): ?>
                        Koukáte přes iPhone. Verze <?php echo $detect->version('iPhone'); ?>.
                    <?php elseif ($detect->isMobile() && !$detect->isTablet() && $detect->isAndroidOS()): ?>
                        Koukáte přes Android mobil. Verze  <?php echo $detect->version('Android'); ?>
                    <?php elseif ($detect->isTablet()): ?>
                        Koukáte přes tablet.
                    <?php else: ?>
                        Koukáte přes desktop nebo něco většího.
                    <?php endif; ?>                    
                </p>                
            </div>
        </div>        
      <div class="row">
        <div class="span4">
          <div>
            <p class="image">
                <img src="bootstrap/img/img_fb943c9fcf_big.jpeg" width="1024" height="765" alt="" />
            </p>
            <h2>
              Letiště JFK, de Gaulla - a teď i Václava Havla
            </h2>
            <p>
              Bydlel tu letí víkem funěla bratra. Oba kase smutno vyl do devětkrát ceny.
            </p>
          </div>
          <a class="btn" href="#">
            View details »
          </a>
        </div>
        <div class="span4">
          <div>
              <p class="image">
                  <img src="bootstrap/img/img_1068291961_big.jpeg" width="640" height="426" alt="" />
              </p>              
            <h2>
              Dobrodružství vědy a techniky
            </h2>
            <p>
              Sleduji OVM, abych se ujistil, že lidé, o kterých si myslím, že jsou ministři,
              jsou ještě ministři. Nenechám si ujít ani zasvěcené diskuze zajímavých
              hostů a odborníků v Historii.cs.
            </p>
          </div>
          <a class="btn" href="#">
            View details »
          </a>
        </div>
        <div class="span4">
          <div>
              <p class="image">
                  <img src="bootstrap/img/img_6985007958_big.jpeg" width="800" height="508" alt="" />
              </p>              
            <h2>
              Cesta do lesa
            </h2>
            <p>
              Bydlel tu letí víkem funěla bratra. Oba kase smutno vyl do devětkrát ceny,
              o mém bůhvíjak papoušek podrobnosti: večer vyvolá au vezl s tobě nebezpečný
              81, titul plané zabručel.&nbsp;Bydlel tu letí víkem funěla bratra.&nbsp;
            </p>
            <p>
            </p>
          </div>
          <a class="btn" href="#">
            View details »
          </a>
        </div>
      </div>
      
<?php // Obsah viditelny jen mimo mobily
    if (!($detect->isMobile() && !$detect->isTablet())): ?>
      <div class="row">
        <div class="span8">
          <h3>
            Obsah co není vidět na mobilech
          </h3>
          <p class="image">
            <img src="bootstrap/img/img_77c7b095b4_big.jpeg" width="1600" height="1067" alt="" />
          </p>
          <div>
            Sleduji OVM, abych se ujistil, že lidé, o kterých si myslím, že jsou ministři,
            jsou ještě ministři. Nenechám si ujít ani zasvěcené diskuze zajímavých
            hostů a odborníků v Historii.cs.
            <br>
          </div>
          <div>
            <br>
          </div>
          <div>
            Bydlel tu letí víkem funěla bratra. Oba kase smutno vyl do devětkrát ceny,
            o mém bůhvíjak papoušek podrobnosti: večer vyvolá au vezl s tobě nebezpečný
            81, titul plané zabručel.
            <br>
          </div>
        </div>
        <div class="span4">
            
        </div>
      </div>
<?php endif; ?>            
      <hr>
      <div>
        © Company 2012
      </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
    </script>
  </body>

</html>