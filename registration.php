


<div class="modal fade" id="m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
    	<div class="modal-content">
      		
	  	<div class="modal-header" style=" background-color:#284761;   color:#fff;">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel" ><span class="glyphicon glyphicon-pencil"style=" background-color:#284761; margin-left:180px; color:#fff;"></span>&nbsp;Register</h4>
      	</div>
     	

      <div class="modal-body">
	  		<div  id ="err1" style="color:red;"  class="form-alert">
			</div>
		<form action="#" method="post">

	
	
	
	<div class="form-group">
	<div class="input-group input-group-sm">
					<span class="input-group-addon"> 
						<span class="glyphicon glyphicon-user"></span></span>
							
    <input type="text" class="form-control" name="username"  id="username" placeholder="User name"/>
	</div>
</div>


<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-envelope"></span></span>
						
	 <input type="email" class="form-control" name="email"  id="email12" placeholder="Email"/>
	</div>
	<br/>
	<div class="form-group">
	<div class="input-group input-group-sm">
							
		<span class="input-group-addon">  
		 <span class="glyphicon glyphicon-lock"></span></span>
							
	 <input type="password" class="form-control" name="pass"  id="pass123" placeholder="password"/>
	</div>
   </div>
   
   	<div class="form-group">
	<div class="input-group input-group-sm">
					<span class="input-group-addon"> 
						<span class="glyphicon glyphicon-phone"></span></span>
							
    <input  class="form-control" name="mob"  id="mob" type="tel" pattern="^([+][9][1]|[9][1]|[0]){0,1}([7-9]{1})([0-9]{9})$" required placeholder="Mobile number"/>
	</div>
</div>

	<div class="form-group">
	<div class="input-group input-group-sm">
					<span class="input-group-addon"> 
						<span class="glyphicon glyphicon-check"></span></span>
							
    <select class="form-control" name="gender"  id="gender" required>
		<option value="">Gender</option>
		<option value="m">Male</option>
		<option value="f">Female</option>
	</select>
	</div>
</div>
 
		
	    	<div class="controls controls-row">

	   <!--<form method="POST" >-->
 <div class="controls controls-group">      </div></div>
	  <div class="modal-footer">
	
	  <input type="submit" class="btn btn-success" id="save"  value="Register" name="regis" />
    </form>
	    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
