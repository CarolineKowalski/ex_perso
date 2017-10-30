<?php
/**
 * Created by PhpStorm.
 * User: ckowalski
 * Date: 17/10/2017
 * Time: 13:31
 */
echo $_GET['MESSAGE'];
//var_dump($_GET);

?>
<?php if($_GET['IDENTIFIER']) : ?>
<script>
    window.top.location.href = "https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/redirection.php?MESSAGE=<?php echo $_GET['MESSAGE']; ?>&TRANSACTIONID=<?php echo $_GET['TRANSACTIONID']; ?>";
</script>
<?php endif; ?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/css/materialize.min.css" />
    <link rel="stylesheet" type="text/css" href="https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/css/style_index.css" />
</head>
<body>
    <input class="btn waves-effect waves-light " type="submit" name="ok" value="Refund" onclick="redirectRefund()"/>
    <script>
        function redirectRefund(){
            window.location = "refund.php?TRANSACTIONID=<?php echo $_GET['TRANSACTIONID']; ?>";
        }

    </script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/css/materialize.min.js"></script>
</body>
</html>
