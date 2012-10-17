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
      
      .thumb {
          float: left;
          width: 47%;
          margin: 0 3% 30px 0;
      }      
      
      .thumb img {
          width: 100%;
          height: auto;
      }
      
      img {
      	image-rendering: optimizeSpeed;             /* Legal fallback */
      	image-rendering: -moz-crisp-edges;          /* Firefox */
      	image-rendering: -o-crisp-edges;            /* Opera */
      	image-rendering: -webkit-optimize-contrast; /* Chrome */
      	image-rendering: optimize-contrast;         /* CSS3 Proposed */
      	-ms-interpolation-mode: bicubic;            /* IE8+ */
      }
      
      
    </style>    
    
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
            
            <div class="span6 columns">
                
                <h1>Response.js test</h1>
                
                <ul>
                    <li>Každý obrázek má tři varianty - 300px, 600px a 900x široký</li>
                    <li>V img src="" je ten nejmenší</li>
                    <li>Pokud response.js detekuje větší viewport, stahuje větší obrázky</li>
                    <li>Umí i lazy loading a tak je tady stahuje až poté co na ně uživatel zascroluje</li>                                        
                    <li>Obrázky se vyhlazují hezky díky explicitnímu nastavení v CSS https://gist.github.com/3748558</li>                                                            
                </ul>                
                
                <br><br>
                
            </div>
            
            
        </div>
    
        
      <div class="row">

          <div class="thumbs">            

<?php for ($i = 1; $i <= 12; $i++) { ?>              
            <p class="thumb">
                <a href="img/<?php echo $i ?>.jpg"><img src="img/<?php echo $i ?>_lo.jpg" data-src641="img/<?php echo $i ?>_mid.jpg" data-src1024="img/<?php echo $i ?>.jpg" alt="01" height="320" /></a>
            </p> 
<?php } ?>            

          </div>

      </div>
      
           
      <hr>
      <div>
        © Company 2012
      </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://airve.github.com/js/response/response.min.js"></script>
    <script>
    // Nastavime breakpointy pro response.js, abychom je necpali do <body> 
    // http://responsejs.com/#manual_setup
    Response.create({ 
        mode: 'src',  
        prefix: 'src', 
        breakpoints: [0,641,1024], 
        lazy: true // optional param - data attr contents lazyload rather than whole page at once 
    });
    </script>
  </body>

</html>