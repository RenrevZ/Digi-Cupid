<?php require_once APPROOT . '/views/inc/header.php'; ?>

<div class="container mx-auto p-5 md:transition-all">
    <div class="grid gap-2 md:flex">
        <div class="img flex">
            <img src="https://i.pinimg.com/originals/e3/1b/75/e31b752875679b64fce009922f9f0dda.gif" alt="">
        </div>
        <div class="title self-center ">
            <h1 class="text-5xl font-medium mb-2"><?php echo $data['title'];?></h1>
            <p class="mb-5">
                 <?php echo $data['subtitle'];?>
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
<div class="container mx-auto">

    <div class="flex flex-col justify-between mt-36 md:flex-row mb-36">

        <div class="left mb-10 mr-60 items-center ml-10">
            <img src="https://static.wixstatic.com/media/c6ba6c_377676e7db5c4b58ac33dfe0f985bfe0~mv2.gif" alt="" 
            class="w-96 ">
            <p class="text-sm text-slate-600">
                "This site was was build using PHP OOP and MVC structure "
            </p>
        </div>

        <div class=" px-5 mx-auto text-center">
            <!-- Developer Card -->
            <div class="flex flex-col  md:flex-row">

                <!-- Developer -->
                <div class="flex flex-col items-center p-6 space-y-2 rounded-lg bg-slate-200 md:w-96">
                    <img src="https://cdn-icons-png.flaticon.com/512/1154/1154473.png" alt="" class="w-16 -mt-14">
                    <h5 class="text-lg font-bold">Harvy Gascon</h5>
                    <p class="text-md text-slate-600">
                        "Hi i am Harvy Gascon the Developer of Travel Share
                        i am pleased that you see my work and i made this done
                        please click the documentary below to see how i made this"
                    </p>
                    <a href="#" class="p-4 text-white bg-sky-400 rounded mr-3 shadow-lg w-80 ml-2">See Docs</a>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Footer -->
<div class="wrapper bg-sky-300">
    <div class="container mx-auto flex p-3 justify-between">
        <div class="wrapper flex self-center text-2xl font-medium text-white">
                <h1>Travel share</h1>
                <img src="https://cdn-icons-png.flaticon.com/512/189/189676.png" alt="" class="ml-2 w-8" />
        </div>

        <div class="self-center text-white">
            <p>&copy;Harvy M. Gascon 2022</p>
        </div>
    </div>
</div>
    <?php require_once APPROOT . '/views/inc/footer.php'; ?>