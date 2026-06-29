<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leadership Masterclass for Educators — ₹199 Only | Amol Chavan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
    /* ── RESET & BASE ── */
    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --navy: #0B1340;
        --navy-mid: #152060;
        --gold: #C8880A;
        --gold-lt: #F5C842;
        --cream: #F9F7F2;
        --slate: #E8EBF4;
        --ink: #1A1A2E;
        --muted: #6B7280;
        --white: #FFFFFF;
        --green: #2E7D32;
        --orange: #D84315;
        --r: 8px;
        --r-lg: 16px;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Inter', system-ui, sans-serif;
        color: var(--ink);
        background: var(--cream);
        line-height: 1.65;
        -webkit-font-smoothing: antialiased;
    }

    img {
        display: block;
        max-width: 100%;
    }

    a {
        text-decoration: none;
        color: inherit;
    }


    .popup {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
    }

    .popup-content {
        background: #fff;
        width: 90%;
        max-width: 450px;
        padding: 25px;
        border-radius: 10px;
        position: relative;
        margin: 8% auto;
    }

    .close {
        position: absolute;
        right: 15px;
        top: 10px;
        font-size: 24px;
        cursor: pointer;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .submit-btn {
        width: 100%;
        background: #28a745;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 5px;
        cursor: pointer;
    }

    /* ── STICKY TOP BAR ── */
    .topbar {
        position: sticky;
        top: 0;
        z-index: 100;
        background: var(--navy);
        color: var(--white);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 28px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.25);
    }

    .topbar-msg {
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.3px;
    }

    .topbar-msg span {
        color: var(--gold-lt);
    }

    .topbar-cta {
        background: var(--gold);
        color: var(--white);
        padding: 8px 22px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.5px;
        white-space: nowrap;
        transition: background 0.2s;
    }

    .topbar-cta:hover {
        background: #a87008;
    }

    /* ── HERO ── */
    .hero {
        background: var(--navy);
        color: var(--white);
        padding: 72px 24px 80px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            radial-gradient(ellipse 80% 60% at 50% -10%, rgba(212, 150, 10, 0.18) 0%, transparent 70%),
            radial-gradient(ellipse 50% 40% at 80% 100%, rgba(21, 32, 96, 0.6) 0%, transparent 60%);
        pointer-events: none;
    }

    .hero-inner {
        position: relative;
        z-index: 1;
        max-width: 820px;
        margin: 0 auto;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(200, 136, 10, 0.2);
        border: 1px solid rgba(200, 136, 10, 0.5);
        color: var(--gold-lt);
        padding: 7px 20px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin-bottom: 28px;
    }

    .hero-badge .dot {
        width: 7px;
        height: 7px;
        background: #ff4444;
        border-radius: 50%;
        animation: pulse 1.5s ease-in-out infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1)
        }

        50% {
            opacity: 0.5;
            transform: scale(1.3)
        }
    }

    .hero h1 {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: clamp(30px, 5vw, 54px);
        font-weight: 900;
        line-height: 1.18;
        margin-bottom: 22px;
        letter-spacing: -0.5px;
    }

    .hero h1 em {
        font-style: normal;
        background: linear-gradient(90deg, var(--gold-lt), var(--gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-sub {
        font-size: clamp(15px, 2vw, 18px);
        color: rgba(255, 255, 255, 0.75);
        max-width: 600px;
        margin: 0 auto 36px;
        font-weight: 400;
    }

    .hero-audience {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        margin-bottom: 40px;
    }

    .audience-tag {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.15);
        color: rgba(255, 255, 255, 0.85);
        padding: 6px 16px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 500;
    }

    .hero-cta-wrap {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 14px;
    }

    .btn-primary {
        display: inline-block;
        background: var(--gold);
        color: var(--white);
        padding: 18px 52px;
        border-radius: 50px;
        font-size: 18px;
        font-weight: 800;
        letter-spacing: 0.5px;
        box-shadow: 0 8px 30px rgba(200, 136, 10, 0.4);
        transition: all 0.25s ease;
        cursor: pointer;
        border: none;
    }

    .btn-primary:hover {
        background: #a87008;
        transform: translateY(-2px);
        box-shadow: 0 14px 38px rgba(200, 136, 10, 0.5);
    }

    .btn-primary:active {
        transform: translateY(0);
    }

    .hero-note {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.55);
    }

    .hero-note strong {
        color: rgba(255, 255, 255, 0.85);
    }

    /* ── TRUST STRIP ── */
    .trust-strip {
        background: var(--white);
        border-bottom: 1px solid var(--slate);
        padding: 20px 24px;
    }

    .trust-strip-inner {
        max-width: 900px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 30px;
    }

    .trust-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .trust-icon {
        font-size: 22px;
    }

    .trust-text {
        font-size: 13px;
        font-weight: 600;
        color: var(--ink);
    }

    .trust-text span {
        color: var(--muted);
        font-weight: 400;
    }

    .trust-sep {
        width: 1px;
        height: 28px;
        background: var(--slate);
    }

    /* ── SECTION BASE ── */
    .section {
        padding: 72px 24px;
    }

    .section-label {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: var(--gold);
        margin-bottom: 12px;
        text-align: center;
    }

    .section-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: clamp(26px, 4vw, 40px);
        font-weight: 900;
        line-height: 1.2;
        color: var(--navy);
        text-align: center;
        margin-bottom: 14px;
    }

    .section-sub {
        font-size: 16px;
        color: var(--muted);
        text-align: center;
        max-width: 620px;
        margin: 0 auto 50px;
    }

    .wrap {
        max-width: 1080px;
        margin: 0 auto;
    }

    .wrap-sm {
        max-width: 760px;
        margin: 0 auto;
    }

    /* ── PAIN POINTS ── */
    .pain-section {
        background: var(--white);
    }

    .pain-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .pain-card {
        background: #FFF8F5;
        border: 1px solid #FFD8C0;
        border-left: 4px solid var(--orange);
        padding: 24px 22px;
        border-radius: var(--r);
        transition: box-shadow 0.2s;
    }

    .pain-card:hover {
        box-shadow: 0 6px 24px rgba(216, 67, 21, 0.08);
    }

    .pain-card h3 {
        font-size: 15px;
        font-weight: 700;
        color: var(--orange);
        margin-bottom: 8px;
    }

    .pain-card p {
        font-size: 14px;
        color: #555;
        line-height: 1.7;
    }

    /* ── LEARN (BENEFITS) ── */
    .learn-section {
        background: var(--cream);
    }

    .learn-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 22px;
    }

    .learn-card {
        background: var(--white);
        border: 1px solid var(--slate);
        padding: 28px 24px;
        border-radius: var(--r-lg);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
        transition: all 0.25s;
    }

    .learn-card:hover {
        box-shadow: 0 10px 32px rgba(11, 19, 64, 0.1);
        transform: translateY(-4px);
        border-color: rgba(200, 136, 10, 0.4);
    }

    .learn-icon {
        font-size: 36px;
        margin-bottom: 14px;
    }

    .learn-card h3 {
        font-size: 15px;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 8px;
    }

    .learn-card p {
        font-size: 13px;
        color: var(--muted);
        line-height: 1.7;
    }

    /* ── INSIGHTS ── */
    .insights-section {
        background: var(--navy);
        color: var(--white);
    }

    .insights-section .section-title {
        color: var(--white);
    }

    .insights-section .section-sub {
        color: rgba(255, 255, 255, 0.65);
    }

    .insight-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .insight-item {
        display: flex;
        gap: 20px;
        align-items: flex-start;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 24px 22px;
        border-radius: var(--r-lg);
        transition: background 0.2s;
    }

    .insight-item:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    .insight-num {
        flex-shrink: 0;
        width: 36px;
        height: 36px;
        background: var(--gold);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 15px;
        color: var(--white);
    }

    .insight-text h4 {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 6px;
    }

    .insight-text p {
        font-size: 13px;
        opacity: 0.75;
        line-height: 1.7;
    }

    /* ── TRAINER ── */
    .trainer-section {
        background: var(--white);
    }

    .trainer-layout {
        display: flex;
        gap: 52px;
        align-items: flex-start;
        max-width: 900px;
        margin: 0 auto;
    }

    .trainer-photo {
        flex-shrink: 0;
        width: 260px;
        height: 266px;
        border-radius: var(--r-lg);
        overflow: hidden;
        border: 3px solid var(--slate);
        box-shadow: 0 12px 40px rgba(11, 19, 64, 0.15);
        /* background: linear-gradient(135deg, #e8eaf6, #c5cae9); */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 72px;
    }

    .trainer-name {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 30px;
        font-weight: 900;
        color: var(--navy);
        margin-bottom: 6px;
    }

    .trainer-role {
        font-size: 13px;
        font-weight: 600;
        color: var(--gold);
        line-height: 1.8;
        margin-bottom: 18px;
    }

    .trainer-bio {
        font-size: 15px;
        color: #444;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .trainer-quote {
        background: #F0F2FB;
        border-left: 3px solid var(--navy-mid);
        padding: 14px 18px;
        border-radius: 0 var(--r) var(--r) 0;
        font-style: italic;
        color: var(--navy-mid);
        font-size: 14px;
        margin-bottom: 24px;
    }

    .trainer-stats {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
    }

    .stat-pill {
        background: var(--cream);
        border: 1px solid var(--slate);
        padding: 10px 18px;
        border-radius: 50px;
        text-align: center;
    }

    .stat-pill .num {
        font-size: 22px;
        font-weight: 900;
        color: var(--navy);
        line-height: 1;
    }

    .stat-pill .lbl {
        font-size: 11px;
        color: var(--muted);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-top: 2px;
    }

    /* ── PRICING ANCHOR ── */
    .price-section {
        background: var(--navy);
        color: var(--white);
        text-align: center;
        padding: 80px 24px;
    }

    .price-section .section-title {
        color: var(--white);
    }

    .price-section .section-sub {
        color: rgba(255, 255, 255, 0.65);
        margin-bottom: 40px;
    }

    .price-box {
        max-width: 620px;
        margin: 0 auto;
        background: var(--white);
        color: var(--ink);
        border-radius: 24px;
        padding: 48px 40px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.35);
    }

    .price-was {
        font-size: 20px;
        color: #aaa;
        text-decoration: line-through;
        margin-bottom: 6px;
    }

    .price-main {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: clamp(72px, 12vw, 100px);
        font-weight: 900;
        color: var(--navy);
        line-height: 1;
        margin-bottom: 6px;
    }

    .price-main sup {
        font-size: 0.35em;
        vertical-align: top;
        margin-top: 0.2em;
        color: var(--gold);
    }

    .price-note {
        font-size: 14px;
        color: var(--muted);
        margin-bottom: 30px;
    }

    .price-features {
        list-style: none;
        text-align: left;
        margin: 0 0 32px;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .price-features li {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 15px;
        color: #333;
        padding-bottom: 12px;
        border-bottom: 1px solid #F0F0F0;
    }

    .price-features li:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .price-features .check {
        width: 22px;
        height: 22px;
        flex-shrink: 0;
        background: var(--green);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 13px;
        font-weight: 700;
    }

    .price-features .badge-val {
        margin-left: auto;
        font-size: 12px;
        font-weight: 700;
        color: var(--green);
        background: #E8F5E9;
        padding: 3px 10px;
        border-radius: 20px;
    }

    /* ── TESTIMONIALS ── */
    .testimonials-section {
        background: var(--cream);
    }

    .testimonial-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 22px;
    }

    .tcard {
        background: var(--white);
        border: 1px solid var(--slate);
        border-radius: var(--r-lg);
        padding: 26px 24px;
        position: relative;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
    }

    .tcard-quote {
        font-size: 52px;
        color: var(--gold);
        opacity: 0.25;
        font-family: Georgia, serif;
        line-height: 0.8;
        margin-bottom: 10px;
        display: block;
    }

    .tcard p {
        font-size: 14px;
        color: #444;
        font-style: italic;
        line-height: 1.75;
        margin-bottom: 18px;
    }

    .tcard-author {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .tcard-av {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        flex-shrink: 0;
        background: linear-gradient(135deg, var(--navy), var(--navy-mid));
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        font-weight: 700;
    }

    .tcard-name {
        font-size: 14px;
        font-weight: 700;
        color: var(--navy);
    }

    .tcard-role {
        font-size: 12px;
        color: var(--muted);
    }

    .tcard-result {
        display: inline-block;
        margin-top: 10px;
        background: #E8F5E9;
        color: var(--green);
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
    }

    /* ── BONUSES ── */
    .bonus-section {
        background: var(--white);
    }

    .bonus-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 22px;
    }

    .bonus-card {
        border: 2px solid var(--slate);
        border-radius: var(--r-lg);
        padding: 32px 24px;
        text-align: center;
        transition: all 0.25s;
    }

    .bonus-card:hover {
        border-color: var(--gold);
        box-shadow: 0 8px 28px rgba(200, 136, 10, 0.1);
        transform: translateY(-4px);
    }

    .bonus-icon {
        font-size: 46px;
        margin-bottom: 14px;
    }

    .bonus-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 8px;
    }

    .bonus-val {
        display: inline-block;
        background: var(--gold);
        color: white;
        padding: 4px 14px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .bonus-desc {
        font-size: 13px;
        color: var(--muted);
        line-height: 1.7;
    }

    /* ── URGENCY ── */
    .urgency-section {
        background: linear-gradient(135deg, var(--navy) 0%, #1E2D80 100%);
        color: var(--white);
        text-align: center;
        padding: 70px 24px;
    }

    .urgency-section .section-title {
        color: var(--white);
        margin-bottom: 40px;
    }

    .urgency-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 24px;
        max-width: 860px;
        margin: 0 auto 40px;
    }

    .urgency-card {
        background: rgba(255, 255, 255, 0.07);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: var(--r-lg);
        padding: 28px 20px;
    }

    .urgency-card .icon {
        font-size: 34px;
        margin-bottom: 12px;
    }

    .urgency-card h4 {
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .urgency-card p {
        font-size: 13px;
        opacity: 0.75;
        line-height: 1.65;
    }

    .urgency-alert {
        display: inline-block;
        background: rgba(245, 200, 66, 0.15);
        border: 1px solid rgba(245, 200, 66, 0.4);
        color: var(--gold-lt);
        padding: 12px 28px;
        border-radius: 50px;
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 36px;
    }

    /* ── FAQ ── */
    .faq-section {
        background: var(--cream);
    }

    .faq-list {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    .faq-item {
        border-bottom: 1px solid var(--slate);
        padding: 24px 0;
    }

    .faq-item:first-child {
        border-top: 1px solid var(--slate);
    }

    .faq-q {
        font-size: 16px;
        font-weight: 700;
        color: var(--navy);
        display: flex;
        align-items: flex-start;
        gap: 14px;
        cursor: pointer;
    }

    .faq-q .qmark {
        flex-shrink: 0;
        width: 26px;
        height: 26px;
        background: var(--gold);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        font-weight: 800;
        margin-top: 1px;
    }

    .faq-a {
        padding: 12px 0 0 40px;
        font-size: 15px;
        color: #555;
        line-height: 1.75;
    }

    /* ── FINAL CTA ── */
    .finalcta {
        background: var(--navy);
        color: var(--white);
        text-align: center;
        padding: 80px 24px;
        position: relative;
        overflow: hidden;
    }

    .finalcta::before {
        content: '₹199';
        position: absolute;
        font-family: 'Playfair Display', serif;
        font-size: 320px;
        font-weight: 900;
        color: rgba(255, 255, 255, 0.02);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        pointer-events: none;
        white-space: nowrap;
    }

    .finalcta-inner {
        position: relative;
        z-index: 1;
        max-width: 720px;
        margin: 0 auto;
    }

    .finalcta h2 {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: clamp(28px, 4vw, 44px);
        font-weight: 900;
        line-height: 1.22;
        margin-bottom: 18px;
    }

    .finalcta p {
        font-size: 17px;
        color: rgba(255, 255, 255, 0.75);
        margin-bottom: 36px;
        max-width: 580px;
        margin-left: auto;
        margin-right: auto;
    }

    .finalcta .guarantee {
        margin-top: 22px;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.55);
    }

    .finalcta .guarantee strong {
        color: var(--gold-lt);
    }

    /* ── FOOTER ── */
    .footer {
        background: #07102A;
        color: rgba(255, 255, 255, 0.4);
        text-align: center;
        padding: 24px;
        font-size: 12px;
        line-height: 1.8;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 700px) {
        .topbar {
            padding: 8px 16px;
        }

        .topbar-msg {
            font-size: 12px;
        }

        .topbar-cta {
            padding: 7px 14px;
            font-size: 12px;
        }

        .trainer-layout {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .trainer-stats {
            justify-content: center;
        }

        .trainer-quote {
            text-align: left;
        }

        .price-box {
            padding: 36px 24px;
        }

        .trust-sep {
            display: none;
        }

        .hero-audience {
            gap: 8px;
        }
    }

    @media (max-width: 480px) {
        .section {
            padding: 56px 18px;
        }

        .hero {
            padding: 56px 18px 60px;
        }
    }
    </style>
</head>

<body>

    <!-- ── STICKY TOP BAR ── -->
    <div class="topbar">
        <p class="topbar-msg">⚡ <span>Only 20% seats remaining</span> — Registration closing soon</p>
        <img src="Enversity-Logo-removebg-preview.png"
            style="width:158px;padding: 10px 10px 10px 10px;background-color: #fff;border-radius: 17px">
        <button onclick="openPopup()" class="topbar-cta">Reserve Seat — ₹199</button>
    </div>

    <!-- ── HERO ── -->
    <section class="hero">
        <div class="hero-inner">
            <!-- <div class="">
                <img src="Enversity-Logo.jpg" style="width: 100%;">
            </div> -->
            <div class="hero-badge">
                <span class="dot"></span>
                Live Masterclass · Limited to 100 Seats
            </div>
            <h1>Become the Holistic Educational<br><em>Leader top Institutions hunting For</em></h1>
            <p class="hero-sub">1-Hour Live Masterclass — practical, legal, and strategic leadership skills for India's
                educators, taught by someone who has led at the top.</p>
            <div class="hero-audience">
                <span class="audience-tag">School Principals</span>
                <span class="audience-tag">Vice Principals</span>
                <span class="audience-tag">HODs</span>
                <span class="audience-tag">Senior Teachers</span>
                <span class="audience-tag">College Professors</span>
            </div>
            <div class="hero-cta-wrap">
                <button onclick="openPopup()" class="btn-primary">Reserve My Seat for ₹199</button>
                <p class="hero-note"><strong>Only 100 seats for this exclusive live session</strong> | Registration
                    closing soon
                </p>
            </div>
        </div>
    </section>

    <!-- ── TRUST STRIP ── -->
    <div class="trust-strip">
        <div class="trust-strip-inner">
            <div class="trust-item">
                <span class="trust-icon">🎯</span>
                <div class="trust-text">18+ Years <span>of Expertise</span></div>
            </div>
            <div class="trust-sep"></div>
            <div class="trust-item">
                <span class="trust-icon">🏛️</span>
                <div class="trust-text">5 Top Institutions <span>Led by Trainer</span></div>
            </div>
            <div class="trust-sep"></div>
            <div class="trust-item">
                <span class="trust-icon">🔴</span>
                <div class="trust-text">100% Live <span>Interactive Session</span></div>
            </div>
            <div class="trust-sep"></div>
            <div class="trust-item">
                <span class="trust-icon">📜</span>
                <div class="trust-text">Certificate <span>Included</span></div>
            </div>
            <div class="trust-sep"></div>
            <div class="trust-item">
                <span class="trust-icon">✅</span>
                <div class="trust-text">Satisfaction <span>Guaranteed</span></div>
            </div>
        </div>
    </div>

    <!-- ── PAIN POINTS ── -->
    <section class="section pain-section">
        <div class="wrap">
            <p class="section-label">Does This Sound Familiar?</p>
            <h2 class="section-title">Are You Facing These Leadership Challenges?</h2>
            <p class="section-sub">Thousands of talented educators feel stuck. If you recognise any of these, this
                masterclass was built for you.</p>
            <div class="pain-grid">
                <div class="pain-card">
                    <h3>📌 Stuck in the Same Role</h3>
                    <p>You've been teaching for years with excellent results, yet promotions and leadership
                        opportunities seem to pass you by every single time.
                    </p>
                </div>
                <div class="pain-card">
                    <h3>📌 Limited Growth Opportunities</h3>
                    <p>Your institution has few openings for leadership roles, and when they do arise, you're unsure how
                        to position yourself as the ideal candidate.</p>
                </div>
                <div class="pain-card">
                    <h3>📌 No Formal Leadership Training</h3>
                    <p>You excel at teaching, but nobody ever trained you on how to manage teams, handle conflicts, or
                        make strategic decisions as a leader.</p>
                </div>
                <div class="pain-card">
                    <h3>📌 Struggling with Stakeholders</h3>
                    <p>Managing teachers, dealing with parents, handling administrative pressure, and aligning with
                        management feels overwhelming and exhausting.</p>
                </div>
                <div class="pain-card">
                    <h3>📌 Overlooked for Leadership</h3>
                    <p>Despite your dedication and hard work, leadership positions always go to someone else. You feel
                        invisible when it matters most.</p>
                </div>
                <div class="pain-card">
                    <h3>📌 Unclear Career Path</h3>
                    <p>You want to grow into a Principal, Vice Principal, or Academic Head, but you have no roadmap or
                        guidance on how to get there.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── WHAT YOU LEARN ── -->
    <section class="section learn-section">
        <div class="wrap">
            <p class="section-label">What You Will Learn</p>
            <h2 class="section-title">60 Minutes. 9 Leadership Breakthroughs.</h2>
            <p class="section-sub">Insights that most educators take years to figure out on their own — distilled into
                one live session.</p>
            <div class="learn-grid">
                <div class="learn-card">
                    <div class="learn-icon">🧠</div>
                    <h3>Strategic Leadership Thinking</h3>
                    <p>Stop managing. Start leading. Learn how top Principals think 3 steps ahead — handling board
                        pressure, parent escalations, and institutional politics without losing authority.</p>
                </div>
                <div class="learn-card">
                    <div class="learn-icon">⚖️</div>
                    <h3>Handling Staff Legal Issues</h3>
                    <p>Wrongful termination claims, PF disputes, RTE & POCSO liabilities — understand your exposure and
                        how to conduct proper inquiry committees that hold up legally.</p>
                </div>
                <div class="learn-card">
                    <div class="learn-icon">👥</div>
                    <h3>Building High-Performance Teams</h3>
                    <p>Handle underperforming teachers without conflict, delegate effectively in school culture, and
                        create accountability without destroying morale.</p>
                </div>
                <div class="learn-card">
                    <div class="learn-icon">💬</div>
                    <h3>Stakeholder Management</h3>
                    <p>Navigate board members, trustees, management committees, and government bodies — without
                        compromising your values or position.</p>
                </div>
                <div class="learn-card">
                    <div class="learn-icon">🚨</div>
                    <h3>Crisis &amp; Conflict Management</h3>
                    <p>Student incidents, parent mobs, media pressure, staff strikes — know exactly what to say, what
                        not to say, and who to call to protect your institution's image.</p>
                </div>
                <div class="learn-card">
                    <div class="learn-icon">🚀</div>
                    <h3>Leadership Brand & Career Acceleration</h3>
                    <p>Become the go-to name in your district circles. Build visibility through the right networks,
                        committees, and platforms to reach Director or Trustee-level roles.</p>
                </div>
                <div class="learn-card">
                    <div class="learn-icon">🏛️</div>
                    <h3>Institutional Governance</h3>
                    <p>Understand the real Management vs. Principal power dynamic, protect your authority legally, and
                        know what to do when ownership crosses professional lines.</p>
                </div>
                <div class="learn-card">
                    <div class="learn-icon">🧩</div>
                    <h3>The Hidden Curriculum of Leadership</h3>
                    <p>What no B.Ed program taught you about running an institution — the unwritten rules of surviving
                        and thriving in Indian educational bureaucracy.</p>
                </div>
                <div class="learn-card">
                    <div class="learn-icon">📊</div>
                    <h3>Data-Driven Institution Management</h3>
                    <p>Use student results, attendance trends, and fee data to make leadership decisions and present
                        management reports that protect your position.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── 7 INSIGHTS ── -->
    <section class="section insights-section">
        <div class="wrap-sm">
            <p class="section-label">7 Powerful Insights</p>
            <h2 class="section-title">What Will Change How You See Leadership — Forever</h2>
            <p class="section-sub">Each insight is drawn from real institutional experience, not textbooks.</p>
            <div class="insight-list">
                <div class="insight-item">
                    <div class="insight-num">1</div>
                    <div class="insight-text">
                        <h4>The 5-Pillar Institutional Leadership Framework</h4>
                        <p>The exact operating system used by high-performing Principals to simultaneously manage
                            academic results, staff culture, parent trust, management expectations, and compliance —
                            without burning out.</p>
                    </div>
                </div>
                <div class="insight-item">
                    <div class="insight-num">2</div>
                    <div class="insight-text">
                        <h4>The Invisible Ceiling: Why Brilliant Educators Get Overlooked</h4>
                        <p>The brutal truth about why the most qualified person rarely gets promoted — and the 3
                            strategic moves that put you on management's radar and make you impossible to ignore.</p>
                    </div>
                </div>
                <div class="insight-item">
                    <div class="insight-num">3</div>
                    <div class="insight-text">
                        <h4>The Power Communication Playbook</h4>
                        <p>How to handle the 4 most dangerous conversations every school leader faces: the angry parent
                            threatening legal action, the underperforming teacher with management's backing, the
                            boundary-crossing trustee, and the negative staff member.</p>
                    </div>
                </div>
                <div class="insight-item">
                    <div class="insight-num">4</div>
                    <div class="insight-text">
                        <h4>Building Unshakeable Authority &amp; Leadership Brand</h4>
                        <p>How senior educators become the name that gets recommended — inside their institution, across
                            board networks, and in district-level circles. Includes digital presence and committee
                            positioning.</p>
                    </div>
                </div>
                <div class="insight-item">
                    <div class="insight-num">5</div>
                    <div class="insight-text">
                        <h4>Crisis Management for School Leaders</h4>
                        <p>A step-by-step approach to handling emergencies, conflicts, and unexpected challenges with
                            calm authority and clear decision-making.</p>
                    </div>
                </div>
                <div class="insight-item">
                    <div class="insight-num">6</div>
                    <div class="insight-text">
                        <h4>The Legal Blind Spots That Put School Leaders at Risk</h4>
                        <p>What POCSO, RTE, RTI, labour law, and service rules actually mean for you — explained in
                            plain language. The 5 legal mistakes Principals make without knowing it.</p>
                    </div>
                </div>
                <div class="insight-item">
                    <div class="insight-num">7</div>
                    <div class="insight-text">
                        <h4>Your Personalized Leadership Growth Plan</h4>
                        <p>A battle-tested personal roadmap — weekly milestones, key relationships to build, skills to
                            demonstrate, and the exact moment to ask for your next designation.</p>
                    </div>
                </div>
            </div>
            <div style="text-align:center;margin-top:40px;">
                <button onclick="openPopup()" class="btn-primary">Reserve My Seat for ₹199</button>
            </div>
        </div>
    </section>

    <!-- ── TRAINER ── -->
    <section class="section trainer-section">
        <div class="wrap">
            <p class="section-label">Your Trainer</p>
            <h2 class="section-title">Meet Amol Chavan</h2>
            <p class="section-sub">Learn from someone who hasn't just studied leadership — he has lived it at the
                highest levels of Indian education.</p>
            <div class="trainer-layout">
                <div class="trainer-photo"><img src="amol-chavan.jpeg"></div>
                <div>
                    <h3 class="trainer-name">Amol Chavan</h3>
                    <p class="trainer-role">
                        Former CEO, Wadia College &nbsp;·&nbsp; Former CEO, Terna Group<br>
                        Executive Director, NICMAR &nbsp;·&nbsp; Council Member, WALCHAND<br>
                        Educational Leadership Expert &amp; Coach
                    </p>
                    <p class="trainer-bio">With extensive experience in educational leadership, institutional
                        governance, academic administration, and strategic development, Amol Chavan has guided
                        educational institutions and professionals in building sustainable, future-ready systems. His
                        practical insights bridge the gap between academic expertise and institutional leadership.</p>
                    <div class="trainer-quote">"My mission is to bridge the gap between academic expertise and
                        institutional leadership — helping you become the leader your institution needs."</div>
                    <div class="trainer-stats">
                        <div class="stat-pill">
                            <div class="num">18+</div>
                            <div class="lbl">Years Experience</div>
                        </div>
                        <div class="stat-pill">
                            <div class="num">5</div>
                            <div class="lbl">Top Institutions Led</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── PRICING ── -->
    <section class="price-section" id="register">
        <div class="wrap">
            <p class="section-label" style="color:var(--gold-lt);">Premium Leadership Training</p>
            <h2 class="section-title">World-Class Skills. Accessible Price.</h2>
            <p class="section-sub">Every educator deserves great leadership training. ₹199 ensures only serious,
                committed educators join.</p>
            <div class="price-box">
                <div class="price-was">Actual Value: ₹4,999</div>
                <div class="price-main"><sup>₹</sup>199</div>
                <p class="price-note">One-Time Payment · No Hidden Charges · Instant Confirmation</p>
                <ul class="price-features">
                    <li>
                        <span class="check">✓</span>
                        1-Hour Live Interactive Session with Amol Chavan
                        <span class="badge-val">LIVE</span>
                    </li>
                    <li>
                        <span class="check">✓</span>
                        Leadership Growth Roadmap PDF
                        <span class="badge-val">₹1,500</span>
                    </li>
                    <li>
                        <span class="check">✓</span>
                        Leadership Assessment Tool
                        <span class="badge-val">₹999</span>
                    </li>
                    <li>
                        <span class="check">✓</span>
                        Certificate of Participation
                        <span class="badge-val">₹499</span>
                    </li>
                    <li>
                        <span class="check">✓</span>
                        Live Q&amp;A &amp; Personalized Guidance
                        <span class="badge-val">FREE</span>
                    </li>
                </ul>
                <button onclick="openPopup()" class="btn-primary"
                    style="width:100%;display:block;text-align:center;font-size:18px;padding:18px;">Reserve My Seat for
                    ₹199 →</button>
            </div>
        </div>
    </section>

    <!-- ── TESTIMONIALS ── -->
    <section class="section testimonials-section">
        <div class="wrap">
            <p class="section-label">Success Stories</p>
            <h2 class="section-title">Real Educators. Real Promotions.</h2>
            <p class="section-sub">These educators attended and transformed their careers. You could be next.</p>
            <div class="testimonial-grid">
                <div class="tcard">
                    <span class="tcard-quote">"</span>
                    <p>Within 3 months of applying the leadership framework, I was promoted from HOD to Vice Principal.
                        The communication strategies alone changed how management perceived my capabilities.</p>
                    <div class="tcard-author">
                        <div class="tcard-av">SP</div>
                        <div>
                            <div class="tcard-name">Sunita Patel</div>
                            <div class="tcard-role">Vice Principal, Pune</div>
                        </div>
                    </div>
                    <span class="tcard-result">🎯 Promoted to Vice Principal</span>
                </div>
                <div class="tcard">
                    <span class="tcard-quote">"</span>
                    <p>I was a senior teacher for 8 years with no growth path. I implemented the team management
                        strategies and within 6 months, became Academic Coordinator.</p>
                    <div class="tcard-author">
                        <div class="tcard-av">AK</div>
                        <div>
                            <div class="tcard-name">Arun Kumar</div>
                            <div class="tcard-role">Academic Coordinator, Mumbai</div>
                        </div>
                    </div>
                    <span class="tcard-result">🎯 Promoted to Academic Coordinator</span>
                </div>
                <div class="tcard">
                    <span class="tcard-quote">"</span>
                    <p>I went from being an invisible teacher to being the first name management considered when a
                        Principal position opened. I got the job.</p>
                    <div class="tcard-author">
                        <div class="tcard-av">MK</div>
                        <div>
                            <div class="tcard-name">Manish Khanna</div>
                            <div class="tcard-role">Principal, New Delhi</div>
                        </div>
                    </div>
                    <span class="tcard-result">🎯 Promoted to Principal</span>
                </div>
                <div class="tcard">
                    <span class="tcard-quote">"</span>
                    <p>The decision-making framework helped me handle a major departmental conflict that earned me the
                        HOD position. As a College Professor, I found tremendous value here.</p>
                    <div class="tcard-author">
                        <div class="tcard-av">PR</div>
                        <div>
                            <div class="tcard-name">Dr. Priya Rao</div>
                            <div class="tcard-role">Head of Department, Bangalore</div>
                        </div>
                    </div>
                    <span class="tcard-result">🎯 Promoted to HOD</span>
                </div>
                <div class="tcard">
                    <span class="tcard-quote">"</span>
                    <p>The crisis management framework saved me during a difficult parent-teacher conflict. My Principal
                        recommended me for Vice Principal immediately after.</p>
                    <div class="tcard-author">
                        <div class="tcard-av">RJ</div>
                        <div>
                            <div class="tcard-name">Ravi Joshi</div>
                            <div class="tcard-role">Vice Principal, Hyderabad</div>
                        </div>
                    </div>
                    <span class="tcard-result">🎯 Promoted to Vice Principal</span>
                </div>
                <div class="tcard">
                    <span class="tcard-quote">"</span>
                    <p>This masterclass gave me a practical roadmap I could implement immediately. Now I lead a team of
                        12 teachers with full confidence.</p>
                    <div class="tcard-author">
                        <div class="tcard-av">NS</div>
                        <div>
                            <div class="tcard-name">Neha Sharma</div>
                            <div class="tcard-role">Team Lead, Chennai</div>
                        </div>
                    </div>
                    <span class="tcard-result">🎯 Leading a Team of 12</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ── BONUSES ── -->
    <section class="section bonus-section">
        <div class="wrap">
            <p class="section-label">Exclusive Bonuses</p>
            <h2 class="section-title">₹3,500 Worth of Bonuses — Free with Registration</h2>
            <p class="section-sub">These are not fillers. They are tools you will use on Monday morning.</p>
            <div class="bonus-grid">
                <div class="bonus-card">
                    <div class="bonus-icon">📋</div>
                    <h3 class="bonus-title">Leadership Growth Roadmap PDF</h3>
                    <span class="bonus-val">Worth ₹1,500</span>
                    <p class="bonus-desc">Step-by-step roadmap — skills to build, actions to take, milestones to hit on
                        your journey from teacher to Principal.</p>
                </div>
                <div class="bonus-card">
                    <div class="bonus-icon">📊</div>
                    <h3 class="bonus-title">Leadership Assessment Tool</h3>
                    <span class="bonus-val">Worth ₹999</span>
                    <p class="bonus-desc">Detailed self-assessment that identifies your leadership strengths, gaps, and
                        personalized focus areas for maximum growth.</p>
                </div>
                <div class="bonus-card">
                    <div class="bonus-icon">🏆</div>
                    <h3 class="bonus-title">Certificate of Participation</h3>
                    <span class="bonus-val">Worth ₹499</span>
                    <p class="bonus-desc">A professional certificate that adds credibility to your resume and
                        demonstrates your commitment to continuous development.</p>
                </div>
            </div>
            <div style="text-align:center;margin-top:48px;">
                <button onclick="openPopup()" class="btn-primary">Claim All Bonuses — Register for ₹199</button>
            </div>
        </div>
    </section>

    <!-- ── URGENCY ── -->
    <section class="urgency-section">
        <div class="wrap">
            <h2 class="section-title">Don't Miss This Session</h2>
            <div class="urgency-alert">⚡ 80% seats already reserved — only 20% remaining</div>
            <div class="urgency-grid">
                <div class="urgency-card">
                    <div class="icon">🎟️</div>
                    <h4>Only 100 Seats</h4>
                    <p>To ensure personalized interaction and live Q&amp;A, this masterclass is strictly limited to 100
                        participants.</p>
                </div>
                <div class="urgency-card">
                    <div class="icon">🔴</div>
                    <h4>Live Only — No Replay Guarantee</h4>
                    <p>This is a live interactive session. The full experience — direct Q&amp;A with Amol — is only
                        available live.</p>
                </div>
                <div class="urgency-card">
                    <div class="icon">⏰</div>
                    <h4>Registration Closes When Full</h4>
                    <p>Once seats are filled, registration closes automatically. No exceptions and no extensions.</p>
                </div>
            </div>
            <button onclick="openPopup()" class="btn-primary">Reserve My Seat Before It's Gone</button>
        </div>
    </section>

    <!-- ── FAQ ── -->
    <section class="section faq-section">
        <div class="wrap-sm">
            <p class="section-label">FAQ</p>
            <h2 class="section-title">Everything You Need to Know</h2>
            <p class="section-sub">Before you register.</p>
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-q"><span class="qmark">Q</span>Who should attend this masterclass?</div>
                    <p class="faq-a">School Principals, Vice Principals, Academic Coordinators, HODs, Senior Teachers,
                        College Professors, and any educator aspiring to move into a leadership role.</p>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><span class="qmark">Q</span>Is this a live session or a recording?</div>
                    <p class="faq-a">100% live and interactive, conducted via Zoom. You can see the trainer, participate
                        in discussions, and ask questions in real-time. It is NOT a pre-recorded video.</p>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><span class="qmark">Q</span>Is this suitable for teachers not yet in leadership
                        roles?</div>
                    <p class="faq-a">Absolutely. This masterclass is especially valuable for classroom teachers who want
                        to prepare for leadership positions — you'll gain insights that position you for your next
                        promotion.</p>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><span class="qmark">Q</span>How do I join the live masterclass?</div>
                    <p class="faq-a">After registration and payment of ₹199, you'll receive a confirmation email with
                        the Zoom link. Simply click the link at the scheduled time to join from your computer, tablet,
                        or smartphone.</p>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><span class="qmark">Q</span>Will I get a recording if I miss the live session?
                    </div>
                    <p class="faq-a">Registered participants will receive limited-time access to the session recording,
                        along with all bonus materials. However, we strongly encourage live attendance for the full
                        interactive Q&amp;A experience.</p>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><span class="qmark">Q</span>Can I attend if I am a college professor or lecturer?
                    </div>
                    <p class="faq-a">Yes. The leadership principles taught apply across all educational institutions —
                        schools, colleges, universities, and training centers. College Professors aspiring to become
                        HODs or Deans will find immense value.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FINAL CTA ── -->
    <section class="finalcta">
        <div class="finalcta-inner">
            <h2>Your Leadership Journey Starts with One Decision</h2>
            <p>Every great Principal was once a teacher who decided to invest in their leadership growth. The educators
                who rise to the top chose to develop their skills deliberately — not accidentally.</p>
            <p style="font-size:20px;font-weight:800;color:var(--gold-lt);margin-bottom:40px;">For just ₹199, take the
                first step toward the leadership role you deserve.</p>
            <button onclick="openPopup()" class="btn-primary" style="font-size:20px;padding:20px 56px;">Reserve My Seat
                for ₹199
                →</button>
            <p class="guarantee" style="margin-top:22px;">✅ <strong>100% Satisfaction Guarantee</strong> · Attend the
                full session or we'll make it right</p>
            <p class="guarantee" style="margin-top:10px;">⚡ <strong>Only 20 seats left</strong> · Registration closes
                when full</p>
        </div>
    </section>



    <div class="popup" id="popupForm">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>

            <h2 style="text-align: center;margin-bottom: 20px;">Enquire Now</h2>

            <form action="mail.php" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>

                <div class="form-group">
                    <input type="tel" type="tel"
                        oninput="this.value = this.value.replace(/[^0-9.{9}]/g, '').replace(/(\..*?)\..*/g, '$1');"
                        maxlength="10" name="number" placeholder="Phone Number" required>
                </div>

                <div class="" style="text-align: center;">
                    <button type="submit" class="btn-primary" style="padding: 10px 25px 10px 25px;font-size:16px">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
    function openPopup() {
        document.getElementById("popupForm").style.display = "block";
    }

    function closePopup() {
        document.getElementById("popupForm").style.display = "none";
    }

    window.onclick = function(event) {
        const popup = document.getElementById("popupForm");
        if (event.target === popup) {
            popup.style.display = "none";
        }
    }
    </script>


    <!-- ── FOOTER ── */
<footer class="footer">
  <p>© 2026 Educational Leadership Academy. All Rights Reserved.</p>
  <p style="margin-top:6px;">This masterclass is an entry-level offer introducing participants to our premium leadership development program.</p>
</footer>

</body>
</html>