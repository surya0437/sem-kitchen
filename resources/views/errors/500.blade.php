<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 - Server Error | SEM Kitchen Equipment</title>
    <script src="/assets/js/tailwind.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600&display=swap');

        :root {
            --primary: #1a3a4a;
        }

        .error-page {
            font-family: 'DM Sans', sans-serif;
            min-height: 100vh;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        .error-page::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(26, 58, 74, 0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(26, 58, 74, 0.04) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
        }

        .error-card {
            background: #fff;
            border-radius: 20px;
            padding: 3.5rem 4rem;
            max-width: 680px;
            width: 100%;
            text-align: center;
            box-shadow: 0 20px 60px rgba(26, 58, 74, 0.1);
            border: 1px solid rgba(26, 58, 74, 0.08);
            position: relative;
            z-index: 1;
            animation: slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .error-icon-wrap {
            width: 96px;
            height: 96px;
            background: linear-gradient(135deg, #c0392b 0%, #e74c3c 100%);
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            transform: rotate(-6deg);
            box-shadow: 0 8px 24px rgba(192, 57, 43, 0.3);
            animation: shake 4s ease-in-out infinite;
        }

        @keyframes shake {

            0%,
            90%,
            100% {
                transform: rotate(-6deg) translateX(0);
            }

            92% {
                transform: rotate(-6deg) translateX(-4px);
            }

            94% {
                transform: rotate(-6deg) translateX(4px);
            }

            96% {
                transform: rotate(-6deg) translateX(-4px);
            }

            98% {
                transform: rotate(-6deg) translateX(4px);
            }
        }

        .error-code {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(5rem, 15vw, 9rem);
            line-height: 1;
            color: #c0392b;
            letter-spacing: 4px;
            position: relative;
            display: inline-block;
        }

        .error-code::after {
            content: attr(data-text);
            position: absolute;
            left: 4px;
            top: 4px;
            color: rgba(192, 57, 43, 0.08);
            z-index: -1;
        }

        .error-divider {
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #c0392b, #e74c3c);
            border-radius: 2px;
            margin: 1.25rem auto;
        }

        .error-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1a202c;
            margin-bottom: 0.75rem;
        }

        .error-desc {
            font-size: 1rem;
            color: #718096;
            line-height: 1.7;
            max-width: 420px;
            margin: 0 auto 2.5rem;
        }

        .btn-primary-custom {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--primary);
            color: #fff;
            padding: 0.8rem 2rem;
            border-radius: 10px;
            font-weight: 500;
            font-size: 0.95rem;
            text-decoration: none;
            transition: all 0.2s ease;
            box-shadow: 0 4px 14px rgba(26, 58, 74, 0.3);
        }

        .btn-primary-custom:hover {
            background: #2a5568;
            transform: translateY(-2px);
        }

        .btn-retry {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #c0392b;
            color: #fff;
            padding: 0.8rem 2rem;
            border-radius: 10px;
            font-weight: 500;
            font-size: 0.95rem;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 4px 14px rgba(192, 57, 43, 0.3);
        }

        .btn-retry:hover {
            background: #a93226;
            transform: translateY(-2px);
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            background: #fff5f5;
            color: #c0392b;
            border: 1px solid #fed7d7;
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            background: #c0392b;
            border-radius: 50%;
            animation: pulse-dot 1.5s ease-in-out infinite;
        }

        @keyframes pulse-dot {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.4;
                transform: scale(1.4);
            }
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(192, 57, 43, 0.03);
            pointer-events: none;
        }
    </style>
</head>

<body>
    <div class="error-page">
        <div class="floating-shape" style="width:300px;height:300px;top:-80px;right:-80px;"></div>
        <div class="floating-shape" style="width:200px;height:200px;bottom:-60px;left:-60px;"></div>

        <div class="error-card">
            <div class="error-icon-wrap">
                <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" />
                    <line x1="12" y1="9" x2="12" y2="13" />
                    <line x1="12" y1="17" x2="12.01" y2="17" />
                </svg>
            </div>

            <div class="status-badge">
                <div class="status-dot"></div>
                Server Error
            </div>

            <div class="error-code" data-text="500">500</div>
            <div class="error-divider"></div>

            <h1 class="error-title">Internal Server Error</h1>
            <p class="error-desc">
                Something went wrong in our kitchen. Our team has been notified and
                is working hard to fix the issue. Please try again in a few moments.
            </p>

            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <button onclick="window.location.reload()" class="btn-retry">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <polyline points="23 4 23 10 17 10" />
                        <path d="M20.49 15a9 9 0 11-2.12-9.36L23 10" />
                    </svg>
                    Try Again
                </button>
                <a href="{{ route('home') }}" class="btn-primary-custom">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Go Home
                </a>
            </div>

            <p style="margin-top:2rem;font-size:0.82rem;color:#a0aec0;">
                If this problem persists, please
                <a href="{{ route('contact') }}"
                    style="color:var(--primary);font-weight:600;text-decoration:none;">contact our support team</a>.
            </p>
        </div>
    </div>
</body>

</html>
