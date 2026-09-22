<style>
/* ==========================================
   SECTION 2: PRODUCT SHOWCASE STYLES
   ========================================== */
.lof-product-main-section {
    width: 100%;
    background: #fff;
    padding: 64px 0 76px;
    font-family: Arial, Helvetica, sans-serif;
}

.lof-product-container {
    max-width: 1216px;
    margin: 0 auto;
    padding: 0;
    display: grid;
    grid-template-columns: minmax(0, 574px) minmax(0, 1fr);
    gap: 30px;
    box-sizing: border-box;
    align-items: start;
}

/* Gallery Left */
.lof-gallery-wrapper {
    display: flex;
    flex-direction: column;
    gap: 16px;
    height: 513px;
}

.lof-main-image-box {
    position: relative;
    width: 100%;
    aspect-ratio: 1.42 / 1;
    height: auto;
    background: #f2f2f2;
    border-radius: 0;
    overflow: hidden;
}

.lof-image-indicators {
    position: absolute;
    right: 18px;
    bottom: 18px;
    display: flex;
    gap: 7px;
    z-index: 3;
}

.lof-image-indicator {
    width: 14px;
    height: 14px;
    padding: 0;
    border: 0;
    background: rgba(255, 255, 255, 0.62);
    cursor: pointer;
    transition: background-color 0.2s ease, transform 0.2s ease;
}

.lof-image-indicator.active,
.lof-image-indicator:hover {
    background: #fff;
    transform: scale(1.12);
}

.lof-main-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transform: scale(1);
    transform-origin: center center;
    transition: transform 0.45s cubic-bezier(0.2, 0.7, 0.2, 1);
    will-change: transform;
}

.lof-main-image-box.is-zoomed .lof-main-img {
    transform: scale(1.8);
}

.lof-stock-badge {
    position: absolute;
    top: 32px;
    left: 34px;
    z-index: 2;
    background: rgba(255,255,255,0.78);
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 0.04em;
    padding: 6px 12px;
    border-radius: 2px;
    text-transform: uppercase;
}

.lof-gallery-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 66px;
    height: 66px;
    background: rgba(255, 255, 255, 0.72);
    border: none;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: Arial, Helvetica, sans-serif;
    color: #9d7546;
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.08);
    z-index: 2;
    transition: background-color 0.25s ease, color 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
}

.lof-gallery-arrow::before,
.lof-gallery-arrow::after {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    border-top: 13px solid transparent;
    border-bottom: 13px solid transparent;
    transition: border-color 0.25s ease;
}

.lof-arrow-prev::before {
    border-right: 20px solid currentColor;
}

.lof-arrow-next::before {
    border-left: 20px solid currentColor;
}

.lof-gallery-arrow:hover,
.lof-gallery-arrow:focus-visible {
    background: #d5a02a;
    color: #fff;
    box-shadow: 0 7px 18px rgba(99, 70, 9, 0.25);
    transform: translateY(-50%) scale(1.05);
    outline: none;
}

.lof-gallery-arrow:active {
    transform: translateY(-50%) scale(0.98);
}

.lof-gallery-arrow::after {
    display: none;
}

.lof-arrow-prev { left: -1px; }
.lof-arrow-next { right: 8px; }

.lof-video-trigger {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 88px;
    height: 88px;
    border: none;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.82);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
    z-index: 2;
    cursor: pointer;
    transition: background-color 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
}

.lof-video-trigger svg {
    width: 35px;
    height: 35px;
    margin-left: 7px;
    transition: transform 0.25s ease;
}

.lof-video-trigger:hover,
.lof-video-trigger:focus-visible {
    background: rgba(255, 255, 255, 0.95);
    transform: translate(-50%, -50%) scale(1.06);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.16);
    outline: none;
}

.lof-video-trigger:hover svg,
.lof-video-trigger:focus-visible svg {
    transform: scale(1.08);
}

