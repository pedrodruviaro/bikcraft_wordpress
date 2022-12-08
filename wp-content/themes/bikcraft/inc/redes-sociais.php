<?php 
    $contato = get_page_by_title("contato"); 
?>

<ul>
    <?php if(have_rows('rede_social')): while(have_rows('rede_social')) : the_row(); ?>

    <li>
        <a href="<?php the_sub_field("link_social") ?>" target="_blank">
            <img src="<?php the_sub_field("imagem_social") ?>" alt="<?php the_sub_field("alt_imagem_social") ?>">
        </a>
    </li>

    <?php endwhile; else : endif; ?>
</ul>