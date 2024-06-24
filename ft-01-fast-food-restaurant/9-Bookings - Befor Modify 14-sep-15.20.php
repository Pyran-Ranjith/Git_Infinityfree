<h1>-------9-----</h1>
<?php
require_once './includes/parameters.php';
require_once './db/conn.php';
require_once './header.php';
$results = $booking->getBookings();
?>

<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $personscount = $_POST['personscount'];
  $date = $_POST['date'];
  $insert_success = $booking->insertBooking($name, $phone, $email, $personscount, $date);
  if (($insert_success)) {
    echo _alert_link("Booking success.", "success", "", "", "");
  } else {
    echo _alert_link("Booking Not success.", "danger", "./bookings.php", "Press following link to ", "Go back.");
  }
}
?>

<div class="hero_area">
  <div class="bg-box">
    <img src="images/hero-bg.jpg" alt="">
  </div>
  <!-- header section strats -->
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            <?php echo $title_header; ?>
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mx-auto ">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu.html">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="book.html">Book Table</a>
            </li>
          </ul>
          <div class="user_option">
            <a href="" class="user_link">
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <a class="cart_link" href="#">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                <g>
                  <g>
                    <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                  </g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
              </svg>
            </a>
            <form class="form-inline">
              <!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> -->
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="uuuuuu">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
            <a href="" class="order_online">
              Order Online
            </a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- slider section -->
  <section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-md-7 col-lg-6 ">
                <div class="detail-box">
                  <h1>
                    <?php echo $title_body ?>
                  </h1>
                  <p>
                    Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn1">
                      Order Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <div class="container ">
            <div class="row">
              <div class="col-md-7 col-lg-6 ">
                <div class="detail-box">
                  <h1>
                    <?php echo $title_body ?>
                  </h1>
                  <p>
                    Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsammmmmm.
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn1">
                      Order Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-7 col-lg-6 ">
                <div class="detail-box">
                  <h1>
                    <?php echo $title_body ?>
                  </h1>
                  <p>
                    Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn1">
                      Order Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>
    </div>

  </section>
  <!-- end slider section -->
</div>

<!-- offer section -->

<section class="offer_section layout_padding-bottom">
  <div class="offer_container">
    <div class="container ">
      <div class="row">
        <div class="col-md-6  ">
          <div class="box ">
            <div class="img-box">
              <img src="images/o1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Tasty Thursdays
              </h5>
              <h6>
                <span>20%</span> Off
              </h6>
              <a href="">
                Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6  ">
          <div class="box ">
            <div class="img-box">
              <img src="images/o2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Pizza Days
              </h5>
              <h6>
                <span>15%</span> Off
              </h6>
              <a href="">
                Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end offer section -->

<!-- food section -->

