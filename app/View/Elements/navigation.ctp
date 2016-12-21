    	
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
<a class="navbar-brand" href="#"><?php echo $this->Html->image('logo.png', array('alt' => 'Logo', 'width'=>'130px')); ?></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
       
            <li>
			<?php echo $this->Html->link('<i class="glyphicon glyphicon-bookmark"></i> ' .__('Dashboard'), 
							array('controller' => 'users', 'action' => 'dashboard'),
							array('escape' => false)); 
			?>
			</li>





			
          </ul>
	  
<ul class="nav navbar-nav navbar-right">		  
		
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Profile <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
			<li>  
			<center>	

					
<?php if ($current_user['avatar'] == NULL) {
	echo $this->Html->image('default_user.jpg', array('alt' => 'No Image', 'width'=>'150px', 'height'=>'150px', 'class' => 'img-thumbnail'));
} else
	echo $this->Html->image('../files/avatar/' . $current_user['avatar_dir'] . '/' . $current_user['avatar'], 
		array(
			'alt' => 'Profile Picture', 
			'width'=>'150px', 'height'=>'150px', 'class' => 'img-thumbnail'));
?>  
					
					
					<br><br>
					
					</center>
			</li>
			<li><center><?php echo $current_user['fullname']; ?></center></li>

            <li class="divider"></li>
            <li><center><?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout')); ?></center></li>
			
          </ul>
        </li>		

			
          </ul>

		  
		  
		  
		  
		  

        </div><!--/.nav-collapse -->
      </div>
    </div>

	