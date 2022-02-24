<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The DREAM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo $intro;
    ?>
    <main>
        <section>
            <div class="converter">
                <p>Currency Converter</p>
                <form action="./index.php" method="post">
                    <label for="amount">Amount</label><br>
                    <input type="number" id="amountInput" name="amountInput" placeholder="Amount">
                    <br>
                    <label for="from">from</label><br>
                    <select name='valuta1'>
                    <option value="IDR">Indonesian Rupiah(IDR)</option>
                    <option value="EUR">Euro(EUR)</option>
                    </select><br>

                    <label for="to">to</label><br>

                    <select name='valuta2'>
                        <option value="IDR">Indonesian Rupiah(IDR)</option>
                        <option value="EUR">Euro(EUR)</option>
                    </select><br>

                    <input type="submit" name="submit" value="Convert NOW"><br>                
                </form>
                <div class="resultValuta">result</div>    
            </div>
        </section>
    </main>
    
</body>
</html>