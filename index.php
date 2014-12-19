<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>御坂网络树洞</title>
<script src="http://libs.baidu.com/jquery/2.0.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="index_style.css">
</head>
<body>

<!--
HTML 代码
-->
<div class="container">
    <div class="misaka">
        <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;..,:,,,:,,,:...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,;0MBMBMBMBMBMBBBMBMBMBMX&nbsp;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:uBMMKORH;3u1UFUaUF1Uu11aJ&nbsp;OJ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.xSMBRRMMWOBOOMMBBBMBMBMBRMRMMBr<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JEPJ2MBMBMBMBMBMBMBMBMBBBMBBBMBM&nbsp;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GWuHZJOMBMBMBMBMBMBMBMBMBMBMBMBBB&nbsp;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rx7iBGMKKMBMBMBMBBBOPSLcXs3MBMBMBP&nbsp;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i;:.GBE,&nbsp;;,:c2:r7irrLrr2Ji:2i7&nbsp;J7Jr<br>
        &nbsp;&nbsp;&nbsp;&nbsp;.DS3LBLLruZraRuvSr7SK7UMv0&nbsp;:S:7&nbsp;;BsJ<br>
        &nbsp;&nbsp;&nbsp;&nbsp;:EuLLRBJxOGUXcxD1HDFcMB:ir&nbsp;ru,r&nbsp;;Bc:<br>
        &nbsp;&nbsp;&nbsp;&nbsp;:ZxL7MME3BcP;;PaOES7s1,.:&nbsp;:Gsr7.3B,&nbsp;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;;03cLMBxEMr.KMBBBR,c,&nbsp;.,.&nbsp;;MBR1DB7&nbsp;&nbsp;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;;OxLLB:&nbsp;2OP&nbsp;&nbsp;&nbsp;rMO;&nbsp;&nbsp;...,..&nbsp;ZM;&nbsp;3Z&nbsp;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;7OsssRB;....&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,.,,,.;,.&nbsp;&nbsp;&nbsp;&nbsp;P&nbsp;&nbsp;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;sELacDMBPJr.&nbsp;....,,,,,.,:,..&nbsp;&nbsp;,W&nbsp;&nbsp;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;SJLWLPRBBMBB7&nbsp;&nbsp;&nbsp;..,.,,::..&nbsp;&nbsp;&nbsp;r0G.&nbsp;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;&nbsp;LWsLBJSOBMBMBBH::..&nbsp;....&nbsp;&nbsp;&nbsp;:1BBDRi&nbsp;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;v7U7KRX3WBBMBMBU7cc7i:::,:XMBRuMW.0&nbsp;&nbsp;&nbsp;<br>
        &nbsp;;&nbsp;:aDMRMZR7MBL,&nbsp;;rLLsLscWMBMBM&nbsp;,BB&nbsp;,;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;.MXu;MDJBi:L..:,:::;rrvs.rBFL&nbsp;KD;.&nbsp;&nbsp;&nbsp;&nbsp;<br>
        &nbsp;:K:&nbsp;&nbsp;cB&nbsp;rMJ&nbsp;&nbsp;,:.,:;:,,;i:::,:.&nbsp;r&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        &nbsp;.&nbsp;&nbsp;&nbsp;.O;.7L.:.,::.&nbsp;&nbsp;.::.::rv:r7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;&nbsp;.::&nbsp;&nbsp;...:::,,:;:.;GL.&nbsp;&nbsp;&nbsp;..:U:r&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;,:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;..::;:::::,:SGU,&nbsp;&nbsp;&nbsp;&nbsp;1L:7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;..;:;:,,:,.::xEs,&nbsp;&nbsp;:0:Lc&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;;&nbsp;.&nbsp;.&nbsp;.&nbsp;&nbsp;&nbsp;.::::::::.::.:JGU&nbsp;:Z::a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        &nbsp;ir&nbsp;&nbsp;.&nbsp;.&nbsp;&nbsp;&nbsp;.&nbsp;&nbsp;;:,r::::,:;..:sE0K.,;r&nbsp;&nbsp;&nbsp;&nbsp;<br>
        ,:u.&nbsp;.....&nbsp;.:&nbsp;i1:r:::::,;::..,xr,.;L7&nbsp;&nbsp;&nbsp;<br>
        &nbsp;.&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:.&nbsp;&nbsp;.&nbsp;17.&nbsp;.....,:...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:vJ&nbsp;&nbsp;&nbsp;<br>
        <br>
    </div>

    <div class="title">御坂网络树洞<sup>v0.3.0</sup></div>
    <form action="Verify.php" method="POST" onsubmit="return tou_submit.call(this)" >
        <div class="send_line">
    <div class="send_number">
    <?php
        $counter=1;
            if(file_exists("mycounter.txt")){
            $fp=fopen("mycounter.txt","r");
            $counter=fgets($fp,9);
            $counter++;
            fclose($fp);
        }
        echo "#御坂";
        echo $counter;
        echo "号#";
    ?>
    </div>
    <input type="text" class="txt_input" name="content" autocomplete="off" placeholder="请输入要发送的内容">
    <input type="submit" class="btn_submit" value="发送">
    </div>

    <div class="clear"></div>
    <div class="send_line2">
        <div class="emotion">
            <div class= "emotion_line" ><input type="checkbox" class="ckb_e" name="emotion" id="emotion" value="true"> 御坂口癖</div>
            <div class="emotion_on" id="emotion_on" >：御坂御坂<input type="text" class="emotion_input" name="emotion_input" autocomplete="off" value="" placeholder="面无表情">地说</div>
        </div>
        发送平台:
        <input type="checkbox" class="ckb" name="renren" value="true" checked=true><a class="ckbl" href="http://page.renren.com/602113039">人人树洞</a>
        <input type="checkbox" class="ckb" name="weibo" value="true" checked=true><a class="ckbl" href="http://weibo.com/5404708318">微博树洞</a> 
    </div>

    </form>

    <div class="clear"></div>
    <div class="foot">
        <a href="http://www.renren.com/577100256">作者人人</a> |
        <a href="http://weibo.com/1281094641">作者微博</a> |
        <a href="update.html">更新日志</a> |
        <a href="http://heckpsi.com">HeckPsi Lab</a><br>
    </div>

