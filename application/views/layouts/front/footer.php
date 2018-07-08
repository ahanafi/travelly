<div class="big-footer">
	<div class="container">

		<div class="col-md-4">
			<h4>SIAPA KAMI ?</h4>
			<p>
				TRAVELLY merupakan sebuah jasa TOUR & TRAVEL di daerah Jakarta yang menawarkan beberapa jasa BERWISATA yang menarik namun dengan harga ekonomis dibandingkan dengan jasa sejenisnya di Jakarta.
				<br>
				<a href="<?= base_url('profile') ?>">Read More</a>
			</p>
		</div>

		<div class="col-md-4">
			<h4>KANTOR KAMI</h4>
			<p>
				<a href="https://www.google.com/maps?z=16&q=jalan+raya+mabes+tni+no.+14+,cipayung+jakarta+timur+13840,+indonesia">
					Jalan Raya Mabes TNI No. 14 ,Cipayung Jakarta Timur 13840, Indonesia
				</a>
				<br>
				021-12345678
				<br>
				Weekday: 08:00 - 17:00 WIB <br>
				Weekend: 10:00 - 15:00 WIB <br>
				Hari libur nasional: Tutup <br>
			</p>
		</div>

		<div class="col-md-4">
			<h4>HUBUNGI KAMI</h4>
			<p>
				<ul class="list-group">
					<li>Call Center: 021-12345678</li>
					<li>CS1: +62812 1084 7110</li>
					<li>CS2: +62812 8528 9235</li>
					<li>YM1: pelangi.wisata01@yahoo.com</li>
					<li>YM2: pelangi.wisata02@yahoo.com</li>
					<li>Pin BB: 73D285D4 / 73D9E82D</li>
					<li>Instagram: pelangiwisata01</li>
				</ul>
			</p>
		</div>

	</div>
</div>
<div class="container">
	<footer>
		<p>&copy; Travelly <?= date('Y') ?></p>
	</footer>
</div> <!-- /container -->

<a href="#top" rel='m_PageScroll2id' class="btn btn-success btn-to-top" data-toggle="tooltip" title="Go to Top">
	<i class="fa fa-chevron-up"></i>
</a>

<script src="<?= assets('plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
<script src="<?= assets('bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= assets('js/app.min.js') ?>"></script>
<script src="<?= assets('js/jquery.malihu.PageScroll2id.min.js') ?>"></script>
<script type="text/javascript">
	$(function(){
		 $("a[rel='m_PageScroll2id']").mPageScroll2id();
		 $("a[data-toggle=tooltip]").tooltip();
	});
</script>
</body>
</html>