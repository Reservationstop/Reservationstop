<li>
<i class="fa fa-user" aria-hidden="true"></i>
 <?= 
 $this->Html->link(
		__('New Account'),
		['controller'=> 'users','action' => 'add'],
		['class' => ' profile-btn',]
 );

?> 
	<!-- Dropdown Structure -->
</li>
<li>
<i class="fa fa-user" aria-hidden="true"></i>
 <?= 

$this->Html->link(
		__('Login'),
		['controller'=> 'users','action' => 'login'],
		['class' => ' profile-btn',]
 );
?> 
	<!-- Dropdown Structure -->
</li>
