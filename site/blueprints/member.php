<?php if(!defined('KIRBY')) exit ?>

title: Member
pages: false
fields:
	title:
		label: Name and surname
		type:  text
	kind:
		label: Member's type
		type: radio
		options:
			core: Core
			support: Support
	bio:
		label: Bio
		type: textarea

