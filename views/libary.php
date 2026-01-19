<?php
    require_once __DIR__ . "/../app/controllers/libarycontroller.php";


    $labery = new  Libary();
    $labery->labery();

?>
<div class=" p-20 h-[100vh]">
    <h1 class="text-[50px]">Les livres importer</h1>
    <table class="table-fixed border-collapse h-auto w-[100%]">
        <thead>
            <tr>
                <th class="border-b-2 p-4 bg-orange-800/30">Le titre de livre </th>
                <th class="border-b-2 p-4 bg-orange-800/30">L'auteur de livre </th>
                <th class="border-b-2 p-4 bg-orange-800/30">Date d'emprunte </th>
                <th class="border-b-2 p-4 bg-orange-800/30">Date de retour </th>
                  <th class="border-b-2 p-4 bg-orange-800/30">Status </th>
            </tr>
        </thead>

        <tbody class="text-center">
            <?php 
            // foreach(): 
            ?>
                <tr>
                    <td><?= $labery->getnom()?></td>
                    <td><?= $labery->getauteur()?></td>
                    <td><?= $labery->getdateemp() ?></td>
                    <td><?= $labery->getdatepub()?></td>
                </tr>
            <?php 
            // endforeach;
             ?>
        </tbody>

    </table>
</div>