

<div class="container">
    <div class="row-mt-3">
        <div class="col-md-6">
        <h1>Daftar Survei</h1>
            
            <?php foreach ($survei as $srv):?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title"><?=$srv['singkatan'] ;?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?=$srv['tahun']; ?></h6>
                <p class="card-text"><?=$srv['nama']; ?></p>
                <a href="#" class="card-link">Detil.. </a>
            </div>
            <?php endforeach; ?>
        
        </div>
        </div>

    </div>


</div>
