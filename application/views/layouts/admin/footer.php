<footer class="main-footer">
	<strong>Copyright &copy; <?= date('Y') ?> <a href="<?= base_url('/') ?>">Travelly</a>.</strong> All rights
	reserved.
</footer>

<script src="<?= assets('plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
<script src="<?= assets('bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= assets('js/app.min.js') ?>"></script>
<script src="<?= assets('plugins/datepicker/bootstrap-datepicker.js') ?>"></script>
<script src="<?= assets('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
<script type="text/javascript">
   $(function(){
      $(".textarea").wysihtml5();
      $('#calendar').datepicker();
   });

   function askFirst(){
   	var ask = confirm("Apakah Anda yakin akan menghapus data ini ?");
	if (ask == true) {
		return true;
	} else {
		return false;
	}
   }

   function askForLogout()
   {
   	var ask = confirm("Apakah Anda yakin akan keluar ?");
	if (ask == true) {
		return document.getElementById('logout').submit();
	} else {
		return false;
	}
   }
	<?php if (isset($_SESSION['exe'])): ?>
		alert("<?= $_SESSION['exe']; ?>");
	<?php endif ?>
</script>
</body>
</html>