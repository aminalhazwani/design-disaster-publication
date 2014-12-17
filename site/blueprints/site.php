<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  navigation:
    label: Navigation
    type: textarea
  keywords:
    label: Keyword for SEO
    type: tags
  copyright:
    label: Copyright
    type:  textarea