<style>
/* =========================================================
   LUCKY OIL - FULL PROPERTIES PAGE STYLES
   ========================================================= */

/* Main Section Container */
.lof-fac-overview-section {
    width: 100%;
    background-color: #ffffff;
    margin-top: 60px;
    margin-bottom: 0;
    display: flex;
    justify-content: center;
}

.lof-fac-overview-frame {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 70px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    gap: 32px;
}

/* Badge Label */
.lof-fac-overview-label {
    display: inline-flex;
    align-items: center;
    padding: 5px 12px;
    gap: 10px;
    border-radius: 6px;
    background: rgba(1, 23, 72, 0.08);
    box-sizing: border-box;
    width: fit-content;
    height: 29px;
}

.lof-fac-overview-label-text {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-weight: 600;
    font-size: 15px;
    line-height: 18px;
    color: #011748;
    text-transform: uppercase;
    white-space: nowrap;
}

/* Header Row */
.lof-fac-overview-header-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 40px;
    flex-wrap: wrap;
}

.lof-fac-overview-title {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-weight: 500;
    font-size: 42px;
    line-height: 50px;
    text-transform: uppercase;
    margin: 0;
    max-width: 560px;
}

.lof-fac-overview-title .txt-dark { color: #272727; }
.lof-fac-overview-title .txt-gold { color: #BF800D; }

.lof-fac-overview-desc {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-weight: 400;
    font-size: 16px;
    line-height: 18px;
    color: #939393;
    max-width: 492px;
    margin: 0;
    padding-top: 8px;
}

/* Feature Cards Grid (4 Top Cards) */
.lof-fac-overview-cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
}

.lof-fac-overview-card {
    position: relative;
    width: 100%;
    min-height: 151px;
    background: #6B6B6B;
    border-radius: 10px;
    padding: 48px 34px 20px 24px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    cursor: pointer;
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    box-sizing: border-box;
}

.lof-fac-overview-card::before {
    content: "";
    position: absolute;
    top: 18px;
    right: 18px;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: #A6A6A6;
    transition: all 0.35s ease;
}

.lof-fac-overview-card:hover {
    transform: translateY(-5px) scale(1.02);
    background: #001647;
    box-shadow: 0 10px 28px rgba(0, 22, 71, 0.28);
}

.lof-fac-overview-card:hover::before {
    background: #FFFFFF;
    box-shadow: inset 0 0 0 3px #001647;
}

.lof-fac-overview-card:hover::after {
    content: "\2713";
    position: absolute;
    top: 18px;
    right: 18px;
    width: 34px;
    height: 34px;
    color: #001647;
    font-size: 20px;
    font-weight: 700;
    line-height: 34px;
    text-align: center;
}

.lof-fac-overview-card-text {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-weight: 400;
    font-size: 18px;
    line-height: 24px;
    color: #FFFFFF;
    margin: 0;
}

/* =========================================================
   PROCESS BANNERS - ALTERNATING POSITIONS (EVEN & ODD)
   ========================================================= */

.lof-process-banners-grid {
    display: flex;
    flex-direction: column;
    gap: 24px;
    margin-top: 20px;
}

.lof-process-banner {
    position: relative;
    width: 100%;
    max-width: 1300px;
    min-height: 500px;
    border-radius: 12px;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 40px 48px;
    box-sizing: border-box;
    margin: 0 auto;
}

/* Gradient Overlay */
.lof-process-banner::before {
    content: "";
    position: absolute;
    inset: 0;
    z-index: 1;
}

/* ODD BANNERS (01, 03, 05, 07): Darker on Left side */
.lof-process-banner:nth-child(odd)::before {
    background: linear-gradient(90deg, rgba(0, 0, 0, 0.82) 10%, rgba(0, 0, 0, 0.45) 55%, rgba(0, 0, 0, 0) 88%);
}

/* EVEN BANNERS (02, 04, 06): Darker on Right side */
.lof-process-banner:nth-child(even)::before {
    background: linear-gradient(270deg, rgba(0, 0, 0, 0.82) 10%, rgba(0, 0, 0, 0.45) 55%, rgba(0, 0, 0, 0) 88%);
}

/* TOP ROW - BADGE POSITIONING */
.lof-process-top-row {
    position: relative;
    z-index: 2;
    display: flex;
    width: 100%;
}

/* Odd Banners: Badge on Top Left */
.lof-process-banner:nth-child(odd) .lof-process-top-row {
    justify-content: flex-start;
}

/* Even Banners: Badge on Top Right */
.lof-process-banner:nth-child(even) .lof-process-top-row {
    justify-content: flex-end;
}

/* Badge Box */
.lof-process-badge-box {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    height: 38px;
    padding: 8px 18px;
    background: #FFFFFF;
    border-radius: 10px;
    width: fit-content;
    box-sizing: border-box;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.lof-process-badge-symbol {
    width: 18px;
    height: 16px;
    background-color: #BF800D;
    display: inline-block;
    mask-size: contain;
    mask-repeat: no-repeat;
    mask-position: center;
    -webkit-mask-size: contain;
    -webkit-mask-repeat: no-repeat;
    -webkit-mask-position: center;
}

/* Custom SVG Icons for Badge Pill */
.icon-raw-material {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M19 7h-3V6a3 3 0 0 0-3-3H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V10a3 3 0 0 0-3-3zm-5-2a1 1 0 0 1 1 1v1H4V6a1 1 0 0 1 1-1h9z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M19 7h-3V6a3 3 0 0 0-3-3H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V10a3 3 0 0 0-3-3zm-5-2a1 1 0 0 1 1 1v1H4V6a1 1 0 0 1 1-1h9z'/%3E%3C/svg%3E");
}

.icon-oil-processing {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 16h-2v-2h2v2zm0-4h-2V7h2v7z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 16h-2v-2h2v2zm0-4h-2V7h2v7z'/%3E%3C/svg%3E");
}

.icon-storage {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M19 11h-2V7c0-1.1-.9-2-2-2H9C7.9 5 7 5.9 7 7v4H5c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-6c0-1.1-.9-2-2-2zm-6 0H11V7h2v4z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M19 11h-2V7c0-1.1-.9-2-2-2H9C7.9 5 7 5.9 7 7v4H5c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-6c0-1.1-.9-2-2-2zm-6 0H11V7h2v4z'/%3E%3C/svg%3E");
}

.icon-blending {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M18 22H6c-1.1 0-2-.9-2-2 0-.2.05-.4.12-.58L9 8.35V4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1h-1v4.35l4.88 11.07c.12.27.12.58.02.86-.1.28-.32.52-.6.62-.1.03-.2.05-.3.05z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M18 22H6c-1.1 0-2-.9-2-2 0-.2.05-.4.12-.58L9 8.35V4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1h-1v4.35l4.88 11.07c.12.27.12.58.02.86-.1.28-.32.52-.6.62-.1.03-.2.05-.3.05z'/%3E%3C/svg%3E");
}

.icon-packaging {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z'/%3E%3C/svg%3E");
}

.icon-warehouse {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M12 3L2 12h3v8h14v-8h3L12 3zm1 15h-2v-4h2v4z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M12 3L2 12h3v8h14v-8h3L12 3zm1 15h-2v-4h2v4z'/%3E%3C/svg%3E");
}

.icon-quality {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z'/%3E%3C/svg%3E");
}

.lof-process-badge-text {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, sans-serif;
    font-weight: 700;
    font-size: 15px;
    line-height: 18px;
    text-transform: uppercase;
    color: #BF800D;
}

/* MAIN CONTENT CONTAINER */
.lof-process-main-content {
    position: relative;
    z-index: 2;
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    gap: 30px;
    width: 100%;
}

/* EVEN BANNERS: Flip Left & Right Columns Position */
.lof-process-banner:nth-child(even) .lof-process-main-content {
    flex-direction: row-reverse;
}

/* Column Wrappers */
.lof-process-left-col {
    max-width: 528px;
    display: flex;
    flex-direction: column;
}

.lof-process-right-col {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

/* Odd Banners Alignment */
.lof-process-banner:nth-child(odd) .lof-process-right-col {
    align-items: flex-end;
    text-align: right;
}

.lof-process-banner:nth-child(odd) .lof-process-subtitle {
    text-align: right;
}

/* Even Banners Alignment */
.lof-process-banner:nth-child(even) .lof-process-right-col {
    align-items: flex-start;
    text-align: left;
}

.lof-process-banner:nth-child(even) .lof-process-subtitle {
    text-align: left;
}

/* Text Styling */
.lof-process-title {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, sans-serif;
    font-weight: 600;
    font-size: 34px;
    line-height: 42.5px;
    color: #FFFFFF;
    margin: 0 0 12px 0;
}

.lof-process-desc {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, sans-serif;
    font-weight: 400;
    font-size: 16px;
    line-height: 18px;
    color: #FFFFFF;
    margin: 0 0 24px 0;
}

/* Checklist Items */
.lof-process-checklist {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.lof-process-check-item {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    min-height: 38px;
    background: rgba(0, 0, 0, 0.35);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 20px;
    padding: 6px 18px 6px 8px;
    width: fit-content;
    color: #FFFFFF;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, sans-serif;
    font-weight: 600;
    font-size: 15px;
    line-height: 18.79px;
    box-sizing: border-box;
    transition: background-color 0.3s ease, border-color 0.3s ease;
    cursor: pointer;
    user-select: none;
}

.lof-process-check-item:hover {
    background: #BF800D !important;
    border-color: #BF800D !important;
}

.lof-process-check-item .icon-check {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background: #FFFFFF;
    color: #BF800D;
    font-size: 13px;
    font-weight: 900;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.lof-process-check-item:hover .icon-check {
    background: #FFFFFF !important;
    color: #BF800D !important;
}

.lof-process-subtitle {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, sans-serif;
    font-weight: 600;
    font-size: 24px;
    line-height: 23px;
    color: #FFFFFF;
    max-width: 283px;
}

.lof-process-number {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, sans-serif;
    font-weight: 600;
    font-size: 64px;
    line-height: 64px;
    color: rgba(255, 255, 255, 0.75);
}

/* =========================================================
   CAPACITY SECTION STYLES
   ========================================================= */

.lof-fac-capacity-section {
    width: 100%;
    background-color: #ffffff;
    margin-top: 0;
    margin-bottom: 60px;
    display: flex;
    justify-content: center;
}

.lof-fac-capacity-frame {
    width: 100%;
    max-width: 1440px;
    height: auto;
    margin: 0 auto;
    padding: 0;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
}

.lof-fac-capacity-viewport {
    position: relative;
    width: 100%;
    height: 518px;
    border-radius: 0 0 12px 12px;
    overflow: hidden;
    background-color: #061d52;
    box-shadow: 0 12px 32px rgba(6, 29, 82, 0.12);
}

.lof-fac-capacity-bg {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
}

.lof-fac-capacity-viewport:hover .lof-fac-capacity-bg {
    transform: scale(1.04);
}

@media (hover: none) and (pointer: coarse) {
    .lof-fac-overview-card:active {
        transform: translateY(-5px) scale(1.02);
        background: #001647;
        box-shadow: 0 10px 28px rgba(0, 22, 71, 0.28);
    }

    .lof-fac-overview-card:active::before {
        background: #FFFFFF;
        box-shadow: inset 0 0 0 3px #001647;
    }

    .lof-fac-overview-card:active::after {
        content: "\2713";
        position: absolute;
        top: 18px;
        right: 18px;
        width: 34px;
        height: 34px;
        color: #001647;
        font-size: 20px;
        font-weight: 700;
        line-height: 34px;
        text-align: center;
    }

    .lof-fac-capacity-viewport:active .lof-fac-capacity-bg {
        transform: scale(1.04);
    }
}

.lof-fac-capacity-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        180deg,
        #FEFEFE 0%,
        rgba(254, 254, 254, 0.04) 58%,
        rgba(254, 254, 254, 0.04) 100%
    );
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 40px 70px;
    box-sizing: border-box;
}

.lof-fac-capacity-top-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.lof-fac-capacity-info {
    width: 500px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 20px;
}

.lof-fac-production-capacity-button {
    width: 230px;
    height: 29px;
    padding: 10px;
    gap: 10px;
    border-radius: 10px;
    box-sizing: border-box;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(1, 23, 72, 0.10);
    color: #011748;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 15px;
    font-weight: 600;
    line-height: 18px;
    text-align: center;
}

.lof-fac-capacity-description {
    width: 480px;
    margin: 0;
    color: #272727;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 15px;
    font-weight: 400;
    line-height: 18px;
}

.lof-fac-capacity-title-block {
    text-align: right;
    width: 495px;
    height: 100px;
}

.lof-fac-capacity-title {
    width: 495px;
    height: 100px;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 40px;
    font-weight: 500;
    line-height: 50px;
    text-align: right;
    text-transform: uppercase;
    color: #151515;
    margin: 0;
}

.lof-fac-capacity-title .dark-txt { color: #061d52; }
.lof-fac-capacity-title .gold-txt { color: #BF800D; }

.lof-fac-capacity-bottom-row {
    position: absolute;
    left: 50%;
    bottom: 102px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0;
    width: 1126px;
    height: 50px;
    max-width: calc(100% - 48px);
    margin: 0;
    transform: translateX(-50%);
    flex-wrap: wrap;
}

.lof-fac-capacity-stat-box {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 0 18px;
    background: transparent;
    border: 0;
    border-radius: 0;
    flex: 0 1 auto;
    min-width: 0;
    cursor: default;
}

.lof-fac-capacity-stat-box + .lof-fac-capacity-stat-box {
    border-left: 3px solid #FFFFFF;
}

.lof-fac-capacity-num {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 24px;
    font-weight: 600;
    color: #FFFFFF;
    line-height: 29px;
}

.lof-fac-capacity-lbl {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 15px;
    font-weight: 600;
    color: #FFFFFF;
    line-height: 18px;
    margin-top: 0;
}

.lof-fac-capacity-lbl-production {
    width: 186px;
    height: 18px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-weight: 600;
    font-size: 15px;
    line-height: 18px;
    text-align: center;
    color: #FFFFFF;
}

.lof-fac-capacity-bottom-row .lof-fac-capacity-num,
.lof-fac-capacity-bottom-row .lof-fac-capacity-lbl {
    opacity: 0;
    transform: translateY(8px);
    transition: opacity 0.45s ease, transform 0.45s ease;
}

.lof-fac-capacity-bottom-row.is-counted .lof-fac-capacity-num,
.lof-fac-capacity-bottom-row.is-counted .lof-fac-capacity-lbl {
    opacity: 1;
    transform: translateY(0);
}

/* =========================================================
   RESPONSIVE STYLES
   ========================================================= */

@media (max-width: 1280px) {
    .lof-fac-overview-frame { padding: 0 30px; }
    .lof-fac-capacity-frame { padding: 0; }
    .lof-fac-capacity-viewport { height: 480px; }
}

@media (max-width: 900px) {
    .lof-fac-overview-cards { grid-template-columns: repeat(2, 1fr); }
    .lof-fac-overview-title { font-size: 30px; }
    .lof-fac-overview-header-row { flex-direction: column; gap: 16px; }

    /* Stack all banners linearly on smaller screens */
    .lof-process-main-content,
    .lof-process-banner:nth-child(even) .lof-process-main-content {
        flex-direction: column !important;
        align-items: flex-start !important;
    }

    .lof-process-banner:nth-child(even) .lof-process-top-row {
        justify-content: flex-start !important;
    }

    .lof-process-right-col,
    .lof-process-banner:nth-child(odd) .lof-process-right-col {
        align-items: flex-start !important;
        text-align: left !important;
    }

    .lof-process-subtitle,
    .lof-process-banner:nth-child(odd) .lof-process-subtitle {
        text-align: left !important;
    }

    .lof-fac-capacity-section { margin-top: 0; margin-bottom: 30px; }
    .lof-fac-capacity-viewport { height: 440px; }
    .lof-fac-capacity-overlay { padding: 28px 24px; }
    .lof-fac-capacity-top-row { align-items: flex-start; gap: 24px; }
    .lof-fac-capacity-info, .lof-fac-capacity-description { width: 100%; }
    .lof-fac-capacity-title { width: auto; height: auto; font-size: 24px; line-height: 30px; }
}

@media (max-width: 640px) {
    .lof-fac-overview-frame {
        padding: 0 16px;
    }

    .lof-fac-overview-cards { grid-template-columns: 1fr; }
    .lof-fac-overview-title { font-size: 24px; }
    .lof-process-title { font-size: 26px; line-height: 32px; }
    .lof-process-number { font-size: 48px; line-height: 48px; }
    .lof-fac-capacity-viewport { height: 520px; }
    .lof-fac-capacity-overlay { padding: 20px 16px; }
    .lof-fac-capacity-top-row { flex-direction: column; }
    .lof-fac-capacity-info,
    .lof-fac-capacity-description,
    .lof-fac-capacity-title-block,
    .lof-fac-capacity-title {
        width: 100%;
        max-width: 100%;
    }
    .lof-fac-capacity-title {
        height: auto;
        font-size: 27px;
        line-height: 34px;
        text-align: left;
    }
    .lof-fac-capacity-title-block {
        height: auto;
        margin-top: 18px;
    }
    .lof-fac-capacity-description {
        font-size: 13px;
        line-height: 18px;
    }
    .lof-fac-capacity-bottom-row {
        width: calc(100% - 32px);
        height: auto;
        max-width: none;
        bottom: 16px;
        min-height: 0;
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 0;
    }
    .lof-fac-capacity-stat-box {
        min-height: 54px;
        padding: 8px 10px;
        align-items: center;
        text-align: center;
    }
    .lof-fac-capacity-stat-box + .lof-fac-capacity-stat-box {
        border-left: 0;
        border-top: 0;
    }
    .lof-fac-capacity-stat-box:nth-child(n + 3) {
        border-top: 2px solid #FFFFFF;
    }
    .lof-fac-capacity-stat-box:nth-child(even) {
        border-right: 2px solid #FFFFFF;
    }
    .lof-fac-capacity-num {
        font-size: 19px;
        line-height: 24px;
    }
    .lof-fac-capacity-lbl,
    .lof-fac-capacity-lbl-production {
        width: auto;
        height: auto;
        font-size: 11px;
        line-height: 15px;
    }
}
</style>

<?php include_once __DIR__ . '/../Variable/Facilities/Facility.php'; ?>

<!-- 1. FACTORY OVERVIEW MAIN SECTION -->
<section class="lof-fac-overview-section">
    <div class="lof-fac-overview-frame">

        <div class="lof-fac-overview-label">
            <span class="lof-fac-overview-label-text">FACTORY OVERVIEW</span>
        </div>

        <div class="lof-fac-overview-header-row">
            <h2 class="lof-fac-overview-title">
                <span class="txt-dark">A</span> <span class="txt-gold">PURPOSE-BUILT</span><br>
                <span class="txt-dark">MANUFACTURING</span> <span class="txt-gold">FACILITY</span>
            </h2>
            <p class="lof-fac-overview-desc">
                Our facility was designed from the ground up around one goal: consistent, hygienic, high-volume production of premium edible oils and fats. Every zone — from intake to dispatch — is connected by automated systems that keep quality, safety and traceability at the centre of every batch.
            </p>
        </div>

        <div class="lof-fac-overview-cards">
            <?php foreach ($facility_overview_cards as $card_text): ?>
                <div class="lof-fac-overview-card">
                    <p class="lof-fac-overview-card-text"><?php echo htmlspecialchars($card_text, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- 3. CAPACITY SECTION -->
<section class="lof-fac-capacity-section">
    <div class="lof-fac-capacity-frame">
        <div class="lof-fac-capacity-viewport">
            <img 
                src="<?php echo htmlspecialchars($facility_capacity['image'], ENT_QUOTES, 'UTF-8'); ?>" 
                alt="<?php echo htmlspecialchars($facility_capacity['image_alt'], ENT_QUOTES, 'UTF-8'); ?>" 
                class="lof-fac-capacity-bg"
            >
            
            <div class="lof-fac-capacity-overlay">
                <div class="lof-fac-capacity-top-row">
                    <div class="lof-fac-capacity-info">
                        <span class="lof-fac-production-capacity-button"><?php echo htmlspecialchars($facility_capacity['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <p class="lof-fac-capacity-description"><?php echo htmlspecialchars($facility_capacity['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                    <div class="lof-fac-capacity-title-block">
                        <h2 class="lof-fac-capacity-title">
                            <span class="dark-txt"><?php echo htmlspecialchars($facility_capacity['title_dark'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <span class="gold-txt"><?php echo htmlspecialchars($facility_capacity['title_gold'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </h2>
                    </div>
                </div>

                <div class="lof-fac-capacity-bottom-row">
                    <?php foreach ($facility_capacity['stats'] as $stat): ?>
                        <div class="lof-fac-capacity-stat-box">
                            <span
                                class="lof-fac-capacity-num"
                                <?php if (isset($stat['count'])): ?>
                                    data-countdown="<?php echo (int) $stat['count']; ?>"
                                    data-count-suffix="<?php echo htmlspecialchars($stat['suffix'], ENT_QUOTES, 'UTF-8'); ?>"
                                <?php endif; ?>
                            ><?php echo htmlspecialchars($stat['value'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <span class="lof-fac-capacity-lbl<?php echo isset($stat['label_class']) ? ' ' . htmlspecialchars($stat['label_class'], ENT_QUOTES, 'UTF-8') : ''; ?>"><?php echo htmlspecialchars($stat['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Stat Counter Animation
    const statsRow = document.querySelector('.lof-fac-capacity-bottom-row');
    if (statsRow) {
        const startCountdown = () => {
            statsRow.classList.add('is-counted');
            statsRow.querySelectorAll('[data-countdown]').forEach((counter) => {
                const target = Number(counter.dataset.countdown);
                const suffix = counter.dataset.countSuffix || '';
                const duration = 1200;
                const start = performance.now();

                const update = (now) => {
                    const progress = Math.min((now - start) / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    counter.textContent = `${Math.round(target * eased)}${suffix}`;
                    if (progress < 1) {
                        requestAnimationFrame(update);
                    }
                };

                requestAnimationFrame(update);
            });
        };

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries, instance) => {
                if (entries.some((entry) => entry.isIntersecting)) {
                    startCountdown();
                    instance.disconnect();
                }
            }, { threshold: 0.25 });
            observer.observe(statsRow);
        } else {
            startCountdown();
        }
    }
});
</script>