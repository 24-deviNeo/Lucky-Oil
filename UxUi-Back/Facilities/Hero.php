<?php include_once __DIR__ . '/../Variable/Facilities/Hero.php'; ?>

<style>
/* =========================================================
   LUCKY OIL - FACILITIES HERO SECTION
   Exact 1:1 match to Figma design specification
   ========================================================= */

.lof-fac-hero-section {
    width: 100%;
    background-color: #ffffff;
    margin-top: 50px;
    margin-bottom: 60px;
    display: flex;
    justify-content: center;
}

/* Outer frame matching layout 1250px max width */
.lof-fac-hero-frame {
    width: 100%;
    max-width: 1250px;
    margin: 0 auto;
    padding: 0 95px;
    display: flex;
    flex-direction: column;
    gap: 24px;
    box-sizing: border-box;
}

/* =========================================================
   HEADER ROW (ABOVE HERO IMAGE CARD)
   ========================================================= */
.lof-fac-hero-header-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    width: 100%;
    gap: 20px;
}

/* Main Title Typography matching exact Figma specs */
.lof-fac-hero-title {
    max-width: 1129px;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 48px;
    font-weight: 500;
    line-height: 50px;
    letter-spacing: 0px;
    text-transform: uppercase;
    margin: 0;
}

.lof-fac-hero-title .txt-gold {
    color: #BF800D;
}

.lof-fac-hero-title .txt-dark {
    color: #272727;
}

/* Manufacturing Facilities Badge (Exact Figma Specs: 257px width, 29px height, Momo Trust Sans 15px/18px, #0117481A bg) */
.lof-fac-hero-badge {
    width: 257px;
    height: 29px;
    padding: 5px 10px;
    gap: 10px;
    border-radius: 10px;
    background: rgba(1, 23, 72, 0.10); /* Figma #0117481A */
    box-sizing: border-box;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 15px;
    font-weight: 600;
    line-height: 18px;
    letter-spacing: 0px;
    text-transform: uppercase;
    color: #011748;
    white-space: nowrap;
    cursor: default;
}

.lof-fac-hero-viewport {
    position: relative;
    width: 100%;
    height: 580px;
    border-radius: 20px;
    overflow: hidden;
    background-color: #061d52;
    box-shadow: 0 12px 32px rgba(6, 29, 82, 0.1);
}

/* Background Hero Image with smooth hover scale */
.lof-fac-hero-bg {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
}

.lof-fac-hero-viewport:hover .lof-fac-hero-bg {
    transform: scale(1.03);
}

/* Content Overlay inside image card */
.lof-fac-hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        180deg, 
        rgba(0, 0, 0, 0.05) 0%, 
        rgba(0, 0, 0, 0.25) 40%, 
        rgba(0, 0, 0, 0.82) 100%
    );
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 36px 40px;
    gap: 20px;
    box-sizing: border-box;
}

/* Facility Description Paragraph (Exact Figma Specs: 549px width, Momo Trust Sans, 15px/18px) */
.lof-fac-hero-desc {
    width: 100%;
    max-width: 549px;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 15px;
    font-weight: 400;
    line-height: 18px;
    letter-spacing: 0px;
    color: #ffffff;
    margin: 0;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
}

/* Bottom Controls Row inside Image (Stats on Left, Buttons on Right) */
.lof-fac-hero-bottom-bar {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    width: 100%;
    gap: 20px;
    flex-wrap: wrap;
}

/* 4 Stat Boxes (Figma translucency levels) */
.lof-fac-hero-stats {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
}

.lof-fac-stat-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 121px;
    height: 80px;
    border-radius: 20px;
    border: 1px solid #686868;
    text-align: center;
    padding: 10px;
    box-sizing: border-box;
    cursor: pointer;
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
}

.lof-fac-stat-card.card-dark {
    background: #0F0F0F;
    border: 1px solid #686868;
    color: #ffffff;
}

