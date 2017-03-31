<?php $__env->startSection('content'); ?>
<div id="con">
    <div id="slider">
        <figure>
            <img src="<?php echo e(asset('assets')); ?>/img/slider/1.jpg" alt="FPA XV ITB">
            <img src="<?php echo e(asset('assets')); ?>/img/slider/5.jpg">
            <img src="<?php echo e(asset('assets')); ?>/img/slider/3.jpg">
            <img src="<?php echo e(asset('assets')); ?>/img/slider/4.jpg">
            <img src="<?php echo e(asset('assets')); ?>/img/slider/2.jpg">
        </figure>
    </div>
</div>

<center>
    <div class="welcome">
            <img src="<?php echo e(asset('assets')); ?>/img/welcome_bg.png" align="center" style="width:95%; height: 3px">
        <img class="sayap1" src="<?php echo e(asset('assets')); ?>/img/sayap.png" alt="sayap" >
        <p class="text1" align="center"><b>HARMONI PADUAN ANGKLUNG</b></p>
        <p class="text2">SMK Negeri 4 Bandung</p>
        <img class="sayap" src="<?php echo e(asset('assets')); ?>/img/sayap.png" alt="sayap" >
            <img src="<?php echo e(asset('assets')); ?>/img/welcome_bg.png" align="center" style="width:95%; height: 3px">
    </div>
</center>

<div class="fixed-group">
    <div id="left">
        <div class="history">
            <center><img src="<?php echo e(asset('assets')); ?>/img/history.png" alt="prestasi"></center>
        </div>
        <h1 align="center">Sejarah HARPA 4</h1>
        <p align="justify" style="font-family:Consolas; font-size: 16px; margin-left: 5% ">
            Tim angklung SMK Negeri 4 Bandung pertama tama di prakarsai oleh komite sekolah pada tahun 2007, yaitu Bambang Irawan. Ibu Susi dan Ibu Cucu menjadi pembimbing kami. Pelatih Sekaligus arranger HARPA4 yang pertama adalah Pak Sam Udjo dan Pak Willyana.<br/>
            SMK Negeri 4 Bandung merupakan SMK pertama yang membentuk tim angklung, walaupun jangkauan HARPA4 pada waktu itu belum luas, hanya mengisi acara intern sekolah saja. Hingga muncul generasi kedua yang menambah banyak anggota HARPA4 dan kita sudah mandiri latihan tanpa pelatih. Generasi ketiga HARPA4 mulai tampil di berbagai acara luar sekolah dan memberanikan diri untuk mengikuti Festival Paduan Angklung untuk pertama kalinya yaitu FPA XII ITB tingkat nasional pada tanggal 16-18 November 2009.
        </p>
    </div>

    <div id="right">
        <div class="prestasi">
            <center><img src="<?php echo e(asset('assets')); ?>/img/prestasi.png" alt="prestasi"></center>
        </div>
        <div class="info-history">
            <h1 align="center"> Prestasi HARPA 4</h1>
            <p style="font-family:Consolas; font-size: 16px; margin-left: 5% ">
                1. Juara 1 FPA ITB Tingkat Nasional (2011) <br/>
                2. Juara 1 Gebyar Angklung Pelajar (2012) <br/>
                3. Juara 1 Gebyar Angklung Pelajar (2013) <br/>
                4. Juara 1 Lomba Angklung IP3L <br/>
                5. Juara 1 FPA ITB Tingkat Nasional (2015) <br/>
                6. Konser Perdana (Golden Tone of HARPA 4) pada 2013 <br/>
            </p>
        </div>
    </div>
    <center>
        <img src="<?php echo e(asset('assets')); ?>/img/welcome_bg.png" align="center" style="width:90%; height: 3px">
    </center>
</div>

<div class="info-ketua">
    <div id="topdes">
        <h2 align="center">Penampilan HARPA 4</h2>
        <center><img src="<?php echo e(asset('assets')); ?>/img/welcome_bg.png" style="width:15%; height: 3px"></center>
    </div>
            <div id="objek">
                <img src="<?php echo e(asset('assets')); ?>/img/galeri/5.jpg" class="gambar1" />
                    <div class="ket">Perpisahan 2016</div>
            </div>
            <div id="objek">
                <img src="<?php echo e(asset('assets')); ?>/img/galeri/11.jpg" class="gambar2" />
                <div class="ket">FPA XV</div>
            </div>
            <div id="objek">
                <img src="<?php echo e(asset('assets')); ?>/img/galeri/12.jpg" class="gambar3" />
                <div class="ket">THINK 2</div>
            </div>
            <div id="objek">
                <img src="<?php echo e(asset('assets')); ?>/img/galeri/14.jpg" class="gambar3" />
                <div class="ket">THINK 2</div>
            </div>
            <div id="objek">
                <img src="<?php echo e(asset('assets')); ?>/img/galeri/27.jpg" class="gambar3" />
                <div class="ket">Government Art Show</div>
            </div>
            <div id="objek">
                <img src="<?php echo e(asset('assets')); ?>/img/galeri/38.jpg" class="gambar3" />
                <div class="ket">Gladi FPA XV</div>
            </div>
            <div id="objek">
                <img src="<?php echo e(asset('assets')); ?>/img/galeri/39.jpg" class="gambar3" />
                <div class="ket">Gladi FPA XV</div>
            </div>
            <div id="objek">
                <img src="<?php echo e(asset('assets')); ?>/img/galeri/40.png" class="gambar3" />
                <div class="ket">FIKSI 2016</div>
            </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>