<!DOCTYPE html>
<html>
<head>


    <title>@yield("title")</title>
    <meta charset="UTF-8">
<!--    <meta http-equiv="x-ua-compatible" content="IE=edge">-->
    <meta name="view_port" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/fonts.css">

    @yield("css")


    @yield("header")

</head>
<body class="backgroundWhiteSmoke">
    <!-- Second navbar for search -->
    <nav class="navbar  no-radius cus_nav no-padding-bottom no-border no-margin-bottom">
        <div class="row">
            <div class="col-md-10 no-padding-right">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-3">
                        <ul class="nav navbar-nav navbar-right no-padding-right cus_ul">
                            <li class="text-center"><a href="#">کامپیوتر</a></li>
                            <li class="text-center"><a href="#">آموزش</a></li>
                            <li class="text-center"><a href="#">گرافیک</a></li>
                            <li class="text-center"><a href="#">بازی</a></li>
                            <li class="text-center"><a href="#">نرم افزار</a></li>

                        </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->

            </div>
            <div class="col-md-2 no-padding-left">
                <div class="row">
                    <div class="col-md-6 no-padding-left"><img  class="img-responsive" src="img/Logo1.png" height="45px" width="45px"></div>
                    <div class="col-md-6 text-center parent_title">
                        <span class="colorWhite custom_title">به-روز</span>
                    </div>
                </div>
            </div>

        </div>

    </nav><!-- /.navbar -->
  <!-- under nav   -->
    <div class="row">
        <div class="col-md-12 under_nav" style="display: block">
            <div class="col-md-10 no-padding-right">
                <ul class="nav navbar-nav navbar-right no-padding-right custom_under_title">
                    <li class="text-center"><a href="#">لینوکس</a> </li>

                    <li class="text-center"><a href="#">ویندوز</a> </li>
                    <li class="text-center"><a href="#">مکینتاش</a> </li>
                </ul>
                <div class="rect"></div>
            </div>

        </div>
    </div>


<!--    end under nav-->

@yield("content")

@yield("javascript")
@yield("code_javascript")
</body>
</html>
