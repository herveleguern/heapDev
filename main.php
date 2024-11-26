<?php
require_once 'metiers.php';

$slam = new Equipe();
$slam->insert(new Freelance("Franck", 32, "RUBY", 50));
$devo = new Entreprise("DevoTeam", 80);
$slam->insert(new Prestataire("Marc", 28, "CSS", $devo));
$slam->insert(new Freelance("Julie", 30, "PHP", 50));
$slam->insert(new Prestataire("Serge", 58, "ANDROID", $devo));
$slam->insert(new Freelance("Helene", 44, "PHP", 50));

$clone = clone $slam; 
//iterer sur un tas le vide, on clone le tas pour le réutiliser

//iteration1 : top while valid current next
$slam->top();
while ($slam->valid()) {
    echo $slam->current() . "\n";
    $slam->next();
}

$slam = clone $clone;

//iteration2 : foreach plutot plus simple!

echo $slam->effectif() . "\n";
foreach ($slam as $unDeveloppeur) {
    echo $unDeveloppeur . "\n";
}

$rep = $slam->estVide() == TRUE ? 'Oui' : 'Non';
echo "itérer sur un tas SPLHeap le vide-t-il ?: " . $rep . "\n"; 
//reponse OUI

$slam = clone $clone;
echo $slam->effectif() . "\n";

$slam = clone $clone;
echo $slam->effectifParCompetence('ANDROID'). "\n"; 
//juste une seule compétence :  ANDROID
//a reutiliser pour traiter toutes les competences

$slam = clone $clone;
echo $slam->tauxHoraireMoyen() . "\n";
?>
