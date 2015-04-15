<?php if(!defined('KIRBY')) exit ?>

title: About
files: false
pages: true
	template: 
		- member
		- editor
fields:
	title:
		label: Title
		type:  text
	text:
		label: Description
		type: textarea

