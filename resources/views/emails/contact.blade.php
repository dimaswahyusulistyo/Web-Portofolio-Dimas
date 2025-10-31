<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pesan dari Portfolio</title>
</head>
<body>
    <h2>Pesan Baru dari Portfolio Website</h2>
    
    <p><strong>Nama:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Pesan:</strong></p>
    <div style="background: #f9f9f9; padding: 15px; border-left: 4px solid #007bff;">
        {{ $text  }}
    </div>
    
    <br>
    <p><small>Dikirim pada: {{ now()->format('d M Y H:i') }}</small></p>
</body>
</html>