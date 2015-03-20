var xmlhttp = createXmlHttpRequestObject();
var xmlHttp;
var dt = new Date();
var d = dt.getDate();
var m = dt.getMonth()+1;
var y = dt.getFullYear();
var dt_added = ""+y+"-"+m+"-"+d;
var inter ="";

function createXmlHttpRequestObject() {
	if (window.ActiveXObject){
		try{
			xmlhttp = new ActiveXObject("Microsofot.XMLHTTP");
			xmlHttp = new ActiveXObject("Microsofot.XMLHTTP");
		} catch (e) {
			xmlhttp = false;
			xmlHttp = false;
		}
	}else{
		try{
			xmlhttp = new XMLHttpRequest();
			xmlHttp = new XMLHttpRequest();
		} catch (e) {
			xmlhttp = false;
			xmlHttp = false;
		}
	}

	if (!xmlhttp && !xmlHttp) {
		alert("Could not create XML Object");
	} else {
		return xmlhttp;
	}
}

function showme() {
    document.getElementById('meeting').className="showmeeting";
    document.getElementById('event').className="hideevent";
}
        
function showev() {
    document.getElementById('meeting').className="hidemeeting";
    document.getElementById('event').className="showevent";
}

function show1() {
	alert("Beta ye h show 1, okay");
}

function show2() {
	alert("tumhe fn call krna hi nhi aata, ye show2 hai");
}

function show3() {
	alert("tum rehne do, tumse na ho paayega");
}

function view_event_member() {
	    xmlhttp.onreadystatechange=function()
	    {
	      if (xmlhttp.readyState==4 && xmlhttp.status==200)
		  {
		    document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		  }
	    }
	    xmlhttp.open("GET","event_admin/view_event.php",true);
	    xmlhttp.send();
}

function view_meeting_member() {
	xmlhttp.onreadystatechange=function()
	{
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","event_user/view_meeting.php",true);
	xmlhttp.send();
}

function view_task() {
	xmlhttp.onreadystatechange=function()
	{
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","event_user/view_task.php",true);
	xmlhttp.send();
}

function add_members() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("POST","addmembers.php",true);
	xmlhttp.send();
}

function self_profile() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_self_profile.php",true);
	xmlhttp.send();
}

function  view_members_profile(x) {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_members_profile.php?id="+x,true);
	xmlhttp.send();
}

function update_profile() {
   var id=document.getElementById("id").value;
   var name=document.getElementById("name").value;
   var email=document.getElementById("email").value;
   var regno=document.getElementById("regno").value;
   var phone=document.getElementById("phone").value;
   var address=document.getElementById("address").value;
   var dob=document.getElementById("dob").value;
   var sex=document.getElementById("sex").value;
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","update_exec.php?name="+name+"&id="+id+"&dob="+dob+"&sex="+sex+"&add="+address+"&phone="+phone+"&regno="+regno+"&email="+email,true);
	xmlhttp.send();
}

function update_self_profile() {
   var name=document.getElementById("name").value;
   var email=document.getElementById("email").value;
   var regno=document.getElementById("regno").value;
   var phone=document.getElementById("phone").value;
   var address=document.getElementById("address").value;
   var dob=document.getElementById("dob").value;
   var sex=document.getElementById("sex").value;
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","self_update_exec.php?name="+name+"&dob="+dob+"&sex="+sex+"&add="+address+"&phone="+phone+"&regno="+regno+"&email="+email,true);
	xmlhttp.send();
}

function change_photo() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_self_photo.php?",true);
	xmlhttp.send();
}

function photo_exec() {
	var image=document.getElementById("image").value;
	var myform=document.getElementById("myform").value;
	var uploadedFile = document.getElementById('image');
	var fileSize = uploadedFile.files[0].size;
    if(fileSize> 204800)
    {
    	document.getElementById("errorBox").innerHTML = "photo size should be less than 200kb";
     return false;
    }
    else
    {
    	 myform.submit();
    }
  /*  var xmlhttp;
  var request = new XMLHttpRequest();
 formData = new FormData();
  formData.append('image',image.files[0]);
   request.open("POST","pic_update.php");
   request.send(formData);
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	 //xmlhttp.open("GET","store_event_admin.php",true);
	xmlhttp.open("GET","pic_update.php",true);
	xmlhttp.send();*/
}

function inactive() {
   var id=document.getElementById("id").value;
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","delete.php?id="+id,true);
	xmlhttp.send();
}

function change_password() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_change_password.php",true);
	xmlhttp.send();
}

