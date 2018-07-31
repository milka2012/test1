<?php function getIpAddress()
{
	return getenv('HTTP_CLIENT_IP')?:
		getenv('HTTP_X_FORWARDED_FOR')?:
		getenv('HTTP_X_FORWARDED')?:
		getenv('HTTP_FORWARDED_FOR')?:
		getenv('HTTP_FORWARDED')?:
		getenv('REMOTE_ADDR');
}?>
<div class="bloc-header">
	<TABLE width="100%">
		<TR>
			<TD align="left">Public IP Address:<?php echo getIpAddress();?></TD>
			<TD align="center">Welcome<b> <?php if (isset($_SESSION['username'])) echo $_SESSION['username'];?></b></TD>
			<TD align="right"><FORM ACTION="index.php" METHOD="POST"><INPUT TYPE="submit" NAME="disconnect" VALUE="Disconnect"></FORM></TD>
		</TR>
	</TABLE>
</div>