.lof-thumbnails-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0,1fr));
    gap: 14px;
}

.lof-thumb-box {
    height: 92px;
    border-radius: 0;
    overflow: hidden;
    border: 2px solid transparent;
    cursor: pointer;
    transition: all 0.2s ease;
    background: #ebebeb;
}

.lof-thumb-box.active,
.lof-thumb-box:hover {
    border-color: #d4a548;
    box-shadow: 0 4px 12px rgba(85, 72, 35, 0.1);
}

.lof-thumb-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* Product Info Right */
.lof-details-wrapper {
    min-width: 0;
    padding-top: 0;
    height: 513px;
    display: flex;
    flex-direction: column;
}

.lof-category-pill {
    display: inline-block;
    width: max-content;
    max-width: 100%;
    white-space: nowrap;
    background: #e9edf2;
    color: #092153;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.06em;
    padding: 6px 15px;
    border-radius: 10px;
    text-transform: uppercase;
    margin-bottom: 18px;
    line-height: 1;
}

.lof-product-title {
    margin: 0;
    color: #1c1c1c;
    font-size: 32px;
    line-height: 1.08;
    letter-spacing: -0.035em;
    font-weight: 700;
    margin-bottom: 12px;
}

.lof-rating-row {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 18px;
}

.lof-stars {
    letter-spacing: 0.18em;
    font-size: 15px;
    color: #f4b400;
}

.lof-reviews-count {
    color: #5a5a5a;
    font-size: 14px;
    font-weight: 500;
}

.lof-product-description {
    margin: 0 0 25px;
    color: #8a8a8a;
    font-size: 14px;
    line-height: 1.18;
    max-width: 720px;
}

.lof-meta-info {
    color: #555;
    font-size: 15px;
    line-height: 1.8;
    margin-bottom: 28px;
}

.lof-meta-info strong {
    font-weight: 700;
    color: #292929;
}

.lof-meta-info .lof-meta-highlight {
    color: #1d1d1d;
    font-weight: 600;
}

.lof-variants-section {
    margin-top: 0;
    margin-top: auto;
    margin-bottom: 16px;
}

.lof-variant-buttons {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: nowrap;
}

.lof-variant-btn {
    width: 68px;
    min-width: 68px;
    height: 48px;
    padding: 0 12px;
    border: 1px solid #d7d9dc;
    background: #fff;
    color: #1f2937;
    font-size: 14px;
    font-weight: 600;
    border-radius: 10px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition: color 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease, transform 0.25s ease;
}

.lof-variant-btn::before {
    content: "";
    position: absolute;
    inset: 0;
    background: #0c264d;
    transform: translateY(102%);
    transition: transform 0.25s ease;
    z-index: 0;
}

.lof-variant-btn:hover,
.lof-variant-btn:focus-visible {
    color: #fff;
    border-color: #0c264d;
    box-shadow: 0 8px 18px rgba(12, 38, 77, 0.2);
    transform: translateY(-3px);
    outline: none;
}

.lof-variant-btn:hover::before,
.lof-variant-btn:focus-visible::before {
    transform: translateY(0);
}

.lof-variant-btn {
    isolation: isolate;
}

.lof-variant-btn span {
    position: relative;
    z-index: 1;
}

.lof-variant-btn.active,
.lof-variant-btn.active:hover {
    background: #0c264d;
    color: #fff;
    border-color: #0c264d;
    box-shadow: 0 8px 18px rgba(12, 38, 77, 0.18);
    transform: none;
}

.lof-variant-btn.active::before {
    transform: translateY(0);
}

.lof-actions-row {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: nowrap;
    width: 100%;
}

.lof-quantity-picker {
    height: 50px;
    width: 174px;
    min-width: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    border: 1px solid #d8d8d8;
    border-radius: 14px;
    background: #fff;
}

.lof-qty-btn {
    width: 48px;
    height: 100%;
    border: 0;
    background: transparent;
    color: #303030;
    font-size: 25px;
    cursor: pointer;
}

