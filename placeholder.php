<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/css/materialize.min.css" />
    <link rel="stylesheet" type="text/css" href="https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/css/style.css" />


</head>

<body>
    Payer par carte :
    %PLACEHOLDER%
    <br/>

    <img src="https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/img1/logo_paypal.png"
         height="100px"
         width="170px"
    />

    <br/><br/>
    <input class="btn waves-effect waves-light " type="submit" name="ok" value="Payer avec Paypal" onclick="redirectPaypal()"/>

    <script type="text/javascript">
        document.getElementById('b2b-table').firstElementChild.style.backgroundColor = "#F6F7F7";
        document.getElementById("b2b-submit").className += " btn waves-effect waves-light ";
        document.getElementById("b2b-cancel").className += " btn waves-effect waves-light ";


        /* document.getElementById("b2b-submit").style.textAlign = "center";
         document.getElementById("b2b-submit").style.display = "block";
         document.getElementById("b2b-submit").style.margin = "auto";

         document.getElementById("b2b-cancel").style.textAlign = "center";
         document.getElementById("b2b-cancel").style.display = "block";
         document.getElementById("b2b-cancel").style.margin = "auto";*/


        document.getElementById("b2b-month-input").style.display = "block";
        document.getElementById("b2b-year-input").style.display = "block";
        document.getElementById("b2b-month-input").style.backgroundColor = "#F6F7F7";
        document.getElementById("b2b-year-input").style.backgroundColor = "#F6F7F7";

        var img1 =new Image();
        var img2 = new Image();
        var img3 =new Image();
        var img4 = new Image();
        img1.src = 'https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/img1/logo_cb.png';
        img2.src = 'https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/img1/logo_mastercard.png';
        img3.src = 'https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/img1/logo_visa.png';
        img4.src = 'https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/img1/logo_be2bill.png';
        var imageWidth = 70, imageHeight = 60;
        img1.width= imageWidth;
        img1.height= imageHeight ;
        img2.width = 90;
        img2.height = imageHeight;
        img3.width = 80;
        img3.height = imageHeight;
        img4.width = 130;
        img4.height = imageHeight;
        document.getElementById("b2b-buttons").appendChild(img1);
        document.getElementById("b2b-buttons").appendChild(img2);
        document.getElementById("b2b-buttons").appendChild(img3);
        document.getElementById("b2b-ccnum").appendChild(img4);


        //document.getElementById("b2b-table").firstElementChild.childNodes[3].childNodes[3].firstElementChild.style.border = "1px solid red";
        //document.getElementById("b2b-table").firstElementChild.childNodes[3].childNodes[3].firstElementChild += " btn btn-outline-secondary";
    </script>
    <script>
        function redirectPaypal(){
            window.top.location.href = "https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/paypal.php?MESSAGE=<?php echo $_GET['MESSAGE']; ?>&TRANSACTIONID=<?php echo $_GET['TRANSACTIONID']; ?>";
            window.location = "https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/paypal.php?TRANSACTIONID=<?php echo $_GET['TRANSACTIONID']; ?>";
        }

    </script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://pc-ext-srv2.rtblw.com/caroline/exercice_perso/css/materialize.min.js"></script>
</body>
</html>
