<?php
$siteurl="http://staging.aicmuj.com";
$title='';
switch($currentPage)
{
  case 'home':
  $title='Atal Incubation Centre &mdash; AIC MUJ';
  break;
  case 'about':
  switch($currentSubPage)
  {
    case 'aic':
    $title='About &mdash; Atal Incubation Centre MUJ';
    break;
    case 'muj':
    $title='About Manipal University Jaipur &mdash; AIC MUJ';
    break;
    case 'board-team-mentors':
    $title='Board, Team, Mentors &mdash; AIC MUJ';
    break;
  }
  break;
  case 'collaborators':
  $title='Collaborators &mdash; Atal Incubation Centre MUJ';
  break;
  case 'contact':
  $title='Contact &mdash; Atal Incubation Centre MUJ';
  break;
  case 'events':
  $title='Events &mdash; Atal Incubation Centre MUJ';
  break;
  case 'inside-aic':
  $title='Inside Atal Incubation Centre MUJ';
  break;
  case 'success':
  $title='Success Stories &mdash; Atal Incubation Centre MUJ';
  break;
  default:
  $title='Atal Incubation Centre &mdash; AIC MUJ';
  break;
}
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Anmol Srivastava">
  <!-- Page Title -->
  <title><?php echo $title;?></title>
  <!--CSS  Tags-->
  <link rel="stylesheet" href="<?php echo $siteurl;?>\css\our-team.css">
  <link rel="stylesheet" href="<?php echo $siteurl;?>\css\team.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
  <link rel="stylesheet" href="<?php echo $siteurl;?>\css\plugins.css">
  <link rel="stylesheet" href="<?php echo $siteurl;?>\css\shortcodes.css">
  <link rel="stylesheet" href="<?php echo $siteurl;?>\css\style.css">
  <link rel="stylesheet" href="<?php echo $siteurl;?>\css\sliderstyle.css">
  <link rel="stylesheet" href="<?php echo $siteurl;?>\css\imggallery.css">
  <link rel="stylesheet" href="<?php echo $siteurl;?>\css\skins\default-skin.css">
  <!-- Favicons -->
  <link rel="shortcut icon" href="<?php echo $siteurl;?>/images/logos/favicon.png">
  
	
</head>
