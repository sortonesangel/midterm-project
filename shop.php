<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coffee Website | CodingNepal</title>
    <!-- Linking Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <!-- Linking Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!-- Header / Navbar -->
    <header>
      <nav class="navbar">
        <a href="landing_page.php" class="nav-logo">
          <h2 class="logo-text">☕Angel's Cafe</h2>
        </a>

        <ul class="nav-menu">
          <button id="menu-close-button" class="fas fa-times"></button>

          <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#menu" class="nav-link">Menu</a>
          </li>
          <li class="nav-item">
            <a href="#testimonials" class="nav-link">Testimonials</a>
          </li>
          <li class="nav-item">
            <a href="#gallery" class="nav-link">Gallery</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
          <li class="nav-item">
    <a href="index.php" class="nav-link">
      <i class="fas fa-sign-out-alt"></i>
    </a>
  </li>
        </ul>

        <button id="menu-open-button" class="fas fa-bars"></button>
      </nav>
    </header>

    <main>
      <!-- Hero section -->
      <section class="hero-section">
        <div class="section-content">
          <div class="hero-details">
            <h2 class="title">Great Coffee!</h2>
            <h3 class="subtitle">Start your day right with our delicious coffee!</h3>
            <p class="description">Welcome to my coffee paradise, where every bean tells a story and every cup sparks joy.</p>

            <div class="buttons">
              <a href="#menu" class="button order-now">Order Now</a>
              <a href="#contact" class="button contact-us">Contact Us</a>
            </div>
          </div>
          <div class="hero-image-wrapper">
            <img src="https://i.pinimg.com/originals/93/10/41/9310410346840b0f9b8018562d4dd6fd.jpg" />
          </div>
        </div>
      </section>

      <!-- About section -->
      <section class="about-section" id="about">
        <div class="section-content">
          <div class="about-image-wrapper">
            <img src="https://png.pngtree.com/thumb_back/fw800/background/20230411/pngtree-coffee-american-drink-saucer-image_2178020.jpg" />
          </div>
          <div class="about-details">
            <h2 class="section-title">About Us</h2>
            <p class="text">Welcome to my Coffee Shop, where every cup is crafted with care and every visit feels like home. Whether you're here for a coffee break or a cozy moment, we offer the perfect blend of great flavors and a relaxing atmosphere. Come in, unwind, and enjoy!</p>
            <div class="social-link-list">
              <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
              <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
              <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
          </div>
        </div>
      </section>

<!-- Menu Section -->
<section class="menu-section" id="menu">
  <h2 class="section-title">Our Menu</h2>
  <div class="section-content">
    <ul class="menu-list">
      <li class="menu-item">
      <img src="https://www.munatycooking.com/wp-content/uploads/2023/06/Creamy-Iced-Coffee-feature-image-500x500.jpg" />
        <div class="menu-details">
          <h3 class="name">Cold Beverages</h3>
          <p class="text">Wide range of iced coffee to make you fresh and light.</p>
          <button class="add-to-cart" data-item-id="1" data-item-name="Cold Beverages" data-item-price="95">
            <i class="fa fa-shopping-cart"></i> ₱95 Add to Cart
          </button>
        </div>
      </li>
      <li class="menu-item">
        <img src="https://globalassets.starbucks.com/digitalassets/products/bev/SBX20201011_IcedShakenEspresso.jpg?impolicy=1by1_tight_288" alt="Cold Beverages" class="menu-image" />
        <div class="menu-details">
          <h3 class="name">Refreshment</h3>
          <p class="text">Creamy and frothy cold coffee to make you cool.</p>
          <button class="add-to-cart" data-item-id="2" data-item-name="Refreshment" data-item-price="85">
            <i class="fa fa-shopping-cart"></i> ₱85 Add to Cart
          </button>
        </div>
      </li>
      <li class="menu-item">
        <img src="https://wp.culligan.com/wp-content/uploads/2019/08/diy-healthy-drinks-for-kids.jpg" alt="Refreshment" class="menu-image" />
        <div class="menu-details">
          <h3 class="name">Cold Beverages</h3>
          <p class="text">Fruit and icy refreshing drink to make you feel refreshed.</p>
          <button class="add-to-cart" data-item-id="3" data-item-name="Cold Beverages" data-item-price="95">
            <i class="fa fa-shopping-cart"></i> ₱95 Add to Cart
          </button>
        </div>
      </li>
      <li class="menu-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPkkHSbLWDGdv6kqOQWA3VCAPW_td3bdk-BA&s" />
        <div class="menu-details">
          <h3 class="name">Dessert</h3>
          <p class="text">Your favorite eating and drinking combinations.</p>
          <button class="add-to-cart" data-item-id="4" data-item-name="Dessert" data-item-price="75">
            <i class="fa fa-shopping-cart"></i> ₱75 Add to Cart
          </button>
        </div>
      </li>
      <li class="menu-item">
        <img src="https://funmoneymom.com/wp-content/uploads/2023/05/Banana-Pudding-Bites-Recipe-Card-500x500.jpg" />
        <div class="menu-details">
          <h3 class="name">Special Combos</h3>
          <p class="text">Satiate your palate with a culinary treat.</p>
          <button class="add-to-cart" data-item-id="5" data-item-name="Special Combos" data-item-price="85">
            <i class="fa fa-shopping-cart"></i> ₱85 Add to Cart
          </button>
        </div>
      </li>
      <li class="menu-item">
        <img src="https://thekitchencommunity.org/wp-content/uploads/2021/09/shutterstock_296090063-burger-sides-500x500.jpg" alt="Burger & French Fries" class="menu-image" />
        <div class="menu-details">
          <h3 class="name">Burger & French Fries</h3>
          <p class="text">Quick bites to satisfy your small hunger.</p>
          <button class="add-to-cart" data-item-id="6" data-item-name="Burger & French Fries" data-item-price="75">
            <i class="fa fa-shopping-cart"></i> ₱75 Add to Cart
          </button>
        </div>
      </li>
    </ul>
  </div>
