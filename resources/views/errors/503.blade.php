<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>503 - Service Unavailable | SEM Kitchen Equipment</title>
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
            background: linear-gradient(135deg, var(--primary) 0%, #2a5568 100%);
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            transform: rotate(-6deg);
            box-shadow: 0 8px 24px rgba(26, 58, 74, 0.25);
        }

        /* Spinning gear animation */
        .gear {
            animation: spin 4s linear infinite;
            transform-origin: center;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
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
            margin: 0 auto 2rem;
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

        /* Countdown progress */
        .countdown-wrap {
            background: #f7fafc;
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            margin: 0 auto 2rem;
            max-width: 380px;
            border: 1px solid #e2e8f0;
        }

        .countdown-label {
            font-size: 0.82rem;
            color: #a0aec0;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .progress-bar-bg {
            background: #e2e8f0;
            border-radius: 50px;
            height: 8px;
            overflow: hidden;
        }

        .progress-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), #4a9bb8);
            border-radius: 50px;
            animation: progress 30s linear forwards;
            width: 0%;
        }

        @keyframes progress {
            from {
                width: 0%;
            }

            to {
                width: 100%;
            }
        }

        .countdown-timer {
            font-size: 0.9rem;
            color: var(--primary);
            font-weight: 600;
            margin-top: 0.5rem;
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
        <div class="floating-shape" style="width:300px;height:300px;top:-80px;right:-80px;"></div>
        <div class="floating-shape" style="width:200px;height:200px;bottom:-60px;left:-60px;"></div>

        <div class="error-card">
            <div class="error-icon-wrap">
                <!-- Gear/maintenance icon -->
                <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round" class="gear">
                    <circle cx="12" cy="12" r="3" />
                    <path
                        d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z" />
                </svg>
            </div>

            <div class="error-code" data-text="503">503</div>
            <div class="error-divider"></div>

            <h1 class="error-title">Under Maintenance</h1>
            <p class="error-desc">
                Our kitchen is getting a tune-up! We're performing scheduled maintenance
                to bring you an even better experience. We'll be back shortly.
            </p>

            <div class="countdown-wrap">
                <p class="countdown-label">Estimated Time Remaining</p>
                <div class="progress-bar-bg">
                    <div class="progress-bar-fill"></div>
                </div>
                <div class="countdown-timer" id="timer">Checking status...</div>
            </div>

            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-bottom:1.5rem;">
                <button onclick="window.location.reload()" class="btn-primary-custom"
                    style="border:none;cursor:pointer;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <polyline points="23 4 23 10 17 10" />
                        <path d="M20.49 15a9 9 0 11-2.12-9.36L23 10" />
                    </svg>
                    Check Again
                </button>
            </div>

            <p style="font-size:0.82rem;color:#a0aec0;">
                Stay updated —
                <a href="{{ $businessDetail?->facebook ?? '#' }}"
                    style="color:var(--primary);font-weight:600;text-decoration:none;">follow us on Facebook</a>
                for live updates.
            </p>
        </div>
    </div>

    <script>
        // Simple countdown display
        let seconds = 30;
        const timerEl = document.getElementById('timer');

        function updateTimer() {
            if (seconds > 0) {
                timerEl.textContent = `Auto-checking in ${seconds}s...`;
                seconds--;
            } else {
                timerEl.textContent = 'Checking now...';
                window.location.reload();
            }
        }

        updateTimer();
        setInterval(updateTimer, 1000);
    </script>
</body>

</html>
