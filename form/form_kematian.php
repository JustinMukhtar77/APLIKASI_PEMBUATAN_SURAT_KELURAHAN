<form method="post" action="cetak.php">    
    <div class="row">
        <div class="form-group col-sm-3">
            <label for="inputText3" class="col-form-label">No Kematian</label>
            <input id="inputText3" type="text" class="form-control" name="email">
        </div>
        <div class="form-group col-sm-3">
            <label for="inputText3" class="col-form-label">Nik</label>
            <input id="inputText3" type="text" class="form-control" name="nik">
        </div>    
    </div>
     <div class="form-group">
        <label for="inputText3" class="col-form-label">Nama Lengkap</label>
        <input id="inputText3" type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <h5>JENIS KELAMIN</h5>
        <label class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="jk" value="laki-laki" class="custom-control-input">
            <span class="custom-control-label">laki-laki</span>
        </label>
        <label class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="jk" value="perempuan" class="custom-control-input">
            <span class="custom-control-label">perempuan</span>
        </label>
    </div>
    <div class="form-group">
        <label for="inputText3" class="col-form-label">Tempat</label>
        <input id="inputText3" type="text" class="form-control" name="tempat">
    </div>


   <div class="form-group">
        <label for="inputText3" class="col-form-label">Tanggal</label>
        <input id="inputText3" type="date" class="form-control col-sm-4" name="tanggal">
    </div>

    <div class="form-group">
        <label for="inputText3" class="col-form-label">Penyebab</label>
        <div class="form-group ">
            <select class="form-control form-control-sm col-sm-4" name="penyebab">
                <option>penyebab kematian</option>
                <option value="sakit">sakit</option>
                <option value="kecelakaan">kecelakaan</option>
            </select>
        </div>
    </div>

    <br>    
    <div class="col-sm-6 pl-0">
        <p class="text-left">
            <button type="submit" class="btn btn-space btn-info"><i class="fa fa-save">&nbsp;</i>Simpan surat</button>
            <button type="reset" class="btn btn-space btn-danger">Batal</button>
        </p>
    </div>
</form>