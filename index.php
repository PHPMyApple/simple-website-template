<!DOCTYPE html>
<!--
 _____  _    _ _____  __  __                            _      
|  __ \| |  | |  __ \|  \/  |         /\               | |     
| |__) | |__| | |__) | \  / |_   _   /  \   _ __  _ __ | | ___ 
|  ___/|  __  |  ___/| |\/| | | | | / /\ \ | '_ \| '_ \| |/ _ \
| |    | |  | | |    | |  | | |_| |/ ____ \| |_) | |_) | |  __/
|_|    |_|  |_|_|    |_|  |_|\__, /_/    \_\ .__/| .__/|_|\___|
                              __/ |        | |   | |           
                             |___/         |_|   |_|         
-->
<html lang="de" dir="ltr">
<?php
	require ("includes/API.class.php");
    require("includes/config.php");
	?>
		
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $SERVER_NAME ?> | Website </title>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/COLOR.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/icon.jpg" />
<body>
<header>
    <img src="img/icon.jpg" alt="Name Logo" class="navbar-top-img-lg">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand">
                <img src="img/icon.jpg" alt="Name Logo" class="navbar-top-img-sm">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <ul class="navbar-nav mr-auto smooth-scroll">
                    <li class="nav-item px-2">
                        <a class="nav-link" data-toggle="modal" data-target="#frameModalBottom">
                       		<?php
						
							$ping = MojangAPI::ping( $SERVER_NAME, 25565);
							if ($ping) {
    							echo 'Spieler: ' . $ping['players']['online'] . ' / ' . $ping['players']['max'];
							} else {
   								 echo 'Server wurde nicht gefunden.';
								}				
							?>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                      <li class="nav-item mr-1 rounded  active">
                        <a class="nav-link rounded" href="#">Home</a>
                    </li>                    <li class="nav-item mr-1 rounded ">
                        <a class="nav-link rounded" href="#down">Team</a>
          				<li class="nav-item mr-1 rounded">
                        <a class="nav-link rounded"  href="#statistics">Statistiken</a>
                    </li>
                    <li class="nav-item mr-1 rounded">
                        <a class="nav-link shop_button rounded"  href="<?php echo $SHOP_URL ?>">Shop</a>
                    </li>
                    </li>
					<li class="nav-item btn-extra">
						<a href="<?php echo $WIKI_URL ?>" class="nav-link" >UNSER WIKI</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="modal fade top" id="frameModalBottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">


    <div class="modal-dialog modal-frame modal-top" role="document">


        <div class="modal-content text-center">
            <div class="modal-body">
                <div class="row d-flex justify-content-center align-items-center">
                    <p class="pt-3 pr-2  server_adresse">
                        Joine jetzt auf <span id="to-select-text" class="bg-light px-2 py-1"><?php echo $SERVER_NAME ?></span>
                    </p>
                    <button id="copy-button" type="button" class="btn js-copyAdress" data-dismiss="modal">Kopieren</button>
                    <button type="button" class="btn modalServerInfoClose" data-dismiss="modal">Schließen</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="intro" class="view">
    <div class="mask rgba-black-strong">
        <div class="container-fluid d-flex align-items-center justify-content-center h-100">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-md-12 animated fadeIn">
                    <h1 class="display-4 font-weight-bold white-text pt-5 spacer_team"><?php echo $SERVER_NAME ?></h1>
                    <hr class="hr-light">
                    <p>
                    <h4 class="white-text my-4"><?php echo $HEADING ?></h4>
                    </p>
                    <a class="btn btn-lg btn-outline-white shop-btn" href="<?php echo $TWITTER_LINK ?>">Twitter</a>
                </div>
                <div class="col-md-12 animated fadeIn down-section">
                    <a href="#down" class="text-white animated bounce infinite scolleDown"><i class="fas fa-arrow-circle-down fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid default_page_half" id="down">
    <h1 class="text-center text-light">Das Team hinter Name.de</h1>
	<h1 class="text-center text-light">&mdash;</h1>
    <p class="text-center text-light">Jedes Projekt braucht ein starkes Team.</p>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-4 mt-5 text-center wow fadeInDown" data-wow-delay="0.05s">
                <img style="border-radius: 10px; "class="spacer_team" src="https://minotar.net/avatar/MHF_QUESTION/64" />
                <div class="spacer_team"></div>
                <h5 class="text-white font-weight-bolder">-/-</h5>
                <span class="danger-color-dark badge text-black rounded font-weight-bold"">Rang 1</span>
            </div>
            <div class="col-lg-2 col-sm-4 mt-5 text-center wow fadeInDown" data-wow-delay="0.05s">
                <img style="border-radius: 10px; "class="spacer_team" src="https://minotar.net/avatar/MHF_QUESTION/64" />
                <div class="spacer_team"></div>
                <h5 class="text-white font-weight-bolder">-/-</h5>
                <span class="danger-color-dark badge text-black rounded font-weight-bold">Rang 1</span>
            </div>
            <div class="col-lg-2 col-sm-4 mt-5 text-center wow fadeInDown" data-wow-delay="0.05s">
                <img style="border-radius: 10px; "class="spacer_team" src="https://minotar.net/avatar/MHF_QUESTION/64" />
                <div class="spacer_team"></div>
                <h5 class="text-white font-weight-bolder">-/-</h5>
                <span class="badge-primary badge text-black rounded font-weight-bold">Rang 2</span>
            </div>
            <div class="col-lg-2 col-sm-4 mt-5 text-center wow fadeInDown" data-wow-delay="0.05s">
                <img style="border-radius: 10px; "class="spacer_team" src="https://minotar.net/avatar/MHF_QUESTION/64" />
                <div class="spacer_team"></div>
                <h5 class="text-white font-weight-bolder">-/-</h5>
                <span class="badge-warning badge text-black rounded font-weight-bold">Rang 3</span>
            </div>
			</div>
        </div>
    </div>
