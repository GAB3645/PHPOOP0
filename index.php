
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        require 'Alunno.php';

        $alunno1 = new Alunno();
        $alunno1->setName('Fabio');
        $alunno1->setSurname('Zavataro');
        $alunno1->setEta(20);

        $alunno2 = new Alunno();
        $alunno2->setName('Davide');
        $alunno2->setSurname('Susini');
        $alunno2->setEta(21);

        $alunno3 = new Alunno();
        $alunno3->setName('Matteo');
        $alunno3->setSurname('Ciardi');
        $alunno3->setEta(19);

        $alunni = array($alunno1, $alunno2, $alunno3);

        foreach ($alunni as $alunno) {
            echo $alunno->getName() . ' ' . $alunno->getSurname() . ' ' . $alunno->getEta() . ' anni' . '<br>';
        }

    
    ?>

</body>
</html>
