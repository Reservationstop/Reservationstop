<li>
	<!--<div class="dropdown">
		<button class="dropbtn">My Account</button>
		<div class="dropdown-content">
			<a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
			<a href="#"><i class="fa fa-address-book-o" aria-hidden="true"></i> Register with us</a>
			<a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i> My Bookings</a>
			<a href="#"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
			<a href="#"><i class="fa fa-bed" aria-hidden="true"></i> Hotel Bookings</a>
			<a href="#"><i class="fa fa-ban" aria-hidden="true"></i> Cancel Bookings</a>
			<a href="#"><i class="fa fa-print" aria-hidden="true"></i> Prient E-Tickets</a>
			<a href="#" class="ho-dr-con-last"><i class="fa fa-align-justify" aria-hidden="true"></i> Custom Tour Plan</a>
		</div>
	</div>	-->
	<a class='dropdown-button waves-effect waves-light profile-btn' href='#!' data-activates='dropdown1'>
		<i class="fa fa-user" aria-hidden="true"></i> <?php echo $authUser['email']; ?></a>
	<!-- Dropdown Structure -->
	<ul id='dropdown1' class='dropdown-content top-menu'>
		<li>
			<?=
			$this->Html->link(
				'<i class="fa fa-sign-in" aria-hidden="true"></i>' . __('My Profile'),
				['controller' => 'users', 'action' => 'login'],
				['class' => '', 'escape' => false]
			);
			?> 
		</li>
		<li>
			<?=
			$this->Html->link(
				'<i class="fa fa-address-book-o" aria-hidden="true"></i>' . __('Register with us'),
				['controller' => 'users', 'action' => 'login'],
				['class' => '', 'escape' => false]
			);
			?> 
		</li>
		<li>
			<?=
			$this->Html->link(
				'<i class="fa fa-bookmark-o" aria-hidden="true"></i>' . __('My Bookings'),
				['controller' => 'users', 'action' => 'login'],
				['class' => '', 'escape' => false]
			);
			?> 
		</li>
		<li>
			<?=
			$this->Html->link(
				'<i class="fa fa-umbrella" aria-hidden="true"></i>' . __('Tour Packages'),
				['controller' => 'users', 'action' => 'login'],
				['class' => '', 'escape' => false]
			);
			?> 
		</li>
		<li>
			<?=
			$this->Html->link(
				'<i class="fa fa-bed" aria-hidden="true"></i>' . __('Hotel Bookings'),
				['controller' => 'users', 'action' => 'login'],
				['class' => '', 'escape' => false]
			);
			?> 
		</li>
		<li>
			<?=
			$this->Html->link(
				'<i class="fa fa-ban" aria-hidden="true"></i>' . __('Cancel Bookings'),
				['controller' => 'users', 'action' => 'login'],
				['class' => '', 'escape' => false]
			);
			?> 
		</li>
		<li>
			<?=
			$this->Html->link(
				'<i class="fa fa-print" aria-hidden="true"></i>' . __('Print E-Tickets'),
				['controller' => 'users', 'action' => 'login'],
				['class' => '', 'escape' => false]
			);
			?> 
		</li>
		<li>
			<?=
			$this->Html->link(
				'<i class="fa fa-align-justify" aria-hidden="true"></i>' . __('LogOut'),
				['controller' => 'users', 'action' => 'logout'],
				['class' => 'ho-dr-con-last', 'escape' => false]
			);
			?> 
		</li>
	</ul>
</li>