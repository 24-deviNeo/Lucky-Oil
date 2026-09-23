<?php include_once __DIR__ . '/../Variable/productViewPage/SpecificationTable.php'; ?>

<style>
/* ==========================================
   SECTION 3: SPECS & REVIEWS STYLES
   ========================================== */
.lof-specs-reviews-section {
    width: 100%;
    background-color: #ffffff;
    padding: 74px 0 86px;
}

.lof-specs-container {
    width: min(1295px, calc(100% - 136px));
    max-width: 1295px;
    margin: 0 auto;
    padding: 0;
    box-sizing: border-box;
}

/* Specs Table */
.lof-specs-table {
    width: 100%;
    table-layout: fixed;
    border-collapse: collapse;
    margin: 0 0 78px;
}

.lof-specs-table th {
    background-color: #061d52;
    color: #ffffff;
    font-family: Arial, sans-serif;
    font-size: 12px;
    font-weight: 700;
    text-align: left;
    height: 48px;
    padding: 0 22px;
}

.lof-specs-table td {
    font-family: Arial, sans-serif;
    font-size: 12px;
    color: #374151;
    height: 66px;
    padding: 0 22px;
    border-bottom: 1px solid #f1f5f9;
}

.lof-specs-table tr:nth-child(even) {
    background-color: #FAF8F3;
}

/* Reviews Grid */
.lof-reviews-header {
    font-family: Arial, sans-serif;
    font-size: 18px;
    font-weight: 700;
    color: #1f2937;
    margin: 0 0 22px;
}

.lof-reviews-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
    margin-bottom: 18px;
}

.lof-review-card {
    background-color: #f9fafb;
    min-height: 172px;
    border-radius: 0;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.lof-review-quote {
    font-family: Arial, sans-serif;
    font-size: 12px;
    line-height: 1.45;
    color: #4b5563;
    margin-bottom: 14px;
}

.lof-reviewer-info {
    display: flex;
    align-items: center;
    gap: 10px;
}

.lof-reviewer-avatar {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    object-fit: cover;
}

.lof-reviewer-name {
    font-family: Arial, sans-serif;
    font-size: 12px;
    font-weight: 700;
    color: #1f2937;
}

.lof-reviewer-stars {
    color: #eab308;
    font-size: 11px;
}

.lof-read-more-wrapper {
    text-align: right;
    margin-top: 12px;
}

.lof-read-more-link {
    font-family: Arial, sans-serif;
    font-size: 12px;
    font-weight: 600;
    color: #4b5563;
    text-decoration: none;
}

@media (max-width: 900px) {
    .lof-specs-reviews-section {
        padding: 40px 20px 56px;
    }

    .lof-specs-container {
        width: 100%;
        padding: 0;
    }

    .lof-specs-table th,
    .lof-specs-table td {
        padding: 12px 14px;
        height: auto;
    }

    .lof-reviews-grid { grid-template-columns: 1fr; }
}

@media (max-width: 600px) {
    .lof-specs-reviews-section {
        padding: 30px 12px 44px;
    }

    .lof-specs-table {
        font-size: 11px;
    }

    .lof-specs-table th,
    .lof-specs-table td {
        padding: 10px 9px;
        overflow-wrap: anywhere;
    }

    .lof-reviews-header {
        font-size: 16px;
    }
}
</style>




<div class="lof-specs-reviews-section">
    <div class="lof-specs-container">
        
        <!-- Specifications Table -->
        <table class="lof-specs-table">
            <thead>
                <tr>
                    <th style="width: 30%;">Attribute</th>
                    <th style="width: 70%;">Details</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($specs as $attr => $detail): ?>
                    <tr>
                        <td><strong><?= $attr ?></strong></td>
                        <td><?= $detail ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<script>
// Review slider or lazy loading scripts can be placed here
</script>