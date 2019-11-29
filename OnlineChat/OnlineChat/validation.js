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
                                alert("Hello");
                                document.getElementById("chat_nameId").textContent=data;
                                ChangeBtn();
                                HideBtn();
                                OnClickChat();

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
                                alert("LOGGED OUT");
                                alert(data);
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
                        
                            },               
                success: function(data){
                            $("#yourMessage").val("");
                            alert(data);
                                   }
            });
        });
    });
