<style>
    /* =========================================================
       LUCKY OIL - COMMON HEADER
       ========================================================= */

    :root {
        --lucky-header-height: 100px;
    }

    .lucky-header {
        width: 100%;
        background: #ffffff;
        position: relative;
        z-index: 1000;
        border-bottom: 1px solid rgba(0, 0, 0, 0.06);
    }

    .lucky-header-container {
        width: 100%;
        max-width: 1440px;
        height: 100px;
        margin: 0 auto;
        padding: 0 42px;

        display: flex;
        align-items: center;
        justify-content: space-between;
    }


    /* =========================================================
       LOGO
       ========================================================= */

    .lucky-header-logo {
        display: flex;
        align-items: center;
        text-decoration: none;
        flex-shrink: 0;
    }

    .lucky-header-logo img {
        width: 133px;
        height: auto;
        display: block;
        object-fit: contain;
    }


    /* =========================================================
       DESKTOP NAVIGATION
       ========================================================= */

    .lucky-header-nav {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 38px;
        margin-left: auto; 
        margin-right: 32px;
    }

    .lucky-header-nav a {
        position: relative;

        color: #151515;
        text-decoration: none;

        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        font-weight: 500;
        line-height: 50px;
        
        text-transform: uppercase;

        padding: 8px 0;

        transition:
            color 0.3s ease,
            opacity 0.3s ease;
    }

    

    .lucky-header-nav a:hover {
        color: #BF800D;
    }

    .lucky-header-nav a:hover::after {
        width: 100%;
    }


    /* =========================================================
       ACTIVE NAVIGATION ITEM
       ========================================================= */

    .lucky-header-nav a.active {
        color: #BF800D;
    }

    .lucky-header-nav a.active::after {
        width: 100%;
    }


    /* =========================================================
       HEADER CTA
       ========================================================= */

    .lucky-header-cta {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        width: 142px;
        height: 55.56px;

        padding: 0 16px;

        background: #061d52;
        color: #ffffff;

        border-radius: 3px;

        text-decoration: none;

        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        font-weight: 600;
       line-height: 18px;
        text-transform: uppercase;

        transition:
            background 0.3s ease,
            transform 0.3s ease;
    }

    .lucky-header-cta:hover {
        background: #c58b19;
        color: #ffffff;
        transform: translateY(-1px);
    }

    .lucky-header-cta.quote-page-cta,
    .lucky-header-mobile-cta.quote-page-cta {
        background: #c58b19;
        color: #ffffff;
    }

    .lucky-header-cta.quote-page-cta:hover,
    .lucky-header-mobile-cta.quote-page-cta:hover {
        background: #061d52;
    }


    /* =========================================================
       MOBILE MENU BUTTON
       ========================================================= */

    .lucky-header-menu-toggle {
        display: none;
    }

    .lucky-header-menu-label {
        width: 34px;
        height: 34px;

        cursor: pointer;

        align-items: center;
        justify-content: center;

        flex-direction: column;
        gap: 5px;

        border: 1px solid rgba(6, 29, 82, 0.15);
        border-radius: 3px;
    }

    .lucky-header-menu-label span {
        width: 15px;
        height: 1px;

        background: #061d52;

        display: block;

        transition:
            transform 0.3s ease,
            opacity 0.3s ease;
    }


    /* =========================================================
       MOBILE NAVIGATION
       ========================================================= */

    .lucky-header-mobile-menu {
        display: none;

        width: 100%;
        background: #ffffff;

        border-top: 1px solid rgba(0, 0, 0, 0.06);
    }

    .lucky-header-mobile-menu-inner {
        padding: 20px 24px 25px;

        display: flex;
        flex-direction: column;
        gap: 0;
    }

    .lucky-header-mobile-menu a {
        display: block;

        padding: 15px 0;

        color: #151515;
        text-decoration: none;

        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
        font-weight: 500;

        text-transform: uppercase;

        border-bottom: 1px solid rgba(0, 0, 0, 0.07);

        transition: color 0.3s ease;
    }

    .lucky-header-mobile-menu a:hover,
    .lucky-header-mobile-menu a.active {
        color: #BF800D;
    }

    .lucky-header-mobile-cta {
        margin-top: 18px;

        width: 100%;
        height: 42px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #061d52;
        color: #ffffff !important;

        border: none !important;
        border-radius: 3px;

        text-decoration: none;
    }


    /* =========================================================
       MENU OPEN STATE
       ========================================================= */

    

    

    

    


    /* =========================================================
       LARGE DESKTOP
       ========================================================= */

    @media (min-width: 1441px) {
        .lucky-header-container {
            padding-left: 55px;
            padding-right: 55px;
        }

        .lucky-header-nav {
            gap: 42px;
        }
    }


    /* =========================================================
       RESPONSIVE - SMALL LAPTOP / TABLET LANDSCAPE
       ========================================================= */

    @media (max-width: 1200px) and (min-width: 901px) {

        .lucky-header-container {
            height: 82px;
            padding: 0 30px;
        }

        .lucky-header-logo img {
            width: 112px;
        }

        .lucky-header-nav {
            gap: clamp(18px, 2.4vw, 30px);
            margin-right: 22px;
        }

        .lucky-header-nav a {
            font-size: clamp(14px, 1.35vw, 18px);
            line-height: 1.2;
            padding: 6px 0;
            white-space: nowrap;
        }

        .lucky-header-cta {
            width: clamp(118px, 12vw, 142px);
            height: 48px;
            padding: 0 12px;
            font-size: 13px;
            white-space: nowrap;
        }

        :root {
            --lucky-header-height: 82px;
        }
    }


    /* =========================================================
       TABLET PORTRAIT / COMPACT TABLET
       ========================================================= */

    @media (max-width: 900px) and (min-width: 768px) {

        .lucky-header-container {
            height: 72px;
            padding: 0 24px;
        }

        .lucky-header-logo img {
            width: 92px;
        }

        .lucky-header-nav {
            gap: 15px;
            margin-right: 15px;
        }

        .lucky-header-nav a {
            font-size: 12px;
            line-height: 1.2;
            padding: 5px 0;
            white-space: nowrap;
        }

        .lucky-header-cta {
            width: 108px;
            height: 40px;
            padding: 0 10px;
            font-size: 11px;
            white-space: nowrap;
        }

        :root {
            --lucky-header-height: 72px;
        }
    }


    /* =========================================================
       MOBILE
       ========================================================= */

    @media (max-width: 767px) {

        .lucky-header {
            position: relative;
        }

        .lucky-header-container {
            height: 64px;
            padding: 0 20px;
            gap: 16px;
        }

        :root {
            --lucky-header-height: 64px;
        }

        .lucky-header-logo {
            min-width: 0;
        }

        .lucky-header-logo img {
            width: 82px;
            max-width: 100%;
        }

        .lucky-header-nav,
        .lucky-header-cta {
            display: none;
        }

        .lucky-header-menu-toggle {
            display: none;
        }

        .lucky-header-menu-label {
            display: flex;
            flex: 0 0 36px;
            width: 36px;
            height: 36px;
            margin-left: auto;
            padding: 0;
            box-sizing: border-box;
            background: #ffffff;
            transition:
                border-color 0.3s ease,
                background 0.3s ease;
        }

        .lucky-header-menu-label:hover {
            border-color: rgba(191, 128, 13, 0.5);
        }

        .lucky-header-menu-label span {
            width: 16px;
            height: 1.5px;
        }

        .lucky-header-mobile-menu {
            position: absolute;
            top: 64px;
            left: 0;
            right: 0;
            width: 100%;
            box-sizing: border-box;
            max-height: calc(100vh - 64px);
            overflow-y: auto;
            overflow-x: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.10);
        }

        .lucky-header-mobile-menu-inner {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            padding: 10px 20px 22px;
            box-sizing: border-box;
        }

        .lucky-header-mobile-menu a {
            font-size: 14px;
            line-height: 1.3;
            padding: 15px 2px;
        }

        .lucky-header-mobile-cta {
            margin-top: 16px !important;
            height: 44px !important;
            padding: 0 !important;
            font-size: 12px !important;
        }
    }


    /* =========================================================
       SMALL MOBILE
       ========================================================= */

    @media (max-width: 480px) {

        .lucky-header-container {
            height: 60px;
            padding: 0 15px;
        }

        :root {
            --lucky-header-height: 60px;
        }

        .lucky-header-logo img {
            width: 74px;
        }

        .lucky-header-menu-label {
            flex-basis: 34px;
            width: 34px;
            height: 34px;
        }

        .lucky-header-mobile-menu {
            top: 60px;
            max-height: calc(100vh - 60px);
        }

        .lucky-header-mobile-menu-inner {
            padding: 8px 18px 20px;
        }

        .lucky-header-mobile-menu a {
            font-size: 13px;
            padding: 14px 2px;
        }

        .lucky-header-mobile-cta {
            height: 42px !important;
            font-size: 11px !important;
        }
    }


    /* =========================================================
       VERY SMALL MOBILE
       ========================================================= */

    @media (max-width: 360px) {

        .lucky-header-container {
            height: 56px;
            padding: 0 12px;
        }

        :root {
            --lucky-header-height: 56px;
        }

        .lucky-header-logo img {
            width: 68px;
        }

        .lucky-header-menu-label {
            flex-basis: 32px;
            width: 32px;
            height: 32px;
        }

        .lucky-header-mobile-menu {
            top: 56px;
            max-height: calc(100vh - 56px);
        }

        .lucky-header-mobile-menu-inner {
            padding-left: 15px;
            padding-right: 15px;
        }

        .lucky-header-mobile-menu a {
            font-size: 12px;
            padding: 13px 2px;
        }
    }


    /* =========================================================
       TOUCH DEVICES
       ========================================================= */

    @media (hover: none) and (pointer: coarse) {

        .lucky-header-nav a:hover {
            color: #151515;
        }

        .lucky-header-nav a.active {
            color: #BF800D;
        }

        .lucky-header-cta:hover {
            background: #061d52;
            transform: none;
        }
    }


    /* =========================================================
       REDUCED MOTION
       ========================================================= */

    @media (prefers-reduced-motion: reduce) {

        .lucky-header-nav a,
        .lucky-header-cta,
        .lucky-header-menu-label,
        .lucky-header-menu-label span {
            transition: none;
        }
    }

    /* =========================================================
       HAMBURGER MENU - MOBILE VERTICAL NAVIGATION
       ========================================================= */

    @media (max-width: 767px) {

        .lucky-header {
            overflow: visible !important;
            position: sticky !important;
            top: 0;
        }

        .lucky-header-menu-label {
            display: flex !important;
            position: relative;
            z-index: 1003;
            flex-shrink: 0;
        }

        .lucky-header-mobile-menu {
            display: none !important;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            width: 100%;
            background: #ffffff;
            z-index: 1002;
            border-top: 1px solid rgba(0, 0, 0, 0.06);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.10);
            max-height: calc(100vh - 64px);
            overflow-y: auto;
        }

        /* Explicit open state — overrides display:none !important */
        .lucky-header-mobile-menu.is-open {
            display: block !important;
        }

        /* IMPORTANT: show the complete navigation vertically */
        

        .lucky-header-mobile-menu-inner {
            width: 100%;
            display: flex !important;
            flex-direction: column !important;
            align-items: stretch !important;
            justify-content: flex-start !important;
            padding: 12px 20px 20px !important;
            gap: 0 !important;
            box-sizing: border-box;
        }

        .lucky-header-mobile-menu a {
            display: flex !important;
            width: 100%;
            min-height: 48px;
            align-items: center;
            box-sizing: border-box;
            padding: 14px 4px !important;
            margin: 0 !important;
            font-size: 13px !important;
            line-height: 20px !important;
            text-align: left;
        }

        .lucky-header-mobile-cta {
            width: 100% !important;
            min-height: 44px !important;
            height: 44px !important;
            margin-top: 16px !important;
            justify-content: center !important;
            text-align: center !important;
            padding: 0 16px !important;
        }
    }

    @media (max-width: 480px) {
        .lucky-header-mobile-menu {
            max-height: calc(100vh - 60px);
        }

        .lucky-header-mobile-menu-inner {
            padding: 10px 18px 18px !important;
        }

        .lucky-header-mobile-menu a {
            min-height: 46px;
            font-size: 12px !important;
        }
    }

    @media (max-width: 360px) {
        .lucky-header-mobile-menu-inner {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        .lucky-header-mobile-menu a {
            min-height: 44px;
            font-size: 11px !important;
        }
    }


    /* Real button-based mobile menu state */
    @media (max-width: 767px) {
        .lucky-header-menu-label {
            appearance: none;
            -webkit-appearance: none;
            background: #ffffff;
            padding: 0;
            outline: none;
        }

        .lucky-header-menu-label.is-open span:nth-child(1) {
            transform: translateY(6px) rotate(45deg);
        }

        .lucky-header-menu-label.is-open span:nth-child(2) {
            opacity: 0;
        }

        .lucky-header-menu-label.is-open span:nth-child(3) {
            transform: translateY(-6px) rotate(-45deg);
        }
    }


    /* =========================================================
       STICKY HEADER
       - Remains visible while scrolling
       - Uses the blurred scrolled state below the top of the page
       ========================================================= */

    .lucky-header {
        position: sticky !important;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0.96);
        transform: translateY(0);
        transition: transform 0.35s ease, background-color 0.35s ease, box-shadow 0.35s ease, backdrop-filter 0.35s ease;
        z-index: 1000;
    }

    .lucky-header.header-hidden {
        transform: translateY(-100%);
    }

    .lucky-header.header-scrolling {
        transform: translateY(0);
        background: rgba(255, 255, 255, 0.66);
        -webkit-backdrop-filter: blur(14px);
        backdrop-filter: blur(14px);
        box-shadow: 0 8px 24px rgba(6, 29, 82, 0.08);
    }

    .lucky-header.header-scrolling .lucky-header-mobile-menu {
        background: rgba(255, 255, 255, 0.9);
        -webkit-backdrop-filter: blur(14px);
        backdrop-filter: blur(14px);
    }

    /* Prevent the fixed header from covering the first section.
       The page already has a normal flow header in the DOM, so only
       the visual header is fixed; its original space remains reserved. */

    @media (prefers-reduced-motion: reduce) {
        .lucky-header {
            transition: none !important;
        }
    }

