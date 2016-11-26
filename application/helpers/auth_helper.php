<?php


function auth(){

	$CI = &get_instance();

	if($CI->session->userdata('user') == ''){

		redirect('login');
	}
}