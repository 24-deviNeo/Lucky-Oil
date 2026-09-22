<style>

.lof-grid-section {
    width: 100%;
    background-color: #ffffff;
    padding-bottom: 70px;
}

.lof-grid-container {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 54px;
    box-sizing: border-box;
}

/* 4-Column Grid */
.lof-products-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}

/* =========================================================
   SINGLE PRODUCT CARD
   ========================================================= */
.lof-product-card {
    position: relative;
    height: 400px;
    border-radius: 12px;
    overflow: hidden;
    background-color: #0d234a;
    cursor: pointer;
    text-decoration: none;
    display: block;
    transition:
        transform 0.35s cubic-bezier(0.25, 1, 0.5, 1),
        box-shadow 0.35s ease;
    will-change: transform;
}

.lof-product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 14px 28px rgba(6, 29, 82, 0.22);
}

/* =========================================================
   IMAGE - Zoom effect on hover
   ========================================================= */
.lof-card-img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1);
    transform-origin: center center;
    will-change: transform;
}

.lof-product-card:hover .lof-card-img {
    transform: scale(1.2);
}

/* =========================================================
   GRADIENT OVERLAY
   ========================================================= */
.lof-card-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        180deg,
        rgba(0, 0, 0, 0) 0%,
        rgba(0, 0, 0, 0) 38%,
        rgba(0, 0, 0, 0.60) 68%,
        rgba(0, 0, 0, 0.88) 88%,
        rgba(0, 0, 0, 0.95) 100%
    );
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 24px 20px;
    box-sizing: border-box;
}

/* =========================================================
   CARD TYPOGRAPHY
   ========================================================= */
.lof-card-title {
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin: 0 0 6px;
    line-height: 1.2;
}

.lof-card-desc {
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 12px;
    line-height: 1.45;
    color: rgba(255, 255, 255, 0.85);
    margin: 0 0 12px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* =========================================================
   LEARN MORE LINK & ARROW SHIFT
   ========================================================= */
.lof-card-action {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: 600;
    color: #ffffff;
    text-decoration: none;
    line-height: 1;
}

.lof-card-arrow {
    display: inline-block;
    font-size: 14px;
    transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1);
}

/* Arrow moves right on card hover without changing text color */
.lof-product-card:hover .lof-card-arrow {
    transform: translateX(6px);
}

@media (prefers-reduced-motion: reduce) {
    .lof-product-card,
    .lof-card-img,
    .lof-card-arrow {
        transition: none;
    }
}

/* =========================================================
   LOAD MORE BUTTON
   ========================================================= */
.lof-more-wrapper {
    display: flex;
    justify-content: center;
    margin-top: 52px;
}

.lof-btn-more {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 36px;
    background-color: #ffffff;
    color: #1f2937;
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    border: 1.5px solid #c8c8c8;
    border-radius: 6px;
    cursor: pointer;
    outline: none;
    transition: all 0.25s ease;
}

.lof-btn-more:hover {
    border-color: #BF800D;
    background-color: #BF800D;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(191, 128, 13, 0.28);
}

/* =========================================================
   RESPONSIVE BREAKPOINTS
   ========================================================= */
@media (max-width: 1280px) {
    .lof-grid-container {
        padding: 0 30px;
    }
}

@media (max-width: 1024px) {
    .lof-products-grid {
        grid-template-columns: repeat(3, 1fr);
    }
    .lof-product-card {
        height: 360px;
    }
}

@media (max-width: 768px) {
    .lof-grid-section {
        padding-bottom: 40px;
    }
    .lof-products-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
    }
    .lof-product-card {
        height: 320px;
    }
    .lof-more-wrapper {
        margin-top: 36px;
    }
}

@media (max-width: 480px) {
    .lof-grid-container {
        padding: 0 16px;
    }
    .lof-products-grid {
        grid-template-columns: 1fr;
        gap: 14px;
    }
    .lof-product-card {
        height: 300px;
    }
}
</style>

