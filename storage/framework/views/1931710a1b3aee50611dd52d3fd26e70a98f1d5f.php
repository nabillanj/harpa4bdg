<?php $__env->startSection('content'); ?>
    
    <div class="galeri">
        <div id="topdes" >
            <h2 align="left" style="margin-left: 3%">Galeri HARPA 4</h2>
            <img src="<?php echo e(asset('assets')); ?>/img/welcome_bg.png" style="width:15%; height: 3px; margin-top: -4%;margin-left: 3%; z-index:-1;">
            <?php if(Auth::user() != null): ?>
            <a href="<?php echo e(url('/galeri/create')); ?>" class="btn btn-success btn-sm" title="Add New galeri" style="z-index: 5;margin-left: -15%">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
            <?php endif; ?>
        </div>

      <?php $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="full-objek">
            <div id="objek-galeri">
                <img src="<?php echo e('uploads/'.$item->foto); ?>" class="gambar1" />
                <div class="ket"><td><?php echo e($item->keterangan); ?></td></div>
                <div class="ket1">
                    <a class="btn btn-danger" href="<?php echo e(route('galeri.destroy', @$item->id)); ?>"><i class="glyphicon glyphicon-trash"></i></a>
                     <?php echo e(method_field('DELETE')); ?>

                     <?php echo e(csrf_field()); ?>

                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>