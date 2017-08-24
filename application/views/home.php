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

    <title>Ansme Financial</title>

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

            <!-- <div class="col-sm-6 col-sm-offset-3 nopadding padding_top_intro">
                <div class="col-sm-4 nomargin nopadding">
                    <div class="col-sm-3 nopadding nomargin">
                        <i class="fa fa-4x fa-mobile" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-9 nopadding intro_content">
                        <span>0222870830</span>
                        <p>info.ansme@gmail.com</p>
                    </div>
                    
                </div>
                <div class="col-sm-4 nomargin nopadding">
                    <div class="col-sm-4 nopadding nomargin">
                        <i class="fa fa-4x fa-clock-o" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-7 nopadding intro_content">
                        <span>الأحد-الخميس</span>
                        <p>٩ صباحاً - ٥ مساءً</p>
                    </div>
                    
                </div>
                <div class="col-sm-4 nomargin nopadding">
                    <div class="col-sm-3 nopadding nomargin">
                        <i class="fa fa-4x fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-9 nopadding intro_content">
                        <span>٢٠ عباس العقاد</span>
                        <p>القاهرة، مصر</p>
                    </div>
                    
                </div>
            </div> -->
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
            <!-- <li>
                <a class="nohover page-scroll nopadding nomargin" href="" style="margin-top:0px;margin-bottom:0px;">
                    <img style="height:20px;display: none;" class="img-responsive mini_logo" src="ansme_logo.png">
                </a>
            </li> -->
            <!-- <li class=""><a class="page-scroll" href="#page-top">أهلاً بك</a></li> -->
            <li><a class="page-scroll" href="#aboutus">من نحن</a></li>
            <li><a class="page-scroll" href="#services">خدماتنا</a></li>
            <li><a class="page-scroll" href="#testimonials">قيل عنا</a></li>
            <li><a class="page-scroll" href="#team">فريق العمل</a></li>
            <li><a class="page-scroll" href="#blog">مقالات</a></li>
            <li><a class="page-scroll" href="#news">الأخبار</a></li>
            <li><a class="page-scroll" href="#contact">تواصل معنا</a></li>
            <li class="pull-left">
                <a class="nohover_header" href="<?= $info->facebook; ?> ">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                </a>
            </li>
            <li class="pull-left">
                <a class="nohover_header" href="<?= $info->google; ?> ">
                    <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                </a>
            </li>
            <li class="pull-left">
                <a class="nohover_header" href="<?= $info->instagram; ?> ">
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                </a>
            </li>
            <li class="pull-left">
                <a class="nohover_header" href="<?= $info->twitter; ?> ">
                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                </a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <section id="featured">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              
              <?php foreach ($images as $image): ?>
                    <div class="item <?php if($image->id ==1) echo 'active'; ?>">
                        <img style="width:100%;height:100%;" src="<?= base_url(); ?>public/background/<?= $image->path;?>" alt="Fourth slide">
                        <div class="caption">
                            <div class="col-sm-6 col-sm-offset-3 center col-xs-12">
                                <!-- <p>أهلاً بك في شركة</p> -->
                                <h1 class="center" style="font-weight: bold;text-align: center;color:<?= $image->color; ?>">
                                    <?= $image->title ?>
                                </h1>
                                <span style="text-align: center;color:<?= $image->color; ?>">
                                    <?= $image->subtitle; ?>
                                </span>
                                <!-- <a class="page-scroll" href="#aboutus">
                                    <button class="myBtn">
                                        <i class="fa fa-level-down" aria-hidden="true" style="margin:5px;"></i>
                                        تعرف أكتر 
                                    </button>
                                </a> -->
                                
                            </div>
                        </div>
                  </div>
                <?php endforeach ?>
            </div>
            
          </div>
    </section>

    <div class="all_content">
    <div class="container" role="main" style="padding-bottom: 2%;">

     <section id="aboutus" class="white" style="">


            <h1>من نحن ؟</h1>


        <div class="col-sm-12" style="margin-bottom: 5%;">

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">
                    <h2>من نحن ؟</h2>
                </a></li>
                <li><a data-toggle="tab" href="#menu1">
                    <h2>كيف نعمل؟</h2>
                </a></li>
                <li><a data-toggle="tab" href="#menu2">
                    <h2>رؤيتنا</h2>
                </a></li>
              </ul>

              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <h4>  وفي ظل التطور السريع الذي طرأ على كل أشكال الحياة و رغم التحديات الصعبة التي تصادفنا يوماً بعد يوم ، قررنا أن ننافس بشرف وكان بمقدرتنا إنجاز الكثير من الأعمال التي جعلت من "انسمي المالية" شركة فريدة من نوعها تخدم الكثير من فئات المستثمرين في الأسواق المالية المحلية والعالمية وتمدهم بكل المعلومات التي يحتاجونها لممارسة الإستثمار الآمن وتجنبهم الكثير من المخاطر التي تتسم بها تلك الأسواق حيث أننا و لأول مرة في الشرق الأوسط ننشئ فريقاً متكاملاً من الخبراء الماليين و الفنيين و التقنيين ومطوري البرامج ومعدي المعلومات ومديري المخاطر والتخطيط الإستراتيجي</h4>
                </div>
                <div id="menu1" class="tab-pane fade">
                  <h4>كل هؤلاء يستطيعون تقديم النصيحة اللازمة إعتماداً على أبرز الأبحاث التي نقوم بها وأدق التوصيات التي تصدر من برامجنا وفريق المحللين لدينا بعناية تامة ومتابعة مستمرة بالإضافة لأحدث الدراسات والتقارير الاقتصادية والتقنية والتحليلية و وضع خطط واستراتيجيات الاستثمار وتقييم وتحديد اتجاهات الأسعار وأحجام التداول وتجهيز الأوراق المالية وبيانات الشركات</h4>
                </div>
                <div id="menu2" class="tab-pane fade">
                  <h4>ربما لا نكون الأعظم على الإطلاق حتى لحظة كتابة هذا التعريف البسيط  ولكننا نعمل من أجل هدف واحد غايته النجاح وليس نجاحاً عادياً بل نجاهاً مبهراً نشرف أننا كنا سبباً فيه ولازال لدينا الكثير.. الكثير مما قد نرنو إليه في المستقبل القريب أو البعيد.</h4>
                </div>
              </div>


              <ul class="nav nav-tabs whoarewe_section1" style="margin-top:5%;margin-right:30%;">
                <li class="active" id="1"><a data-toggle="tab" href="#menu2_1">
                   <img data-animation="bounceIn" src="<?= base_url(); ?>public/images/businessman-3.png" class="img-responsive revealOnScroll">
                <h4>أدارة أعمال</h4>
                </a></li>
                <li id="2"><a data-toggle="tab" href="#menu2_2">
                    <img data-animation="bounceIn" src="<?= base_url(); ?>public/images/badge.png" class="img-responsive revealOnScroll">
                <h4>أفكار جديدة</h4>
                </a></li>
                <li id="3"><a data-toggle="tab" href="#menu2_3">
                    <img data-animation="bounceIn" src="<?= base_url(); ?>public/images/line-chart.png" class="img-responsive revealOnScroll">
                <h4>ازدهار أعمالك</h4>
                </a></li>
                <li id="4"><a data-toggle="tab" href="#menu2_4">
                    <img data-animation="bounceIn" src="<?= base_url(); ?>public/images/customer-service.png" class="img-responsive revealOnScroll">
                <h4>دعم شامل</h4>
                </a></li>
              </ul>

              <div class="tab-content ">
                <div id="menu2_1" class="tab-pane fade in active">
                  <h4>  وفي ظل التطور السريع الذي طرأ على كل أشكال الحياة و رغم التحديات الصعبة التي تصادفنا يوماً بعد يوم ، قررنا أن ننافس بشرف وكان بمقدرتنا إنجاز الكثير من الأعمال التي جعلت من "انسمي المالية" شركة فريدة من نوعها تخدم الكثير من فئات المستثمرين في الأسواق المالية المحلية والعالمية وتمدهم بكل المعلومات التي يحتاجونها لممارسة الإستثمار الآمن وتجنبهم الكثير من المخاطر التي تتسم بها تلك الأسواق حيث أننا و لأول مرة في الشرق الأوسط ننشئ فريقاً متكاملاً من الخبراء الماليين و الفنيين و التقنيين ومطوري البرامج ومعدي المعلومات ومديري المخاطر والتخطيط الإستراتيجي</h4>
                </div>
                <div id="menu2_2" class="tab-pane fade">
                  <h4>كل هؤلاء يستطيعون تقديم النصيحة اللازمة إعتماداً على أبرز الأبحاث التي نقوم بها وأدق التوصيات التي تصدر من برامجنا وفريق المحللين لدينا بعناية تامة ومتابعة مستمرة بالإضافة لأحدث الدراسات والتقارير الاقتصادية والتقنية والتحليلية و وضع خطط واستراتيجيات الاستثمار وتقييم وتحديد اتجاهات الأسعار وأحجام التداول وتجهيز الأوراق المالية وبيانات الشركات</h4>
                </div>
                <div id="menu2_3" class="tab-pane fade">
                  <h4>ربما لا نكون الأعظم على الإطلاق حتى لحظة كتابة هذا التعريف البسيط  ولكننا نعمل من أجل هدف واحد غايته النجاح وليس نجاحاً عادياً بل نجاهاً مبهراً نشرف أننا كنا سبباً فيه ولازال لدينا الكثير.. الكثير مما قد نرنو إليه في المستقبل القريب أو البعيد.</h4>
                </div>
                <div id="menu2_4" class="tab-pane fade">
                  <h4>ربما لا نكون الأعظم على الإطلاق حتى لحظة كتابة هذا التعريف البسيط  ولكننا نعمل من أجل هدف واحد غايته النجاح وليس نجاحاً عادياً بل نجاهاً مبهراً نشرف أننا كنا سبباً فيه ولازال لدينا الكثير.. الكثير مما قد نرنو إليه في المستقبل القريب أو البعيد.</h4>
                </div>
              </div>

           


            
        </div>

       



     </section>

    </div> <!-- /container -->



    <section id="services" class="alternate" style="">
        <div class="container">
            <h1><span>خدماتنا المميزة</span></h1>
            <div class="col-md-12" style="">
              <div class="row">
                <div class="col-sm-4 service_div">
                    <img class="img-responsive" src="<?= base_url(); ?>public/images/service3.jpg">
                    <div class="hover">
                        <h3>إستشارات إدارة رأس المال السوقى</h3>
                        <p>يمكنك أن تستثمر أموالك وتخطط بطريقة مبتكرة نحو الثراء الحر بعيداً عن المخاطر .. نعم فنحن دليلك الصادق نرسم إليك ما يجب أن يكون</p>
                    </div>
                  </div>
              <div class="col-sm-4 service_div">
                <img class="img-responsive" src="<?= base_url(); ?>public/images/service5.jpg">
                <h3>إستشارات تحليلية لأسواق المال</h3>
                <p>لا ترهق نفسك بالبحث كثيراً هنا وهناك ، كن على دراية دائماً بما سوف يحدث وسر بخطوات واثقة فى متاجرتك وأنت آمن .. فالصفقة الرابحة هى هدفنا.</p>
              </div>
              <div class="col-sm-4 service_div">
                <img class="img-responsive" src="<?= base_url(); ?>public/images/service4.jpg">
                <h3>تقرير التحليل الفنى</h3>
                <p>تابع أحدث المستجدات فى أسواق المال أولاً بأول وتعرف معنا على تفاصيل كل فرصة متاحة يمكن إستغلالها وتحقيق عائد منها.</p>
              </div>
              </div>

              <div class="row">
                <div class="col-sm-4 service_div">
                    <img class="img-responsive" src="<?= base_url(); ?>public/images/service1.jpg">
                    <h3>تقرير التحليل الأساسى</h3>
                    <p>كل ما تحتاجه لإستثماراتك المتنوعة من معلومات مدروسة عن الشركات والعملات والسلع وما يؤثر عليها من التغيرات الأقتصادية والسياسية وتحديد قيمتها العادلة.</p>
                  </div>

                  <div class="col-sm-4 service_div">
                    <img class="img-responsive" src="<?= base_url(); ?>public/images/service2.jpg">
                    <h3>مذكرات إقتصادية</h3>
                    <p>خبرات وأبحاث جديدة فى عالم الأعمال أصبحت متوفرة بين يديك فى أى وقت شئت أن تعرف كل ما هو مجهول وفى مكان واحد.</p>
                  </div>

                  <div class="col-sm-4 service_div">
                    <img class="img-responsive" src="<?= base_url(); ?>public/images/service0.jpg">
                    <h3>قراءة السوق</h3>
                    <p>أهم الأخبار التى يمكن ان تتخذ بمعرفتها قرارتك السليمة فى نماء ثروتك وحمايتها من المخاطر.</p>
                 </div>
              </div>


            </div>

        </div>
    </section>


    <section id="testimonials" style="">
        <div class="container inner_section_content">
            <h1>أراء عملائنا</h1>
            <div style="margin-top: 5%;">
                <?php foreach ($testimonials as $x): ?>
                    <div class="col-sm-4">
                        <p class="center">
                            <?= $x->text; ?>
                        </p>
                        <p class="center">
                            <b><?= $x->name; ?> - </b> <?= $x->title; ?>
                        </p>
                    </div>
                <?php endforeach ?>
            </div>
            
        </div>
    </section>


    <section id="team" class="alternate" style="">
        <div class="container inner_section_content">
            <h1>فريق العمل</h1>

            <?php foreach ($team as $member): ?>
                <div class="col-sm-4 team_member revealOnScroll" data-animation="pulse">
                    <img class="center_image img-responsive " src="<?= base_url(); ?>public/team/<?= $member->image?>">
                    <h3 class="center"><?= $member->name ?></h3>
                    <h4 class="center black"><?= $member->title ?></h4>
                </div>
            <?php endforeach ?>
        </div>
    </section>



    <section id="blog" style="">
        <div class="container inner_section_content">
            <h1>مقالات</h1>
            <div style="margin-top: 5%;">

            <?php foreach ($articles as $article): ?>
                <div class="col-sm-4">
                    <img style="height:307px;" class="img-responsive" src="<?= base_url(); ?>public/articles/<?= $article->image ?>">
                    <h4 class=""><?= $article->title ?></h4>
                    <a style="color:white;" class="read_btn" href="<?= base_url();?>article/<?= $article->id ?>">المزيد</a>
                    <!-- <button type="button" class="read_btn" data-toggle="modal" data-target="#myModal">المزيد</button> -->
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </section>


    <section id="news" class="alternate">
        <div class="container">
            <h1>الأخبار</h1>
            <div style="margin-top: 5%;">
                <?php foreach ($news as $x): ?>
                    <?php if ($x->title != ""): ?>
                        <div class="col-sm-2">
                            <img style="height:100px;width:100%;" class="img-responsive" src="<?= base_url(); ?>public/news/<?= $x->image; ?>">
                            <a href="<?= base_url(); ?>news/<?= $x->id; ?>">
                                <h4><?= $x->title; ?></h4>
                            </a>
                        </div>
                    <?php endif ?>
                    
                <?php endforeach ?>
            </div>
        </div>
    </section>


    <section id="contact">
        <div class="container">
            <h1>تواصل معنا</h1>
            <!-- <h3>راسلنا</h3> -->

            <div class="col-sm-8 col-xs-12" style="margin-top:3%;">
                <div class="col-sm-4 col-xs-12   nomargin nopadding">
                 <input placeholder="الأسم" type="text">
                </div>
                <div class="col-sm-4 col-xs-12  nomargin nopadding">
                    <input placeholder="التليفون" type="text">
                </div>
                <div class="col-sm-4 " style="margin-top:%;">
                    <input placeholder="البريد الإلكتروني" type="text">
                </div>
                <div style="" class="col-sm-12  nomargin nopadding" style="margin-top:0%;">
                    <input style="width: 93%;margin-top: 5%;" placeholder="الرسالة" type="text">
                </div>
                <div class="col-sm-6  nomargin nopadding" style="margin-top:4%;">
                    <input class="send_btn" value="إرسال" type="button">
                </div>
            </div>
            <div class="col-sm-4">
                <img class="img-responsive" src="<?= base_url(); ?>public/images/office.jpg">
                <h3 style="color:#7f8c8d">عنوان الشركة</h3>
                <p style="color:black">
                    Ansme Financial Advisory Services
