<style>

.lof-ad-section {
    width: 100%;
    background-color: #ffffff;
    margin-top: 62px;  
    margin-bottom: 0px;
    display: flex;
    justify-content: center;
}

/* Outer frame */
.lof-ad-frame {
    width: 100%;
    max-width: 1250px;
    height: auto;
    margin: 0 auto;
    padding: 0 95px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    gap: 14px;
    box-sizing: border-box;
}

/* Slide Viewport */
.lof-ad-carousel-viewport {
    position: relative;
    width: 100%;
    height: 560px;
    border-radius: 20px;
    overflow: hidden;
    background-color: #061d52;
    box-shadow: 0 8px 24px rgba(6, 29, 82, 0.08);
}

/* Continuous Sliding Track */
.lof-ad-track {
    display: flex;
    width: 100%;
    height: 100%;
    transition: transform 1s cubic-bezier(0.25, 1, 0.5, 1);
    will-change: transform;
}

/* Individual Slide */
.lof-ad-slide {
    position: relative;
    min-width: 100%;
    width: 100%;
    height: 100%;
    flex-shrink: 0;
    overflow: hidden;
}

.lof-ad-slide-bg {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center right;
    display: block;
}

/* Slide Content Overlay */
.lof-ad-slide-overlay {
    position: absolute;
    inset: 0;
    background: transparent;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 0;
    box-sizing: border-box;
}

.lof-ad-slide-header,
.lof-ad-slide-title,
.lof-ad-slide-subtitle,
.lof-ad-slide-bottom,
.lof-ad-badges-cluster,
.lof-ad-badge-seal,
.lof-ad-qr-banner,
.lof-ad-qr-visual,
.lof-ad-qr-label {
    display: none !important;
}

/* Header Typography & Gaps */
.lof-ad-slide-header {
    max-width: 660px;
}

.lof-ad-slide-title {
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 34px;
    font-weight: 800;
    line-height: 1.2;
    color: #0d234a;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin: 0 0 10px;
}

.lof-ad-slide-subtitle {
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 1.5;
    color: #4b5563;
    margin: 0;
}

/* Badges & QR Row at Bottom */
.lof-ad-slide-bottom {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    width: 100%;
    gap: 20px;
}

.lof-ad-badges-cluster {
    display: flex;
    align-items: center;
    gap: 16px;
}

/* Individual Seals */
.lof-ad-badge-seal {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 72px;
    height: 72px;
    border-radius: 50%;
    border: 2px solid #BF800D;
    background: rgba(255, 255, 255, 0.92);
    box-shadow: 0 4px 12px rgba(191, 128, 13, 0.22);
    text-align: center;
}

.lof-ad-badge-seal .seal-icon {
    font-size: 17px;
    color: #BF800D;
    line-height: 1;
    margin-bottom: 2px;
}

.lof-ad-badge-seal .seal-txt {
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 9px;
    font-weight: 800;
    color: #061d52;
    line-height: 1.15;
    text-transform: uppercase;
}

