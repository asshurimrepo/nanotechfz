<?php
$agriculture = [
    ['name' => 'Ammonium Nitrate', 'image' => 'certificate.png', 'download_link' => 'uploads/Ammonium nitrate.pdf' ],
    ['name' => 'Diammonium Phosphate', 'image' => 'certificate.png', 'download_link' => 'uploads/DAP.pdf' ],
    ['name' => 'Monoammonium Phosphate', 'image' => 'certificate.png', 'download_link' => 'uploads/MAP.pdf' ],
    ['name' => 'Potassium Chloride', 'image' => 'certificate.png', 'download_link' => 'uploads/potassium chloride.pdf' ],
    ['name' => 'Potassium Sulphate', 'image' => 'certificate.png', 'download_link' => 'uploads/Potassium sulphate.pdf' ],
    ['name' => 'UREA Grade A', 'image' => 'certificate.png', 'download_link' => 'uploads/UREA.pdf' ],
];
foreach($agriculture as $item){ ?>
        <!-- Metal - Drill Pipes -->
        <div class="cbp-item fertilizer">
            <a class="cbp-caption cbp-lightbox">
                <div class="cbp-caption-defaultWrap">
                    <img src="products/<?=$item['image']?>" alt="">
                    <h4><b><?=$item['name']?></b></h4>
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <button class="btn btn-default" href="#" onclick="window.location.href='<?=$item['download_link'];?>'"> <b>Download Certificate</b></button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php
}
?>

