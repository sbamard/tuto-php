<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exercice 6 : attribut statique"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
require "maison.class.php";
$maison1 = new Maison(2018,3,98);
$maison2 = new Maison(2019,4,120);
$maison3 = new Maison(2017,4,130);
$maisons = [$maison1,$maison2,$maison3];
?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Date</th>
        <th scope="col">Nombre de chambres</th>
        <th scope="col">Surface</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($maisons as $maison) : ?>
            <tr>
                <td><?= $maison->getId(); ?></td>
                <td><?= $maison->getDateCreation(); ?></td>
                <td><?= $maison->getNombreChambres(); ?></td>
                <td><?= $maison->getSurface(); ?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
