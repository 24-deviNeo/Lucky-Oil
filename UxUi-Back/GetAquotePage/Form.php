<?php include_once __DIR__ . '/../Variable/GetAquotePage/Form.php'; ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Momo+Trust+Sans:wght@500&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

    .lof-quote-form-section {
        width: 100%;
        background: #f3f3f3;
        padding: 104px 0 90px;
        font-family: 'Plus Jakarta Sans', Arial, sans-serif;
        box-sizing: border-box;
    }

    .lof-quote-form-shell {
        width: 1055px;
        max-width: calc(100% - 120px);
        margin-left: 60px;
        margin-right: 0;
        box-sizing: border-box;
    }

    .lof-form-card {
        width: 100%;
        background: #ffffff;
        padding: 88px 0 72px;
        min-height: 900px;
        box-sizing: border-box;
    }

    .lof-form-title {
        width: 1055px;
        height: 100px;
        max-width: 100%;
        margin: 0 0 76px;
        font-family: 'Momo Trust Sans', sans-serif;
        font-weight: 500;
        font-style: normal;
        font-size: 48px;
        line-height: 50px;
        letter-spacing: 0;
        color: #1f1f1f;
        text-transform: uppercase;
        vertical-align: middle;
        box-sizing: border-box;
    }

    .lof-form-title span {
        color: #d39a2a;
        font-family: 'Momo Trust Sans', sans-serif;
        font-weight: 500;
        font-style: normal;
        font-size: 48px;
        line-height: 50px;
        letter-spacing: 0;
        vertical-align: middle;
    }

    .lof-quote-form {
        width: 100%;
    }

    .lof-form-block {
        padding-top: 28px;
        border-top: 1px solid #eeeeee;
        margin-top: 34px;
    }

    .lof-form-block:first-of-type {
        margin-top: 0;
    }

    .lof-form-block h3 {
        margin: 0 0 26px;
        font-size: 20px;
        line-height: 1.4;
        font-weight: 600;
        color: #5d5d5d;
    }

    .lof-input-grid {
        display: grid;
        gap: 28px 18px;
    }

    .lof-input-grid.two-col {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .lof-input-grid.one-col {
        grid-template-columns: 1fr;
    }

    .lof-input-group {
        display: flex;
        flex-direction: column;
        gap: 9px;
    }

    .lof-input-group label {
        font-weight: 600;
        font-size: 12px;
        color: #666666;
    }

    .lof-input-group label span {
        color: #d04c4c;
    }

    .lof-input-group input,
    .lof-input-group textarea,
    .lof-select-wrap select {
        width: 100%;
        border: 1px solid #dddddd;
        background: #ffffff;
        color: #1f2937;
        border-radius: 0;
        padding: 13px 12px;
        font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
        font-size: 15px;
        line-height: 18px;
        outline: none;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .lof-input-group input::placeholder,
    .lof-input-group textarea::placeholder {
        color: #8c8c8c;
    }

    .lof-input-group input:focus,
    .lof-input-group textarea:focus,
    .lof-select-wrap select:focus {
        border-color: #d39a2a;
        box-shadow: 0 0 0 3px rgba(211, 154, 42, 0.08);
    }

    .lof-input-group textarea {
        min-height: 80px;
        resize: vertical;
    }

    .lof-select-wrap {
        position: relative;
        display: block;
        background: #ffffff;
        border: 1px solid #dddddd;
        border-radius: 0;
        overflow: hidden;
    }

    .lof-select-wrap::after {
        content: "▾";
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 14px;
        color: #374151;
        pointer-events: none;
    }

    .lof-select-wrap select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        border: none;
        background: transparent;
        padding-right: 36px;
        cursor: pointer;
    }

    .lof-quantity-box {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
        width: 100%;
    }

    .lof-select-wrap.compact {
        min-width: 0;
    }

    .lof-submit-btn {
        width: 100%;
        margin-top: 28px;
        border: none;
        border-radius: 0;
        background: #929292;
        color: #ffffff;
        font-size: 16px;
        font-weight: 700;
        line-height: 1.3;
        letter-spacing: 0.02em;
        padding: 18px 20px;
        text-transform: uppercase;
        cursor: pointer;
        transition: background-color 0.2s ease, color 0.2s ease;
    }

    .lof-submit-btn:hover,
    .lof-submit-btn:focus-visible {
        background: #c58b19;
        color: #ffffff;
    }

    .lof-form-note {
        margin: 18px 0 0;
        color: #333;
        font-size: 13px;
        line-height: 1.6;
        text-align: center;
    }

    @media (max-width: 1100px) {
        .lof-quote-form-shell {
            width: calc(100% - 120px);
            max-width: none;
        }

        .lof-form-title {
            width: 100%;
        }
    }

    @media (max-width: 760px) {
        .lof-quote-form-section {
            padding: 40px 0 55px;
        }

        .lof-quote-form-shell {
            width: calc(100% - 28px);
            max-width: none;
            margin-left: 14px;
            margin-right: 14px;
        }

        .lof-form-card {
            padding: 42px 24px 40px;
            min-height: 0;
        }

        .lof-form-title {
            margin-bottom: 42px;
        }

        .lof-input-grid.two-col,
        .lof-quantity-box {
            grid-template-columns: 1fr;
        }

        .lof-form-title,
        .lof-form-title span {
            font-size: 40px;
            line-height: 44px;
        }
    }

    @media (max-width: 480px) {
        .lof-quote-form-section {
            padding: 28px 0 40px;
        }

        .lof-quote-form-shell {
            width: calc(100% - 24px);
            margin-left: 12px;
            margin-right: 12px;
        }

        .lof-form-card {
            padding: 30px 16px 32px;
        }

        .lof-form-title,
        .lof-form-title span {
            margin-bottom: 30px;
            font-size: 30px;
            line-height: 34px;
        }

        .lof-form-block {
            padding-top: 22px;
            margin-top: 26px;
        }

        .lof-form-block h3 {
            margin-bottom: 20px;
            font-size: 17px;
        }
    }
</style>

<section class="lof-quote-form-section" id="quote">
    <div class="lof-quote-form-shell">
        <div class="lof-form-card">
            <h2 class="lof-form-title"><?php echo htmlspecialchars($quote_form['title']['dark'], ENT_QUOTES, 'UTF-8'); ?> <span><?php echo htmlspecialchars($quote_form['title']['gold'], ENT_QUOTES, 'UTF-8'); ?></span></h2>

            <form class="lof-quote-form" method="post" action="">
                <div class="lof-form-block">
                    <h3><?php echo htmlspecialchars($quote_form['sections']['details'], ENT_QUOTES, 'UTF-8'); ?></h3>

                    <div class="lof-input-grid two-col">
                        <div class="lof-input-group">
                            <label for="full-name"><?php echo htmlspecialchars($quote_form['fields']['full_name']['label'], ENT_QUOTES, 'UTF-8'); ?> <span>*</span></label>
                            <input id="full-name" type="text" name="full_name" placeholder="<?php echo htmlspecialchars($quote_form['fields']['full_name']['placeholder'], ENT_QUOTES, 'UTF-8'); ?>">
                        </div>

                        <div class="lof-input-group">
                            <label for="phone"><?php echo htmlspecialchars($quote_form['fields']['phone']['label'], ENT_QUOTES, 'UTF-8'); ?> <span>*</span></label>
                            <input id="phone" type="tel" name="phone" placeholder="<?php echo htmlspecialchars($quote_form['fields']['phone']['placeholder'], ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                    </div>

                    <div class="lof-input-grid two-col">
                        <div class="lof-input-group">
                            <label for="company-name"><?php echo htmlspecialchars($quote_form['fields']['company_name']['label'], ENT_QUOTES, 'UTF-8'); ?> <span>*</span></label>
                            <input id="company-name" type="text" name="company_name" placeholder="<?php echo htmlspecialchars($quote_form['fields']['company_name']['placeholder'], ENT_QUOTES, 'UTF-8'); ?>">
                        </div>

                        <div class="lof-input-group">
                            <label for="email"><?php echo htmlspecialchars($quote_form['fields']['email']['label'], ENT_QUOTES, 'UTF-8'); ?> <span>*</span></label>
                            <input id="email" type="email" name="email" placeholder="<?php echo htmlspecialchars($quote_form['fields']['email']['placeholder'], ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                    </div>

                    <div class="lof-input-grid one-col">
                        <div class="lof-input-group">
                            <label for="country"><?php echo htmlspecialchars($quote_form['fields']['country']['label'], ENT_QUOTES, 'UTF-8'); ?> <span>*</span></label>
                            <div class="lof-select-wrap">
                                <select id="country" name="country" required>
                                    <option value="" selected disabled>Select your country</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Antigua and Barbuda</option>
                                    <option>Argentina</option>
                                    <option>Armenia</option>
                                    <option>Australia</option>
                                    <option>Austria</option>
                                    <option>Azerbaijan</option>
                                    <option>Bahamas</option>
                                    <option>Bahrain</option>
                                    <option>Bangladesh</option>
                                    <option>Barbados</option>
                                    <option>Belarus</option>
                                    <option>Belgium</option>
                                    <option>Belize</option>
                                    <option>Benin</option>
                                    <option>Bhutan</option>
                                    <option>Bolivia</option>
                                    <option>Bosnia and Herzegovina</option>
                                    <option>Botswana</option>
                                    <option>Brazil</option>
                                    <option>Brunei</option>
                                    <option>Bulgaria</option>
                                    <option>Burkina Faso</option>
                                    <option>Burundi</option>
                                    <option>Cabo Verde</option>
                                    <option>Cambodia</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                    <option>Central African Republic</option>
                                    <option>Chad</option>
                                    <option>Chile</option>
                                    <option>China</option>
                                    <option>Colombia</option>
                                    <option>Comoros</option>
                                    <option>Congo</option>
                                    <option>Costa Rica</option>
                                    <option>Cote d'Ivoire</option>
                                    <option>Croatia</option>
                                    <option>Cuba</option>
                                    <option>Cyprus</option>
                                    <option>Czechia</option>
                                    <option>Democratic Republic of the Congo</option>
                                    <option>Denmark</option>
                                    <option>Djibouti</option>
                                    <option>Dominica</option>
                                    <option>Dominican Republic</option>
                                    <option>Ecuador</option>
                                    <option>Egypt</option>
                                    <option>El Salvador</option>
                                    <option>Equatorial Guinea</option>
                                    <option>Eritrea</option>
                                    <option>Estonia</option>
                                    <option>Eswatini</option>
                                    <option>Ethiopia</option>
                                    <option>Fiji</option>
                                    <option>Finland</option>
                                    <option>France</option>
                                    <option>Gabon</option>
                                    <option>Gambia</option>
                                    <option>Georgia</option>
                                    <option>Germany</option>
                                    <option>Ghana</option>
                                    <option>Greece</option>
                                    <option>Grenada</option>
                                    <option>Guatemala</option>
                                    <option>Guinea</option>
                                    <option>Guinea-Bissau</option>
                                    <option>Guyana</option>
                                    <option>Haiti</option>
                                    <option>Honduras</option>
                                    <option>Hungary</option>
                                    <option>Iceland</option>
                                    <option>India</option>
                                    <option>Indonesia</option>
                                    <option>Iran</option>
                                    <option>Iraq</option>
                                    <option>Ireland</option>
                                    <option>Israel</option>
                                    <option>Italy</option>
                                    <option>Jamaica</option>
                                    <option>Japan</option>
                                    <option>Jordan</option>
                                    <option>Kazakhstan</option>
                                    <option>Kenya</option>
                                    <option>Kiribati</option>
                                    <option>Kuwait</option>
                                    <option>Kyrgyzstan</option>
                                    <option>Laos</option>
                                    <option>Latvia</option>
                                    <option>Lebanon</option>
                                    <option>Lesotho</option>
                                    <option>Liberia</option>
                                    <option>Libya</option>
                                    <option>Liechtenstein</option>
                                    <option>Lithuania</option>
                                    <option>Luxembourg</option>
                                    <option>Madagascar</option>
                                    <option>Malawi</option>
                                    <option>Malaysia</option>
                                    <option>Maldives</option>
                                    <option>Mali</option>
                                    <option>Malta</option>
                                    <option>Marshall Islands</option>
                                    <option>Mauritania</option>
                                    <option>Mauritius</option>
                                    <option>Mexico</option>
                                    <option>Micronesia</option>
                                    <option>Moldova</option>
                                    <option>Monaco</option>
                                    <option>Mongolia</option>
                                    <option>Montenegro</option>
                                    <option>Morocco</option>
                                    <option>Mozambique</option>
                                    <option>Myanmar</option>
                                    <option>Namibia</option>
                                    <option>Nauru</option>
                                    <option>Nepal</option>
                                    <option>Netherlands</option>
                                    <option>New Zealand</option>
                                    <option>Nicaragua</option>
                                    <option>Niger</option>
                                    <option>Nigeria</option>
                                    <option>North Korea</option>
                                    <option>North Macedonia</option>
                                    <option>Norway</option>
                                    <option>Oman</option>
                                    <option>Pakistan</option>
                                    <option>Palau</option>
                                    <option>Palestine</option>
                                    <option>Panama</option>
                                    <option>Papua New Guinea</option>
                                    <option>Paraguay</option>
                                    <option>Peru</option>
                                    <option>Philippines</option>
                                    <option>Poland</option>
                                    <option>Portugal</option>
                                    <option>Qatar</option>
                                    <option>Romania</option>
                                    <option>Russia</option>
                                    <option>Rwanda</option>
                                    <option>Saint Kitts and Nevis</option>
                                    <option>Saint Lucia</option>
                                    <option>Saint Vincent and the Grenadines</option>
                                    <option>Samoa</option>
                                    <option>San Marino</option>
                                    <option>Sao Tome and Principe</option>
                                    <option>Saudi Arabia</option>
                                    <option>Senegal</option>
                                    <option>Serbia</option>
                                    <option>Seychelles</option>
                                    <option>Sierra Leone</option>
                                    <option>Singapore</option>
                                    <option>Slovakia</option>
                                    <option>Slovenia</option>
                                    <option>Solomon Islands</option>
                                    <option>Somalia</option>
                                    <option>South Africa</option>
                                    <option>South Korea</option>
                                    <option>South Sudan</option>
                                    <option>Spain</option>
                                    <option>Sri Lanka</option>
                                    <option>Sudan</option>
                                    <option>Suriname</option>
                                    <option>Sweden</option>
                                    <option>Switzerland</option>
                                    <option>Syria</option>
                                    <option>Taiwan</option>
                                    <option>Tajikistan</option>
                                    <option>Tanzania</option>
                                    <option>Thailand</option>
                                    <option>Timor-Leste</option>
                                    <option>Togo</option>
                                    <option>Tonga</option>
                                    <option>Trinidad and Tobago</option>
                                    <option>Tunisia</option>
                                    <option>Turkey</option>
                                    <option>Turkmenistan</option>
                                    <option>Tuvalu</option>
                                    <option>Uganda</option>
                                    <option>Ukraine</option>
                                    <option>United Arab Emirates</option>
                                    <option>United Kingdom</option>
                                    <option>United States</option>
                                    <option>Uruguay</option>
                                    <option>Uzbekistan</option>
                                    <option>Vanuatu</option>
                                    <option>Vatican City</option>
                                    <option>Venezuela</option>
                                    <option>Vietnam</option>
                                    <option>Yemen</option>
                                    <option>Zambia</option>
                                    <option>Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lof-form-block">
                    <h3><?php echo htmlspecialchars($quote_form['sections']['requirement'], ENT_QUOTES, 'UTF-8'); ?></h3>

                    <div class="lof-input-grid one-col">
                        <div class="lof-input-group">
                            <label for="product-type"><?php echo htmlspecialchars($quote_form['fields']['product_type']['label'], ENT_QUOTES, 'UTF-8'); ?> <span>*</span></label>
                            <div class="lof-select-wrap">
                                <select id="product-type" name="product_type">
                                    <?php foreach ($quote_form['product_options'] as $index => $option): ?>
                                        <option<?php echo $index === 0 ? ' selected' : ''; ?>><?php echo htmlspecialchars($option, ENT_QUOTES, 'UTF-8'); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="lof-input-grid one-col">
                        <div class="lof-input-group">
                            <label for="note"><?php echo htmlspecialchars($quote_form['fields']['note']['label'], ENT_QUOTES, 'UTF-8'); ?></label>
                            <textarea id="note" name="note" rows="4" placeholder="<?php echo htmlspecialchars($quote_form['fields']['note']['placeholder'], ENT_QUOTES, 'UTF-8'); ?>"></textarea>
                        </div>
                    </div>
                </div>

                <div class="lof-form-block">
                    <h3><?php echo htmlspecialchars($quote_form['sections']['industry'], ENT_QUOTES, 'UTF-8'); ?></h3>

                    <div class="lof-input-grid one-col">
                        <div class="lof-input-group">
                            <label for="industry"><?php echo htmlspecialchars($quote_form['fields']['industry']['label'], ENT_QUOTES, 'UTF-8'); ?> <span>*</span></label>
                            <div class="lof-select-wrap">
                                <select id="industry" name="industry">
                                    <?php foreach ($quote_form['industry_options'] as $index => $option): ?>
                                        <option<?php echo $index === 0 ? ' selected' : ''; ?>><?php echo htmlspecialchars($option, ENT_QUOTES, 'UTF-8'); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lof-form-block">
                    <h3><?php echo htmlspecialchars($quote_form['sections']['quantity'], ENT_QUOTES, 'UTF-8'); ?></h3>

                    <div class="lof-input-grid two-col quantity-row">
                        <div class="lof-input-group">
                            <label for="quantity"><?php echo htmlspecialchars($quote_form['fields']['quantity']['label'], ENT_QUOTES, 'UTF-8'); ?> <span>*</span></label>
                            <div class="lof-quantity-box">
                                <div class="lof-select-wrap compact">
                                    <select id="quantity" name="quantity">
                                        <?php foreach ($quote_form['quantity_options'] as $index => $option): ?>
                                            <option<?php echo $index === 0 ? ' selected' : ''; ?>><?php echo htmlspecialchars($option, ENT_QUOTES, 'UTF-8'); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="lof-select-wrap compact">
                                    <select id="volume" name="volume">
                                        <?php foreach ($quote_form['volume_options'] as $index => $option): ?>
                                            <option<?php echo $index === 0 ? ' selected' : ''; ?>><?php echo htmlspecialchars($option, ENT_QUOTES, 'UTF-8'); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lof-form-block">
                    <h3><?php echo htmlspecialchars($quote_form['sections']['packaging'], ENT_QUOTES, 'UTF-8'); ?></h3>

                    <div class="lof-input-grid one-col">
                        <div class="lof-input-group">
                            <textarea name="packaging_requirement" rows="4" placeholder="<?php echo htmlspecialchars($quote_form['fields']['packaging_requirement']['placeholder'], ENT_QUOTES, 'UTF-8'); ?>"></textarea>
                        </div>
                    </div>
                </div>

                <div class="lof-form-block">
                    <h3><?php echo htmlspecialchars($quote_form['sections']['delivery'], ENT_QUOTES, 'UTF-8'); ?></h3>

                    <div class="lof-input-grid one-col">
                        <div class="lof-input-group">
                            <textarea name="delivery_location" rows="4" placeholder="<?php echo htmlspecialchars($quote_form['fields']['delivery_location']['placeholder'], ENT_QUOTES, 'UTF-8'); ?>"></textarea>
                        </div>
                    </div>
                </div>

                <div class="lof-form-block">
                    <h3><?php echo htmlspecialchars($quote_form['sections']['additional'], ENT_QUOTES, 'UTF-8'); ?></h3>

                    <div class="lof-input-grid one-col">
                        <div class="lof-input-group">
                            <textarea name="additional_requirements" rows="4" placeholder="<?php echo htmlspecialchars($quote_form['fields']['additional_requirements']['placeholder'], ENT_QUOTES, 'UTF-8'); ?>"></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="lof-submit-btn"><?php echo htmlspecialchars($quote_form['submit_label'], ENT_QUOTES, 'UTF-8'); ?></button>

                <p class="lof-form-note"><?php echo htmlspecialchars($quote_form['note'][0], ENT_QUOTES, 'UTF-8'); ?><br><?php echo htmlspecialchars($quote_form['note'][1], ENT_QUOTES, 'UTF-8'); ?></p>
            </form>
        </div>
    </div>
</section>
