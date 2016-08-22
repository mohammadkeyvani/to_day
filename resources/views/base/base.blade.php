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

    @yield("css")


    @yield("header")

</head>
<body>
    <!-- Second navbar for search -->
    <nav class="navbar  no-radius cus_nav">
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
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Works</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <a class="btn btn-default btn-outline btn-circle"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
                <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" />
                        </div>
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </form>
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav><!-- /.navbar -->





@yield("content")

@yield("javascript")
@yield("code_javascript")
</body>
</html>
