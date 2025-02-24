<h2>第一次購物</h2>
<a href="?do=reg">
    <img src="../icon/0413.jpg" alt="">
</a>
<!--                     <?php echo serialize([1, 2, 3, 4, 5]); ?> -->
<h2>會員登入</h2>
<table class="all">
    <tr>
        <td class="tt ct">
            帳號
        </td>
        <td class="pp">
            <input type="text" name="acc" id="acc">
        </td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">驗證碼</td>
        <td class="pp">
            <div style="display:flex">
                <div
                    style="vertical-align:middle;display:flex;width:180px;height:55px;justify-content:center;align-items:center;background-color:white">
                    <img src="" alt="" id="chapcha">
                </div>
                <button onclick="getChapcha()">換一組驗證碼</button>
            </div>
            <input type="text" name="ans" id="ans">
        </td>
    </tr>
</table>

<div class="ct">
    <button onclick="login()">
        確認
    </button>
</div>

<script>
getChapcha();

function getChapcha() {
    $.get("./api/code.php", function(res) {
        $("#chapcha").attr("src", res)
    })
}

function login() {
    let ans = $("#ans").val()
    $.get("./api/chk_ans.php", {
        ans
    }, function(res) {
        console.log('res', res);
        console.log('ans', ans);

        if (parseInt(res)) {
            $.get("api/chk_pw.php", {
                acc: $("#acc").val(),
                pw: $("#pw").val(),
                table: "Mem"
            }, function(res) {
                if (parseInt(res)) {
                    location.href = "index.php"
                } else {
                    alert("帳號或密碼錯誤")
                    getChapcha();
                }
            })
        } else {
            alert("驗證碼錯誤，請重新輸入")
            getChapcha();
        }
    })
}
</script>