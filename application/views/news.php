<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>Ansme Financial - <?= $news->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url();?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>public/css/bootstrap-rtl.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url();?>public/css/scrolling-nav.css" rel="stylesheet">

    <!-- Bootstrap theme -->
    <link href="<?= base_url();?>public/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?= base_url();?>public/css/animate.css" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo|El+Messiri" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Cairo|El+Messiri|Mirza" rel="stylesheet"> -->

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url();?>public/css/theme.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url();?>public/css/font-awesome.min.css">


    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

    <script src="https://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="" role="document">

    <div id="Intro" class="hidden-xs">
        <div class="container">
            <!-- <div class="col-sm-1 col-xs-5 nomargin nopadding">
                <p class="logo_text">Financial</p>
            </div> -->
            <div class="col-sm-2 col-sm-offset-10 col-xs-5">
                <a class="navbar-brand" href="#">
                    <img class="img-responsive" src="<?= base_url(); ?>public/images/ansme_logo.png">
                 </a>
                 <div>
                     <p class="logo_text">Financial Services</p>
                 </div>
            </div>

           
        </div>
    </div>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">
            <img class="img-responsive" src="ansme_logo.png">
          </a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a class="page-scroll" href="<?= base_url();?>">الصفحة الرئيسية</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


   

    <div class="all_content">
    <div class="container" role="main" style="padding-bottom: 2%;">

     <section id="aboutus" class="white" style="">


            <h1><?= $news->title ?> </h1>


        <div class="col-sm-12" style="margin-bottom: 5%;">
            
              <div class="tab-content">
                <img style="margin:0 auto;padding:3%;" class="img-responsive" src="<?= base_url(); ?>public/news/<?= $news->image;?>">
                <div id="home" class="tab-pane fade in active">
                  <h4>  
                    <?= $news->text; ?>
                  </h4>
                </div>
              </div>


              

             
           


            
        </div>

       



     </section>

    </div> <!-- /container -->



   


    



    <footer>
        <p><i class="fa fa-copyright" aria-hidden="true"></i>Ansme. 2017</p>
    </footer>


    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?= base_url(); ?>public/js/bootstrap.min.js"></script>
    <!-- <script src="../../assets/js/docs.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= base_url(); ?>public/js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>




