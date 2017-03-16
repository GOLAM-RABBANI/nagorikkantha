<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <style type="text/css">
        @font-face {
            font-family: SolaimanLipi;
            src: url('fonts/SolaimanLipi.ttf');
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4 col-md-4 remove-padding-margin">
                    <img class="img-responsive" src="images/logo.png" alt="" style="height: 60px; margin-top: 20px;">
                </div>
                <div class="col-sm-8"></div>
            </div>
        </div>
    </div>


    <div class="section-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h6><span class="glyphicon glyphicon-calendar"></span> <?php echo date('l, j F Y')?></h6>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-megadropdown-tabs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>                           
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav" id="main-nav">
                                <li><a href="index.php">প্রচ্ছদ<span class="sr-only">(current)</span></a></li>
                                <li><a href="national.php">জাতীয়</a></li>
                                <li><a href="international.php">আন্তর্জাতিক</a></li>
                                <li><a href="politics.php">রাজনীতি</a></li>
                                <li><a href="sports.php">খেলাধুলা</a></li>
                                <li><a href="ict.php">তথ্যপ্রযুক্তি</a></li>
                                <li><a href="entertainment.php">বিনোদন</a></li>
                                <li><a href="arts_and_literature.php">শিল্প ও সাহিত্য</a></li>
                                <li><a href="industry_and_commerce.php">শিল্প ও বাণিজ্য</a></li>
                                <li><a href="beyond_bengali.php">ওপার বাংলা</a></li>
                                <li class="dropdown mega-dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">আরও <span class="caret"></span></a>
                                    <div class="dropdown-menu mega-dropdown-menu">
                                        <div class="container-fluid">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active">
                                                    <ul class="nav-list list-inline">
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-2">
                                                                <li><a href="courts_of_law.php">আইন-আদালত</a></li>
                                                                <li><a href="lifestyle.php">লাইফস্টাইল</a></li>
                                                                <li><a href="economy.php">অর্থনীতি</a></li>

                                                            </div>
                                                            <div class="col-sm-2">
                                                                <li><a href="share_market.php">শেয়ারবাজার</a></li>
                                                                <li><a href="sanari_fair.php">শনারী মেলা</a></li>
                                                                <li><a href="facebook.php">ফেসবুক থেকে</a></li>

                                                            </div>
                                                            <div class="col-sm-2">
                                                                <li><a href="personality.php">ব্যাক্তিত্ব</a></li>
                                                                <li><a href="crime.php">অপরাধ</a></li>
                                                                <li><a href="ananda_rong.php">আনন্দ রঙ</a></li>

                                                            </div>
                                                            <div class="col-sm-2">
                                                                <li><a href="accident.php">দূর্ঘটনা</a></li>
                                                                <li><a href="agriculture_and_farmers.php">কৃষি ও কৃষক</a></li>
                                                                <li><a href="biodiversity.php">জীব বৈচিত্র</a></li>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <li><a href="science_bichitra.php">বিজ্ঞান-বিচিত্রা</a></li>
                                                                <li><a href="religion.php">ধর্ম</a></li>
                                                                <li><a href="abroad_news.php">প্রবাসের খবর</a></li>

                                                            </div>
                                                            <div class="col-sm-2">

                                                                <li><a href="media.php">মিডিয়া</a></li>
                                                                <li><a href="kitchen.php">মরান্নাঘর</a></li>
                                                                <li><a href="campus.php">শিক্ষাঙ্গন</a></li>
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>

