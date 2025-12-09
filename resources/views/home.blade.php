<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donlight</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --pink: #ff4da6;
            --pink-soft: #ff8fcc;
            --aqua: #4fd4e9;
            --bg: #f4f8ff;
            --dark: #222;
        }

        * {
            font-family: "Poppins", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        body {
            background: radial-gradient(circle at top left, #fef0ff, #e6f8ff 35%, #f9fbff 100%);
            min-height: 100vh;
        }

        /* NAVBAR */
        .dl-navbar {
            background: #ffffff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            padding: .6rem 1.5rem;
        }

        .dl-brand-logo {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: conic-gradient(from 180deg, #ff4da6, #ffb6ff, #4fd4e9, #ff4da6);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            font-size: 18px;
        }

        .dl-nav-btn {
            border-radius: 999px;
            padding: .35rem 1.4rem;
            border: 0;
            display: inline-flex;
            align-items: center;
            gap: .45rem;
            background: linear-gradient(90deg, var(--aqua), #5ee7ff);
            color: #fff;
            font-weight: 600;
            box-shadow: 0 8px 20px rgba(79,212,233,0.35);
        }

        .dl-nav-btn i {
            font-size: 1.1rem;
        }

        .dl-icon-btn {
            border-radius: 999px;
            width: 40px;
            height: 40px;
            border: 0;
            background: #f3f7ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            color: #444;
            box-shadow: 0 5px 12px rgba(0,0,0,0.06);
            margin-left: .35rem;
        }

        /* HERO */
        .dl-hero-wrapper {
            margin: 1.7rem auto 1.5rem auto;
            max-width: 1180px;
        }

        .dl-hero-card {
            border-radius: 28px;
            padding: 1.75rem 1.9rem;
            background: linear-gradient(135deg, #ff6fb5, #ffb7ff, #7ee7ff);
            box-shadow: 0 20px 40px rgba(255, 119, 179, 0.4);
            display: grid;
            grid-template-columns: minmax(0, 1.5fr) minmax(0, 1.1fr);
            gap: 1.5rem;
            color: #fff;
        }

        .dl-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            padding: .22rem .9rem;
            border-radius: 999px;
            font-size: .72rem;
            background: rgba(255,255,255,0.18);
            backdrop-filter: blur(9px);
        }

        .dl-hero-title {
            font-size: 1.9rem;
            font-weight: 700;
            line-height: 1.2;
            margin-top: .65rem;
        }

        .dl-hero-text {
            font-size: .9rem;
            margin-top: .6rem;
            opacity: 0.95;
        }

        .dl-hero-buttons {
            margin-top: 1rem;
            display: flex;
            gap: .75rem;
            flex-wrap: wrap;
        }

        .dl-btn-primary {
            border-radius: 999px;
            border: 0;
            padding: .55rem 1.4rem;
            font-size: .9rem;
            font-weight: 600;
            background: #ffffff;
            color: #f54ea2;
            box-shadow: 0 12px 28px rgba(255,255,255,0.35);
        }

        .dl-btn-outline {
            border-radius: 999px;
            padding: .5rem 1.3rem;
            font-size: .85rem;
            border: 1px solid rgba(255,255,255,0.8);
            background: transparent;
            color: #fff;
        }

        .dl-hero-image-box {
            border-radius: 24px;
            background: #fff;
            padding: .8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .dl-hero-image {
            width: 100%;
            border-radius: 22px;
            object-fit: cover;
        }

        .dl-promo-bar {
            margin-top: 1rem;
            border-radius: 22px;
            background: linear-gradient(90deg, #ff64b5, #ffc6ff, #76e4ff);
            padding: .75rem 1.2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: .8rem;
            font-size: .85rem;
            color: #fff;
        }

        .dl-promo-code {
            font-weight: 600;
        }

        .dl-promo-btn {
            border-radius: 999px;
            border: 0;
            background: rgba(255,255,255,0.9);
            padding: .45rem 1.3rem;
            font-size: .8rem;
            font-weight: 600;
            color: #f54ea2;
        }

        /* CATEGORY */
        .dl-section {
            max-width: 1180px;
            margin: 0 auto 1.5rem auto;
            padding-inline: .5rem;
        }

        .dl-section-title {
            font-weight: 600;
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .dl-category-card {
            border-radius: 22px;
            background: #ff6fb5;
            color: #fff;
            text-align: center;
            padding: 1.1rem 1rem;
            box-shadow: 0 15px 28px rgba(255, 111, 181, 0.4);
            cursor: pointer;
            transition: transform .18s ease, box-shadow .18s ease, translate .18s ease;
        }

        .dl-category-card:nth-child(2) {
            background: #4fd4e9;
        }
        .dl-category-card:nth-child(3) {
            background: linear-gradient(135deg, #ff8fcc, #ff6fb5);
        }

        .dl-category-icon {
            font-size: 1.8rem;
            margin-bottom: .4rem;
        }

        .dl-category-name {
            font-weight: 600;
            margin-bottom: 0;
        }

        .dl-category-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 32px rgba(0,0,0,0.18);
        }

        /* POPULAR ITEMS */
        .dl-product-card {
            border-radius: 24px;
            background: #ffffff;
            overflow: hidden;
            box-shadow: 0 14px 28px rgba(0,0,0,0.08);
            border: 0;
        }

        .dl-product-image {
            width: 100%;
            height: 170px;
            object-fit: cover;
        }

        .dl-product-badges {
            position: absolute;
            top: .7rem;
            left: .7rem;
            display: flex;
            gap: .3rem;
        }

        .dl-badge-pill {
            border-radius: 999px;
            padding: .12rem .6rem;
            font-size: .7rem;
            background: rgba(79,212,233,0.92);
            color: #fff;
            box-shadow: 0 4px 10px rgba(79,212,233,0.7);
        }

        .dl-product-body {
            padding: .9rem .95rem 1rem .95rem;
        }

        .dl-product-title {
            font-size: .98rem;
            font-weight: 600;
        }

        .dl-product-desc {
            font-size: .78rem;
            color: #666;
            height: 3rem;
            overflow: hidden;
        }

        .dl-product-price {
            color: #f54ea2;
            font-weight: 700;
            margin-top: .4rem;
        }

        .dl-product-meta {
            font-size: .75rem;
            color: #999;
        }

        .dl-add-btn {
            border-radius: 999px;
            border: 0;
            padding: .45rem 1.1rem;
            font-size: .78rem;
            font-weight: 600;
            background: linear-gradient(90deg, #ff6fb5, #ff8fcc);
            color: #fff;
            box-shadow: 0 10px 22px rgba(255,111,181,0.4);
        }

        /* FOOTER */
        .dl-footer {
            margin-top: 2rem;
            background: #000000;
            color: #fff;
            padding: 2.3rem 0 2rem 0;
        }

        .dl-footer-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: .8rem;
        }

        .dl-footer-link {
            display: block;
            font-size: .9rem;
            margin-bottom: .2rem;
        }

        .dl-footer-contact {
            margin-top: 1rem;
            font-size: .9rem;
            display: flex;
            align-items: center;
            gap: .4rem;
        }

        .dl-map-box {
            border-radius: 18px;
            overflow: hidden;
            border: 2px solid rgba(255,255,255,0.1);
        }

        @media (max-width: 768px) {
            .dl-hero-card {
                grid-template-columns: minmax(0, 1fr);
            }
            .dl-hero-image-box {
                order: -1;
            }
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar dl-navbar">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-2">
            <div class="dl-brand-logo">D</div>
            <span class="fw-semibold fs-5">Donlight</span>
        </div>

        <div class="d-flex align-items-center gap-2">
            <button class="dl-nav-btn">
                <i class="bi bi-house-door-fill"></i>
                <span>Home</span>
            </button>
            <button class="dl-icon-btn"><i class="bi bi-receipt-cutoff"></i></button>
            <button class="dl-icon-btn"><i class="bi bi-bag"></i></button>
            <button class="dl-icon-btn"><i class="bi bi-geo-alt"></i></button>
            <button class="dl-icon-btn"><i class="bi bi-person"></i></button>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="dl-hero-wrapper">
    <div class="dl-hero-card">
        <div>
            <div class="dl-hero-badge">
                <i class="bi bi-stars"></i>
                <span>New Flavors Available!</span>
            </div>
            <h1 class="dl-hero-title">Sweet Moments, Delivered Fresh</h1>
            <p class="dl-hero-text">
                Order your favorite donuts and drinks, delivered hot to your doorstep in 30 minutes or less!
            </p>

            <div class="dl-hero-buttons">
                <button class="dl-btn-primary">ORDER NOW</button>
                <button class="dl-btn-outline">View Menu</button>
            </div>
        </div>

        <div>
            <div class="dl-hero-image-box">
                {{-- Ganti src dengan gambar milikmu di folder public/images --}}
                <img src="{{ asset('images/donlight-hero.jpg') }}" alt="Donlight Hero" class="dl-hero-image">
            </div>
        </div>
    </div>

    <div class="dl-promo-bar">
        <div>
            <strong>Get 30% OFF on your first order!</strong><br>
            <span>Use code: <span class="dl-promo-code">SWEET30</span> at checkout</span>
        </div>
        <button class="dl-promo-btn">CLAIM OFFER</button>
    </div>
</section>

<!-- SHOP BY CATEGORY -->
<section class="dl-section">
    <h2 class="dl-section-title">Shop by Category</h2>
    <div class="row g-3">
        <div class="col-12 col-md-4">
            <div class="dl-category-card">
                <div class="dl-category-icon"><i class="bi bi-disc-fill"></i></div>
                <p class="dl-category-name">Donuts</p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="dl-category-card">
                <div class="dl-category-icon"><i class="bi bi-cup-straw"></i></div>
                <p class="dl-category-name">Drinks</p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="dl-category-card">
                <div class="dl-category-icon"><i class="bi bi-basket"></i></div>
                <p class="dl-category-name">Bundles</p>
            </div>
        </div>
    </div>
</section>

<!-- POPULAR ITEMS -->
<section class="dl-section mb-4">
    <h2 class="dl-section-title">Popular Items</h2>
    <div class="row g-3">
        @for ($i = 0; $i < 4; $i++)
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="dl-product-card position-relative">
                    <div class="position-relative">
                        <img src="{{ asset('images/donut-card.jpg') }}" class="dl-product-image" alt="Pink Sprinkle Delight">
                        <div class="dl-product-badges">
                            <span class="dl-badge-pill">Popular</span>
                        </div>
                    </div>
                    <div class="dl-product-body">
                        <div class="dl-product-title">Pink Sprinkle Delight</div>
                        <p class="dl-product-desc">
                            Classic pink frosted donut with colorful sprinkles. Sweet, fluffy, and absolutely irresistible!
                        </p>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <div>
                                <div class="dl-product-price">Rp20.000</div>
                                <div class="dl-product-meta">230 Reviews</div>
                            </div>
                            <button class="dl-add-btn">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</section>

<!-- FOOTER -->
<footer class="dl-footer">
    <div class="container">
        <div class="row g-4 align-items-start">
            <div class="col-12 col-md-4">
                <div class="dl-footer-title">Follow Us</div>
                <span class="dl-footer-link">@donlight.id</span>
                <span class="dl-footer-link">@donlight.id</span>

                <div class="dl-footer-contact">
                    <i class="bi bi-telephone-fill"></i>
                    <span>Contact Person 0851-5989-9909</span>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="dl-footer-title">OUR LOCATION</div>
                <p class="mb-2" style="font-size: .9rem;">
                    Jl. Puteran, Purwokerto Wetan, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53111
                </p>
                <div class="dl-map-box">
                    {{-- bisa diganti dengan iframe Google Maps milikmu --}}
                    <img src="{{ asset('images/map-placeholder.png') }}" alt="Map" class="w-100" style="height: 200px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
