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
  keywords:
    label: Keyword for SEO
    type: tags
  description:
    label: Description
    type:  textarea
  navigation:
    label: Navigation
    type: textarea
  imprint:
    label: Imprint
    type: textarea
  copyright:
    label: Copyright
    type:  textarea