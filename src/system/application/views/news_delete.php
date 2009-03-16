<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Empire Evolution - Administration</title>
<link href="<?=base_url()?>/css/admin.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="wrapper">
  <div id="header"> <img src="<?=base_url()?>images/admin/logo_green.jpg" height="116" width="530" alt="Logo" />
    <ul id="navigation">
      <li><?php echo anchor('admin/dashboard', 'Dashboard'); ?></li>
      <li class="current_page_item"><?php echo anchor('admin/news', 'News'); ?></li>
	  <li><?php echo anchor('admin/members', 'Members'); ?></li>
      <li><?php echo anchor('admin/buildings', 'Buildings'); ?></li>
	  <li><?php echo anchor('admin/research', 'Research'); ?></li>
    </ul>
    <p id="user_info">Logged in as {username}, <?php echo anchor('member/logout', 'Logout?'); ?></p>
  </div>
  <div id="content">
    <h1>News</h1>
    <div class="break"></div>
    <h1>Scrap that shit!</h1>
			<?php $uid = $this->uri->segment(3); ?>
			<?php echo validation_errors(); ?>
			<?php echo form_open('/news/delete/'.$uid); ?>
			<?php echo form_hidden('uid', md5($uid)); ?>
			<p>Are you sure you want to scrap this news article? Once you've deleted it, it shall be cast into the abyss for infinity. Are you sure you don't just want to <?php echo anchor('news/unpublish/'.$uid,'unpublish'); ?> the article.</p>
			<div><input type="submit" value="Remove it"  class="submit"/></div>
			</form>
      <br class="clear" />		  
  </div>
    <div id="sidebar">
    <h2>News</h2>
    <p>Here are some related links you might be interested in:</p>
    <ul>
      <li><?php echo anchor('news/overview/', 'View all articles'); ?></li>
	  <li><?php echo anchor('news/add/', 'Add a new article'); ?></li>
      <li><?php echo anchor('news/edit/', 'Edit an article'); ?></li>
      <li><?php echo anchor('news/delete/', 'Delete an article'); ?></li>
    </ul>
	<p>Remember, there are links next to each article on the left hand side under the "<strong>Whats been going on?</strong>" section.</p>
  </div>
      <br class="clear" />
  <div id="footer"> </div>
</div>
</body>
</html>