<section class="food_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Our Menu
      </h2>
    </div>

    <ul class="filters_menu">
      <li class="active" data-filter="*">All*</li>
      <!-- <li data-filter=".all">All</li> -->
      <!-- <li class="active" data-filter=".frie">All</li> -->
      <li data-filter=".burger">Burger</li>
      <li data-filter=".pizza">Pizza</li>
      <li data-filter=".pasta">Pasta</li>
      <li data-filter=".fries">Fries</li>
      </ul>

    <div class="filters-content">
      <div class="row grid">



        <?php
        $results_item = $item->getItemsByCategoryId(1);
        while ($rec_itm = $results_item->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="col-sm-6 col-lg-4 all burger">
          <div class="box">
            <div>
              <div class="img-box">
                <!-- <img src="images/f2.png" alt=""> -->
                <img src="<?php echo $rec_itm['itm_img'] ?>" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  <!-- Delicious Burger -->
                  <?php echo $rec_itm['itm_name'] ?>
                </h5>
                <p>
                  <!-- Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque -->
                  <?php echo $rec_itm['itm_name'] ?>  
                </p>
                <div class="options">
                  <h6>
                    <!-- Rs. 500 -->
                    <?php echo $rec_itm['itm_price'] ?> 
                  </h6>
                  <a href="">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                        </g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <?php } ?>

        <?php
        $results_item = $item->getItemsByCategoryId(3);
        while ($rec_itm = $results_item->fetch(PDO::FETCH_ASSOC)) {
        ?>
          <div class="col-sm-6 col-lg-4 all pasta">
            <div class="box">
              <div>
                <div class="img-box">
                  <!-- <img src="images/f4.png" alt=""> -->
                  <img src="<?php echo $rec_itm['itm_img'] ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <!-- Delicious Pasta -->
                    <?php echo $rec_itm['itm_name'] ?>
                  </h5>
                  <p>
                    <!-- Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque -->
                    <?php echo $rec_itm['itm_description'] ?>
                  </p>
                  <div class="options">
                    <h6>
                      <!-- Rs. 500 -->
                      <?php echo $rec_itm['itm_price'] ?>
                    </h6>
                    <a href="">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

        <?php
        $results_item = $item->getItemsByCategoryId(2);
        while ($rec_itm = $results_item->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="col-sm-6 col-lg-4 all pizza">
          <div class="box">
            <div>
              <div class="img-box">
                <!-- <img src="images/f6.png" alt=""> -->
                <img src="<?php echo $rec_itm['itm_img'] ?>" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  <!-- Delicious Pizza -->
                  <?php echo $rec_itm['itm_name'] ?>
                </h5>
                <p>
                  <!-- Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque -->
                  <?php echo $rec_itm['itm_description'] ?>
                </p>
                <div class="options">
                  <h6>
                    <!-- Rs. 750 -->
                    <?php echo $rec_itm['itm_price'] ?>
                  </h6>
                  <a href="">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                        </g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>

        <?php
        $results_item = $item->getItemsByCategoryId(4);
        while ($rec_itm = $results_item->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="col-sm-6 col-lg-4 all fries">
          <div class="box">
            <div>
              <div class="img-box">
                <!-- <img src="images/f2.png" alt=""> -->
                <img src="<?php echo $rec_itm['itm_img'] ?>" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  <!-- Delicious Burger -->
                  <?php echo $rec_itm['itm_name'] ?>
                </h5>
                <p>
                  <!-- Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque -->
                  <?php echo $rec_itm['itm_name'] ?>  
                </p>
                <div class="options">
                  <h6>
                    <!-- Rs. 500 -->
                    <?php echo $rec_itm['itm_price'] ?> 
                  </h6>
                  <a href="">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                        </g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <?php } ?>
 
      </div>
    </div>

    <div class="btn-box">
      <a href="">
        View More
      </a>
    </div>
  </div>
</section>

<!-- end food section -->

<!-- about section -->

<section class="about_section layout_padding">
  <div class="container  ">

    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="images/about-img.png" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              We Are <?php echo $title_header; ?>
            </h2>
          </div>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
            in some form, by injected humour, or randomised words which don't look even slightly believable. If you
            are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
            the middle of text. All
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->

<!-- book section -->
<section class="book_section layout_padding">


  <div class="container">

    <div class="heading_container">
      <h2>
        Book A Table
      </h2>
    </div>

    <div class="row">
      <div class="col-md-6">

        <div class="form_container">

          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div>
              <!-- <input type="text" class="form-control" placeholder="Your Name" /> -->
              <input type="text" class="form-control" id="name" name="name" value="" required placeholder="Your Name" aria-describedby="nameHelp">
            </div>
            <div>
              <!-- <input type="text" class="form-control" placeholder="Phone Number" /> -->
              <input type="text" class="form-control" id="phone" name="phone" value="" required placeholder="Your phone number" aria-describedby="phoneHelp">
            </div>
            <div>
              <!-- <input type="email" class="form-control" placeholder="Your Email" /> -->
              <input type="email" class="form-control" id="email" name="email" value="" required placeholder="Your Email" aria-describedby="emailHelp">
            </div>
            <div>
              <!-- <select class="form-control nice-select wide"> -->
              <select name="personscount" id="personscount" class="form-control nice-select wide" aria-label="Default select example">
                <!-- <option value="" disabled selected> -->
                <option selected>Open this select menu</option>
                How many persons?
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
              </select>
            </div>
            <div>
              <input type="date" class="form-control" id="date" name="date" value="" required placeholder="dd-mm-yy" aria-describedby="dateHelp">
            </div>
            <!-- <div class="btn_box"> -->
            <div>
              <!-- <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block"> -->
              <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">Book Now</button>
            </div>
          </form>

        </div>
      </div>
      <!-- <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div> -->
    </div>

  </div>
  <!-- </section> -->

  <!-- end book section -->

  <!-- Display bppking entryies Tabla section -->

  <!-- Recent Sales Start -->
  <div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
      <div class="d-flex align-items-center justify-content-between mb-4">
        <h6 class="mb-0">Recent bookings</h6>
        <!-- <a href="">Show All</a> -->
      </div>
      <div class="table-responsive">
        <table class="table text-start align-middle table-bordered table-hover mb-0">
          <thead>
            <tr class="text-dark">
              <th scope="col"><input class="form-check-input" type="checkbox"></th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Booking Date</th>
              <th scope="col">Number of Persons</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
              <tr>
                <td><input class="form-check-input" type="checkbox"></td>
                <td><?php echo $r['name'] ?></td>
                <td><?php echo $r['email'] ?></td>
                <td><?php echo $r['date'] ?></td>
                <td><?php echo $r['personscount'] ?></td>
                <td><a class="btn btn-sm btn-primary" href="" disabled>Detail</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Recent Sales End -->
</section>




<!-- end Display bppking entryies Tabla section -->

<!-- client section -->

<section class="client_section layout_padding-bottom">
  <div class="container">

    <div class="heading_container heading_center psudo_white_primary mb_45">
      <h2>
        What Says Our Customers
      </h2>
    </div>


    <div class="carousel-wrap row ">
      <div class="owl-carousel client_owl-carousel">
        <div class="item">
          <div class="box">
            <div class="detail-box">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
              </p>
              <h6>
                Moana Michell
              </h6>
              <p>
                magna aliqua
              </p>
            </div>
            <div class="img-box">
              <img src="images/client1.jpg" alt="" class="box-img">
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="detail-box">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
              </p>
              <h6>
                Mike Hamell
              </h6>
              <p>
                රෝගියා බලා ගැනීම, රෝගියා විසින් අනුගමනය කිරීම වැදගත් ය, නමුත් එය බොහෝ වැඩ සහ වේදනාව ඇති වන කාලයකදී සිදුවනු ඇත. වසර ගණනාවක් පුරා, මම එන්නෙමි </p>
              <h6>
                magna aliqua
              </h6>
            </div>
            <div class="img-box">
              <img src="images/client2.jpg" alt="" class="box-img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php function getItem($id, $item)
{
  $results_item = $item->getItemsByItemId($id);
  $rec_itm = $results_item->fetch(PDO::FETCH_ASSOC);
  return $rec_itm;
}
?>
<!-- end client section -->

<?php require_once './footer.php' ?>;