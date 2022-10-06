<?php
    get_header();
?>

    <article class="content px-3 py-5 p-md-5">
        
    <?php
    
    if(have_posts()){
        while(have_posts()){

            the_post();

            // instead of :
            // the_content();

            get_template_part('template-parts/content', 'article'); // content-article.php 
            // 1st param = file path and file name, get the folder and file initials || if hiffen after content(2nd param).php
            // 2nd = type  ( hiffened version )  ex: content-type.php
        }
    }

    ?>

    </article>


<?php
    get_footer();
?>