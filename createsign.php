<?php
/**
 * Created by PhpStorm.
 * User: damiendelbos
 * Date: 05/10/2016
 * Time: 14:36
 */

require_once 'vendor/autoload.php';

$recipients = array();
$recipients[] = [
    "name" => $_POST["name1"],
    "email" => $_POST["email1"]
    ];
$recipients[] = [
    "name" => $_POST["name2"],
    "email" => $_POST["email2"]
];
$recipients[] = [
    "name" => $_POST["name3"],
    "email" => $_POST["email3"]
];

$client = new HelloSign\Client('2fe3d08fc4bb46692a052bf6e58b0facaceb38759474764af0cf276d267ac308');
$request = new HelloSign\SignatureRequest;
$request->enableTestMode();
$request->setSubject('Please sign this test document');
$request->setMessage('');
foreach ($recipients as $recipient) {
    if (!empty($recipient["email"]) || !empty($recipient["name"])) {
        $request->addSigner($recipient["email"], $recipient["name"]);
    }
}
$request->addFile("./testdocument.pdf");

$client_id = '8a04b8334c68d617cfdb89683cef86c2';
$embedded_request = new HelloSign\EmbeddedSignatureRequest($request, $client_id);
$response = $client->createEmbeddedSignatureRequest($embedded_request);


$msgs_id = array();
foreach ($response->getSignatures() as $s) {
    //echo $s->getSignerName().': ';
    $msgs_id[] = $s->getId();
}

/*$signature = $response->getSignatures()[0];
$signature_id = $signature->getId();
$response = $client->getEmbeddedSignUrl($signature_id);
$sign_url = $response->getSignUrl();*/

?>

<html>
    <head></head>
    <body>
    <?php for ($i = 0; $i < count($msgs_id); $i++) { ?>
    <a href="/hellosigntest/signdoc.php?id=<?php echo $msgs_id[$i]; ?>">Lien pour le signataire <?php echo ($i + 1); ?></a>
    <?php } ?>
    </body>
</html>