</div>

<div class= "baidu_tongji">
    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb9bdc8a3546a6db29495d9df0ca6ae8f' type='text/javascript'%3E%3C/script%3E"));
    </script>
</div>




<!--
JavaScript 脚本
-->
<script type='text/javascript' charset='utf-8' src='http://js.touclick.com/js.touclick?b=fa146590-139f-4080-8c6d-77a1f793ced0&pf=api&v=v2-2'></script>
    <script type="text/javascript">
        var is_checked = false; //表示是否验证成功
        function tou_submit()
        {
            if (is_checked === true)
            {
                return true;
            }
            else
            {
                window.TouClick.Start({
                    website_key: 'fa146590-139f-4080-8c6d-77a1f793ced0',
                    position_code: 0,//位置标记(范围：10<position_code<100 ,如不在此范围内,则为0)
                    args: { 'this_form': this },//事件onInit、onLoading、onLoaded、onSuccess、onFail、onError 的共有第一参数
                    captcha_style: { 'margin-left': '0px', 'margin-top': '0px' },//设置验证码外框的css样式
                    onSuccess: function (args, check_obj)
                    {
                        //check_obj = {'check_key':'','check_address':''} 二次验证口令check_key与二次验证地址check_address
                        is_checked = true;
                        //获取form对象
                        var this_form = args.this_form;
                        var hidden_input_key = document.createElement('input');
                        hidden_input_key.name = 'check_key';
                        hidden_input_key.value = check_obj.check_key;
                        hidden_input_key.type = 'hidden';
                        //将二次验证口令赋值到隐藏域
                        this_form.appendChild(hidden_input_key);
                        var hidden_input_address = document.createElement('input');
                        hidden_input_address.name = 'check_address';
                        hidden_input_address.value = check_obj.check_address;
                        hidden_input_address.type = 'hidden';
                        //将二次验证地址赋值到隐藏域
                        this_form.appendChild(hidden_input_address);
                        //再次执行 tou_submit 函数
                        this_form.submit();
                    },
                    onError: function (args)
                    {
                        //启用备用方案
                    }
                });
                return false;
            }
        }

        
    </script>

    <script type="text/javascript">
        $(document).ready(function(){

            $(".container").animate({
                opacity:'1',
                marginTop: '40px'
            },1000);

            $("#emotion").click(function(){
                $("#emotion_on").fadeToggle("fast");
            });

        });
    </script>


</body>
</html>