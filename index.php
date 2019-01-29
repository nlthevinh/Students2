<!DOCTYPE php>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="test.css"/>
        <title>Liste2</title>
    </head>
    <body>
        <h1>Students</h1>
        <?php
            $db=new PDO('mysql:host=localhost;dbname=test','rt','rtlry');
            $resultat=$db->query('SELECT * FROM students');
            $students=$resultat->fetchAll();
            foreach($students as $student){
                echo"<li>$student[firstname] $student[lastname] $student[email]</li>";
            };
        ?>
    </body>
</html>
