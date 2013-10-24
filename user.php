<?php
include 'header.php';
?>

<!-- bagian isi -->
	<div class="container">
		<div class="row">
			<div class="span3">
				<!-- awal sidebar user -->
               <?php include 'sidebar_user.php';?>
                <!-- akhir sidebar -->
			</div>

			<div class="span9">
				<div class="hero-unit">
                	<h3>Selamat datang di halaman user</h3>
                    
				</div>

				
				<div class="pagination">
					<ul>
						<li class"disabled"><span>Prev</span></li>
						<li class"disabled"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">Next</a></li>
					</ul>
				</div>

			</div>
		</div>
        <!-- akhir isi -->
	</div>
	
	<hr />

	<br>
<?php
include 'footer.php';
?>