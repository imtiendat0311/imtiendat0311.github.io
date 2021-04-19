<?
session_start();
require_once("config.php");
if(isset($_GET['lang'])){
    $_SESSION['lang']=$_GET['lang'];
}
if(!isset($_SESSION['lang'])){
    $_SESSION['lang']='en';
}
$lang=$_SESSION['lang'];
?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="do_change('<?=$_GET['p'];?>')">

<div id="marriott_bg"><iframe src="https://www.marriott.com/hotels/einterface/HANHS?iRELEASE=4&ACTION_TYPE=WALLED_GARDEN&MAC_ADDRESS=111111111111&iURL=www.marriottwifi.com"></iframe></div>

<div class="modal"id="exampleModal">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <div class="language">
        <button id="languageLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="https://portal.freedomx.net/marriott/static/portal/images/language.png" srcset="https://portal.freedomx.net/marriott/static/portal/images/language@2x.png 2x, https://portal.freedomx.net/marriott/static/portal/images/language@3x.png 3x" class="language">
            <span id="current-language-name" class="text-uppercase"><?=$wording[$lang]["lang"];?></span>
            <img src="https://portal.freedomx.net/marriott/static/portal/images/dropdown-down.png" srcset="https://portal.freedomx.net/marriott/static/portal/images/dropdown-down@2x.png 2x,https://portal.freedomx.net/marriott/static/portal/images/dropdown-down@3x.png 3x" class="dropdown-language">
        </button>
        <ul class="dropdown-menu dropdown-menu-left sublanguage" aria-labelledby="languageLabel" id="language-dropdown">
        <li class="active en_active"><a href="#" data-action="change_language" data-code="en">English</a></li>
        <li><a href="?lang=kr" role="gcp-action" data-action="change_language" data-code="kr">한국어‬</a></li>
        <li><a href="?lang=jp" role="gcp-action" data-action="change_language" data-code="jp">日本語‬</a></li>
        </ul>
        </div>
            <button type="button" class="close text-align-right" style="padding-right:20px" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
</div>
      <div class="modal-body">
        <div class="container-fluid">
           <div class="row" id="Header">
              <div class="col-11">
        <h3 id="header-par"><?=$wording[$lang]["head"];?></h3>
                </div>
          </div>
          <div class="row" id="paragraph">
            <div class="col">
            <p><?=$wording[$lang]["pas"];?></p>
            </div>
          </div>
          </div>
        </div>
      function do_submit(){
          
      }
      <div class="modal-footer rounded" id="footer">
         <div class="container-fluid">
           <div class="row">
             <div class="col justify-content-center">
              <div id="internet" class="text-center rounded" > <h3 id="head-internet"><?=$wording[$lang]["int"];?></h3>
                <p><?=$wording[$lang]["free"];?></p> </div>
             </div>
           </div>
          <div class="row ">
            <div class="col text-center">
        <button type="button" class="btn btn-primary" id="connectbtn" onclick="do_submit();"><?=$wording[$lang]["btn_login"];?></button>
            </div>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <script>$('#exampleModal').modal({
      show: true,backdrop: 'static',keyboard: false
    })</script>
  </body>
</html>
