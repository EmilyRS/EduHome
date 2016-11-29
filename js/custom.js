
$(document).ready(function(){
	
	
	
	var selector1 = '.nav .list';
    var selector2 = '.nav .courseLec ul';
    // $('.courseLec').on('click', function(){
	  // $('.courseLec').data('clicked', true);
	// });
	
	$(selector1).on('click', function(){
	    $(selector1).removeClass('active');
	    $(this).addClass('active');
	     
	   //alert($('.courseLec').hasClass('active'));
	    if(! $('.courseLec').hasClass('active'))
	    {
	      $(selector2).removeClass('in');
	    }
	});
	var selector3='.sub_list';
	$(selector3).on('click', function(){
	  
	    $(".downloadsCourse").css({"display" : "block"});  
	
	});
	 // function fixDiv() {
        // var $cache = $('#sideNav'); 
        // if($(window).width() <= 768 && $(window).width() >= 361){
	        // if ($(window).scrollTop() > 200  ) {
	            // $cache.css({'top': '265px'});
	        // }
	        // else {
	            // $cache.css({'top': '327px'});
// 	            
	        // }
        // }
        // if($(window).width() <= 360){
	        // if ($(window).scrollTop() > 200  ) {
	            // $cache.css({'top': '285px'});
	        // }
	        // else {
	            // $cache.css({'top': '347px'});
// 	            
	        // }
        // }
    // }
      // $(window).scroll(fixDiv);
      // fixDiv();
      
      
	
	//$(":file").filestyle({badge: false});
	$(":file").filestyle({input: false});
	//alert("llll");
	
	function get_chat_message() {
		//alert('kkkkkkkkkk');
		var from_id="Ann";
		//var base_url="<?php echo base_url();?>";
      // $.post("http://localhost/E_School/index.php/chat/ajax_get_chat_message",{'from_id' : from_id }, function(data){
//              
        // },"json");
        
         $.ajax({
           type: "POST",
           url: "http://localhost/E_School/index.php/chat/ajax_get_chat_message",
           dataType:'JSON',
           data: {'from_id' : from_id },
           success: function (data) {
           	alert("sss");
             if(data.status =='ok'){
             	$("div.chat_box").html(data.content);
             }else
             {
             	
             }
           },
           error:function(exception){alert('Exeption:'+exception); },
		   
           cache : false

        });
        return false;
  
    }
	//get_chat_message();
	$('#ss').click(function(){
 		var user_id=1;
 		$.ajax({
           type: 'POST',
           url: "http://localhost/E-school/index.php/main/demo",
           dataType:"json",
           data: {'user_id' : user_id },
           success: function(data) {
           	alert(data.result);
           },
           error:function(exception){alert('Exeption:'+exception); }
        });
 	});
	    
	    
	$('textarea.t_send').keypress(function(e){
	   if((e.keyCode == 13)&&($('#press_enter:checked').val()=='on')){
	     var message=$(this).val();
	      
	     //$(this).val("");
	     $("<div class='alert alert-danger msg_insert' style='margin-right: 40px; white-space: pre-line;' role='alert'>"+message+"</div>").insertAfter('.msg_insert');
	     $('.chat_box').scrollTop($('.chat_box')[0].scrollHeight);
	    // $.ajax({
           // type: "POST",
           // url: "http://localhost/E_School/index.php/chat/ajax_add_chat_message",
//           
           // data: {"message" : message, "from_id":"Ann","to_id":"Chris"},
           // success: function (data) {
           	// alert(data);
             // // console.log('success',data);
           // },
           // // error:function(exception){alert('Exeption:'+exception); alert(data);},
// // 
            // contentType: "application/json"
//  
        // });
	   }		
	});
	
    
});

function open_chat_with(user_id){
	 // var user_id="1";
		// $.post("http://localhost/E_School/index.php/chat/index",{"user_id" : user_id},function( data){
        	// alert(data); });	    
	 $.ajax({
           type: "POST",
           url: "http://localhost/E_School/index.php/chat/index",
           data: {'user_id':user_id},
           success: function(data) {
           	alert(data);
           },
           error:function(exception){alert('Exeption:'+exception); }
        });
		return false;
}

function send_btnChat(from_id,to_id){
		
		var message=$('textarea.t_send').val();
		
	    var base_url="<?php echo base_url();?>";
		
        var from_id="Ann";
		var to_id="Chris";
	 
	    post_data={
	
	    	'message' : message,
	    	'from_id': from_id , 
	    	'to_id': to_id
	    };
        // $.post("http://localhost/E_School/index.php/chat/ajax_add_chat_message",{message : message,from_id: from_id , to_id: to_id},function( exception){
        	// alert('Exeption:'+exception); },"json");
     $.ajax({
           type: "POST",
           url: "http://localhost/E_School/index.php/chat/ajax_add_chat_message",
           dataType:'JSON',
           data: post_data,
           success: function (data) {
           	alert("ttttt");
           },
           error:function(exception){alert('Exeption:'+exception); },
		   
           cache : false

        });
		return false;
		
		
				// if(message == ""){
			// return false;
		// }
	
	    //alert("message");
		 // $.post(base_url+"chat/ajax_add_chat_message",{message : message,from_id : from_id , to_id : to_id},function(data){
// 	
              // var res = jQuery.parseJSON(data);
        // alert(res.property);
// 	
		 // },'json');
		 // $.post(base_url+"chat/ajax_add_chat_message",{message : message,from_id : from_id , to_id : to_id}, function(data, status){
             // alert("Data: " + data + "\nStatus: " + status);
        // },"json");
   }

	