.lof-fac-stat-card.card-grey-dark {
    background: #5C5C5C;
    border: 1px solid #686868;
    color: #ffffff;
}

.lof-fac-stat-card.card-grey-light {
    background: #BFBFBF;
    border: 1px solid #686868;
    color: #151515;
}

.lof-fac-stat-card.card-white {
    background: #f5f5f5;
    border: 1px solid #686868;
    color: #151515;
}

.lof-fac-stat-card:hover {
    transform: translateY(-4px) scale(1.04);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    border-color: #BF800D;
}

.lof-fac-stat-val {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-weight: 600;
    font-size: 20px;
    line-height: 18px;
    letter-spacing: 0px;
    vertical-align: middle;
}

.lof-fac-stat-lbl {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-weight: 600;
    font-size: 7.46px;
    line-height: 10px;
    letter-spacing: 0px;
    text-align: center;
    text-transform: uppercase;
    margin-top: 5px;
}

/* Right Action Buttons Cluster */
.lof-fac-hero-actions {
    display: flex;
    align-items: center;
    gap: 12px;
}

/* Button 1: TAKE THE VIRTUAL TOUR (Exact Figma Typography) */
.lof-fac-tour-btn {
    width: 228px;
    height: 42px;
    padding: 10px;
    gap: 10px;
    border-radius: 10px;
    background: #FFFFFF;
    border: 1.5px solid #FFFFFF;
    box-sizing: border-box;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 15px;
    font-weight: 400;
    line-height: 18px;
    letter-spacing: 0px;
    text-transform: uppercase;
    color: #151515;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.15);
}

.lof-fac-tour-btn:hover {
    background: #BF800D;
    border-color: #BF800D;
    color: #FFFFFF;
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 8px 22px rgba(191, 128, 13, 0.45);
}

/* Button 2: CONTACT US */
.lof-fac-contact-btn {
    width: 139px;
    height: 38px;
    padding: 10px 20px;
    gap: 10px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0);
    border: 1px solid #FFFFFF;
    box-sizing: border-box;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 15px;
    font-weight: 500;
    line-height: 18px;
    letter-spacing: 0px;
    text-transform: uppercase;
    color: #FFFFFF;
    text-decoration: none;
    cursor: pointer;
    transition: all 300ms cubic-bezier(0, 0, 0.2, 1);
}

.lof-fac-contact-btn:hover {
    background: #FFFFFF;
    border-color: #FFFFFF;
    color: #151515;
    transform: translateY(-3px);
    box-shadow: 0 6px 18px rgba(255, 255, 255, 0.25);
}

@media (hover: none) and (pointer: coarse) {
    .lof-fac-hero-viewport:active .lof-fac-hero-bg {
        transform: scale(1.03);
    }

    .lof-fac-stat-card:active {
        transform: translateY(-4px) scale(1.04);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        border-color: #BF800D;
    }

    .lof-fac-tour-btn:active {
        background: #BF800D;
        border-color: #BF800D;
        color: #FFFFFF;
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 8px 22px rgba(191, 128, 13, 0.45);
    }

    .lof-fac-contact-btn:active {
        background: #FFFFFF;
        border-color: #FFFFFF;
        color: #151515;
        transform: translateY(-3px);
    }
}

/* Responsive Breakpoints */
@media (max-width: 1280px) {
    .lof-fac-hero-frame {
        padding: 0 40px;
    }
    .lof-fac-hero-viewport {
        height: 520px;
    }
}

@media (max-width: 900px) {
    .lof-fac-hero-section {
        margin-top: 30px;
        margin-bottom: 30px;
    }
    .lof-fac-hero-title {
        font-size: 28px;
    }
    .lof-fac-hero-viewport {
        height: 460px;
    }
    .lof-fac-hero-overlay {
        padding: 24px;
    }
}

