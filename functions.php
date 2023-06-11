
    <?php
    function passwordGenerator($lenght){
        session_start();

        $lettersString = 'abcdefghijklmnopqrstuvwxyz';
        $lettersUpString = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $symbolsString ='|!$%&/()=?^@#[]{}><';

        $letters = (str_split($lettersString));
        $lettersUp = (str_split($lettersUpString));
        $symbols = (str_split($symbolsString));
        $numbers = range('0', '9');

        $pswChars=[];
        $psw="";

        if ($_GET['letters']) {
            $pswChars= array_merge($pswChars,$letters,$lettersUp);
        }
        if ($_GET['numbers']) {
            $pswChars= array_merge($pswChars,$numbers);
        }
        if ($_GET['symbols']) {
            $pswChars= array_merge($pswChars,$symbols);
        }

        for ($i=0; $i < $lenght; $i++) { 
            $randomChar = $pswChars[rand(0, count($pswChars)-1)];
            if (!$_GET['repetition']) {

                if (!str_contains($psw, $randomChar)) {
                    $psw .= $randomChar;
                }

            } else {
                $psw .= $randomChar;
            }

        }
        $pswChars=[];
        $_SESSION['new-psw'] = $psw;

        if ($psw) {
            header('location: success.php');
        }else {
        echo 'Compila il form';
        }
    } 

    ?>
</body>
</html>