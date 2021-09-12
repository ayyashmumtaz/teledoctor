
<script type="text/javascript">
  $.ajax({
    url: "<?php echo base_url('beranda/curl');?>",
    beforeSend: function(xhr) { 
      xhr.setRequestHeader("Authorization", "Basic " + btoa("username:password")); 
    },
    type: 'POST',
    dataType: 'json',
    contentType: 'application/json',
    processData: false,
    data: '{"foo":"bar"}',
    success: function (data) {
      console.log(data);

        var boJSON = "0";
        var bo = "0";
        var heart = "0";
        var bpJSON = "0";
        var highPressure = "0";
        var lowPressure = "0";
        var yJSON = "0";
        var temp = "0";
        var bmiJSON = "0";
        var bmi = "0";
        var chol = "0";
        var ua = "0";
        var tooth = "0";
        var hb = "0";
        var glucose = "0";
        var urinalysis = "0";
        var vision = "0";

      if (data.data.blood_oxygen.bo !== undefined) {
        boJSON = JSON.parse(data.data.blood_oxygen.bo);
        bo = (boJSON.Oxygen) + "%";
        heart = (boJSON.Bpm);
      }
      
       if (data.data.blood_pressure.blood_plessure !== undefined) {
        bpJSON = JSON.parse(data.data.blood_pressure.blood_plessure);
        highPressure = (bpJSON.HighPressure);
       lowPressure = (bpJSON.LowPressure);
      }

      if (data.data.temperature.temperature !== undefined) {
        yJSON = JSON.parse(data.data.temperature.temperature);
        temp = (yJSON.Temperature) + "°C";
      }
      
      if (data.data.height.height !== undefined) {
        bmiJSON = JSON.parse(data.data.height.height);
        bmi = (bmiJSON.BMI);
      }
      
      if (data.data.chol.chol !== undefined) {
        chol = JSON.parse(data.data.chol.chol).Chol;
      }
      
      if (data.data.ua.ua !== undefined) {
        ua = JSON.parse(data.data.ua.ua).Ua;
      }
      
      if (data.data.hb.hb !== undefined) {
        hb = JSON.parse(data.data.hb.hb).Hb;
      }
      
      if (data.data.tooth.tooth !== undefined) {
        tooth = data.data.tooth.tooth;
      }
      
      if (data.data.blood_sugar.blood_sugar !== undefined) {
        glucose = JSON.parse(data.data.blood_sugar.blood_sugar).BloodSugar;
      }

      if (data.data.vision.vision !== undefined) {
        vision = JSON.parse(data.data.vision.vision);
      }
      if (data.data.urin.urinalysis !== undefined) {
        urinalysis = JSON.parse(data.data.urin.urinalysis);
      }
      if(data.data.peecg_img.length < 1){
                $('.ecg').html(`
                    <img src="<?php base_url('img/not_found.svg') ?>" style="max-height:250px;">
                    <p class="mt-4">Not found</p>
                `);
            }else{
                console.log(data.data.peecg_img);
                $('.ecg').html(`
                    <img src="${data.data.peecg_img}" style="max-height:250px;">
                `);
            }
     
      document.getElementById("bloodpress").innerHTML = highPressure + "/" + lowPressure;
      document.getElementById("bmi").innerHTML = bmi ;

if (bmi < 17) {
 var greeting = "Kurus";
} else if (bmi > 17 && bmi < 23) {
 var greeting = "Normal";
} else if (bmi > 23 && bmi < 27){
 var greeting = "Gemuk";
} else if (bmi > 27){
 var greeting = "Obesitas";
}else{
 var greeting = "N/A";
}

 if (yJSON.Temperature > 36.1 && yJSON.Temperature < 37.7 && bmi > 17 && bmi < 23 && heart > 60 && heart < 100 && lowPressure > 60 && highPressure < 120 && boJSON.Oxygen > 95) {
  var summary = "<button class='btn btn-sm btn-Success'>Sangat Baik</button>";
 } else if (yJSON.Temperature > 36.1 && yJSON.Temperature < 37.7 && bmi > 17 && bmi < 23 && heart > 60 && heart < 100 && lowPressure > 60 && highPressure > 120 && boJSON.Oxygen > 95) {
  var summary = "<button class='btn btn-sm btn-primary'>Baik</button>";
 } else if (yJSON.Temperature < 36.1 && yJSON.Temperature > 37.7 && bmi > 17 && bmi < 23 && heart > 60 && heart < 100 && lowPressure < 60 && highPressure > 120 && boJSON.Oxygen > 95){
  var summary = "<button class='btn btn-sm btn-warning'>Kurang Baik</button>";
 } else if (yJSON.Temperature < 36.1 && yJSON.Temperature > 37.7 && bmi < 17 && bmi > 23 && heart < 60 && heart > 100 && lowPressure < 60 && highPressure > 120 && boJSON.Oxygen < 95){
  var summary = "<button class='btn btn-sm btn-danger'>Sangat Buruk</button>";
 }else{
  var summary = "<button class='btn btn-sm btn-secondary'>Tidak ada data</button>";
 }

    document.getElementById("bmi").innerHTML = greeting ;
    document.getElementById("summary").innerHTML = summary ;

      document.getElementById("heart").innerHTML = heart ;
      document.getElementById("temp").innerHTML = temp ;
      document.getElementById("spo").innerHTML =  bo;
      document.getElementById("chol").innerHTML =  chol;
      document.getElementById("ua").innerHTML =  ua;
      document.getElementById("hb").innerHTML =  hb;
      document.getElementById("tooth").innerHTML =  tooth.toString();
      document.getElementById("glucose").innerHTML =  glucose;

      if (data.data.vision.vision !== undefined) {
        document.getElementById("right_eye").innerHTML =  vision.RightVision;
        document.getElementById("left_eye").innerHTML =  vision.LeftVision;
      }
      
      if (data.data.urin.urinalysis !== undefined) {
        document.getElementById("urobilinogen").innerHTML =  urinalysis.URO;
        document.getElementById("occult_blood").innerHTML =  urinalysis.BLD;
        document.getElementById("bilirubin").innerHTML =  urinalysis.BIL;
        document.getElementById("ketone_body").innerHTML =  urinalysis.KET;
        document.getElementById("leucocyte").innerHTML =  urinalysis.LEU;
        document.getElementById("urin_glucose").innerHTML =  urinalysis.GLU;
        document.getElementById("protein").innerHTML =  urinalysis.PRO;
        document.getElementById("ph").innerHTML =  urinalysis.PH;
        document.getElementById("nitrite").innerHTML =  urinalysis.NIT;
        document.getElementById("specific_gravity").innerHTML =  urinalysis.SG;
        document.getElementById("vitamin").innerHTML =  urinalysis.VC;
      }
      
    },
    error: function(){
      
    }
});

