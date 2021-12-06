// filter projecten
$(function () {
    $("#portfolio-filters li").on("click", function () {
        var text = $(this).text();
        $('div[class*="filter"]').hide();
        if (text === "ALL") {
            $('div[class*="filter"]').show();
        } else
            $(".filter-" + text.toLowerCase()).show();
    });
});
