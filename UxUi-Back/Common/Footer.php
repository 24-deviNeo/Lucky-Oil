<style>
/* =========================================================
   LUCKY OIL - COMMON FOOTER
   ========================================================= */

.lof-footer {
    width: 100%;
    background-color: #f4f5f7;
    border-top: 1px solid #e5e7eb;
    padding: 48px 0 32px;
    margin-top: auto;
}

.lof-footer-container {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 42px;
    box-sizing: border-box;
}

/* Footer Top Row: Logo, Tagline & Social Links */
.lof-footer-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding-bottom: 24px;
    gap: 20px;
    flex-wrap: wrap;
}

.lof-footer-brand {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.lof-footer-logo {
    width: 130px;
    height: auto;
    object-fit: contain;
}

.lof-footer-tagline {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: 600;
    color: #4b5563;
    margin: 4px 0 0;
}

.lof-footer-top-right {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 10px;
}

.lof-footer-copy {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    color: #6b7280;
}

.lof-footer-socials {
    display: flex;
    align-items: center;
    gap: 18px;
}

.lof-footer-social-link {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12.5px;
    font-weight: 500;
    color: #374151;
    text-decoration: none;
    transition: color 0.2s ease;
}

.lof-footer-social-link:hover {
    color: #BF800D;
}

.lof-footer-divider {
    border: none;
    border-top: 1px solid #e2e8f0;
    margin: 0 0 32px;
}

/* Footer Columns Grid */
.lof-footer-grid {
    display: grid;
    grid-template-columns: 1.3fr 0.9fr 1fr 1.4fr;
    gap: 36px;
    align-items: flex-start;
}

/* Col 1: About & Back to Top */
.lof-footer-col-about {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 140px;
}

.lof-footer-about-text {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12.5px;
    line-height: 1.6;
    color: #6b7280;
    margin: 0 0 20px;
}

.lof-footer-back-top {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 11.5px;
    font-weight: 700;
    letter-spacing: 0.5px;
    color: #1f2937;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    transition: color 0.2s ease;
}

.lof-footer-back-top:hover {
    color: #BF800D;
}

/* Col 2 & 3: Headings & Lists */
.lof-footer-col-title {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    color: #1f2937;
    margin: 0 0 16px;
}

.lof-footer-links-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.lof-footer-links-list a {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    color: #4b5563;
    text-decoration: none;
    transition: color 0.2s ease;
}

.lof-footer-links-list a:hover {
    color: #BF800D;
}

/* Col 3: Contact Info */
.lof-footer-contact-item {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    line-height: 1.5;
    color: #4b5563;
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 10px;
}

/* Col 4: Map & Newsletter */
.lof-footer-col-map {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.lof-footer-map-thumb {
    width: 100%;
    height: 90px;
    border-radius: 6px;
    overflow: hidden;
    border: 1px solid #d1d5db;
}

.lof-footer-map-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.lof-newsletter-form {
    display: flex;
    width: 100%;
    gap: 0;
}

.lof-newsletter-input {
    flex: 1;
    padding: 8px 12px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    border: 1px solid #d1d5db;
    border-right: none;
    border-radius: 4px 0 0 4px;
    outline: none;
    background: #ffffff;
}

.lof-newsletter-input:focus {
    border-color: #061d52;
}

.lof-newsletter-btn {
    padding: 8px 16px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 11.5px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #ffffff;
    background-color: #061d52;
    border: 1px solid #061d52;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
    transition: background-color 0.2s ease;
}

.lof-newsletter-btn:hover {
    background-color: #BF800D;
    border-color: #BF800D;
}

/* Responsive Footer */
@media (max-width: 992px) {
    .lof-footer-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 28px;
    }
}

@media (max-width: 640px) {
    .lof-footer-container {
        padding: 0 16px;
    }
    .lof-footer-top {
        flex-direction: column;
        align-items: flex-start;
    }
    .lof-footer-top-right {
        align-items: flex-start;
    }
    .lof-footer-socials {
        flex-wrap: wrap;
        gap: 10px 16px;
    }
    .lof-footer-grid {
        grid-template-columns: 1fr;
        gap: 24px;
    }
}
</style>

<!-- SECTION 5: FOOTER -->
<footer class="lof-footer">
    <div class="lof-footer-container">
        
        <!-- Top Row -->
        <div class="lof-footer-top">
            <div class="lof-footer-brand">
                <img src="Assets/Images/Common/logo.png" alt="Lucky Oil & Fats" class="lof-footer-logo" onerror="this.style.display='none'">
                <div style="font-size: 22px; font-weight: 800; color: #061d52; letter-spacing: 1px;">LOF</div>
                <p class="lof-footer-tagline">Premium Ingredients, Trusted Partner</p>
            </div>

            <div class="lof-footer-top-right">
                <span class="lof-footer-copy">2024 © Powered by NEO SOLUTION</span>
                <div class="lof-footer-socials">
                    <a href="#" class="lof-footer-social-link">Facebook ↗</a>
                    <a href="#" class="lof-footer-social-link">Instagram ↗</a>
                    <a href="#" class="lof-footer-social-link">LinkedIn ↗</a>
                </div>
            </div>
        </div>

        <hr class="lof-footer-divider">

        <!-- Grid Columns -->
        <div class="lof-footer-grid">
            
            <!-- Col 1: About Blurb -->
            <div class="lof-footer-col-about">
                <p class="lof-footer-about-text">
                    Premium edible oils, margarine and food ingredients manufactured with international quality standards.
                </p>
                <a href="#top" class="lof-footer-back-top">BACK TO TOP ↑</a>
            </div>

            <!-- Col 2: Company Links -->
            <div>
                <h4 class="lof-footer-col-title">COMPANY</h4>
                <ul class="lof-footer-links-list">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="product.php">PRODUCTS</a></li>
                    <li><a href="facilities.php">FACILITIES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>

            <!-- Col 3: Contact Info -->
            <div>
                <h4 class="lof-footer-col-title">CONTACT INFO</h4>
                <div class="lof-footer-contact-item">📞 011 8200191</div>
                <div class="lof-footer-contact-item">✉️ info@luckyoils.com</div>
                <div class="lof-footer-contact-item">📍 Colombo, Sri Lanka</div>
            </div>

            <!-- Col 4: Map & Newsletter -->
            <div class="lof-footer-col-map">
                <div class="lof-footer-map-thumb">
                    <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?auto=format&fit=crop&w=400&q=80" alt="Location Map" class="lof-footer-map-img">
                </div>
                <form class="lof-newsletter-form" onsubmit="event.preventDefault(); alert('Subscribed successfully!');">
                    <input type="email" placeholder="Enter your email address" class="lof-newsletter-input" required>
                    <button type="submit" class="lof-newsletter-btn">SUBSCRIBE</button>
                </form>
            </div>

        </div>

    </div>
</footer>
