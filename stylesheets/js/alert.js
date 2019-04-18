// 導覽列
$("nav").on("click", "a", function () {
    var index = $("nav a").index($(this));

    if (index == 2) {
        var c = confirm("尚未登入，是否登入？");
        if (c) {
            location.href = "./login.html";
        }
    }
});