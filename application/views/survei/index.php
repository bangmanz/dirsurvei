
<div class="container">

<?php if($this->session->flashdata('flash')) : ?>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Survei <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    </div>
</div>
<?php endif; ?>


<div class="row mt-3">
    <div class="col-md-6">
    <a href = "<?=base_url();?>survei/tambah" class="btn btn-primary"> Tambah Data Survei  </a>
    </div>

</div>
    
    
    <div class="row-mt-3">

        <div class="col-md-6">
        <h1>Daftar Survei</h1>
            
            <?php foreach ($survei as $srv):?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body row-mt-4">
                        <h5 class="card-title"><?=$srv['singkatan'] ;?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?=$srv['tahun']; ?></h6>
                        <p class="card-text"><?=$srv['nama']; ?></p>
                        <a href="#" class="card-link">Detil.. </a>
                        <a href="<?=base_url(); ?>mahasiswa/hapus/<?= $srv['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah Anda yakin menghapus survei?');">Hapus </a>
                    </div>
                </div>
            <?php endforeach; ?>
        
        
        </div>

    </div>


</div>
