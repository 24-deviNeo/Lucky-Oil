<?php include_once __DIR__ . '/../Variable/GetAquotePage/hero.php'; ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

    .lof-custom-section {
        width: 100%;
        background: linear-gradient(180deg, #f6f5f2 0%, #f2f2f2 100%);
        padding: 30px 0 18px;
    }

    .lof-custom-frame {
        width: min(1200px, 92vw);
        margin: 0 auto;
    }

    .lof-hero-shell {
        background: rgba(255, 255, 255, 0.96);
        border: 1px solid rgba(15, 23, 42, 0.06);
        border-radius: 22px;
        box-shadow: 0 18px 55px rgba(15, 23, 42, 0.07);
        padding: 18px 22px 26px;
    }

    .lof-hero-content {
        padding-top: 0;
    }

    .lof-title-wrap {
        max-width: 870px;
        margin: 0 auto 24px;
        text-align: center;
    }

    .lof-title-wrap h1 {
        margin: 0;
        font-size: clamp(26px, 3vw, 52px);
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -0.04em;
        text-transform: uppercase;
        color: #1f2937;
    }

    .lof-title-wrap h1 span {
        color: #c58b19;
    }

    .lof-hero-card {
        width: min(860px, 100%);
        margin: 0 auto;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 18px 40px rgba(15, 23, 42, 0.12);
        border: 1px solid rgba(15, 23, 42, 0.06);
        background: #fff;
    }

    .lof-hero-image {
        position: relative;
        min-height: 440px;
        display: flex;
        align-items: flex-end;
        background-size: cover;
        background-position: center;
        padding: 28px 30px 34px;
        overflow: hidden;
    }

    .lof-hero-image::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(10, 19, 33, 0.18) 0%, rgba(10, 19, 33, 0.62) 100%);
    }

    .lof-hero-overlay {
        position: relative;
        z-index: 1;
        max-width: 430px;
        color: #fff;
    }

    .lof-hero-overlay h3 {
        margin: 0 0 12px;
        font-size: clamp(26px, 2.1vw, 42px);
        line-height: 1.1;
        font-weight: 700;
        letter-spacing: -0.03em;
    }

    .lof-hero-overlay p {
        margin: 0;
        font-size: 13px;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.9);
    }

    .lof-btn-contact {
        position: absolute;
        right: 28px;
        bottom: 26px;
        z-index: 1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.96);
        color: #1f2937;
        text-decoration: none;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        border-radius: 9px;
        padding: 12px 18px;
        box-shadow: 0 12px 24px rgba(15, 23, 42, 0.15);
        transition: background-color 0.2s ease, color 0.2s ease, transform 0.2s ease;
    }

    .lof-btn-contact:hover,
    .lof-btn-contact:focus-visible {
        background: #c58b19;
        color: #ffffff;
        transform: translateY(-2px);
    }

    @media (max-width: 860px) {
        .lof-hero-image {
            min-height: 360px;
            padding: 22px 20px 26px;
        }

        .lof-btn-contact {
            position: static;
            margin-top: 18px;
            margin-left: auto;
            display: inline-flex;
        }
    }

    @media (max-width: 560px) {
        .lof-hero-shell {
            padding: 16px 14px 20px;
        }

        .lof-hero-image {
            min-height: 310px;
        }

        .lof-hero-overlay h3 {
            font-size: 24px;
        }
    }
</style>

<section class="lof-custom-section">
    <div class="lof-custom-frame">
        <div class="lof-hero-shell">
            <div class="lof-hero-content">
                <div class="lof-title-wrap">
                    <h1>
                        <?php echo htmlspecialchars($quote_hero['title']['dark'], ENT_QUOTES, 'UTF-8'); ?>
                        <span><?php echo htmlspecialchars($quote_hero['title']['highlight'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <?php echo htmlspecialchars($quote_hero['title']['suffix'], ENT_QUOTES, 'UTF-8'); ?>
                    </h1>
                </div>

                <div class="lof-hero-card">
                    <div class="lof-hero-image" style="background-image: url('<?php echo htmlspecialchars($quote_hero['image'], ENT_QUOTES, 'UTF-8'); ?>');">
                        <div class="lof-hero-overlay">
                            <h3>
                                <?php echo htmlspecialchars($quote_hero['overlay_title'][0], ENT_QUOTES, 'UTF-8'); ?><br>
                                <?php echo htmlspecialchars($quote_hero['overlay_title'][1], ENT_QUOTES, 'UTF-8'); ?>
                            </h3>
                            <p><?php echo htmlspecialchars($quote_hero['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                        <a href="<?php echo htmlspecialchars($quote_hero['action']['href'], ENT_QUOTES, 'UTF-8'); ?>" class="lof-btn-contact"><?php echo htmlspecialchars($quote_hero['action']['label'], ENT_QUOTES, 'UTF-8'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
