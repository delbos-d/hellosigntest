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
<form action="/hellosigntest/createsign.php" method="POST" class="col-lg-4 col-md-6" style="margin-left: 33.33%">
    <!--Naked Form-->
    <div class="card-block">

        <!--Header-->
        <div class="text-xs-center">
            <h3><i class="fa fa-envelope"></i> Signature request</h3>
            <hr class="m-t-2 m-b-2">
        </div>

        <!--Body-->
        <p>Please add at least one signer</p>
        <br>

        <!-- Signer 1 -->

        <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="name1" name="name1" class="form-control" placeholder="Signer Name 1">
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="email1" name="email1" class="form-control" placeholder="Email 1">
        </div>

        <!-- Signer 2 -->

        <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="name2" name="name2" class="form-control" placeholder="Signer Name 2">
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="email2" name="email2" class="form-control" placeholder="Email 2">
        </div>

        <!-- Signer 3 -->

        <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="name3" name="name3" class="form-control" placeholder="Signer Name 3">
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="email3" name="email3" class="form-control" placeholder="Email 3">
        </div>

        <div class="text-xs-center">
            <button class="btn btn-default">Submit</button>
        </div>

    </div>
</form>

<script>
    $(document).ready(function() {
        $.material.init();
    })
</script>


<!--Naked Form-->

</html>
