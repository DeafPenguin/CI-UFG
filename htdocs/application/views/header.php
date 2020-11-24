<?php include "language.php"?>
<script>
  var CALENDAR_LANGUAGE = '<?php echo $lang['calendar-lang']; ?>';

   function setLanguageUrl(lang){
      var url = new URL(location.href);
      url.searchParams.set('lang', lang);

      location.href = url.href;
   }
</script>
<!--JavaScript at end of body for optimized loading-->     
<script type='text/javascript' src="<?php echo base_url(); ?>/js/jquery.min.js"></script>    
<script type='text/javascript' src="<?php echo base_url(); ?>/js/moment.min.js"></script>  
<script type='text/javascript' src="<?php echo base_url(); ?>/js/materialize.min.js"></script>      
<script type='text/javascript' src="<?php echo base_url(); ?>/js/fullcalendar.min.js"></script>    
<script type='text/javascript' src="<?php echo base_url(); ?>/js/pt-br.js"></script>   
<script type='text/javascript' src="<?php echo base_url(); ?>/js/en-ca.js"></script>  
<script type='text/javascript' src="<?php echo base_url(); ?>/js/sweetalert2.min.js"></script>  

<head>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!--Import materialize.css-->
   <link rel="stylesheet" href=<?php echo base_url('css/materialize.min.css'); ?> />
   <link rel="stylesheet" href=<?php echo base_url('css/fullcalendar.min.css'); ?> />
   <link rel="stylesheet" href=<?php echo base_url('css/custom.css'); ?> />
   <link rel="stylesheet" href=<?php echo base_url('css/sweetalert2.min.css'); ?> />
   <link rel="stylesheet" media='print' href=<?php echo base_url('css/fullcalendar.print.min.css'); ?> />
   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
<style>
    header, main, footer {
      padding-left: 340px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }
</style>
</head>

<ul id="slide-out" class="sidenav sidenav-fixed">
   <li>
      <div class="user-view">
         <div class="background">
            <img src="https://image.freepik.com/free-photo/wall-wallpaper-concrete-colored-painted-textured-concept_53876-31799.jpg" >
         </div>
         <a href="#user"><img class="circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCeh3PTvmQsrGtCTJalHTqB0UUNiQkGYgTXK7-1FEbiX-GNMDm2g"></a>
         <a href="#name"><span class="white-text name"><?php if (isset($_SESSION['username'])) {echo $_SESSION['username'];}?></span></a>
         <a href="#email"><span class="white-text email"><?php if (isset($_SESSION['email'])) {echo $_SESSION['email'];}?></span></a>
      </div>
   </li>
   
   <li>
      <a  href="<?php echo site_url('Main/Navigation?lang=' . $_SESSION['lang'])?>" class="collapsible-header waves-effect waves-light">
         <i class="material-icons">navigation</i><?php echo $lang['register'];?>
      </a>
   </li>
    
   <li>
      <a  href="<?php echo site_url('Main/report?lang=' . $_SESSION['lang'])?>" class="collapsible-header waves-effect waves-light">
         <i class="material-icons">assessment</i><?php echo $lang['report'];?>
      </a>
   </li>
   
   <!-- MENU LATERAL - ESCONDE O "IDIOMA"
   <li>
      <ul class="collapsible collapsible-accordion">
         <li class="bold">
            <a class="collapsible-header waves-effect waves-light"><i class="material-icons">flag</i><?php echo $lang['language'];?></a>
            <div class="collapsible-body">
               <ul>
               <li><a href="#" onclick='setLanguageUrl("pt")'><?php echo $lang['pt'];?></a></li>
               <li><a href="#" onclick='setLanguageUrl("en")'><?php echo $lang['en'];?></a></li>
               </ul>
            </div>
         </li>
      </ul>
   </li>
   -->
   
   <li>
    <a href="<?php echo site_url('Main/events?lang=' . $_SESSION['lang'])?>" class="collapsible-header waves-effect waves-light"><i class="material-icons">date_range</i><?php echo $lang['events'];?></a>
   </li>
   <li>
      <a  href="<?php echo site_url('Main/logout?&lang=' . $_SESSION['lang'])?>" class="collapsible-header waves-effect waves-light">
         <i class="material-icons">power_settings_new</i><?php echo $lang['logout'];?>
      </a>
   </li>
   <li>
      <div class="divider"></div>
   </li>

   <!-- MENU LATERAL - ESCONDE O "SOBRE"
   <li><a class="subheader"><?php echo $lang['about'];?></a></li>
   -->
   <!-- MENU LATERAL - ESCONDE O "CONFIGURAÇÕES"
   <li><a class="waves-effect" href="#!"><?php echo $lang['config'];?></a></li>
   -->
   
</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a> 