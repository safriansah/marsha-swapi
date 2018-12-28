<?php set_time_limit(0); ?>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url() ?>film"><?php echo $kode ?></a></li>
                  <li aria-current="page" class="breadcrumb-item active"><?php echo $results["title"] ?></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">
              <!--
              *** MENUS AND FILTERS ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Categories</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column category-menu">
                    <li class="nav-item"><a href="<?php echo base_url() ?>people" class="nav-link <?php echo $menu=='2'?'active':'' ?>">people</a></li>
                    <li class="nav-item"><a href="<?php echo base_url() ?>planet" class="nav-link <?php echo $menu=='3'?'active':'' ?>">planets</a></li>
                    <li class="nav-item"><a href="<?php echo base_url() ?>film" class="nav-link <?php echo $menu=='4'?'active':'' ?>">films</a></li>
                    <li class="nav-item"><a href="<?php echo base_url() ?>species" class="nav-link <?php echo $menu=='5'?'active':'' ?>">species</a></li>
                    <li class="nav-item"><a href="<?php echo base_url() ?>vehicle" class="nav-link <?php echo $menu=='6'?'active':'' ?>">vehicles</a></li>
                    <li class="nav-item"><a href="<?php echo base_url() ?>starship" class="nav-link <?php echo $menu=='7'?'active':'' ?>">starships</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-9">
              <div id="productMain" class="row">
                <div class="col-md-6">
                  <div class="box">
                    <h1 class="text-center"><?php echo $results["title"] ?></h1>
                    <h1 class="text-center"><img src="<?php echo base_url() ?>assets/img/film.jpg" alt="" class="img-fluid"></h1>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box">
                  <p><b>episode_id : </b><?php echo $results["episode_id"] ?></p>
                  <p><b>opening_crawl : </b><?php echo $results["opening_crawl"] ?></p>
                  <p><b>director : </b><?php echo $results["director"] ?></p>
                  <p><b>producer : </b><?php echo $results["producer"] ?></p>
                  <p><b>release_date : </b><?php echo $results["release_date"] ?></p>
                  </div>
                </div>
              </div>
              <div id="details" class="box">
                <h4>characters</h4>
                <?php foreach($results["characters"] as $data){ ?>
                <ul>
                    <?php
                        $res=json_decode(file_get_contents($data)); 
                        echo "<li><a href='".base_url()."people/detail/".explode('/',$res->url)[5]."'>".$res->name."</a></li>";
                    ?>
                </ul>
                <?php } ?>
              </div>
              <div id="details" class="box">
                <h4>planets</h4>
                <?php foreach($results["planets"] as $data){ ?>
                <ul>
                    <?php
                        $res=json_decode(file_get_contents($data)); 
                        echo "<li><a href='".base_url()."planet/detail/".explode('/',$res->url)[5]."'>".$res->name."</a></li>";
                    ?>
                </ul>
                <?php } ?>
              </div>
              <div id="details" class="box">
                <h4>starships</h4>
                <?php foreach($results["starships"] as $data){ ?>
                <ul>
                    <?php
                        $res=json_decode(file_get_contents($data)); 
                        echo "<li><a href='".base_url()."starship/detail/".explode('/',$res->url)[5]."'>".$res->name."</a></li>";
                    ?>
                </ul>
                <?php } ?>
              </div>
              <div id="details" class="box">
                <h4>vehicles</h4>
                <?php foreach($results["vehicles"] as $data){ ?>
                  <ul>
                    <?php
                        $res=json_decode(file_get_contents($data)); 
                        echo "<li><a href='".base_url()."vehicle/detail/".explode('/',$res->url)[5]."'>".$res->name."</a></li>";
                    ?>
                </ul>
                <?php } ?>
              </div>
              <div id="details" class="box">
                <h4>species</h4>
                <?php foreach($results["species"] as $data){ ?>
                  <ul>
                    <?php
                        $res=json_decode(file_get_contents($data)); 
                        echo "<li><a href='".base_url()."species/detail/".explode('/',$res->url)[5]."'>".$res->name."</a></li>";
                    ?>
                </ul>
                <?php } ?>
              </div>
          </div>
        </div>
      </div>
    </div>
