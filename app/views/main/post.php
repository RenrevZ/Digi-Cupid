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
    <div class="post w-96 md:ml-60 ml-12">
        <div class="container shadow-lg p-10">
            <div class="flex items-center">
                <img class="w-12 rounded-full object-cover object-center" src="https://i1.pngguru.com/preview/137/834/449/cartoon-cartoon-character-avatar-drawing-film-ecommerce-facial-expression-png-clipart.jpg" alt="Avatar Upload" 
                />
                <p><?php  echo  $_SESSION['firstname'].'  '.$_SESSION['Lastname']?></p>
            </div>
            
            <!-- POST METHOD -->
            <form action="<?php echo URLROOT.'/main/post'?>" method="POST" runat="server" class="mb-10" 
            enctype="multipart/form-data">
            <div class="relative z-0 mb-6 w-full group mt-10">
                <input type="text" name="post_name" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    tell your travel experience</label>
            
            </div>

            <!-- PHOTO CONTAINER -->
            <div class="photo-container flex justify-center" id="photoContainer">
                <img src="" alt="" class="bg-slate-500 w-60" id="img">
            </div> 

            
                <div class="buttons flex justify-end">
                    <label class="cursor-pointer mt-6">
                    <span class="p-2 bg-sky-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-95 transition-transform mx-1 flex p-5" >
                    <i class="fa-solid fa-image mt-1 mr-2"></i>Image</span>
                    <input type='file' class="hidden" :multiple="multiple" :accept="accept" name="images" onchange="readURL(this);"/>
                    </label>

                    <label class="cursor-pointer mt-6">
                    <span class="p-2 bg-sky-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-95 transition-transform mx-1 flex p-5" >
                    <i class="fa-solid fa-arrow-up-from-bracket mr-2"></i>upload</span>
                    <input type='submit' class="hidden" :multiple="multiple" :accept="accept" name="images" />
                    </label>

                </div>
            </form>
   
        </div>
         <!-- POST CONTAINER/ Main Post-->
         <?php foreach($data['post'] as $i => $posts):?>
            
            <div class="container shadow-lg p-10 w-96">
                    <div class="flex justify-between items-center">
                        <div class="left-post flex items-center">
                        <img class="w-12 rounded-full object-cover object-center" src="https://i1.pngguru.com/preview/137/834/449/cartoon-cartoon-character-avatar-drawing-film-ecommerce-facial-expression-png-clipart.jpg" alt="Avatar Upload" 
                                 />
                        <p><?php  echo $posts->first_name.'  '.$posts->last_name?></p>
                        </div>

                        <div class="right-post">
                        <!-- IF the post is by the login user show this -->
                        <?php if( $_SESSION['user_id'] === $posts->id):?>
                            <span class="options">
                                <ul class="flex" id="postoption">
                                    <li class="hover:text-sky-600 p-1">
                                        <a href="<?php echo URLROOT?>/main/edit/<?php echo $posts->postID?>">
                                            <i class="fa-solid fa-file-pen text-slate-400 hover:text-sky-400"></i>
                                        </a>
                                    </li>
                                    <form action="<?php echo URLROOT?>/main/delete/<?php echo $posts->postID?>">
                                        <li class="hover:text-sky-600 p-1">
                                            <button type="submit">
                                                <i class="fa-solid fa-trash text-slate-400 hover:text-sky-400"></i>
                                            </button>
                                        </li>
                                    </form>
                                    
                                </ul>
                            </span>
                        <?php else :?>

                        <?php endif?>
                        </div>
                    </div>
                    <small class="text-slate-400 mb-10 border border-b-2 border-slate-200"><?php echo $posts->created_at?></small>
                    <div class="description">
                        <h2 class="text-2xl">
                            <?php echo $posts->description?>
                        </h2>
                    </div>
                    <div class="photo-container">
                        <img src="<?php echo $posts->image?>" alt="">
                    </div>
                    <div class="buttons">
                        <ul class="flex justify-between mt-5 border-y-2 border-slate-300 p-2">
                            <li>
                                <i class="fa-solid fa-thumbs-up text-slate-400 text-2xl hover:text-sky-600 cursor-pointer"></i>
                            </li>

                            <li>
                                <i class="fa-solid fa-comment text-slate-400 text-2xl hover:text-sky-600"></i>
                            </li>

                            <li>
                                <a href="<?php echo URLROOT?>/main/show/<?php echo $posts->postID?>">
                                    <i class="fa-solid fa-eye text-slate-400 text-2xl hover:text-sky-600"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php endforeach?>
    </div>
    
  </div>

 

  <div class="hidden">
  <?php require_once APPROOT . '/views/inc/footer.php'; ?>
  </div>