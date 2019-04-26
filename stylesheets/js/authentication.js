// 首頁
$(".container__item--round").on("click", function () {
    var id = $(".container__item--round").index($(this));

    if (id == 2 || id == 4) {
        var c = confirm("尚未登入，是否登入？");
        if (c) {
            location.href = "./login.php";
        } else {
            location.href = "./index.php";
        }
    }
});