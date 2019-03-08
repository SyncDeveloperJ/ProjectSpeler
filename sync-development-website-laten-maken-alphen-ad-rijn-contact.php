<!doctype html>
<html>
<head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107535912-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-107535912-1');
</script>

<meta charset="UTF-8">

<head>
<meta name="keywords" content="contact, sync-development">
<meta name="description" content="Neem voor vragen, opmerkingen of suggesties contact met ons op!">      
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-
BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="landscape.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="pricelist.css">
<link rel="stylesheet"  media="(max-width: 690px) and (orientation: portrait)" href="mobile.css">
<link rel="stylesheet" media="(max-width: 750px) and (orientation: landscape)" href="css/mobile-landscape.css">
<link rel="stylesheet" media="(max-width: 780px) and (orientation: portrait)" href="css/ipad.css">
<link rel="stylesheet" media="(min-width: 790px) and (orientation: portrait)" href="css/ipad-pro.css">
<link rel="stylesheet" media="(max-width: 1370px) and (orientation: landscape)" href="css/Ipad-landscape.css">
<link href="https://fonts.googleapis.com/css?family=Tauri" rel="stylesheet"> 
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<div class="pt-site-wrapper">
   
<div class="navbar navbar-default navbar-static-top">
<div class="container-fluid">
<div class="navbar-header">
<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
<div id="nav-icon3">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>
</button>
<script>
$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});
    </script>  
    
    
<a class="navbar-brand" href="#"></a>
    </div>

<header>
<nav>
<ul>
<li><a href="index">Home</a></li>
<li><a href="sync-development-website-laten-maken-alphen-ad-rijn-diensten">Diensten</a></li>
<li><a href="sync-development-website-laten-maken-alphen-ad-rijn-abonnement">Abonnementen</a></li>
<li><a href="sync-development-website-laten-maken-alphen-ad-rijn-contact">Contact</a></li>

</ul>
</nav> 
<div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>

<a title="De volgende stap voor uw onderneming | Sync Development" class="logo" href="http://www.sync-development.nl/">
				<img src="images/Sync-Development-website-laten-maken-Alphen-ad-Rijn-Logo.png" alt="Logo Sync Development">
				<span class="slogan">De volgende stap voor uw onderneming</span>
			</a>
</header>
<script src="https://code.jquery.com-3.3.1.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
      $('.menu-toggle').click(function(){
          $('nav').toggleClass('active')
      })
   })
</script>    
 </script>  
 
</div>
</div>

    
    <div class="pt-page-header-2">
	<div class="container">
		<div class="pt-page-header-wrapper pt-full">
			<div class="pt-header-content-2">
				<div class="page-description">
				</div>
			</div>
       </div>
	</div>
</div>
<iframe class src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2449.298091058787!2d4.643224315760549!3d52.12889887974207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5dae9abb22def%3A0xd9d2cebfe657a61!2sSync-development!5e0!3m2!1snl!2snl!4v1550741789732" width="1600" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>   
    
    
    <section class="pt-main">
		<div class="containerform">
			<div class="row pt-block-grid pt-equals">
				
					<div class="col-md-12">
						<div class="pt-box pt-box-Contactpage text-center pt-equal" style="">

                            
<? include('form_process.php'); ?>                            
<link rel="stylesheet" href="form.css" type="text/css">             
<div class="containerform">  
  <form id="contact" action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
    <h2> Neem contact met ons op</h2>
    <div class="row">
    <div class="col-xs-12"><fieldset>
    <input placeholder="Voornaam" type="text" tabindex="1" name="name"  autofocus> <span class="error"><?= $name_error ?></span>
    </fieldset>
    </div>
    
    <div class="col-xs-12"><fieldset>
    <input placeholder="Achternaam" type="text" name="last_name" tabindex="2"> <span class="error"><?= $last_name_error ?></span>
    </fieldset>
    </div>
      </div>
    <fieldset>
      <input placeholder="E-mail" type="text" name="email"  tabindex="3"> <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Uw bericht" type="text" name="message"  tabindex="5"></textarea>
    </fieldset>
      <div class="g-recaptcha" data-sitekey="6Lfx8oMUAAAAALx3zcAWup4jVjSIiEDT7r464MTz"></div>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Verstuur</button>
    </fieldset>
    <div class ="success"><?= $success; ?></div>
  </form>
 
  
</div>
                        </div>
                         <hr>
					</div>
                
            </div>
            </div>
   </section>
   
    
     <section class="pt-end">
        <div class="container">
              <div class="col-md-10 col-md-push-1">
						<div class="pt-box pt-box-2 text-center pt-equal" style="align-self:center;">   
                          <h3>Contact gegevens</h3>
                             <p><span class="glyphicon glyphicon-map-marker" style="color: #00518e;"></span> Antonie van leeuwenhoekweg 14, 2408AM Alphen aan den rijn</p>
                             <p><span class="glyphicon glyphicon-phone" style="color: #00518e;"></span>0611129593</p>
                             <p><span class="glyphicon glyphicon-envelope" style="color: #00518e;"></span>info@sync-development.nl</p>
                             <p>KvK-nummer: 69925666</p>
                        </div>
                    </div>
                </div>
      </section>
                    
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!--footer start from here-->
<footer class="ct-footer">
  <div class="containerfooter">
    <form name="contentForm" enctype="multipart/form-data" method="post" action="">
      <div class="ct-footer-pre text-center-lg">
      </div>
    </form>
    <ul class="ct-footer-list text-center-sm">
      <li>
        <h2 class="ct-footer-list-header">Navigatie</h2>
        <ul>
          <li>
            <a href="index">Homepagina</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-diensten">Diensten</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-abonnement">Abonnement</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-contact">Contact</a>
          </li>
        </ul>
      </li>
      <li>
        <h2 class="ct-footer-list-header">Wij zijn actief in:</h2>
        <ul>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-contact.php">Alphen aan den Rijn</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-contact.php">Aalsmeer</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-contact.php">Bodegraven</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-contact.php">Boskoop</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-contact.php">Leiden</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-contact.php">Nieuwkoop</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-contact.php">Ter Aar</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-contact.php">Waddinxveen</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-contact.php">Zoetermeer</a>
          </li>
          
        </ul>
      </li>  
        
        
      <li>
        <h2 class="ct-footer-list-header">Onze diensten</h2>
        <ul>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-diensten.php">Logo laten maken</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-diensten.php">Huisstijl afstemmen</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-diensten.php">Search Engine Optimization</a>
          </li>
           <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-diensten.php">Google AdWords</a>
          </li>
           <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-diensten.php">Google Analytics</a>
          </li>
          <li>
            <a href="sync-development-website-laten-maken-alphen-ad-rijn-diensten.php">Visitekaartjes</a>
          </li>
        </ul>
      </li>
      
      <li>
       
    </ul>
    
  <div class="ct-footer-post">
    <div class="container">
      <div class="inner-right">
        <p>Copyright © 2019 | Sync Development<a href=""></a></p>
      </div>
    </div>
    </div>
    </div>
    </footer>
  </div>
</body>   
</html>


    