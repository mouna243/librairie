<?php
require_once __DIR__ . "/../config/database.php";

require_once __DIR__ . "/../app/controllers/libarycontroller.php";




echo $_SESSION['user_id'];
$data = new Database();
$pdo = $data->getconn();
$stmt = $pdo->prepare("SELECT * FROM emp INNER JOIN book ON emp.id_book = book.id WHERE emp.id = :id");
$stmt ->execute([
    'id' => $_SESSION['user_id']
]);
$emps=[];
while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // $emps = new Libarycontroller($rows);
}
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
            <?php foreach ($emps as $emp): ?>
                <tr>
                    <td><?= $book->getnom()?></td>
                    <td><?= $book->getauteur()?></td>
                    <td><?= $book->getdateemp()?></td>
                    <td><?= $book->getdatepub()?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>