.lof-ad-badge-seal.seal-gold {
    background: radial-gradient(circle, #f7d58b 0%, #BF800D 100%);
    border: 2px solid #ffffff;
}

.lof-ad-badge-seal.seal-gold .seal-txt {
    color: #ffffff;
    text-shadow: 0 1px 2px rgba(0,0,0,0.4);
}

/* QR Code Tour Box */
.lof-ad-qr-banner {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 10px 18px;
    background: rgba(255, 255, 255, 0.96);
    border: 1.5px solid rgba(13, 35, 74, 0.18);
    border-radius: 8px;
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
}

.lof-ad-qr-visual {
    width: 42px;
    height: 42px;
    background: #0d234a;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-size: 22px;
}

.lof-ad-qr-label {
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: 800;
    line-height: 1.35;
    color: #0d234a;
    text-transform: uppercase;
    letter-spacing: 0.3px;
}

/* Bottom Controls Bar */
.lof-ad-bottom-bar {
    position: relative;
    width: 100%;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 4px;
    box-sizing: border-box;
}

/* Dots Group */
.lof-ad-dots-group {
    display: flex;
    align-items: center;
    gap: 8px;
}

.lof-ad-dot-item {
    width: 10px;
    height: 10px;
    border-radius: 0px;
    background: #d8d8d8;
    cursor: pointer;
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    border: none;
    outline: none;
    padding: 0;
}

.lof-ad-dot-item:hover {
    background: #a3a3a3;
}

.lof-ad-dot-item.active {
    width: 10px;
    height: 10px;
    background: #BF800D;
    border-radius: 0px;
}

/* Learn More Button*/
.lof-ad-learn-button {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    padding: 9px 24px;
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    color: #4b5563;
    background-color: #ffffff;
    border: 1.5px solid #d1d5db;
    border-radius: 4px;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.5s ease;
}

.lof-ad-learn-button:hover {
    border-color: #BF800D;
    color: #ffffff;
    background-color: #BF800D;
    box-shadow: 0 2px 8px rgba(191, 128, 13, 0.3);
}

/* Responsive adjustments */
@media (max-width: 1280px) {
    .lof-ad-frame {
        padding: 0 40px;
    }
    .lof-ad-carousel-viewport {
        height: 460px;
    }
}

@media (max-width: 900px) {
    .lof-ad-section {
        margin-top: 30px;
        margin-bottom: 30px;
    }
    .lof-ad-carousel-viewport {
        height: 400px;
    }
    .lof-ad-slide-title {
        font-size: 26px;
    }
    .lof-ad-slide-subtitle {
        font-size: 14px;
    }
    .lof-ad-slide-overlay {
        padding: 28px 32px;
    }
}

@media (max-width: 640px) {
    .lof-ad-frame {
        padding: 0 16px;
    }

    .lof-ad-section {
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .lof-ad-carousel-viewport {
        height: 340px;
    }
    .lof-ad-slide-title {
        font-size: 19px;
    }
    .lof-ad-slide-subtitle {
        font-size: 12px;
    }
    .lof-ad-slide-overlay {
        padding: 20px;
        background: linear-gradient(180deg, rgba(255,255,255,0.96) 0%, rgba(255,255,255,0.85) 60%, rgba(255,255,255,0.5) 100%);
    }
    .lof-ad-slide-bottom {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
    }
    .lof-ad-learn-button {
        position: static;
        transform: none;
        margin-top: 8px;
    }
    .lof-ad-bottom-bar {
        flex-direction: column;
        height: auto;
        gap: 12px;
        padding-top: 12px;
    }

    .lof-ad-learn-button {
        width: 100%;
        text-align: center;
    }
}
</style>

<!-- SECTION 1: HERO ADVERTISEMENT BANNER CAROUSEL -->
<section class="lof-ad-section">
    <div class="lof-ad-frame">
        
        <!-- Viewport holding sliding track -->
        <div class="lof-ad-carousel-viewport" id="lofAdViewport">
            <div class="lof-ad-track" id="lofAdTrack">
                
                <!-- SLIDE 1: PURE GOLD REFINED COOKING OIL -->
                <div class="lof-ad-slide">
                    <img 
                        src="Assets/Images/Product/Advertising/png 1.jpg" 
                        alt="Quality Inspection" 
                        class="lof-ad-slide-bg"
                    >
                    <div class="lof-ad-slide-overlay"></div>
                </div>

                <!-- SLIDE 2: VIRGIN COCONUT & REFINED OILS -->
                <div class="lof-ad-slide">
                    <img 
                        src="Assets/Images/Product/Advertising/png 2.jpg" 
                        alt="Pure Organic Coconut Oil" 
                        class="lof-ad-slide-bg"
                    >
                    <div class="lof-ad-slide-overlay"></div>
                </div>

                <!-- SLIDE 3: COMMERCIAL BAKERY FATS & MARGARINE -->
                <div class="lof-ad-slide">
                    <img 
                        src="Assets/Images/Product/Advertising/png 3.jpg" 
                        alt="Bakery Ingredients" 
                        class="lof-ad-slide-bg"
                    >
                    <div class="lof-ad-slide-overlay"></div>
                </div>

                <!-- SLIDE 4: SUSTAINABLE INDUSTRIAL REFINERY -->
                <div class="lof-ad-slide">
                    <img 
                        src="Assets/Images/Product/Advertising/png 4.jpg" 
                        alt="Advanced Manufacturing Facility" 
                        class="lof-ad-slide-bg"
                    >
                    <div class="lof-ad-slide-overlay"></div>
                </div>

            </div>
        </div>

        <div class="lof-ad-bottom-bar">
            <div class="lof-ad-dots-group" id="lofAdDots">
                <button type="button" class="lof-ad-dot-item active" data-index="0" aria-label="Slide 1"></button>
                <button type="button" class="lof-ad-dot-item" data-index="1" aria-label="Slide 2"></button>
                <button type="button" class="lof-ad-dot-item" data-index="2" aria-label="Slide 3"></button>
                <button type="button" class="lof-ad-dot-item" data-index="3" aria-label="Slide 4"></button>
            </div>

            <a href="about.php" class="lof-ad-learn-button">LEARN MORE</a>
        </div>

    </div>
</section>

<!-- Script for Smooth Right-to-Left Slide Animation -->
<script>
(function() {
    const track = document.getElementById('lofAdTrack');
    const dots = document.querySelectorAll('.lof-ad-dot-item');
    const viewport = document.getElementById('lofAdViewport');
    
    if (!track || dots.length === 0) return;

    let currentIndex = 0;
    const totalSlides = dots.length;
    let autoPlayTimer = null;

    function goToSlide(index) {
        currentIndex = (index + totalSlides) % totalSlides;
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        dots.forEach((dot, i) => {
            if (i === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }

    function nextSlide() {
        goToSlide(currentIndex + 1);
    }

    function startAutoPlay() {
        stopAutoPlay();
        autoPlayTimer = setInterval(nextSlide, 5000);
    }

    function stopAutoPlay() {
        if (autoPlayTimer) {
            clearInterval(autoPlayTimer);
            autoPlayTimer = null;
        }
    }

    dots.forEach((dot) => {
        dot.addEventListener('click', function() {
            const targetIndex = parseInt(this.getAttribute('data-index'), 10);
            goToSlide(targetIndex);
            startAutoPlay();
        });
    });

    if (viewport) {
        viewport.addEventListener('mouseenter', stopAutoPlay);
        viewport.addEventListener('mouseleave', startAutoPlay);
    }

    startAutoPlay();
})();
</script>
