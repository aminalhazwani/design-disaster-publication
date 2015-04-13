<?php 
  // img tag
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
      $src     = $tag->attr('data-src');
      $alt     = $tag->attr('alt');
      $title   = $tag->attr('title');
      $link    = $tag->attr('link');
      $linkclass = $tag->attr('linkclass');
      $caption = $tag->file('caption');
      $file    = $tag->file($url);

      // use the file url if available and otherwise the given url
      $url = '../assets/images/1px.png';

      // data-src
      $src = $file ? $file->url() : url($url);

      // class
      $class = 'lazy';
      $imgMode = $file->measure();

      // link class
      $linkclass = 'pop';

      // alt text
      if($file->caption() != '') {
        $alt = $file->caption();
      }
      else {
        $alt = pathinfo($url, PATHINFO_FILENAME);
      }

      $img = html::img($url, array(
        'data-src'=> html($src),
        'width'  => $tag->attr('width'),
        'height' => $tag->attr('height'),
        'class'  => html($class),
        'title'  => html($title),
        'alt'    => html($alt)
      ));

      $img = html::a(html($src), $img, array(
        'rel'    => $tag->attr('rel'),
        'class'  => html($linkclass),
        'title'  => html($tag->attr('title')),
        'target' => $tag->target()
      ));

      $figure = new Brick('figure');
      $figure->addClass(html($imgMode));
      $figure->append($img);

      if($file->caption() != '') {
        $figure->append('<figcaption>' . html($file->caption()) . '</figcaption>');
      }

      return $figure;

    }
  );


?>