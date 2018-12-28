<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">                       
        <div class="col-lg-12">
          <!-- breadcrumb-->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li aria-current="page" class="breadcrumb-item active"><?php echo $kode ?></li>
            </ol>
          </nav>
          <div class="box">
            <h1><?php echo $kode ?></h1>
            <p>Showing <strong><?php echo count((array)$results) ?></strong> of <strong><?php echo $count ?></strong> <?php echo $kode ?>s</p>
          </div>
          <div class="row products">
            <?php foreach($results as $data){ ?>
            <div class="col-lg-5ths col-md-5ths">
              <div class="product">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front"><a href="<?php echo base_url() ?>film/detail/<?php print_r(explode('/',$data["url"])[5]) ?>"><img src="<?php echo base_url() ?>assets/img/film.jpg" alt="" class="img-fluid"></a></div>
                    <div class="back"><a href="<?php echo base_url() ?>film/detail/<?php print_r(explode('/',$data["url"])[5]) ?>"><img src="<?php echo base_url() ?>assets/img/film.jpg" alt="" class="img-fluid"></a></div>
                  </div>
                </div><a href="<?php echo base_url() ?>film/detail/<?php print_r(explode('/',$data["url"])[5]) ?>" class="invisible"><img src="<?php echo base_url() ?>assets/img/film.jpg" alt="" class="img-fluid"></a>
                <div class="text">
                  <h3><a href="<?php echo base_url() ?>film/detail/<?php print_r(explode('/',$data["url"])[5]) ?>"><?php echo $data["title"] ?></a></h3>
                  <p class="buttons"><a href="<?php echo base_url() ?>film/detail/<?php print_r(explode('/',$data["url"])[5]) ?>" class="btn btn-outline-secondary">View detail</a></p>
                </div>
                <!-- /.text-->
              </div>
              <!-- /.product            -->
            </div>
            <?php } ?>
            <!-- /.products-->
          </div>
          <div class="pages">
            <nav aria-label="Page navigation example" class="d-flex justify-content-center">
              <ul class="pagination">
                <li class="page-item"><a href="<?php echo base_url() ?>film/page/1" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                <?php 
                  $pagin=ceil($count/10);
                  for($a=1;$a<=$pagin;$a++) echo '<li class="page-item"><a href="'.base_url().'film/page/'.$a.'" class="page-link">'.$a.'</a></li>';
                ?>
                <li class="page-item"><a href="<?php echo base_url() ?>film/page/<?php echo $pagin ?> " aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /.col-lg-9-->
      </div>
    </div>
  </div>
</div>