function update_password() {
var a1=document.getElementById("old").value;
var b=document.getElementById("new1").value;
var c=document.getElementById("new2").value;
if ((a1==null || a1=="")  && (b==null || b=="") && (c==null || c=="") )
  {
  alert("All Field must be filled out");
  return false;
  }
if (a1==null || a1=="")
  {
  alert("Enter old password");
  return false;
  }
if (b==null || b=="")  {
  alert(" Enter new password");
  return false;
  }
  if (c==null || c=="")  {
  alert(" Enter new password to confirm");
  return false;
  }
if(b != c)
{
  alert("Passwords do not match")
  return false;
}
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
 	xmlhttp.open("GET","ajax_update_password.php?old="+a1+"&new="+b,true);
	xmlhttp.send(); 
}

function change_password1(x) {//task status change
   var b=document.getElementById(x).value;
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","status_exec.php?status="+b+"&task_id="+x,true);
	xmlhttp.send();
}

function change_password2() {//add_members
   var department = document.getElementById("department").value;
   var phone=document.getElementById("mobno").value;
   var name=document.getElementById("m_name").value;
   var email=document.getElementById("emailid").value;
   var date=document.getElementById("dob").value;
   var hroom=document.getElementById("hroom").value;
   var hblock=document.getElementById("hblock").value;
   var add=""+hblock+"-"+hroom;
   var regno=document.getElementById("reg_no").value;
   var sexarr=document.getElementsByName("group1");
   for(var i=0; i<sexarr.length; i++) {
   		if(sexarr[i].checked)
			var sex = sexarr[i].value; 
   }


	var pattern = /^[0-1]{1}[0-9]{1}[a-zA-Z]{3}[0-9]{4}$/;
   if (name==null || name=="") {
		toast('Please provide correct name.', 3000, '#f44336 red');
  	}

	else if(!regno.match(pattern))
	{
		toast('Please provide correct regno.', 3000, '#f44336 red');
	}
	else {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("POST","add_exec.php?name="+name+"&email="+email+"&dob="+date+"&phone="+phone+"&add="+add+"&sex="+sex+"&regno="+regno+"&department="+department,true);
	xmlhttp.send();
	}
}

function spotlight() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","main.php",true);
	xmlhttp.send();
}

function view_admin_attendance() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_view_attendance_admin.php",true);
	xmlhttp.send();
}

function modify_admin_attendance() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_modify_attendance_admin.php",true);
	xmlhttp.send();
}

function view_member_attendance() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_member_attendance.php",true);
	xmlhttp.send();
}

function view_each_event_attendance(event_id) {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_view_each_event_attendance_admin.php?id=event_"+event_id,true);
	xmlhttp.send();
}

function  view_each_meeting_attendance(meeting_id) {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_view_each_meeting_attendance_admin.php?id=meeting_"+meeting_id,true);
	xmlhttp.send();
}

function modify_each_event_attendance(event_id) {
	xmlhttp.onreadystatechange=function()
	{
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","modify_attendance.php?id="+event_id,true);
	xmlhttp.send();
}

function modify_event_att(r,m) {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","modify_event_att.php?r="+r+"&m="+m,true);
	xmlhttp.send();
}

function modify_each_meeting_attendance(meeting_id) {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_modify_each_meeting_attendance_admin.php?id=meeting_"+meeting_id,true);
	xmlhttp.send();
}

function create_event_admin() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("main_content").innerHTML = xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","event_admin/create_event.php",true);
	xmlhttp.send();
}

function create_event_ad() {
	var name = document.getElementById("e_name").value;
	var club_id = document.getElementById("club_id").value;
	var date = document.getElementById("event_date").value;
	var time = document.getElementById("event_time").value;
	var place = document.getElementById("venue").value;
	var purpose = document.getElementById("purpose").value;
	var details = document.getElementById("details").value;
	if (name=="" || date=="" || time=="" || place=="" || purpose=="" || details=="")
    {
        toast('Please provide all the details.', 3000, '#f44336 red');
    }
	else 
    {
		xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
		xmlhttp.open("GET", "event_admin/store_event.php?cid="+club_id+"&d="+date+"&t="+time+"&pl="+place+"&pu="+purpose+"&det="+details+"&da="+dt_added+"&name="+name, true);
		xmlhttp.send();
	}
}

function view_event_admin() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","event_admin/view_event.php",true);
	xmlhttp.send();
}

function modify_ad(id) {
//	document.getElementById("main_content").innerHTML = "";
//	window.location.href = "modify_event.php?id="+id;
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("main_content").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET", "event_admin/modify_event.php?id="+id, true);
	xmlHttp.send();
}

