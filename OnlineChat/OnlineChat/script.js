function OnClickRegistration() {
  document.getElementById('registrationField').style.display='block';
    document.getElementById('messageField').style.display='none';
      document.getElementById('signInField').style.display='none';
      document.getElementById('chatSending').style.display='none';
}

function OnClickSigningIn() {
  document.getElementById('signInField').style.display='block';
  document.getElementById('registrationField').style.display='none';
    document.getElementById('messageField').style.display='none';
    document.getElementById('chatSending').style.display='none';
  
}

function OnClickChat() {
  document.getElementById('messageField').style.display='block';
  document.getElementById('registrationField').style.display='none';
    document.getElementById('signInField').style.display='none';
    document.getElementById('chatSending').style.display='block';
}



function ChangeSharingan() {
	var checkbox;

	checkbox= document.getElementById("sharingan");
	passInput= document.getElementById("passInput");


	if(checkbox.checked){	
		document.getElementById("sharImg1").src= "Img/sharinganOn.png";
		passInput.type="text";
	}
	else{
		document.getElementById("sharImg1").src= "Img/sharinganoff.png";
		passInput.type="password";
	}
}


function ChangeTheme() {
	var checkbox= document.getElementById("rightLogoid");
	var img = document.getElementById("rightLogo");


	if(checkbox.checked){	
		img.src= "Img/sharinganObito.png";
		 document.body.style.backgroundColor= "#424242";
		document.getElementById("header_lp").className = "header_lp2";
		document.getElementById("header_rp").className = "header_rp2";
		document.getElementById("header_nameId").className = "header_name2";
		document.getElementById("chat_nameId").className = "chat_name2";
		document.getElementById("friend_list").className = "friend_list2";
		document.getElementById("chat_panel").className = "chat_panel2";
		document.getElementById("myButtons").className = "category-wrap2";
		document.getElementById("borderChat").style.backgroundColor="black";
		document.getElementById("registration").className="registration2";
		document.getElementById("registration2").className="registration2";
		document.getElementById("submitBtn1").className="submitButton2";
		document.getElementById("submitBtn2").className="submitButton2";
		document.getElementById("loginReg").className="Belyash2";
		document.getElementById("passInput").className="Belyash2";
		document.getElementById("loginInp").className="Belyash2";
		document.getElementById("passInp").className="Belyash2";
		document.getElementById("done").className="send2";
		document.getElementById("yourMessage").className="sendMessageInput2";
		document.getElementById("onlineField").className="onlineField2";
		document.getElementById("messageField").className="messageField2 stretchRight";

		 

	}
	else{
		img.src= "Img/sph.png";
		document.body.style.backgroundColor="#e3f0ff";
		document.getElementById("header_lp").className = "header_lp";
	  	document.getElementById("header_rp").className = "header_rp";
	  	document.getElementById("header_nameId").className = "header_name";
	  	document.getElementById("chat_nameId").className = "chat_name";
	  	document.getElementById("friend_list").className = "friend_list";
		document.getElementById("chat_panel").className = "chat_panel";
		document.getElementById("myButtons").className = "category-wrap";
		document.getElementById("borderChat").style.backgroundColor="grey";
		document.getElementById("registration").className="registration";
		document.getElementById("registration2").className="registration";
		document.getElementById("submitBtn1").className="submitButton";
		document.getElementById("submitBtn2").className="submitButton";
		document.getElementById("loginReg").className="Belyash";
		document.getElementById("passInput").className="Belyash";
		document.getElementById("loginInp").className="Belyash";
		document.getElementById("passInp").className="Belyash";	
		document.getElementById("done").className="send";	
		document.getElementById("yourMessage").className="sendMessageInput";
		document.getElementById("onlineField").className="onlineField";
		document.getElementById("messageField").className="messageField stretchRight";
	}
}




function ChangeBtn(){
	document.getElementById("logOutBtn").style.display='block';
	document.getElementById("signInBtn").style.display='none';
}

function ChangeBtn2(){
	document.getElementById("logOutBtn").style.display='none';
	document.getElementById("signInBtn").style.display='block';
}


function HideBtn(){
	document.getElementById("chatBtn").style.display='block';

}

function HideBtn2(){
	document.getElementById("chatBtn").style.display='none';

}

