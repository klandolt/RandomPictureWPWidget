<?PHP

function RandomPicture_ShortCode( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'id' => 1
    ), $atts );
	
	$ScipteHead = getGallerySource($themeid);
	$RandomPicture = getRandomPicture();

    return $ScipteHead . ' ' . $RandomPicture;
}

add_shortcode( 'RandomPicture', 'RandomPicture_ShortCode' );
?>