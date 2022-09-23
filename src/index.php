<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RBus - Booking Tickets</title>
    <link rel="icon" href="./img/bus2.webp" />
    <link rel="stylesheet" href="./style/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="./style/style-custom.css" />
  </head>
  <body>
    <!-- HEADER -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
      <div
        class="container-xxl mx-auto p-0 position-relative header-2-1"
        style="font-family: 'Poppins', sans-serif"
      >
        <!-- NAVIGASI -->
        <nav class="navbar navbar-expand-lg navbar-light">
          <a
            href="https://instagram.com/_KkBwk"
            target="_blank"
            class="brand-name"
          >
            <h1>RBus</h1>
          </a>
          <button
            class="navbar-toggler border-0"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#targetModal-item"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="modal-item modal fade"
            id="targetModal-item"
            tabindex="-1"
            role="dialog"
            aria-labelledby="targetModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog" role="document">
              <div class="modal-content bg-white border-0">
                <div
                  class="modal-header border-0"
                  style="padding: 2rem; padding-bottom: 0"
                >
                  <a
                    class="modal-title"
                    id="targetModalLabel"
                    class="brand-name"
                    style="text-decoration: none; color: orange"
                  >
                    <h1>RBus</h1>
                  </a>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div
                  class="modal-body"
                  style="padding: 2rem; padding-top: 0; padding-bottom: 0"
                >
                  <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./pages/tabel-harga.php">Harga</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./pages/kelas-bus.php">Kelas Bus</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Kontak</a>
                    </li>
                  </ul>
                </div>
                <div
                  class="modal-footer border-0 gap-3"
                  style="padding: 2rem; padding-top: 0.75rem"
                >
                  <button class="btn btn-fill text-white btn-login">
                    Log In
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/tabel-harga.php">Harga</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/kelas-bus.php">Kelas Bus</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kontak</a>
              </li>
            </ul>
            <div class="gap-3">
              <button class="btn btn-default btn-no-fill">Daftar</button>
              <button class="btn btn-fill text-white btn-login">Masuk</button>
            </div>
          </div>
        </nav>
        <!-- KOLOM -->
        <div>
          <div class="mx-auto d-flex flex-lg-row flex-column hero">
            <!-- Left Column -->
            <div
              class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center"
            >
              <p class="text-caption"></p>
              <h1 class="title-text-big">
                Cepat, nyaman dan aman untuk perjalanan anda
              </h1>
              <div
                class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3"
              >
                
                <button
                  class="btn d-inline-flex mb-md-0 btn-try text-white btn-pesan"
                >
                <a href="./pages/form-pemesanan.php" class="pesan-tiket">
                  Pesan Tiket
                </a>
                </button>
                
              </div>
            </div>
            <!-- Right Column -->
            <div
              class="right-column text-center d-flex justify-content-center pe-0"
            >
              <img
                id="img-fluid"
                class="h-auto mw-100"
                src="./img/bus-header.png"
                alt="RBus"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
      <div
        class="content-2-1 container-xxl mx-auto p-0 position-relative"
        style="font-family: 'Poppins', sans-serif"
      >
        <div class="text-center title-text">
          <h1 class="text-title">Pilihan Kelas Bus</h1>
          <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
            Anda bisa memilih kelas bus sesuai kebutuhan
          </p>
        </div>

        <div class="grid-padding text-center">
          <div class="row">
            <div class="col-lg-4 column">
              <div class="icon icon-pointer">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-bus"
                  width="64"
                  height="64"
                  viewBox="0 0 24 24"
                  stroke-width="1"
                  stroke="#ff4500"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <circle cx="6" cy="17" r="2" />
                  <circle cx="18" cy="17" r="2" />
                  <path
                    d="M4 17h-2v-11a1 1 0 0 1 1 -1h14a5 7 0 0 1 5 7v5h-2m-4 0h-8"
                  />
                  <polyline points="16 5 17.5 12 22 12" />
                  <line x1="2" y1="10" x2="17" y2="10" />
                  <line x1="7" y1="5" x2="7" y2="10" />
                  <line x1="12" y1="5" x2="12" y2="10" />
                </svg>
              </div>
              <h3 class="icon-title">Kelas Ekonomi</h3>
              <p class="icon-caption">
                Kelas Ekonomi memiliki kursi dengan formasi 2-3 serta dapat
                menampung 50 hingga 60 penumpang dan tidak ada AC
              </p>
            </div>
            <div class="col-lg-4 column">
              <div class="icon icon-pointer">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-bus"
                  width="64"
                  height="64"
                  viewBox="0 0 24 24"
                  stroke-width="1"
                  stroke="#00abfb"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <circle cx="6" cy="17" r="2" />
                  <circle cx="18" cy="17" r="2" />
                  <path
                    d="M4 17h-2v-11a1 1 0 0 1 1 -1h14a5 7 0 0 1 5 7v5h-2m-4 0h-8"
                  />
                  <polyline points="16 5 17.5 12 22 12" />
                  <line x1="2" y1="10" x2="17" y2="10" />
                  <line x1="7" y1="5" x2="7" y2="10" />
                  <line x1="12" y1="5" x2="12" y2="10" />
                </svg>
              </div>
              <h3 class="icon-title">Kelas Bisnis</h3>
              <p class="icon-caption">
                Sedikit lebih baik dari kelas ekonomi, pada kelas bisnis sudah
                menggunakan AC dan fasilitas toilet pada armadanya
              </p>
            </div>
            <div class="col-lg-4 column">
              <div class="icon icon-pointer">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-bus"
                  width="64"
                  height="64"
                  viewBox="0 0 24 24"
                  stroke-width="1"
                  stroke="#00b341"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <circle cx="6" cy="17" r="2" />
                  <circle cx="18" cy="17" r="2" />
                  <path
                    d="M4 17h-2v-11a1 1 0 0 1 1 -1h14a5 7 0 0 1 5 7v5h-2m-4 0h-8"
                  />
                  <polyline points="16 5 17.5 12 22 12" />
                  <line x1="2" y1="10" x2="17" y2="10" />
                  <line x1="7" y1="5" x2="7" y2="10" />
                  <line x1="12" y1="5" x2="12" y2="10" />
                </svg>
              </div>
              <h3 class="icon-title">Kelas Eksekutif</h3>
              <p class="icon-caption">
                Fasilitas yang ada di bus eksekutif antara lain full AC, toilet,
                TV/DVD LED, WiFi dan makanan ringan
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
      <div
        class="content-2-1 container-xxl mx-auto p-0 position-relative"
        style="font-family: 'Poppins', sans-serif"
      >
        <div class="card-block">
          <div class="card">
            <div class="d-flex flex-lg-row flex-column align-items-center">
              <div class="me-lg-3">
                <img src="./img/tiket.png" alt="tiket diskon" width="150px" />
              </div>
              <div class="flex-grow-1 text-lg-start text-center card-text">
                <h3 class="card-title">
                  Dapatkan Promo <br />Spesial Akhir Tahun hingga 40%
                </h3>
                <p class="card-caption">
                  Dapatkan promo spesial akhir tahun untuk perjalanan anda
                  kemanapun seluruh Indonesia, promo berlaku tanggal 20 - 25
                  Desember 2022.
                </p>
              </div>
              <div class="card-btn-space">
                <button class="btn btn-card text-white btn-pesan-skrg">
                <a href="./pages/form-pemesanan.php" class="pesan-tiket-promo">
                  Pesan Sekarang
                </a>
                </button>
                <button class="btn btn-outline">Ingatkan nanti</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
      <div
        class="footer-2-1 container-xxl mx-auto position-relative p-0"
        style="font-family: 'Poppins', sans-serif"
      >
        <div class="list-footer">
          <div class="row gap-md-0 gap-3">
            <div class="col-lg-3 col-md-6">
              <div class="">
                <div class="list-space">
                  <h3 style="color: orange">RBus</h3>
                </div>
                <nav class="list-unstyled">
                  <li class="list-space">
                    <a href="" class="list-menu">Beranda</a>
                  </li>
                  <li class="list-space">
                    <a href="" class="list-menu">Harga</a>
                  </li>
                  <li class="list-space">
                    <a href="" class="list-menu">Kelas Bus</a>
                  </li>
                  <li class="list-space">
                    <a href="" class="list-menu">Kontak</a>
                  </li>
                </nav>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h2 class="footer-text-title">Company</h2>
              <nav class="list-unstyled">
                <li class="list-space">
                  <a href="" class="list-menu">Contact Us</a>
                </li>
                <li class="list-space">
                  <a href="" class="list-menu">Blog</a>
                </li>
                <li class="list-space">
                  <a href="" class="list-menu">Culture</a>
                </li>
                <li class="list-space">
                  <a href="" class="list-menu">Security</a>
                </li>
              </nav>
            </div>
            <div class="col-lg-3 col-md-6">
              <h2 class="footer-text-title">Support</h2>
              <nav class="list-unstyled">
                <li class="list-space">
                  <a href="" class="list-menu">Getting Started</a>
                </li>
                <li class="list-space">
                  <a href="" class="list-menu">Help Center</a>
                </li>
                <li class="list-space">
                  <a href="" class="list-menu">FAQ</a>
                </li>
              </nav>
            </div>
          </div>
        </div>

        <div class="border-color info-footer">
          <div class="">
            <hr class="hr" />
          </div>
          <div
            class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4"
          >
            <div class="d-flex title-font font-medium align-items-center gap-4">
              <a href="">
                <svg
                  class="social-media-c"
                  width="30"
                  height="30"
                  viewBox="0 0 30 30"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                  <g clip-path="url(#clip0)">
                    <path
                      d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667V9.65667Z"
                      fill="white"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0">
                      <rect
                        width="16"
                        height="16"
                        fill="white"
                        transform="translate(7 7)"
                      />
                    </clipPath>
                  </defs>
                </svg>
              </a>
              <a href="">
                <svg
                  class="social-media-c"
                  width="30"
                  height="30"
                  viewBox="0 0 30 30"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                  <g clip-path="url(#clip0)">
                    <path
                      d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z"
                      fill="white"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0">
                      <rect
                        width="16"
                        height="16"
                        fill="white"
                        transform="translate(7 7)"
                      />
                    </clipPath>
                  </defs>
                </svg>
              </a>
              <a href="">
                <svg
                  class="social-media-p"
                  width="30"
                  height="30"
                  viewBox="0 0 30 30"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z"
                    fill="#C7C7C7"
                  />
                  <path
                    d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039V9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z"
                    fill="#C7C7C7"
                  />
                  <path
                    d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511V18.5511Z"
                    fill="#C7C7C7"
                  />
                </svg>
              </a>
            </div>
            <nav
              class="mx-auto d-flex flex-wrap align-items-center justify-content-center gap-4"
            >
              <a href="" class="footer-link" style="text-decoration: none"
                >Terms of Service</a
              >
              <span>|</span>
              <a href="" class="footer-link" style="text-decoration: none"
                >Privacy Policy</a
              >
              <span>|</span>
              <a href="" class="footer-link" style="text-decoration: none"
                >Licenses</a
              >
            </nav>
            <nav
              class="d-flex flex-lg-row flex-column align-items-center justify-content-center"
            >
              <p style="margin: 0">Copyright © 2022 Noprizal</p>
            </nav>
          </div>
        </div>
      </div>
    </section>
    
    <script src="./style/bootstrap/js/bootstrap.js"></script>
  </body>
</html>
