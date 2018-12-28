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
                  <li class="breadcrumb-item"><a href="<?php echo base_url() ?>species"><?php echo $kode ?></a></li>
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
                    <h1 class="text-center"><img src="<?php echo base_url() ?>assets/img/species.jpg" alt="" class="img-fluid"></h1>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box">
                  <p><b>classification : </b><?php echo $results["classification"] ?></p>
                  <p><b>designation : </b><?php echo $results["designation"] ?></p>
                  <p><b>average_height : </b><?php echo $results["average_height"] ?></p>
                  <p><b>skin_colors : </b><?php echo $results["skin_colors"] ?></p>
                  <p><b>hair_colors : </b><?php echo $results["hair_colors"] ?></p>
                  <p><b>eye_colors : </b><?php echo $results["eye_colors"] ?></p>
                  <p><b>average_lifespan : </b><?php echo $results["average_lifespan"] ?></p>
                  <p><b>language : </b><?php echo $results["language"] ?></p>
                  </div>
                </div>
              </div>
              <div id="details" class="box">
                <h4>homeworld</h4>
                <ul>
                    <?php
                        $res=json_decode(file_get_contents($results["homeworld"])); 
                        echo "<li><a href='".base_url()."planet/detail/".explode('/',$res->url)[5]."'>".$res->name."</a></li>";
                    ?>
                </ul>
              </div>
              <div id="details" class="box">
                <h4>people</h4>
                <?php foreach($results["people"] as $data){ ?>
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
