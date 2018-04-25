<div class="slider">
    <div id="about-slider">
         <!-- En Dynamique-->
      <?php
        include '../Admin/model/DB.php';
        include '../Admin/view/realisation/controllerRealisation.php';
          $select=$db->query("select * from realisation where etat = 1");
          $realisation = $select->fetchAll(); ?>
          <?php foreach ($realisation as $work){
              $id =$work->realisation_id;
              $name = $work->name;
              $contenu = $work->contenu;
            }
          ?>

       <?php  
           $selection =$db->query("select id, name from image  WHERE realisation_id=$id");
          $images= $selection->fetchAll();
       
        $i=1;
       ?>
     
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
          <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
              <?php foreach($images as $img):?>
                 <li data-target="#carousel-slider" data-slide-to="<?=$i?>"></li>
              <?php $i++; ?>
           <?php endforeach?>
          </ol>
          <div class="carousel-inner">
            <?php  
               $selection =$db->query("select id, name from image  WHERE realisation_id=$id");
               $images= $selection->fetchAll();
               $delay = 0.3; $j=0;            
             ?>
           
             <?php foreach($images as $img):?>
                
                  <div class="item <?php if($j==0) echo'active'; $j++;?>" >
                    <img src="../Admin/view/img/realisation/<?=$img->name?>" class="img-responsive" alt="" width="100%">
                    <div class="carousel-caption">
                      <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="<?=$delay?>s">
                        <?php $delay = $delay + 0.3; ?>
                       <h2><span><?=$name?></span></h2>
                      </div>
                      <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="<?=$delay?>s">
                        <p><?=$contenu?></p>
                      </div>
                    </div>
                  </div>
                 
              <?php endforeach?>
          </div>
        
        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        
        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div> <!--/#carousel-slider-->
    </div><!--/#about-slider-->
  </div><!--/#slider-->

  <div class="clear"></div>
  <div class="clear"></div>