<nav class="wrapper flex h-16 bg-sky-400 text-white p-2 md:p-0">
    <div class="container mx-auto flex justify-between md:justify-around">
        <div class="wrapper flex self-center text-2xl font-medium">
            <h1>Travel share</h1>
            <img src="https://cdn-icons-png.flaticon.com/512/189/189676.png" alt="" class="ml-2 w-8" />
        </div>
        
        <?php if(isset($_SESSION['user_id'])):?>
            <span class="md:hidden flex mr-10">
                <i class="fa-solid fa-house-chimney text-md"></i>
            <img class="w-12 rounded-full" src="https://i1.pngguru.com/preview/137/834/449/cartoon-cartoon-character-avatar-drawing-film-ecommerce-facial-expression-png-clipart.jpg" alt="Avatar Upload" 
                />
            </span>
            
        <?php else :?>
            <!-- hamburger menu -->
            <div class="menu block md:hidden">
                <i class="fa-solid fa-bars text-3xl mt-4" id="hamburgermenu"></i>

                
        
                        <div class="absolute items-center self-end py-8 mt-10 hidden space-y-6 font-bold
                    bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md text-slate-600" id="menuhidden">

                            <a href="<?php echo URLROOT;?>" class="hover:text-slate-400 text-lg">Home</a>
                            <a href="<?php echo URLROOT;?>/pages/about" class="hover:text-slate-400 text-lg">About</a>
                            <a href="<?php echo URLROOT;?>/forms/login" class="hover:text-slate-400 text-lg"> Login</a>
            </div>
        <?php endif;?>

        </div>
        
        <?php if(isset($_SESSION['user_id'])):?>
            <ul class="flex space-x-6">
                <li class="bg-sky-500 rounded-md p-4 hover:text-gray-200">
                    <a href="<?php echo URLROOT;?>/forms/logout">Logout</a>
                </li>
            </ul>
        <?php else :?>
        <div class="wrapper hidden self-center text-lg  md:block">

            <ul class="flex space-x-6">
                <li class="active p-4 hover:text-gray-200" id="home">
                    <a href="<?php echo URLROOT;?>">Home</a>
                </li>
                <li class="p-4 hover:text-gray-200" id="about">
                    <a href="<?php echo URLROOT;?>/pages/about">About</a>
                </li>
                <li class="p-4 hover:text-gray-200" id="login">
                    <a href="<?php echo URLROOT;?>/forms/login"> Login</a>
                </li>
            </ul>
        </div>
        <?php endif;?>
    </div>
</nav>