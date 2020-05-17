<li>
  <figure>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
    <figcaption>
      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p><?php the_excerpt(); ?></p>
    </figcaption>
  </figure>
</li>