$(document).ready(function () {
    $("body").on("click", ".list-inline-item .group-icon-item", function () {
        let $this = $(this), parent = $(this).parents('.list-inline-item');
        $('.list-inline-item').not(parent).removeClass('show-modal-header');
        parent.toggleClass('show-modal-header');
        $(".show-modal-header").length > 0 ? $(".modal-backdrop").addClass('in') : $(".modal-backdrop").removeClass('in')
    });
    $("body").on("click", ".js-backdrop", function () {
        $("body").removeClass('active-success overflow-hidden');
        $(this).removeClass('add-cart-mb')
        $('.list-inline-item').removeClass('show-modal-header');
        $(".results-seach").hide();
        $(this).removeClass('in')
    });
})