<div class="section" id="portfolio">
<div class="container">
  <div class="row">
    <div class="col-md-6 ml-auto mr-auto">
      <div class="h4 text-center mb-4 title">Portfolio</div>
      <div class="nav-align-center">
        <ul class="nav nav-pills nav-pills-primary" role="tablist">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#web-development" role="tablist"><i class="fa fa-laptop" aria-hidden="true"></i></a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#graphic-design" role="tablist"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Photography" role="tablist"><i class="fa fa-camera" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

    <div class="tab-content gallery mt-5">
<!-- part 1  -->
<?php 
  $start=1;
  foreach($wrapper['portfolio'] as $job_key => $job_value){
      if($start){
        $start=0;
        echo '<div class="tab-pane active" id="'.$job_key.' role="tabpanel">';
      }else{
        echo '<div class="tab-pane " id="'.$job_key.'" role="tabpanel">';
      };


      echo '
            <div class="ml-auto mr-auto">
            <div class="row">   
      ';
    
         
      
      for($i=0;$i<count($job_value);$i++){
        if($i%2==0){
          echo '<div class="col-md-6">';
        }
          

            echo '
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#'.$job_key.'">
                <figure class="cc-effect"><img src="'.$job_value[$i][1].'" alt="Image"/>
                  <figcaption>
                        <div class="h4">'.$job_value[$i][0].'</div>
                        <p>'.$job_key.'</p>
                  </figcaption>
                </figure></a></div>
              '; 
          if($i%2==1){
            echo '</div>';//for col
          }
         
      }
    echo '
      </div> 
      </div>
      </div>
    ';
}
?>
</div>