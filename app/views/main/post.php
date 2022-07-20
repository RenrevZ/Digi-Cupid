<?php require_once APPROOT .'/views/inc/header.php';?>

<!-- profile -->
<div class="flex">
    <div class="bg-white px-4 py-5 rounded-lg shadow-lg text-center w-80 h-screen hidden md:block">
      <div class="mb-4 border border-sky-600 rounded-full">
        <?php if($_SESSION['gender'] == 'male'):?>
        <img class="w-auto mx-auto rounded-full object-cover object-center" src="https://i1.pngguru.com/preview/137/834/449/cartoon-cartoon-character-avatar-drawing-film-ecommerce-facial-expression-png-clipart.jpg" alt="Avatar Upload" 
        />
        <?php else:?>
            <img src="https://cdn-icons.flaticon.com/png/512/1785/premium/1785918.png?token=exp=1658317611~hmac=b1910846c70da9bcf033bdec24f48c2f" alt=""
            class="rounded-full">
        <?php endif?>
      </div>
      <!-- profile followers-->
      <div class="grid grid-cols-3 category mb-5">
        <div class="post">
            <h3 class="text-bold">2</h3>
            <p class="text-slate-500">post</p>
        </div>

        <div class="post">
            <h3 class="text-bold">500</h3>
            <p class="text-slate-700">followers</p>
        </div>

        <div class="post">
            <h3 class="text-bold">2</h3>
            <p class="text-slate-700">following</p>
        </div>
      </div>
      <label class="cursor-pointer mt-6">
        <span class="mt-2 text-base leading-normal px-4 py-2 bg-blue-500 text-white text-sm rounded-full" >Change Profile</span>
        <input type='file' class="hidden" :multiple="multiple" :accept="accept" />
      </label>

      <!-- Profile details -->
      <div class="profile-details">
        <h1 class="text-3xl text-slate-500 mt-5">
            <?php echo  $_SESSION['firstname'].'  '.$_SESSION['Lastname']?>
        </h1>
        <ul class="list-none text-left pl-10 leading-8 text-slate-500 mt-5">
            <li><i class="fa-solid fa-mars-and-venus pr-5"></i><?php echo $_SESSION['gender']?></li>
            <li><i class="fa-solid fa-cake-candles pr-5"></i><?php echo $_SESSION['birthdate']?></li>
        </ul>
      </div>

    </div>

    <div class="post w-full mx-10">
        <div class="container shadow-lg p-10">
            <div class="flex items-center">
                <img class="w-12 rounded-full object-cover object-center" src="https://i1.pngguru.com/preview/137/834/449/cartoon-cartoon-character-avatar-drawing-film-ecommerce-facial-expression-png-clipart.jpg" alt="Avatar Upload" 
                />
                <p><?php  echo  $_SESSION['firstname'].'  '.$_SESSION['Lastname']?></p>
            </div>

            <div class="relative z-0 mb-6 w-full group mt-10">
                <input type="email" name="post_name" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    tell your travel experience</label>
            
            </div>

            <form action="">
                <div class="buttons flex justify-end">
                    <label class="cursor-pointer mt-6">
                    <span class="p-2 bg-sky-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-95 transition-transform mx-1 flex" >
                    <i class="fa-solid fa-image mt-1"></i>Image</span>
                    <input type='file' class="hidden" :multiple="multiple" :accept="accept" />
                    </label>

                    <button 
                    type="submit" 
                        class="p-2 bg-sky-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-95 transition-transform mx-1 flex"
                            >
                        <i class="fa-solid fa-arrow-up-from-bracket"></i>
                        <span class="ml-2">upload</span>
                    </button>
                </div>
            </form>
            
        </div>
    </div>
  </div>