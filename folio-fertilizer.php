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
        <div class="cbp-item agriculture">
            <a class="cbp-caption cbp-lightbox" data-title="<?=$item['name']?>" href="products/<?=$item['image']?>">
                <div class="cbp-caption-defaultWrap">
                    <img src="products/<?=$item['image']?>" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title"><?=$item['name']?></div>
                            <div class="cbp-l-caption-desc">
                                <a href="<?=asset($item['download_link'])?>"> Download Certificate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php
}
?>

