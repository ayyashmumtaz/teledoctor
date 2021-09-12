<div class="page-content-wrapper">
      <div class="container">
        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
          <!-- User Information-->
          <div class="card user-info-card">
            <div class="card-body p-4 d-flex align-items-center">
              <div class="user-profile mr-3"><img src="img/bg-img/9.jpg" alt="">
                
              </div>
              <div class="user-info">
                <p class="mb-0 text-white"><?=$program->name?></p>
                <h5 class="mb-0"><?=$program->vendor?></h5>
              </div>
            </div>
          </div>
          <!-- User Meta Data-->
          <div class="card user-data-card">
            <div class="card-body">
              <form action="<?= site_url('donasi/donate');?>" method="POST"> 
                <input type="hidden" name="id_program" value="<?=$program->id?>">
                <div class="form-group">
                  <div class="title mb-2"><span>Nama Donatur</span></div>
                  <input class="form-control" name="donatur" type="text" required="">
                </div>
                <div class="form-group">
                  <div class="title mb-2"><span>Jumlah Donasi</span></div>
                  <input class="form-control" name="donasi" type="number" placeholder="Rp." required="">
               
                <div class="form-group">
                  <div class="title mb-2"><span>Niat Donasi<small>(Klik tulisan untuk menampilkan niat)</small></span></div>
                  <input type="radio" name="niat" value="fitrah"><a name="niat" data-toggle="modal" data-target="#Fitrah"><small> Zakat Fitrah</small></a><br>
                                                        <input type="radio" name="niat" value="mal"><a name="niat" data-toggle="modal" data-target="#Mal"><small> Zakat Mal</small></a><br>
                                                        <input type="radio" name="niat" value="infaq"><a name="niat" data-toggle="modal" data-target="#Infaq"><small> Infaq</small></a><br>
                                                        <input type="radio" name="niat" value="sedekah"><a name="niat" data-toggle="modal" data-target="#Sedekah"><small> Sedekah</small></a><br>
                                                        <input type="radio" name="niat" value="wakaf"><a name="niat" data-toggle="modal" data-target="#Wakaf"><small> Wakaf</small></a><br>
                </div>
                
                <button class="btn btn-success w-100">Donasi Sekarang!</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="Fitrah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Silahkan baca niatnya</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <h6>Zakat Fitrah</h6> <br>
        <p style="text-align: right;">ﻧَﻮَﻳْﺖُ أَﻥْ أُﺧْﺮِﺝَ ﺯَﻛَﺎﺓَ ﺍﻟْﻔِﻄْﺮِ ﻋَﻦْ ﻧَﻔْسيْ ﻓَﺮْﺿًﺎ ﻟﻠﻪِ ﺗَﻌَﺎﻟَﻰ  </p>    
        <P> Latin :"Nawaitu an ukhrija zakaata al-fitri ‘an nafsi fardhan lillahi ta’ala"<br> </P>
        <p>Artinya:"Aku niat mengeluarkan zakat fitrah untuk diriku sendiri fardhu karena Allah Taala."</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" data-dismiss = "modal" >Selesai</button>
        </div>
        </div>
    </div>
  </div>
    <div class="modal fade" id="Mal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Silahkan baca niat Zakatnya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <h6>Zakat Mal</h6> <br>
                <p style="text-align: right;">نَوَيْتُ أَنْ أُخْرِجَ زَكَاةَ مَالِى فَرْضًا لِلَّهِ تَعَالَى< </p> 
                <p>Latin :“Nawaitu An Ukhriza Zakata Maali Fardhan lillahi Ta’aala”</p>
                <p>Artinya :"Aku niat mengeluarkan zakat hartaku, fardhu karena Allah Ta’ala."</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" data-dismiss = "modal">Selesai</button>
        </div>
      </div>
    </div>
  </div>


          <!-- Modal infaq -->
<div class="modal fade" id="Infaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
  <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Silahkan baca niat Infaq</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
        <p style="text-align: right;">نَوَيْتُ أَنْ أُخْرِجَ زَأنفق فَرْضًا لِلَّهِ تَعَالَى< </p>
        <p> Latin :“Nawaitu An Ukhriza Infaqo Fardhan lillahi Ta’aala”</p>
        <p> Artinya :"Aku niat mengeluarkan infaq hartaku, fardhu karena Allah Ta'ala."</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss ="modal">Tutup</button>
        <button type="button" class="btn btn-primary" data-dismiss = "modal">Selesai</button>
   </div>
  </div>
 </div>
</div>


                  <!-- Modalnya sedekah-->
<div class="modal fade" id="Sedekah" tabindex="-1" role="dialog" aria-labelledby="    exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Silahkan baca niat Sedekah</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
      <p style="text-align: right;">وَيْتُ أَنْ أُخْرِجَ زَصدقة فَرْضًا لِلَّهِ تَعَالَى< </p>
      <p>Latin :“Nawaitu An Ukhriza Sodaqo Fardhan lillahi Ta’aala”</p>
      <p>Artinya :"Aku niat mengeluarkan Sedekah hartaku, fardhu karena Allah Ta'ala."</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss ="modal">Tutup</button>
      <button type="button" class="btn btn-primary" data-dismiss = "modal">Selesai</button>
      </div>
  </div>
 </div>
</div>


                <!-- Modalnya wakaf -->
<div class="modal fade" id="Wakaf" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Silahkan baca niat Wakaf</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    Saya niat mewakafkan <small>(Barang yang ingin diwakafkan)</small> untuk <small>(Program yang dipilih).</small>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
    <button type="button" class="btn btn-primary" data-dismiss="modal">Selesai</button>
    </div>
    </div>
 </div>
</div>



                                        </div>
                                    </div>

    