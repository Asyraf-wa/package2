    	
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
	  

		  
		  
		  
		  
		  

        </div><!--/.nav-collapse -->
      </div>
    </div>

	