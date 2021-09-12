
      <!-- End Navbar -->
      <div class="content">
        <h2><center>Gusiwan Smart Training</center></h2>
        <div class="container-fluid">
          
          <div class="row">
            <?php foreach($training as $program) : ?>
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?= base_url('img/training/'). $program->images;?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $program->judul?></h5>
    <br>
     
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalYT">Mulai Training</button>
    <a class="btn btn-success" href="<?= site_url('galangdana/onlinetest/').$program->id_train;?>">Online Test</a>
  </div>
</div>

         &nbsp
<?php endforeach; ?>   
      </div>
  

<div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">

        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9l-ti-tT9xw"></iframe>"
            allowfullscreen></iframe>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center flex-column flex-md-row">
     
      
        <p><?= $program->desc?></p>
       
        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
          data-dismiss="modal">Close</button>





            
            </div>
          </div>
  
  <script>$('p').html(function(i, html) {
    var re  = /(?:http:\/\/)?(?:www\.)?(?:youtube\.com|youtu\.be)\/(?:watch\?v=)?(.+)/g,
        vid = '<iframe width="420" height="345" src="//www.youtube.com/embed/$1" allowfullscreen></iframe>';
    return html.replace(re, vid);
});</script>

      <!-- Button trigger modal-->


<!--Modal: modalYT-->

