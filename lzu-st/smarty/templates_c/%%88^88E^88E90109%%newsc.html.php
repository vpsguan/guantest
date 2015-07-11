<?php /* Smarty version 2.6.26, created on 2013-03-10 04:14:11
         compiled from newsc.html */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>兰大社联</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">

  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php">Bootstrap</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="index.php">主页</a>              </li>
              <li class="">
                <a href="show.php">社联简介</a>              </li>
              <li class="">
                <a href="dongtai.php">社联动态</a>              </li>
              <li class="">
                <a href="message.php">社联公告</a>              </li>
              <li class="">
                <a href="down.php">常用下载</a>              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<div class="jumbotron masthead"></div>

<div class="bs-docs-social">
  <div class="container">
    <ul class="bs-docs-social-buttons">
    
    </ul>
  </div>
</div>


  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#examples"><i class="icon-chevron-right"></i><?php echo $this->_tpl_vars['tid']; ?>
</a></li>
          <li><a href="#what-next"><i class="icon-chevron-right"></i> 其他信息</a></li>
        </ul>
      </div>
      <div class="span9">



        <!-- Examples
        ================================================== -->
        <section id="examples">
          <div class="page-header">
            <h1><?php echo $this->_tpl_vars['tid']; ?>
</h1>
          </div>
          <ul class="thumbnails bootstrap-examples">
		  <?php $_from = $this->_tpl_vars['t0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['st'] => $this->_tpl_vars['s0']):
?> 
            <li class="span3">
              <a class="thumbnail" href="display_onenews.php?id=<?php echo $this->_tpl_vars['s0']['id']; ?>
">
                <img src="<?php echo $this->_tpl_vars['s0']['image']; ?>
" alt="">
              </a>
              <h4><label><a href="display_onenews.php?id=<?php echo $this->_tpl_vars['s0']['id']; ?>
"><?php echo $this->_tpl_vars['s0']['title']; ?>
</a></label></h4>
            </li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </section>




        <!-- Next
        ================================================== -->
        <section id="what-next">
          <div class="page-header">
            <h1>###</h1>
          </div>
###
        </section>




      </div>
    </div>

  </div>



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
        <p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p><a href="http://glyphicons.com">Glyphicons Free</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <ul class="footer-links">
          <li><a href="http://blog.getbootstrap.com">Blog</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/issues?state=open">Issues</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/blob/master/CHANGELOG.md">Changelog</a></li>
        </ul>
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>



  </body>
</html>