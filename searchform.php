<form method="get" action="<?php echo home_url("/"); ?>" class="search__form">
    <input type="search" name="s" value="<?php the_search_query(); ?>" placeholder="Type and press Enter" class="input" />
    <button type="submit" class="search__button">
        <svg width="25" height="25">
            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icons.svg#search"></use>
        </svg>
    </button>
</form>