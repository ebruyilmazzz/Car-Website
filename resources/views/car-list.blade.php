<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeedZone</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('car-list') }}">Our Cars</a></li>
                <li><a href="{{ url('about') }}">About</a></li>
                <li><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
        </nav>
        <div class="">
        <h1 class="title">Tüm Arabalar</h1>
        </div>
        <section class="car-brands">
            <div class="brands">
                <div class="brand-card">
                    <img src="{{ asset('images/pic-1.png') }}" alt="Togg">
                    <h3>Togg</h3>
                    <p>Bir otomobilden fazlası.</p>
                    <a href="https://www.togg.com.tr/" class="btn">Detay</a>
                </div>

                <div class="brand-card">
                    <img src="{{ asset('images/pic-2.png') }}" alt="Audi">
                    <h3>Audi</h3>
                    <p>Dört halka ruhunu yansıtan yaşam tarzı.</p>
                    <a href="https://www.audi.com.tr/" class="btn">Detay</a>
                </div>

                <div class="brand-card">
                    <img src="{{ asset('images/pic-3.png') }}" alt="BMW">
                    <h3>BMW</h3>
                    <p>Aklınızdaki BMW otomobilini bulun.</p>
                    <a href="https://www.bmw.com.tr/" class="btn">Detay</a>
                </div>

                <div class="brand-card">
                    <img src="{{ asset('images/pic-4.png') }}" alt="Mercedes-Benz">
                    <h3>Mercedes-Benz</h3>
                    <p>Modern lükse ayrıcalıklarla sahip olun.</p>
                    <a href="https://www.mercedes-benz.com.tr/" class="btn">Detay</a>
                </div>
            </div>
        </section>
        <section class="car-brands">
            <div class="brands">
                <div class="brand-card">
                    <img src="{{ asset('images/pic-5.png') }}" alt="Togg">
                    <h3>Renault</h3>
                    <p>Bir otomobilden fazlası.</p>
                    <a href="https://www.renault.com.tr/" class="btn">Detay</a>
                </div>

                <div class="brand-card">
                    <img src="{{ asset('images/pic-6.png') }}" alt="Audi">
                    <h3>Ford</h3>
                    <p>Dört halka ruhunu yansıtan yaşam tarzı.</p>
                    <a href="https://www.ford.com.tr/" class="btn">Detay</a>
                </div>

                <div class="brand-card">
                    <img src="{{ asset('images/pic-7.png') }}" alt="BMW">
                    <h3>Wolswagen</h3>
                    <p>Aklınızdaki otomobilini bulun.</p>
                    <a href="https://www.vw.com.tr/" class="btn">Detay</a>
                </div>

                <div class="brand-card">
                    <img src="{{ asset('images/pic-8.png') }}" alt="Mercedes-Benz">
                    <h3>Honda</h3>
                    <p>Modern lükse ayrıcalıklarla sahip olun.</p>
                    <a href="https://www.honda.com.tr/" class="btn">Detay</a>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
