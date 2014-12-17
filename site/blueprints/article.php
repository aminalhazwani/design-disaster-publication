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
  introbkcolor:
    label: Introduction background color
    type: radio
    default: white
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  introtextcolor:
    label: Introduction text color
    type: radio
    default: black
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  intro:
    label: Introduction content
    type:  textarea

  line-c:
    type: line

  chonetitle:
    label: Chapter 1 title
    type:  text
  chonebkcolor:
    label: Chapter 1 background color
    type: radio
    default: white
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chonetextcolor:
    label: Chapter 1 text color
    type: radio
    default: black
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chone:
    label: Chapter 1 content
    type:  textarea

  line-d:
    type: line

  chtwotitle:
    label: Chapter 2 title
    type:  text
  chtwobkcolor:
    label: Chapter 2 background color
    type: radio
    default: white
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chtwotextcolor:
    label: Chapter 2 text tolor
    type: radio
    default: black
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chtwo:
    label: Chapter 2 content
    type:  textarea

  line-e:
    type: line

  chthreetitle:
    label: Chapter 3 title
    type:  text
  chthreebkcolor:
    label: Chapter 3 background color
    type: radio
    default: white
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chthreetextcolor:
    label: Chapter 3 text tolor
    type: radio
    default: black
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chthree:
    label: Chapter 3 content
    type:  textarea

  line-f:
    type: line

  chfourtitle:
    label: Chapter 4 title
    type:  text
  chfourbkcolor:
    label: Chapter 4 background color
    type: radio
    default: white
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chfourtextcolor:
    label: Chapter 4 text tolor
    type: radio
    default: black
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chfour:
    label: Chapter 4 content
    type:  textarea

  line-g:
    type: line

  chfivetitle:
    label: Chapter 5 title
    type:  text
  chfivebkcolor:
    label: Chapter 5 background color
    type: radio
    default: white
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chfivetextcolor:
    label: Chapter 5 text tolor
    type: radio
    default: black
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chfive:
    label: Chapter 5 content
    type:  textarea

  line-h:
    type: line

  chsixtitle:
    label: Chapter 6 title
    type:  text
  chsixbkcolor:
    label: Chapter 6 background color
    type: radio
    default: white
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chsixtextcolor:
    label: Chapter 6 text tolor
    type: radio
    default: black
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chsix:
    label: Chapter 6 content
    type:  textarea

  line-i:
    type: line

  chseventitle:
    label: Chapter 7 title
    type:  text
  chsevenbkcolor:
    label: Chapter 7 background color
    type: radio
    default: white
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chseventextcolor:
    label: Chapter 7 text tolor
    type: radio
    default: black
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chseven:
    label: Chapter 7 content
    type:  textarea

  line-j:
    type: line

  cheighttitle:
    label: Chapter 8 title
    type:  text
  cheightbkcolor:
    label: Chapter 8 background color
    type: radio
    default: white
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  cheighttextcolor:
    label: Chapter 8 text tolor
    type: radio
    default: black
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  cheight:
    label: Chapter 8 content
    type:  textarea

  line-k:
    type: line

  chninetitle:
    label: Chapter 9 title
    type:  text
  chninebkcolor:
    label: Chapter 9 background color
    type: radio
    default: white
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chninetextcolor:
    label: Chapter 9 text tolor
    type: radio
    default: black
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chnine:
    label: Chapter 9 content
    type:  textarea

  line-l:
    type: line

  chtentitle:
    label: Chapter 10 title
    type:  text
  chtenbkcolor:
    label: Chapter 10 background color
    type: radio
    default: white
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chtentextcolor:
    label: Chapter 10 text tolor
    type: radio
    default: black
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  chten:
    label: Chapter 10 content
    type:  textarea

  line-m:
    type: line

  conclusiontitle:
    label: Conclusion title
    type:  text
  conclusionbkcolor:
    label: Conclusion background color
    type: radio
    default: white
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  conclusiontextcolor:
    label: Conclusion text color
    type: radio
    default: black
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  conclusion:
    label: Conclusion content
    type:  textarea

  line-n:
    type: line

  appendixtitle:
    label: Appendix title
    type:  text
  appendixbkcolor:
    label: Appendix background color
    type: radio
    default: white
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  appendixtextcolor:
    label: Appendix text color
    type: radio
    default: black
    options:
      black: Black
      yellow: Yellow
      red: Red
      white: White
    width: 1/2
  appendix:
    label: Appendix content
    type:  textarea