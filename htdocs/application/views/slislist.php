<?php include "language.php"?>
<body>
<main>      
<div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <div class="row center">
                <div class="col s12 m10 offset-m1 bottom-line">
                    <h1 class="header"><?php echo $lang['reportListInterpreter'];?></h1>
                </div>
                <div class="col s12 ">          
                    <div class="card">
                        <div class="card-image">
                        </div>
                        <div class="card-content">
                            
                            <div> 

                            <table>
                                <thead>
                                    <tr>
                                        <th><?php echo $lang['name'];?></th>
                                        <th><?php echo $lang['email'];?></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach($result as $row) {?>
                                    <tr>
                                        <td><?php echo $row->name;?></td>
                                        <td><?php echo $row->email;?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            </div>

                        </div>

                        <!-- RETIRA UM BOTÃO NÃO FUNCIONAL NA PÁGINA DE RELATÓRIO DE INTÉRPRETES
                        <div class="card-action">
                           <a href="<?php echo site_url('Main/slislist?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['reportListInterpreter'];?></a> 
                        </div>
                        -->

                    </div>
                </div>   
                <br/>
                <br/>
            </div>
        </div>
    </div> 
</main>  
</body>
