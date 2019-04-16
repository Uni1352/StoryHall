$(document).ready(function () {
    $("#tabs li").eq(0).addClass("menu__item--selected");

    for (var i = 1; i < $("#tabs li").length; i++) {
        $("#sidebar").siblings().eq(i).hide();
    }
});

$("#tabs").on("click", "li", function () {
    var index = $("#tabs li").index($(this));

    if (!$(this).hasClass("menu__item--selected")) {
        // 選擇的標籤
        $(this).addClass("menu__item--selected");
        $(this).siblings().removeClass("menu__item--selected");

        if ($("#sidebar").siblings().eq(index).is(":hidden")) {
            // 顯示標籤內容
            if ($("#tabs li").length == 3) {
                $("#sidebar").siblings().eq(index).fadeIn("slow");
            } else {
                $("#sidebar").siblings().eq(index).show();
            }

            // 隱藏其他標籤內容
            for (var i = 0; i < $("#tabs li").length; i++) {
                if (i != index) {
                    $("#sidebar").siblings().eq(i).hide();
                }
            }
        }
    }
});