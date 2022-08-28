<?php


$api = get_rest_url();

wp_send_json_success(["api_url" => $api]);

exit;