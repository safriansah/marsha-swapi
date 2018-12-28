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
                  <li class="breadcrumb-item"><a href="<?php echo base_url() ?>vehicle"><?php echo $kode ?></a></li>
                  <li aria-current="page" class="breadcrumb-item active"><?php echo $results["name"] ?></li>
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
                    <h1 class="text-center"><?php echo $results["name"] ?></h1>
                    <h1 class="text-center"><img src="<?php echo base_url() ?>assets/img/vehicle.jpg" alt="" class="img-fluid"></h1>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box">
                  <p><b>model : </b><?php echo $results["model"] ?></p>
                  <p><b>manufacturer : </b><?php echo $results["manufacturer"] ?></p>
                  <p><b>cost_in_credits : </b><?php echo $results["cost_in_credits"] ?></p>
                  <p><b>length : </b><?php echo $results["length"] ?></p>
                  <p><b>max_atmosphering_speed: </b><?php echo $results["max_atmosphering_speed"] ?></p>
                  <p><b>crew : </b><?php echo $results["crew"] ?></b></p>
                  <p><b>passengers : </b><?php echo $results["passengers"] ?></p>
                  <p><b>cargo_capacity: </b><?php echo $results["cargo_capacity"] ?></p>
                  <p><b>consumables : </b><?php echo $results["consumables"] ?></p>
                  <p><b>vehicle_class : </b><?php echo $results["vehicle_class"] ?></p>
                  </div>
                </div>
              </div>
              <div id="details" class="box">
                <h4>pilots</h4>
                <?php foreach($results["pilots"] as $data){ ?>
                <ul>
                    <?php
                        $res=json_decode(file_get_contents($data)); 
                        echo "<li><a href='".base_url()."people/detail/".explode('/',$res->url)[5]."'>".$res->name."</a></li>";
                    ?>
                </ul>
                <?php } ?>
              </div>
              <div id="details" class="box">
                <h4>films</h4>
                <?php foreach($results["films"] as $data){ ?>
                <ul>
                    <?php
                        $res=json_decode(file_get_contents($data)); 
                        echo "<li><a href='".base_url()."film/detail/".explode('/',$res->url)[5]."'>".$res->title."</a></li>";
                    ?>
                </ul>
                <?php } ?>
              </div>
              
          </div>
        </div>
      </div>
    </div>
