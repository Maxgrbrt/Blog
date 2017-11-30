<?php

// fonction cryptage mot de passe
function cryptPassword($mdp) {
    $mdp_crypt = sha1($mdp);
    return $mdp_crypt;
}

// Fonction cryptage sid
function sid($email) {
    $sid = md5($email . time());
    return $sid;
}

// Fonction de retour d'index pour pagination

function pagination($page_courante, $nb_articles_par_page) {
    $index = ($page_courante - 1) * $nb_articles_par_page;
    return $index;
}

// Calcul de nombre total d'article publie
function nb_total_article_publie($bdd) {
    /* @var $bdd PDO */

    // compte le nombre de colonne ou on a publie = 1
    $sql = "SELECT COUNT(*) as nb_total_article_publie "
            . "FROM articles "
            . "WHERE publie = 1";

    $sth = $bdd->prepare($sql);
    $sth->execute();
    // recupere le nombre d'articles publie (nombre de fois dans la base de donnée ou notre publie est a 1) et le met dans $tab_result
    $tab_result = $sth->fetch(PDO::FETCH_ASSOC);
    return $tab_result['nb_total_article_publie'];
}

?>
