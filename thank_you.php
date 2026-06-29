<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank You — Course Enquiry</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Inter:wght@300;400;500&display=swap"
        rel="stylesheet" />
    <style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    :root {
        --navy: #0D1B2A;
        --ivory: #F2EBD9;
        --gold: #C9A84C;
        --sage: #7A9E7E;
        --card: #14263A;
    }

    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--navy);
        background-image:
            radial-gradient(ellipse 80% 60% at 50% 0%, rgba(201, 168, 76, 0.08) 0%, transparent 70%),
            url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.02'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        font-family: 'Inter', sans-serif;
        padding: 2rem;
    }

    .card {
        background: var(--card);
        border: 1px solid rgba(201, 168, 76, 0.2);
        border-radius: 2px;
        padding: 3.5rem 3rem;
        max-width: 520px;
        width: 100%;
        text-align: center;
        box-shadow: 0 32px 80px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(255, 255, 255, 0.03);
        animation: fadeUp 0.6s ease both;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(24px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ── Animated checkmark ── */
    .check-wrap {
        width: 72px;
        height: 72px;
        margin: 0 auto 2rem;
        position: relative;
    }

    .circle-bg {
        fill: none;
        stroke: rgba(201, 168, 76, 0.15);
        stroke-width: 2;
    }

    .circle-ring {
        fill: none;
        stroke: var(--gold);
        stroke-width: 2;
        stroke-linecap: round;
        stroke-dasharray: 201;
        stroke-dashoffset: 201;
        transform-origin: center;
        transform: rotate(-90deg);
        animation: drawCircle 0.7s ease forwards 0.2s;
    }

    @keyframes drawCircle {
        to {
            stroke-dashoffset: 0;
        }
    }

    .check-path {
        fill: none;
        stroke: var(--gold);
        stroke-width: 2.5;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-dasharray: 60;
        stroke-dashoffset: 60;
        animation: drawCheck 0.4s ease forwards 0.85s;
    }

    @keyframes drawCheck {
        to {
            stroke-dashoffset: 0;
        }
    }

    /* ── Typography ── */
    .eyebrow {
        font-family: 'Inter', sans-serif;
        font-size: 0.7rem;
        font-weight: 500;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: var(--gold);
        margin-bottom: 0.75rem;
    }

    h1 {
        font-family: 'Playfair Display', serif;
        font-size: clamp(2rem, 5vw, 2.75rem);
        font-weight: 600;
        color: var(--ivory);
        line-height: 1.15;
        margin-bottom: 1rem;
    }

    .body-text {
        font-size: 0.95rem;
        font-weight: 300;
        color: rgba(242, 235, 217, 0.6);
        line-height: 1.75;
        max-width: 360px;
        margin: 0 auto 2.5rem;
    }

    /* ── Divider ── */
    .divider {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 2.5rem;
    }

    .divider::before,
    .divider::after {
        content: '';
        flex: 1;
        height: 1px;
        background: rgba(201, 168, 76, 0.2);
    }

    .divider span {
        font-size: 0.7rem;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        color: rgba(201, 168, 76, 0.5);
        white-space: nowrap;
    }

    /* ── Next steps ── */
    .steps {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        margin-bottom: 2.5rem;
        text-align: left;
    }

    .step {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem;
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 2px;
        background: rgba(255, 255, 255, 0.02);
    }

    .step-icon {
        width: 32px;
        height: 32px;
        flex-shrink: 0;
        background: rgba(201, 168, 76, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .step-icon svg {
        width: 15px;
        height: 15px;
        stroke: var(--gold);
        fill: none;
        stroke-width: 1.8;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .step-label {
        font-size: 0.7rem;
        font-weight: 500;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: var(--sage);
        margin-bottom: 0.2rem;
    }

    .step-desc {
        font-size: 0.85rem;
        color: rgba(242, 235, 217, 0.55);
        line-height: 1.5;
    }

    /* ── Button ── */
    .btn {
        display: inline-block;
        padding: 0.85rem 2.5rem;
        background: var(--gold);
        color: var(--navy);
        font-family: 'Inter', sans-serif;
        font-size: 0.8rem;
        font-weight: 500;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        text-decoration: none;
        border-radius: 1px;
        transition: background 0.2s, transform 0.15s;
    }

    .btn:hover {
        background: #d9b85c;
        transform: translateY(-1px);
    }

    .btn:active {
        transform: translateY(0);
    }

    /* ── Footer note ── */
    .footer-note {
        margin-top: 2rem;
        font-size: 0.75rem;
        color: rgba(242, 235, 217, 0.25);
    }

    .footer-note a {
        color: rgba(201, 168, 76, 0.5);
        text-decoration: none;
    }

    .footer-note a:hover {
        color: var(--gold);
    }

    @media (prefers-reduced-motion: reduce) {

        .card,
        .circle-ring,
        .check-path {
            animation: none;
        }

        .circle-ring {
            stroke-dashoffset: 0;
        }

        .check-path {
            stroke-dashoffset: 0;
        }
    }

    @media (max-width: 480px) {
        .card {
            padding: 2.5rem 1.5rem;
        }
    }
    </style>
</head>

<body>

    <div class="card">

        <!-- Animated check -->
        <div class="check-wrap">
            <svg viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg">
                <circle class="circle-bg" cx="36" cy="36" r="32" />
                <circle class="circle-ring" cx="36" cy="36" r="32" />
                <path class="check-path" d="M22 37l9 9 19-19" />
            </svg>
        </div>

        <p class="eyebrow">Enquiry received</p>
        <h1>Thank you for<br>reaching out.</h1>
        <p class="body-text">
            We've received your course enquiry and we're excited to help you take the next step. Our team will be in
            touch with you shortly.
        </p>


        <a href="index.php" class="btn">Explore more courses</a>

        <p class="footer-note">
            Can't wait? <a href="#">Call us now</a> — our advisors are available Mon–Fri, 9 am–6 pm.
        </p>

    </div>

</body>

</html>