function modification_update_ad() {
	var club_id = document.getElementById("club_id").value;
	var name = document.getElementById("name").value;
	var date = document.getElementById("date").value;
	var time = document.getElementById("time").value;
	var place = document.getElementById("place").value;
	var purpose = document.getElementById("purpose").value;
	var details = document.getElementById("details").value;
	var event_id = document.getElementById("event_id").value;
	var dt_added = ""+y+"-"+m+"-"+d;
	if (name=="" || date=="" || time=="" || place=="" || purpose=="" || details=="")
		alert("Please provide all the details correctly...");
	else {
		xmlHttp.onreadystatechange = function() {
		//	document.getElementById("main_content").innerHTML = "";
			if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET", "event_admin/modify_update_event.php?cid="+club_id+"&d="+date+"&t="+time+"&pl="+place+"&pu="+purpose+"&det="+details+"&da="+dt_added+"&id="+event_id+"&name="+name, true);
		xmlHttp.send();
	}
}

function del_ad(id) {
	xmlHttp.onreadystatechange = function() {
		//	document.getElementById("main_content").innerHTML = "";
			if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
	}
	xmlHttp.open("GET", "event_admin/delete_event.php?id="+id, true);
	xmlHttp.send();
}

function create_meeting_admin() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","event_admin/create_meeting.php",true);
	xmlhttp.send();
}

function create_meeting_ad() {
	var club_id = document.getElementById("club_id").value;
	var date = document.getElementById("date").value;
	var time = document.getElementById("time").value;
	var place = document.getElementById("place").value;
	var details = document.getElementById("details").value;
	var dt_added = ""+y+"-"+m+"-"+d;
	if (date=="" || time=="" || place=="" || details=="")
		alert("Please provide all the details correctly...");
	else {
		xmlHttp.onreadystatechange = function() {
		//	document.getElementById("main_content").innerHTML = "";
			if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET", "event_admin/store_meeting.php?cid="+club_id+"&d="+date+"&t="+time+"&pl="+place+"&det="+details+"&da="+dt_added, true);
		xmlHttp.send();
	}
}

function view_meeting_admin() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","event_admin/view_meeting.php",true);
	xmlhttp.send();
}

function del_meeting_ad(id) {
	xmlHttp.onreadystatechange = function() {
		//	document.getElementById("main_content").innerHTML = "";
			if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
	}
	xmlHttp.open("GET", "event_admin/delete_meeting.php?id="+id, true);
	xmlHttp.send();
}

function modify_meeting_ad(id) {
//	document.getElementById("main_content").innerHTML = "";
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("main_content").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET", "event_admin/modify_meeting.php?id="+id, true);
	xmlHttp.send();
}

function modification_update_meeting_ad() {
	var club_id = document.getElementById("club_id").value;
	var date = document.getElementById("date").value;
	var time = document.getElementById("time").value;
	var place = document.getElementById("place").value;
	var details = document.getElementById("details").value;
	var meeting_id = document.getElementById("meeting_id").value;
	var dt_added = ""+y+"-"+m+"-"+d;
	if (date=="" || time=="" || place=="" || details=="")
		alert("Please provide all the details correctly...");
	else {
		xmlHttp.onreadystatechange = function() {
//			document.getElementById("main_content").innerHTML = "";
			if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET", "event_admin/modify_update_meeting.php?cid="+club_id+"&d="+date+"&t="+time+"&pl="+place+"&det="+details+"&da="+dt_added+"&id="+meeting_id, true);
		xmlHttp.send();
	}
}

function add_task() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_add_task.php",true);
	xmlhttp.send();
}

function store_task() {
   var regno=document.getElementById("regno").value;
   var t_name=document.getElementById("t_name").value;
   var desc=document.getElementById("desc").value;
   var date_assign=document.getElementById("date_assign").value;
   var date_comp=document.getElementById("date_comp").value;
    
   if (regno==null || regno=="" || t_name==null || t_name=="" || desc==null || desc=="" || date_assign==null || date_assign=="" || date_comp==null || date_comp=="")
   {
      toast('Please provide all the details.', 3000, '#f44336 red');
   }
   else
   {    
     xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	 xmlhttp.open("GET","task_exec.php?t_name="+t_name+"&desc="+desc+"&date_assign="+date_assign+"&date_comp="+date_comp+"&regno="+regno,true);
	 xmlhttp.send();
   }
}

function filter_view_task() {
   	var x = document.getElementById("Ultra").value;
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_filterd_view_task.php?id="+x,true);
	xmlhttp.send();
}

