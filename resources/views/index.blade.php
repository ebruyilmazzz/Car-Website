<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css') }}"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>SpeedZone </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
  <body>
    <div class="container">
      <div class="navbar">
        <a href="#">
          <img src="{{ asset('images/logo.png') }}" alt="logo" />
        </a>
        <nav>
          <ul>
            <li><a href="{{ asset('index') }}">HOME</a></li>
            <li><a href="{{ asset('car-list') }}">OUR CARS</a></li>
            <li><a href="{{ asset('about') }}" class="active">ABOUT</a></li>
            <li><a href="{{ asset('contact') }}">CONTACT</a></li>
          </ul>
        </nav>
      </div>

      <div class="row" style="background-image: url('/images/bg.png'); background-size: cover; background-position: center;">
        <div class="col">
          <h1>
          SPEED
            <hr />
            ZONE
          </h1>
          <p class="desc">
            Özel Hissedin...
          </p>
          <button class="btn">TÜM ARABALAR</button>
        </div>
        <div class="col">
          <div class="cards">
            <div class="card card-1" style="background-image: url('/images/pic-1.png'); background-size: cover; background-position: center;">
              <div class="card-head">
                <h5>Togg</h5>
                <p>Bir otomobilden fazlasını arıyorsanız doğru yerdesiniz.</p>
              </div>
              <div class="card-bottom">
                <a href="https://www.togg.com.tr/" class="btn">DETAY</a>
              </div>
            </div>

            <div class="card card-2" style="background-image: url('/images/pic-2.png'); background-size: cover; background-position: center;">
              <div class="card-head">
                <h5>Audi</h5>
                <p>Dört halka ruhunu yansıtan yaşam tarzı. </p>
              </div>
              <div class="card-bottom">
                <a href="https://www.audi.com.tr/" class="btn">DETAY</a>
              </div>
            </div>
            <div class="card card-3" style="background-image: url('/images/pic-3.png'); background-size: cover; background-position: center;">
              <div class="card-head">
                <h5>BMW</h5>
                <p>Aklınızdaki BMW otomobilini bulun, test sürüş randevusu alın.</p>
              </div>
              <div class="card-bottom">
                <a href="https://www.bmw.com.tr/" class="btn">DETAY</a>
              </div>
            </div>
            <div class="card card-4" style="background-image: url('/images/pic-4.png'); background-size: cover; background-position: center;">
              <div class="card-head">
                <h5>Mercedes-Benz</h5>
                <p>Özel teklifleri ve ek avantajları keşfedin, modern lükse ayrıcalıklarla sahip olun.</p>
              </div>
              <div class="card-bottom">
                <a href="https://www.mercedes-benz.com.tr/" class="btn">DETAY</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
