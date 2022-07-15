<?php require_once APPROOT .'/views/inc/header.php';?>

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

             <a href="#">Home</a>
             <a href="#">About</a>
             <a href="#"> Doc.</a>
            </div>
        </div>
        </div>

      

    <div class="wrapper hidden self-center text-lg md:block">

      <ul class="flex space-x-6">
        <li class="active py-4 px-3 hover:text-gray-200">
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
    <div class="grid gap-2 md:flex">
        <div class="img flex">
        <img src="https://i.pinimg.com/originals/e3/1b/75/e31b752875679b64fce009922f9f0dda.gif" alt="">
        </div>
       <div class="title self-center ">
             <h1 class="text-5xl font-medium mb-2">Travel Share</h1>
             <p class="mb-5">
                A experience that is worth sharing, Help others discover new places and have a new experience
                through your stories
             </p>
             <div class="button flex">
                <a href="#" class="p-4 text-white bg-sky-400 rounded mr-3 shadow-lg">Login</a>
                <a href="#" class="p-4 text-slate-500 bg-emerald-200 rounded shadow-lg">Sign up</a>
             </div>
       </div>

    </div>
</div>

<!-- Featured list -->
<section id="features">
    <!-- Why share Travel -->
    <div class="container flex flex-col mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row">
        <div class="flex flex-col space-y-12 md:w-1/2">
            <h2 class="max-w-md text-4xl font-bold text-center md:text-left">
                Why share your travel experience?
            </h2>
            <p class="max-w-sm text-center md:text-left">
                sharing travels creates memories and help others discover a
                place that they can enjoy too with the help of your shared travel
                experience.
            </p>
        </div>

         <!-- Number List -->
    <div class="flex flex-col space-y-8 md:w-1/2">
        <!-- list 1 -->
        <div class="flex flex-col space-y-3 md:space-y-3 md:space-x-6 md:flex-row">
            <!-- Haeading -->
            <div class="rounded-l-full bg-sky-500 md:bg-transparent">
                <div class="flex items-center space-x-2">
                    <div class="px-4 py-2 text-white rounded-full md:py-1 bg-sky-600">
                        01
                    </div>
                    <h3 class="text-base font-bold text-white md:mb-4 md:hidden ">
                        Moments and memories is meant to be shared
                    </h3>
                </div>
            </div>
            <div>
                <h3 class="hidden mb-4 text-lg font-bold md:block">
                Moments and memories is meant to be shared
                </h3>
                <p>
                When you travel, it is easy to devote your attention to all the major landmarks like the Louvre and the Eiffel Tower.
                 Don’t forget the accordion player by that crepe place you love.
                </p>
            </div>
        </div>

         <!-- list 1 -->
         <div class="flex flex-col space-y-3 md:space-y-3 md:space-x-6 md:flex-row">
            <!-- Haeading -->
            <div class="rounded-l-full bg-sky-500 md:bg-transparent">
                <div class="flex items-center space-x-2">
                    <div class="px-4 py-2 text-white rounded-full md:py-1 bg-sky-600">
                        02
                    </div>
                    <!-- Text on small screen -->
                    <h3 class="text-base font-bold text-white md:mb-4 md:hidden ">
                        New Discoveries and Experience
                    </h3>
                </div>
            </div>
            <div>
                <!-- text on large screen -->
                <h3 class="hidden mb-4 text-lg font-bold md:block">
                    New Discoveries and Experience
                </h3>

                <p>
                This seems like a given, but it is amazing how many people get caught up with following an itinerary
                or capturing everything on camera that they actually miss out on the experience itself!.
                Don’t overlook the little surprises, the subtle gifts, and the impromptu moments that can mean more than the schedule.
                </p>

            </div>
        </div>

         <!-- list 1 -->
         <div class="flex flex-col space-y-3 md:space-y-3 md:space-x-6 md:flex-row">
            <!-- Haeading -->
            <div class="rounded-l-full bg-sky-500 md:bg-transparent">
                <div class="flex items-center space-x-2">
                    <div class="px-4 py-2 text-white rounded-full md:py-1 bg-sky-600">
                        03
                    </div>
                    <h3 class="text-base font-bold text-white md:mb-4 md:hidden ">
                        Personal Growth and Self Reflect
                    </h3>
                </div>
            </div>
            <div>
                <h3 class="hidden mb-4 text-lg font-bold md:block">
                        Personal Growth and Self Reflect
                </h3>
                <p>
                Travel has a way of teaching you about the world and yourself. Few experiences offer the chance for self-discovery the way traveling does. Take time before, during, and after your trip 
                to process your thoughts and feelings toward the experience and yourself.
                </p>
            </div>
        </div>
    </div>
</section>
    </div>

    <!-- Documentary section -->
    <div class="container mx-auto text-center mt-36">
        <h2 class="text-4xl">Learn about the Production</h2>
    </div>

    <div class="flex flex-col justify-between mt-36 md:flex-row">
        <div class="left mb-10">
            <img src="https://static.wixstatic.com/media/c6ba6c_377676e7db5c4b58ac33dfe0f985bfe0~mv2.gif" alt="">
        </div>

        <div class=" px-5 mx-auto  text-center">
            <!-- Developer Card -->
            <div class="flex flex-col  md:flex-row md:space-x-6">
                
                <!-- Developer -->
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-slate-200 md:w-1/3">
                    <img src="https://cdn-icons-png.flaticon.com/512/1154/1154473.png" alt="" 
                    class="w-16 -mt-14">
                    <h5 class="text-lg font-bold">Harvy Gascon</h5>
                    <p class="text-sm text-slate-600">
                        "Hi i am Harvy Gascon the Developer of Travel Share
                        i am pleased that you see my work and i made this done
                        please click the documentary below to see how i made this"
                    </p>
                    <a href="#" class="p-4 text-white bg-sky-400 rounded mr-3 shadow-lg">See Docs</a>
                </div>
            </div>
        </div>
        
    </div>


<?php require_once APPROOT .'/views/inc/footer.php';?>