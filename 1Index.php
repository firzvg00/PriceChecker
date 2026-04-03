<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KedaiKuihbangFirz | Roti Jala Viral & Kari Kaw!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        :root {
            --gold: #E8A020;
            --gold-light: #F5C842;
            --gold-pale: #FFF8E8;
            --burnt: #C04B1A;
            --burnt-deep: #8B2E08;
            --cream: #FDF6E8;
            --dark: #1A1208;
            --mid: #5C3D1E;
            --text-body: #3D2B10;
            --white: #FFFFFF;
        }

        *, *::before, *::after {
            margin: 0; padding: 0; box-sizing: border-box;
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: var(--cream);
            color: var(--text-body);
            overflow-x: hidden;
        }

        /* ===== CUSTOM CURSOR ===== */
        .cursor {
            width: 12px; height: 12px;
            background: var(--gold);
            border-radius: 50%;
            position: fixed; top: 0; left: 0;
            pointer-events: none; z-index: 9999;
            transition: transform 0.15s ease;
            mix-blend-mode: multiply;
        }
        .cursor-ring {
            width: 36px; height: 36px;
            border: 2px solid var(--gold);
            border-radius: 50%;
            position: fixed; top: 0; left: 0;
            pointer-events: none; z-index: 9998;
            transition: transform 0.35s ease, width 0.2s, height 0.2s;
            opacity: 0.6;
        }

        /* ===== LOADER ===== */
        #loader {
            position: fixed; inset: 0;
            background: var(--dark);
            z-index: 99999;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 24px;
            transition: opacity 0.6s ease, visibility 0.6s;
        }
        #loader.hidden { opacity: 0; visibility: hidden; }
        .loader-logo {
            font-family: 'Playfair Display', serif;
            font-size: 2.4rem;
            color: var(--gold);
            letter-spacing: 0.05em;
        }
        .loader-logo span { color: var(--white); }
        .loader-bar-wrap {
            width: 200px; height: 3px;
            background: rgba(255,255,255,0.1);
            border-radius: 99px;
            overflow: hidden;
        }
        .loader-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--gold), var(--gold-light));
            border-radius: 99px;
            animation: loadFill 1.8s ease-out forwards;
        }
        @keyframes loadFill {
            from { width: 0; }
            to { width: 100%; }
        }

        /* ===== MARQUEE TICKER ===== */
        .ticker-wrap {
            background: var(--burnt);
            overflow: hidden;
            padding: 10px 0;
        }
        .ticker {
            display: flex;
            gap: 0;
            animation: ticker 25s linear infinite;
            width: max-content;
        }
        .ticker-item {
            color: var(--white);
            font-size: 0.85rem;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 0 40px;
            display: flex; align-items: center; gap: 12px;
        }
        .ticker-item i { color: var(--gold-light); }
        @keyframes ticker {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* ===== NAVBAR ===== */
        header {
            position: sticky; top: 0; z-index: 1000;
            background: rgba(253, 246, 232, 0.92);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(232,160,32,0.2);
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            font-weight: 900;
            text-decoration: none;
            color: var(--dark);
            letter-spacing: -0.02em;
        }
        .logo .accent { color: var(--burnt); }
        nav ul {
            list-style: none;
            display: flex;
            gap: 4px;
        }
        nav ul li a {
            text-decoration: none;
            color: var(--mid);
            font-weight: 500;
            font-size: 0.9rem;
            padding: 8px 18px;
            border-radius: 99px;
            transition: all 0.25s;
            display: flex; align-items: center; gap: 6px;
        }
        nav ul li a:hover {
            color: var(--burnt);
            background: rgba(232,160,32,0.15);
        }
        .nav-cta a {
            background: var(--burnt) !important;
            color: var(--white) !important;
        }
        .nav-cta a:hover {
            background: var(--burnt-deep) !important;
        }

        /* ===== HERO ===== */
        .hero {
            min-height: 92vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 0;
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 5%;
            position: relative;
        }
        .hero::before {
            content: '';
            position: fixed; top: 0; left: 0; right: 0; bottom: 0;
            background:
                radial-gradient(ellipse 60% 50% at 80% 60%, rgba(232,160,32,0.12) 0%, transparent 70%),
                radial-gradient(ellipse 40% 40% at 10% 80%, rgba(192,75,26,0.08) 0%, transparent 60%);
            pointer-events: none; z-index: 0;
        }
        .hero-text { position: relative; z-index: 1; }

        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(232,160,32,0.15);
            border: 1px solid rgba(232,160,32,0.4);
            color: var(--burnt);
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 99px;
            margin-bottom: 28px;
            animation: fadeUp 0.8s ease both;
        }
        .hero-badge-dot {
            width: 7px; height: 7px;
            background: var(--gold);
            border-radius: 50%;
            animation: blink 1.5s infinite;
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.2; }
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.8rem, 5vw, 4.8rem);
            font-weight: 900;
            line-height: 1.08;
            color: var(--dark);
            margin-bottom: 20px;
            animation: fadeUp 0.8s 0.15s ease both;
        }
        .hero h1 .highlight {
            color: var(--burnt);
            position: relative;
            display: inline-block;
        }
        .hero h1 .highlight::after {
            content: '';
            position: absolute; bottom: 4px; left: 0; right: 0; height: 6px;
            background: var(--gold);
            opacity: 0.4;
            border-radius: 3px;
            z-index: -1;
        }

        .hero p {
            font-size: 1.15rem;
            color: var(--mid);
            line-height: 1.7;
            max-width: 480px;
            margin-bottom: 44px;
            font-weight: 400;
            animation: fadeUp 0.8s 0.3s ease both;
        }

        .hero-ctas {
            display: flex; gap: 14px; flex-wrap: wrap;
            animation: fadeUp 0.8s 0.45s ease both;
        }
        .btn-primary {
            background: var(--burnt);
            color: var(--white);
            padding: 16px 34px;
            border-radius: 99px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            display: inline-flex; align-items: center; gap: 10px;
            transition: all 0.3s;
            box-shadow: 0 8px 30px rgba(192,75,26,0.3);
        }
        .btn-primary:hover {
            background: var(--burnt-deep);
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(192,75,26,0.4);
        }
        .btn-secondary {
            color: var(--burnt);
            border: 2px solid rgba(192,75,26,0.3);
            padding: 14px 30px;
            border-radius: 99px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            display: inline-flex; align-items: center; gap: 10px;
            transition: all 0.3s;
        }
        .btn-secondary:hover {
            background: rgba(192,75,26,0.08);
            border-color: var(--burnt);
        }

        .hero-stats {
            display: flex; gap: 36px; margin-top: 64px;
            animation: fadeUp 0.8s 0.6s ease both;
        }
        .stat-item { display: flex; flex-direction: column; }
        .stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 900;
            color: var(--burnt);
            line-height: 1;
        }
        .stat-label {
            font-size: 0.78rem;
            color: var(--mid);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-top: 4px;
        }
        .stat-divider {
            width: 1px;
            background: rgba(92,61,30,0.2);
            align-self: stretch;
        }

        /* Hero Visual */
        .hero-visual {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1;
            animation: fadeUp 0.8s 0.2s ease both;
        }
        .hero-plate {
            width: min(420px, 90%);
            aspect-ratio: 1;
            background: linear-gradient(135deg, #FFF0CC 0%, #FFD680 50%, #F5A623 100%);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 10rem;
            box-shadow:
                0 30px 80px rgba(192,75,26,0.2),
                0 0 0 20px rgba(232,160,32,0.1),
                0 0 0 40px rgba(232,160,32,0.05);
            animation: floatPlate 5s ease-in-out infinite;
            position: relative;
        }
        @keyframes floatPlate {
            0%, 100% { transform: translateY(0) rotate(-2deg); }
            50% { transform: translateY(-18px) rotate(2deg); }
        }
        .hero-plate-badge {
            position: absolute;
            top: 15%;
            right: -10%;
            background: var(--burnt);
            color: var(--white);
            font-size: 0.8rem;
            font-weight: 700;
            padding: 10px 16px;
            border-radius: 14px;
            box-shadow: 0 8px 24px rgba(192,75,26,0.3);
            animation: floatPlate 5s 1s ease-in-out infinite;
            white-space: nowrap;
        }
        .hero-plate-badge2 {
            position: absolute;
            bottom: 15%;
            left: -12%;
            background: var(--gold);
            color: var(--dark);
            font-size: 0.8rem;
            font-weight: 700;
            padding: 10px 16px;
            border-radius: 14px;
            box-shadow: 0 8px 24px rgba(232,160,32,0.3);
            animation: floatPlate 5s 2s ease-in-out infinite;
            white-space: nowrap;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ===== DIVIDER ===== */
        .divider-pattern {
            height: 60px;
            background: var(--dark);
            position: relative;
            overflow: hidden;
            display: flex; align-items: center;
        }
        .divider-pattern::before {
            content: '✦ Roti Jala ✦ Kari Ayam ✦ Kari Kambing ✦ Hantar Rumah ✦ Roti Jala ✦ Kari Ayam ✦ Kari Kambing ✦ Hantar Rumah ✦ Roti Jala ✦ Kari Ayam ✦ Kari Kambing ✦ Hantar Rumah ✦';
            color: rgba(232,160,32,0.25);
            font-size: 0.75rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            white-space: nowrap;
            animation: ticker 30s linear infinite;
            font-weight: 600;
        }

        /* ===== MENU SECTION ===== */
        #menu {
            padding: 120px 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .section-eyebrow {
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 12px;
            display: flex; align-items: center; gap: 10px;
        }
        .section-eyebrow::before, .section-eyebrow::after {
            content: ''; flex: 1; height: 1px;
            background: rgba(232,160,32,0.3);
        }
        .section-eyebrow::before { max-width: 40px; }
        .section-eyebrow::after { max-width: 400px; }

        .section-heading {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 900;
            color: var(--dark);
            margin-bottom: 16px;
            text-align: center;
        }
        .section-sub {
            color: var(--mid);
            font-size: 1.05rem;
            text-align: center;
            margin-bottom: 70px;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 32px;
        }

        .menu-card {
            background: var(--white);
            border-radius: 28px;
            padding: 44px 40px;
            position: relative;
            overflow: hidden;
            transition: transform 0.4s cubic-bezier(0.23,1,0.32,1), box-shadow 0.4s ease;
            box-shadow: 0 4px 30px rgba(60,30,10,0.06);
            opacity: 0;
            transform: translateY(40px);
            border: 1px solid rgba(232,160,32,0.1);
        }
        .menu-card.visible {
            animation: fadeUp 0.7s ease forwards;
        }
        .menu-card:nth-child(2).visible { animation-delay: 0.18s; }
        .menu-card:nth-child(3).visible { animation-delay: 0.36s; }
        .menu-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, transparent 40%, rgba(232,160,32,0.04));
            pointer-events: none;
        }
        .menu-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 24px 60px rgba(60,30,10,0.13);
        }
        .menu-card.featured {
            background: linear-gradient(145deg, var(--dark) 0%, #3D1E08 100%);
            border-color: rgba(232,160,32,0.3);
        }
        .menu-card.featured .menu-card-name { color: var(--white); }
        .menu-card.featured .menu-card-desc { color: rgba(255,255,255,0.6); }
        .menu-card.featured .menu-card-price { color: var(--gold-light); }
        .menu-card.featured .menu-card-includes li { color: rgba(255,255,255,0.7); }
        .menu-card.featured .menu-card-includes i { color: var(--gold); }

        .featured-badge {
            position: absolute; top: 24px; right: 24px;
            background: var(--gold);
            color: var(--dark);
            font-size: 0.7rem;
            font-weight: 800;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 5px 14px;
            border-radius: 99px;
        }

        .menu-card-emoji {
            font-size: 3.5rem;
            margin-bottom: 24px;
            display: block;
            line-height: 1;
        }
        .menu-card-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.7rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 10px;
        }
        .menu-card-desc {
            color: var(--mid);
            font-size: 0.95rem;
            line-height: 1.65;
            margin-bottom: 24px;
        }
        .menu-card-includes {
            list-style: none;
            margin-bottom: 32px;
            display: flex; flex-direction: column; gap: 8px;
        }
        .menu-card-includes li {
            font-size: 0.9rem;
            color: var(--mid);
            display: flex; align-items: center; gap: 10px;
        }
        .menu-card-includes i {
            color: var(--gold);
            width: 14px;
            font-size: 0.8rem;
        }
        .menu-card-footer {
            display: flex; align-items: center; justify-content: space-between;
            border-top: 1px solid rgba(232,160,32,0.15);
            padding-top: 24px;
        }
        .menu-card-price {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 900;
            color: var(--burnt);
        }
        .menu-card-price sub {
            font-size: 0.9rem;
            font-family: 'DM Sans', sans-serif;
            font-weight: 500;
            color: var(--mid);
        }
        .order-quick-btn {
            background: var(--burnt);
            color: var(--white);
            border: none;
            width: 50px; height: 50px;
            border-radius: 50%;
            font-size: 1.1rem;
            cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            transition: all 0.3s;
            box-shadow: 0 4px 16px rgba(192,75,26,0.25);
        }
        .menu-card.featured .order-quick-btn {
            background: var(--gold);
            color: var(--dark);
        }
        .order-quick-btn:hover {
            transform: scale(1.15);
        }

        /* ===== PROCESS STRIP ===== */
        .process-strip {
            background: var(--dark);
            padding: 80px 5%;
        }
        .process-inner {
            max-width: 1100px;
            margin: 0 auto;
        }
        .process-strip .section-eyebrow { justify-content: center; }
        .process-strip .section-eyebrow::before,
        .process-strip .section-eyebrow::after { background: rgba(232,160,32,0.2); }
        .process-strip .section-heading { color: var(--white); text-align: center; margin-bottom: 60px; }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            position: relative;
        }
        .process-steps::before {
            content: '';
            position: absolute;
            top: 36px; left: calc(12.5% + 30px); right: calc(12.5% + 30px);
            height: 2px;
            background: linear-gradient(90deg, var(--gold), var(--burnt));
            opacity: 0.3;
        }
        .process-step {
            display: flex; flex-direction: column; align-items: center;
            text-align: center;
            gap: 16px;
        }
        .step-num {
            width: 72px; height: 72px;
            background: rgba(232,160,32,0.1);
            border: 2px solid rgba(232,160,32,0.3);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.6rem;
            position: relative; z-index: 1;
        }
        .step-title {
            font-weight: 700;
            font-size: 0.95rem;
            color: var(--white);
        }
        .step-desc {
            font-size: 0.82rem;
            color: rgba(255,255,255,0.45);
            line-height: 1.6;
        }

        /* ===== TESTIMONIALS ===== */
        #testimonials {
            padding: 120px 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-top: 60px;
        }
        .testimonial-card {
            background: var(--white);
            border-radius: 20px;
            padding: 32px;
            border: 1px solid rgba(232,160,32,0.1);
            transition: transform 0.3s;
        }
        .testimonial-card:hover { transform: translateY(-6px); }
        .testimonial-stars {
            color: var(--gold);
            font-size: 0.85rem;
            margin-bottom: 16px;
            letter-spacing: 2px;
        }
        .testimonial-text {
            font-size: 0.95rem;
            line-height: 1.75;
            color: var(--mid);
            margin-bottom: 24px;
            font-style: italic;
        }
        .testimonial-author {
            display: flex; align-items: center; gap: 12px;
        }
        .testimonial-avatar {
            width: 44px; height: 44px;
            background: linear-gradient(135deg, var(--gold-light), var(--burnt));
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--white);
            flex-shrink: 0;
        }
        .testimonial-name { font-weight: 700; font-size: 0.9rem; color: var(--dark); }
        .testimonial-loc { font-size: 0.78rem; color: var(--mid); }

        /* ===== ORDER SECTION ===== */
        #order {
            background: linear-gradient(180deg, var(--cream) 0%, #FFF0CC 100%);
            padding: 120px 5%;
        }
        .order-inner {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 80px;
            align-items: start;
        }
        .order-info { position: sticky; top: 120px; }
        .order-info .section-heading { text-align: left; }
        .order-info p {
            color: var(--mid);
            line-height: 1.8;
            margin-bottom: 36px;
        }
        .order-info-points {
            display: flex; flex-direction: column; gap: 18px;
            margin-bottom: 36px;
        }
        .order-info-point {
            display: flex; align-items: flex-start; gap: 14px;
        }
        .order-point-icon {
            width: 42px; height: 42px;
            background: rgba(232,160,32,0.15);
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            color: var(--burnt);
            font-size: 1rem;
            flex-shrink: 0;
        }
        .order-point-title { font-weight: 700; font-size: 0.95rem; color: var(--dark); }
        .order-point-desc { font-size: 0.85rem; color: var(--mid); margin-top: 2px; }

        /* Form */
        .order-form-wrap {
            background: var(--white);
            border-radius: 28px;
            padding: 50px;
            box-shadow: 0 20px 80px rgba(60,30,10,0.1);
            border: 1px solid rgba(232,160,32,0.12);
        }
        .form-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 32px;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }
        .field-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-bottom: 20px;
        }
        .field-group.full { grid-column: 1 / -1; }
        label {
            font-size: 0.82rem;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: var(--mid);
        }
        .field-wrap {
            position: relative;
        }
        .field-wrap i {
            position: absolute; left: 16px; top: 50%;
            transform: translateY(-50%);
            color: #C8B090;
            font-size: 0.95rem;
            pointer-events: none;
        }
        .field-wrap.textarea-wrap i { top: 18px; transform: none; }
        input, select, textarea {
            width: 100%;
            padding: 14px 16px 14px 44px;
            border: 2px solid #EDE0CA;
            border-radius: 12px;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.95rem;
            color: var(--dark);
            background: #FDFAF5;
            transition: all 0.25s;
        }
        textarea { padding-left: 16px; resize: vertical; min-height: 110px; }
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--gold);
            background: var(--white);
            box-shadow: 0 0 0 4px rgba(232,160,32,0.12);
        }
        .qty-field {
            display: flex;
            align-items: center;
            gap: 0;
            border: 2px solid #EDE0CA;
            border-radius: 12px;
            overflow: hidden;
            background: #FDFAF5;
        }
        .qty-btn {
            width: 46px; height: 50px;
            background: none;
            border: none;
            font-size: 1.3rem;
            cursor: pointer;
            color: var(--burnt);
            font-weight: 700;
            transition: background 0.2s;
            flex-shrink: 0;
        }
        .qty-btn:hover { background: rgba(232,160,32,0.1); }
        .qty-input {
            flex: 1;
            border: none !important;
            box-shadow: none !important;
            text-align: center;
            padding: 0 !important;
            font-weight: 700;
            background: transparent !important;
        }
        .total-preview {
            background: linear-gradient(135deg, var(--dark) 0%, #3D1E08 100%);
            color: var(--white);
            border-radius: 16px;
            padding: 20px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }
        .total-label {
            font-size: 0.85rem;
            color: rgba(255,255,255,0.6);
        }
        .total-amount {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 900;
            color: var(--gold-light);
        }
        .total-breakdown {
            font-size: 0.78rem;
            color: rgba(255,255,255,0.4);
            margin-top: 2px;
        }

        .btn-order {
            width: 100%;
            background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
            color: var(--white);
            border: none;
            padding: 18px 32px;
            border-radius: 14px;
            font-family: 'DM Sans', sans-serif;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            display: flex; align-items: center; justify-content: center; gap: 12px;
            transition: all 0.3s;
            box-shadow: 0 8px 30px rgba(37, 211, 102, 0.3);
        }
        .btn-order:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 40px rgba(37, 211, 102, 0.4);
        }
        .btn-order:disabled {
            background: linear-gradient(135deg, #aaa, #888);
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* Success state */
        .form-success {
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 60px 20px;
            gap: 20px;
        }
        .form-success.show { display: flex; }
        .success-icon {
            width: 90px; height: 90px;
            background: linear-gradient(135deg, #25D366, #128C7E);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 2.5rem;
            color: white;
            animation: popIn 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        @keyframes popIn {
            from { transform: scale(0); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        .success-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--dark);
        }
        .success-desc { color: var(--mid); line-height: 1.7; }
        .btn-reset {
            background: var(--burnt);
            color: var(--white);
            border: none;
            padding: 14px 32px;
            border-radius: 99px;
            font-family: 'DM Sans', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 10px;
        }
        .btn-reset:hover { background: var(--burnt-deep); }

        /* ===== FOOTER ===== */
        footer {
            background: var(--dark);
            color: rgba(255,255,255,0.5);
            padding: 50px 5% 30px;
        }
        .footer-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 24px;
            padding-bottom: 30px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--white);
            font-weight: 900;
        }
        .footer-logo span { color: var(--gold); }
        .footer-tagline { font-size: 0.85rem; margin-top: 6px; }
        .footer-links { display: flex; gap: 24px; flex-wrap: wrap; }
        .footer-links a {
            color: rgba(255,255,255,0.5);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.2s;
        }
        .footer-links a:hover { color: var(--gold); }
        .footer-bottom {
            max-width: 1200px;
            margin: 24px auto 0;
            text-align: center;
            font-size: 0.82rem;
        }
        .footer-bottom i { color: var(--burnt); }

        /* ===== FLOATING WA BUTTON ===== */
        .float-wa {
            position: fixed; bottom: 32px; right: 32px;
            background: linear-gradient(135deg, #25D366, #128C7E);
            color: var(--white);
            width: 58px; height: 58px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 8px 30px rgba(37, 211, 102, 0.4);
            z-index: 900;
            text-decoration: none;
            transition: all 0.3s;
            animation: pulseWA 2.5s infinite;
        }
        .float-wa:hover { transform: scale(1.12); }
        @keyframes pulseWA {
            0%, 100% { box-shadow: 0 8px 30px rgba(37,211,102,0.4); }
            50% { box-shadow: 0 8px 50px rgba(37,211,102,0.6), 0 0 0 12px rgba(37,211,102,0.1); }
        }

        /* ===== SCROLL TO TOP ===== */
        .scroll-top {
            position: fixed; bottom: 100px; right: 32px;
            background: var(--white);
            color: var(--burnt);
            width: 44px; height: 44px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 1rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.12);
            z-index: 900;
            text-decoration: none;
            transition: all 0.3s;
            opacity: 0; pointer-events: none;
        }
        .scroll-top.show { opacity: 1; pointer-events: all; }
        .scroll-top:hover { background: var(--burnt); color: var(--white); }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .hero { grid-template-columns: 1fr; text-align: center; gap: 60px; padding: 60px 5%; min-height: auto; }
            .hero p { margin-left: auto; margin-right: auto; }
            .hero-ctas { justify-content: center; }
            .hero-stats { justify-content: center; }
            .hero-visual { order: -1; }
            .hero-plate { width: min(280px, 70%); font-size: 6rem; }
            .hero-plate-badge { right: 0; }
            .hero-plate-badge2 { left: 0; }
            .process-steps { grid-template-columns: repeat(2, 1fr); }
            .process-steps::before { display: none; }
            .order-inner { grid-template-columns: 1fr; gap: 40px; }
            .order-info { position: static; }
            .order-info .section-heading { text-align: center; }
            .form-row { grid-template-columns: 1fr; }
        }
        @media (max-width: 600px) {
            nav ul li a span { display: none; }
            .logo { font-size: 1.3rem; }
            .hero h1 { font-size: 2.2rem; }
            .hero-stats { gap: 20px; }
            .order-form-wrap { padding: 28px; }
            .process-steps { grid-template-columns: 1fr; }
            .footer-inner { flex-direction: column; align-items: flex-start; }
            .float-wa { bottom: 20px; right: 20px; }
            .scroll-top { bottom: 84px; right: 20px; }
        }
    </style>
</head>
<body>

    <!-- Loader -->
    <div id="loader">
        <div class="loader-logo">KedaiKuih<span>bangFirz</span></div>
        <div class="loader-bar-wrap"><div class="loader-bar"></div></div>
    </div>

    <!-- Custom Cursor -->
    <div class="cursor" id="cursor"></div>
    <div class="cursor-ring" id="cursorRing"></div>

    <!-- Ticker -->
    <div class="ticker-wrap" aria-hidden="true">
        <div class="ticker" id="ticker">
            <span class="ticker-item"><i class="fas fa-fire"></i> VIRAL di TikTok</span>
            <span class="ticker-item"><i class="fas fa-motorcycle"></i> Penghantaran Kawasan Lembah Klang</span>
            <span class="ticker-item"><i class="fas fa-star"></i> 50 Keping Setiap Set</span>
            <span class="ticker-item"><i class="fas fa-leaf"></i> Bahan Segar Setiap Hari</span>
            <span class="ticker-item"><i class="fas fa-fire"></i> VIRAL di TikTok</span>
            <span class="ticker-item"><i class="fas fa-motorcycle"></i> Penghantaran Kawasan Lembah Klang</span>
            <span class="ticker-item"><i class="fas fa-star"></i> 50 Keping Setiap Set</span>
            <span class="ticker-item"><i class="fas fa-leaf"></i> Bahan Segar Setiap Hari</span>
        </div>
    </div>

    <!-- Navbar -->
    <header>
        <nav>
            <a href="#" class="logo">✦ KedaiKuih<span class="accent">bangFirz</span></a>
            <ul>
                <li><a href="#home"><i class="fas fa-home"></i> <span>Utama</span></a></li>
                <li><a href="#menu"><i class="fas fa-utensils"></i> <span>Menu</span></a></li>
                <li><a href="#testimonials"><i class="fas fa-heart"></i> <span>Ulasan</span></a></li>
                <li class="nav-cta"><a href="#order"><i class="fas fa-shopping-bag"></i> <span>Tempah</span></a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero -->
    <section id="home" class="hero">
        <div class="hero-text">
            <div class="hero-badge">
                <div class="hero-badge-dot"></div>
                Roti Jala Premium • Tempahan Buka
            </div>
            <h1>Roti Jala <span class="highlight">Lembut</span> & Kari yang <span class="highlight">Kaw!</span></h1>
            <p>Keaslian rasa tradisi Melayu, dibuat segar setiap hari dengan resipi turun-temurun. Terus ke pintu rumah anda di sekitar Lembah Klang.</p>
            <div class="hero-ctas">
                <a href="#order" class="btn-primary">Tempah Sekarang <i class="fas fa-arrow-right"></i></a>
                <a href="#menu" class="btn-secondary"><i class="fas fa-utensils"></i> Lihat Menu</a>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-num">500+</span>
                    <span class="stat-label">Pelanggan Puas</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-num">4.9★</span>
                    <span class="stat-label">Rating Google</span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-num">2 Set</span>
                    <span class="stat-label">Menu Tersedia</span>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="hero-plate">
                🥞
                <div class="hero-plate-badge">🔥 Kari Kaw!</div>
                <div class="hero-plate-badge2">✨ 50 Keping</div>
            </div>
        </div>
    </section>

    <!-- Dark Divider -->
    <div class="divider-pattern" aria-hidden="true"></div>

    <!-- Menu -->
    <section id="menu">
        <p class="section-eyebrow">Pilihan Istimewa</p>
        <h2 class="section-heading">Menu Kami</h2>
        <p class="section-sub">Dibuat segar setiap hari dengan bahan-bahan premium pilihan</p>

        <div class="menu-grid">
            <!-- Card 1 -->
            <div class="menu-card" id="card-biasa">
                <span class="menu-card-emoji">🍗</span>
                <div class="menu-card-name">Set Biasa</div>
                <div class="menu-card-desc">Set paling popular! Roti Jala lembut bersama Kari Ayam Pekat berkerisik yang menyelerakan.</div>
                <ul class="menu-card-includes">
                    <li><i class="fas fa-check"></i> 50 keping Roti Jala</li>
                    <li><i class="fas fa-check"></i> Kari Ayam Pekat berkerisik</li>
                    <li><i class="fas fa-check"></i> Sesuai 6–8 orang</li>
                </ul>
                <div class="menu-card-footer">
                    <div class="menu-card-price">RM 35<sub>.00</sub></div>
                    <button class="order-quick-btn" onclick="quickOrder('Set Biasa (Kari Ayam)', 35)" title="Tempah sekarang">
                        <i class="fas fa-shopping-bag"></i>
                    </button>
                </div>
            </div>
            <!-- Card 2 — Featured -->
            <div class="menu-card featured" id="card-premium">
                <span class="featured-badge">⭐ Popular</span>
                <span class="menu-card-emoji">🐑</span>
                <div class="menu-card-name">Set Premium</div>
                <div class="menu-card-desc">Naik taraf dengan Kari Kambing Kaw — daging lembut, tidak bau hamis, penuh rempah!</div>
                <ul class="menu-card-includes">
                    <li><i class="fas fa-check"></i> 50 keping Roti Jala</li>
                    <li><i class="fas fa-check"></i> Kari Kambing Kaw istimewa</li>
                    <li><i class="fas fa-check"></i> Daging lembut, tidak bau hamis</li>
                </ul>
                <div class="menu-card-footer">
                    <div class="menu-card-price">RM 50<sub>.00</sub></div>
                    <button class="order-quick-btn" onclick="quickOrder('Set Premium (Kari Kambing)', 50)" title="Tempah sekarang">
                        <i class="fas fa-shopping-bag"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Strip -->
    <div class="process-strip">
        <div class="process-inner">
            <p class="section-eyebrow" style="color: rgba(232,160,32,0.7);">Cara Tempahan</p>
            <h2 class="section-heading">Mudah. Cepat. Sedap.</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-num">📋</div>
                    <div class="step-title">Isi Borang</div>
                    <div class="step-desc">Pilih set, masukkan nama, no. telefon & alamat anda</div>
                </div>
                <div class="process-step">
                    <div class="step-num">✅</div>
                    <div class="step-title">Pesanan Disahkan</div>
                    <div class="step-desc">Kami hubungi anda via WhatsApp untuk sahkan pesanan</div>
                </div>
                <div class="process-step">
                    <div class="step-num">👨‍🍳</div>
                    <div class="step-title">Masak Segar</div>
                    <div class="step-desc">Roti Jala & kari dibuat segar mengikut tempahan anda</div>
                </div>
                <div class="process-step">
                    <div class="step-num">🏠</div>
                    <div class="step-title">Hantar ke Rumah</div>
                    <div class="step-desc">Penghantaran ke kawasan Lembah Klang pada waktu yang dipersetujui</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <section id="testimonials">
        <p class="section-eyebrow">Kata Pelanggan</p>
        <h2 class="section-heading">Mereka Dah Cuba!</h2>
        <p class="section-sub">Jangan percaya kami sahaja — dengar dari pelanggan setia kami</p>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <div class="testimonial-text">"Roti Jala paling lembut yang pernah saya makan! Kari kambing dia memang power gila, tak bau langsung. Dah repeat order 3 kali dah!"</div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">N</div>
                    <div>
                        <div class="testimonial-name">Nur Aisyah</div>
                        <div class="testimonial-loc">Shah Alam</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <div class="testimonial-text">"Order untuk kenduri rumah, semua tetamu puji. Hantar on time, packaging kemas. Harga pun berbaloi sangat! Wajib cuba Set Premium."</div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">A</div>
                    <div>
                        <div class="testimonial-name">Ahmad Fadzil</div>
                        <div class="testimonial-loc">Subang Jaya</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <div class="testimonial-text">"Sejak tengok kat TikTok terus order. Rupa cantik, rasa lagi cantik! Kuah kari dia pekat dan wangi gila. Sangat recommend untuk majlis!"</div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">S</div>
                    <div>
                        <div class="testimonial-name">Siti Rahmah</div>
                        <div class="testimonial-loc">Petaling Jaya</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Section -->
    <section id="order">
        <div class="order-inner">
            <div class="order-info">
                <p class="section-eyebrow" style="justify-content: flex-start;">Borang Pesanan</p>
                <h2 class="section-heading">Tempah<br>Sekarang</h2>
                <p>Isi borang di sebelah dan kami akan hubungi anda melalui WhatsApp untuk pengesahan pesanan dan pembayaran.</p>
                <div class="order-info-points">
                    <div class="order-info-point">
                        <div class="order-point-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <div class="order-point-title">Tempah 1 Hari Awal</div>
                            <div class="order-point-desc">Pastikan tempahan dibuat sekurang-kurangnya 1 hari sebelum tarikh penghantaran</div>
                        </div>
                    </div>
                    <div class="order-info-point">
                        <div class="order-point-icon"><i class="fas fa-motorcycle"></i></div>
                        <div>
                            <div class="order-point-title">Kawasan Penghantaran</div>
                            <div class="order-point-desc">Meliputi seluruh Lembah Klang — Selangor & KL</div>
                        </div>
                    </div>
                    <div class="order-info-point">
                        <div class="order-point-icon"><i class="fab fa-whatsapp"></i></div>
                        <div>
                            <div class="order-point-title">Sahkan Via WhatsApp</div>
                            <div class="order-point-desc">Semua pesanan disahkan dan bayaran dibuat melalui WhatsApp</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-form-wrap" id="formWrap">
                <div class="form-title">🛒 Borang Pesanan</div>
                <form id="orderForm" name="orderForm">
                    <div class="form-row">
                        <div class="field-group">
                            <label>Nama Penuh</label>
                            <div class="field-wrap">
                                <i class="fas fa-user"></i>
                                <input type="text" name="nama" placeholder="Nama anda" required>
                            </div>
                        </div>
                        <div class="field-group">
                            <label>No. WhatsApp</label>
                            <div class="field-wrap">
                                <i class="fab fa-whatsapp"></i>
                                <input type="tel" name="phone" placeholder="0123456789" required>
                            </div>
                        </div>
                    </div>

                    <div class="field-group">
                        <label>Pilih Set</label>
                        <div class="field-wrap">
                            <i class="fas fa-utensils"></i>
                            <select name="pakej" id="pakejSelect">
                                <option value="Set Biasa (Kari Ayam)" data-price="35">🍗 Set Biasa — Kari Ayam (RM 35.00)</option>
                                <option value="Set Premium (Kari Kambing)" data-price="50">🐑 Set Premium — Kari Kambing (RM 50.00)</option>
                            </select>
                        </div>
                    </div>

                    <div class="field-group">
                        <label>Kuantiti (Set)</label>
                        <div class="qty-field">
                            <button type="button" class="qty-btn" id="qtyMinus">−</button>
                            <input type="number" name="kuantiti" id="qtyInput" class="qty-input" value="1" min="1" max="20" readonly>
                            <button type="button" class="qty-btn" id="qtyPlus">+</button>
                        </div>
                    </div>

                    <div class="field-group">
                        <label>Tarikh Penghantaran</label>
                        <div class="field-wrap">
                            <i class="fas fa-calendar-alt"></i>
                            <input type="date" name="tarikh" id="tarikhInput" required>
                        </div>
                    </div>

                    <div class="field-group">
                        <label>Alamat Penghantaran</label>
                        <div class="field-wrap textarea-wrap">
                            <i class="fas fa-map-marker-alt"></i>
                            <textarea name="alamat" placeholder="No. rumah, jalan, taman, poskod, negeri..." required></textarea>
                        </div>
                    </div>

                    <div class="field-group">
                        <label>Nota Tambahan (Pilihan)</label>
                        <div class="field-wrap textarea-wrap">
                            <i class="fas fa-sticky-note"></i>
                            <textarea name="nota" placeholder="Arahan khas, masa penghantaran pilihan, dll..." style="min-height:70px"></textarea>
                        </div>
                    </div>

                    <div class="total-preview">
                        <div>
                            <div class="total-label">Jumlah Anggaran</div>
                            <div class="total-breakdown" id="totalBreakdown">1 × Set Biasa</div>
                        </div>
                        <div class="total-amount" id="totalAmount">RM 35.00</div>
                    </div>

                    <button type="submit" class="btn-order" id="submitBtn">
                        <i class="fab fa-whatsapp" style="font-size:1.4rem"></i> Hantar Pesanan
                    </button>
                </form>

                <div class="form-success" id="formSuccess">
                    <div class="success-icon">✓</div>
                    <div class="success-title">Terima Kasih!</div>
                    <div class="success-desc">Pesanan anda telah berjaya dihantar. Kami akan hubungi anda melalui WhatsApp tidak lama lagi untuk pengesahan dan pembayaran.</div>
                    <button class="btn-reset" id="btnReset">Buat Pesanan Baru</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-inner">
            <div>
                <div class="footer-logo">KedaiKuih<span>bangFirz</span></div>
                <div class="footer-tagline">Roti Jala & Kari Kaw • Lembah Klang</div>
            </div>
            <div class="footer-links">
                <a href="#home">Utama</a>
                <a href="#menu">Menu</a>
                <a href="#testimonials">Ulasan</a>
                <a href="#order">Tempah</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 KedaiKuihbangFirz. Dibuat dengan penuh kasih sayang <i class="fas fa-heart"></i> untuk pelanggan kami.</p>
        </div>
    </footer>

    <!-- Floating Buttons -->
    <a href="https://wa.me/60123456789" class="float-wa" target="_blank" title="Hubungi via WhatsApp" aria-label="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="#" class="scroll-top" id="scrollTop" title="Kembali ke atas" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script>
        // ===== LOADER =====
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('loader').classList.add('hidden');
            }, 2000);
        });

        // ===== CUSTOM CURSOR =====
        const cursor = document.getElementById('cursor');
        const ring = document.getElementById('cursorRing');
        let mx = 0, my = 0, rx = 0, ry = 0;
        document.addEventListener('mousemove', e => {
            mx = e.clientX; my = e.clientY;
            cursor.style.transform = `translate(${mx - 6}px, ${my - 6}px)`;
        });
        function animRing() {
            rx += (mx - rx) * 0.12;
            ry += (my - ry) * 0.12;
            ring.style.transform = `translate(${rx - 18}px, ${ry - 18}px)`;
            requestAnimationFrame(animRing);
        }
        animRing();
        document.querySelectorAll('a, button, input, select, textarea').forEach(el => {
            el.addEventListener('mouseenter', () => { ring.style.width = '54px'; ring.style.height = '54px'; });
            el.addEventListener('mouseleave', () => { ring.style.width = '36px'; ring.style.height = '36px'; });
        });

        // ===== SCROLL REVEAL =====
        const revealEls = document.querySelectorAll('.menu-card');
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } });
        }, { threshold: 0.15 });
        revealEls.forEach(el => obs.observe(el));

        // ===== SCROLL TOP =====
        const scrollTopBtn = document.getElementById('scrollTop');
        window.addEventListener('scroll', () => {
            scrollTopBtn.classList.toggle('show', window.scrollY > 400);
        });
        scrollTopBtn.addEventListener('click', e => { e.preventDefault(); window.scrollTo({ top: 0, behavior: 'smooth' }); });

        // ===== QUICK ORDER =====
        function quickOrder(pakej, harga) {
            document.getElementById('pakejSelect').value = pakej;
            updateTotal();
            document.getElementById('order').scrollIntoView({ behavior: 'smooth' });
        }

        // ===== TOTAL CALCULATOR =====
        const pakejSel = document.getElementById('pakejSelect');
        const qtyInput = document.getElementById('qtyInput');
        const totalAmt = document.getElementById('totalAmount');
        const totalBreak = document.getElementById('totalBreakdown');

        function updateTotal() {
            const opt = pakejSel.options[pakejSel.selectedIndex];
            const price = parseFloat(opt.dataset.price);
            const qty = parseInt(qtyInput.value) || 1;
            const total = price * qty;
            totalAmt.textContent = `RM ${total.toFixed(2)}`;
            const name = pakejSel.value.split('(')[0].trim();
            totalBreak.textContent = `${qty} × ${name}`;
        }
        pakejSel.addEventListener('change', updateTotal);
        qtyInput.addEventListener('input', updateTotal);

        document.getElementById('qtyMinus').addEventListener('click', () => {
            if (parseInt(qtyInput.value) > 1) { qtyInput.value = parseInt(qtyInput.value) - 1; updateTotal(); }
        });
        document.getElementById('qtyPlus').addEventListener('click', () => {
            if (parseInt(qtyInput.value) < 20) { qtyInput.value = parseInt(qtyInput.value) + 1; updateTotal(); }
        });

        // ===== SET MIN DATE =====
        const tarikhInput = document.getElementById('tarikhInput');
        const tomorrow = new Date(); tomorrow.setDate(tomorrow.getDate() + 1);
        tarikhInput.min = tomorrow.toISOString().split('T')[0];

        // ===== FORM SUBMIT =====
        const scriptURL = 'https://script.google.com/macros/s/AKfycbwgvl8na5If0xCYX1Ej_wrLF4XpAbnvcCYrs17Pg6yh4vZIp4AAxKGItTbo9bd943_8Wg/exec';
        const form = document.getElementById('orderForm');
        const submitBtn = document.getElementById('submitBtn');
        const formSuccess = document.getElementById('formSuccess');

        form.addEventListener('submit', e => {
            e.preventDefault();
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sedang Dihantar...';
            submitBtn.disabled = true;

            fetch(scriptURL, { method: 'POST', body: new FormData(form) })
                .then(() => {
                    form.style.display = 'none';
                    formSuccess.classList.add('show');
                })
                .catch(() => {
                    alert('Alamak, ada ralat. Sila cuba lagi atau hubungi kami terus via WhatsApp.');
                    submitBtn.innerHTML = '<i class="fab fa-whatsapp" style="font-size:1.4rem"></i> Hantar Pesanan';
                    submitBtn.disabled = false;
                });
        });

        document.getElementById('btnReset').addEventListener('click', () => {
            form.reset();
            form.style.display = '';
            formSuccess.classList.remove('show');
            submitBtn.innerHTML = '<i class="fab fa-whatsapp" style="font-size:1.4rem"></i> Hantar Pesanan';
            submitBtn.disabled = false;
            updateTotal();
        });

        updateTotal();
    </script>
</body>
</html>