<div id="search_main" class="block">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
        <div>
        <input type="text" class="field" name="s" id="s"  value="Enter keywords..." onfocus="if (this.value == 'Enter keywords...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter keywords...';}" />
        <input type="image" src="<?php bloginfo('template_directory'); ?>/<?php woo_style_path(); ?>/img_search.gif" class="submit" name="submit" />
        </div>
    </form>
</div>