</script>

<div class="page-content-wrapper">
  <!-- Hero Slides-->



  <div class="product-catagories-wrapper">
    <br>  
    <table border="0">
      <tr>
        <td style="padding: 0px 5px 0px 5px;"><img style="width: 500px; " src="<?= base_url('img/wellness/notes.png');?>" alt=""></td>
        <td style="padding: 0px 5px 0px 5px;"> <img style="width: 500px; " src="<?= base_url('img/wellness/lab test.png');?>" alt=""></td>
        <td style="padding: 0px 5px 0px 5px;"><img style="width: 500px; " src="<?= base_url('img/wellness/Medicine.png');?>" alt=""></td>
        <td style="padding: 0px 5px 0px 5px;"><img style="width: 500px; " src="<?= base_url('img/wellness/rontgen.png');?>" alt=""></td>
        <td style="padding: 0px 5px 0px 5px;"><img style="width: 500px; " src="<?= base_url('img/wellness/Lainnya.png');?>" alt=""></td>
      </tr>
    </table>
  </div>
  <br>  



  <!-- Product Catagories-->
  <div class="product-catagories-wrapper pt-1" style="background-color:rgb(39, 188, 221);">


    <div class="container">
      <br>
      <div class="section-heading d-flex align-items-center justify-content-between">
        <h6 class="ml-1" style="color: white;">Health Status & Recomendation</h6><a class="btn btn-primary btn-sm" href="<?=site_url('healthstat');?>">View All</a>
      </div>
      <div class="product-catagory-wrap">
        <div class="row">
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="temp">N/A</h6></i><span>Temperatur</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="heart">N/A</h6></i><span>Heart Rate</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="bmi">N/A</h6></i><span>BMI</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="bloodpress">N/A</h6></i><span>Tekanan Darah</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="spo">N/A</h6></i><span>SPO2 Darah</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="glucose">N/A</h6></i><span>Glukosa Darah</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="chol">N/A</h6></i><span>Kolesterol</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="ua">N/A</h6></i><span>Uric Acid</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="hb">N/A</h6></i><span>HB</span></a></div>
            </div>
          </div>
           <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#" data-toggle="modal" data-target="#urine"><i><button class="btn btn-sm btn-primary" href="#">Lihat</button> </i> <span>Urine</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#" data-toggle="modal" data-target="#vision"><i><button class="btn btn-sm btn-primary" href="#">Lihat</button> </i> <span>Vision</span></a></div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><h6 id="tooth">N/A</h6></i><span>Teeth</span></a></div>
            </div>
          </div>
          <div class="col-6">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i id="summary"><h6>N/A</h6></button></i><span>Kondisi Kesehatan</span></a></div>
            </div>
          </div>
          <div class="col-6">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="#"><i><button class="btn btn-sm btn-primary" href="#">Aktivitas Biasa</button></i><span>Rekomendasi</span></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Flash Sale Slide-->

  <br>
  <div class="cta-area">
    <div class="container">

    </div>
  </div>
  <div class="flash-sale-wrapper pb-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">ECG</h6>
          </div>
          <!-- Flash Sale Slide-->
          <!--div class="flash-sale-slide owl-carousel">
            <!-- Single Flash Sale Card-->
            <center class="ecg"> 
                <i class="fa fa-spin fa-spinner"></i>
            </center>
          </div>
        </div>

  <div class="flash-sale-wrapper pb-3">
    <div class="container">
      <div class="section-heading d-flex align-items-center justify-content-between">
        <h6 class="ml-1">Suhu Tubuh</h6>
      </div>
      <!-- Flash Sale Slide-->
            <center>

             <img src="<?=base_url('img/suhu.jpeg');?>">

           </center> 

           
         </div>
       </div>

        <div class="flash-sale-wrapper pb-3">
          <div class="container">
            <div class="section-heading d-flex align-items-center justify-content-between">
              <h6 class="ml-1">Blood Glucose</h6>
            </div>
            <!-- Flash Sale Slide-->
            <center> <img src="<?=base_url('img/glucose.jpeg');?>"></center>
          </div>
        </div>

        <div class="flash-sale-wrapper pb-3">
          <div class="container">
            <div class="section-heading d-flex align-items-center justify-content-between">
              <h6 class="ml-1">Blood Oxygen</h6>
            </div>
            <!-- Flash Sale Slide-->
            <center> <img src="<?=base_url('img/oxygen.jpeg');?>"></center>
          </div>
        </div>
    </div>
        