</style>

<?php
$currentPage = basename($_SERVER['SCRIPT_NAME'] ?? '');
$isHomePage = $currentPage === 'index.php' || $currentPage === '';
$isProductPage = in_array($currentPage, ['product.php', 'productVeiwPage.php'], true);
$isAboutPage = $currentPage === 'about.php';
$isFacilitiesPage = $currentPage === 'facilities.php';
$isContactPage = $currentPage === 'contact.php';
$isQuotePage = $currentPage === 'GetAquotePage.php';
?>

<header class="lucky-header">

    <div class="lucky-header-container">

        <!-- Logo -->
        <a href="index.php" class="lucky-header-logo">
            <img
                src="Assets/Images/Common/logo.png"
                alt="Lucky Oil"
            >
        </a>


        <!-- Desktop Navigation -->
        <nav class="lucky-header-nav">

            <a href="index.php" class="<?php echo $isHomePage ? 'active' : ''; ?>">
                Home
            </a>

            <a href="about.php" class="<?php echo $isAboutPage ? 'active' : ''; ?>">
                About
            </a>

            <a href="product.php" class="<?php echo $isProductPage ? 'active' : ''; ?>">
                Products
            </a>

            <a href="facilities.php" class="<?php echo $isFacilitiesPage ? 'active' : ''; ?>">
                Facilities
            </a>

            <a href="contact.php" class="<?php echo $isContactPage ? 'active' : ''; ?>">
                Contact
            </a>

        </nav>


        <!-- Desktop CTA -->
        <a href="GetAquotePage.php" class="lucky-header-cta<?php echo $isQuotePage ? ' quote-page-cta' : ''; ?>">
            Get a Quote
        </a>


        <!-- Mobile Menu Toggle -->
        <button
            type="button"
            class="lucky-header-menu-label"
            id="lucky-header-menu-button"
            aria-label="Open navigation menu"
            aria-expanded="false"
            aria-controls="lucky-header-mobile-menu"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>


    <!-- Mobile Navigation -->
    <div class="lucky-header-mobile-menu" id="lucky-header-mobile-menu">

        <nav class="lucky-header-mobile-menu-inner">

            <a href="index.php" class="<?php echo $isHomePage ? 'active' : ''; ?>">
                Home
            </a>

            <a href="about.php" class="<?php echo $isAboutPage ? 'active' : ''; ?>">
                About
            </a>

            <a href="product.php" class="<?php echo $isProductPage ? 'active' : ''; ?>">
                Products
            </a>

            <a href="facilities.php" class="<?php echo $isFacilitiesPage ? 'active' : ''; ?>">
                Facilities
            </a>

            <a href="contact.php" class="<?php echo $isContactPage ? 'active' : ''; ?>">
                Contact
            </a>

            <a href="GetAquotePage.php" class="lucky-header-mobile-cta<?php echo $isQuotePage ? ' quote-page-cta' : ''; ?>">
                Get a Quote
            </a>

        </nav>

    </div>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('lucky-header-menu-button');
    const menu = document.getElementById('lucky-header-mobile-menu');

    if (!button || !menu) return;

    function setMenu(open) {
        if (open) {
            menu.classList.add('is-open');
            button.classList.add('is-open');
            button.setAttribute('aria-expanded', 'true');
            button.setAttribute('aria-label', 'Close navigation menu');
        } else {
            menu.classList.remove('is-open');
            button.classList.remove('is-open');
            button.setAttribute('aria-expanded', 'false');
            button.setAttribute('aria-label', 'Open navigation menu');
        }
    }

    button.addEventListener('click', function (event) {
        event.preventDefault();
        event.stopPropagation();
        setMenu(!menu.classList.contains('is-open'));
    });

    menu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            setMenu(false);
        });
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 767) {
            setMenu(false);
        }
    });
});
</script>


