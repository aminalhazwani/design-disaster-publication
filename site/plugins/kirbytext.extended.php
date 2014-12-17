<?php 
  
  // image tag
  kirbytext::$tags['img'] = array(
    'attr' => array(
      'width',
      'height',
      'alt',
      'text',
      'title',
      'class',
      'imgclass',
      'linkclass',
      'caption',
      'link',
      'target',
      'rel'
    ),
    'html' => function($tag) {

      $url     = $tag->attr('img');
      $alt     = $tag->attr('alt');
      $title   = $tag->attr('title');
      $link    = $tag->attr('link');
      $caption = $tag->file('caption');
      $file    = $tag->file($url);

      // use the file url if available and otherwise the given url
      $url = $file ? $file->url() : url($url);

      // alt text
      $alt = $file->caption();
      if(empty($alt)) $alt = pathinfo($url, PATHINFO_FILENAME);

      $img = html::img($url, array(
        'width'  => $tag->attr('width'),
        'height' => $tag->attr('height'),
        'class'  => $tag->attr('imgclass'),
        'title'  => html($title),
        'alt'    => html($alt)
      ));

      $img = html::a(url($url), $img, array(
        'rel'    => $tag->attr('rel'),
        'class'  => $tag->attr('linkclass'),
        'title'  => html($tag->attr('title')),
        'target' => $tag->target()
      ));

      $figure = new Brick('figure');
      $figure->addClass($tag->attr('class'));
      $figure->append($img);

      if(!empty($file->caption())) {
        $figure->append('<figcaption>' . html($file->caption()) . '</figcaption>');
      }

      return $figure;

    }
  );


?>