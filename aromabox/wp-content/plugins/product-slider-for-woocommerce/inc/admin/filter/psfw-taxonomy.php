<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>

<div class ="psfw-post-option-wrap">
    <label for="psfw-show-taxonomy-query" class="psfw-taxonomy-relation">
        <?php _e( 'Filter Taxonomies/Categories Post', PSFW_TD ); ?>
    </label>
    <div class="psfw-post-field-wrap">
        <label class="psfw-switch">
            <input type="checkbox" class="psfw-show-taxonomy-relation psfw-checkbox" value="<?php
            if (isset( $psfw_option['psfw_show_taxonomy_query'])) {
                echo esc_attr( $psfw_option['psfw_show_taxonomy_query']);
            } else {
                echo '0';
            }
            ?>" name="psfw_option[psfw_show_taxonomy_query]" <?php if (isset( $psfw_option['psfw_show_taxonomy_query']) && $psfw_option['psfw_show_taxonomy_query'] == '1') { ?>checked="checked"<?php } ?>/>
            <div class="psfw-slider round"></div>
        </label>
        <p class="description"> <?php _e('Enable to show posts associated with certain taxonomy/category.', PSFW_TD ) ?></p>
    </div>
</div>
<div class="psfw-taxonomy-main-wrap"
<?php if ( isset( $psfw_option[ 'psfw_show_taxonomy_query' ] ) && $psfw_option[ 'psfw_show_taxonomy_query' ] == '1' ) { ?>
         style="display: block;" <?php } else { ?>
         style="display: none;" <?php } ?>>
    <div class="psfw-post-option-wrap">
        <label> <?php _e( 'Taxonomy/Category Queries Type', PSFW_TD ); ?> </label>
        <div class="psfw-tooltip-icon">
            <span class="dashicons dashicons-info"></span>
            <span class="psfw-tooltip-info"><?php _e( 'Choose Simple Taxonomy/Category Query to display post from a single taxonomy or category with single term.For example display posts tagged with bob, under people custom taxonomy.Choose Multiple Taxonomy/Category Handling to display posts from several custom taxonomies or categories.', PSFW_TD ); ?></span>
        </div>
        <div class="psfw-post-field-wrap">
            <div class="psfw-info-wrap">
                <select name="psfw_option[taxonomy_queries_type]" class="psfw-taxonomy-queries-type">
                    <option value="simple-taxonomy"  <?php if ( isset( $psfw_option[ 'taxonomy_queries_type' ] ) && $psfw_option[ 'taxonomy_queries_type' ] == 'simple-taxonomy' ) echo 'selected=="selected"'; ?>><?php _e( 'Simple Taxonomy/Category Query', PSFW_TD ) ?></option>
                    <option value="multiple-taxonomy"  <?php if ( isset( $psfw_option[ 'taxonomy_queries_type' ] ) && $psfw_option[ 'taxonomy_queries_type' ] == 'multiple-taxonomy' ) echo 'selected=="selected"'; ?>><?php _e( 'Multiple Taxonomy/Category Handling', PSFW_TD ) ?></option>
                </select>
            </div>
        </div>
    </div>
    <div class="psfw-post-option-wrap">
        <label><?php _e( 'Taxonomy/Category', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <select name="psfw_option[select_post_taxonomy]" class="psfw-select-taxonomy">
                <option value="select" <?php if ( isset( $psfw_option[ 'select_post_taxonomy' ] ) && $psfw_option[ 'select_post_taxonomy' ] == 'select' ) echo 'selected=="selected"'; ?>><?php echo _e( 'Choose Taxonomy', PSFW_TD ); ?></option>
                <?php
                $product_post_type = 'product';
                $taxonomies = get_object_taxonomies( $product_post_type, 'objects' );

                if(is_array($taxonomies)){

                    foreach ( $taxonomies as $tax ) {
                        $value = $tax -> name;
                        $label = $tax -> label;
                        ?>
                        <option value="<?php echo $value; ?>" <?php if ( isset( $psfw_option[ 'select_post_taxonomy' ] ) && $psfw_option[ 'select_post_taxonomy' ] == $value ) echo 'selected=="selected"'; ?>><?php echo $label; ?></option>
                        <?php
                    }
                }
                ?>
            </select>
            <p class="description"><?php _e( 'Please select the product type first', PSFW_TD ); ?></p>
            <div class="psfw-loader-preview" style="display:none;">
                <img src="<?php echo PSFW_IMG_DIR . '/ajax-loader-add.gif' ?>">
            </div>
        </div>
    </div>
    <div class="psfw-simple-terms-wrap" style="display: none;">
        <div class="psfw-post-option-wrap">
            <label><?php _e( 'Term', PSFW_TD ); ?></label>
            <div class="psfw-tooltip-icon">
                <span class="dashicons dashicons-info"></span>
                <span class="psfw-tooltip-info"><?php _e( 'Terms refers to the items in a taxonomy.
For example, a website has categories books, politics, and blogging in it. While category itself is a taxonomy the items inside it are called terms.', PSFW_TD ); ?></span>
            </div>
            <div class="psfw-post-field-wrap">
                <div class="psfw-info-wrap">
                    <select name="psfw_option[simple_taxonomy_terms]" class="psfw-simple-taxonomy-term">
                        <option value=""><?php echo _e( 'Choose Term', PSFW_TD ); ?></option>
                        <?php
                        if ( ! empty( $psfw_option[ 'simple_taxonomy_terms' ] ) ) {
                            echo $this -> psfw_fetch_category_list( $psfw_option[ 'select_post_taxonomy' ], $psfw_option[ 'simple_taxonomy_terms' ] );
                        }
                        ?>
                    </select>
                    <p class="description"><?php _e( 'Please select taxonomy first.', PSFW_TD ); ?></p>
                    <div class="psfw-taxonomy-preview" style="display:none;">
                        <img src="<?php echo PSFW_IMG_DIR . '/ajax-loader-add.gif' ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="psfw-multiple-terms-wrap" style= "display: none;">
        <div class="psfw-post-option-wrap">
            <label><?php _e( 'Terms', PSFW_TD );
                        ?></label>
            <div class="psfw-tooltip-icon">
                <span class="dashicons dashicons-info"></span>
                <span class="psfw-tooltip-info"><?php _e( 'Terms refers to the items in a taxonomy.
For example, a website has categories books, politics, and blogging in it. While category itself is a taxonomy the items inside it are called terms.', PSFW_TD ); ?></span>
            </div>
            <div class ="psfw-post-field-wrap">
                <div class="psfw-info-wrap psfw-multiple-select">
                    <select name="psfw_option[taxonomy_terms][]" multiple="multiple" class="psfw-multiple-taxonomy-term">
                        <option value=""><?php echo _e( 'Choose Terms', PSFW_TD ); ?></option>
                        <?php
                        if ( isset( $psfw_option[ 'taxonomy_terms' ] ) ) {
                            echo $this -> psfw_fetch_category_list( $psfw_option[ 'select_post_taxonomy' ], $psfw_option[ 'taxonomy_terms' ] );
                        }
                        ?>
                    </select>
                    <p class="description"><?php _e( 'Please select taxonomy first.', PSFW_TD ); ?></p>
                </div>
            </div>
        </div>
        <div class="psfw-post-option-wrap">
            <label><?php _e( 'Relation', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <select name="psfw_option[psfw_multiple_tax_relation]" class="psfw-multiple-tax-relation">
                    <option value="AND"  <?php if ( isset( $psfw_option[ 'psfw_multiple_tax_relation' ] ) && $psfw_option[ 'psfw_multiple_tax_relation' ] == 'AND' ) echo 'selected=="selected"'; ?>><?php _e( 'AND', PSFW_TD ) ?></option>
                    <option value="OR"  <?php if ( isset( $psfw_option[ 'psfw_multiple_tax_relation' ] ) && $psfw_option[ 'psfw_multiple_tax_relation' ] == 'OR' ) echo 'selected=="selected"'; ?>><?php _e( 'OR', PSFW_TD ) ?></option>
                </select>
            </div>
        </div>
        <div class="psfw-tax-inner-wrap">
            <?php
            if ( isset( $psfw_option[ 'psfw_blog' ] ) && is_array( $psfw_option[ 'psfw_blog' ] ) ) {
                $psfw_blog_count = count( $psfw_option[ 'psfw_blog' ] );
            } else {
                $psfw_blog_count = 0;
            }
            if ( $psfw_blog_count > 0 ) {
                foreach ( $psfw_option[ 'psfw_blog' ] as $blog_key => $blog_detail ) {
                    include(PSFW_PATH . 'inc/admin/forms/term-list.php');
                }
            }
            ?>
        </div>
        <div class="psfw-taxonomy-button">
            <input type="button" class="button-primary psfw-add-tax-condition" value="<?php _e( 'Add New Taxonomy Condition', PSFW_TD ); ?>">
        </div>
    </div>
</div>