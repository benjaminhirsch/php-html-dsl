<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum HttpEquiv: string
{
    case CONTENT_SECURITY_POLICY = 'content-security-policy';
    case CONTENT_TYPE            = 'content-type';
    case DEFAULT_STYLE           = 'default-style';
    case X_UA_COMPATIBLE         = 'x-ua-compatible';
    case REFRESH                 = 'refresh';
}
