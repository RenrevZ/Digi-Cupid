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

// PHOTO PREVIEW
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function changeProfile(data){
    if (data.files && data.files[0]) {
        var read = new FileReader();

        read.onload = function (e) {
            $('#profile').attr('src', e.target.result);
        }

        read.readAsDataURL(data.files[0]);
    }
}

setTimeout(function() {
    $('#loginalert').fadeOut('fast');
}, 1000);


// POST OPTION
// $('#optionbtn').on('click',()=>{
//     $('#postoption').toggle('slide').removeClass('hidden')
// });