function update_task_status() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_update_task_status.php",true);
	xmlhttp.send();
}

function filter_update_task_status() {
   	var x = document.getElementById("Ultra").value;
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_filterd_update_task_status.php?id="+x,true);
	xmlhttp.send();
}

function  report(x) {
  xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("main_content").innerHTML=xmlhttp.responseText;
    }
    }
  xmlhttp.open("GET","ajax_report.php?id="+x,true);
  xmlhttp.send();
}

//Adding a new thread in the database
function create_thread() {
  var name = document.getElementById("name").value;
  var desc = document.getElementById("desc").value;
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("thread").innerHTML=xmlhttp.responseText; 
    }
    }
  xmlhttp.open("POST","create_thread.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("name="+name+"&desc="+desc);
}

//Creating new threads
function new_thread() {
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("thread").innerHTML=xmlhttp.responseText; 
    }
    }
  xmlhttp.open("POST","new_thread.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send();
}

function all_threads() {
  	clearInterval(inter);
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("main_content").innerHTML=xmlhttp.responseText;  
    }
    }
  xmlhttp.open("POST","all_threads.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send(); 
}

//Displaying each threads individually
function thread_details(id) {
  	//Remaining thread details
  	inter = setInterval(function(){
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("main_content").innerHTML=xmlhttp.responseText; 
    }
    }
  xmlhttp.open("POST","thread_details.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("id="+id); }, 100);
  //Sending msg - text box
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("main_content").innerHTML=xmlhttp.responseText; 
    }
    }
  xmlhttp.open("POST","send_text.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("id="+id); 
}

//Send Message
function send_message(id) {
  var msg = document.getElementById("msg").value;
  document.getElementById("msg").value="";
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("main_content").innerHTML=xmlhttp.responseText; 
    }
    }
  xmlhttp.open("POST","send_message.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("id="+id+"&msg="+msg);
}

function update_forms() {
   var id=document.getElementById("id").value;
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_updateform.php?id="+id,true);
	xmlhttp.send();
}

function update_forms1() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_self_updateform.php?",true);
	xmlhttp.send();
}

//groups

