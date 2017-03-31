<form method="POST" action="<?php echo e(!empty($galeri->id) ? route('galeri.update', @$galeri->id):route('galeri.store')); ?>" enctype="multipart/form-data">
<?php if(!empty($kelas->id)): ?>
      <input type="hidden" name="_method" value="PUT">
<?php endif; ?>
    <div class="form-group">
        <label class="control-label col-md-4">Upload Gambar</label>
        <div class="col-md-6">
            <input type="file" name="foto" class="form-control" id="image-source" onchange="previewImage();">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-4">Keterangan</label>
        <div class="col-md-6">
            <textarea class="form-control" name="keterangan"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form> 