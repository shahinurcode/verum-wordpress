<form action="<?php echo home_url('/'); ?>" method="GET" class="search-form">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-9">
                <input type="text" class="form-control" name="s" placeholder="Search..."/>
            </div>
            <div class="col-md-2 col-3 text-right">
                <div class="search_toggle toggle-wrap d-inline-block">
                    <img class="search-close" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/close.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/close@2x.png 2x" alt=""/>
                </div>
            </div>
        </div>
    </div>
</form>