<?php
$lof_products = [
    ['id' => 1,  'title' => 'MARGERINE',   'desc' => 'Specially formulated margarine for bakeries, hotels and food service.',                         'img' => 'Assets/Images/Product/properties/product-01.png', 'category' => 'margarine'],
    ['id' => 2,  'title' => 'BAKERY FAT',  'desc' => 'Specially formulated margarine for bakeries, hotels and food service.',                          'img' => 'Assets/Images/Product/properties/product-02.png', 'category' => 'fat-ghee'],
    ['id' => 3,  'title' => 'COCONUT OIL', 'desc' => 'Naturally processed coconut oil with exceptional purity and quality.',                           'img' => 'Assets/Images/Product/properties/product-03.png', 'category' => 'cooking-oil'],
    ['id' => 4,  'title' => 'EDIBLE OIL',  'desc' => 'Premium refined edible palm olein for everyday cooking and food production.',                    'img' => 'Assets/Images/Product/properties/product-04.png', 'category' => 'cooking-oil'],
    ['id' => 5,  'title' => 'BAKERY FAT',  'desc' => 'Specialty formulated shortening and fats for bakeries and commercial food production.',          'img' => 'Assets/Images/Product/properties/product-01.png', 'category' => 'fat-ghee'],
    ['id' => 6,  'title' => 'MARGERINE',   'desc' => 'Specially formulated margarine for bakeries, hotels and food service.',                          'img' => 'Assets/Images/Product/properties/product-01.png', 'category' => 'margarine'],
    ['id' => 7,  'title' => 'COCONUT OIL', 'desc' => 'Naturally processed coconut oil with exceptional purity and quality.',                           'img' => 'Assets/Images/Product/properties/product-01.png', 'category' => 'cooking-oil'],
    ['id' => 8,  'title' => 'EDIBLE OIL',  'desc' => 'Premium refined edible palm olein for everyday cooking and food production.',                    'img' => 'Assets/Images/Product/properties/product-01.png', 'category' => 'cooking-oil'],
    ['id' => 9,  'title' => 'COCONUT OIL', 'desc' => 'Naturally processed coconut oil with exceptional purity and quality.',                           'img' => 'Assets/Images/Product/properties/product-01.png', 'category' => 'cooking-oil'],
    ['id' => 10, 'title' => 'EDIBLE OIL',  'desc' => 'Premium refined edible palm olein for everyday cooking and food production.',                    'img' => 'Assets/Images/Product/properties/product-01.png', 'category' => 'cooking-oil'],
    ['id' => 11, 'title' => 'BAKERY FAT',  'desc' => 'Specialty formulated shortening and fats for bakeries and commercial food production.',          'img' => 'Assets/Images/Product/properties/product-01.png', 'category' => 'fat-ghee'],
    ['id' => 12, 'title' => 'MARGERINE',   'desc' => 'Specially formulated margarine for bakeries, hotels and food service.',                          'img' => 'Assets/Images/Product/properties/product-01.png', 'category' => 'margarine'],
    ['id' => 13, 'title' => 'EDIBLE OIL',  'desc' => 'Premium refined edible palm olein for everyday cooking and food production.',                    'img' => 'Assets/Images/Product/properties/product-01.png', 'category' => 'cooking-oil'],
    ['id' => 14, 'title' => 'COCONUT OIL', 'desc' => 'Naturally processed coconut oil with exceptional purity and quality.',                           'img' => 'Assets/Images/Product/properties/product-01.png', 'category' => 'cooking-oil'],
    ['id' => 15, 'title' => 'BAKERY FAT',  'desc' => 'Specialty formulated shortening and fats for bakeries and commercial food production.',          'img' => 'Assets/Images/Product/properties/product-01.png', 'category' => 'fat-ghee'],
    ['id' => 16, 'title' => 'MARGERINE',   'desc' => 'Specially formulated margarine for bakeries, hotels and food service.',                          'img' => 'Assets/Images/Product/properties/product-01.png', 'category' => 'margarine'],
];
?>

<!-- SECTION 3: PRODUCT GRID -->
<section class="lof-grid-section">
    <div class="lof-grid-container">

        <!-- 4×4 Product Cards Grid -->
        <div class="lof-products-grid" id="lofProductsGrid">
            <?php foreach ($lof_products as $product): ?>
                <a
                    href="productVeiwPage.php?id=<?= $product['id'] ?>"
                    class="lof-product-card"
                    data-category="<?= $product['category'] ?>"
                >
                    <!-- Background Image (zooms on hover) -->
                    <img
                        src="<?= htmlspecialchars($product['img']) ?>"
                        alt="<?= htmlspecialchars($product['title']) ?>"
                        class="lof-card-img"
                        loading="lazy"
                    >

                    <!-- Dark Gradient Overlay + Text -->
                    <div class="lof-card-overlay">
                        <h3 class="lof-card-title"><?= htmlspecialchars($product['title']) ?></h3>
                        <p class="lof-card-desc"><?= htmlspecialchars($product['desc']) ?></p>

                        <!-- Learn More with simple arrow shift -->
                        <span class="lof-card-action">
                            Learn More <span class="lof-card-arrow">→</span>
                        </span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- More Products Button -->
        <div class="lof-more-wrapper">
            <button type="button" class="lof-btn-more" id="lofBtnMore">
                MORE PRODUCTS
                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="1,1 6,7 11,1"/>
                </svg>
            </button>
        </div>

    </div>
</section>