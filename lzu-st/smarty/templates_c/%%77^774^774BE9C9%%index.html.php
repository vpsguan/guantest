<?php /* Smarty version 2.6.26, created on 2013-03-10 12:40:18
         compiled from index.html */ ?>
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
          <a class="brand" href="admin/index.php">backindex</a>
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

  <div class="marketing">
    <p class="marketing-byline"></p>

    <div class="row-fluid">
      <div class="span4">
	  <h2><a href="newsc.php?tid=<?php echo $this->_tpl_vars['titletype0']; ?>
" style="color:#990000;"><?php echo $this->_tpl_vars['titletype0']; ?>
</a></h2>
        <img class="marketing-img" src="assets/img/bs-docs-twitter-github.png">
        
        <p><?php $_from = $this->_tpl_vars['t0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['st'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['st']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['s0']):
        $this->_foreach['st']['iteration']++;
?>
		<label style=" color:#999999; font-size:12px; float:right;">		<?php echo $this->_tpl_vars['s0']['time']; ?>
</label>
		<label style="text-align:left;"><a href="display_onenews.php?id=<?php echo $this->_tpl_vars['s0']['id']; ?>
" style="color:#000000;"><?php echo $this->_tpl_vars['s0']['title']; ?>
</a></label>
		<?php if ($this->_foreach['st']['iteration'] == 6): ?> 
        <?php break; ?>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?></p>
      </div>
	   <div class="span4">
	  <h2><a href="message.php"style="color:#990000;"><?php echo $this->_tpl_vars['titletype2']; ?>
</a></h2>
        <img class="marketing-img" src="assets/img/bs-docs-twitter-github.png">
        
        <p><?php $_from = $this->_tpl_vars['t2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['st'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['st']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['s2']):
        $this->_foreach['st']['iteration']++;
?>
		<label style=" color:#999999; font-size:12px; float:right;">		<?php echo $this->_tpl_vars['s2']['time']; ?>
</label>
		<label style="text-align:left;"><a href="display_onenews.php?id=<?php echo $this->_tpl_vars['s2']['id']; ?>
"style="color:#000000;"><?php echo $this->_tpl_vars['s2']['title']; ?>
</a></label>
		<?php if ($this->_foreach['st']['iteration'] == 6): ?> 
        <?php break; ?>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?></p>
      </div>
	   <div class="span4">
	  <h2><a href="newsc.php?tid=<?php echo $this->_tpl_vars['titletype4']; ?>
"style="color:#990000;"><?php echo $this->_tpl_vars['titletype4']; ?>
</a></h2>
        <img class="marketing-img" src="assets/img/bs-docs-twitter-github.png">
        
        <p><?php $_from = $this->_tpl_vars['t4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['st'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['st']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['s4']):
        $this->_foreach['st']['iteration']++;
?>
		<label style=" color:#999999; font-size:12px; float:right;">		<?php echo $this->_tpl_vars['s4']['time']; ?>
</label>
		<label style="text-align:left;"><a href="display_onenews.php?id=<?php echo $this->_tpl_vars['s4']['id']; ?>
" style="color:#000000;"><?php echo $this->_tpl_vars['s4']['title']; ?>
</a></label>
		<?php if ($this->_foreach['st']['iteration'] == 6): ?> 
        <?php break; ?>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?></p>
      </div>
  </div>
    <hr class="soften">
	
    <h1><a href="newsc.php?tid=<?php echo $this->_tpl_vars['titletype3']; ?>
"style="color:#990000;"><?php echo $this->_tpl_vars['titletype3']; ?>
</a></h1>
    <div class="row-fluid">
      <ul class="thumbnails example-sites">
	  <?php $_from = $this->_tpl_vars['t3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['st'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['st']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['s3']):
        $this->_foreach['st']['iteration']++;
?>
        <li class="span3">
          <a class="thumbnail" href="display_onenews.php?id=<?php echo $this->_tpl_vars['s3']['id']; ?>
" target="_blank">
            <img src="<?php echo $this->_tpl_vars['s3']['image']; ?>
" alt="SoundReady.fm">
          </a>
		  <label><a href="display_onenews.php?id=<?php echo $this->_tpl_vars['s3']['id']; ?>
"style="color:#000000;"><?php echo $this->_tpl_vars['s3']['title']; ?>
</a></label>
        </li>
		<?php if ($this->_foreach['st']['iteration'] == 4): ?> 
        <?php break; ?>
        <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
      </ul>
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