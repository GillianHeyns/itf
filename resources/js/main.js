console.log('Enkele belangrijke features inladen...');

// * bij elk verplicht onderdeel in een formulier
// $(function () {
//     $('[required]').each(function () {
//         $(this).closest('.form-group')
//             .find('label')
//             .append('<sup class="text-danger mx-1">*</sup>');
//     });
// });

//device type voor image hover homepage
if ($(window).width() < 1200) {
    //console.log('smartphone')
    //effecten van image verwijderen
    $('.groot').remove();
    $('.klein_scherm').css('display', 'inline');
    $('.groot_scherm').css('display', 'none');
}

//testimonial
if ($(window).width() < 768) {
    $('.call-to-action').css('display', 'none');
    $('.bigSize').css('display', 'none');
}

if ($(window).width() >= 768) {
    $('.smallSize').css('display', 'none');
}

// * bij elk verplicht onderdeel in een formulier
$(function () {
    $('[required]').each(function () {
        $(this).closest('.form-group')
            .find('label')
            .append('<sup class="text-danger mx-1">*</sup>');
    });
});

//device type voor image hover homepage
if ($(window).width() < 1200) {
    //console.log('smartphone')
    //effecten van image verwijderen
    $('.groot').remove();
    $('.klein_scherm').css('display', 'inline');
    $('.groot_scherm').css('display', 'none');
}

//testimonial
if ($(window).width() < 768) {
    $('.call-to-action').css('display', 'none');
    $('.bigSize').css('display', 'none');
}

if ($(window).width() > 768) {
    $('.smallSize').css('display', 'none');
}

//hover footer social media
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

$('.stop').click(function () {
    //console.log('close werkt');
    var vid = $('#video').get(0);
    vid.pause();
});

$('#overlay').click(function () {
    //console.log('klikken werkt');
    window.open('https://discord.itf.to/');
});
