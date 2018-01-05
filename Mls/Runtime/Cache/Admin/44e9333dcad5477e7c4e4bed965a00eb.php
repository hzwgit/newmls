<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        
        <title>Custom Login Form Styling</title>
      
      	
      	<script type="text/javascript" src="/Project/Public/Js/jquery-1.7.2.js"></script>
      	<link rel="stylesheet" type="text/css" href="/Project/Public/Css/bootstrap.min.css" /> 
   	 	<script type="text/javascript" src="/Project/Public/Js/bootstrap.min.js"></script> 
       
        <link rel="stylesheet" type="text/css" href="/Project/Mls/Admin/Public/Css/style.css" />
		
		
		<style>	
			body{
				background: #eedfcc url(/Project/Mls/Admin/Public/Images/bg3.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.5);
			}
			#imgs:hover{
				cursor: pointer;
			}
			
		</style>
    </head>
   
   	<script>

   		$(function(){
   			$('input[name=code]').bind('keyup',function(){
   				if($(this).val().length>3){
   					$.ajax({
					   type: "POST",
					   url: "<?php echo U('Login/check_verify');?>",
					   data: "code="+$('input[name=code]').val(),
					   success: function(msg){
					   	$ver=msg;
					     if(msg && $('input[name=code]').val().length==4 ){
					     	// alert('真');
					     	$('span[id=tu]').attr('class','glyphicon glyphicon-ok text-success');
					     	$('#btn').removeAttr('disabled');
					 


					     }else{
					     	$('span[id=tu]').attr('class','glyphicon glyphicon-remove text-danger');
					     	// $('#btn').attr('disabled','true');
					     
					     	
					     	// alert('假');
					     }
					   }
					});
					
					
   				}else{
						$('span[id=tu]').attr('class','glyphicon glyphicon-remove text-danger');
					     	$('#btn').attr('disabled','true');

   				}
   			})

   		});
   	</script>
    <body>
   
    <span id='tu'  style="position:absolute;left:520px;top:280px;font-size:40px" aria-hidden="true" ></span>
   
        <div class="container">
		
	
			
			<header>
			
				<h1>Beautiful Say <strong>Login Form</strong> Admin</h1>
				<h2>Creative and modern form design with CSS magic</h2>
	

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
				    
			<div class="main">
				<form id="form1" class="form-5 clearfix" action="/Project/index.php/Admin/Login/logins" style="height:152px" method="post">
				
				   <p>
				        <input type="text"  id="login" name="username" placeholder="Username" required>

				          <input type="password" id="login" name="password" placeholder="Password" required >

				        <input type="text" id="login" name="code" placeholder="Verify" style="width:120px" required><span><img id="imgs"src="/Project/index.php/Admin/Login/verify" style=" margin-left: 3px;width:84px;height:50px;vertical-align:bottom" onclick="this.src=this.src+'?'+Math.random()"></span>
				    </p>
				    <button id="btn"  style="padding-top: 25px; border-bottom-style: solid; border-top-style: solid; border-top-width: 0px; margin-top: 2px; padding-bottom: 124px; border-bottom-width: 0px;">
				    	<i class="icon-arrow-right" style="padding-top: 20px;"></i>
				    	<span>Login in</span>
				    </button>     
				</form>​​​​
			</div>
			
        </div>
    </body>
</html>