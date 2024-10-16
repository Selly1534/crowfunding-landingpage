<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"rel="stylesheet"/>
    <link rel="stylesheet" href="/css/style.css" />
    <title>GiveBright</title>
  </head>

  <body>
    <nav>
      <div class="navbar-header">
        <div class="navbar-logo">
          <a href="#">Give<span>Bright</span></a>
        </div>
    </nav>

    <section class="home" id="home">
      <div class="container">
        <div class="home-left">
          <h1>Support Our Campaign</h1>
          <p>
            Join us in this crowdfunding campaign to support the launch of an
            innovative product aimed at making a real difference in society.
            Every contribution will help us bring creative ideas to life that
            can lead to positive change.
          </p>
          <p>
            Our goal is to raise $10,000. This funding will enable us to produce
            and distribute a product that is not only innovative but also
            environmentally friendly.
          </p>
          <div class="progress-bar">
            <div class="progress" style="width: 50%;"></div>
          </div>
          <p>Raised: $5,000 / $10,000</p>
          <button class="btn donate-btn" id="support-button">Support Now</button>
        </div>

        <div class="carousel">
          <div class="carousel-images">
            <img src="/img/image1.jpg" alt="Crowdfunding Shelter Image 1" />
            <img src="/img/image2.jpg" alt="Crowdfunding Shelter Image 2" />
            <img src="/img/image3.avif" alt="Crowdfunding Shelter Image 3" />
          </div>
          <button class="carousel-btn prev" onclick="moveSlide(-1)">&#10094;</button>
          <button class="carousel-btn next" onclick="moveSlide(1)">&#10095;</button>
        </div>
      </div>
    </section>

    <div id="qr-modal" class="modal">
      <div class="modal-content">
        <span class="close-button" id="close-button">&times;</span>
        <h2>Scan to Support Us</h2>
        <img
          src="https://api.qrserver.com/v1/create-qr-code/?data=https://your-donation-link.com&size=200x200"
          alt="QR Code"
        />
        <p>Thank you for your support!</p>
      </div>
    </div>

      <div class="container">
        <h1>
          <span>Together</span> we can make <span>Brighter</span>
        </h1>
      </div>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/js/main.js"></script>
  </body>
</html>