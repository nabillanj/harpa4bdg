<form method="POST" action="<?php echo e(!empty($anggota->id_anggota) ? route('anggota.update', @$anggota->id_anggota):route('anggota.store')); ?>">
<?php if(!empty($kelas->id_anggota)): ?>
      <input type="hidden" name="_method" value="PUT">
<?php endif; ?>
<div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
    <?php echo Form::label('nama', 'Nama', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::text('nama', null, ['class' => 'form-control']); ?>

        <?php echo $errors->first('nama', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group <?php echo e($errors->has('body') ? 'has-error' : ''); ?>">
    <?php echo Form::label('jurusan', 'Kelas', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::text('jurusan', null, ['class' => 'form-control']); ?>

        <?php echo $errors->first('jurusan', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group <?php echo e($errors->has('body') ? 'has-error' : ''); ?>">
    <?php echo Form::label('generasi', 'Generasi', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::text('generasi', null, ['class' => 'form-control']); ?>

        <?php echo $errors->first('generasi', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group <?php echo e($errors->has('body') ? 'has-error' : ''); ?>">
    <?php echo Form::label('angklung', 'No Angklung', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::text('angklung', null, ['class' => 'form-control']); ?>

        <?php echo $errors->first('angklung', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <?php echo Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']); ?>

    </div>
</div>
</form>