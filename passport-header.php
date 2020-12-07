<?php header("X-XSS-Protection: 0");
  $fix_path=str_replace(DIRECTORY_SEPARATOR,'/',dirname(__FILE__));
  $protocol=empty($_SERVER['HTTPS'])||$_SERVER['HTTPS']==='off'?'http://':'https://';
  $path=str_replace($_SERVER['DOCUMENT_ROOT'],'',$fix_path);
  $fix=$protocol.$_SERVER['SERVER_NAME'].$path;
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./style-form.css">
        <title>Employee</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- Header -->
        <header class='menuhead'>
            <nav id="main-menu">
                <ul class="nav-bar">
                    <li class="nav-button-home"><a href="./index.html">Main Page</a></li>
                </ul>
            </nav>
        </header>
        
        <h1>Passport Files</h1>

	<div class="container">
 

