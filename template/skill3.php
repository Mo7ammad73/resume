<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">Professional Skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        <div class="row">
        <?php 
            $i=1;
            foreach($wrapper['skill'] as $skill_key=>$skill_value){
                echo '
                <div class="col-md-6">
                <div class="progress-container progress-primary"><span class="progress-badge">'.$skill_key.'</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '.$skill_value.';"></div><span class="progress-value">'.$skill_value.'</span>
                  </div>
                </div>
              </div>
                ';
                if($i%2==0){
                    echo '</div>';
                    if($i !=count($wrapper['skill'])){
                        echo '<div class="row">';
                    }
                  }
                
                $i+=1;
            };

        ?>



      </div>
    </div>
  </div>
</div>