</div>

<div id="intro2" class="view">
    <div class="mask rgba-black-strong">
        <div class="container-fluid d-flex align-items-center justify-content-center h-100">
            <div class="row d-flex justify-content-center text-center">
            </div>
        </div>
    </div>
</div>


<div class="container-fluid default_page_half" id="statistics">
<h1 class="text-center text-light">Unsere Server-Statistiken</h1>
    <div class="counting-sec">
      <div class="inner-width">
        <div class="col">
          <i class="far fa-smile-wink"></i>
          <div class="num" data-count="450">0</div>
          Test
        </div>

        <div class="col">
          <i class="fas fa-briefcase"></i>
          <div class="num" data-count="64">0</div>
          Test
        </div>

        <div class="col">
          <i class="far fa-money-bill-alt"></i>
          <div class="num" data-count="2145">0</div>
          Test
        </div>

        <div class="col">
          <i class="far fa-object-group"></i>
          <div class="num" data-count="506">0</div>
          Test
        </div>
      </div>
    </div>
  </div>
  <script>
$('.num').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 9000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
    }

  });  
});
</script>

<style>

.middle{
  position: absolute;
  top: 50%;
  width: 100%;
  transform: translateY(-50%);
}
.counting-sec{
  padding: 40px 0;
  width: 100%;

}
.inner-width{
  max-width: 1200px;
  margin: auto;
  display: flex;
}
.col{
  flex: 1;
  text-align: center;
  padding: 20px;
  color: #fff;
  text-transform: uppercase;
}
.col i{
  font-size: 40px;
  color: #333;
}
.num{
  font-size: 40px;
  margin: 20px 0;
}

</style>
</div>

<footer class="page-footer font-small">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-3">
                <div class="mb-5 flex-center text-center">
                    <a class="footer-icon text-center" href="<?php echo $MAIL_LINK ?>">
                        <i class="fas fa-envelope fa-lg white-text fa-2x px-3"></i>
                    </a>
                    <a class="footer-icon text-center" href="<?php echo $TWITTER_LINK ?>" target="_blank">
                        <i class="fab fa-twitter fa-lg white-text px-3 fa-2x"></i>
                    </a>
                    <a class="footer-icon text-center" href="mailto:<?php echo $INSTA_LINK ?>" target="_blank">
                        <i class="fab fa-instagram fa-lg white-text px-3 fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pb-3 text-center">
                <a href="<?php echo $IMPRESSUM ?>" class="text-decoration-none text-white">
                    Impressum
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo $DATENSCHUTZ ?>" class="text-decoration-none text-white">
                    Datenschutz
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">
		<i class="fas fa-copyright"></i>
        <a href="#"> 2019-2024 <?php echo $SERVER_NAME ?></a>
        <br />
		<i class="fas fa-code"></i>
         <a href="https://twitter.com/PHPMyApple">PHPMyApple</a>
    </div>
</footer>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollfire/1.4.0/jquery.scrollfire.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript">
    new WOW().init();
</script>

<script type="text/javascript">
    document.querySelector("#copy-button").addEventListener('click', function() {
        var reference_element = document.querySelector('#to-select-text');

        var range = document.createRange();
        range.selectNodeContents(reference_element);
        window.getSelection().addRange(range);
        document.execCommand('copy');
        window.getSelection().removeRange(range);
    });

    $('.scolleDown').on('click',function(e) {
        e.preventDefault();
        var target = '#down';
        var $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 1500, 'swing', function () {
            window.location.hash = target;
        });
    });

    $(window).scroll(function() {
        if($(this).scrollTop() > 80)
        {
            $('.navbar-top-img-lg').addClass('scrolled');
        } else {
            $('.navbar-top-img-lg').removeClass('scrolled');
        }
    });
</script>
</body>
</html>
