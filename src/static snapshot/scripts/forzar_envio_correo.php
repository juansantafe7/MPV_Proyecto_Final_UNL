add_filter( 'wp_mail_from', function( $email ) {
    return 'servicio@juancruzleal.com';
});
add_filter( 'wp_mail_from_name', function( $name ) {
    return 'Juan Cruz Leal';
});
