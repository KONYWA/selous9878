<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customize Your Safari - Mafoy Africa Safaris</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('Capture.JPG'); /* Use your image */
            background-size: cover;
            background-position: center;
        }

        .customize-box {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 90%;
        }

        .customize-box h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            text-transform: uppercase;
            margin: 0;
            letter-spacing: 2px;
            color: #d4af37; /* Golden color */
        }

        .customize-box p {
            font-size: 1.5rem;
            margin: 20px 0 40px;
            font-weight: 500;
            letter-spacing: 1px;
            color: #333;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #d4af37;
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }

        .cta-button:hover {
            background-color: #ffa500;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
        }

        .cta-button:active {
            transform: translateY(0);
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .customize-box h1 {
                font-size: 2rem;
            }

            .customize-box p {
                font-size: 1.2rem;
            }

            .cta-button {
                padding: 12px 24px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="customize-box">
        <h1>CUSTOMIZE YOUR WAY</h1>
        <p>TAILOR-MADE SAFARI EXPERIENCES</p>
        <a href="customize_form.html" class="cta-button">Start Customizing Now</a>
    </div>
</body>
</html>