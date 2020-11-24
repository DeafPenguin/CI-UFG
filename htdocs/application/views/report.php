<?php include "language.php"?>
<body>
<main>      
<div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <div class="row center">
                <div class="col s12 m10 offset-m1 bottom-line">
                    <h1 class="header"><?php echo $lang['report'];?></h1>
                </div>

                <div class="col s12 ">          
                    <div class="card">
                        <div class="card-image">
                        <div class="video-container">
                            <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                        
                        </div>
                        <div class="card-content">
                            <p><?php echo $lang['reportConfirmInterpreterLabel'];?></p>
                        </div>
                        <div class="card-action">
                            <a  class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['reportConfirmInterpreter'];?></a>
                        </div>
                    </div>
                </div>   

                <br/>

                <!-- ESCONDE O RELATÓRIO DE CONFIRMAÇÃO DA PÁGINA DE RELATÓRIOS
                <div class="col s12">
                    <div class="card">
                        <div class="card-image">
                        <div class="video-container">
                            <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                        
                        </div>
                        <div class="card-content">
                            <p><?php echo $lang['reportConfirmedInterpreterLabel'];?></p>
                        </div>
                        <div class="card-action">
                            <a class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['reportConfirmedInterpreter'];?></a>
                        </div>
                    </div>
                </div>
                -->

                <br/>

                <div class="col s12">
                    <div class="card">
                        <div class="card-image">
                        <div class="video-container">
                            <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                        
                        </div>
                        <div class="card-content">
                             <p><?php echo $lang['reportListInterpreterLabel'];?></p>
                        </div>
                        <div class="card-action">
                            <a href="<?php echo site_url('Main/slislist?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['reportListInterpreter'];?></a> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> 
</main>  
</body>
