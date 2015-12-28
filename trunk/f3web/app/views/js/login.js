$(document).ready(function() {
	/* 先停止讀取狀態 */
    $('#Loading').hide();

    /* 填寫好 email 欄位，按下 Tab 會進行讀取 */
    $('#email').blur(function(){
    /* 讀取 email 欄位 */
    var a = $("#email").val();
    /* email 正規語法 */
    var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
    /* 簡易驗證 email */
    if(filter.test(a)){
        /* 讀取狀態 */
        $('#Loading').show();
        /* AJAX 比對資料庫 */
        $.post("http://localhost/f3web/admin/check_login", {
            email: $('#email').val()
        }, function(response){
            /* 驗證後讀取 reponse 狀態 */
            $('#Loading').hide();
            $('#msg').html(escape(response));
        });
        return false;
    }
    });
});