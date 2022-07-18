<?php require_once APPROOT . '/views/inc/header.php'; ?>

<div class="container mx-auto mt-10 ">
  <form action="<?php echo URLROOT.'/forms/login';?>" method="POST" class="rounded-lg shadow-lg">
    <div class="body grid md:grid-cols-2 justify-around">
        <div class="leftside hidden md:block">
            <img src="https://i.pinimg.com/originals/b8/b7/fa/b8b7faa068cb612f21a7f7268313064b.png" alt=""
            class="h-full">
        </div>

        <div class="rigthside md:px-36 md:mt-20">
            <div class="header mb-8 flex justify-center text-3xl mt-3">
                <h2>Login</h2>
            </div>
        <form action="" class="flex justify-center md:flex-col pb-40">
            <div class="group relative z-0 mb-6 w-full">
                <input type="text" name="username" id="username" class="peer block w-full appearance-none border-0 border-b-2
                 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500 <?php echo (!empty($data['username_err'])) ? 'border-b-red-600': '';?>" 
                 placeholder=" "  value="<?php echo $data['username'] ?? ''?>"/>
                 
                <label for="username" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm
                 text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 
                 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600
                  dark:text-gray-400 peer-focus:dark:text-blue-500">Username</label>
                 
                <!-- Error message -->
                <small class="text-md text-red-500">
                    <?php echo (!empty($data['username_err'])) ? $data['username_err']: '';?>
                </small>
            </div>
            

            <div class="group relative z-0 mb-6 w-full">
                <input type="password" name="login_password" id="login_password" class="peer block w-full 
                appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm
                 text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600
                  dark:text-white dark:focus:border-blue-500 <?php echo (!empty($data['password_err'])) ? 'border-b-red-600': '';?>" 
                  placeholder=" " value="<?php echo $data['password'] ?? ''?>"/>
                
                <label for="login_password" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500">Password</label>
                 
                <!-- Error message -->
                    <small class="text-md text-red-500  mb-10">
                        <?php echo (!empty($data['password_err'])) ? $data['password_err']: '';?>
                    </small>
            </div>

           

           <div class="flex flex-col items-center justify-between md:flex-row mb-10">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-10" type="submit">
                    Log In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800 md:-mt-10" href="<?php echo URLROOT.'/forms/signup';?>">
                  <small>Doesn't have account?</small>Sign Up
                </a>
            </div>
        </form>
    </div>
  </form>
</div>

<div class="hidden">
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
</div>
