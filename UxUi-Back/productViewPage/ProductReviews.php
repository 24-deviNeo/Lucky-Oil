<?php include_once __DIR__ . '/../Variable/productViewPage/ProductReviews.php'; ?>

<style>
.lof-reviews-section {
    width: 100%;
    background: #fff;
    padding: 0 0 78px;
    font-family: Arial, Helvetica, sans-serif;
}

.lof-reviews-container {
    width: min(1295px, calc(100% - 136px));
    max-width: 1295px;
    margin: 0 auto;
}

.lof-reviews-heading {
    margin: 0 0 22px;
    color: #929292;
    font-size: 18px;
    line-height: 1;
    font-weight: 700;
}

.lof-reviews-grid {
    display: flex;
    flex-direction: column;
    gap: 12px;
    overflow: hidden;
}

.lof-reviews-row {
    display: flex;
    width: max-content;
    gap: 16px;
    animation: lofReviewsRightToLeft 34s linear infinite;
}

.lof-reviews-row--reverse {
    animation-name: lofReviewsLeftToRight;
}

.lof-reviews-row:hover {
    animation-play-state: paused;
}

@keyframes lofReviewsRightToLeft {
    from { transform: translateX(0); }
    to { transform: translateX(calc(-50% - 8px)); }
}

@keyframes lofReviewsLeftToRight {
    from { transform: translateX(calc(-50% - 8px)); }
    to { transform: translateX(0); }
}

.lof-review-card {
    width: 402px;
    min-height: 108px;
    padding: 16px 20px 12px;
    background: #f7f7f7;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.25s ease, box-shadow 0.25s ease, background-color 0.25s ease;
}

.lof-review-card:hover {
    background: #fff;
    transform: translateY(-6px);
    box-shadow: 0 12px 24px rgba(6, 29, 82, 0.12);
}

.lof-review-title {
    margin: 0 0 8px;
    color: #8c8c8c;
    font-size: 12px;
    line-height: 1.2;
    font-weight: 700;
}

.lof-review-quote {
    margin: 0;
    color: #a0a0a0;
    font-size: 10px;
    line-height: 1.35;
}

.lof-reviewer-info {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: 12px;
}

.lof-reviewer-avatar {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    object-fit: cover;
}

.lof-reviewer-name {
    color: #929292;
    font-size: 10px;
    line-height: 1.2;
}

.lof-reviewer-stars {
    margin-top: 2px;
    color: #eab308;
    font-size: 9px;
    letter-spacing: 0.08em;
}

.lof-reviews-more {
    display: flex;
    justify-content: flex-end;
    margin-top: 18px;
}

.lof-reviews-more a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 0;
    color: #8d8d8d;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.2s ease, gap 0.2s ease, transform 0.2s ease;
}

.lof-reviews-more a:hover {
    color: #bf800d;
    gap: 13px;
    transform: translateX(-3px);
}

.lof-reviews-modal {
    position: fixed;
    inset: 0;
    z-index: 1000;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 24px;
    background: rgba(9, 20, 42, 0.58);
}

.lof-reviews-modal.is-open {
    display: flex;
}

.lof-reviews-modal-dialog {
    position: relative;
    width: min(760px, 100%);
    max-height: min(720px, 90vh);
    overflow: hidden;
    padding: 28px;
    border-radius: 14px;
    background: #fff;
    box-shadow: 0 24px 70px rgba(0, 0, 0, 0.25);
}

.lof-reviews-modal-title {
    margin: 0 42px 20px 0;
    color: #061d52;
    font-size: 24px;
}

.lof-reviews-modal-list {
    max-height: calc(min(720px, 90vh) - 100px);
    overflow-y: auto;
    display: grid;
    gap: 12px;
    padding-right: 8px;
}

.lof-reviews-modal-list .lof-review-card {
    width: 100%;
    min-height: 130px;
}

.lof-reviews-modal-close {
    position: absolute;
    top: 18px;
    right: 20px;
    width: 34px;
    height: 34px;
    border: 0;
    border-radius: 50%;
    background: #f1f3f6;
    color: #061d52;
    font-size: 24px;
    line-height: 1;
    cursor: pointer;
    transition: background-color 0.2s ease, transform 0.2s ease;
}

.lof-reviews-modal-close:hover {
    background: #fde7e7;
    color: #d7283c;
    transform: rotate(90deg);
}

@media (max-width: 900px) {
    .lof-reviews-section {
        padding: 0 20px 56px;
    }

    .lof-reviews-container {
        width: 100%;
    }

    .lof-review-card {
        width: 340px;
    }
}

@media (max-width: 600px) {
    .lof-reviews-grid {
        gap: 10px;
    }

    .lof-review-card {
        width: 290px;
    }
}
</style>



<section class="lof-reviews-section" aria-labelledby="lofReviewsHeading">
    <div class="lof-reviews-container">
        <h2 class="lof-reviews-heading" id="lofReviewsHeading">Product Reviews</h2>

        <div class="lof-reviews-grid">
            <?php foreach (array_chunk($reviews, 3) as $rowIndex => $rowReviews): ?>
                <div class="lof-reviews-row <?= $rowIndex === 1 ? 'lof-reviews-row--reverse' : '' ?>">
                    <?php foreach (array_merge($rowReviews, $rowReviews) as $review): ?>
                        <article class="lof-review-card">
                            <div>
                                <h3 class="lof-review-title"><?= $review['title'] ?></h3>
                                <p class="lof-review-quote">“<?= $review['quote'] ?>”</p>
                            </div>
                            <div class="lof-reviewer-info">
                                <img class="lof-reviewer-avatar" src="<?= $review['avatar'] ?>" alt="<?= $review['name'] ?>">
                                <div>
                                    <div class="lof-reviewer-name"><?= $review['name'] ?></div>
                                    <div class="lof-reviewer-stars" aria-label="5 out of 5 stars">★★★★★</div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="lof-reviews-more">
            <a href="#all-reviews" id="lofShowAllReviews">Show All Reviews <span aria-hidden="true">→</span></a>
        </div>
    </div>
</section>

<div class="lof-reviews-modal" id="lofReviewsModal" aria-hidden="true">
    <div class="lof-reviews-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="lofReviewsModalTitle">
        <button type="button" class="lof-reviews-modal-close" id="lofCloseReviews" aria-label="Close reviews">&times;</button>
        <h2 class="lof-reviews-modal-title" id="lofReviewsModalTitle">All Product Reviews</h2>
        <div class="lof-reviews-modal-list">
            <?php foreach ($reviews as $review): ?>
                <article class="lof-review-card">
                    <div>
                        <h3 class="lof-review-title"><?= $review['title'] ?></h3>
                        <p class="lof-review-quote">“<?= $review['quote'] ?>”</p>
                    </div>
                    <div class="lof-reviewer-info">
                        <img class="lof-reviewer-avatar" src="<?= $review['avatar'] ?>" alt="<?= $review['name'] ?>">
                        <div>
                            <div class="lof-reviewer-name"><?= $review['name'] ?></div>
                            <div class="lof-reviewer-stars">★★★★★</div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script>
(function () {
    const modal = document.getElementById('lofReviewsModal');
    const showButton = document.getElementById('lofShowAllReviews');
    const closeButton = document.getElementById('lofCloseReviews');

    function closeReviews() {
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    showButton.addEventListener('click', function (event) {
        event.preventDefault();
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        closeButton.focus();
    });

    closeButton.addEventListener('click', closeReviews);

    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeReviews();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && modal.classList.contains('is-open')) {
            closeReviews();
        }
    });
})();
</script>