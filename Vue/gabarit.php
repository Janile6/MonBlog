<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?= $racineWeb ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contenu/style.css">
    <title><?= $titre ?></title>
</head>
<body>
   <div id="global">
        <header>
           <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
           <p>Je vous souhaite la bienvenu sur ce modeste blog.</p>
        </header>
        <div id="contenu">
            <?= $contenu ?>
        </div>
        <footer id="piedBlog">
            Blog réalisé avec PHP, HTML et CSS .             
        </footer>
   </div> 
</body>
</html>