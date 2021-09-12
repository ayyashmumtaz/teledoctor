 <div class="page-content-wrapper">
      <!-- Top Products-->
      <div class="top-products-area pt-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">News & Tips</h6>
            <!-- Layout Options-->
            
          </div>
               <div class="container">
          <div class="section-heading">
           
          </div>
         
        
      
          <div class="row">
            <?php foreach ($news as $program) : ?>
            <!-- Single Blog Card-->
            <div class="col-12">
              <div class="card blog-card list-card mb-3">
                <!-- Post Image-->
                <div class="post-img"><img src="<?= base_url('img/product/pro.jpg');?>" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni-bookmark"></i></a>
                <!-- Read More Button--><a class="btn btn-danger btn-sm read-more-btn" href="<?= site_url('news/read/'. $program->id); ?>">Read More</a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#"></a>
                  <!-- Post Title--><a class="post-title d-block" href="blog-details.html"><?= $program->judul?></a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap"><a href="#"><i class="lni-user"></i></a></div>
                </div>
              </div>
            </div>
       <?php endforeach; ?>
           
         
        </div>
   </div>
    </div>