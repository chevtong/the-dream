<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>The Dream</title>
  </head>

  <?php 
if(isset($_POST["submit"])){

    $amount = $_POST["amount"];
    $fromCur = $_POST["from-curreny"];
    $toCur = $_POST["to-curreny"];

    if($fromCur == "usd" && $toCur == "euro"){
        $result = "{$amount} USD = ". $amount * 0.81 ."EURO";
    }

    if($fromCur == "gbp" && $toCur == "euro"){
      $result = "{$amount} GBP = ". $amount * 1.1 ."EURO";
  }

  if($fromCur == "jpy" && $toCur == "euro"){
    $result = "{$amount} JPY = ".$amount * 0.0079 ."EURO";
    
}
}

?>

  <body>
    <div class="container-calculator">
      <form action="" method="POST">
        <div class="from-currency">
          <h3>From<select name="from-curreny" id=""></h3>
          <option value="usd">USD</option>
          <option value="gbp">GBP</option>
            <option value="jpy">JPY</option>
          </select>
        </div>

        <div class="value">
            <label>Value</label>
            <input type="number" name="amount"  />
          </div>

        <div class="to-currency">
          <h3>To<select name="to-curreny" id=""></h3>

          <option value="euro">Euro</option>

        </select>
        </div>

       

        

        <button type="submit" name="submit" value="convert">Convert</button>
      </form>

      <div class="div">
        
        <?php 
        echo $result;
        ?>
      </div>
  
    </div>
  </body>
</html>
