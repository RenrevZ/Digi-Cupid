<?php require_once APPROOT .'/views/inc/header.php';?>

<div class="container mx-auto flex flex-col items-center p-3 mt-3 md:transition-all">
     <!-- Header Title -->
        <h2 class="text-4xl mt-10">
            <?php echo $data['title']?>
        </h2>
    <div class="wrapper grid  gap-2 mt-20 md:grid-cols-2">
        <div class="left">
             <img src="https://hotelpartner-ym.com/wp-content/uploads/2020/12/hotelpartner-illustration-channel-analyses.svg" 
             alt="">
        </div>

        <div class="right">
            <p class="text-md ">
              <?php echo $data['subtitle']?>
            </p>
        </div>
      
    </div>
</div>

<div class="wrapper grid grid-cols-2">
    <div class="left-col">
        <h1 class="text-2xl">
            Travel Share helps discover and promote other
            places
        </h1>
    </div>
</div>

<?php require_once APPROOT .'/views/inc/footer.php';?>