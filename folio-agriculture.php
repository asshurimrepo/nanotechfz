<?php
$agriculture = [
    ['name' => 'Wheat', 'image' => 'barley.jpg', 'description' => 'Technological advances in soil preparation and seed placement at planting time, use of crop rotation and fertilizers to improve plant growth, and advances in harvesting methods have all combined to promote wheat as a viable crop.' ],
    ['name' => 'Barley', 'image' => 'wheat.jpg', 'description' => 'Technological advances in soil preparation and seed placement at planting time, use of crop rotation and fertilizers to improve plant growth, and advances in harvesting methods have all combined to promote wheat as a viable crop.'],
    ['name' => 'Buckwheat', 'image' => 'buckwheat.jpg', 'description' => 'Despite the name, buckwheat is not related to wheat, as it is not a buckwheat is a short season crop that does well on low-fertility or acidic soils, but the soil must be well drained.'],
    ['name' => 'Corn', 'image' => 'corn.jpeg', 'description' => 'Grown since 1997 in the United States and Canada, 86% of the US corn crop was genetically modified in 2010.'],
    ['name' => 'Sunflower', 'image' => 'sunflower-1.jpg', 'description' => 'They grow best in fertile, wet, well-drained soil with a lot of mulch. In commercial planting, seeds are planted 45Â cm (1.5ft) apart and 2.5Â cm (1 in) deep.'],
    ['name' => 'Rapeseed', 'image' => 'rapeseed.jpg', 'description' => 'Rapeseed oil is used as diesel fuel, either as biodiesel, straight in heated fuel systems, or blended with petroleum distillates for powering motor vehicles.'],
    ['name' => 'Wheat Bran', 'image' => 'wheat_bran.jpg', 'description' => 'The high oil content of bran makes it subject to A major rice bran fraction contains 12%-13% oil and highly unsaponifiable components (4.3%).'],
    ['name' => 'Sunflower Meal', 'image' => 'sunflower_meal.jpg', 'description' => 'Sunflower meal is the by-product of the extraction of oil from sunflower seeds. Solvent extraction results in a lower fat content, while dehulling decreases the fiber content, yielding a meal richer in protein. '],
    ['name' => 'Soy', 'image' => 'soy.jpg', 'description' => 'Traditional nonfermented food uses of soybeans includesoy milk, and from the latter tofu and tofu skin.'],
    ['name' => 'Oat', 'image' => 'oat.jpg', 'description' => 'Oats are grown in temperate regions. Oats have numerous uses in foods; most commonly, they are rolled or crushed intoÂ oatmeal, or ground into fine oat flour. '],
    ['name' => 'Sunflower Oil', 'image' => 'sunflower_oil.jpg', 'description' => 'Sunflower oil is a monounsaturated (MUFA)/polyunsaturated (PUFA) mixture of mostlyoleic acid (omega-9)-linoleic acid (omega-6) group of oils.'],
    ['name' => 'Corn Oil', 'image' => 'corn_oil.jpg', 'description' => 'Corn oil is also a feedstock used for biodiesel. Almost all corn oil isÂ expeller pressed, then solvent extracted using hexane or 2-methylpentane (isohexane).'],
    ['name' => 'Nut', 'image' => 'nut.jpg', 'description' => 'Nuts have a very low glycemic index (GI) due to their high unsaturated fat and protein content and relatively low carbohydrate content. '],
    ['name' => 'Nut', 'image' => 'cotton.jpg', 'description' => '']
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
                            <div class="cbp-l-caption-desc"><?=$item['description']?></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php
}
?>

