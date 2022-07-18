<?php require_once APPROOT . '/views/inc/header.php'; ?>

<div class="container mx-auto mt-10 ">
  <form action="<?php echo URLROOT.'/forms/signup';?>" method="POST" class="rounded-lg shadow-lg">
    <div class="body grid md:grid-cols-2 justify-around">
        <div class="leftside hidden md:block">
            <img src="https://cdn.dribbble.com/users/1894420/screenshots/14032021/media/a85f637f1eb4cd5efdd307f9760472a1.gif" alt=""
            class="h-full">
        </div>

        <div class="rigthside md:px-20">
            <div class="header mb-8 flex justify-center text-3xl mt-3">
                <h2>Sign up</h2>
            </div>
        <form action="" class="flex justify-center md:flex-col pb-40">
        <div class="grid md:grid-cols-2 md:gap-6">

            <div class="relative z-0 mb-6 w-full group">
                <!-- First name -->
                <input type="text" name="firstname" id="firstname" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer <?php echo (!empty($data['firstname_err'])) ? 'border-b-red-600': '';?>" 
                value="<?php echo $data['firstname'] ?? '';?>"/>
                <label for="firstname" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>

                  <!-- Error message -->
                  <small class="text-md text-red-500">
                    <?php echo (!empty($data['firstname_err'])) ? $data['firstname_err']: '';?>
                </small>
            </div>

            <div class="relative z-0 mb-6 w-full group">
                <!-- Last Name -->
                <input type="text" name="Last_Name" id="Last Name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer <?php echo (!empty($data['Lastname_err'])) ? 'border-b-red-600': '';?>"  
                value="<?php echo $data['Lastname'] ?? '';?>"/>
                <label for="Last Name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>

                  <!-- Error message -->
                  <small class="text-md text-red-500">
                    <?php echo (!empty($data['Lastname_err'])) ? $data['Lastname_err']: '';?>
                </small>
            </div>
        </div>

        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <!-- Gender -->
                <input type="text" name="gender" id="gender" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer <?php echo (!empty($data['gender_err'])) ? 'border-b-red-600': '';?>" 
                value="<?php echo $data['gender'] ?? '';?>"/>
                <label for="gender" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Gender</label>
                 
                <!-- Error message -->
                  <small class="text-md text-red-500">
                    <?php echo (!empty($data['gender_err'])) ? $data['gender_err']: '';?>
                </small>
            </div>

            <div class="relative z-0 mb-6 w-full group">
                <!-- Birthdate -->
                <input type="date" name="birthday" id="birthday" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer <?php echo (!empty($data['birthday_err'])) ? 'border-b-red-600': '';?>"
                value="<?php echo $data['birthday'] ?? '';?>"/>
                <label for="birthday" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Birthdate</label>
            
                  <!-- Error message -->
                  <small class="text-md text-red-500">
                    <?php echo (!empty($data['birthday_err'])) ? $data['birthday_err']: '';?>
                </small>
            </div>
                <!-- Username -->
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="username" id="username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer <?php echo (!empty($data['username_err'])) ? 'border-b-red-600': '';?>"
                value="<?php echo $data['username'] ?? '';?>"/>
                <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
            
                  <!-- Error message -->
                  <small class="text-md text-red-500">
                    <?php echo (!empty($data['username_err'])) ? $data['username_err']: '';?>
                </small>
            </div>
                <!-- Password -->
            <div class="relative z-0 mb-6 w-full group">
                <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer <?php echo (!empty($data['password_err'])) ? 'border-b-red-600': '';?>"
                value="<?php echo $data['password'] ?? '';?>"/>
                <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>

                  <!-- Error message -->
                  <small class="text-md text-red-500">
                    <?php echo (!empty($data['password_err'])) ? $data['password_err']: '';?>
                </small>
            </div>
                <!-- Confirm password -->
            <div class="relative z-0 mb-6 w-full group">
                <input type="password" name="repeat_password" id="repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer <?php echo (!empty($data['confirm_pass_err'])) ? 'border-b-red-600': '';?>"
                value="<?php echo $data['confirm_pass'] ?? '';?>"/>
                <label for="repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm password</label>
            </div>

             <!-- Error message -->
             <small class="text-md text-red-500">
                    <?php echo (!empty($data['confirm_pass_err'])) ? $data['confirm_pass_err']: '';?>
                </small>
         </div>

           <div class="flex flex-col items-center justify-between md:flex-row mb-10">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-10" type="submit">
                    Sign up
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800 md:-mt-10" href="<?php echo URLROOT.'/forms/login';?>">
                  <small>Doesn't have account?</small>Login
                </a>
            </div>
        </form>
    </div>
  </form>
</div>

<div class="hidden">
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
</div>