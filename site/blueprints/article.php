<?php if(!defined('KIRBY')) exit ?>

title: Article
pages: false
files:
  sortable: true
  fields: 
    caption: 
      label: Caption
      type: text
    cover:
      label: Cover Image
      type: checkbox
      text: Is this the cover image?
    size:
      label: Size
      type: radio
      default: left
      options:
        full: Full
        left: Left
fields:
  title:
    label: Title
    type:  text
  description:
    label: Meta description (SEO)
    type:  text
  keywords:
    label: Keywords (SEO)
    type:  tags
  abstract:
    label: Abstract
    type:  textarea

  line-a:
    type: line

  author:
    label: Author's name
    type:  text
  authoraffilation:
    label: Author's affilation
    type:  text
    width: 1/2
  authormail:
    label: Author's e-mail
    type:  email
    width: 1/2
  designer:
    label: Designer's name
    type:  text
  designeraffilation:
    label: Designer's affilation
    type:  text
    width: 1/2
  designermail:
    label: Designer's e-mail
    type:  email
    width: 1/2

  line-b:
    type: line

  introduction:
    label: Introduction
    type:  textarea
  text:
    label: Content
    type:  textarea
  conclusion:
    label: Conclusion
    type:  textarea
  appendix:
    label: Appendix
    type:  textarea