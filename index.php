<?php
require './src/css/database/functions.php';
$siswa = query("SELECT * FROM alam");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="img/sumba.jpg" sr href="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Tailwind</title>
    <link rel="stylesheet" href="public/css/style.css">
    <!-- <style type="text/tailwindcss">
        *{
            border: 1px solid red;
        }
    </style> -->
</head>

<body>
    <nav class="bg-white shadow-lg cursor: pointer">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <a href="" class="flex items-center py-4 px-2">
                        <img src="./../src/css/database/img/sumba.jpg" class="h-8 w-8 mr-2">
                        <span class="font-black text-blue-600 text-lg hover:text-gray-500">Sumba Island</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 hover:border-blue-600 transition duration-300">Home</a>
                    <a href="#"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Services</a>
                    <a href="#"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">About</a>
                    <a href="#"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">ContactUs</a>
                </div>

                <div class="md:hidden flex items-center">
                    <button class="outline-none menu-button">
                        <svg class="w-6 h-6 text-gray-500 hover:text-blue-500" x-show="! showMenu" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="4" viewBox="0 00 24 24"
                            stroke="currentColor">
                            <path d="m4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <div class="hidden mobile-menu">
                    <ul>
                        <li class="active">
                            <a href="#Home"
                                class="block.text-sm.px-2.py-4 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Home</a>
                        </li>
                        <li>
                            <a href="#services"
                                class="block.text-sm.px-2.py-4 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Services</a>
                        </li>
                        <li>
                            <a href="#About"
                                class="block.text-sm.px-2.py-4 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">About</a>
                        </li>
                        <li>
                            <a href="#Contact Us"
                                class="block.text-sm.px-2.py-4 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Contact
                                Us</a>
                        </li>
                        <li>
                            <a href="./src/css/database/admin.php"
                                class="block.text-sm.px-2.py-4 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Admin
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div>
        <p class=" text-gray-900 font-semibold my-15 mx-4 p-5 sm:text-left">Sumba merupakan salah satu pulau yang
            terletak di bagian selatan Indonesia yang sangat terkenal akan keindahan alam, adat istiadat serta
            budayanya. Namanya mencuat menjadi salah satu destinasi favorit bagi wisatawan domestik dan mancanegara.
            Sebagian besar lansekap Sumba didominasi padang rumput. Sebagai pulau yang masuk dalam kawasan Wallacea,
            Sumba kaya akan keragaman hayati. Tak hanya itu, pulau di Nusa Tenggara Timur seluas 10.854 km persegi ini
            juga merupakan satu dari 23 daerah burung endemik yang ada di Indonesia, dengan sembilan jenis endemik
            Sumba.
        </p>
        <?php $i = 1; ?>
        <?php foreach ($siswa as $row) : ?>

        <div class=" mx-6 flex container ">
            <div class=" mx-4 my-5 text-center sm:text-left">
                <h3 class="font-black my-2"><?= $i; ?>. <?= $row["nama"]; ?></h3>
                <img class=" mr-2" width="400px" src="./src/css/database/img/<?= $row["gambar"]; ?>">
                <div class=" font-semibold m-4">
                    <p><?= $row["data"]; ?></p>
                </div>
            </div>
        </div>


        <?php $i++; ?>
        <?php
        endforeach;
        ?>


    </div>







    <script>
    const btn = document.querySelector('button.menu-button');
    const menu = document.querySelector(".mobile-menu");
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    })
    </script>
</body>

</html>