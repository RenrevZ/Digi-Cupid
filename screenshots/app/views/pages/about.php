<?php require_once APPROOT .'/views/inc/header.php';?>

<div class="container mx-auto flex flex-col items-center p-3 mt-3 md:transition-all">
     <!-- Header Title -->
        <h2 class="text-4xl mt-10">
            <?php echo $data['title']?>
        </h2>
    <div class="wrapper grid  gap-2 mt-20 md:grid-cols-2">
        <div class="left ">
             <img src="https://cdn.dribbble.com/users/206755/screenshots/4927172/error_404_animation_800x600.gif" 
             alt="">
        </div>

        <div class="right md:mt-20">
             <h2 class="text-2xl mb-10">
                    Connecting People Around the world
                </h2>
            <p class="text-md ">
              <?php echo $data['subtitle']?>
            </p>
        </div>
      
    </div>
</div>

<div class="wrapper  max-w-full mt-20">
    <div class="container mx-auto grid md:grid-cols-2">
            <div class="left-col mx-auto">
                <h2 class="text-2xl">
                    Provide Discoveries and New Explorations
                </h2>
                <p class="mt-10">
                    By connecting people stories and experience around the world,
                    we will see and explore places that never seen before. Distance
                    isn't a barrier anymore, as we are seeing and diving the beauty of the 
                    world by just sharing
                </p>
            </div>
            <div class="rigth-col md:-mt-36">
                <img src="https://cdn.dribbble.com/users/925704/screenshots/6163362/explore_animation.gif" alt=""
                class="">
            </div>
    </div>
</div>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>