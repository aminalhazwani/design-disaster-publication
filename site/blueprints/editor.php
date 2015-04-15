<?php if(!defined('KIRBY')) exit ?>

title: Editor
pages: false
fields:
	title:
		label: Name and surname
		type:  text
	kind:
		label: Member's type
		type: radio
		options:
			writer: Writer
			designer: Designer
	bio:
		label: Bio
		type: textarea

