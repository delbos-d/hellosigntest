<?php
/**
 * Created by PhpStorm.
 * User: damiendelbos
 * Date: 05/10/2016
 * Time: 16:35
 */



?>

<html>
<head>
    <title>Formulaire de signature de document</title>
</head>
<form action="/hellosigntest/createsign.php" method="POST">
    <!-- Signataire 1 -->
    <label for="email1">Email du signataire 1</label>
    <input type="text" id="email1" name="email1"><br>
    <label for="name1">Nom du signataire 1</label>
    <input type="text" id="name1" name="name1"><br><br>

    <!-- Signataire 2 -->
    <label for="email2">Email du signataire 2</label>
    <input type="text" id="email2" name="email2"><br>
    <label for="name2">Nom du signataire 2</label>
    <input type="text" id="name2" name="name2"><br><br>

    <!-- Signataire 3 -->
    <label for="email3">Email du signataire 3</label>
    <input type="text" id="email3" name="email3"><br>
    <label for="name3">Nom du signataire 3</label>
    <input type="text" id="name3" name="name3"><br><br>
    <button type="submit">Valider</button>
</form>
</html>
