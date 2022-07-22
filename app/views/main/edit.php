<?php require_once APPROOT .'/views/inc/header.php';?>

<!-- profile -->
<div class="flex">
    <div class="bg-white px-4 py-5 rounded-lg shadow-lg text-center w-80 h-screen hidden md:block md:mr-24 sticky top-20">
      <div class="mb-4 border border-sky-600 rounded-full">
        <?php if($_SESSION['gender'] == 'male'):?>
        <img class="w-auto mx-auto rounded-full object-cover object-center" src="https://i1.pngguru.com/preview/137/834/449/cartoon-cartoon-character-avatar-drawing-film-ecommerce-facial-expression-png-clipart.jpg" alt="Avatar Upload" 
        id="profile"/>
        <?php else:?>
            <img src="https://cdn-icons-png.flaticon.com/512/1154/1154448.png" alt=""
            class="rounded-full" id="profile">
        <?php endif?>
      </div>
      <!-- profile followers-->
      <div class="grid grid-cols-3 category mb-5">
        <div class="post">
            <h3 class="text-bold">2</h3>
            <p class="text-slate-500">post</p>
        </div>

        <div class="post ">
            <h3 class="text-bold">500</h3>
            <p class="text-slate-700 pr-10">followers</p>
        </div>

        <div class="post">
            <h3 class="text-bold">2</h3>
            <p class="text-slate-700">visits</p>
        </div>
      </div>
      <label class="cursor-pointer mt-6">
        <span class="mt-2 text-base leading-normal px-4 py-2 bg-blue-500 text-white text-sm rounded-full" >Change Profile</span>
        <input type='file'  class="hidden" :multiple="multiple" :accept="accept" onchange="changeProfile(this);"/>
      </label>

      <!-- Profile details -->
      <div class="profile-details">
        <h1 class="text-3xl text-sky-500 mt-5">
            <?php echo  $_SESSION['firstname'].'  '.$_SESSION['Lastname']?>
        </h1>
        <ul class="list-none text-left  leading-8 text-slate-500 mt-5">
            <li><i class="fa-solid fa-mars-and-venus pr-5"></i><?php echo $_SESSION['gender']?></li>
            <li><i class="fa-solid fa-cake-candles pr-5"></i><?php echo $_SESSION['birthdate']?></li>
        </ul>
      </div>

    </div>
        
    <!-- POST -->
    <div class="post md:ml-60 ml-12">
         <!-- POST CONTAINER/ Main Post-->
        
            <div class="container shadow-lg p-10 w-96">
                    <div class="flex justify-between items-center">
                        <div class="left-post flex items-center">
                        <img class="w-12 rounded-full object-cover object-center" src="https://i1.pngguru.com/preview/137/834/449/cartoon-cartoon-character-avatar-drawing-film-ecommerce-facial-expression-png-clipart.jpg" alt="Avatar Upload" 
                                 />
                        <p><?php  echo $data['user']->first_name.'  '.$data['user']->last_name?></p>
                        </div>

                        <div class="right-post">
                        <!-- IF the post is by the login user show this -->
                        <?php if( $_SESSION['user_id'] === $data['posts']->id):?>
                            <span class="options">
                                <ul class="flex" id="postoption">
                                    <li class="hover:text-sky-600 p-1"><a href="#">Edit</a></li>
                                    <li class="hover:text-sky-600 p-1"><a href="#">Delete</a></li>
                                </ul>
                            </span>
                        <?php else :?>

                        <?php endif?>
                        </div>
                    </div>
                    <small class="text-slate-400 mb-10 border border-b-2 border-slate-200"><?php echo $data['posts']->created_at?></small>
                    <div class="description mb-5">
                        <!-- EDIT SUBMITION -->
                    <form action="<?php echo URLROOT?>/main/edit/<?php echo $data['posts']->id?>" method="POST">
                            <input type="text" name="newdescript" id="username" class="peer block w-full appearance-none border-0 border-b-2
                            border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500" 
                            placeholder=" "  value=" <?php echo $data['posts']->description?>"/>
                            </div>
                            <div class="photo-container">
                                <img src="../<?php echo $data['posts']->image?>" alt="">
                            </div>
                            <div class="buttons">
                                <ul class="flex  mt-5">
                                    <li>
                                    <a href="<?php echo URLROOT?>/main/post">
                                    <label class="cursor-pointer mt-6">
                                        <span class="p-2 bg-red-400 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-95 transition-transform mx-1 flex p-5" >
                                        <i class="fa-solid fa-xmark p-1"></i>cancel</span>
                                    </label>
                                    </a>
                                    </li>

                                    <li>
                                        <label class="cursor-pointer mt-6">
                                            <span class="p-2 bg-sky-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-95 transition-transform mx-1 flex p-5" >
                                            <i class="fa-solid fa-arrow-up-from-bracket mr-2"></i>upload</span>
                                            <input type='submit' class="hidden" :multiple="multiple" :accept="accept" name="images" />
                                        </label>
                                    </li>
                                </ul>
                            </div>
                    </form>
            </div>
    </div>
    
  </div>

 

  <div class="hidden">
  <?php require_once APPROOT . '/views/inc/footer.php'; ?>
  </div>