<?php
if (isset($_SESSION['situ']) && isset($_SESSION['USER']) && isset($_SESSION['user_id'])) {
    
    $status = $_SESSION['situ'];
    $user = $_SESSION['USER'];
    $id = $_SESSION['user_id'];
}else{
    $status = false;
    $user = null;
    $id = null;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Mea+Culpa&family=Playwrite+AU+VIC+Guides&display=swap"
        rel="stylesheet">
    <title>Book Space</title>
</head>
<style>
    body {
        /* background-color: #ffc090ff */
    }
</style>

<body>
    <nav
        class=" z-50 flex w-full h-[80px] bg-[#ffc090ff] justify-between items-center shadow-lg shadow-[#682f03a3] p-3 font-[Dancing_Script] text-[20px] text-orange-800">
        <div class="p-3 flex gap-5 text-orange-800">
            <img src="../assets/logo.png" alt="logo" class="w-[40px]">Book Space
        </div>
        <div class="flex p-3 gap-7">
            <a href="home"
                class="hover:text-[30px] hover:transition  hover:delay-150  hover:duration-300  hover:ease-in-out">Home
            </a>
            <a href="about"
                class="hover:text-[30px] hover:transition  hover:delay-150  hover:duration-300  hover:eas e-in-out">About
                us</a>
            <a href="booklo"
                class="hover:text-[30px] hover:transition  hover:delay-150  hover:duration-300  hover:ease-in-out">Books</a>
            <?php if ($status === true): ?>
                <?php if ($user === 'READER'): ?>
                    <a href="libary"
                        class="hover:text-[30px] hover:transition hover:delay-150 hover:duration-300 hover:ease-in-out">Labirary
                    </a>
                <?php elseif ($user === "ADMIN"): ?>
                    <a href="crud"
                        class="hover:text-[30px] hover:transition hover:delay-150 hover:duration-300 hover:ease-in-out">Books
                        managment</a>
                    <a href="emprints"
                        class="hover:text-[30px] hover:transition hover:delay-150 hover:duration-300 hover:ease-in-out">Emprints</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>



        <div class="flex p-3 gap-3">
            <?php if ($status === false): ?>
                <button><a href="login"
                        class="bg-[linear-gradient(111deg,#FFCE0F_1%,#FF820F_44%,#702700_93%)] p-3 border-[#ffff]-sm rounded-[10px] text-white mr-3 hover:text-[30px] ">Login</a></button>
                <button><a href="signin"
                        class="bg-[linear-gradient(111deg,#FFCE0F_1%,#FF820F_44%,#702700_93%)] p-3 border-[#ffff]-sm rounded-[10px] text-white hover:text-[30px] ">Signin</a></button>

            <?php else: ?>
                <button
                    class="bg-[linear-gradient(111deg,#FFCE0F_1%,#FF820F_44%,#702700_93%)] p-3 border-[#ffff]-sm rounded-[10px]  hover:text-[30px] "><a
                        href="profil" class=" text-white">Profile</a></button>
                <button><a href="logout"
                        class="bg-[linear-gradient(111deg,#FFCE0F_1%,#FF820F_44%,#702700_93%)] p-3 border-[#ffff]-sm rounded-[10px] text-white hover:text-[30px]"><i
                            class="fa-solid fa-right-from-bracket"></i></a></button>
            <?php endif ?>
        </div>
    </nav>
</body>

</html>