<div class="modal" id="vision" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Vision</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table">
        <tr>
          <td>Left Eye</td>
          <td id="left_eye"></td>
        </tr>
        <tr>
          <td style="padding-top:20px;">Right Eye</td>
          <td style="padding-top:20px;" id="right_eye"></td>
        </tr>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="urine" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Urine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table">
        <tr>
          <td style="padding-top:20px;">Urobilinogen</td>
          <td style="padding-top:20px;" id="urobilinogen"></td>
        </tr>
        <tr>
          <td style="padding-top:20px;">Occult Blood</td>
          <td style="padding-top:20px;" id="occult_blood"></td>
        </tr>
        <tr>
          <td style="padding-top:20px;">Bilirubin</td>
          <td style="padding-top:20px;" id="bilirubin"></td>
        </tr>
        <tr>
          <td style="padding-top:20px;">Ketone Body</td>
          <td style="padding-top:20px;" id="ketone_body"></td>
        </tr>
        <tr>
          <td style="padding-top:20px;">Leucocyte</td>
          <td style="padding-top:20px;" id="leucocyte"></td>
        </tr>
        <tr>
          <td style="padding-top:20px;">Glucose</td>
          <td style="padding-top:20px;" id="urin_glucose"></td>
        </tr>
        <tr>
          <td style="padding-top:20px;">Protein</td>
          <td style="padding-top:20px;" id="protein"></td>
        </tr>
        <tr>
          <td style="padding-top:20px;">Ph </td>
          <td style="padding-top:20px;" id="ph"></td>
        </tr>
        <tr>
          <td style="padding-top:20px;">Nitrite</td>
          <td style="padding-top:20px;" id="nitrite"></td>
        </tr>
        <tr>
          <td style="padding-top:20px;">Specific Gravity</td>
          <td style="padding-top:20px;" id="specific_gravity"></td>
        </tr>
        <tr>
          <td style="padding-top:20px;">Vitamin</td>
          <td style="padding-top:20px;" id="vitamin"></td>
        </tr>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        <script src="https://www.jsdelivr.com/package/npm/chart.js?path=dist"></script>
        <script>
          var ctx = document.getElementById('suhuTubuh').getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'line',
            data: {
              labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
              datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
              }
            }
          });
        </script>