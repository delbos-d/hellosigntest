<?php

require_once 'vendor/autoload.php';

$id = $_GET["id"];

$client = new HelloSign\Client('2fe3d08fc4bb46692a052bf6e58b0facaceb38759474764af0cf276d267ac308');
$url = $client->getEmbeddedSignUrl($id)->getSignUrl();

?>


<html>
    <head>

        <style>
            html, body, .container {
                height: 100%;
            }
            .container {
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 50px;
            }
        </style>
    </head>
    <body>
    <script type="text/javascript" src="https://s3.amazonaws.com/cdn.hellosign.com/public/js/hellosign-embedded.LATEST.min.js"></script>
        <script type="text/javascript">
            HelloSign.init("8a04b8334c68d617cfdb89683cef86c2");
            HelloSign.open({
                url: "<?php echo $url; ?>",
                allowCancel: true
            });
        </script>
        <p class="container">Merci pour votre signature!</p>
    </body>
</html>