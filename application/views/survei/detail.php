<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card-body">
                <h5 class="card-title"><?=$srv['singkatan'] ;?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?=$srv['tahun']; ?></h6>
                <p class="card-text"><?=$srv['nama']; ?></p>
                <p class="card-text"><?=$srv['bidang']; ?></p>
                <p class="card-text"><?=$srv['seksi']; ?></p>
                
                <a href="<?=base_url(); ?>survei/detail/<?= $srv['id']; ?>" class="badge badge-primary float-right">Detail </a>
                <a href="<?=base_url(); ?>survei/hapus/<?= $srv['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah Anda yakin menghapus survei?');">Hapus </a>
            </div>

        </div>
    </div>
</div>