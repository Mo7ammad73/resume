<div class="section" id="experience">
  <div class="container cc-experience">


    <div class="h4 text-center mb-4 title">Work Experience</div>
    
    <?php
      foreach($wrapper['experience'] as $experience){
        echo '
            <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                  <p> '.$experience['date'].' </p>
                  <div class="h5">'.$experience['name'].'</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">'.$experience['title'].'</div>
                  <p>'.$experience['content'].'</p>
                </div>
              </div>
            </div>
          </div>
        ';
      }
    ?>

  </div>


</div>
</div>