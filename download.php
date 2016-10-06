<?php
/**
 * Created by PhpStorm.
 * User: damiendelbos
 * Date: 06/10/2016
 * Time: 10:29
 */

require_once 'vendor/autoload.php';

$doc_id = $_GET['id'];

$client = new HelloSign\Client('2fe3d08fc4bb46692a052bf6e58b0facaceb38759474764af0cf276d267ac308');
$client->getFiles($doc_id, "./signed.zip", HelloSign\SignatureRequest::FILE_TYPE_ZIP);
$client->getFiles($doc_id, "./signed.pdf");


?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/mdb.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
    </head>
    <body>
        <div class="col-lg-4" style="margin-left: 33.33%; margin-top: 15%;text-align: center;">
            <a href="signed.zip">Document link to ZIP file (3 docs (file & signatures & history))</a><br>
            <a href="signed.pdf">Document link to PDF file</a><br>
        </div>
    </body>
</html>
