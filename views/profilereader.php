<?php
require_once __DIR__ . "/../app/controllers/readercontroller.php";
$reader = new reader();
$reader->reader();

?>

<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 py-12 px-4 ">
    <div class="max-w-7xl mx-auto">

        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">
                HI, <span class="text-orange-900"><?= $reader->getFirstname(); ?></span>
            </h1>

            <div class="mt-8 text-center">
                <p class="text-gray-500 italic">
                    "The more that you read, the more things you will know. The more that you learn, the more places
                    you'll go."
                    <span class="block text-orange-900 font-medium mt-1">- Dr. Seuss</span>
                </p>
            </div>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl shadow-2xl hover:shadow-3xl">
                <div class="h-40 bg-gradient-to-r from-orange-300 to-orange-900 relative">
                    <div class="absolute ">
                        <div
                            class="w-32 h-32 bg-white rounded-full border-4 border-white shadow-xl flex items-center justify-center">
                            <i class="fa-solid fa-book-open-reader text-[70px] text-orange-900"></i>
                        </div>
                    </div>
                </div>

                <div class="pt-20 pb-10 px-8 text-center">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">
                        <?= $reader->getFirstname(); ?> <?= $reader->getLastname(); ?>
                    </h2>
                    <p class="text-gray-500 mb-8 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-at"></i>
                        <?= $reader->getEmail(); ?>
                    </p>



                    <div class="bg-orange-300 rounded-xl p-6 mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center gap-2">

                            Reader Profile Details
                        </h3>

                        <div class="space-y-4">
                            <div class="flex flex-col p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm text-gray-500">First Name</div>
                                        <div class="font-medium text-gray-900"><?= $reader->getFirstname(); ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm text-gray-500">Last Name</div>
                                        <div class="font-medium text-gray-900"><?= $reader->getLastname(); ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm text-gray-500">Email Address</div>
                                        <div class="font-medium text-gray-900"><?= $reader->getEmail(); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>
</div>
</div>