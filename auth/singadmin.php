<head>

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .font-dancing {
            font-family: 'Dancing Script', cursive;
            /* background-color: #FF820F; */
        }
    </style>
</head>

<body>
    <?php require_once __DIR__ . "/../app/controllers/signadmincontroller.php";
        $class = new signeadmin();
        $class->signeup();

   
    ?>
    <div
        class="bg-[linear-gradient(111deg,#ffc090_1%,#FF820F_44%,#702700_93%)] min-h-screen flex items-center justify-center p-4">
        <div class="bg-white/10 backdrop-blur-sm rounded-2xl shadow-2xl p-8 max-w-md w-full border border-white/20">
            <h1 class="font-dancing text-[50px] text-orange-900 font-medium block mb-2">Creer un nouveau Admin</h1>

            <form class="space-y-6" method ="POST">
                <div>
                    <label for="firstname" class="font-dancing text-xl text-[#682f03a3] font-medium block mb-2">NOM</label>
                    <input type="text" placeholder="Votre nom d'utilisateur" id="firstname" name="firstname"
                        class="w-full px-4 py-3 bg-white/80 border border-[#682f03a3]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#ffc090ff] focus:border-transparent placeholder:text-[#682f03a3]/50 text-[#682f03a3] font-medium">
                </div>
                    <div>
                        <label for="lastname"
                            class="font-dancing text-xl text-[#682f03a3] font-medium block mb-2">PRENOM</label>
                        <input type="text" placeholder="Votre nom d'utilisateur" id="lastname" name="lastname"
                            class="w-full px-4 py-3 bg-white/80 border border-[#682f03a3]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#ffc090ff] focus:border-transparent placeholder:text-[#682f03a3]/50 text-[#682f03a3] font-medium">
                    </div>
                <div>
                    <label for="email" class="font-dancing text-xl text-[#682f03a3] font-medium block mb-2">EMAIL</label>
                    <input type="text" placeholder="Votre nom d'utilisateur" id="email" name="email"
                        class="w-full px-4 py-3 bg-white/80 border border-[#682f03a3]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#ffc090ff] focus:border-transparent placeholder:text-[#682f03a3]/50 text-[#682f03a3] font-medium">
                </div>
                <div>
                    <label for="password" class="font-dancing text-xl text-[#682f03a3] font-medium block mb-2">MOT DE
                        PASSE</label>
                    <input type="password" placeholder="Votre mot de passe" id="password" name="password"
                        class="w-full px-4 py-3 bg-white/80 border border-[#682f03a3]/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#ffc090ff] focus:border-transparent placeholder:text-[#682f03a3]/50 text-[#682f03a3] font-medium">
                </div>

                <button type="submit"
                    class="w-full font-dancing text-2xl bg-[#ffc090ff] text-[#682f03a3] font-bold py-3 px-4 rounded-lg hover:bg-[#ffc090ff]/90 hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#682f03a3] focus:ring-offset-2">
                    Cree un compte
                </button>
            </form>
            <div class="mt-8 text-center">
                <p class="font-dancing text-lg text-[#682f03a3]">
                    Vous avez deja un compte?
                    <a href="loginadmin" class="text-[#ffc090ff] font-bold hover:underline ml-1">Se connecter</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>