@media (max-width: 640px) {
    .lof-fac-hero-frame {
        padding: 0 16px;
    }

    .lof-fac-hero-title {
        font-size: clamp(22px, 7vw, 30px);
        line-height: 1.15;
    }
    .lof-fac-hero-badge {
        width: auto;
        max-width: 100%;
        height: auto;
        min-height: 29px;
        white-space: normal;
        text-align: center;
        font-size: 12px;
    }
    .lof-fac-hero-header-row {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
    }
    .lof-fac-hero-viewport {
        height: auto;
        min-height: 560px;
    }
    .lof-fac-hero-bottom-bar {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
    }
    .lof-fac-hero-overlay {
        padding: 22px 16px 18px;
        gap: 18px;
    }
    .lof-fac-hero-desc {
        max-width: none;
        font-size: 13px;
        line-height: 18px;
    }
    .lof-fac-hero-stats {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px;
    }
    .lof-fac-stat-card {
        width: 100%;
        height: 70px;
        border-radius: 14px;
    }
    .lof-fac-stat-val {
        font-size: 17px;
    }
    .lof-fac-hero-actions {
        gap: 10px;
    }
    .lof-fac-hero-actions {
        width: 100%;
        flex-direction: column;
    }
    .lof-fac-tour-btn,
    .lof-fac-contact-btn {
        width: 100%;
    }
}
</style>

<!-- FACILITIES HERO SECTION -->
<section class="lof-fac-hero-section">
    <div class="lof-fac-hero-frame">
        
        <!-- Header Row Above Image Card -->
        <div class="lof-fac-hero-header-row">
            <h1 class="lof-fac-hero-title">
                <?php foreach ($facility_hero['title'] as $title_index => $title_part): ?>
                    <?php if ($title_index === 3): ?><br><?php endif; ?>
                    <span class="<?php echo htmlspecialchars($title_part['class'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($title_part['text'], ENT_QUOTES, 'UTF-8'); ?></span><?php if ($title_index < 4 && $title_index !== 2): ?> <?php endif; ?>
                <?php endforeach; ?>
            </h1>
            
            <span class="lof-fac-hero-badge"><?php echo htmlspecialchars($facility_hero['badge'], ENT_QUOTES, 'UTF-8'); ?></span>
        </div>

        <!-- Hero Image Card -->
        <div class="lof-fac-hero-viewport">
            <img 
                src="<?php echo htmlspecialchars($facility_hero['image'], ENT_QUOTES, 'UTF-8'); ?>" 
                alt="<?php echo htmlspecialchars($facility_hero['image_alt'], ENT_QUOTES, 'UTF-8'); ?>" 
                class="lof-fac-hero-bg"
            >
            
            <div class="lof-fac-hero-overlay">
                <!-- Facility Description Text -->
                <p class="lof-fac-hero-desc"><?php echo htmlspecialchars($facility_hero['description'], ENT_QUOTES, 'UTF-8'); ?></p>

                <!-- Bottom Controls: 4 Stat Pills + Action Buttons -->
                <div class="lof-fac-hero-bottom-bar">
                    <div class="lof-fac-hero-stats">
                        <?php foreach ($facility_hero['stats'] as $stat): ?>
                            <div class="lof-fac-stat-card <?php echo htmlspecialchars($stat['class'], ENT_QUOTES, 'UTF-8'); ?>">
                                <span class="lof-fac-stat-val"><?php echo htmlspecialchars($stat['value'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <span class="lof-fac-stat-lbl"><?php echo implode('<br>', array_map(static function ($line) { return htmlspecialchars($line, ENT_QUOTES, 'UTF-8'); }, $stat['label'])); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Right Action Buttons -->
                    <div class="lof-fac-hero-actions">
                        <?php foreach ($facility_hero['actions'] as $action): ?>
                            <a href="<?php echo htmlspecialchars($action['href'], ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo htmlspecialchars($action['class'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($action['label'], ENT_QUOTES, 'UTF-8'); ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
