<?php

class kirbytextExtended extends kirbytext {

  function __construct($text, $markdown=true) {
    parent::__construct($text, $markdown);
    $this->addTags('pullquote');
  }

  function wikipedia($params) {
      $search = $params['pullquote'];
      $defaults = array(
        'text'     => $search
      );
      // build the link tag
      return '<pullquote>' . html($options['text']) . '</pullquote>';
  }
}

?>