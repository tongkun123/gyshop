<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body class="index_page">
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block clearfix">
<?php echo $this->fetch('library/index_ad.lbi'); ?>
<!--<div class="AreaL">-->



    <!--<div id="mallNews" class="box_1" style="height:334px;">-->
        <!--<h3 style="height:45px; background:#f1f1f1;"><span style="line-height:45px; font-size:14px; font-family:'宋体'; color:#666;">新闻快讯</span></h3>-->
        <!--<div class="NewsList tc  " style="border-top:none">-->
            <!--<ul>-->
                <?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['goods']['iteration']++;
?>
                <?php if ($this->_foreach['goods']['iteration'] < 10): ?>
                <!--<li><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo sub_str($this->_var['article']['short_title'],20); ?></a></li>-->
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <!--</ul>-->
        <!--</div>-->
    <!--</div>-->
 


    
<!--</div>-->

<div style="float:right; width:976px;"> 


<?php echo $this->fetch('library/recommend_promotion.lbi'); ?>

 
</div>
 
  
    <div class="blank"></div> 
 
  
  <div class="goodsBox_1">
  

  
  
<?php echo $this->fetch('library/recommend_new.lbi'); ?>
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>
<?php echo $this->fetch('library/recommend_best.lbi'); ?>

  </div> 
  
    </div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
