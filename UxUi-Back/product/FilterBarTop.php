<style>
/* =========================================================
   LUCKY OIL - FILTER BAR TOP (EXACT FIGMA 1440px x 265px SPEC)
   Figma Top Gap: 130px | Bottom Gap: 32px | Side Margins: 95px
   ========================================================= */

.lof-filter-section {
    width: 100%;
    background-color: #ECECEC; /* Figma: light grey background */
    position: sticky;
    top: var(--lucky-header-height, 100px);
    z-index: 900;
    margin-top: 60px; /* Gap after hero ad frame */
    margin-bottom: 60px; /* Exact 60px gap to product grid */
    border-top: 1px solid rgba(115, 115, 115, 0.20);
    border-bottom: 1px solid rgba(115, 115, 115, 0.20);
    transition: box-shadow 0.3s ease;
}

/* Shadow when stuck */
.lof-filter-section.is-stuck {
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.10);
}

/* Outer frame */
.lof-filter-frame {
    width: 100%;
    max-width: 1440px;
    height: 265px;
    margin: 0 auto;
    padding: 40px 95px 32px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 28px;
}

/* Top Row: Title on Left, Subtitle on Right */
.lof-filter-header-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    gap: 24px;
    margin: 0;
    flex-wrap: wrap;
}

/* Title matching Figma Typography */
.lof-section-title {
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 32px;
    font-weight: 800;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin: 0;
    line-height: 1.1;
}

.lof-title-dark {
    color: #151515;
}

.lof-title-gold {
    color: #BF800D;
}

/* Subtitle matching Figma text specs */
.lof-section-desc {
    max-width: 440px;
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 13px;
    line-height: 1.55;
    color: #737373; 
    text-align: right;
    margin: 0;
    font-weight: 400;
}

/* Bottom Row: Category Pills + Search & Sort Controls */
.lof-filter-controls-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    margin: 0;
    flex-wrap: wrap;
}

/* Category Filter Chips / Pills */
.lof-filter-pills {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
}

