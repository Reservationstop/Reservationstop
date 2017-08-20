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
		<li><a href="db-my-profile.html"><i class="fa fa-sign-in" aria-hidden="true"></i> My Profile</a>
		</li>
		<li><a href="register.html"><i class="fa fa-address-book-o" aria-hidden="true"></i> Register with us</a>
		</li>
		<li><a href="dashboard.html"><i class="fa fa-bookmark-o" aria-hidden="true"></i> My Bookings</a>
		</li>
		<li><a href="db-travel-booking.html"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
		</li>
		<li><a href="db-hotel-booking.html"><i class="fa fa-bed" aria-hidden="true"></i> Hotel Bookings</a>
		</li>
		<li><a href="db-refund.html"><i class="fa fa-ban" aria-hidden="true"></i> Cancel Bookings</a>
		</li>
		<li><a href="db-all-payment.html"><i class="fa fa-print" aria-hidden="true"></i> Prient E-Tickets</a>
		</li>
		<li>
			<i class="fa fa-align-justify" aria-hidden="true"></i>
			<?= 
			$this->Html->link(
				   __('Logut'),
				   ['controller'=> 'users','action' => 'logout'],
				   ['class' => 'ho-dr-con-last',]
			);
		   ?> 
		</li>
	</ul>
</li>