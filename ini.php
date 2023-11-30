<?php

From now one, you are able to use in your .ini

;session.name = ${SESSION_NAME:-Foo}
;sendmail_from = "${MAIL_FROM_USER:-info}@${MAIL_FROM_DOMAIN:-example.com}"

define('APP_NAME', "MyApp");
parse_ini_string('name = ${SESSION_NAME:-APP_NAME}');