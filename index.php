<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>jQuery Slot Machine</title>

		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2.0">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="dist/jquery.slotmachine.css" type="text/css" media="screen" />

		<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript" src="dist/jquery.slotmachine.js"></script>

	</head>

	<body>
		<div class="header-line"></div>	

		<div id="randomize">
			<div class="content container" style="text-align: center;max-width: 900px;">									
				<div class="row">
					<?php
					for($i = 1; $i <= 5; $i++)
					{
						?>
						<div class="col-xs-4">
							<div>
								<div id="machine<?php echo $i; ?>" class="randomizeMachine">
									<div><img src="img/slot1.png" /></div>								
									<div><img src="img/slot2.png" /></div>								
									<div><img src="img/slot3.png" /></div>							
									<div><img src="img/slot4.png" /></div>								
									<div><img src="img/slot5.png" /></div>								
									<div><img src="img/slot6.png" /></div>								
								</div>
							</div>
						</div>
						<?php
					}
					?>					
				</div>
				
				<div class="row">
					<?php
					for($i = 6; $i <= 10; $i++)
					{
						?>
						<div class="col-xs-4">
							<div>
								<div id="machine<?php echo $i; ?>" class="randomizeMachine">
									<div><img src="img/slot1.png" /></div>								
									<div><img src="img/slot2.png" /></div>								
									<div><img src="img/slot3.png" /></div>							
									<div><img src="img/slot4.png" /></div>								
									<div><img src="img/slot5.png" /></div>								
									<div><img src="img/slot6.png" /></div>								
								</div>
							</div>
						</div>
						<?php
					}
					?>					
				</div>
				
				<div class="row">
					<?php
					for($i = 11; $i <= 15; $i++)
					{
						?>
						<div class="col-xs-4">
							<div>
								<div id="machine<?php echo $i; ?>" class="randomizeMachine">
									<div><img src="img/slot1.png" /></div>								
									<div><img src="img/slot2.png" /></div>								
									<div><img src="img/slot3.png" /></div>							
									<div><img src="img/slot4.png" /></div>								
									<div><img src="img/slot5.png" /></div>								
									<div><img src="img/slot6.png" /></div>								
								</div>
							</div>
						</div>
						<?php
					}
					?>					
				</div>
				
				<div>
					<div class="btn-group btn-group-justified btn-group-randomize" role="group">
						<div id="ranomizeButton" type="button" class="btn btn-primary btn-lg">Shuffle</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function()
			{
				$(".col-xs-4").css("width","20%");				
				var active_array = new Array();
				
				var machine1 = $("#machine1").slotMachine({
					active	: 0,
					delay	: 500
				});

				var machine2 = $("#machine2").slotMachine({
					active	: 1,
					delay	: 500,
					direction: 'down'
				});

				var machine3 = $("#machine3").slotMachine({
					active	: 2,
					delay	: 500
				});
				
				var machine4 = $("#machine4").slotMachine({
					active	: 3,
					delay	: 500
				});
				
				var machine5 = $("#machine5").slotMachine({
					active	: 4,
					delay	: 500
				});
				
				var machine6 = $("#machine6").slotMachine({
					active	: 4,
					delay	: 500
				});		
					
				var machine7 = $("#machine7").slotMachine({
					active	: 2,
					delay	: 500
				});	
				
				var machine8 = $("#machine8").slotMachine({
					active	: 3,
					delay	: 500
				});	
				
				var machine9 = $("#machine9").slotMachine({
					active	: 1,
					delay	: 500
				});	
				
				var machine10 = $("#machine10").slotMachine({
					active	: 0,
					delay	: 500
				});	
				
				var machine11 = $("#machine11").slotMachine({
					active	: 3,
					delay	: 500
				});
				
				var machine12 = $("#machine12").slotMachine({
					active	: 4,
					delay	: 500
				});
				
				var machine13 = $("#machine13").slotMachine({
					active	: 2,
					delay	: 500
				});
				
				var machine14 = $("#machine14").slotMachine({
					active	: 0,
					delay	: 500
				});
				
				var machine15 = $("#machine15").slotMachine({
					active	: 1,
					delay	: 500
				});
				
				function onComplete(active){					
					switch(this.element[0].id){
						case 'machine1':
							$("#machine1Result").text("Index: "+this.active);							
							break;
						case 'machine2':
							$("#machine2Result").text("Index: "+this.active);
							break;
						case 'machine3':
							$("#machine3Result").text("Index: "+this.active);
							break;
						case 'machine4':
							$("#machine4Result").text("Index: "+this.active);
							break;
						case 'machine5':
							$("#machine5Result").text("Index: "+this.active);
							break;
							
						case 'machine6':
							$("#machine6Result").text("Index: "+this.active);
							break;
						case 'machine7':
							$("#machine7Result").text("Index: "+this.active);
							break;
						case 'machine8':
							$("#machine8Result").text("Index: "+this.active);
							break;
						case 'machine9':
							$("#machine9Result").text("Index: "+this.active);
							break;
						case 'machine10':
							$("#machine10Result").text("Index: "+this.active);
							break;
							
						case 'machine11':
							$("#machine11Result").text("Index: "+this.active);
							break;
						case 'machine12':
							$("#machine12Result").text("Index: "+this.active);
							break;
						case 'machine13':
							$("#machine13Result").text("Index: "+this.active);
							break;
						case 'machine14':
							$("#machine14Result").text("Index: "+this.active);
							break;
						case 'machine15':
							$("#machine15Result").text("Index: "+this.active);
							break;
					}
					
					//console.log(this.element[0].id + " " + active);
					active_array.push(this.element[0].id + "_" + active);
				}
				
				$("#ranomizeButton").click(function(){	
					active_array = new Array();
					machine1.shuffle(5, onComplete);
					machine6.shuffle(5, onComplete);
					machine11.shuffle(5, onComplete);

					setTimeout(function(){
						machine2.shuffle(5, onComplete);						
					}, 300);
					setTimeout(function(){						
						machine7.shuffle(5, onComplete);						
					}, 300);
					setTimeout(function(){						
						machine12.shuffle(5, onComplete);						
					}, 300);
					
					setTimeout(function(){
						machine3.shuffle(5, onComplete);
					}, 600);
					setTimeout(function(){
						machine8.shuffle(5, onComplete);
					}, 600);
					setTimeout(function(){
						machine13.shuffle(5, onComplete);
					}, 600);
					
					setTimeout(function(){
						machine4.shuffle(5, onComplete);
					}, 900);
					setTimeout(function(){
						machine9.shuffle(5, onComplete);
					}, 900);
					setTimeout(function(){
						machine14.shuffle(5, onComplete);
					}, 900);
					
					setTimeout(function(){
						machine5.shuffle(5, onComplete);
					}, 1200);
					setTimeout(function(){
						machine10.shuffle(5, onComplete);
					}, 1200);
					setTimeout(function(){
						machine15.shuffle(5, onComplete);
					}, 1200);	
					
					console.log(active_array);					
					
					setTimeout(function(){
						$.ajax({
                        url: "http://localhost/SlotMachine/backend/controller/getAjax.php",                        
                        type: "POST",
                        data: {"data": active_array},
                        success: function(msg)
                        {
                            console.log(msg);
                        },
                        error:function(msg)
                        {
                            alert("Failed: " + msg.status + ": " + msg.statusText);
                        }
                    });
					}, 4500);
				})
			});
		</script		
	</body>
</html>
