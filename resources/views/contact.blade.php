@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda | SpeedZone</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('car-list') }}">Our Cars</a></li>
                <li><a href="{{ url('about') }}" class="active">About</a></li>
                <li><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
        </nav>

    <div class="container">
    <form action="{{ url('contact-submit') }}" method="POST">
    @csrf
    <label for="name">Adınız:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">E-posta:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Mesajınız:</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <button type="submit">Gönder</button>
</form>
</body>
</html>
