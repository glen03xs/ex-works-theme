<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ex-works
 */

 if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


	<aside>
		<div class="top-post-list">
			<h4>Top Post</h4>
			<ul>
				<li>
					<a href="#"><i class="icons fa fa-angle-right"></i><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></a>
				</li>
				<li>
					<a href="#"><i class="icons fa fa-angle-right"></i><p>Nemo adipisci nostrum earum aperiam</p></a>
				</li>
				<li>
					<a href="#"><i class="icons fa fa-angle-right"></i><p>Dignissimos dolorum deserunt quis optio, corporis qui rem neque aliquam</p></a>
				</li>
				<li>
					<a href="#"><i class="icons fa fa-angle-right"></i><p>Quaerat vitae quibusdam velit delectus deleniti.</p></a>
				</li>
			</ul>
		</div> <!--end recent-post-list-->

		<hr>
		<div class="categories">
			<h5>categories</h5>
			<ul>
				<li><a href="#">Logistics</a></li>
				<li><a href="#">Customs</a></li>
				<li><a href="#">Transportation</a></li>
				<li><a href="#">Delivery</a></li>
				<li><a href="#">Shipping</a></li>
				<li><a href="#">Warehouse</a></li>
				<li><a href="#">Storage</a></li>
			</ul>
		</div> <!--end categories-->

		<hr>

		<div class="email-newsletter">
			<h5>Newsletter</h5>
			<p>Get the latest articles and trade news delivered to your inbox</p>
			<form action="">
				<input type="email" placeholder="name@email.com">
				<input class="btn" type="submit" value="Sign Up">
			</form>
		</div> <!--end email-newsletter-->
	</aside>

