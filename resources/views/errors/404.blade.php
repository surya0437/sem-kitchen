<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | SEM Kitchen Equipment</title>
    <script src="/assets/js/tailwind.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600&display=swap');

        :root {
            --primary: #1a3a4a;
            /* match your bg-primary */
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

        /* Decorative background grid */
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
            background: linear-gradient(135deg, var(--primary) 0%, #2a5568 100%);
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            transform: rotate(-6deg);
            box-shadow: 0 8px 24px rgba(26, 58, 74, 0.25);
            animation: wiggle 3s ease-in-out infinite;
        }

        @keyframes wiggle {

            0%,
            100% {
                transform: rotate(-6deg);
            }

            50% {
                transform: rotate(4deg);
            }
        }

        .error-code {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(5rem, 15vw, 9rem);
            line-height: 1;
            color: var(--primary);
            letter-spacing: 4px;
            position: relative;
            display: inline-block;
        }

        .error-code::after {
            content: attr(data-text);
            position: absolute;
            left: 4px;
            top: 4px;
            color: rgba(26, 58, 74, 0.08);
            z-index: -1;
        }

        .error-divider {
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), #4a9bb8);
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
            box-shadow: 0 6px 20px rgba(26, 58, 74, 0.4);
        }

        .btn-secondary-custom {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: transparent;
            color: var(--primary);
            padding: 0.8rem 2rem;
            border-radius: 10px;
            font-weight: 500;
            font-size: 0.95rem;
            text-decoration: none;
            border: 2px solid rgba(26, 58, 74, 0.2);
            transition: all 0.2s ease;
        }

        .btn-secondary-custom:hover {
            border-color: var(--primary);
            background: rgba(26, 58, 74, 0.04);
        }

        .quick-links {
            margin-top: 2.5rem;
            padding-top: 2rem;
            border-top: 1px dashed rgba(26, 58, 74, 0.12);
        }

        .quick-links p {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #a0aec0;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .quick-links-list {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .quick-link-pill {
            background: #f7fafc;
            border: 1px solid #e2e8f0;
            color: var(--primary);
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            text-decoration: none;
            transition: all 0.2s;
        }

        .quick-link-pill:hover {
            background: var(--primary);
            color: #fff;
            border-color: var(--primary);
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(26, 58, 74, 0.04);
            pointer-events: none;
        }
    </style>
</head>

<body>
    <div class="error-page">
        <!-- Decorative shapes -->
        <div class="floating-shape" style="width:300px;height:300px;top:-80px;right:-80px;"></div>
        <div class="floating-shape" style="width:200px;height:200px;bottom:-60px;left:-60px;"></div>

        <div class="error-card">
            <div class="error-icon-wrap">
                <!-- Kitchen/search icon -->
                <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8" />
                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    <line x1="11" y1="8" x2="11" y2="14" />
                    <line x1="8" y1="11" x2="14" y2="11" />
                </svg>
            </div>

            <div class="error-code" data-text="404">404</div>
            <div class="error-divider"></div>

            <h1 class="error-title">Page Not Found</h1>
            <p class="error-desc">
                Looks like this page took a trip to the back kitchen and never came back.
                The page you're looking for doesn't exist or may have been moved.
            </p>

            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="{{ route('home') }}" class="btn-primary-custom">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Go Home
                </a>
                <a href="{{ route('product') }}" class="btn-secondary-custom">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path d="M20 7H4a2 2 0 00-2 2v6a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z" />
                        <path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16" />
                    </svg>
                    Browse Equipment
                </a>
            </div>

            <div class="quick-links">
                <p>Quick Navigate</p>
                <div class="quick-links-list">
                    <a href="{{ route('home') }}" class="quick-link-pill">Home</a>
                    <a href="{{ route('product') }}" class="quick-link-pill">Buy Equipment</a>
                    <a href="{{ route('sell-equipment') }}" class="quick-link-pill">Sell Equipment</a>
                    <a href="{{ route('about') }}" class="quick-link-pill">About Us</a>
                    <a href="{{ route('contact') }}" class="quick-link-pill">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