.lof-qty-input {
    width: 38px;
    border: 0;
    outline: 0;
    background: transparent;
    color: #171717;
    text-align: center;
    font-size: 22px;
}

.lof-btn-cart,
.lof-btn-buy {
    height: 50px;
    border: 0;
    border-radius: 10px;
    color: #fff;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.2s ease, color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
}

.lof-btn-cart {
    width: 174px;
    min-width: 0;
    background: #9d9d9d;
}

.lof-btn-buy {
    width: 140px;
    min-width: 0;
    background: #000;
}

.lof-btn-cart:hover,
.lof-btn-cart:focus-visible,
.lof-btn-buy:hover,
.lof-btn-buy:focus-visible {
    background: #d5a02a;
    color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 8px 18px rgba(155, 111, 22, 0.28);
    outline: none;
}

.lof-btn-cart:hover,
.lof-btn-buy:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.16);
}

.lof-btn-wishlist {
    width: 50px;
    height: 50px;
    flex: 0 0 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #d8d8d8;
    border-radius: 10px;
    background: #fff;
    color: #303030;
    cursor: pointer;
    transition: background-color 0.2s ease, border-color 0.2s ease, color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
}

.lof-btn-wishlist:hover,
.lof-btn-wishlist:focus-visible {
    background: #fde7e7;
    border-color: #fde7e7;
    color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 8px 18px rgba(255, 51, 68, 0.16);
    outline: none;
}

.lof-btn-wishlist.is-selected,
.lof-btn-wishlist.is-selected:hover,
.lof-btn-wishlist.is-selected:focus-visible {
    background: #fde7e7;
    border-color: #fde7e7;
    color: #ff3344;
}

.lof-btn-wishlist.is-selected {
    transform: none;
}

.lof-btn-wishlist svg {
    width: 27px;
    height: 27px;
    stroke: currentColor;
}

@media (max-width: 900px) {
    .lof-product-main-section {
        padding: 42px 0 56px;
    }

    .lof-product-container {
        grid-template-columns: 1fr;
        padding: 0 20px;
    }

    .lof-main-image-box {
        aspect-ratio: 1.42 / 1;
    }

    .lof-gallery-wrapper {
        height: auto;
    }

    .lof-product-title {
        font-size: 2.6rem;
    }

    .lof-details-wrapper {
        height: auto;
    }

    .lof-variants-section {
        margin-top: 24px;
    }

    .lof-actions-row {
        flex-wrap: wrap;
    }
}

@media (min-width: 901px) and (max-width: 1240px) {
    .lof-product-container {
        width: calc(100% - 170px);
        padding: 0;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        gap: 54px;
    }

    .lof-actions-row {
        gap: 8px;
    }

    .lof-quantity-picker {
        width: 84px;
    }

    .lof-btn-cart {
        width: 104px;
    }

    .lof-btn-buy {
        width: 88px;
    }
}

@media (max-width: 600px) {
    .lof-product-main-section {
        padding-top: 28px;
        padding-bottom: 44px;
    }

    .lof-product-container {
        padding: 0 16px;
        gap: 32px;
    }

    .lof-product-title {
        font-size: 2rem;
        line-height: 1.12;
    }

    .lof-main-image-box {
        aspect-ratio: 1.15 / 1;
    }

    .lof-thumbnails-grid {
        gap: 8px;
    }

    .lof-thumb-box {
        height: 70px;
    }

    .lof-actions-row {
        gap: 10px;
    }

    .lof-quantity-picker,
    .lof-btn-cart,
    .lof-btn-buy {
        width: 100%;
        min-width: 0;
    }

    .lof-btn-wishlist {
        margin-left: auto;
    }
}
</style>