.lof-filter-btn {
    position: relative;
    appearance: none;
    -webkit-appearance: none;
    border: 1px solid #737373;
    background: #ECECEC;
    color: #555555;
    padding: 9px 20px;
    border-radius: 8px;
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    cursor: pointer;
    outline: none;
    user-select: none;
    transition: all 0.22s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Filter Hover Animation*/
.lof-filter-btn:hover:not(.active) {
    transform: translateY(-2.5px) scale(1.02);
    border-color: #BF800D;
    color: #BF800D;
    background-color: #fffdf8;
    box-shadow: 0 4px 14px rgba(191, 128, 13, 0.2);
}

.lof-filter-btn:active {
    transform: translateY(0) scale(0.98);
}

/* Active Filter Pill */
.lof-filter-btn.active {
    background-color: #BF800D;
    border-color: #BF800D;
    color: #ffffff;
    box-shadow: 0 3px 10px rgba(191, 128, 13, 0.32);
}

/* Search and Sort Toolbar */
.lof-search-sort-bar {
    display: flex;
    align-items: center;
    gap: 12px;
}

/* Search Box */
.lof-search-wrapper {
    position: relative;
    width: 250px;
    height: 38px;
}

.lof-search-input {
    width: 100%;
    height: 38px;
    padding: 0 36px 0 14px;
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 13px;
    color: #1f2937;
    background: #ECECEC;
    border: 1px solid #737373;
    border-radius: 8px;
    outline: none;
    box-sizing: border-box;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.lof-search-input::placeholder {
    color: #737373;
    font-weight: 400;
}

.lof-search-input:focus {
    border-color: #061d52;
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(6, 29, 82, 0.08);
}

.lof-search-icon {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    width: 16px;
    height: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #737373;
    pointer-events: none;
}

.lof-search-icon svg {
    width: 16px;
    height: 16px;
    stroke: #737373;
}

/* Sort Dropdown Box */
.lof-sort-dropdown-container {
    position: relative;
}

.lof-sort-trigger-btn {
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    width: 140px;
    height: 38px;
    padding: 0 14px;
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: 500;
    color: #374151;
    background: #ECECEC;
    border: 1px solid #737373;
    border-radius: 8px;
    cursor: pointer;
    outline: none;
    user-select: none;
    box-sizing: border-box;
    transition: all 0.22s cubic-bezier(0.4, 0, 0.2, 1);
}

.lof-sort-trigger-btn:hover {
    border-color: #061d52;
    background-color: #f9fafb;
}

.lof-sort-chevron {
    width: 10px;
    height: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.25s ease;
}

.lof-sort-chevron svg {
    stroke: #737373;
}

.lof-sort-dropdown-container.open .lof-sort-chevron {
    transform: rotate(180deg);
}

/* Dropdown Menu Popover */
.lof-sort-menu {
    position: absolute;
    top: calc(100% + 6px);
    right: 0;
    min-width: 170px;
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 6px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
    padding: 6px 0;
    display: none;
    flex-direction: column;
    z-index: 1000;
    animation: lofDropdownSlideDown 0.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}

@keyframes lofDropdownSlideDown {
    from {
        opacity: 0;
        transform: translateY(-8px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.lof-sort-dropdown-container.open .lof-sort-menu {
    display: flex;
}

/* Dropdown Option Items */
.lof-sort-option {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 38px;
    padding: 0 16px;
    font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
    font-size: 13px;
    color: #374151;
    cursor: pointer;
    background: transparent;
    border: none;
    width: 100%;
    text-align: left;
    transition: background 0.15s ease, color 0.15s ease;
}

.lof-sort-option:hover {
    background-color: #f8fafc;
    color: #BF800D;
}

.lof-sort-option.selected {
    font-weight: 700;
    color: #BF800D;
    background-color: #fef8ee;
}

.lof-sort-option-check {
    display: none;
    width: 14px;
    height: 14px;
}

.lof-sort-option.selected .lof-sort-option-check {
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Responsive Breakpoints */
@media (max-width: 1280px) {
    .lof-filter-frame {
        padding: 32px 40px 24px;
        height: auto;
    }
}

@media (max-width: 900px) {
    .lof-filter-section {
        margin-bottom: 30px;
    }
    .lof-filter-frame {
        padding: 24px 20px 20px;
        height: auto;
    }
    .lof-filter-header-row {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
    }
    .lof-section-desc {
        text-align: left;
    }
}

@media (max-width: 640px) {
    .lof-filter-section {
        margin-bottom: 20px;
        margin-top: 24px;
        position: relative;
        top: auto;
    }
    .lof-section-title {
        font-size: 26px;
    }
    .lof-filter-controls-row {
        flex-direction: column;
        align-items: stretch;
        gap: 16px;
    }
    .lof-search-sort-bar {
        width: 100%;
        justify-content: space-between;
    }
    .lof-search-wrapper {
        flex: 1;
    }
    .lof-sort-trigger-btn {
        width: auto;
    }

    .lof-filter-frame {
        padding: 20px 16px 18px;
        gap: 22px;
    }

    .lof-section-desc {
        max-width: none;
        font-size: 12px;
    }

    .lof-filter-pills {
        width: 100%;
        gap: 8px;
    }

    .lof-filter-btn {
        flex: 1 1 auto;
        min-height: 40px;
        padding: 9px 12px;
        font-size: 11px;
    }

    .lof-search-sort-bar {
        flex-direction: column;
        align-items: stretch;
        gap: 10px;
    }

    .lof-search-wrapper,
    .lof-sort-dropdown-container,
    .lof-sort-trigger-btn {
        width: 100%;
    }
}
</style>

<!-- SECTION 2: PRODUCT TOP FILTER & SEARCH BAR -->
<section class="lof-filter-section" id="lofFilterSection">
    <div class="lof-filter-frame">
        
        <!-- Header Row -->
        <div class="lof-filter-header-row">
            <h1 class="lof-section-title">
                <span class="lof-title-dark">OUR</span> <span class="lof-title-gold">PRODUCTS</span>
            </h1>
            <p class="lof-section-desc">
                Discover our range of high-quality edible oils, fats, margarines and customised food ingredients.
            </p>
        </div>

        <!-- Filter Controls Row -->
        <div class="lof-filter-controls-row">
            
            <!-- Category Filter Buttons with Hover Animation -->
            <div class="lof-filter-pills" id="lofCategoryPills">
                <button type="button" class="lof-filter-btn active" data-category="all">ALL PRODUCTS</button>
                <button type="button" class="lof-filter-btn" data-category="cooking-oil">COOKING OIL</button>
                <button type="button" class="lof-filter-btn" data-category="margarine">MAGARINE & SPREADS</button>
                <button type="button" class="lof-filter-btn" data-category="fat-ghee">FAT & GHEE</button>
            </div>

            <!-- Search and Sort Toolbar -->
            <div class="lof-search-sort-bar">
                
                <!-- Search Box with Clean Vector SVG Icon -->
                <div class="lof-search-wrapper">
                    <input 
                        type="text" 
                        id="lofSearchInput" 
                        class="lof-search-input" 
                        placeholder="Search"
                    >
                    <span class="lof-search-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="7.5"></circle>
                            <line x1="21" y1="21" x2="16.5" y2="16.5"></line>
                        </svg>
                    </span>
                </div>

                <!-- Custom Interactive "Sort by" Dropdown Menu -->
                <div class="lof-sort-dropdown-container" id="lofSortDropdown">
                    <button type="button" class="lof-sort-trigger-btn" id="lofSortTrigger">
                        <span id="lofSortCurrentLabel">Popularity</span>
                        <span class="lof-sort-chevron">
                            <svg viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 1L5 5L9 1"/>
                            </svg>
                        </span>
                    </button>

                    <!-- Dropdown Popover List -->
                    <div class="lof-sort-menu" id="lofSortMenu">
                        <button type="button" class="lof-sort-option selected" data-value="popularity">
                            <span>Popularity</span>
                            <span class="lof-sort-option-check">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#BF800D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                        </button>
                        <button type="button" class="lof-sort-option" data-value="newest">
                            <span>Newest</span>
                            <span class="lof-sort-option-check">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#BF800D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                        </button>
                        <button type="button" class="lof-sort-option" data-value="name_asc">
                            <span>Name: A to Z</span>
                            <span class="lof-sort-option-check">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#BF800D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                        </button>
                        <button type="button" class="lof-sort-option" data-value="name_desc">
                            <span>Name: Z to A</span>
                            <span class="lof-sort-option-check">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#BF800D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- Scripts: Sticky Shadow, Filter Action, and Custom Sort Menu -->
<script>
(function() {
    const filterSec = document.getElementById('lofFilterSection');
    if (filterSec) {
        const updateStickyState = () => {
            const header = document.querySelector('.lucky-header');
            const headerHeight = header ? header.offsetHeight : (parseFloat(
                getComputedStyle(document.documentElement)
                    .getPropertyValue('--lucky-header-height')
            ) || 100);

            const rect = filterSec.getBoundingClientRect();
            filterSec.classList.toggle(
                'is-stuck',
                rect.top <= headerHeight + 2
            );
        };

        updateStickyState();
        window.addEventListener('scroll', updateStickyState, { passive: true });
        window.addEventListener('resize', updateStickyState);
    }

    const sortDropdown = document.getElementById('lofSortDropdown');
    const sortTrigger = document.getElementById('lofSortTrigger');
    const sortLabel = document.getElementById('lofSortCurrentLabel');
    const sortOptions = document.querySelectorAll('.lof-sort-option');
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('.lof-filter-btn');
        const searchInput = document.getElementById('lofSearchInput');
        const grid = document.getElementById('lofProductsGrid');
        const cards = Array.from(document.querySelectorAll('.lof-product-card'));
        let currentCategory = 'all';
        let searchQuery = '';

        cards.forEach((card, index) => {
            card.dataset.originalIndex = index;
        });

        function filterProducts() {
            cards.forEach(card => {
                const category = card.getAttribute('data-category');
                const titleElement = card.querySelector('.lof-card-title');
                const descElement = card.querySelector('.lof-card-desc');
                const title = titleElement ? titleElement.textContent.toLowerCase() : '';
                const desc = descElement ? descElement.textContent.toLowerCase() : '';
                const matchesCategory = currentCategory === 'all' || category === currentCategory;
                const matchesSearch = !searchQuery || title.includes(searchQuery) || desc.includes(searchQuery);

                card.style.display = matchesCategory && matchesSearch ? 'block' : 'none';
            });
        }

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(filterBtn => filterBtn.classList.remove('active'));
                btn.classList.add('active');
                currentCategory = btn.getAttribute('data-category') || 'all';
                filterProducts();
            });
        });

        if (searchInput) {
            searchInput.addEventListener('input', event => {
                searchQuery = event.target.value.trim().toLowerCase();
                filterProducts();
            });
        }

        document.addEventListener('lofSortChanged', event => {
            const sortType = event.detail ? event.detail.sortValue : '';
            const sortedCards = [...cards];

            if (sortType === 'name_asc' || sortType === 'name_desc') {
                sortedCards.sort((a, b) => {
                    const titleA = a.querySelector('.lof-card-title');
                    const titleB = b.querySelector('.lof-card-title');
                    const comparison = (titleA ? titleA.textContent : '').localeCompare(
                        titleB ? titleB.textContent : ''
                    );
                    return sortType === 'name_desc' ? -comparison : comparison;
                });
            } else if (sortType === 'newest') {
                sortedCards.reverse();
            } else {
                sortedCards.sort((a, b) => {
                    return parseInt(a.dataset.originalIndex, 10) - parseInt(b.dataset.originalIndex, 10);
                });
            }

            if (grid) {
                sortedCards.forEach(card => grid.appendChild(card));
            }
        });
    });

    if (sortDropdown && sortTrigger) {
        sortTrigger.addEventListener('click', (e) => {
            e.stopPropagation();
            sortDropdown.classList.toggle('open');
        });

        sortOptions.forEach(option => {
            option.addEventListener('click', function(e) {
                e.stopPropagation();
                sortOptions.forEach(opt => opt.classList.remove('selected'));
                this.classList.add('selected');
                
                const selectedText = this.querySelector('span:first-child').innerText;
                const sortValue = this.getAttribute('data-value');
                sortLabel.innerText = selectedText;
                sortDropdown.classList.remove('open');

                document.dispatchEvent(new CustomEvent('lofSortChanged', {
                    detail: { sortValue: sortValue }
                }));
            });
        });

        document.addEventListener('click', (e) => {
            if (!sortDropdown.contains(e.target)) {
                sortDropdown.classList.remove('open');
            }
        });
    }
})();
</script>
