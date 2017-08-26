<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
echo $this->Html->css('style');
echo $this->Html->css('materialize');
echo $this->Html->css('bootstrap');
echo $this->Html->css('mob');
echo $this->Html->css('animate');
echo $this->Html->css('font-awesome.min');

echo $this->Html->script('jquery-latest.min');
echo $this->Html->script('bootstrap');
echo $this->Html->script('wow.min');
echo $this->Html->script('materialize.min');
echo $this->Html->script('custom.js');
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Holiday Tour & Reservations</title>
		<!--== META TAGS ==-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- FAV ICON -->
		<link rel="shortcut icon" href="../img/fav.ico">
		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Lato%7CQuicksand:400,500,700" rel="stylesheet">
		<!-- FONT-AWESOME ICON CSS -->
		<!--== ALL CSS FILES ==-->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<!--====== MOBILE MENU ==========-->
		<section class="mob-top">
			<div class="mob-menu">
				<div class="mob-head-left"> <?php echo $this->Html->image('logo.png', ['alt' => 'Logo']); ?></div>
				<div class="mob-head-right"> <a href="#"><i class="fa fa-bars mob-menu-icon" aria-hidden="true"></i></a> <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
					<div class="mob-menu-slide">
						<h4>My Profile</h4>
						<ul class='top-menu'>
							<li>
								<?=
								$this->Html->link(
									'<i class="fa fa-sign-in" aria-hidden="true"></i>' . __('My Profile'),
									['controller' => 'users', 'action' => 'login'],
									['class' => '', 'escape' => false]
								);
								?> 
							</li>
							
						</ul>
						<h4>Tour Packages</h4>
						<ul class='top-menu'>
							<li>
								<?=
								$this->Html->link(
									__('Family Package'),
									['controller' => 'users', 'action' => 'login'],
									['class' => '', 'escape' => false]
								);
								?> 
							</li>
							
						</ul>
						<h4>Hotels</h4>
						<ul class='top-menu'>
							<li>
								<?=
								$this->Html->link(
									'<i class="fa fa-sign-in" aria-hidden="true"></i>' . __('Hotel Booking'),
									['controller' => 'users', 'action' => 'login'],
									['class' => '', 'escape' => false]
								);
								?> 
							</li>
							
						</ul>
						<h4>Seight Seeing</h4>
						<ul class='top-menu'>
							<li>
								<?=
								$this->Html->link(
									'<i class="fa fa-sign-in" aria-hidden="true"></i>' . __('Seight Seeing'),
									['controller' => 'users', 'action' => 'login'],
									['class' => '', 'escape' => false]
								);
								?> 
							</li>
						</ul>
						<h4>All Pages</h4>
						<ul class='top-menu'>
								<li>
								<?=
								$this->Html->link(
									__('About Us'),
									['controller' => 'users', 'action' => 'login'],
									['class' => '', 'escape' => false]
								);
								?> 
							</li>						
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--====== END MOBILE MENU ==========-->
		<!--====== TOP HEADER ==========-->
		<section>
			<div class="rows head" data-spy="affix" data-offset-top="120">
				<div class="container">
					<div>
						<!--====== BRANDING LOGO ==========-->
						<div class="col-md-4 col-sm-12 col-xs-12 head_left">
							<?php echo $this->Html->image('logo.png', ['alt' => 'Logo']); ?>
						</div>
						<!--====== HELP LINE & EMAIL ID ==========-->
						<div class="col-md-8 col-sm-12 col-xs-12 head_right head_right_all">
							<ul>
								<li><a href="#">Help Line: +101-1231-1231</a> </li>
								<li><a href="#">Email: contact@worldtours.com</a> </li>
								<?php
								if (!empty($authUser)) {
									echo $this->element('account');
								} else {
									echo $this->element('noaccount');
								}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--====== NAVIGATION MENU ==========-->
		<section>
			<div class="rows main_menu">
				<div class="container res-menu">
					<nav class="navbar navbar-inverse">
						<div>
							<!-- Brand and toggle get grouped for better mobile display(MOBILE MENU) -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button> <?php echo $this->Html->image('logo.png', ['alt' => 'Logo', 'class' => 'mob_logo']); ?></div>
							<!-- NAVIGATION MENU -->
							<div class="collapse navbar-collapse" id="myNavbar">
								<ul class="nav navbar-nav"> ]
									<li class="active"><?=
										$this->Html->link(__('Home'), [
											'controller' => 'Pages',
											'action' => 'display',
											'home'
										]);
										?>
									</li>
									<li><?= $this->Html->link(__('Hotels'), ['controller' => 'companies', 'action' => 'frontend']) ?> </li>
									<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sight Seeing <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><?=
												$this->Html->link(__('Tour Place - 1'), [
													'controller' => 'Pages',
													'action' => 'display',
													'places'
												]);
												?>
											</li>
											<li><?=
												$this->Html->link(__('Tour Place - 2'), [
													'controller' => 'Pages',
													'action' => 'display',
													'places'
												]);
												?>
											</li>
											<li><?=
												$this->Html->link(__('Tour Place - 3'), [
													'controller' => 'Pages',
													'action' => 'display',
													'places'
												]);
												?>
											</li>
										</ul>
									</li>
									<li><?=
										$this->Html->link(__('Events'), [
											'controller' => 'Pages',
											'action' => 'display',
											'events'
										]);
										?>
									</li>
									<li><?=
										$this->Html->link(__('Blog'), [
											'controller' => 'Pages',
											'action' => 'display',
											'blog'
										]);
										?>
									</li>
									<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li class="active"><?=
												$this->Html->link(__('About Us'), [
													'controller' => 'Pages',
													'action' => 'display',
													'about_us'
												]);
												?>
											</li>
											<li><?=
												$this->Html->link(__('Testimonials'), [
													'controller' => 'Pages',
													'action' => 'display',
													'testimonials'
												]);
												?>
											</li>
											<li><?=
												$this->Html->link(__('Events'), [
													'controller' => 'Pages',
													'action' => 'display',
													'events'
												]);
												?>
											</li>
											<li><?=
												$this->Html->link(__('Tips Before Reservation'), [
													'controller' => 'Pages',
													'action' => 'display',
													'tips'
												]);
												?>
											</li>
											<li><?=
												$this->Html->link(__('Price List'), [
													'controller' => 'Pages',
													'action' => 'display',
													'price_list'
												]);
												?>
											</li>
											<li><?=
												$this->Html->link(__('Discount'), [
													'controller' => 'Pages',
													'action' => 'display',
													'discount'
												]);
												?>
											</li>
											<li><?=
												$this->Html->link(__('FAQ'), [
													'controller' => 'Pages',
													'action' => 'display',
													'faq'
												]);
												?>
											</li>
											<li><?=
												$this->Html->link(__('Site map'), [
													'controller' => 'Pages',
													'action' => 'display',
													'site_map'
												]);
												?>
											</li>
										</ul>
									</li>
									<li><?=
										$this->Html->link(__('Contact Us'), [
											'controller' => 'Pages',
											'action' => 'display',
											'contact'
										]);
										?>
									</li>
								</ul>
								<div class="menu_book"><?=
									$this->Html->link(__('Book Your Package'), [
										'controller' => 'Pages',
										'action' => 'display',
										'booking'
									]);
									?>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</section>
		<!--====== BANNER ==========-->
		<!-- SECTION: HEADER -->
		<!--HEADER SECTION-->

		<?= $this->Flash->render() ?>
		<?= $this->fetch('content') ?>
		<!--====== FOOTER 1 ==========-->
		<section>
			<div class="rows">
				<div class="footer1 home_title tb-space">
					<div class="pla1 container">
						<!-- FOOTER OFFER 1 -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="disco">
								<h3>30%<span>OFF</span></h3>
								<h4>Eiffel Tower,Rome</h4>
								<p>valid only for 24th Dec</p> >
								<?=
									$this->Html->link(__('Book Now'), [
										'controller' => 'Pages',
										'action' => 'display',
										'booking'
									]);
								?>
							</div>
						</div>
						<!-- FOOTER OFFER 2 -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="disco1 disco">
								<h3>42%<span>OFF</span></h3>
								<h4>Colosseum,Burj Al Arab</h4>
								<p>valid only for 18th Nov</p> 
								<?=
									$this->Html->link(__('Book Now'), [
										'controller' => 'Pages',
										'action' => 'display',
										'booking'
									]);
								?>
							</div>
						</div>
						<!-- FOOTER MOST POPULAR VACATIONS -->
								
						<div class="col-md-6 col-sm-12 col-xs-12 foot-spec footer_places">
							<h4><span>Most Popular</span> Vacations</h4>
							<ul>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
								<li><?=
									$this->Html->link(__('Angkor Wat'), [
										'controller' => 'Pages',
										'action' => 'display',
										'places'
									]);
								?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--====== FOOTER 2 ==========-->
		<section>
			<div class="rows">
				<div class="footer">
					<div class="container">
						<div class="foot-sec2">
							<div>
								<div class="row">
									<div class="col-sm-3 foot-spec foot-com">
										<h4><span>Holiday</span> Tour & Reservations</h4>
										<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
									</div>
									<div class="col-sm-3 foot-spec foot-com">
										<h4><span>Address</span> & Contact Info</h4>
										<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
										<p> <span class="strong">Phone: </span> <span class="highlighted">+101-1231-1231</span> </p>
									</div>
									<div class="col-sm-3 col-md-3 foot-spec foot-com">
										<h4><span>SUPPORT</span> & HELP</h4>
										<ul class="two-columns">
											<li> <a href="#">About Us</a> </li>
											<li> <a href="#">FAQ</a> </li>
											<li> <a href="#">Feedbacks</a> </li>
											<li> <a href="#">Blog </a> </li>
											<li> <a href="#">Use Cases</a> </li>
											<li> <a href="#">Advertise us</a> </li>
											<li> <a href="#">Discount</a> </li>
											<li> <a href="#">Vacations</a> </li>
											<li> <a href="#">Branding Offers </a> </li>
											<li> <a href="#">Contact Us</a> </li>
										</ul>
									</div>
									<div class="col-sm-3 foot-social foot-spec foot-com">
										<h4><span>Follow</span> with us</h4>
										<p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
											<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--====== FOOTER - COPYRIGHT ==========-->
		<section>
			<div class="rows copy">
				<div class="container">
					<p>Copyrights © 2017 Company Name. All Rights Reserved</p>
				</div>
			</div>
		</section>
		<section>
			<div class="icon-float">
				<ul>
					<li><a href="#" class="sh">1k <br> Share</a> </li>
					<li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
					<li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
					<li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
					<li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
					<li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
					<li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
				</ul>
			</div>
		</section>
		<!--========= Scripts ===========-->

	</body>

</html>

