
<?php
/*if ( $MESSAGE == 'login-failed' ) {
	echo 'Login fehlgeschlagen.';
}*/
?>

<?php /* Anmelden */ ?>
<h2>Login</h2>
<form name="login" method="post" action="">
	<input type="hidden" name="action" value="login" />
	<div>
		<input type="text" name="username" id="username" value="" placeholder="Benutzername" required />
	</div><br />
	<div>
		<input type="password" name="password" id="password" value="" placeholder="Passwort" required />
	</div><br />
	<div class="table">
		<div class="table-cell">
			<a href="?mode=lostpassword" title="Passwort vergessen?">Passwort vergessen?</a>
		</div>
		<div class="table-cell right">
			<input type="submit" value="Login" />
		</div>
	</div><br />
</form>
<form name="demologin" method="post" action="">
	<input type="hidden" name="action" value="demologin" />
	<input type="text" name="human" class="human" value="" />
	<input type="hidden" name="ip" id="ip" value="" />
	<input type="submit" value="Demologin" />
</form>
<script>
	document.getElementById("ip").value="<?php echo $_SERVER["REMOTE_ADDR"] ?>";
</script>

<a href="?mode=register" title="Registrieren">Jetzt Registrieren</a><br />
<a href="?mode=ad" title="Werbung">Werbung</a><br />