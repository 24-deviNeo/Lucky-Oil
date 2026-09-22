<!DOCTYPE html>
<?php include_once './Imports/Need/Session_Setup.php'; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/images/common/logo.png">
    <title>Facilities - Lucky Oil &amp; Fats</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
            background-color: #ffffff;
            color: #1f2937;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
    </style>
    <style>
        @media (hover: none) and (pointer: coarse) {
            .lof-fac-stat-card.is-touched {
                transform: translateY(-4px) scale(1.04);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
                border-color: #BF800D;
            }

            .lof-fac-overview-card.is-touched {
                transform: translateY(-5px) scale(1.02);
                background: #001647;
                box-shadow: 0 10px 28px rgba(0, 22, 71, 0.28);
            }

            .lof-fac-overview-card.is-touched::before {
                background: #FFFFFF;
                box-shadow: inset 0 0 0 3px #001647;
            }

            .lof-fac-overview-card.is-touched::after {
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

            .lof-process-check-item.is-touched {
                background: #BF800D !important;
                border-color: #BF800D !important;
            }

            .lof-process-check-item.is-touched .icon-check {
                background: #FFFFFF !important;
                color: #BF800D !important;
            }

            .lof-fac-hero-viewport.is-touched .lof-fac-hero-bg,
            .lof-fac-capacity-viewport.is-touched .lof-fac-capacity-bg,
            .lof-facility-visit.is-touched .lof-facility-visit-image {
                transform: scale(1.04);
            }

            .lof-fac-tour-btn.is-touched {
                background: #BF800D;
                border-color: #BF800D;
                color: #FFFFFF;
                transform: translateY(-3px) scale(1.02);
                box-shadow: 0 8px 22px rgba(191, 128, 13, 0.45);
            }

            .lof-fac-contact-btn.is-touched {
                background: #FFFFFF;
                border-color: #FFFFFF;
                color: #151515;
                transform: translateY(-3px);
            }
        }
    </style>
</head>
<body>

    <?php 
    include_once './UxUi-Back/Common/Header.php'; 
    include_once './UxUi-Back/Facilities/Hero.php'; 
    include_once './UxUi-Back/Facilities/Facility.php'; 
    include_once './UxUi-Back/Facilities/Properties.php';
    include_once './UxUi-Back/Facilities/OurFacilty.php';
    include_once './UxUi-Back/Common/Footer.php'; 

    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (!window.matchMedia('(hover: none) and (pointer: coarse)').matches) {
                return;
            }

            const interactiveSelectors = [
                '.lof-fac-stat-card',
                '.lof-fac-overview-card',
                '.lof-process-check-item',
                '.lof-fac-hero-viewport',
                '.lof-fac-capacity-viewport',
                '.lof-facility-visit',
                '.lof-fac-tour-btn',
                '.lof-fac-contact-btn'
            ];

            document.addEventListener('click', function (event) {
                const target = event.target.closest(interactiveSelectors.join(','));

                if (!target) {
                    return;
                }

                if (target.matches('a')) {
                    target.classList.add('is-touched');
                    return;
                }

                const group = target.className.split(/\s+/)
                    .find(function (className) {
                        return className !== 'is-touched' && className.indexOf('lof-') === 0;
                    });

                document.querySelectorAll('.' + group + '.is-touched').forEach(function (item) {
                    if (item !== target) {
                        item.classList.remove('is-touched');
                    }
                });

                target.classList.toggle('is-touched');
            });
        });
    </script>

</body>
</html>
