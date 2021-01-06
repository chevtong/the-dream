<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="icon" type="image/png" href="style/coin.png">
    <link rel="stylesheet" href="style/style.css">
    <title>The Dream</title>
</head>

<?php 

$rate = [
  "usd" => 0.81,
  "gbp" => 1.1,
  "jpy" => 0.0079,
  "aud" => 0.63,
  "inr" => 0.011, 
  "cad" => 0.63,
];

$exchangeRate = "";
$result = "";


if(isset($_POST["convert"])){

  $amount = $_POST["amount"];

    if (empty($amount)) {

      $result = "Please ente a value";
      
    } else {

      $fromCur = $_POST["from-curreny"];

      $exchangeRate = "1 {$fromCur} = ". $rate["$fromCur"] . " euro";
 
      $convertValue =  round($amount * $rate["$fromCur"], 2);

      $result = "{$amount} {$fromCur} = {$convertValue} euro";
  
    }

}; 
//TODO: fix the swap button to exchange the currencies 
//else if(isset($_POST["swap"])){

//   
// }


?>

<body>
    <div class="container-calculator">
        <h1>Currency Converter</h1>
        <form method="post" action="">


            <div class="from-currency">
                <h3>Local currency</h3>
                <select name="from-curreny" id="">
                    <option value="gbp">UK - GBP</option>
                    <option value="usd">US - USD</option>
                    <option value="aud">Australia - AUD</option>
                    <option value="cad">Canada - CAD</option>

                    <option value="inr">India - INR</option>
                    <option value="jpy">Japan - JPY</option>
                </select>
            </div>

            <div class="to-currency">
                <h3>Home currency</h3>
                <select name="to-curreny" id="">

                    <option value="euro">Euro</option>

                </select>
            </div>

            <div class="value">
                <label>
                    <h3>Convert Value</h3>
                </label>
                <input type="number" name="amount" />

            </div>


            <div class="convert-btn">
                <button type="submit" name="convert" value="convert">Convert</button>
            </div>
            <div class="swap-btn">
                <button type="submit" name="swap" value="swap" id="swap-btn" disabled>SWAP</button>
            </div>
            <div class="divide-line"></div>
        </form>


        <div class="exchange-rate">
            <h3><?php 
        echo $exchangeRate
        ?></h3>

        </div>

        <div class="result">
            <h3> <?php 
       echo $result;
        ?></h3>

        </div>

    </div>
</body>

</html>