function create_group() {
	var name = document.getElementById("grp_name").value;
	var details = document.getElementById("grp_details").value;
	var admin = document.getElementById("grp_admin").value;
	if(name=="" || details=="" | admin=="") {
		alert("please provide all the details correctly..");
	}
	else {
		xmlHttp.onreadystatechange = function() {
			if(xmlHttp.readyState==4 && xmlHttp.status==200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET","group_president/store_group.php?name="+name+"&details="+details+"&admin="+admin, true);
		xmlHttp.send();
	}
}

function modify_group_pre(grp_id) {
	xmlHttp.onreadystatechange = function() {
			if(xmlHttp.readyState==4 && xmlHttp.status==200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
		}
	xmlHttp.open("GET","group_president/modify_group.php?grp_id="+grp_id, true);
	xmlHttp.send();
}

function modify_updation_group_pre() {
	var name = document.getElementById("grp_name").value;
	var details = document.getElementById("grp_details").value;
	var admin = document.getElementById("grp_admin").value;
	var grp_id = document.getElementById("grp_id").value;
	if(name=="" || details=="" | admin=="") {
		alert("please provide all the details correctly..");
	}
	else {
		xmlHttp.onreadystatechange = function() {
			if(xmlHttp.readyState==4 && xmlHttp.status==200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET","group_president/modify_updation_group.php?name="+name+"&details="+details+"&admin="+admin+"&grp_id="+grp_id, true);
		xmlHttp.send();
	}
}

function delete_group_pre(grp_id) {
	xmlHttp.onreadystatechange = function() {
			if(xmlHttp.readyState==4 && xmlHttp.status==200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
	}
	xmlHttp.open("GET","group_president/delete_group.php?grp_id="+grp_id, true);
	xmlHttp.send();
}

function members_list() {
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("main_content").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","club_members.php",true);
	xmlhttp.send();
}

function add_members_group() {
	var mem_arr = [];
	var k=0;
	var x = document.getElementsByName("members");
	var grp_id = document.getElementById("grp_id").value;
	for(var i=0; i<x.length; i++) {
		if(x[i].checked)
			mem_arr[k++] = x[i].value;
	}
	if (k==0)
		alert("please select atleast one member.");
	else {
	xmlHttp.onreadystatechange = function() {
			if(xmlHttp.readyState==4 && xmlHttp.status==200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
	}
	xmlHttp.open("GET","group_admin/store_members.php?members="+JSON.stringify(mem_arr)+"&grp_id="+grp_id, true);
	xmlHttp.send();
}
}

function remove_members_group() {
	var mem_arr = [];
	var k=0;
	var x = document.getElementsByName("members");
	var grp_id = document.getElementById("grp_id").value;
	for(var i=0; i<x.length; i++) {
		if(x[i].checked)
			mem_arr[k++] = x[i].value;
	}
	if (k==0)
		alert("please select atleast one member.");
	else {
	xmlHttp.onreadystatechange = function() {
			if(xmlHttp.readyState==4 && xmlHttp.status==200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
	}
	xmlHttp.open("GET","group_admin/remove_updation_members.php?members="+JSON.stringify(mem_arr)+"&grp_id="+grp_id, true);
	xmlHttp.send();
}
}

function create_meeting_group() {
	var club_id = document.getElementById("club_id").value;
	var grp_id = document.getElementById("grp_id").value;
	var date = document.getElementById("date").value;
	var time = document.getElementById("time").value;
	var place = document.getElementById("place").value;
	var details = document.getElementById("details").value;
	var dt_added = ""+y+"-"+m+"-"+d;
	if (date=="" || time=="" || place=="" || details=="")
		alert("Please provide all the details correctly...");
	else {
		xmlHttp.onreadystatechange = function() {
		//	document.getElementById("main_content").innerHTML = "";
			if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET", "group_admin/store_meeting.php?cid="+club_id+"&grp_id="+grp_id+"&d="+date+"&t="+time+"&pl="+place+"&det="+details+"&da="+dt_added, true);
		xmlHttp.send();
	}
}

function del_meeting_group(id) {
	xmlHttp.onreadystatechange = function() {
			if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
	}
	xmlHttp.open("GET", "group_admin/delete_meeting.php?id="+id, true);
	xmlHttp.send();
}

function modify_meeting_group(id) {
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("main_content").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET", "group_admin/modify_meeting.php?id="+id, true);
	xmlHttp.send();
}

function modification_update_meeting_group() {
	var club_id = document.getElementById("club_id").value;
	var date = document.getElementById("date").value;
	var time = document.getElementById("time").value;
	var place = document.getElementById("place").value;
	var details = document.getElementById("details").value;
	var meeting_id = document.getElementById("meeting_id").value;
	var dt_added = ""+y+"-"+m+"-"+d;
	if (date=="" || time=="" || place=="" || details=="")
		alert("Please provide all the details correctly...");
	else {
		xmlHttp.onreadystatechange = function() {
//			document.getElementById("main_content").innerHTML = "";
			if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				document.getElementById("main_content").innerHTML = xmlHttp.responseText;
			}
		}
		xmlHttp.open("GET", "group_admin/modify_update_meeting.php?cid="+club_id+"&d="+date+"&t="+time+"&pl="+place+"&det="+details+"&da="+dt_added+"&id="+meeting_id, true);
		xmlHttp.send();
	}
}

function view_meeting_member_group() {
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("main_content").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET", "group_member/view_meeting.php", true);
	xmlHttp.send();
}

function create_group_president_ajax() {
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("main_content").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET", "group_president/create_group.php", true);
	xmlHttp.send();
}

function view_group_president_ajax() {
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("main_content").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET", "group_president/view_group.php", true);
	xmlHttp.send();
}

function add_members_admin_ajax(id) {
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("main_content").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET", "group_admin/add_members.php?id="+id, true);
	xmlHttp.send();
}

function remove_members_admin_ajax(id) {
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("main_content").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET", "group_admin/remove_members.php?id="+id, true);
	xmlHttp.send();
}

function create_meeting_admin_ajax(id) {
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("main_content").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET", "group_admin/create_meeting.php?id="+id, true);
	xmlHttp.send();
}

function view_meeting_admin_ajax(id) {
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("main_content").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET", "group_admin/view_meeting.php?id="+id, true);
	xmlHttp.send();
}
/*
function create_task_admin_ajax(id) {
	alert(id);
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("main_content").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET", "group_admin/add_members.php?id="+id, true);
	xmlHttp.send();
}

function view_task_admin_ajax(id) {
	alert(id);
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("main_content").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET", "group_admin/add_members.php?id="+id, true);
	xmlHttp.send();
}
*/

function view_meetings_member_ajax(grp_id) {
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("main_content").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET", "group_member/view_meeting.php?grp_id="+grp_id, true);
	xmlHttp.send();
}
