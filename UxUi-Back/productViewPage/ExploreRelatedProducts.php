<style>
/* ==========================================
   SECTION 4: RELATED PRODUCTS STYLES
   ========================================== */
.lof-related-section {
    width: 100%;
    background-color: #ffffff;
    padding: 48px 0 44px;
}

.lof-related-container {
    width: min(1216px, calc(100% - 136px));
    max-width: 1216px;
    margin: 0 auto;
    padding: 0;
    box-sizing: border-box;
}

.lof-related-header-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}

.lof-related-title {
    font-family: Arial, sans-serif;
    font-size: 26px;
    line-height: 1.08;
    font-weight: 800;
    text-transform: uppercase;
    color: #151515;
}

.lof-related-title span {
    color: #bf800d;
}

.lof-related-pill {
    background-color: #e2e8f0;
    color: #475569;
    font-family: Arial, sans-serif;
    font-size: 10px;
    font-weight: 700;
    padding: 5px 13px;
    border-radius: 8px;
    text-transform: uppercase;
}

.lof-related-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    margin-bottom: 18px;
}

.lof-related-card {
    position: relative;
    height: 243px;
    border-radius: 7px;
    overflow: hidden;
    background-color: #0d234a;
    text-decoration: none;
    display: block;
}

.lof-related-card-img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.lof-related-card:hover .lof-related-card-img {
    transform: scale(1.06);
}

.lof-related-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(0,0,0,0) 40%, rgba(0,0,0,0.85) 100%);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 16px;
    box-sizing: border-box;
}

.lof-related-card-title {
    font-family: Arial, sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: #ffffff;
    text-transform: uppercase;
    margin: 0 0 6px;
}

.lof-related-card-desc {
    font-family: Arial, sans-serif;
    font-size: 10px;
    color: rgba(255, 255, 255, 0.85);
    margin: 0 0 8px;
    line-height: 1.4;
}

.lof-related-card-action {
    font-family: Arial, sans-serif;
    font-size: 10px;
    font-weight: 700;
    color: #ffffff;
}

.lof-all-products-wrapper {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.lof-related-indicators {
    display: flex;
    justify-content: center;
    gap: 7px;
    margin-top: 0;
}

.lof-related-indicator {
    width: 9px;
    height: 9px;
    border: 0;
    padding: 0;
    background: #d9d9d9;
}

.lof-related-indicator.active {
    background: #bf800d;
}

.lof-btn-all-products {
    border: 1px solid #d1d5db;
    background: #ffffff;
    color: #374151;
    font-family: Arial, sans-serif;
    font-size: 10px;
    font-weight: 700;
    padding: 8px 18px;
    border-radius: 7px;
    cursor: pointer;
    text-transform: uppercase;
    transition: all 0.2s ease;
}

.lof-btn-all-products:hover {
    background-color: #061d52;
    color: #ffffff;
    border-color: #061d52;
}

@media (max-width: 1024px) {
    .lof-related-container {
        width: auto;
        padding: 0 28px;
    }
    .lof-related-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 640px) {
    .lof-related-section { padding: 34px 0 36px; }
    .lof-related-container { padding: 0 20px; }
    .lof-related-grid { grid-template-columns: 1fr; }
    .lof-related-card { height: 220px; }
    .lof-related-header-row {
        align-items: flex-start;
        gap: 12px;
    }
    .lof-related-title {
        font-size: 22px;
    }
    .lof-related-pill {
        flex-shrink: 0;
    }
}
</style>

<?php
$related_products = [
    [
        'title' => 'MARGERINE',
        'desc'  => 'Specially formulated margarine for bakeries, hotels and food service.',
        'img'   => 'Assets/Images/ProductView/ExploreProducts/product-01.png'
    ],
    [
        'title' => 'BAKERY FAT',
        'desc'  => 'Specialty formulated shortening and fats for bakeries and commercial food production.',
        'img'   => 'Assets/Images/ProductView/ExploreProducts/product-01.png'
    ],
    [
        'title' => 'EDIBLE OIL',
        'desc'  => 'Premium refined edible palm olein for everyday cooking and food production.',
        'img'   => 'Assets/Images/ProductView/ExploreProducts/product-02.png'
    ],
    [
        'title' => 'COCONUT OIL',
        'desc'  => 'Naturally processed coconut oil with exceptional purity and quality.',
        'img'   => 'Assets/Images/ProductView/ExploreProducts/product-03.png'
    ]
];
?>

<div class="lof-related-section">
    <div class="lof-related-container">
        
        <div class="lof-related-header-row">
            <h2 class="lof-related-title">EXPLORE <span>RELATED PRODUCTS</span></h2>
            <span class="lof-related-pill">RELATED PRODUCTS</span>
        </div>

        <div class="lof-related-grid">
            <?php foreach ($related_products as $rel): ?>
                <a href="#" class="lof-related-card">
                    <img src="<?= $rel['img'] ?>" alt="<?= $rel['title'] ?>" class="lof-related-card-img" loading="lazy">
                    <div class="lof-related-overlay">
                        <h3 class="lof-related-card-title"><?= $rel['title'] ?></h3>
                        <p class="lof-related-card-desc"><?= $rel['desc'] ?></p>
                        <span class="lof-related-card-action">Learn More &rarr;</span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="lof-related-indicators" aria-label="Related product pages">
            <button type="button" class="lof-related-indicator active" aria-label="Related products page 1"></button>
            <button type="button" class="lof-related-indicator" aria-label="Related products page 2"></button>
            <button type="button" class="lof-related-indicator" aria-label="Related products page 3"></button>
        </div>

        <div class="lof-all-products-wrapper">
            <button type="button" class="lof-btn-all-products">ALL PRODUCTS</button>
        </div>

    </div>
</div>
