<?php

$api = get_rest_url();

wp_send_json_success(["baseUrl" => $api, "endpoints" => "Please refer to this plugin https://github.com/airesvsg/acf-to-rest-api"], 200, JSON_UNESCAPED_SLASHES);

exit;