<script>
/* =========================================================
   SMART HEADER SHOW / HIDE
   ========================================================= */
document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('.lucky-header');

    if (!header) return;

    let lastScrollY =
        window.pageYOffset || document.documentElement.scrollTop;
    const scrollThreshold = 6;

    function showHeader() {
        header.classList.remove('header-hidden');
        header.classList.add('header-scrolling');
    }

    function hideHeader() {
        header.classList.add('header-hidden');
        header.classList.remove('header-scrolling');
    }

    function onScroll() {
        const currentScrollY =
            window.pageYOffset || document.documentElement.scrollTop;

        if (currentScrollY <= 5) {
            showHeader();
            header.classList.remove('header-scrolling');
            lastScrollY = currentScrollY;
            return;
        }

        const menu = document.getElementById('lucky-header-mobile-menu');
        const menuIsOpen = menu && menu.classList.contains('is-open');

        if (!menuIsOpen && currentScrollY > lastScrollY + scrollThreshold) {
            hideHeader();
        } else if (currentScrollY < lastScrollY - scrollThreshold || menuIsOpen) {
            showHeader();
        } else if (currentScrollY > 5) {
            header.classList.add('header-scrolling');
        }

        lastScrollY = currentScrollY;
    }

    /*
     * Moving the pointer near the top always reveals the navbar.
     */
    document.addEventListener('mousemove', function (event) {
        if (event.clientY <= 80) {
            showHeader();
        }
    }, { passive: true });

    /*
     * Touch devices: touching the screen reveals the navbar.
     */
    document.addEventListener('touchstart', function () {
        showHeader();
    }, { passive: true });

    window.addEventListener('scroll', onScroll, { passive: true });

    /*
     * Keep the header visible while the mobile menu is open.
     */
    const menuButton = document.getElementById('lucky-header-menu-button');

    if (menuButton) {
        menuButton.addEventListener('click', function () {
            showHeader();
        });
    }

    /*
     * Reset the header when resizing.
     */
    window.addEventListener('resize', function () {
        lastScrollY =
            window.pageYOffset || document.documentElement.scrollTop;
        showHeader();
    });

    /* Initial state */
    header.classList.remove('header-hidden', 'header-scrolling');
});
</script>

</header>