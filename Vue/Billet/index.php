<?php $this->titre = 'Mon Blog - ' . $this->nettoyer($billet['titre']); ?>

<article>
    <header>
        <h1 class="titreBillet"><?=$this->nettoyer($billet['titre'])?></h1>
        <time><?=$this->nettoyer($billet['date'])?></time>
    </header>
    <p><?=$this->nettoyer($billet['contenu'])?></p>
</article>
<hr>
<header>
    <h1 id="titreReponses">Réponses à <?= $billet['titre']; ?></h1>
    <?php
        foreach ($commentaires as $commentaire) : 
    ?>
        <p><?= $commentaire['auteur'] ?> dit : </p>
        <p><?= $commentaire['contenu'] ?></p>
    <?php endforeach; ?>
</header>
<hr>
<form method="post" action="index.php?action=commenter">
    <input type="text" name="auteur" id="auteur" placeholder="Votre pseudo" required>
    <textarea name="contenu" id="txtCommentaire" rows="4" placeholder="Votre commentaire" required></textarea>
    <input type="hidden" name="id" value="<?=$billet['id']?>">
    <input type="submit" value="Commenter">
</form>
        