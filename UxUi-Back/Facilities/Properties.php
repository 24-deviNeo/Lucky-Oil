<?php include_once __DIR__ . '/../Variable/Facilities/Properties.php'; ?>

<style>
/* =========================================================
   PROCESS BANNERS GRID STYLES (FIXED BADGE OVERFLOW)
   ========================================================= */

.lof-process-banners-grid {
    display: flex;
    flex-direction: column;
    row-gap: 64px;
    margin-top: 40px; /* Ensures top-most card pill is never clipped */
    margin-bottom: 60px;
    width: 100%;
    box-sizing: border-box;
}

.lof-process-banner {
    position: relative;
    width: 1300px;
    max-width: 1300px;
    height: 518px;
    min-height: 518px;
    border-radius: 12px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 40px 48px;
    box-sizing: border-box;
    margin: 0 auto;
    overflow: visible !important; /* Critical: Prevents clipping of top badge */
}

@media (min-width: 901px) and (max-width: 1348px) {
    .lof-process-banner {
        width: calc(100% - 48px);
        height: auto;
        min-height: 0;
        aspect-ratio: 1300 / 518;
    }
}

/* Gradient Overlay */
.lof-process-banner::before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 12px;
    z-index: 1;
    overflow: hidden;
}

/* ODD BANNERS (01, 03, 05, 07): Darker Gradient on Left */
.lof-process-banner:nth-child(odd)::before {
    background: linear-gradient(90deg, rgba(0, 0, 0, 0.85) 15%, rgba(0, 0, 0, 0.45) 55%, rgba(0, 0, 0, 0) 90%);
}

/* EVEN BANNERS (02, 04, 06): Darker Gradient on Right */
.lof-process-banner:nth-child(even)::before {
    background: linear-gradient(270deg, rgba(0, 0, 0, 0.85) 15%, rgba(0, 0, 0, 0.45) 55%, rgba(0, 0, 0, 0) 90%);
}

/* OVERLAPPING BADGE WRAPPER */
.lof-process-top-row {
    position: absolute;
    top: -22px; /* Overlaps top edge cleanly */
    left: 0;
    right: 0;
    z-index: 10;
    display: flex;
    padding: 0 48px;
    box-sizing: border-box;
    pointer-events: none;
}

/* Odd Banners: Badge Pill Positioned Top Left */
.lof-process-banner:nth-child(odd) .lof-process-top-row {
    justify-content: flex-start;
}

/* Even Banners: Badge Pill Positioned Top Right */
.lof-process-banner:nth-child(even) .lof-process-top-row {
    justify-content: flex-end;
}

/* Floating Badge Pill with Rounded Shape */
.lof-process-badge-box {
    pointer-events: auto;
    display: inline-flex;
    align-items: center;
    gap: 16px;
    min-width: 360px;
    height: 52px;
    padding: 0 34px;
    background: #FFFFFF;
    border-radius: 22px;
    width: fit-content;
    box-sizing: border-box;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
}

