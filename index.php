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
        <?php
            $db=mysql_connect('localhost', 'rt', 'rtlry');
            mysql_select_db('students',$db);
            $requete="SELECT * FROM students";
            $students=mysql_query($requete);        
            echo"<h1>Students</h1>";
            foreach($students as $student){
                echo"<li>$student[firstname] $student[lastname] $student[email]</li>";
            };
        ?>
    </body>
</html>
