<?php if (!defined('THINK_PATH')) exit();?><form action="<?php echo U('welcome');?>" method="post">
	</br></br><hr>
	<input type="hidden" name="username" value=<?php echo ($name); ?> />
	<input type="hidden" name="password" value=<?php echo ($pwd); ?> />
	<input type="submit" name="submit" value="返回主菜单" />
</form>