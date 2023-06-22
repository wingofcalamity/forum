$(function () {
    $(".longlist").on("click", function(){
        $(this).find(".longlist_content").slideToggle();
    });
});