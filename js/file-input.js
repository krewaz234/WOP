// Скрипт реализует отображение названия выбранного файла в bootstrap custom-file-label
$(".custom-file .custom-file-input").ready(function() {
    $(".custom-file .custom-file-input").change(function(e) {
        $(".custom-file .custom-file-label").text(e.target.files[0] != undefined ? e.target.files[0].name : "Сменить");
    });
});