P.O. Box 11762, Office No. 28 Building No. 30,
Block 3, district 1, Nasr City, Cairo, Egypt
                </p>
            </div>
        </div>
    </section>

    <section class="alternate footer_info">
       <div class="container">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="col-sm-4">
                    <div class="col-sm-2">
                        <i class="fa fa-4x fa-mobile" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-9 intro_content">
                        <span><?= $info->phone; ?></span>
                        <p> <?= $info->email; ?></p>
                    </div>
                    
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-3">
                        <i class="fa fa-4x fa-clock-o" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-7 intro_content">
                        <span>الأحد-الخميس</span>
                        <p>٩ صباحاً - ٥ مساءً</p>
                    </div>
                    
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-3">
                        <i class="fa fa-4x fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-9 intro_content">
                        <span><?= $info->address; ?></span>
                        <!-- <p>القاهرة، مصر</p> -->
                    </div>
                    
                </div>
            </div>
       </div>
    </section>



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
    <!-- Scrolling Nav JavaScript -->
    <script src="<?= base_url(); ?>public/js/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>public/js/scrolling-nav.js"></script>



    <script type="text/javascript">


    $(".whoarewe_section1 li").click(function(){
        
        $('.whoarewe_section1').addClass('stop');

    });

        window.setInterval(function(){
           
           if($(".whoarewe_section1").hasClass('stop'))
            return;

           var id = $(".whoarewe_section1 .active").attr('id');
           $(".whoarewe_section1 .active").removeClass('active');
           // alert("#menu2_"+id);
           $("#menu2_"+id).removeClass('active');
           
           if(id == '4')
            { 
                $("#1").addClass('active');
                $("#menu2_1").addClass('active');
                $("#menu2_1").addClass('in');
            }
           else
            {   

                id = parseInt(id)+1;

                var tmp = "#menu2_"+id;

                $("#"+id).addClass('active');
                $(tmp).addClass('active');
                $(tmp).addClass('in');
                // alert(id);
               
                
            }
        }, 2000);


        function isScrolledIntoView(elem)
        {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();

            var elemTop = $(elem).offset().top;
            var elemBottom = elemTop + $(elem).height();

            return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
        }

        function Utils()
        {
        }

        Utils.prototype = {
            constructor: Utils,
            isElementInView: function (element, fullyInView) {
                var pageTop = $(window).scrollTop();
                var pageBottom = pageTop + $(window).height();
                var elementTop = $(element).offset().top;
                var elementBottom = elementTop + $(element).height();

                if (fullyInView === true) {
                    return ((pageTop < elementTop) && (pageBottom > elementBottom));
                } else {
                    return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
                }
            }
        };

        var Utils = new Utils();


        $(document).ready(function(){



                $(".inner_section_content").each(function(){

                    var height = $(this).height();
                    var section_height = $(this).parent().height();
                    
                    var difference = section_height - height;
                    var half_difference = difference/2;

                    var padding_top = $(this).parent().css('padding-top');
                    padding_top = parseInt(padding_top);

                    value = half_difference+padding_top;
                    $(this).parent().css('padding-top',value+'px');
                    // $(this).parent().css('padding-bottom',half_difference+'px');
                    // alert(difference/2);
                    // alert(section_height);
                    // alert(height);
                });

                var visible = $("#Intro").is(":visible"); 

                 if(!visible)
                 {
                    $(".navbar-fixed-top").css('top','0px');
                    $(".mini_logo").show();
                    
                    $(".carousel .item").addClass('item_mobile_view');
                    return;
                 }

            $(window).scroll(function(){

                 

                 var isElementInView = Utils.isElementInView($('.all_content'), false);
                 var scroll = $(window).scrollTop();

                 if(scroll < 80 )
                 {
                     $("#Intro").show();
                     // $("#featured").css('margin-top','100px');
                     $(".navbar-fixed-top").css('top','100px');
                     $(".mini_logo").hide();
                     $("li.active").removeClass('active');
                     return;
                 }
                 

                 if (isElementInView)
                 {
                    //alert('in view');
                    $(".navbar-fixed-top").css('top','0px');
                    $("#Intro").slideUp('fast');
                    $(".mini_logo").show();
                    $(".nohover").attr('href','#page-top');
                    // $("#featured").css('margin-top','-100px');
                    
                 }
                 else
                 {
                    // alert('outofview');
                    // $("#Intro").slideDown('fast');
                  //   $(".navbar-fixed-top").css('top','200px');
                 }
            })
        })

        $(function() {

          var $window           = $(window),
              win_height_padded = $window.height() * 1.1,
              isTouch           = Modernizr.touch;

          if (isTouch) { $('.revealOnScroll').addClass('animated'); }

          $window.on('scroll', revealOnScroll);

          function revealOnScroll() {
            var scrolled = $window.scrollTop(),
                win_height_padded = $window.height() * 1.1;

            // Showed...
            $(".revealOnScroll:not(.animated)").each(function () {
              var $this     = $(this),
                  offsetTop = $this.offset().top;

              if (scrolled + win_height_padded > offsetTop) {
                if ($this.data('timeout')) {
                  window.setTimeout(function(){
                    $this.addClass('animated ' + $this.data('animation'));
                  }, parseInt($this.data('timeout'),10));
                } else {
                  $this.addClass('animated ' + $this.data('animation'));
                }
              }
            });
            // Hidden...
           $(".revealOnScroll.animated").each(function (index) {
              var $this     = $(this),
                  offsetTop = $this.offset().top;
              if (scrolled + win_height_padded < offsetTop) {
                $(this).removeClass('animated fadeInUp flipInX lightSpeedIn')
              }
            });
          }

          revealOnScroll();
        });
        
    </script>

  </body>
</html>




