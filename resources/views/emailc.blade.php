<!DOCTYPE html>
<html lang="fr">
<head>
    <style>
        body { font-family: 'Georgia', serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 20px auto; padding: 30px; border: 1px solid #d4af37; background-color: #f9f9f9; }
        .header { text-align: center; margin-bottom: 30px; }
        .logo { font-size: 24px; font-weight: bold; color: #1a1a1a; letter-spacing: 2px; }
        .content { background: #fff; padding: 20px; border-radius: 5px; }
        .footer { text-align: center; margin-top: 30px; font-size: 11px; text-transform: uppercase; color: #888; }
        .gold { color: #d4af37; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">BE<span class="gold">-</span>BEAUTY</div>
        </div>
        <div class="content">
            <p>Bonjour,</p>
            <p><strong>Message transmis :</strong></p>
            <p style="white-space: pre-wrap;">{{ $msg }}</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Be-Beauty Boutique - Tangier, Morocco
        </div>
    </div>
</body>
</html>
