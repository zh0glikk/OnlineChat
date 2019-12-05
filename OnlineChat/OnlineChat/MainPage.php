<?php
    session_start();
?>

<!DOCTYPE html5>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Styles_MainPage.css" />
    <link rel="stylesheet" type="text/css" href="UI.css" />
    <link rel="shortcut icon" type="image/png" href="Img/SYNC.png" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script> 
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="validation.js"></script>
    <meta charset="utf-8" />

    <title>SyncChat</title>
</head>
<script type="text/javascript">
    $(document).ready (function(){
        $("#submitBtn1").bind("click",function(){
            var xhr = $.ajax({
                url: "registration.php", 
                type: "POST",           
                data: ({username: $("#loginReg").val(), password: $("#passInput").val() }), 
                dataType: "html",   
                beforeSend: function () {
                                var estr = document.getElementById("loginReg");
                                var est = document.getElementById("passInput");
                                var e = new RegExp("[0-9A-Za-z]");
                                var t = e.test(estr);

                                if (!e.test(estr.value) && (estr.value.length!=0)) {
                                    alert("Wrong login");
                                    xhr.abort();
                                }
                                else    {
                                    if (!e.test(est.value) && (est.value.length!=0)) {
                                        alert("Wrong password");
                                        xhr.abort();
                                    }

                                }    
                                    
                            },               
                success: function(data){
                        alert(data);
                        if(data==="You've registered")
                            OnClickSigningIn();
                                   },
                complete: function(data){
                    $("#loginReg").val("");
                    $("#passInput").val("");
                    
                }

            });
        });
    });



    $(document).ready (function(){
        $("#submitBtn2").bind("click",function(){
            var online = "online"
            var xhr = $.ajax({
                url: "login.php", 
                type: "POST",           
                data: ({username: $("#loginInp").val(), password: $("#passInp").val(), online: online }), 
                dataType: "html",   
                beforeSend: function () {
                                
                            },               
                success: function(data){    
                    if(data==="Fail")
                              alert("Wrong login or password!");  
                    else
                    {
                                // alert("Hello");
                                document.getElementById("chat_nameId").textContent=data;
                                ChangeBtn();
                                HideBtn();
                                OnClickChat();
                                ScrollDown();

                    }
                                
                                   },
                complete: function(data){
                    $("#loginInp").val("");
                    $("#passInp").val("");
                    
                }

            });
        });
    });

    $(document).ready (function(){
        $("#logOutBtn").bind("click",function(){
            var userName = document.getElementById("chat_nameId").textContent;
            var online= "offline";
            var xhr = $.ajax({
                url: "logout.php", 
                type: "POST",         
                data: ({online: online, userName: userName }),  
                dataType: "html",   
                beforeSend: function () {
                             
                            },               
                success: function(data){
                                document.getElementById("chat_nameId").textContent='';
                                OnClickSigningIn();
                                HideBtn2();
                                   }
            });
        });
    });


    $(document).ready (function(){
        $("#done").bind("click",function(){
            var userName = document.getElementById("chat_nameId").textContent;
            var xhr = $.ajax({
                url: "message.php", 
                type: "POST",  
                data: ({message: $("#yourMessage").val(), userName: userName}),         
                dataType: "html",   
                beforeSend: function () {
                            var estr = document.getElementById("yourMessage");
                            if(estr.value.length<1)
                                xhr.abort();
                            },               
                success: function(data){
                            $("#yourMessage").val("");
                            $("#messageField").append(data);
                            ScrollDown();
                                   }
            });
        });
    });


function ScrollDown(){
    document.getElementById("messageField").scrollTop = document.getElementById("messageField").scrollHeight;
}

function AmIOnline(){
    var xhr = $.ajax({
                url:"onlinecheck.php", 
                type: "POST",          
                dataType: "html",   
                beforeSend: function () {
                            
                            },               
                success: function(data){
                            if(data!="fail")
                            {
                                document.getElementById("chat_nameId").textContent=data;
                                ChangeBtn();
                                HideBtn();
                                OnClickChat();
                                ScrollDown();
                            }
                                   }
            });
}




