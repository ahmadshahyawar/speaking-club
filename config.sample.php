<?php
// Copy this file to a location OUTSIDE public_html, e.g. ~/config/speaking_club_config.php
// and fill in real values. includes/db.php loads it from that fixed path — never from
// inside the web root — so it can never be served over HTTP even if misconfigured.

return [
    'db_host' => 'localhost',
    'db_name' => 'u856637812_speaking_portal',
    'db_user' => 'u856637812_speaking',
    'db_pass' => 'CHANGE_ME',

    // From https://console.anthropic.com/settings/keys
    'anthropic_api_key' => 'CHANGE_ME',
    'anthropic_model' => 'claude-sonnet-4-5',
];
