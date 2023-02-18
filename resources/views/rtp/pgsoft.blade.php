
@extends('rtp.layouts.pgsoft')

@section('pgsoft-container')



  <body>
    <div class="container">
      <div class="adv">
        <div class="banner pt-3 pb-2">
            <a href="https://www.pso999.net/">
                <img style="width: 35%; margin-left: 32%;" src="../img/logo/logo.gif" alt="pso999" />

          </a>
        </div>

        <!-- Marquee -->
        <div class="blink">
          <style>
            .blink span {
              text-align: center;
              font-size: 1.5em;
              font-weight: normal;
              display: block;
              color: #fff;
              font-family: arial;
              padding: 1rem 0rem 1rem;
              text-shadow: #000000;
            }
          </style>
          <span class="blink-me"><button type="login" class="btn btn-announce">
            <marquee scrollamount="15"><strong>BOCORAN LIVE RTP PSO999 SAAT INI, SILAKAN DAFTAR DAN MAINKAN GAME KESAYANGAN BOSKU SEKARANG JUGA MENANGKAN JP BESARNYA BOSKU</strong></marquee>
          </span></button>
        </div>
        <!-- End Marquee -->

         

        <!-- Carousel -->
        <div class="banner" style="padding: 0.5rem 0rem 0.5rem">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                  <img src="img/asset/carousel/1.jpg" class="d-block w-100" alt="PSO999" />
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="img/asset/carousel/2.jpg" class="d-block w-100" alt="PSO999" />
                </div>
                <div class="carousel-item">
                  <img src="img/asset/carousel/3.jpg" class="d-block w-100" alt="PSO999" />
                </div>
                <div class="carousel-item">
                  <img src="img/asset/carousel/4.jpg" class="d-block w-100" alt="PSO999" />
                </div>
                <div class="carousel-item">
                  <img src="img/asset/carousel/5.jpg" class="d-block w-100" alt="PSO999" />
                </div>
                <div class="carousel-item">
                  <img src="img/asset/carousel/6.jpg" class="d-block w-100" alt="PSO999" />
                </div>
                
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <!--End Carousel -->

       <div class="title">
        <h2 style="font-size: 2vw" class="title-text"></h2>
      </div>
      <div class="link-container container">
        <a href="https://www.pso999.com/id-id/auth/login" target="_blank" class="register-button" style="margin-right: 5px;"><b>MASUK</b></a> <a href="https://www.pso999.com/id-id/auth/signup" target="_blank" class="login-button" style="margin-left: 5px;"><b>>> DAFTAR</b></a>
      </div>
      <br />
      <div class="container">
        <div class="row">
          <div class="column">
            <a class="btn-provider" href="/rtp">
            <img src="img/rtp/pgsoft/pragmaticplay.svg" alt="pragmatic" style="width: 100%" />
            <p class="long" style="color: white">Pragmatic Play</p>
            <p class="short">PP</p>
            </a>
          </div>
          <div class="column">
            <a class="btn-provider" href="/habanero">
                <img src="img/rtp/pgsoft/habanero.svg" alt="habanero" style="width: 100%" />
                <p class="long" style="color: white">Habanero</p>
                <p class="short">HB</p>
                </a>
          </div>
          <div class="column">
            <a class="btn-provider" href="/microgaming">
                <img src="img/rtp/pgsoft/microgaming.svg" alt="microgaming" style="width: 100%" />
                <p class="long" style="color: white">Microgaming</p>
                <p class="short">MG</p>
                </a>
          </div>
          <div class="column">
            <a class="btn-provider" href="/pgsoft">
                <img src="img/rtp/pgsoft/pgsoft.svg" alt="pgsoft" style="width: 100%" />
                <p class="long" style="color: white">PG Soft</p>
                <p class="short">PP</p>
                </a>
          </div>
          <div class="column">
            <a class="btn-provider" href="/nextspin">
                <img src="img/rtp/nextspin/nextspin.png" alt="nextspin" style="width: 100%" />
                <p class="long" style="color: white">Nextspin</p>
                <p class="short">Nextspin</p>
                </a>
          </div>
        </div>
      </div>

        <div class="content">
            <div class="wrapper">
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/1.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-1" style="z-index: 15">0%</p>
                            <div id="percent-bar-1" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/2.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-2" style="z-index: 15">0%</p>
                            <div id="percent-bar-2" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/3.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-3" style="z-index: 15">0%</p>
                            <div id="percent-bar-3" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/4.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-4" style="z-index: 15">0%</p>
                            <div id="percent-bar-4" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/5.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-5" style="z-index: 15">0%</p>
                            <div id="percent-bar-5" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/6.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-6" style="z-index: 15">0%</p>
                            <div id="percent-bar-6" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/7.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-7" style="z-index: 15">0%</p>
                            <div id="percent-bar-7" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/8.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-8" style="z-index: 15">0%</p>
                            <div id="percent-bar-8" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/9.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-9" style="z-index: 15">0%</p>
                            <div id="percent-bar-9" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/10.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-10" style="z-index: 15">0%</p>
                            <div id="percent-bar-10" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/11.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-11" style="z-index: 15">0%</p>
                            <div id="percent-bar-11" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/12.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-12" style="z-index: 15">0%</p>
                            <div id="percent-bar-12" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/13.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-13" style="z-index: 15">0%</p>
                            <div id="percent-bar-13" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/14.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-14" style="z-index: 15">0%</p>
                            <div id="percent-bar-14" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/15.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-15" style="z-index: 15">0%</p>
                            <div id="percent-bar-15" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/16.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-16" style="z-index: 15">0%</p>
                            <div id="percent-bar-16" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/17.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-17" style="z-index: 15">0%</p>
                            <div id="percent-bar-17" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/18.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-18" style="z-index: 15">0%</p>
                            <div id="percent-bar-18" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/19.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-19" style="z-index: 15">0%</p>
                            <div id="percent-bar-19" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/20.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-20" style="z-index: 15">0%</p>
                            <div id="percent-bar-20" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/21.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-21" style="z-index: 15">0%</p>
                            <div id="percent-bar-21" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/22.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-22" style="z-index: 15">0%</p>
                            <div id="percent-bar-22" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/23.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-23" style="z-index: 15">0%</p>
                            <div id="percent-bar-23" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/24.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-24" style="z-index: 15">0%</p>
                            <div id="percent-bar-24" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/25.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-25" style="z-index: 15">0%</p>
                            <div id="percent-bar-25" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/26.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-26" style="z-index: 15">0%</p>
                            <div id="percent-bar-26" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/27.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-27" style="z-index: 15">0%</p>
                            <div id="percent-bar-27" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/28.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-28" style="z-index: 15">0%</p>
                            <div id="percent-bar-28" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/29.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-29" style="z-index: 15">0%</p>
                            <div id="percent-bar-29" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/30.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-30" style="z-index: 15">0%</p>
                            <div id="percent-bar-30" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/31.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-31" style="z-index: 15">0%</p>
                            <div id="percent-bar-31" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/32.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-32" style="z-index: 15">0%</p>
                            <div id="percent-bar-32" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/33.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-33" style="z-index: 15">0%</p>
                            <div id="percent-bar-33" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/34.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-34" style="z-index: 15">0%</p>
                            <div id="percent-bar-34" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/35.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-35" style="z-index: 15">0%</p>
                            <div id="percent-bar-35" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/36.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-36" style="z-index: 15">0%</p>
                            <div id="percent-bar-36" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/37.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-37" style="z-index: 15">0%</p>
                            <div id="percent-bar-37" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/38.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-38" style="z-index: 15">0%</p>
                            <div id="percent-bar-38" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/39.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-39" style="z-index: 15">0%</p>
                            <div id="percent-bar-39" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/40.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-40" style="z-index: 15">0%</p>
                            <div id="percent-bar-40" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/41.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-41" style="z-index: 15">0%</p>
                            <div id="percent-bar-41" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/42.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-42" style="z-index: 15">0%</p>
                            <div id="percent-bar-42" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/43.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-43" style="z-index: 15">0%</p>
                            <div id="percent-bar-43" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/44.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-44" style="z-index: 15">0%</p>
                            <div id="percent-bar-44" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/45.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-45" style="z-index: 15">0%</p>
                            <div id="percent-bar-45" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/46.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-46" style="z-index: 15">0%</p>
                            <div id="percent-bar-46" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/47.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-47" style="z-index: 15">0%</p>
                            <div id="percent-bar-47" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/48.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-48" style="z-index: 15">0%</p>
                            <div id="percent-bar-48" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/49.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-49" style="z-index: 15">0%</p>
                            <div id="percent-bar-49" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/50.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-50" style="z-index: 15">0%</p>
                            <div id="percent-bar-50" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/51.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-51" style="z-index: 15">0%</p>
                            <div id="percent-bar-51" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/52.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-52" style="z-index: 15">0%</p>
                            <div id="percent-bar-52" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/53.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-53" style="z-index: 15">0%</p>
                            <div id="percent-bar-53" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/54.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-54" style="z-index: 15">0%</p>
                            <div id="percent-bar-54" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/55.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-55" style="z-index: 15">0%</p>
                            <div id="percent-bar-55" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/56.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-56" style="z-index: 15">0%</p>
                            <div id="percent-bar-56" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/57.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-57" style="z-index: 15">0%</p>
                            <div id="percent-bar-57" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/58.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-58" style="z-index: 15">0%</p>
                            <div id="percent-bar-58" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/59.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-59" style="z-index: 15">0%</p>
                            <div id="percent-bar-59" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/60.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-60" style="z-index: 15">0%</p>
                            <div id="percent-bar-60" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/61.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-61" style="z-index: 15">0%</p>
                            <div id="percent-bar-61" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/62.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-62" style="z-index: 15">0%</p>
                            <div id="percent-bar-62" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/63.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-63" style="z-index: 15">0%</p>
                            <div id="percent-bar-63" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/64.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-64" style="z-index: 15">0%</p>
                            <div id="percent-bar-64" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/65.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-65" style="z-index: 15">0%</p>
                            <div id="percent-bar-65" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/66.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-66" style="z-index: 15">0%</p>
                            <div id="percent-bar-66" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/67.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-67" style="z-index: 15">0%</p>
                            <div id="percent-bar-67" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/68.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-68" style="z-index: 15">0%</p>
                            <div id="percent-bar-68" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/69.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-69" style="z-index: 15">0%</p>
                            <div id="percent-bar-69" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/70.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-70" style="z-index: 15">0%</p>
                            <div id="percent-bar-70" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/71.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-71" style="z-index: 15">0%</p>
                            <div id="percent-bar-71" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/72.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-72" style="z-index: 15">0%</p>
                            <div id="percent-bar-72" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/73.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-73" style="z-index: 15">0%</p>
                            <div id="percent-bar-73" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/74.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-74" style="z-index: 15">0%</p>
                            <div id="percent-bar-74" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/75.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-75" style="z-index: 15">0%</p>
                            <div id="percent-bar-75" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/76.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-76" style="z-index: 15">0%</p>
                            <div id="percent-bar-76" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/77.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-77" style="z-index: 15">0%</p>
                            <div id="percent-bar-77" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/78.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-78" style="z-index: 15">0%</p>
                            <div id="percent-bar-78" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/79.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-79" style="z-index: 15">0%</p>
                            <div id="percent-bar-79" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/80.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-80" style="z-index: 15">0%</p>
                            <div id="percent-bar-80" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/81.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-81" style="z-index: 15">0%</p>
                            <div id="percent-bar-81" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/82.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-82" style="z-index: 15">0%</p>
                            <div id="percent-bar-82" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/83.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-83" style="z-index: 15">0%</p>
                            <div id="percent-bar-83" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/84.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-84" style="z-index: 15">0%</p>
                            <div id="percent-bar-84" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/85.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-85" style="z-index: 15">0%</p>
                            <div id="percent-bar-85" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/86.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-86" style="z-index: 15">0%</p>
                            <div id="percent-bar-86" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/87.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-87" style="z-index: 15">0%</p>
                            <div id="percent-bar-87" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/88.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-88" style="z-index: 15">0%</p>
                            <div id="percent-bar-88" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/89.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-89" style="z-index: 15">0%</p>
                            <div id="percent-bar-89" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/90.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-90" style="z-index: 15">0%</p>
                            <div id="percent-bar-90" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/91.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-91" style="z-index: 15">0%</p>
                            <div id="percent-bar-91" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/92.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-92" style="z-index: 15">0%</p>
                            <div id="percent-bar-92" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/93.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-93" style="z-index: 15">0%</p>
                            <div id="percent-bar-93" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/94.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-94" style="z-index: 15">0%</p>
                            <div id="percent-bar-94" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/95.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-95" style="z-index: 15">0%</p>
                            <div id="percent-bar-95" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/96.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-96" style="z-index: 15">0%</p>
                            <div id="percent-bar-96" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/97.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-97" style="z-index: 15">0%</p>
                            <div id="percent-bar-97" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/98.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-98" style="z-index: 15">0%</p>
                            <div id="percent-bar-98" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/99.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-99" style="z-index: 15">0%</p>
                            <div id="percent-bar-99" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/100.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-100" style="z-index: 15">0%</p>
                            <div id="percent-bar-100" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/101.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-101" style="z-index: 15">0%</p>
                            <div id="percent-bar-101" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/102.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-102" style="z-index: 15">0%</p>
                            <div id="percent-bar-102" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/103.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-103" style="z-index: 15">0%</p>
                            <div id="percent-bar-103" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/104.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-104" style="z-index: 15">0%</p>
                            <div id="percent-bar-104" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/105.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-105" style="z-index: 15">0%</p>
                            <div id="percent-bar-105" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/106.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-106" style="z-index: 15">0%</p>
                            <div id="percent-bar-106" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/107.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-107" style="z-index: 15">0%</p>
                            <div id="percent-bar-107" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/108.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-108" style="z-index: 15">0%</p>
                            <div id="percent-bar-108" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/109.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-109" style="z-index: 15">0%</p>
                            <div id="percent-bar-109" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/110.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-110" style="z-index: 15">0%</p>
                            <div id="percent-bar-110" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/111.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-111" style="z-index: 15">0%</p>
                            <div id="percent-bar-111" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/112.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-112" style="z-index: 15">0%</p>
                            <div id="percent-bar-112" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/113.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-113" style="z-index: 15">0%</p>
                            <div id="percent-bar-113" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/114.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-114" style="z-index: 15">0%</p>
                            <div id="percent-bar-114" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/115.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-115" style="z-index: 15">0%</p>
                            <div id="percent-bar-115" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/116.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-116" style="z-index: 15">0%</p>
                            <div id="percent-bar-116" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/117.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-117" style="z-index: 15">0%</p>
                            <div id="percent-bar-117" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/118.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-118" style="z-index: 15">0%</p>
                            <div id="percent-bar-118" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/119.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-119" style="z-index: 15">0%</p>
                            <div id="percent-bar-119" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/120.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-120" style="z-index: 15">0%</p>
                            <div id="percent-bar-120" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/121.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-121" style="z-index: 15">0%</p>
                            <div id="percent-bar-121" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/122.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-122" style="z-index: 15">0%</p>
                            <div id="percent-bar-122" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/123.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-123" style="z-index: 15">0%</p>
                            <div id="percent-bar-123" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/124.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-124" style="z-index: 15">0%</p>
                            <div id="percent-bar-124" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/125.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-125" style="z-index: 15">0%</p>
                            <div id="percent-bar-125" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="hover-btn">
                            <a class="play-btn" href="https://www.pso999.com/id-id/slot"> MAIN </a>
                        </div>
                        <a href="https://www.pso999.com/id-id/slot">
                            <img class="img-zoom" src="img/rtp/pgsoft/126.webp" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-126" style="z-index: 15">0%</p>
                            <div id="percent-bar-126" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
        <div class="footer text-center pt-5 pb-4">
            <span>© 2018 - 2022 Copyright PSO999. All Rights Reserved.</span>
        </div>
        </div>
        </div>

    </div>

    
<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 15045027;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/15045027/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/pgsoft/pgsoft.js"></script>
    <script src="js/pgsoft/slide.js"></script>
    </div>
  </body>




@endsection