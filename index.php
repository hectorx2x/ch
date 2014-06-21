<?php 
/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *
 */
include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='index.html') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='start.html') {
	include $browser_t.'/start.html';
	}
elseif ($page_name=='album.html') {
	include $browser_t.'/album.html';
	}
elseif ($page_name=='video.html') {
	include $browser_t.'/video.html';
	}
elseif ($page_name=='login.html') {
	include $browser_t.'/login.html';
	}
elseif ($page_name=='support.html') {
	include $browser_t.'/support.html';
	}
elseif ($page_name=='work.html') {
	include $browser_t.'/work.html';
	}
elseif ($page_name=='blog.html') {
	include $browser_t.'/blog.html';
	}
elseif ($page_name=='single.html') {
	include $browser_t.'/single.html';
	}
elseif ($page_name=='about.html') {
	include $browser_t.'/about.html';
	}
elseif ($page_name=='industries.html') {
	include $browser_t.'/industries.html';
	}
elseif ($page_name=='pricing.html') {
	include $browser_t.'/pricing.html';
	}
elseif ($page_name=='faq.html') {
	include $browser_t.'/faq.html';
	}
elseif ($page_name=='features.html') {
	include $browser_t.'/features.html';
	}
elseif ($page_name=='contact.html') {
	include $browser_t.'/contact.html';
	}
elseif ($page_name=='404.html') {
	include $browser_t.'/404.html';
	}
elseif ($page_name=='contact-post.html') {
	include $browser_t.'/contact.html';
	include 'app/contact.php';
	}
else
	{
		include $browser_t.'/404.html';
	}

?>
