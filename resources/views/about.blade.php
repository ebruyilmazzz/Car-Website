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

    <section class="about">
            <h1>Hakkımızda</h1>
            <p>SpeedZone, otomobil tutkunlarına en iyi araçları sunan, geniş bir koleksiyona sahip bir platformdur. Müşterilerimize en yeni ve en prestijli otomobil markalarını sunarak, sürüş deneyimini en üst seviyeye çıkarmayı hedefliyoruz.</p>

            <h2>Misyonumuz</h2>
            <p>Otomobil dünyasındaki en son gelişmeleri takip ederek, müşterilerimize güvenilir, kaliteli ve yenilikçi bir hizmet sunmak.</p>

            <h2>Vizyonumuz</h2>
            <p>Türkiye’nin en büyük otomobil platformlarından biri olmak ve müşterilerimize hayallerindeki arabayı sunmak.</p>

            <h2>Bizimle İletişime Geçin</h2>
            <p>Herhangi bir sorunuz veya öneriniz varsa, bizimle <a href="{{ url('contact') }}">iletişime geçin</a>. Sizlere en iyi hizmeti sunmaktan mutluluk duyarız!</p>
        </section>
        
 
</body>
</html>
