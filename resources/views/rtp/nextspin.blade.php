
@extends('rtp.layouts.idnslot')

@section('idnslot-container')



  <body>
    <div class="container">
      <div class="adv">
        <div class="banner pt-3 pb-2">
          <a href="https://www.pso999.net/">
            <img style="width: 35%; margin-left: 32%;" src="../img/logo/logo.gif" alt="" />
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
            <a class="btn-provider" href="/pragmatic">
            <img src="img/rtp/pragmatic/pragmaticplay.svg" alt="pragmatic" style="width: 100%" />
            <p class="long" style="color: white">Pragmatic Play</p>
            <p class="short">PP</p>
            </a>
          </div>
          <div class="column">
            <a class="btn-provider" href="/habanero">
                <img src="img/rtp/pragmatic/habanero.svg" alt="habanero" style="width: 100%" />
                <p class="long" style="color: white">Habanero</p>
                <p class="short">HB</p>
                </a>
          </div>
          <div class="column">
            <a class="btn-provider" href="/microgaming">
                <img src="img/rtp/pragmatic/microgaming.svg" alt="microgaming" style="width: 100%" />
                <p class="long" style="color: white">Microgaming</p>
                <p class="short">MG</p>
                </a>
          </div>
          <div class="column">
            <a class="btn-provider" href="/pgsoft">
                <img src="img/rtp/pragmatic/pgsoft.svg" alt="pgsoft" style="width: 100%" />
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/aDonkiKong.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/aMnkyJump.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/s5ForStar.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/s7Dragons.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sBuffK.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sCaiShen.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sCandyBona.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sCandyXmas.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sClaFruit7.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sCrazyMkDx.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sCrazyMnky.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sDblMnky.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sDiamond7.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sDolphDive.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sDrgBlitz.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sEternalFi.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sForToad.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sForestSec.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sFruitTyc.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sGolWest.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sGoldenFa.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sHighwayB.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sHolyGoat.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sHoney888.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sHotSmash.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sJokerKing.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sLightnWmn.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sLongX3.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sLuckyGems.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sMayaQuest.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sMrHippo.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sOceanChes.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sPrinCrime.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sRickyTyco.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sRoma.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sShkBoomX2.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sShkThaiX2.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sSoccerK.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sSuperFor.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sSweetLava.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sTaiga88.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sTriKfMnky.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sTriMnky.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
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
                            <img class="img-zoom" src="https://lstorage.s3.ap-southeast-1.amazonaws.com/provider/icon/nextspin/sTwinkleIc.png" alt="" style="width: 90%; margin: 5px 0 5px 0">
                        </a>
                        <div style="z-index: 10" class="percent">
                            <p id="percent-txt-44" style="z-index: 15">0%</p>
                            <div id="percent-bar-44" class="percent-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
        <div class="footer text-center pt-5 pb-4">
            <span>© 2018 - 2023 Copyright PSO999. All Rights Reserved.</span>
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
    <script src="js/pragmatic/pragmatic.js"></script>
    <script src="js/pragmatic/slide.js"></script>
    </div>
  </body>




@endsection