<?php if ($this->_var['user_info']): ?>
<div class="MemberID f_l"><a href="user.php"><?php echo $this->_var['user_info']['username']; ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;</div>
<?php else: ?>
<div class="Login"><a href="user.php">登录</a></div><div class="Registration">&nbsp;&nbsp;|&nbsp;&nbsp;<a href="user.php?act=register">注册</a>&nbsp;&nbsp;|&nbsp;&nbsp;</div>
<?php endif; ?>