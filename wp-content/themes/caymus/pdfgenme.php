<?php

$content = mb_convert_encoding($_POST['content'], 'ASCII', 'UTF-8');
$title = $_POST['pdf-header'];
$date = $_POST['pdf-date'];

$str = str_replace("?", "''", $content);

include_once( 'dompdf/dompdf_config.inc.php' );

$html ='<!doctype html>
             <html lang="en">
             <head>
             <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
             <title>Article Title</title>
             <style>
              *{
	             margin: 0px;
	             padding: 0px;
              }
              body{
     			 font-family:sans-serif;
              }
              p{
              	 font-size: 11px;
              	 margin: 5px;
              }
              h2{
	             color: #003C4B;
	             font-size: 26px;
	             font-weight: normal;
              }
              h4{
              	border-bottom{1px solid #333333;}
              }
              img{
                width: 630px;
              }
              #mainWrapper{
                width:960px;
                height: 724px;
                margin: 0px auto;
                display: block;
              }
              #content-area{
	             width: 540px;
	             margin-left: 30px;
	             margin-right: 30px;
	             display:block;
              }    
             </style>
             </head>
             <body>
              <div id="mainWrapper">
                <br />
                <img id="header-image" src="img/caymus-pdf-header.jpg">
                <div id="content-area">
                <h2 style="font-family:sans-serif; font-size: 22px;">'.$title.'</h2>
                <br />
                <br />
                <h4 style="font-style:italic; font-family:sans-serif; color:#666; padding-bottom: 5px; border-top:1px solid #ccc; border-bottom:1px solid #ccc; margin-bottom: 10px;"">'.$date.'</h4>
                <br />
                <p>'.$str.'</p>
                </div>
                
              </div>
              <div id="footer-image"><img src="img/caymus-pdf-footer.jpg"></div>
             </body>
             </html>'; 

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('caymusnews.pdf');

?>