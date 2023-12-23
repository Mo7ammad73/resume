<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$wrapper['title'] ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip"><?=$wrapper['title'] ?></a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <?php
                    foreach($wrapper['section'] as $key_ => $value_){
                      echo '
                      <li class="nav-item"><a class="nav-link smooth-scroll" href="#'.$key_.'">'.$value_.'</a></li>
                      ';
                    }
                ?>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg')"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="<?=$wrapper['img-profile'] ?>" alt="Image"/></a></div>
          <div class="h2 title"><?php echo $wrapper['fname']." ".$wrapper['lname'] ?></div>
          <br>
          <p class="category text-white"><?=implode(" , ",$wrapper['job']); ?> </p>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container">
            <?php
              foreach($wrapper['social-media'] as $media){
                echo '
                <a class="btn btn-default btn-round btn-lg btn-icon" href="'.$media['url'].' rel="tooltip" title="Follow me on '.$media['name'].'"><i class="fa '.$media['name'].'"></i></a>
                ';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>