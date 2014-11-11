<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  description:
    label: Description
    type:  textarea
  year:
    label: Year
    type:  text
  text:
    label: Text
    type:  textarea
  keywords:
    label: Keyword for SEO
    type:  tags