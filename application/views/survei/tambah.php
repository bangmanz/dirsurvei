<div class="container">
    <div class="row mt-3">
        
        <div class="col md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors();?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Survei</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="singakatan">Singkatan</label>
                            <input type="text" name="singkatan" class="form-control" id="singkatan ">
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun">
                        </div>
                                              
                        <div class="form-group">
                            <label for="Bidang">Bidang/Bagian</label>
                            <select class="form-control" name="bidang" id="bidang" name="bidang">
                            <option value="Statistik Sosial">Statistik Sosial</option>          
                            <option value="Statistik Distribusi">Statistik Distribusi</option>          
                            <option value="Statistik Produksi">Statistik Produksi</option>          
                            <option value="Neraca Wilayah dan Analisis Statistik">Neraca Wilayah dan Analisis Statistik</option>          
                            <option value="IPDS">IPDS</option>          
                            
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="Bidang">Seksi</label>
                            <select class="form-control" name="seksi" id="seksi" name="seksi">
                            <option value="Seksi A">Seksi A</option>          
                            <option value="Seksi B">Seksi B</option>          
                            <option value="Seksi C">Seksi C</option>          
                            </select>
                        </div>
                        
                        <label for="kuesioner">Kuesioner</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="kuesioner" name="kuesioner" >
                                <label class="custom-file-label" for="kuesioner" >Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="uploadKuesioner">Upload</span>
                            </div>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right"> Tambah Data </button>
                    
                    </form>

                </div>
            </div>

    
        </div>
    </div>

</div>