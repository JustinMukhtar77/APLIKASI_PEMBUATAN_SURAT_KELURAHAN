<form method="post" action="simpan/s_surat_kelahiran.php">
    <div class="form-group">
        <label for="inputText3" class="col-form-label">Nama Lengkap</label>
        <input id="inputText3" type="text" class="form-control" name="nama">
    </div>

    <div class="form-group">
        <h5>JENIS KELAMIN</h5>
        <label class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="jk" checked="" class="custom-control-input" value="laki-laki">
            <span class="custom-control-label">laki-laki</span>
        </label>
        <label class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="jk" class="custom-control-input" value="perempuan">
            <span class="custom-control-label">perempuan</span>
        </label>
    </div>
    <div class="form-group">
        <label for="inputText3" class="col-form-label">Nama Ayah</label>
        <input id="inputText3" type="text" class="form-control" name="ayah">
    </div>
    <div class="form-group">
        <label for="inputText3" class="col-form-label">Nama Ibu</label>
        <input id="inputText3" type="text" class="form-control" name="ibu">
    </div>
    <div class="form-group">
        <label for="inputText3" class="col-form-label">Tempat</label>
        <input id="inputText3" type="text" class="form-control" name="tempat">
    </div>

    <div class="form-group">
        <label for="inputText3" class="col-form-label">tanggal</label>
        <input id="inputText3" type="date" class="form-control" name="tanggal">
    </div>

    <br>    
    <div class="col-sm-6 pl-0">
        <p class="text-left">
            <button type="submit" name="submit" class="btn btn-space btn-info"><i class="fa fa-save">&nbsp;</i>Simpan surat</button>
            <button type="reset" class="btn btn-space btn-danger">Batal</button>
        </p>
    </div>
</form>