<!DOCTYPE html>
 <?php include "language.php"?>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
      <!--Import materialize.css-->
      <link rel="stylesheet" href=<?php echo base_url('css/materialize.min.css'); ?> />   
      <link rel="stylesheet" href=<?php echo base_url('css/vendors.min.css'); ?> />     
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
        .video-container{
            max-width: 380px !important;
        }
      </style>   
    </head>

    <body>
        <div class="section"></div>
        <main>
            <center>
                <div class="container">     
                    <div class="z-depth-1 lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
        
                    <form class="col s12" method="post" action="<?php echo site_url('Login/logUser')?>">
                        <!-- CAIXA DE TROCA DE LINGUA (EN E PT-BR)
                        <div class='row'>    
                            <!-- Dropdown Trigger 
                            <div class="input-field col s12 m6">
                                <select id="languageSelect" onchange="onChangeLanguage(this);">
                                    <option  disabled selected><?php echo $lang['select'];?></option>
                                    <option value="en" data-icon="<?php echo base_url('img/us-flag.png'); ?>" onclick='updateQueryStringParam("lang","en")'><?php echo $lang['en'];?></option>
                                    <option value="pt" data-icon="<?php echo base_url('img/br-flag.png'); ?>" onclick='updateQueryStringParam("lang","pt")'><?php echo $lang['pt'];?></option>
                                </select>
                                <label><?php echo $lang['language'];?></label>
                            </div>

                            <div class="input-field col s12 m6">
                                <select id="signLanguageSelect" onchange="onChangeSignLanguage(this);">
                                    <option disabled selected><?php echo $lang['select'];?></option>
                                    <option value='lib'>Libras</option>
                                </select>
                                <label><?php echo $lang['signlanguage'];?></label>
                            </div>                      

                        </div>

                        -->

                        <img class="responsive-img" style="width: 150px;" src=<?php echo base_url('img/logo.png'); ?> />    
                        <h5 class="indigo-text"><?php echo $lang['loginSubtitle'];?></h5>
                        
                        <div class="section"></div>

                        <div class="video-container">
                            <video id='username-video' class="responsive-video" controls data-id-video-sl='email'>
                                <source src=<?php echo $lang['video-username'];?> type="video/mp4">
                                <!-- RETIRA A LEGENDA DO VÍDEO 1
                                <track label=<?php echo $lang['video-language'];?> kind="subtitles" srclang=<?php echo $lang['video-src'];?> 
                                       src=<?php echo $lang['video-username-caption'];?> default>
                                -->       
                            </video>
                            <!-- <iframe id='email-video' width="853" height="480" src=<?php echo $lang['video-username'];?> frameborder="0" allowfullscreen></iframe> -->
                        </div>
                        <!--
                        <blockquote>Por favor informe o email de login.</blockquote>
                        -->
                        <blockquote>Coloque seu e-mail.</blockquote>
                        <div class='row'>
                            <div class='input-field col s12'>   
                                <a class="material-icons prefix">email</a>
                                <input class='validate' type='email' name='email' id='email' data-id-video-sl='email'/>
                                <label for='email'><?php echo $lang['loginUserInput'];?></label>
                            </div>
                        </div>

                        <div class="video-container">
                            <video id='password-video' class="responsive-video" controls>
                                <source src=<?php echo $lang['video-password'];?> type="video/mp4">
                                <!-- <track label=<?php echo $lang['video-language'];?> kind="subtitles" srclang=<?php echo $lang['video-src'];?> 
                                       src=<?php echo $lang['video-password-caption'];?> default> -->
                            </video>

                            <!-- <iframe width="853" height="480" src=<?php echo $lang['video-password'];?> frameborder="0" allowfullscreen></iframe> -->
                        </div>
                        <!--
                        <blockquote>Por favor informe a senha de login.</blockquote>
                        -->
                        <blockquote>Coloque sua senha.</blockquote>
                        
                        <div class='row'>
                            <div class='input-field col s12'>
                                <a class="material-icons prefix">lock_outline</a>
                                <input class='validate' type='password' name='password' id='password'/>
                                <label for='password'><?php echo $lang['loginPasswordInput'];?></label>
                            </div>
                        </div>
                        
                        <!-- <div class="row" style='float: left;'>        
                            <p>
                                <label>
                                <input type="checkbox" />
                                <span><?php echo $lang['loginRemeberChck'];?></span>
                                </label>
                            </p>   
                        </div> -->
                        
                        <center>
                            <div class='row'>
                                <button type='submit' name='submit' value='Submit' id='submitLogin' class='col s12 btn btn-large waves-effect indigo'><?php echo $lang['loginSumbit'];?></button>
                            </div>
                        </center>
                        

                        
                        <div class="section"></div>
                    </form>
                    </div>
                </div>
            </center>

            <!-- <div class="fixed-action-btn">
                <a class="btn-floating btn-large teal tooltipped" data-position="left" data-tooltip="language">
                    <i class="large material-icons">flag</i>
                </a>
                <ul>
                    <li><a class="btn-floating  white tooltipped" data-position="left" data-tooltip="English" href="?lang=en"><i class="flag-icon flag-icon-us"></i></a></li>
                    <li><a class="btn-floating  white tooltipped" data-position="left" data-tooltip="Portuguese" href="?lang=pt"><i class="flag-icon flag-icon-br"></i></a></li>
                </ul>
            </div> -->          
        </main>

        <!--JavaScript at end of body for optimized loading-->     
        <script type='text/javascript' src="<?php echo base_url(); ?>/js/jquery-3.3.1.min.js"></script>    
        <script type='text/javascript' src="<?php echo base_url(); ?>/js/materialize.min.js"></script>       
    </body>
    <script>
        $(document).ready(function(){
            $('.modal').modal();
            $('.fixed-action-btn').floatingActionButton();
            $('.tooltipped').tooltip();
            $('.dropdown-trigger').dropdown();
            $('select').formSelect();
        });

         function updateQueryStringParam(key, value) 
         {
            var baseUrl = [location.protocol, '//', location.host, location.pathname].join(''),
                urlQueryString = document.location.search,
                newParam = key + '=' + value,
                params = '?' + newParam;

            // If the "search" string exists, then build params from it
            if (urlQueryString) {
                var updateRegex = new RegExp('([\?&])' + key + '[^&]*');
                var removeRegex = new RegExp('([\?&])' + key + '=[^&;]+[&;]?');

                if( typeof value == 'undefined' || value == null || value == '' ) { // Remove param if value is empty
                    params = urlQueryString.replace(removeRegex, "$1");
                    params = params.replace( /[&;]$/, "" );

                } else if (urlQueryString.match(updateRegex) !== null) { // If param exists already, update it
                    params = urlQueryString.replace(updateRegex, "$1" + newParam);

                } else { // Otherwise, add it to end of query string
                    params = urlQueryString + '&' + newParam;
                }
            }

            // no parameter was set so we don't need the question mark
            params = params == '?' ? '' : params;

            window.history.replaceState({}, "", baseUrl + params);
        };    

        function onChangeLanguage(e){
            updateQueryStringParam('lang', e.value);
            location.reload();
        }

        function onChangeSignLanguage(e){
            updateQueryStringParam('slang', e.value);
            location.reload();
        }

        $( document ).ready(function() {       
            $("#languageSelect").val(getUrlParameter('lang') == undefined?'pt': getUrlParameter('lang'));
            $("#signLanguageSelect").val(getUrlParameter('slang') == undefined?'lib': getUrlParameter('slang'));

            $('select').formSelect(); 
        });

        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
        };
    </script>
  </html>