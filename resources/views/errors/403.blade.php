<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Forbidden | SEM Kitchen Equipment</title>
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
            background: linear-gradient(135deg, #d97706 0%, #f59e0b 100%);
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            transform: rotate(-6deg);
            box-shadow: 0 8px 24px rgba(217, 119, 6, 0.3);
        }

        .error-code {
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(5rem, 15vw, 9rem);
            line-height: 1;
            color: #d97706;
            letter-spacing: 4px;
            position: relative;
            display: inline-block;
        }

        .error-code::after {
            content: attr(data-text);
            position: absolute;
            left: 4px;
            top: 4px;
            color: rgba(217, 119, 6, 0.08);
            z-index: -1;
        }

        .error-divider {
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #d97706, #f59e0b);
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

        .lock-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            background: #fffbeb;
            color: #d97706;
            border: 1px solid #fde68a;
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(217, 119, 6, 0.03);
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
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                    <path d="M7 11V7a5 5 0 0110 0v4" />
                </svg>
            </div>

            <div class="lock-badge">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z" />
                </svg>
                Access Denied
            </div>

            <div class="error-code" data-text="403">403</div>
            <div class="error-divider"></div>

            <h1 class="error-title">Access Forbidden</h1>
            <p class="error-desc">
                You don't have permission to access this area. This section is restricted.
                If you believe this is a mistake, please get in touch with us.
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
                <a href="{{ route('contact') }}" class="btn-secondary-custom">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                    </svg>
                    Contact Support
                </a>
            </div>
        </div>
    </div>
</body>

</html>
