// create a active class on active links
if(window.location.href == 'http://localhost/TravelShare/pages/about'){
    $('#about').addClass('active');
    $('#home').removeClass('active');
    $('#login').removeClass('active');
}
if(window.location.href == 'http://localhost/TravelShare/forms/login'){
    $('#login').addClass('active');
    $('#home').removeClass('active');
    $('#about').removeClass('active');
}
if(window.location.href == 'http://localhost/TravelShare/forms/signup'){
    $('#login').removeClass('active');
    $('#home').removeClass('active');
    $('#about').removeClass('active');
}

console.log(window.location.href)
//button for hamburger menu
$('#hamburgermenu').on('click',()=>{
    $('#menuhidden').toggle('slide').css({
        "display":"flex",
        "flex-direction":"column"
    });
})