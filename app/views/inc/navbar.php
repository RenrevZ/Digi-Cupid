<nav class="wrapper flex h-16 bg-sky-400 text-white">
    <div class="container mx-auto flex justify-between md:justify-around">
        <div class="wrapper flex self-center text-2xl font-medium">
            <h1>Travel share</h1>
            <img src="https://cdn-icons-png.flaticon.com/512/189/189676.png" alt="" class="ml-2 w-8" />
        </div>

        <!-- hamburger menu -->
        <div class="menu block md:hidden">
            <i class="fa-solid fa-bars text-3xl mt-4 "></i>
            <div class="md:hidden">
                <div class="absolute flex flex-col items-center self-end py-8 mt-17 hidden space-y-6 font-bold
             bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md text-slate-600">

                    <a href="<?php echo APPROOT?>">Home</a>
                    <a href="#">About</a>
                    <a href="#"> Doc.</a>
                </div>
            </div>
        </div>



        <div class="wrapper hidden self-center text-lg md:block">

            <ul class="flex space-x-6">
                <li class="active p-4 hover:text-gray-200">
                    <a href="<?php echo APPROOT?>">Home</a>
                </li>
                <li class="p-4 hover:text-gray-200">
                    <a href="<?php echo APPROOT?>/pages/about">About</a>
                </li>
                <li class="p-4 hover:text-gray-200">
                    <a href="#"> Doc.</a>
                </li>
            </ul>
        </div>
    </div>
</nav>