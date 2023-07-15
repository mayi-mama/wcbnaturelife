<?php get_header(); ?>

    <main class="main-contents wrapper">
        <div class="post-list">
            <?php if(have_posts()): while(have_posts()); the_post(); ?>
            <article class="post-item">
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <img src="images/img-fruits.jpg" alt="" class="wp-post-image">
                </a>
                <header class="post-header">
                    <h2 class="post-title">
                        <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
                    </h2>
                    <time class="post-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_date(); ?></time>
                    <?php the_category(); ?>
                </header>
            </article>
            <?php endwhile; esle : ?>
              
            <?php endif; ?>
        </div>

        <div class="nav-links">
            <a href="#">← 新しい投稿</a>
            <a href="#">過去の投稿 →</a>
        </div>
    </main>

    <?php get_footer(); ?>