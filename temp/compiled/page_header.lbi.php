<script type="text/javascript">
	var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>

<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>

<div class="headBox">
	<div class="headCon clearfix">
    	<div id="logo_areaID" class="hd_logo_area f_l clearfix"><a href="index.php" class="logo"><img src="themes/guyuan/images/logo.gif"></a></div>
        <div class="f_r">
        	<div class="clearfix">
            	<script type="text/javascript">
					  //初始化主菜单
						function sw_nav(obj,tag)
						{
				 
						var DisSub = document.getElementById("DisSub_"+obj);
						var HandleLI= document.getElementById("HandleLI_"+obj);
							if(tag==1)
							{
								DisSub.style.display = "block";
						 
								
							}
							else
							{
								DisSub.style.display = "none";
							
							}
				 
						}
				 
				</script>
            	
                <ul class="top_bav_l">
                    <li>&nbsp;&nbsp;|&nbsp;&nbsp;<span>关注我们：</span></li>
                    <li style="border:none" class="menuPopup"  onMouseOver="sw_nav(1,1);" onMouseOut="sw_nav(1,0);">
                        <a id="HandleLI_1" href="javascript:;" title="微博" class="attention"></a> 
                        <div id=DisSub_1 class="top_nav_box  top_weibo">
                            <a href="http://e.weibo.com/ECMBT" target="_blank" title="新浪微博" class="top_weibo"></a>
                            <a href="http://e.t.qq.com/ecmoban_com" target="_blank" title="QQ微博" class="top_qq"></a> 
                        </div> 
                    </li> 
                    <li class="menuPopup" onMouseOver="sw_nav(2,1);" onMouseOut="sw_nav(2,0);">
                        <a id="HandleLI_2" href="javascript:;" title="微信" class="top_weixin"></a> 
                        <div id=DisSub_2 class="  weixinBox" style="display: none;"><img src="themes/guyuan/images/weixin.png"></div>
                    </li>
                </ul>
                
                <div class="header_r f_r">
                    <font id="ECS_MEMBERZONE" ><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
                    <?php if ($this->_var['navigator_list']['top']): ?>
                    <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
                    <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                    <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="Nav clearfix">
            	<ul>
                	<li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><a href="index.php"><?php echo $this->_var['lang']['home']; ?><span></span></a></li>
                    <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
                    <li <?php if ($this->_var['nav']['active'] == 1): ?>class="cur"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?><span></span></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
        </div>
    </div>
</div>