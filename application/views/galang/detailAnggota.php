<div class="content">
        <div class="container-fluid">

<style type="text/css">
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}

.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
<div class="container emp-profile">
           

                <div class="row">
                    <div class="col-md-4">
                       
                    </div>
                    
                    <div class="col-md-6">
                    
                                    
                         
                                      </div>
                    <div class="col-md-2">
                   
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                         <div class="profile-img">
                            <img src="<?= base_url('img/galang/diri/').$program->fotodiri;?>" alt=""/>
                            <a class="btn btn-primary" href="<?php echo site_url('galangdana/editAnggota/'.$program->id) ?>">Edit Profil</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ID</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$program->id?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$program->nama?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$program->username?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$program->tgl_lahir?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Status Dokumen Profil</label>
                                            </div>
                                            <div class="col-md-5">
                                              
                                                <p>
                                                      <?php
                                                      $ktp = site_url('galangdana/tambahktp/').$program->id;
                                                       $kk = site_url('galangdana/tambahkk/').$program->id;
                                                        $jaminan = site_url('galangdana/tambahjaminan/').$program->id;
                                                if ($program->fotoktp > "0") {
                                                  echo '<button class="btn btn-success">[LENGKAP] KTP</button>';
                                                            } else {
                                                    echo '<a class="btn btn-danger" href='.$ktp.'>[BELUM LENGKAP] KTP</a>';
                                                        }
                                                ?>
                                                <?php
                                                if ($program->fotokk > "0") {
                                                  echo '<button class="btn btn-success">[LENGKAP] Kartu Keluarga(KK)</button>';
                                                            } else {
                                                      echo '<a class="btn btn-danger" href='.$kk.'>[BELUM LENGKAP] Kartu Keluarga (KK)</a>';
                                                        }
                                                ?>
                                                <?php
                                                if ($program->fotojaminan > "0") {
                                                  echo '<button class="btn btn-success">[LENGKAP] Surat Jaminan</button>';
                                                            } else {
                                                      echo '<a class="btn btn-danger" href='.$jaminan.'>[BELUM LENGKAP] Surat Jaminan</a>';
                                                        }
                                                ?>

                                                
                                            <br></p>
                                            </div>
                                        </div>
                            </div>
                          
                            </div>
                        </div>
                    </div>
                </div>
                    
        </div>


        </div>
    </div>
