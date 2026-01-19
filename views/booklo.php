<body class="bg-[#ffc090]">

    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    ?>

    <?php
    require_once __DIR__ . "/../config/database.php";
    require_once __DIR__ . "/../app/controllers/bookcontroller.php";


    $database = new Database();
    $pdo = $database->getconn();
    $stmt = $pdo->query("SELECT * FROM book ;");
    $books = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $books[] = new Book($row);
    }

    ?>
    <div class=" mt-[80px] h-auto w-auto z-9 p-10 grid grid-cols-5 gap-5 font-[Dancing_Script]">
        <?php foreach ($books as $book):
            ?>
            <div class="border-orange-800 rounded-[10px] p-5 gap-5 h-auto bg-gradient-to-br from-orange-200 to-orange-900 shadow-xl shadow-orange-800/50">
                <img src="<?= $book->getimg() ?>" alt="<?= $book->getnom() ?>" class="">
                <h1 class="text-[25px] text-white "><?= $book->getnom() ?>
                    <hr>
                </h1>
                <p><span class="text-[15px] text-white ">Autor: </span><?= $book->getauteur() ?></p>
                <p><span class="text-[15px] text-white ">Date de publication: </span><?= $book->getdatepub(); ?></p>
                <?php if ($book->isAvailabel()): ?>
                    <div class="flex justify-between text-[30px]">
                        <div
                            class="border border-orange-700 rounded-[50px] bg-orange-300 h-[50px] w-[50px] text-orange-700 flex items-center justify-center">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <button 
                            class="emp bg-[#ffc090ff] h-[50px] w-[100px] rounded-[10px] border border-[#863416] text-[20px] text-[#863416]">Emrunter</button>

                    </div>

                    <div id="<?=$book->getid();?>" class=" hidden bg-white h-auto w-full rounded-[10px] p-5 gap-9" onclick="popup('<?=$book->getid();?>')">
                        <p>Vous pouvez emrinter ce livre ?? </p>
                        <div class="flex justify-around">
                            <button class="bg-green-400 h-auto w-[40px] rounded-[10px]">oui</button>
                            <button class="bg-red-400 h-auto w-[40px] rounded-[10px]">non</button>
                        </div>

                    </div>


                <?php else: ?>
                    <div
                        class="text-[30px] border border-orange-700 rounded-[50px] bg-orange-300 h-[50px] w-[50px] text-orange-700 flex items-center justify-center">
                        <i class="fa-solid fa-x"></i>
                    </div>

                <?php endif; ?>


            </div>
        <?php endforeach; ?>
    </div>

</body>
<script>
    const books = document.querySelectorAll(".emp");
    console.log(books);
    books.forEach(book => {
        book.addEventListener("click", function () {
            
            });


        })
 

    function popup(idbook){
        const pop=document.getElementById(`${idbook}`);
        
    }
</script>