function AddLastMsg(){
    var xhr = $.ajax({
                url:"lastMessage.php", 
                type: "POST",          
                dataType: "html",   
                beforeSend: function () {
                            },               
                success: function(data){           
                        if(data!="Fail") 
                        {
                            $("#messageField").append(data);
                            ScrollDown();
                        }
                                   }
            });    
}

setInterval(AddLastMsg,1000);


function SendComment(e) {
    e = e || window.event;
    if (e.keyCode == 13) {
        document.getElementById("done").click();
    };
};

function SignInEnter(e) {
    e = e || window.event;
    if (e.keyCode == 13) {
        // document.getElementById("done").click();
        document.getElementById("submitBtn2").click();
    };
};



</script>


<body onload="OnClickSigningIn(), ChangeTheme(), HideBtn2(),AmIOnline()">
        <header>
            <div class="header_lp" id="header_lp">
                <div class="header_name" id="header_nameId">Sync Chat</div>
            </div>

            <div class="header_rp" id="header_rp">
                <label><input type="checkbox" id="rightLogoid" onchange="ChangeTheme()"><img class="header_img" id="rightLogo" src="Img/sph.png"  /></label>
                <div class="chat_name" id="chat_nameId"></div>
            </div>

            <h1 class="header_name"></h1>
        </header>

        <article>
            <div class="friend_list" id="friend_list">

                   <div class="category-wrap" id="myButtons">
                        <button onclick="OnClickRegistration()">Registration</button>
                        <button onclick="OnClickSigningIn()" id="signInBtn">Sign In</button>
                        <button onclick="ChangeBtn2()" id="logOutBtn">Log Out</button>
                        <button onclick="OnClickChat(),ScrollDown()" id="chatBtn">Chat</button>
                    </div>




                    <div class="onlineField" id="onlineField">
                        <center style="font-family: CrazyFont"><h1>USERS</h1></center>
                        <?php
                            include 'online.php';
                            
                            while($row = mysqli_fetch_assoc($result)) :
                        ?>
                        
                        <div style="margin-left: 10%;font-family: Verdana;  ">
                            <?=$row['username']?>                            
                        </div>
                       <?php endwhile ?>
                            
                    </div>

            </div>
            <div class="chat_panel" id="chat_panel">
                
                <center><div class="registrationField stretchRight" id="registrationField">
                    <h1 class="registration" id="registration">REGISTRATION</h1>
                    <!-- <form> -->
	                    <input class="Belyash" type="text" placeholder="Login" id="loginReg" name="login" required pattern="[A-Za-zА-Яа-яЁё]+$"></br></br>

	                    <input class="Belyash" type="password" placeholder="Password" id="passInput" name="password" required></br></br>
	                    	<label><input type="checkbox" class="checkboxSharingan1 sharingan" id="sharingan" name="" onchange="ChangeSharingan()">
	                    		<img src="Img/sharinganoff.png" class="sharImg" id="sharImg1"></label>

	                    <button class="submitButton" id="submitBtn1" >Submit</button>
                </div></center>
                <center><div class="signInField stretchRight" id="signInField">
                    <h1 class="registration" id="registration2">LOGIN</h1>

                    <input class="Belyash" id="loginInp" type="text" placeholder="Login"></br></br>
                    <input class="Belyash" type="password" id="passInp" placeholder="Password" onkeydown="SignInEnter(event)"></br></br>
                    <button class="submitButton" id="submitBtn2">Sing in</button>

                </div></center>

                
                <div class="messageField stretchRight " id="messageField">
                    <?php
                        include 'messageHistory.php';    
                        while($row = mysqli_fetch_assoc($result)) : 
                        ?>

                            <div style="margin-left:5%; font-family: Verdana; height: 14%;" >
                                <span style="color:#34b1eb; "><?=$row['name']?></span>
                                <p style="color:black"><?=$row['message']?></p>
                            </div>
                            <hr>

                        <?php endwhile ?>
                </div>
                

                <div class="borderChat" id="borderChat">                    
                
	                <div id="chatSending" >
		                <div class="sendMessage " >
		                    <input type="text" class="sendMessageInput" placeholder="Sync your message" id="yourMessage" onkeydown="SendComment(event)">
		                </div>
		                	<input class="send" type="button" id="done" value="Send a message" >
	            	</div>
        		</div>

        </article>
    <footer>
        
    </footer>



</body>



</html>