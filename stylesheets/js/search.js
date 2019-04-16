// 選單內容
var date = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
    course = ["區塊鏈", "智能合約", "比特幣與挖礦", "選舉", "醫療", "國際貿易", "保險", "生產履歷"],
    score = ["90分以上", "80分以上", "70分以上", "60分以上", "60分以下"];

$("#condition").change(function () {
    var index = $("option:selected").index();

    // 清空 2nd 下拉選單
    $("#condition2").empty();
    $("#condition2").append("<option disabled selected></option>");
    // 根據 1st 選項決定 2nd 選單內容
    switch (index) {
        case 1:
            for (var i = 0; i < date.length; i++) {
                $("#condition2").append("<option value=\"" + (i + 1) + "\">" + date[i] + "</option>");
            }
            break;
        case 2:
            for (var j = 0; j < course.length; j++) {
                $("#condition2").append("<option value=\"" + (j + 1) + "\">" + course[j] + "</option>");
            }
            break;
        case 3:
            for (var k = 0; k < score.length; k++) {
                $("#condition2").append("<option value=\"" + (k + 1) + "\">" + score[k] + "</option>");
            }
            break;
    }
});