(function($) {
    var $wp_inline_edit = inlineEditPost.edit;

    inlineEditPost.edit = function( id ) {
        $wp_inline_edit.apply( this, arguments );

        var $post_id = 0;
        if ( typeof( id ) == 'object' )
            $post_id = parseInt( this.getId( id ) );

        if ( $post_id > 0 ) {
            var $edit_row = $( '#edit-' + $post_id );
            var $post_row = $( '#post-' + $post_id );

            //今日の天気
            var $field_1 = $( '.column-_key_for_field_1', $post_row ).html();
            $( ':input[name="field_1"]', $edit_row ).val( $field_1 );
        }
    };

})(jQuery);