function creat () {
	
    
    var IDs = [];
    $('.sec').each(function(){ IDs.push(this.id); });
    var page_array={};
    $.each( IDs, function( key, value ) {
     	
     	// associate categori with type of section
     	var type= value+'_title';
     	var type_title = $('#'+type).html();
     	page_array[value]= type_title;  
     	//alert(page_array[value]);
     });	
     	var type1_item_title=[];
     	var type1_item_desc=[];
     	
     	var count=1;
     	$('.type1_item').each(function(){
     		
     	     var item_title = $('#type1_item_title'+count+'>a').html();
     	     //alert(item_title);
     		 type1_item_title.push(item_title);
     		 
     		 var item_desc = $('#type1_item_desc'+count).html();
     		 // alert(item_desc);
     		 type1_item_desc.push(item_desc);	
     		
     		 count++;
       });
//        
       
     	//alert(page_array[value]);    
	
	 
     $.each( type1_item_title, function( key, value ) {
    	 alert("k="+key+" v="+value);  
    });

  
}
function addToType1(){
       var count=1;
       $('.type1_item').each(function(){
     		 count++;
       });
    
       if(count<=5){
		 var html="<div  class='row type1_item'>";
             html+="           <div class='col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1'>";
		     html+="                        <div class='row'>";
		     html+="                            <div class='col-lg-4 col-md-4'>";
		     html+="                                <div class='box-image' >";
			 html+=" 	                                <div class='image'>";
			 html+=" 	                                    <img src='http://localhost/E_School/img/portfolio-2.jpg'  class='img-responsive'>";
			 html+=" 	                                </div>";
			 html+=" 	                                <div class='bg'></div>";
			 html+=" 	                                <div class='text' >";
			 html+=" 	                                    <div class='row ' >";
			 html+=" 	                                    	<div class='col-lg-5 col-lg-offset-1 col-md-6 '>";
			 html+=" 	                                    		 <input type='file' data-badge='false'>";
			 html+=" 	                                    	 </div>";
			 html+=" 	                                    	<div class='col-lg-4 col-md-4'>";
			 html+=" 	                                    		<button class='btn btn-template-transparent-primary' >upload</button>";
			 html+=" 	                                        </div >";
			 html+=" 	                                    </div>";
			 html+=" 	                                </div>";
			 html+=" 	                            </div>";
		     html+="                             </div>";
		     html+="                             <div class='col-md-7'>";
		     html+="                                 <h2 id='type1_item_title"+count+"'  contenteditable='true'><a href='post.htmls'>Fashion now</a></h2>";
		     html+="                                 <p  id='type1_item_desc"+count+"'  class='intro' contenteditable='true'>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.";
		     html+="                                     Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>";
		     html+="                                 </p>";
		     html+="                             </div>";
		     html+="                         </div>";
             html+="             </div> ";
             html+="         </div>";
		 
		 
		 			$(html).insertBefore('.btnAdd1');
	
	}
	else{
		alert('can not');
	}
	$(":file").filestyle({input: false});
	//$("#box-image"+id+" img").each(function (i, e) {
   // $(e).attr("src", "http://localhost/E_School/index.php/img/portfolio-2.jpg" + $(e).attr("src"));
//});
   //$("#img_type1"+id).attr("src",'');
	    // $('.chat_box').scrollTop($('.chat_box')[0].scrollHeight);
}
function openNav() {
	if($(window).width() <= 769){
		if($(window).width() <= 425){
			 $( "#sideNav" ).toggle( "slide" ,{direction:'left'},300);
     }else{
		if ($('#sideNav').css('display') == "none"){
	      document.getElementById("sideNav").style.display = "block";     
	      }
	      else{
	      document.getElementById("sideNav").style.display = "none";
         
	      	//$(window).on('scroll', function () {
			 //   var scrollTop = $(window).scrollTop();
			//});
	      }
	 }
	}
	// if($(window).width() <= 769){
		// if($(window).width() <= 425){
		// if ($('#sideNav').css('display') == "none"){
	       // document.getElementById("sideNav").style.display = "block";    
           // document.getElementById("sideNav").style.width = "100%";
           // document.getElementById("sideMain").style.display = "none";
// 	          
	      // }
	      // else{
	      // document.getElementById("sideNav").style.display = "none"; 
	      // document.getElementById("sideNav").style.width = "0";
	      // document.getElementById("sideMain").style.display = "block";
// 	      
// 	     
	      	// //$(window).on('scroll', function () {
			 // //   var scrollTop = $(window).scrollTop();
			// //});
	      // }
     // }else{
		// if ($('#sideNav').css('display') == "none"){
	       // document.getElementById("sideNav").style.display = "block";
// 	            
	      // }
	      // else{
	      // document.getElementById("sideNav").style.display = "none";
//          
	      	// //$(window).on('scroll', function () {
			 // //   var scrollTop = $(window).scrollTop();
			// //});
	      // }
	      // }
	// }
      event.preventDefault();
}
function openNav1() {
	if($(window).width() <= 425){
		if ($('#sideNav').css('display') == "none"){
	       document.getElementById("sideNav").style.display = "block";
	      }
	      else{
	      document.getElementById("sideNav").style.display = "none";
	      }
	}
      event.preventDefault();
}