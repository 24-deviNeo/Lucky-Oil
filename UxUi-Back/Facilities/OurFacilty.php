<?php include_once __DIR__ . '/../Variable/Facilities/OurFacility.php'; ?>

<style>
/* =========================================================
   LUCKY OIL - MANUFACTURING EXCELLENCE & FACILITY CTA
   ========================================================= */

.lof-facility-excellence {
    width: 100%;
    margin: 0 0 60px;
    background: #ffffff;
}

.lof-facility-excellence-frame {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 0;
    box-sizing: border-box;
}

.lof-facility-excellence-heading {
    margin: 0;
    padding: 42px 24px 0;
    color: #272727;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 32px;
    font-weight: 500;
    line-height: 50px;
    text-align: center;
    text-transform: uppercase;
}

.lof-facility-excellence-heading .txt-gold {
    color: #BF800D;
}

.lof-facility-excellence-stats {
    display: grid;
    grid-template-columns: repeat(6, minmax(0, 1fr));
    gap: 16px;
    width: min(1136px, calc(100% - 48px));
    margin: 34px auto 36px;
}

.lof-facility-excellence-stat {
    min-width: 0;
    padding: 0 12px;
    text-align: center;
}

.lof-facility-excellence-stat-value {
    display: block;
    color: #011748;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 20px;
    font-weight: 700;
    line-height: 29px;
    white-space: nowrap;
}

.lof-facility-excellence-stat-label {
    display: block;
    margin-top: 8px;
    color: #939393;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: 400;
    line-height: 15px;
}

.lof-facility-visit {
    position: relative;
    height: 650px;
    overflow: hidden;
    border-radius: 0;
    background: #061d52;
}

.lof-facility-visit-image {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
}

.lof-facility-visit:hover .lof-facility-visit-image {
    transform: scale(1.04);
}

@media (hover: none) and (pointer: coarse) {
    .lof-facility-visit:active .lof-facility-visit-image {
        transform: scale(1.04);
    }
}

.lof-facility-visit-overlay {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: flex-end;
    padding: 0 70px 112px;
    box-sizing: border-box;
    background: linear-gradient(
        180deg,
        rgba(254, 254, 254, 0.98) 0%,
        rgba(254, 254, 254, 0.82) 18%,
        rgba(254, 254, 254, 0.04) 48%,
        rgba(254, 254, 254, 0) 62%
    ), linear-gradient(
        90deg,
        rgba(0, 22, 71, 0.74) 42%,
        rgba(0, 22, 71, 0.36) 66%,
        rgba(0, 22, 71, 0.04) 100%
    );
}

.lof-facility-visit-content {
    max-width: 500px;
}

.lof-facility-visit-title {
    margin: 0 0 18px;
    color: #BF800D;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 38px;
    font-weight: 700;
    line-height: 50px;
    text-transform: uppercase;
}

.lof-facility-visit-description {
    max-width: 420px;
    margin: 0;
    color: #ffffff;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 15px;
    font-weight: 600;
    line-height: 20px;
}

.lof-facility-visit-action {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 136px;
    min-height: 34px;
    margin-top: 22px;
    padding: 8px 18px;
    border: 0;
    border-radius: 4px;
    background: #011748;
    color: #ffffff;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: 700;
    line-height: 14px;
    text-decoration: none;
    text-transform: uppercase;
}

@media (max-width: 1024px) {
    .lof-facility-excellence-stats {
        grid-template-columns: repeat(3, minmax(0, 1fr));
        row-gap: 24px;
    }

    .lof-facility-visit {
        height: 520px;
    }

    .lof-facility-visit-overlay {
        padding: 0 40px 64px;
    }
}

@media (max-width: 640px) {
    .lof-facility-excellence {
        margin-bottom: 32px;
    }

    .lof-facility-excellence-heading {
        padding-top: 28px;
        font-size: 28px;
        line-height: 36px;
    }

    .lof-facility-excellence-stats {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        width: calc(100% - 32px);
        margin: 24px auto;
    }

    .lof-facility-visit {
        height: 380px;
    }

    .lof-facility-visit-overlay {
        padding: 0 24px 32px;
        background: linear-gradient(
            180deg,
            rgba(254, 254, 254, 0.98) 0%,
            rgba(254, 254, 254, 0.5) 22%,
            rgba(254, 254, 254, 0) 48%
        ), linear-gradient(
            0deg,
            rgba(0, 22, 71, 0.82) 0%,
            rgba(0, 22, 71, 0.18) 72%
        );
    }

    .lof-facility-visit-title {
        margin-bottom: 16px;
        font-size: 32px;
        line-height: 38px;
    }

    .lof-facility-visit-description {
        font-size: 13px;
        line-height: 18px;
    }

    .lof-facility-excellence-heading {
        padding-left: 16px;
        padding-right: 16px;
    }

    .lof-facility-excellence-stat {
        padding: 0 6px;
    }

    .lof-facility-excellence-stat-value {
        font-size: 17px;
        white-space: normal;
    }
}
</style>

<section class="lof-facility-excellence" aria-labelledby="lof-facility-excellence-title">
    <div class="lof-facility-excellence-frame">
        <h2 id="lof-facility-excellence-title" class="lof-facility-excellence-heading">
            <?php foreach ($facility_excellence['heading'] as $heading_index => $heading_part): ?>
                <?php if ($heading_index === 2): ?><br><?php endif; ?>
                <?php if (isset($heading_part['class'])): ?>
                    <span class="<?php echo htmlspecialchars($heading_part['class'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($heading_part['text'], ENT_QUOTES, 'UTF-8'); ?></span>
                <?php else: ?>
                    <?php echo htmlspecialchars($heading_part['text'], ENT_QUOTES, 'UTF-8'); ?>
                <?php endif; ?>
                <?php if ($heading_index < 3 && $heading_index !== 1): ?> <?php endif; ?>
            <?php endforeach; ?>
        </h2>

        <div class="lof-facility-excellence-stats">
            <?php foreach ($facility_excellence['metrics'] as $metric): ?>
                <div class="lof-facility-excellence-stat">
                    <span class="lof-facility-excellence-stat-value">
                        <?php echo htmlspecialchars($metric['value'], ENT_QUOTES, 'UTF-8'); ?>
                    </span>
                    <span class="lof-facility-excellence-stat-label">
                        <?php echo htmlspecialchars($metric['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </span>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="lof-facility-visit">
            <img
                src="<?php echo htmlspecialchars($facility_excellence['visit']['image'], ENT_QUOTES, 'UTF-8'); ?>"
                alt="<?php echo htmlspecialchars($facility_excellence['visit']['image_alt'], ENT_QUOTES, 'UTF-8'); ?>"
                class="lof-facility-visit-image"
            >
            <div class="lof-facility-visit-overlay">
                <div class="lof-facility-visit-content">
                    <h3 class="lof-facility-visit-title">
                        <?php echo htmlspecialchars($facility_excellence['visit']['title'], ENT_QUOTES, 'UTF-8'); ?>
                    </h3>
                    <p class="lof-facility-visit-description">
                        <?php echo htmlspecialchars($facility_excellence['visit']['description'], ENT_QUOTES, 'UTF-8'); ?>
                    </p>
                    <a href="<?php echo htmlspecialchars($facility_excellence['visit']['href'], ENT_QUOTES, 'UTF-8'); ?>" class="lof-facility-visit-action">
                        <?php echo htmlspecialchars($facility_excellence['visit']['action'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
