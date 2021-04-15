<?php get_header()?>
<?php
    if(have_post());
        while(have_post()) :the_post(); 
?>
    <h2>
        <a href="<?php the_permalink() ?>"> <?php the_litle()?> </a>
    </h2> 

<?php the_content() ?>

<?php endwhile;
    else{
        echo '<p>aqui vai os posts</p>';
    }
    endif;
?>

<?php get_footer()?>

 