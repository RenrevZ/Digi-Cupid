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
                        <h2 class="text-2xl ">
                            <?php echo $data['posts']->description?>
                        </h2>
                    </div>
                    <div class="photo-container">
                        <img src="../<?php echo $data['posts']->image?>" alt="">
                    </div>
                    <div class="buttons">
                        <ul class="flex justify-between mt-5 border-y-2 border-slate-300 p-2">
                            <li>
                                <i class="fa-solid fa-thumbs-up text-slate-400 text-2xl hover:text-sky-600"></i>
                            </li>

                            <li>
                                <i class="fa-solid fa-comment text-slate-400 text-2xl hover:text-sky-600"></i>
                            </li>

                            <li>
                                <a href="<?php echo URLROOT?>/main/show/<?php echo $data['posts']->postID?>">
                                    <i class="fa-solid fa-eye text-slate-400 text-2xl hover:text-sky-600"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Comment -->
                    <form action="<?php echo URLROOT?>/main/comment/<?php echo $data['posts']->id?>" method="POST" class="mt-2 mb-5">
                        <label for="chat" class="sr-only">Comment</label>
                        <div class="flex items-center py-2 px-3 bg-gray-50 rounded-lg dark:bg-gray-700">
                            <textarea id="chat" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Comment..." name="comment"></textarea>
                                <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                                <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                <span class="sr-only">Send message</span>
                            </button>
                        </div>
                    </form>

                    <!-- Comments -->
                    <?php foreach($data['comments'] as $comments):?>
                    <div id="messages" class="flex flex-col space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">
                            <div class="chat-message">
                                <small><?php echo $comments->username?></small>
                                <div class="flex items-end">
                                    <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                                    <div><span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600"><?php echo $comments->comment?></span></div>
                                    </div>
                                    <img src="https://i1.pngguru.com/preview/137/834/449/cartoon-cartoon-character-avatar-drawing-film-ecommerce-facial-expression-png-clipart.jpg" alt="My profile" class="w-6 h-6 rounded-full order-1">
                                </div>
                            </div>
                    <?php endforeach?>
                    </div>
            </div>
    
  </div>

 

  <div class="hidden">
  <?php require_once APPROOT . '/views/inc/footer.php'; ?>
  </div>