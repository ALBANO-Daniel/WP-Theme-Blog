<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <span class="date"><?php the_date() // accept parame ?></span>
            <?php
                // 3 paraments = 1st for before, 2 in btw each tag, 3 the after
                the_tags(
                    // example to convert:  <span class="tag"><i class='fa fa-tag'></i> tag</span>
                    '<span class="tag"><i class="fa fa-tag"></i>',
                    '</span><span class="tag"><i class="fa fa-tag"></i>',
                    '</span>'
                );
            ?>

            <span class="comment">
                <a href="#comments">
                    <i class='fa fa-comment'></i>
                    3 comments
                </a>
            </span>
        </div>
    </header>

    <?php
    the_content()
    ?>

    <?php 
    comments_template();
    ?>
    
</div>