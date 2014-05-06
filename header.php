<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(''); ?> </title>

    <!-- Bootstrap -->
 <!--   <link href="css/bootstrap.min.css" rel="stylesheet">i -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-default" role="navigation">
      <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo site_url() ?>"><?php bloginfo('name'); ?></a>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li><a href="/category/java/" title="Core Java, JEE">/Java</a></li>
                  <li><a href="/category/dev-notes/" title="Development Notes">/DevNotes</a></li>
                  <li><a href="/category/frontend/" title="Flex, JavaScript">/FrontEnd</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">/Incubator<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li><a href="/category/db/" title="DataBase, SQL Server, Oracle, ETL/SSIS;">Database</a></li>
                          <li><a href="/tag/wordpress/">WordPress</a></li>
                          <li><a href="/tag/lifesg/">Life@新加坡</a></li>
                          <li><a href="/category/uncategorized/">Uncategorized</a></li>
                          <li class="divider"></li>
                          <li class="dropdown-header">Learning</li>
                          <li><a href="/tag/shell/">Shell</a></li>
                          <li><a href="/tag/python/">Python</a></li>
                          <li><a href="/tag/haskell/">Haskell</a></li>
                          <li><a href="/tag/php/">PHP</a></li>
                      </ul>
                  </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">

                  <li><a href="/category/newlife/" title="乱写, 看了蛋疼莫怪我!">/垃圾山</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">/About<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li><a href="/about_me/">About Me</a></li>
                          <li><a href="/links/">Links</a></li>
                      </ul>
                  </li>

              </ul>
          </div><!--/.nav-collapse -->
      </div>
  </div>
