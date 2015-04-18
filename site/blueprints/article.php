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
    measure:
      label: Image Position
      type: radio
      default: left
      options:
        left: Left
        inline: Inline
        full: Full
    dim: 
      label: Image Size
      type: select
      default: hundred
      options: 
        ten: 10%
        twenty: 20%
        thirty: 30%
        forty: 40%
        fifty: 50%
        sixty: 60%
        seventy: 70%
        eighty: 80%
        ninety: 90%
        hundred: 100%
fields:
  title:
    label: Title
    type:  text
  keywords:
    label: Keywords (SEO)
    type:  tags
  description:
    label: Short introduction
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

  introtitle:
    label: Introdoction title
    type: text
  intro:
    label: Introduction content
    type:  textarea

  line-c:
    type: line

  chonetitle:
    label: Chapter 1 title
    type:  text
  chone:
    label: Chapter 1 content
    type:  textarea

  line-d:
    type: line

  chtwotitle:
    label: Chapter 2 title
    type:  text
  chtwo:
    label: Chapter 2 content
    type:  textarea

  line-e:
    type: line

  chthreetitle:
    label: Chapter 3 title
    type:  text
  chthree:
    label: Chapter 3 content
    type:  textarea

  line-f:
    type: line

  chfourtitle:
    label: Chapter 4 title
    type:  text
  chfour:
    label: Chapter 4 content
    type:  textarea

  line-g:
    type: line

  chfivetitle:
    label: Chapter 5 title
    type:  text
  chfive:
    label: Chapter 5 content
    type:  textarea

  line-h:
    type: line

  chsixtitle:
    label: Chapter 6 title
    type:  text
  chsix:
    label: Chapter 6 content
    type:  textarea

  line-i:
    type: line

  chseventitle:
    label: Chapter 7 title
    type:  text
  chseven:
    label: Chapter 7 content
    type:  textarea

  line-j:
    type: line

  cheighttitle:
    label: Chapter 8 title
    type:  text
  cheight:
    label: Chapter 8 content
    type:  textarea

  line-k:
    type: line

  chninetitle:
    label: Chapter 9 title
    type:  text
  chnine:
    label: Chapter 9 content
    type:  textarea

  line-l:
    type: line

  chtentitle:
    label: Chapter 10 title
    type:  text
  chten:
    label: Chapter 10 content
    type:  textarea

  line-m:
    type: line

  conclusiontitle:
    label: Conclusion title
    type:  text
  conclusion:
    label: Conclusion content
    type:  textarea

  line-n:
    type: line

  appendixtitle:
    label: Appendix title
    type:  text
  appendix:
    label: Appendix content
    type:  textarea