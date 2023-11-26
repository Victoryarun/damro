    <div
    class="responsive-menu modal fade modal-fullscreen"
    id="mobileMenu"
    tabindex="-1"
    aria-hidden="true"
    >
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="responsive-menu-header">
            <h2>Menu</h2>
            <button type="button" class="menu-close" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div>
            <ul class="menu-add-active">
                <li class="menu-list">
                    <a class="menu-link" href="index.php">Home</a>
                </li>
                <li class="menu-list">
                    <a class="menu-link" href="sofa.php">Sofa</a>
                </li>
                <li class="menu-list">
                    <a class="menu-link" href="recliner.php">Recliner</a>
                </li>
                <li class="menu-list">
                    <a class="menu-link" href="#">Corner Sofa</a>
                </li>
                <li class="menu-list">
                    <a class="menu-link" href="#">Wooden Sofa</a>
                </li>
            </ul>
        </div>
        </div>
    </div>
    </div>

    <div
    class="responsive-search modal fade modal-fullscreen"
    id="mobileSearch"
    tabindex="-1"
    aria-hidden="true"
    >
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="responsive-search-row">
            <button type="button" class="back-close" data-bs-dismiss="modal">
            <i class="fa-solid fa-arrow-left"></i>
            </button>
            <div class="search-bar">
            <input type="text" placeholder="Search Sofa, Recliner etc..." />
            <i class="fa fa-solid fa-magnifying-glass icon"></i>
            </div>
        </div>

        <div class="search-item-list">
            <div class="search-item">
            <div class="img">
                <img src="./assets/img/single_page/lico.png" />
            </div>

            <div class="content">
                <h5>Lico</h5>
                <p>lorem ipsum</p>
            </div>
            </div>

            <div class="search-item">
            <div class="img">
                <img src="./assets/img/single_page/manila.png" />
            </div>

            <div class="content">
                <h5>Manila</h5>
                <p>lorem ipsum</p>
            </div>
            </div>

            <div class="search-item">
            <div class="img">
                <img src="./assets/img/single_page/proxima.png" />
            </div>

            <div class="content">
                <h5>proxima</h5>
                <p>lorem ipsum</p>
            </div>
            </div>

            <div class="search-item">
            <div class="img">
                <img src="./assets/img/single_page/roxy.png" />
            </div>

            <div class="content">
                <h5>roxy</h5>
                <p>lorem ipsum</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>    
    
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>

    <script>
      $(".home_slider").slick({
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        // asNavFor: ".responsive-home-slider",
        fade: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              autoplay: true,
              autoplaySpeed: 5000,
              slidesToShow: 1,
            },
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              autoplay: false,
              autoplaySpeed: 5000,
              slidesToShow: 1,
            },
          },
        ],
      });

      // $(".nav-slider").slick({
      //   slidesToShow: 3,
      //   slidesToScroll: 1,
      //   asNavFor: ".home_slider",
      //   centerMode: true,
      //   focusOnSelect: true,
      //   centerPadding: "0px",
      //   arrows: false,
      // });
      $(window).scroll(function(){
        var sticky = $('.header-container'),
            scroll = $(window).scrollTop();

        if (scroll >= 100) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
      });

      $(function () {
        var url = window.location.pathname,
          urlRegExp = new RegExp(url.replace(/\/$/, "") + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $(".menu-link").each(function () {
          // and test its normalized href against the url pathname regexp
          if (urlRegExp.test(this.href.replace(/\/$/, ""))) {
            $(this).addClass("active");
          }
        });
      });


    $('.main_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 5000,
        asNavFor: '.thumb_slider'
    });

    $('.thumb_slider').slick({
        centerPadding: '0px',
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.main_slider',
        centerMode: true,
        focusOnSelect: true,
        arrows: false
    });

    
    $('.detail_main_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        // asNavFor: '.detail_thumb_slider'
    });

    $('.detail_thumb_slider').slick({
        centerPadding: '0px',
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.detail_main_slider',
        centerMode: true,
        focusOnSelect: true,
        arrows: false
    });
	
    </script>
  </body>
</html>