</section>

 <!-- index.php or your order form file -->

<div id="buyNowModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Order Summary</h2>
      <div id="modalItemDetails"></div>
      
      <!-- Address and Contact Information Form -->
      <div class="form-container">
        <form action="assets/db/orders.php" method="POST"> <!-- Form now submits to orders.php -->
          <div class="form-group">
            <label for="customerName">Full Name</label>
            <input type="text" id="customerName" name="customerName" placeholder="Enter your full name" required />
          </div>
          <div class="form-group">
            <label for="contactNumber">Contact Number</label>
            <input type="text" id="contactNumber" name="contactNumber" placeholder="Enter your contact number" required />
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <textarea id="address" name="address" placeholder="Enter your delivery address" required></textarea>
          </div>
          <div class="form-group">
            <label for="additionalDetails">Additional Details (Optional)</label>
            <textarea id="additionalDetails" name="additionalDetails" placeholder="Add any special requests or details"></textarea>
          </div>
          
          <!-- Buy Now Button -->
          <button type="submit" id="confirmPurchase">Buy Now</button>
        </form>
      </div>
    </div>
</div>




      <!-- Testimonials section -->
      <section class="testimonials-section" id="testimonials">
        <h2 class="section-title">Testimonials</h2>
        <div class="section-content">
          <div class="slider-container swiper">
            <div class="slider-wrapper">
              <ul class="testimonials-list swiper-wrapper">
                <li class="testimonial swiper-slide">
                  <img src="https://scontent.fmnl4-4.fna.fbcdn.net/v/t39.30808-6/336754232_1252127008846002_5281497652003754309_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=f727a1&_nc_eui2=AeGULBdS5NNx9avLp6j895rnoYVMTVsZcEShhUxNWxlwRLazttfa-Xtt83l_2hTgLd7eRLx_9LNCcQ0JN3qxRIZf&_nc_ohc=ieP6GGtrhloQ7kNvgH9mxyw&_nc_zt=23&_nc_ht=scontent.fmnl4-4.fna&_nc_gid=AqpwJy1TqYjCQbCvRpqNW7k&oh=00_AYAbdEJK3QQz85xhjMc0UqKs9zZcIbep6EjkcN4fET8jvQ&oe=673CF8A6" alt="User" class="user-image" />
                  <h3 class="name">Apple Sairah H. Rezano</h3>
                  <i class="feedback">"The French roast was absolutely incredible! Rich, aromatic, and perfectly balanced—can't wait to have it again!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="https://scontent.fmnl9-2.fna.fbcdn.net/v/t39.30808-6/459911068_498497252971854_2331434900770611242_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFrc_P-IpzzQWul8eMq_oAQmUs_J-N6OsuZSz8n43o6y6rdHvL34KXbIbl-StUWwUyAyvN4ZF19n-KnWPlyQITW&_nc_ohc=KxVMpEafUjQQ7kNvgHAY6pr&_nc_zt=23&_nc_ht=scontent.fmnl9-2.fna&_nc_gid=AFMecOC_l6Vr0X5kRnOLTey&oh=00_AYAlWEIGpBjKQOwfmcWelsKJn9hbYjDMZkvn1hnj1uowMQ&oe=673A9AE7" alt="User" class="user-image" />
                  <h3 class="name">Alieza Balles</h3>
                  <i class="feedback">"Great espresso blend! Smooth and bold flavor. Fast shipping too!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="https://scontent.fmnl9-6.fna.fbcdn.net/v/t39.30808-6/344346018_1264952570783722_895972171493154087_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeHaE8ZqTZJZu2oN7csJxHH5Icvw4A1f8Qkhy_DgDV_xCZsswmdaqvxCu_WUodZ16uEjeaX4SOzrjFdHAP-NGTZ5&_nc_ohc=Ho5KIJlh-mUQ7kNvgHN2bKW&_nc_zt=23&_nc_ht=scontent.fmnl9-6.fna&_nc_gid=AYBPBWxArxQG7zogzj802uM&oh=00_AYDGgcAtzR7DqJQA81Ger_2x0jjIZzE6zmgiLvZVL96Drg&oe=673AB72B" alt="User" class="user-image" />
                  <h3 class="name">Jolina Mata</h3>

                  <i class="feedback">"Fantastic mocha flavor. Fresh and aromatic. Quick shipping!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t39.30808-6/361836391_1661169181066780_8634772241870373780_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeFz9VYhGxtd8717qzWryP2fuGutPiwB1pa4a60-LAHWlmF536G2kbghTTCxKd8pE0L9cXPhE8EhUyaQDVZMiZiI&_nc_ohc=hUQ2KRMpAWkQ7kNvgF64DdD&_nc_zt=23&_nc_ht=scontent.fmnl9-1.fna&_nc_gid=AAW96fJJNO8fkoTKnaVEcdO&oh=00_AYAl440xVwPM87-EtTurhtzrWo-hUsmhjaDFcMl7Bv0FBg&oe=673A9F81" alt="User" class="user-image" />
                  <h3 class="name">Analou Bayoc</h3>

                  <i class="feedback">"Excellent quality! Fresh beans and quick delivery. Highly recommend."</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t39.30808-6/308957346_1423362175152726_3889809543817677348_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeG8bVYF-FKsBi8l1T-MFhPj_mcpEvbQr2L-ZykS9tCvYicVrdxXnGDw-tCy_M_3e1DQMvFzBAwlNQ26PcbWNDus&_nc_ohc=P6sO3MUu1XcQ7kNvgEelWPE&_nc_zt=23&_nc_ht=scontent.fmnl9-1.fna&_nc_gid=Az1waXXBXNkbAnKSR_edePb&oh=00_AYDmozeEjzbpnjiu61JPg7HyiT3sI8CDjhj2595uF7ueag&oe=673AA032" alt="User" class="user-image" />
                  <h3 class="name">Jovelyn Benanlao</h3>

                  <i class="feedback">"Best decaf I've tried! Smooth and flavorful. Arrived promptly."</i>
                </li>
              </ul>

              <div class="swiper-pagination"></div>
              <div class="swiper-slide-button swiper-button-prev"></div>
              <div class="swiper-slide-button swiper-button-next"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Gallery section -->
      <section class="gallery-section" id="gallery">
        <h2 class="section-title">Gallery</h2>
        <div class="section-content">
          <ul class="gallery-list">
            <li class="gallery-item">
              <img src="https://stordfkenticomedia.blob.core.windows.net/df-us/rms/media/recipesmedia/recipes/retail/x17/2003/feb/17244-caramel-topped-ice-cream-dessert-600x600.jpg?ext=.jpgg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="https://nutricia.com.au/fortisip/wp-content/uploads/sites/8/2020/09/Forticreme-Chocolate-Chocolate-Layered-Dessert-1-scaled.jpeg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="https://api.photon.aremedia.net.au/wp-content/uploads/sites/10/gt/2023/12/08/1701990334697_semifreddo.jpg?fit=900%2C750" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="https://order.perfectmatchcateringservices.com/product_img/IM02726.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="https://weaverscoffee.com/cdn/shop/articles/Two_glasses_of_cold_brew_on_a_wooden_table_with_milk_pouring_into_one_glass_1076x.jpg?v=1694128857" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="https://static.wixstatic.com/media/c230b0_25c7417464c64000942770aeaaf17b62~mv2.png/v1/fill/w_360,h_360,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/LATTTEEEE.png" alt="Gallery Image" class="gallery-image" />
            </li>
          </ul>
        </div>
      </section>

      <!-- Contact section -->
      <section class="contact-section" id="contact">
        <h2 class="section-title">Contact Us</h2>
        <div class="section-content">
          <ul class="contact-info-list">
            <li class="contact-info">
              <i class="fa-solid fa-location-crosshairs"></i>
              <p>Alae Manolo Fortich, Bukidnon</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-envelope"></i>
              <p>angels@cafewebsite.com</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-phone"></i>
              <p>09704439924</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Monday - Friday: 7:00 AM - 6:00 PM</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Saturday: 10:00 AM - 5:00 PM</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Sunday: Closed</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-globe"></i>
              <p>www.angelscafe.com</p>
            </li>
          </ul>

          <form action="#" class="contact-form">
            <input type="text" placeholder="Your name" class="form-input" required />
            <input type="email" placeholder="Your email" class="form-input" required />
            <textarea placeholder="Your message" class="form-input" required></textarea>
            <button type="submit" class="button submit-button">Submit</button>
          </form>
        </div>
      </section>

      <!-- Footer section -->
      <footer class="footer-section">
        <div class="section-content">
          <p class="copyright-text">© 2024 Cafe</p>

          <div class="social-link-list">
            <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
          </div>

          <p class="policy-text">
            <a href="#" class="policy-link">Privacy policy</a>
            <span class="separator">•</span>
            <a href="#" class="policy-link">Refund policy</a>
          </p>
        </div>
      </footer>
    </main>

    <!-- Linking Swiper script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Linking custom script -->
    <script src="assets/js/script.js"></script>
  </body>
</html>
