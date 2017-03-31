<!DOCTYPE html>
<html> 
<head>
	<title>HARPA 4</title>

	<link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/css/style.css">
</head>
<body>
	<div class="body">
			<nav>
				<ul>
				  <?php if(Auth::guest()): ?>
					<li><a style="border-right:1px solid #fdd100;" href="<?php echo e(url('/')); ?>">BERANDA</a></li>
					<li><a href="<?php echo e(url('/galeri')); ?>">GALERI</a></li>
					<li class="journey"><center><img href="index.php" align="center" class="logo" src="<?php echo e(asset('assets')); ?>/img/harpa.png" alt="harpa"></li></center>
					<li><a style="border-right:1px solid #fdd100;" href="<?php echo e(url('/anggota')); ?>">ANGGOTA</a></li>
					<li><a href="<?php echo e(url('/login')); ?>">LOGIN</a></li>
				  <?php else: ?>
				  	<li><a style="border-right:1px solid #fdd100;" href="<?php echo e(url('/')); ?>">BERANDA</a></li>
					<li><a href="<?php echo e(url('/galeri')); ?>">GALERI</a></li>
					<li class="journey"><center><img href="index.php" align="center" class="logo" src="<?php echo e(asset('assets')); ?>/img/harpa.png" alt="harpa"></li></center>
					<li><a style="border-right:1px solid #fdd100;" href="<?php echo e(url('/anggota')); ?>">ANGGOTA</a></li>
					<li><a href="<?php echo e(url('/logout')); ?>">LOGOUT</a></li>
				  <?php endif; ?>
				</ul>
			</nav>
	</div>
</body>
</html>