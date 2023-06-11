<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include './functions.php'
    ?>
    <h1>prova</h1>
    <form action="./data.php" method="GET">
        <label for="length">Lunghezza password</label>
        <input type="number" name="length" id="length" min=0 max=24>
        <button type="submit">INVIA</button>
        <button type="reset">CANCELLA</button>
        <div>
            <span>Letters</span>
            <input type="checkbox" name="letters" id="letters">                         
        </div>
        <div>
            <span>Numbers</span>  
            <input type="checkbox" name="numbers" id="numbers">                       
        </div>
        <div>
            <span>Symbols</span>
            <input type="checkbox" name="symbols" id="symbols">                         
        </div>
        <div>
            <span>characters repetition</span>
            <input type="checkbox" name="repetition" id="repetition">                         
        </div>
    </form>
    <?php passwordGenerator($_GET['length']) ?>
</body>
</html>