.lof-process-badge-symbol {
    flex: 0 0 24px;
    width: 24px;
    height: 24px;
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

/* Facility-specific badge icons supplied for the process cards. */
.icon-raw-material {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M4 3h16v4l-3 3v9H7v-9L4 7V3zm3 3 2 2v9h6V8l2-2H7zM9 12h6v2H9z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M4 3h16v4l-3 3v9H7v-9L4 7V3zm3 3 2 2v9h6V8l2-2H7zM9 12h6v2H9z'/%3E%3C/svg%3E");
}

.icon-oil-processing {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M3 4h18l-7 8v7l-4 2v-9L3 4z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M3 4h18l-7 8v7l-4 2v-9L3 4z'/%3E%3C/svg%3E");
}

.icon-storage {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M5 5h14l-2 4v9H7V9L5 5zm3 2 1 2v7h6V9l1-2H8zm1 9h6v2H9v-2z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M5 5h14l-2 4v9H7V9L5 5zm3 2 1 2v7h6V9l1-2H8zm1 9h6v2H9v-2z'/%3E%3C/svg%3E");
}

.icon-blending {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M8 2h8v2h-2v5.2l3.7 7.1A3.8 3.8 0 0 1 14.3 22H9.7a3.8 3.8 0 0 1-3.4-5.7L10 9.2V4H8V2zm4 9.1-4 7.1A1.8 1.8 0 0 0 9.7 20h4.6a1.8 1.8 0 0 0 1.7-1.8l-4-7.1zM9 15h6v2H9v-2z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M8 2h8v2h-2v5.2l3.7 7.1A3.8 3.8 0 0 1 14.3 22H9.7a3.8 3.8 0 0 1-3.4-5.7L10 9.2V4H8V2zm4 9.1-4 7.1A1.8 1.8 0 0 0 9.7 20h4.6a1.8 1.8 0 0 0 1.7-1.8l-4-7.1zM9 15h6v2H9v-2z'/%3E%3C/svg%3E");
}

.icon-packaging {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M4 7h16v13H4V7zm2 2v9h12V9H6zm1-6h10l2 3H5l2-3zm3 2-1 1h6l-1-1h-4z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M4 7h16v13H4V7zm2 2v9h12V9H6zm1-6h10l2 3H5l2-3zm3 2-1 1h6l-1-1h-4z'/%3E%3C/svg%3E");
}

.icon-warehouse {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='m3 10 9-7 9 7v10H3V10zm2 1v7h14v-7l-7-5-7 5zm3 1h2v4H8v-4zm6 0h2v4h-2v-4z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='m3 10 9-7 9 7v10H3V10zm2 1v7h14v-7l-7-5-7 5zm3 1h2v4H8v-4zm6 0h2v4h-2v-4z'/%3E%3C/svg%3E");
}

.icon-quality {
    mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M10 3a7 7 0 1 0 4.9 12L20 20l1-1-5.1-5A7 7 0 0 0 10 3zm0 2a5 5 0 1 1 0 10 5 5 0 0 1 0-10z'/%3E%3C/svg%3E");
    -webkit-mask-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M10 3a7 7 0 1 0 4.9 12L20 20l1-1-5.1-5A7 7 0 0 0 10 3zm0 2a5 5 0 1 1 0 10 5 5 0 0 1 0-10z'/%3E%3C/svg%3E");
}

.lof-process-badge-text {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, sans-serif;
    font-weight: 700;
    font-size: 17px;
    line-height: 22px;
    text-transform: uppercase;
    color: #BF800D;
    letter-spacing: 0.5px;
    white-space: nowrap;
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
    max-width: 540px;
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
    line-height: 42px;
    color: #FFFFFF;
    margin: 0 0 12px 0;
}

.lof-process-desc {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, sans-serif;
    font-weight: 400;
    font-size: 16px;
    line-height: 22px;
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
    gap: 12px;
}

.lof-process-check-item {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    min-height: 42px;
    background: rgba(0, 0, 0, 0.25);
    border: 1px solid #BF800D;
    border-radius: 30px;
    padding: 6px 20px 6px 8px;
    width: fit-content;
    color: #FFFFFF;
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, sans-serif;
    font-weight: 600;
    font-size: 15px;
    line-height: 20px;
    box-sizing: border-box;
    transition: all 0.3s ease;
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
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: #BF800D;
    color: #FFFFFF;
    font-size: 14px;
    font-weight: 900;
    transition: all 0.3s ease;
}

.lof-process-check-item:hover .icon-check {
    background: #FFFFFF !important;
    color: #BF800D !important;
}

@media (hover: none) and (pointer: coarse) {
    .lof-process-check-item:active {
        background: #BF800D !important;
        border-color: #BF800D !important;
    }

    .lof-process-check-item:active .icon-check {
        background: #FFFFFF !important;
        color: #BF800D !important;
    }
}

.lof-process-subtitle {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, sans-serif;
    font-weight: 600;
    font-size: 24px;
    line-height: 28px;
    color: #FFFFFF;
    max-width: 320px;
}

.lof-process-number {
    font-family: 'Momo Trust Sans', 'Plus Jakarta Sans', Arial, sans-serif;
    font-weight: 600;
    font-size: 72px;
    line-height: 72px;
    color: rgba(255, 255, 255, 0.85);
}

/* Mobile Responsive */
@media (max-width: 900px) {
    .lof-process-badge-box {
        min-width: 0;
        max-width: calc(100vw - 96px);
        height: 46px;
        padding: 0 22px;
        gap: 12px;
    }

    .lof-process-badge-symbol {
        flex-basis: 20px;
        width: 20px;
        height: 20px;
    }

    .lof-process-badge-text {
        font-size: 14px;
        line-height: 18px;
        white-space: normal;
    }

    .lof-process-banner {
        width: 100%;
        padding: 40px 24px 24px 24px;
        height: 480px;
        min-height: 480px;
    }

    .lof-process-top-row {
        position: relative;
        top: 0;
        padding: 0;
        margin-bottom: 20px;
    }

    .lof-process-banner:nth-child(even) .lof-process-top-row {
        justify-content: flex-start !important;
    }

    .lof-process-main-content,
    .lof-process-banner:nth-child(even) .lof-process-main-content {
        flex-direction: column !important;
        align-items: flex-start !important;
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
}

@media (max-width: 640px) {
    .lof-process-banner {
        height: auto;
        min-height: 0;
        padding: 56px 18px 24px;
        border-radius: 10px;
        overflow: hidden !important;
    }

    .lof-process-top-row {
        position: relative;
        top: auto;
        left: auto;
        right: auto;
        padding: 0;
        margin-bottom: 0;
    }

    .lof-process-badge-box {
        width: 100%;
        min-width: 0;
        max-width: 100%;
        height: auto;
        min-height: 44px;
        padding: 8px 14px;
        gap: 10px;
        border-radius: 14px;
    }

    .lof-process-badge-symbol {
        flex-basis: 20px;
        width: 20px;
        height: 20px;
    }

    .lof-process-badge-text {
        font-size: 12px;
        line-height: 16px;
    }

    .lof-process-main-content,
    .lof-process-banner:nth-child(even) .lof-process-main-content {
        width: 100%;
        gap: 28px;
        flex-direction: column !important;
        align-items: flex-start !important;
    }

    .lof-process-left-col,
    .lof-process-right-col {
        width: 100%;
        max-width: none;
    }

    .lof-process-title { font-size: 25px; line-height: 31px; }
    .lof-process-desc {
        font-size: 14px;
        line-height: 20px;
        margin-bottom: 18px;
    }
    .lof-process-checklist {
        width: 100%;
        gap: 8px;
    }
    .lof-process-check-item {
        width: 100%;
        min-height: 38px;
        padding: 5px 12px 5px 7px;
        font-size: 12px;
        line-height: 17px;
    }
    .lof-process-check-item .icon-check {
        flex: 0 0 25px;
        width: 25px;
        height: 25px;
        font-size: 12px;
    }

    .lof-process-right-col,
    .lof-process-banner:nth-child(odd) .lof-process-right-col,
    .lof-process-banner:nth-child(even) .lof-process-right-col {
        align-items: flex-start !important;
        text-align: left !important;
    }

    .lof-process-subtitle,
    .lof-process-banner:nth-child(odd) .lof-process-subtitle {
        max-width: none;
        font-size: 19px;
        line-height: 25px;
        text-align: left !important;
    }

    .lof-process-number { font-size: 48px; line-height: 48px; }
}
</style>

<!-- PROCESS BANNERS SECTION -->
<div class="lof-process-banners-grid">
    <?php foreach ($process_steps as $step): ?>
        <div class="lof-process-banner" style="background-image: url('<?php echo htmlspecialchars($step['bg_image']); ?>');">
            
            <div class="lof-process-top-row">
                <div class="lof-process-badge-box">
                    <span class="lof-process-badge-symbol <?php echo htmlspecialchars($step['icon_class']); ?>"></span>
                    <span class="lof-process-badge-text"><?php echo htmlspecialchars($step['badge']); ?></span>
                </div>
            </div>

            <div class="lof-process-main-content">
                <div class="lof-process-left-col">
                    <h3 class="lof-process-title"><?php echo htmlspecialchars($step['title']); ?></h3>
                    <p class="lof-process-desc"><?php echo htmlspecialchars($step['desc']); ?></p>
                    
                    <ul class="lof-process-checklist">
                        <?php foreach ($step['checks'] as $check): ?>
                            <li class="lof-process-check-item">
                                <span class="icon-check">&#10003;</span>
                                <span><?php echo htmlspecialchars($check); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="lof-process-right-col">
                    <span class="lof-process-subtitle"><?php echo htmlspecialchars($step['subtitle']); ?></span>
                    <span class="lof-process-number"><?php echo htmlspecialchars($step['number']); ?></span>
                </div>
            </div>

        </div>
    <?php endforeach; ?>
</div>