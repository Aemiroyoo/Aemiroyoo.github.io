  <!-- Service Section -->
  <!-- <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Kegiatan</h1>
        <p>Lembaga MPF Analog Universitas Muhammadiyah Jakarta Mempunyai Kegiatan Yang Sering Di Laksanakan</p>
      </div>

      <div class="service-bottom">
        <div class="service-item">
          <h2>KUNJUNGAN</h2>
          <p>Berkunjung ke berbagai universitas dan bertemu sudah menjadi rutinitas bagi kami. Setiap saat ada kesempatan untuk memperluas relasi, kami selalu menyempatkan diri untuk berkunjung ke pameran foto lembaga-lembaga fotografi dari universitas lain. Selain bisa menambah teman baru, kami juga bisa mendapat banyak pelajaran baru mengenai fotografi dan hal-hal baru lain yang kami belum ketahui sebelumnya. </p>
        </div>
        <div class="service-item">
         
          <h2>SHARING SESSION</h2>
          <p>Hari sabtu kami mengadakan sharing session, Berbagi ilmu pengetahuan dan berbincang mengenai trend terbaru dalam fotografi. Tak jarang para pendiri dan senior dari MPF Analog menemani kami dalam sharing session ini. Berkat mereka, kami bisa belajar banyak sekali pengetahuan baru, mulai dari cara menggunakan kamera analog dan kamera digital, cara mencuci roll film analog,  </p>
        </div>
        <div class="service-item">
          
          <h2>HUNTING FOTO BERSAMA</h2>
          <p> Hunting Kegiatan di mana ada waktu senggang, Sebagai mahasiswa pecinta fotografi, tentunya selain suka memotret, kami juga suka jalan-jalan berkeliling kota untuk mencari objek foto yang bagus. Kegiatan sehari-hari kita tidak pernah terlepas dari motret, motret, dan motret. Tapi tenang saja, kami motret bukan sembarang motret. Setiap kali hunting, kami juga selalu mempraktekan skill baru yang telah kita belajari. </p>
        </div>
    </div>
  </section> -->
  <!-- End Service Section -->

  <style>
    #kunjungan {
      flex-direction: column;
      text-align: center;
      /* max-width: 1500px; */
      margin:0 auto;
      padding: 130px 0;
      /* margin-top: 35px; */
      margin-bottom: 25px;
      
    }
    .kunjugan{
      margin-bottom: 25px;
      flex-direction: column;
      text-align: center;
      /* max-width: 1500px; */
      margin:0 auto;
      padding: 100px 0;
      margin-bottom: 25px;
      
    }
    .text-kunjungan{
      font-size: 4.2rem;
      font-weight: 700;
      margin: 0 auto; /* Memusatkan elemen secara horizontal */
      margin-bottom: 25px; /* Menambahkan margin bawah */
      text-align: center; 
    }
    .sub-text-kunjungan{
      line-height: 3rem;
    }
    .image-kunjungan{
      padding-right: 10px;
      padding-left: 10px;
      height: 515px;
      /* height: 500px; */
    }
    .sub-image-kunjung{
      padding-bottom: 20px;
    }
    .zoom-img{
      transition: transform 0.2s ease;
      cursor: pointer;
    }
    .zoom-img:hover{
      transform: scale(1.05);
      transition: transform 0.2s ease;
    }
  </style>
  <section id="kunjungan">
    <div class="kunjungan container">
      <div class="row">
        <p class="text-kunjungan">KUNJUNGAN</p>
        <p class="sub-text-kunjungan">Berkunjung ke berbagai universitas dan bertemu dengan banyak orang baru sudah menjadi rutinitas bagi kami. Setiap saat ada kesempatan untuk memperluas relasi, kami selalu menyempatkan diri untuk berkunjung ke pameran foto lembaga-lembaga fotografi dari universitas lain. Selain bisa menambah teman baru, kami juga bisa mendapat banyak pelajaran baru mengenai fotografi dan hal-hal baru lain yang kami belum ketahui sebelumnya. </p>
        <div class="row" style="margin-top: 25px">
          <div class="col-4 image-kunjungan">
            <img class="zoom-img" src="gambar/kunjungan/49e25528-be40-40fa-bb4f-f5f1aaf85ff9.JPG" data-toggle="modal" data-target="#mykunjungan1" alt="Kunjungan">
          </div>
          <div class="col-4 image-kunjungan">
            <img class="zoom-img" src="gambar/kunjungan/DSCF2710.JPG" data-toggle="modal" data-target="#mykunjungan2" alt="Kunjungan">
          </div>
          <div class="col-4 image-kunjungan">
            <div class="row">
              <div class="col-12 sub-image-kunjung">
                <img class="zoom-img" src="gambar/kunjungan/DSCF2694.JPG" data-toggle="modal" data-target="#mykunjungan3" alt="Kunjungan">
              </div>
              <div class="col-12 sub-image-kunjung">
                <img class="zoom-img" src="gambar/kunjungan/DSCF2727.JPG" data-toggle="modal" data-target="#mykunjungan4" alt="Kunjungan">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="mykunjungan1">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">“Kunjungan 1”</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <img src="gambar/kunjungan/49e25528-be40-40fa-bb4f-f5f1aaf85ff9.JPG" alt="Poster">
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="mykunjungan2">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">“Kunjungan 2”</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <img src="gambar/kunjungan/DSCF2710.JPG" alt="Poster">
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="mykunjungan3">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">“Kunjungan 3”</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <img src="gambar/kunjungan/DSCF2694.JPG" alt="Poster">
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="mykunjungan4">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">“Kunjungan 4”</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <img src="gambar/kunjungan/DSCF2727.JPG" alt="Poster">
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  
  <style>
    #sharing .sharing{
      flex-direction: column;
      text-align: center;
      /* max-width: 1500px; */
      margin:0 auto;
      padding: 100px 0;
    }
    .text-sharing{
      font-size: 4.2rem;
      font-weight: 700;
      margin: 0 auto; /* Memusatkan elemen secara horizontal */
      margin-bottom: 25px; /* Menambahkan margin bawah */
      text-align: center; 
      color: white;
    }
    .sub-text-sharing{
      color: white;
      line-height: 3rem;
    }
    .sharing-flex1{
      display: flex;
      justify-content: flex-end;
      margin-bottom: 30px;
      margin-top: 20px;
    }
    .sharing-flex2{
      display: flex;
      justify-content: flex-start;
      margin-bottom: 30px;
    }
    .image-sharing{
      flex: 0 0 28%;
      max-width: 30%;
    }
    .share {
        transition: transform 0.4s ease;
        cursor: pointer;
    }
    .share:hover {
        transform: scale(1.1) rotate(3.1deg);
    }
    .cam{
      height: 40vh;
      display: flex;
      align-items: center;
    }
    .bg-camera1::before{
      content: "";
      position: absolute;
      top: -48px;
      left: -30px;
      width: 22%;
      height: 100%;
      background-image: url(gambar/background/3d_Camera.png);
      background-repeat: no-repeat;
      background-size: contain;
      z-index: 0;
    }
    .bg-camera2::before{
      content: "";
      position: absolute;
      bottom: -92px;
      right: -20px;
      width: 23%;
      height: 94%;
      background-image: url(gambar/background/3d-camera1.png);
      background-repeat: no-repeat;
      background-size: contain;
      z-index: 0;
    }
  </style>
  <section id="sharing" style="background: #29323c;">
    <div class="sharing container">
      <div class="row">
        <p class="text-sharing">SHARING SESSION</p>
        <p class="sub-text-sharing">Hari sabtu adalah hari yang selalu kami tunggu-tunggu. Karena di hari itu kami selalu mengadakan sharing session bersama. Berbagi ilmu pengetahuan dan berbincang mengenai trend terbaru dalam fotografi adalah hal yang mengasyikkan bagi kami. Tak jarang para pendiri dan senior dari MPF Analog menemani kami dalam sharing session ini. Berkat mereka, kami bisa belajar banyak sekali pengetahuan baru, mulai dari cara menggunakan kamera analog dan kamera digital, cara mencuci roll film analog, hingga cara memotret menggunakan kamera buatan sendiri yang hanya berbahan dasar kaleng bekas. </p>
        <div class="col-12 bg-camera1 cam" style="margin-top: 20px;">
          <div class="row sharing-flex1">
            <div class="col-3 image-sharing">
              <img class="share" src="gambar/sharing/DSC_0341.JPG" data-toggle="modal" data-target="#mysharing1" alt="Sharing">
            </div>
            <div class="col-3 image-sharing">
              <img class="share" src="gambar/sharing/DSC_0331.JPG" data-toggle="modal" data-target="#mysharing2" alt="Sharing">
            </div>
            <div class="col-3 image-sharing">
              <img class="share" src="gambar/sharing/DSC_0629.JPG" data-toggle="modal" data-target="#mysharing3" alt="Sharing">
            </div>
          </div>
        </div>
        <div class="col-12 bg-camera2 cam">
          <div class="row sharing-flex2">
            <div class="col-3 image-sharing">
              <img class="share" src="gambar/sharing/DSC_0624.JPG" data-toggle="modal" data-target="#mysharing4" alt="Sharing">
            </div>
            <div class="col-3 image-sharing">
              <img class="share" src="gambar/sharing/DSC_0620.JPG" data-toggle="modal" data-target="#mysharing5" alt="Sharing">
            </div>
            <div class="col-3 image-sharing">
              <img class="share" src="gambar/sharing/DSC_0647.JPG" data-toggle="modal" data-target="#mysharing6" alt="Sharing">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="mysharing1">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">“Sharing 1”</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <img src="gambar/sharing/DSC_0341.JPG" alt="Poster">
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="mysharing2">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">“Sharing 2”</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <img src="gambar/sharing/DSC_0331.JPG" alt="Poster">
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="mysharing3">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">“Sharing 3”</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <img src="gambar/sharing/DSC_0629.JPG" alt="Poster">
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="mysharing4">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">“Sharing 4”</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <img src="gambar/sharing/DSC_0624.JPG" alt="Poster">
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="mysharing5">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">“Sharing 5”</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <img src="gambar/sharing/DSC_0620.JPG" alt="Poster">
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="mysharing6">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">“Sharing 6”</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <img src="gambar/sharing/DSC_0647.JPG" alt="Poster">
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    #hunting .hunting{
      flex-direction: column;
      text-align: center;
      /* max-width: 1500px; */
      margin:0 auto;
      padding: 100px 0;
    }
    .text-hunting{
      font-size: 4.2rem;
      font-weight: 700;
      margin: 0 auto; /* Memusatkan elemen secara horizontal */
      margin-bottom: 25px; /* Menambahkan margin bawah */
      text-align: center; 
    }
    .sub-text-hunting{
      line-height: 3rem;
    }
    .image-hunting{
      flex: 0 0 32%;
      max-width: 32%;
    }
  </style>
  <section id="hunting">
    <div class="hunting container">
      <div class="">
        <p class="text-hunting">HUNTING SESSION</p>
        <p class="sub-text-hunting">“Hunting yuk!” merupakan dua kata yang sudah sangat akrab di telinga kami. Di mana ada waktu senggang, di situlah lensa kamera terbuka. Sebagai mahasiswa pecinta fotografi, tentunya selain suka memotret, kami juga suka jalan-jalan berkeliling kota untuk mencari objek foto yang bagus. Kegiatan sehari-hari kita tidak pernah terlepas dari motret, motret, dan motret. Tapi tenang saja, kami motret bukan sembarang motret. Setiap kali hunting, kami juga selalu mempraktekan skill baru yang telah kita belajari. Jadi semakin sering kami hunting, hasil jepretan kami akan semakin terlihat bagus dan  profesonal. </p>
        <div class="col-12 cam" style="margin-top: 20px;">
          <div class="row d-flex justify-content-center">
            <div class="col-3 image-hunting">
              <img class="share" src="gambar/hunting/DSC_0501.JPG" data-toggle="modal" data-target="#myhunting1" alt="Hunting">
            </div>
            <div class="col-3 image-hunting">
              <img class="share" src="gambar/hunting/DSC_0560.JPG" data-toggle="modal" data-target="#myhunting2" alt="Hunting">
            </div>
            <div class="col-3 image-hunting">
              <img class="share" src="gambar/hunting/DSC_0585.JPG" data-toggle="modal" data-target="#myhunting3" alt="Hunting">
            </div>
          </div>
        </div>
        <div class="col-12 cam">
          <div class="row d-flex justify-content-center">
            <div class="col-3 image-hunting">
              <img class="share" src="gambar/hunting/DSCF5077.JPG" data-toggle="modal" data-target="#myhunting4" alt="Hunting">
            </div>
            <div class="col-3 image-hunting">
              <img class="share" src="gambar/hunting/DSCF5326.JPG" data-toggle="modal" data-target="#myhunting5" alt="Hunting">
            </div>
            <div class="col-3 image-hunting">
              <img class="share" src="gambar/hunting/DSCF51371.JPG" data-toggle="modal" data-target="#myhunting6" alt="Hunting">
            </div>
          </div>
        </div>

        <div class="modal fade" id="myhunting1">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">“Hunting 1”</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <img src="gambar/hunting/DSC_0501.JPG" alt="Poster">
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myhunting2">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">“Hunting 2”</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <img src="gambar/hunting/DSC_0560.JPG" alt="Poster">
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myhunting3">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">“Hunting 3”</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <img src="gambar/hunting/DSC_0585.JPG" alt="Poster">
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myhunting4">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">“Hunting 4”</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <img src="gambar/hunting/DSCF5077.JPG" alt="Poster">
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myhunting5">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">“Hunting 5”</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <img src="gambar/hunting/DSCF5326.JPG" alt="Poster">
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="myhunting6">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">“Hunting 6”</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <img src="gambar/hunting/DSCF51371.JPG" alt="Poster">
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>