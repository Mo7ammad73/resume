<div class="section" id="reference">
  <div class="container cc-reference">
    <div class="h4 mb-4 text-center title">References</div>
    <div class="card" data-aos="zoom-in">
      <div class="carousel slide" id="cc-Indicators" data-ride="carousel">
        <ol class="carousel-indicators">
          <li class="active" data-target="#cc-Indicators" data-slide-to="0"></li>
          <li data-target="#cc-Indicators" data-slide-to="1"></li>
          <li data-target="#cc-Indicators" data-slide-to="2"></li>
        </ol>



        <div class="carousel-inner">
        <?php
        $start=true;
          foreach($wrapper["refrences"] as $refrences){
            if($start){
              echo '<div class="carousel-item active">';
              $start=false;
            }else{
              echo '<div class="carousel-item">';
            }
            echo '
                    <div class="row">
                    <div class="col-lg-2 col-md-3 cc-reference-header"><img src="'.$refrences['img'].'" alt="Image"/>
                      <div class="h5 pt-2">'.$refrences['name'].'</div>
                      <p class="category">'.$refrences['title'].'</p>
                    </div>
                    <div class="col-lg-10 col-md-9">
                      <p> '.$refrences['content'].'</p>
                    </div>
                  </div>
                </div>

            ';

          }
        ?>



        </div>
      </div>
    </div>
  </div>
</div>