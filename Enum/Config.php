<?php
/**
 * Copyright © OpenGento, All rights reserved.
 * See LICENSE bundled with this library for license details.
 */
declare(strict_types=1);

namespace Opengento\PasswordLessLogin\Enum;

enum Config: string
{
    case XML_PATH_PASSWORDLESSLOGIN_TEMPLATE_ID = 'passwordlesslogin/email/template_id';
    case XML_PATH_PASSWORDLESSLOGIN_SENDER_EMAIL = 'passwordlesslogin/email/sender_email';
    case XML_PATH_PASSWORDLESSLOGIN_SENDER_NAME = 'passwordlesslogin/email/sender_name';
    case XML_PATH_PASSWORDLESSLOGIN_SECRET_KEY = 'passwordlesslogin/security/secret_key';
    case XML_PATH_PASSWORDLESSLOGIN_SECRET_KEY_URL = 'passwordlesslogin/system_config/secretkey';
}