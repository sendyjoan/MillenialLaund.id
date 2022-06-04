@extends('layouts.app')

@section('content')

<div class="container">
    <section class="slider_section ">
            <div class="slider_bg_box">
               <img src="images/slider-bg.jpg" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    MillenialLaund.id
                                    </span>
                                 </h1>
                                 <p>
                                    Laundry adalah salah satu bagian dalam pengelolaan jasa cuci-mencuci
                                    atas semua pakaian yang telah diditipkan untuk dibersihkan. Jasa laundry menjadi
                                    alternatif bagi sebagian orang yang memiliki aktivitas padat namun tidak sempat
                                    untuk mencuci pakaiannya sendiri.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Laundry Sekarang!
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
                                 <h2>
                                    <span>
                                        Kami Mengerti Bagaimana Rasanya Ketika:
                                    </span>
    
                                 </h2>
                                 <ul type="square">
                                        <li>Pakaian dari laundry hilang atau luntur</li>
                                        <li>Laundry tidak tepat waktu</li>
                                        <li>Tidak tenang dengan laundry</li>
                                        <li>Buang waktu dan tenaga untuk mencuci</li>
                                     </ul>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Laundry Sekarang!
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="carousel-item">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    Sale 20% Off
                                    </span>
                                    <br>
                                    On Everything
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> -->
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
</div>
@endsection