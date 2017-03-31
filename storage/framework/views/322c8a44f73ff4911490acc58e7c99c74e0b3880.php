<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Anggota</div>
                    <div class="panel-body">
                    <?php if(Auth::user() != null && Auth::user()->level != 0): ?>
                        <a href="<?php echo e(url('/anggota/create')); ?>" class="btn btn-success btn-sm" title="Add New anggotum">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Anggota
                        </a>

                    <?php endif; ?>



                    

                        <?php echo Form::open(['method' => 'GET', 'url' => '/anggota', 'class' => 'navbar-form navbar-right', 'role' => 'search']); ?>

                        <div class="input-group">
                            <!-- <input type="text" class="form-control" name="search" placeholder="Search..."> -->
                            <!-- <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span> -->
                        </div>
                        <?php echo Form::close(); ?>


                        <br/>
                        <br/>
                        <div class="table-responsive" align="center">
                            <table class="table table-borderless" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Generasi</th>
                                        <th>No Angklung</th>
                                        <?php if(Auth::user() != null && Auth::user()->level != 0): ?>
                                        <th>Aksi</th><?php else: ?> <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e($item->nama); ?></td>
                                        <td><?php echo e($item->jurusan); ?></td>
                                        <td><?php echo e($item->generasi); ?></td>
                                        <td><?php echo e($item->angklung); ?></td>
                                        <?php if(Auth::user() != null && Auth::user()->level != 0): ?>
                                        <td class="text-center">
                                          
                                          <form action="<?php echo e(route('anggota.destroy', @$item->id_anggota)); ?>" method="POST">
                                              <?php echo e(method_field('DELETE')); ?>

                                              <?php echo e(csrf_field()); ?>

                                              <a href="<?php echo e(route('anggota.edit', @$item->id_anggota)); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                              <button type="submit" class="btn btn-delete btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                          </form>
                                        </td><?php else: ?> <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>