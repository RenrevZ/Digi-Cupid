<?php require_once APPROOT .'/views/inc/header.php';?>

<nav class="wrapper flex h-16 bg-sky-400 text-white">
  <div class="container mx-auto flex justify-between">
    <div class="wrapper flex self-center text-2xl font-medium">
      <h1>Travel share</h1>
      <img src="https://cdn-icons-png.flaticon.com/512/189/189676.png" alt="" class="ml-2 w-8" />
    </div>

    <div class="wrapper hidden self-center text-lg md:block">
      <ul class="flex space-x-6">
        <li class="active py-4 px-2 hover:text-gray-200">
          <a href="#">Home</a>
        </li>
        <li class="p-4 hover:text-gray-200">
          <a href="#">About</a>
        </li>
        <li class="p-4 hover:text-gray-200">
          <a href="#"> Doc.</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mx-auto p-5">
    <div class="grid gap-2 grid-cols-2">
        <div class="img flex">
        <img src="https://i.pinimg.com/originals/e3/1b/75/e31b752875679b64fce009922f9f0dda.gif" alt="">
        </div>
       <div class="title mx-auto">
             <h1 class="text-3xl font-medium">Travel Share</h1>
       </div>
       
    </div>
</div>

<?php require_once APPROOT .'/views/inc/footer.php';?>