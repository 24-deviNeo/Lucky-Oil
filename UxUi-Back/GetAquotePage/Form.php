<style>
/* =========================================================
   GET A QUOTE FORM SECTION (FIGMA SPECIFICATIONS)
   ========================================================= */
.lof-quote-section {
    width: 100%;
    background-color: #f8fafc;
    padding: 60px 20px;
    display: flex;
    justify-content: center;
    box-sizing: border-box;
}

.lof-quote-container {
    width: 100%;
    max-width: 1264px;
    background-color: #ffffff;
    border: 1px solid #DBDBDB;
    border-radius: 12px;
    padding: 56px 64px;
    box-sizing: border-box;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
}

.lof-quote-title {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 24px;
    font-weight: 800;
    color: #111827;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin: 0 0 36px 0;
}

.lof-quote-title span {
    color: #BF800D; /* Accent gold color */
}

/* Form Section Headers */
.lof-section-header {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    font-weight: 700;
    color: #1f2937;
    margin: 32px 0 16px 0;
    padding-bottom: 8px;
    border-bottom: 1px solid #f3f4f6;
}

.lof-section-header:first-of-type {
    margin-top: 0;
}

/* Grid Layouts */
.lof-form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-bottom: 20px;
}

.lof-form-row.single {
    grid-template-columns: 1fr;
}

/* Field Styles */
.lof-input-group {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.lof-input-group label {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 12px;
    font-weight: 600;
    color: #4b5563;
}

.lof-quote-input,
.lof-quote-select,
.lof-quote-textarea {
    width: 100%;
    padding: 12px 14px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    color: #1f2937;
    background-color: #ffffff;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    box-sizing: border-box;
    outline: none;
    transition: all 0.2s ease;
}

.lof-quote-input:focus,
.lof-quote-select:focus,
.lof-quote-textarea:focus {
    border-color: #BF800D;
    box-shadow: 0 0 0 3px rgba(191, 128, 13, 0.12);
}

.lof-quote-textarea {
    resize: vertical;
    min-height: 90px;
}

/* Button & Disclaimer */
.lof-btn-submit {
    width: 100%;
    padding: 16px;
    background-color: #7d8590;
    color: #ffffff;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 36px;
    transition: background-color 0.25s ease;
}

.lof-btn-submit:hover {
    background-color: #BF800D;
}

.lof-quote-footer {
    margin-top: 16px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 11px;
    color: #9ca3af;
    line-height: 1.5;
}

/* Responsive Adjustments */
@media (max-width: 868px) {
    .lof-quote-container {
        padding: 32px 20px;
    }
    
    .lof-form-row {
        grid-template-columns: 1fr;
        gap: 16px;
    }
}
</style>

<section class="lof-quote-section">
    <div class="lof-quote-container">
        <h2 class="lof-quote-title">Fill the form to <span>Get a Quote</span></h2>

        <form action="" method="POST">
            
            <!-- SECTION 1: YOUR DETAILS -->
            <div class="lof-section-header">Your Details</div>
            
            <div class="lof-form-row">
                <div class="lof-input-group">
                    <label for="full_name">Full Name *</label>
                    <input type="text" id="full_name" name="full_name" placeholder="Your full name" required class="lof-quote-input">
                </div>
                <div class="lof-input-group">
                    <label for="phone_number">Phone Number / Whatsapp</label>
                    <input type="tel" id="phone_number" name="phone_number" placeholder="+94 7X XXX XXXX" class="lof-quote-input">
                </div>
            </div>

            <div class="lof-form-row">
                <div class="lof-input-group">
                    <label for="company_name">Company Name *</label>
                    <input type="text" id="company_name" name="company_name" placeholder="Company Name" required class="lof-quote-input">
                </div>
                <div class="lof-input-group">
                    <label for="business_email">Business Email *</label>
                    <input type="email" id="business_email" name="business_email" placeholder="you@company.com" required class="lof-quote-input">
                </div>
            </div>

            <div class="lof-form-row single">
                <div class="lof-input-group">
                    <label for="country">Country *</label>
                    <select id="country" name="country" required class="lof-quote-select">
                        <option value="Sri Lanka" selected>Sri Lanka</option>
                        <option value="India">India</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>

            <!-- SECTION 2: YOUR REQUIREMENT -->
            <div class="lof-section-header">Your Requirement</div>
            
            <div class="lof-form-row single">
                <div class="lof-input-group">
                    <label for="product_interested">Product Interested In *</label>
                    <select id="product_interested" name="product_interested" required class="lof-quote-select">
                        <option value="" disabled selected>Margarine</option>
                        <option value="margarine">Margarine</option>
                        <option value="bakery-fat">Bakery Fat / Shortening</option>
                        <option value="coconut-oil">Coconut Oil</option>
                        <option value="edible-oil">Edible Palm Olein</option>
                    </select>
                </div>
            </div>

            <div class="lof-form-row single">
                <div class="lof-input-group">
                    <label for="requirement_note">Note</label>
                    <textarea id="requirement_note" name="requirement_note" placeholder="State your required quantities or specifications..." class="lof-quote-textarea"></textarea>
                </div>
            </div>

            <!-- SECTION 3: APPLICATION / INDUSTRY -->
            <div class="lof-section-header">Application / Industry</div>
            
            <div class="lof-form-row single">
                <div class="lof-input-group">
                    <label for="application_industry">Application / Industry *</label>
                    <select id="application_industry" name="application_industry" required class="lof-quote-select">
                        <option value="" disabled selected>Select Industry</option>
                        <option value="bakery">Bakery & Confectionery</option>
                        <option value="hotel-foodservice">Hotels & Food Service</option>
                        <option value="food-manufacturing">Food Manufacturing</option>
                        <option value="retail">Retail / Household</option>
                        <option value="export">Export Trade</option>
                    </select>
                </div>
            </div>

            <!-- SECTION 4: PACKAGING REQUIREMENT -->
            <div class="lof-section-header">Packaging Requirement</div>
            
            <div class="lof-form-row single">
                <div class="lof-input-group">
                    <label for="packaging_req">Packaging Requirement</label>
                    <input type="text" id="packaging_req" name="packaging_req" placeholder="Type your packaging requirement here" class="lof-quote-input">
                </div>
            </div>

            <!-- SECTION 5: DELIVERY LOCATION -->
            <div class="lof-section-header">Delivery Location</div>
            
            <div class="lof-form-row single">
                <div class="lof-input-group">
                    <label for="delivery_location">Delivery Location</label>
                    <input type="text" id="delivery_location" name="delivery_location" placeholder="Where should we deliver your order?" class="lof-quote-input">
                </div>
            </div>

            <!-- SECTION 6: ADDITIONAL REQUIREMENTS -->
            <div class="lof-section-header">Additional Requirements / Specifications</div>
            
            <div class="lof-form-row single">
                <div class="lof-input-group">
                    <label for="additional_notes">Note</label>
                    <textarea id="additional_notes" name="additional_notes" placeholder="Any special certifications or customs requirement..." class="lof-quote-textarea"></textarea>
                </div>
            </div>

            <button type="submit" class="lof-btn-submit">REQUEST MY QUOTE</button>

            <div class="lof-quote-footer">
                Our specialists will get in touch with you promptly.<br>Thank you.
            </div>

        </form>
    </div>
</section>