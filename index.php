<?php get_header(); ?>

        <!-- Hero -->
        <section class="hero slider swiper">
            <div class="hero__inner slider-wrapper swiper-wrapper">

            <?php
            
                $args = [
                    'post_type' => 'project',
                    'meta_query'  => array(
                        array(
                            'key' => 'show_in_hero',
                            'value' => '1'
                        )
                    )

                ];

                $query = new WP_Query($args);

                if ($query->have_posts() ) : while($query->have_posts() ) : $query->the_post();

                $slider_content = get_field('slider');
                $hero_content = get_field('content');

            ?>
                <!-- slide -->
                <div class="hero__content swiper-slide" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_id(), 'project_hero' ); ?>);">
                    <div class="anchor-name"><?php echo $slider_content['slider_anchor']; ?></div>
                    <div class="hero__text">
                        <h2 class="hero__title"><?php echo $hero_content['hero_title']; ?></h2>
                        <p class="hero__ingress"><?php echo $hero_content['hero_excerpt']; ?></p>
                    </div>
                
                    <div class="slider-description">
                        <div>
                            <h3 class="slider__title"><?php echo $slider_content['slider_title'];?></h3>
                            <p class="slider__text"><?php echo $slider_content['slider_excerpt']; ?></p>
                        </div>
                    </div>
                </div>
            <?php  endwhile; wp_reset_postdata(); endif; ?>


            </div>

            <!-- pagination -->
            <div class="slider-pagination">
                <a href="" class="slider__arrow slider__arrow--left"> <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chevron-left.svg" alt=""> </a>
                
                <div class="slider__meta">
                    <div class="slider__counter"> <strong class="slider__current">01</strong> <span class="slider__total">05</span> </div>
                    <div class="slider__anchor"> <strong>City Hall</strong> - München</div>
                </div>
                
                <a href="" class="slider__arrow slider__arrow--right"> <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chevron-right.svg" alt=""> </a>
            </div>

            
  
        </section>

        <!-- Upcoming projects -->
        <section class="upcoming-projects section">
            <header class="upcoming-projects__header section__header">
                <h2 class="upcoming-projects__title section__title">Upcoming Projects</h2>
            </header>

            <div class="section__content upcoming-projects__content">

            <?php 
             
            $args = [
                'post_type' => 'project',
                'posts_per_page' => 1,
                'meta_query' => array(
                    array(
                        'key' => 'featured_project',
                        'value' => '1'
                    )
                )
            ];

            $query = new WP_Query($args);

            if($query->have_posts()): while($query->have_posts()) : $query->the_post();

            ?>

                <article class="featured">

                    <div class="featured__project">

                        <header class="featured__header">
                            <h5 class="featured__name"> <strong>Project</strong> <?php the_field('project_name'); ?></h5>
                            <h3 class="featured__title"><?php the_field('project_alternative_title'); ?></h3>
                        </header>

                        <div class="featured__content">
                            <?php the_excerpt(); ?>
                        </div>

                        <footer class="featured__footer">
                            <a href=" <?php the_permalink(); ?>" class="featured__explore">Explore Projects</a>
                        </footer>

                    </div>

                    <figure class="featured__img">
                        <?php the_post_thumbnail('project_portrait'); ?>
                    </figure>

                </article>

            <?php  endwhile; wp_reset_postdata(); endif;  ?>

            </div>

            <div class="projects">

                <div class="swiper-wrapper">

                <?php 
                
                $args = [
                    'post_type' => 'project'
                ];

                $query = new WP_Query($args);

                if($query->have_posts()) : while($query->have_posts()): $query->the_post();

                ?>
                    <!-- project -->
                    <article class="project swiper-slide">
                        <header class="project__header" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_id(), 'project_thumb' ) ?>">
                            <a href="" class="project__readmore"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-more.svg" alt=""></a>
                        </header>

                        <h3 class="project__title"><?php the_title(); ?></h3>
                        <div class="project__name"><strong>Project</strong> <?php the_field('project_name'); ?></div>
                    </article>

                    <?php 
                    endwhile; wp_reset_postdata(); endif;
                    ?>

                    

                </div>

               

            </div>

        </section>

        <!-- About -->
        <section class="about section">
            <header class="about__header section__header">
                <h2 class="about__title section__title">Archbear Workflow</h2>
            </header>

            <div class="about__content section__content">
                <article class="workflow">

                    <figure class="workflow__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about@2x.jpg" alt="">
                    </figure>

                    <div class="workflow__text">
                        <header class="workflow__header">
                            <h3 class="workflow__title">Design, Creativity <strong>details & focus</strong></h3>
                        </header>

                        <div class="workflow__content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus quas quidem perferendis similique beatae ab, dolores totam ipsum veritatis dignissimos?</p>
                        </div>

                        <footer class="workflow__footer">
                            <a href="" class="workflow__explore">This is Archbear</a>
                        </footer>
                    </div>

                </article>
            </div>
        </section>

        <!-- Footer -->

        <?php get_footer(); ?>