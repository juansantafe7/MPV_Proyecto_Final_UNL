add_action('init', function() {
    if (isset($_POST['eform_action']) && $_POST['eform_action'] === 'create_order') {
        $admin_email = 'servicio@juancruzleal.com';

        $user_email = sanitize_email($_POST['email'] ?? '');
        $user_message = sanitize_text_field($_POST['message'] ?? '');
        $total_price = sanitize_text_field($_POST['total'] ?? 'No definido');
        $ref = sanitize_text_field($_POST['order_ref'] ?? 'Sin referencia');

        $subject = "Nueva cotización recibida - Ref: $ref";
        $body = "
            <strong>Referencia:</strong> $ref<br>
            <strong>Email del usuario:</strong> $user_email<br>
            <strong>Mensaje:</strong> $user_message<br>
            <strong>Total estimado:</strong> $total_price
        ";

        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail($admin_email, $subject, $body, $headers);
    }
});