<?php
$product = [
    'title'       => 'Lucky Refined Palm Olein',
    'category'    => 'COOKING OIL',
    'rating'      => 4.8,
    'reviews'     => 312,
    'sku'         => 'LOF-PO-1L-2026',
    'tags'        => 'Cooking Oil, Palm Olein, Cholesterol Free',
    'desc'        => 'Lucky Refined Palm Olein is a premium, cholesterol-free cooking oil refined using modern European technology for a light taste and a higher smoke point — perfect for everyday frying, deep-frying and cooking.',
    'sizes'       => ['1L', '5L', '10L', '20L'],
    'images'      => [
        'https://images.unsplash.com/photo-1589985270826-4b7bb135bc9d?auto=format&fit=crop&w=1000&q=80',
        'https://images.unsplash.com/photo-1474979266404-7eaacbcd87c5?auto=format&fit=crop&w=1000&q=80',
        'https://images.unsplash.com/photo-1526947425960-945c6e72858f?auto=format&fit=crop&w=1000&q=80',
        'https://images.unsplash.com/photo-1620706857370-e1b9770e8bb1?auto=format&fit=crop&w=1000&q=80'
    ]
];
?>

<div class="lof-product-main-section">
    <div class="lof-product-container">
        <div class="lof-gallery-wrapper">
            <div class="lof-main-image-box">
                <span class="lof-stock-badge">In Stock</span>
                <img id="lofMainProductImg" src="<?= $product['images'][0] ?>" alt="<?= $product['title'] ?>" class="lof-main-img">
                <button type="button" class="lof-gallery-arrow lof-arrow-prev" id="lofPrevImg" aria-label="Previous image"></button>
                <button type="button" class="lof-gallery-arrow lof-arrow-next" id="lofNextImg" aria-label="Next image"></button>
                <div class="lof-image-indicators" aria-label="Product image navigation">
                    <?php foreach ($product['images'] as $index => $imgUrl): ?>
                        <button type="button" class="lof-image-indicator <?= $index === 0 ? 'active' : '' ?>" data-index="<?= $index ?>" aria-label="Show product image <?= $index + 1 ?>"></button>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="lof-thumbnails-grid">
                <?php foreach ($product['images'] as $index => $imgUrl): ?>
                    <div class="lof-thumb-box <?= $index === 0 ? 'active' : '' ?>" data-index="<?= $index ?>" data-src="<?= $imgUrl ?>">
                        <img src="<?= $imgUrl ?>" alt="Product thumbnail <?= $index + 1 ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="lof-details-wrapper">
            <span class="lof-category-pill"><?= $product['category'] ?></span>
            <h1 class="lof-product-title"><?= $product['title'] ?></h1>

            <div class="lof-rating-row">
                <div class="lof-stars" aria-label="Rated 4.8 out of 5">★★★★★</div>
                <span class="lof-reviews-count"><?= $product['rating'] ?> (<?= $product['reviews'] ?> Reviews)</span>
            </div>

            <p class="lof-product-description"><?= $product['desc'] ?></p>

            <div class="lof-meta-info">
                <div><strong>SKU:</strong> <span class="lof-meta-highlight"><?= $product['sku'] ?></span></div>
                <div><strong>Tags:</strong> <?= $product['tags'] ?></div>
            </div>

            <div class="lof-variants-section">
                <div class="lof-variant-buttons">
                    <?php foreach ($product['sizes'] as $index => $size): ?>
                        <button type="button" class="lof-variant-btn <?= $index === 0 ? 'active' : '' ?>" data-size="<?= $size ?>"><span><?= $size ?></span></button>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="lof-actions-row">
                <div class="lof-quantity-picker">
                    <button type="button" class="lof-qty-btn" id="lofQtyMinus" aria-label="Decrease quantity">−</button>
                    <input type="text" id="lofQtyInput" class="lof-qty-input" value="1" readonly aria-label="Quantity">
                    <button type="button" class="lof-qty-btn" id="lofQtyPlus" aria-label="Increase quantity">+</button>
                </div>
                <button type="button" class="lof-btn-cart">Add To Cart</button>
                <button type="button" class="lof-btn-buy">Buy Now</button>
                <button type="button" class="lof-btn-wishlist" title="Add to Wishlist" aria-label="Add to wishlist" aria-pressed="false">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
    const mainImg = document.getElementById('lofMainProductImg');
    const thumbs = document.querySelectorAll('.lof-thumb-box');
    const prevBtn = document.getElementById('lofPrevImg');
    const nextBtn = document.getElementById('lofNextImg');
    const variantButtons = document.querySelectorAll('.lof-variant-btn');
    const indicators = document.querySelectorAll('.lof-image-indicator');
    const qtyInput = document.getElementById('lofQtyInput');
    const qtyMinus = document.getElementById('lofQtyMinus');
    const qtyPlus = document.getElementById('lofQtyPlus');
    const wishlistButton = document.querySelector('.lof-btn-wishlist');
    const imageBox = document.querySelector('.lof-main-image-box');
    const images = Array.from(thumbs).map((thumb) => thumb.getAttribute('data-src'));
    let activeIndex = 0;
    let autoplayTimer;

    function updateMainImage(index) {
        activeIndex = (index + images.length) % images.length;
        mainImg.src = images[activeIndex];

        thumbs.forEach((thumb, thumbIndex) => {
            thumb.classList.toggle('active', thumbIndex === activeIndex);
        });

        indicators.forEach((indicator, indicatorIndex) => {
            indicator.classList.toggle('active', indicatorIndex === activeIndex);
        });
    }

    thumbs.forEach((thumb) => {
        thumb.addEventListener('click', function () {
            updateMainImage(Number(this.getAttribute('data-index')));
        });
    });

    prevBtn.addEventListener('click', function () {
        updateMainImage(activeIndex - 1);
    });

    nextBtn.addEventListener('click', function () {
        updateMainImage(activeIndex + 1);
    });

    indicators.forEach((indicator) => {
        indicator.addEventListener('click', function () {
            updateMainImage(Number(this.getAttribute('data-index')));
        });
    });

    function startAutoplay() {
        clearInterval(autoplayTimer);
        autoplayTimer = setInterval(function () {
            updateMainImage(activeIndex + 1);
        }, 1000);
    }

    startAutoplay();

    imageBox.addEventListener('mouseenter', function () {
        imageBox.classList.add('is-zoomed');
        clearInterval(autoplayTimer);
    });

    imageBox.addEventListener('mousemove', function (event) {
        const bounds = imageBox.getBoundingClientRect();
        const x = ((event.clientX - bounds.left) / bounds.width) * 100;
        const y = ((event.clientY - bounds.top) / bounds.height) * 100;
        mainImg.style.transformOrigin = `${x}% ${y}%`;
    });

    imageBox.addEventListener('mouseleave', function () {
        imageBox.classList.remove('is-zoomed');
        mainImg.style.transformOrigin = 'center center';
        startAutoplay();
    });

    qtyMinus.addEventListener('click', function () {
        const currentValue = parseInt(qtyInput.value, 10);
        if (currentValue > 1) {
            qtyInput.value = currentValue - 1;
        }
    });

    qtyPlus.addEventListener('click', function () {
        qtyInput.value = parseInt(qtyInput.value, 10) + 1;
    });

    wishlistButton.addEventListener('click', function () {
        const selected = wishlistButton.classList.toggle('is-selected');
        wishlistButton.setAttribute('aria-pressed', String(selected));
        wishlistButton.setAttribute('aria-label', selected ? 'Remove from wishlist' : 'Add to wishlist');
        wishlistButton.setAttribute('title', selected ? 'Remove from Wishlist' : 'Add to Wishlist');
    });

    variantButtons.forEach((button) => {
        button.addEventListener('click', function () {
            variantButtons.forEach((item) => item.classList.remove('active'));
            this.classList.add('active');
        });
    });
})();
</script>
