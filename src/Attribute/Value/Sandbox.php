<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum Sandbox: string
{
    case ALLOW_DOWNLOADS                          = 'allow-downloads';
    case ALLOW_FORMS                              = 'allow-forms';
    case ALLOW_MODALS                             = 'allow-modals';
    case ALLOW_ORIENTATION_LOCAL                  = 'allow-orientation-lock';
    case ALLOW_POINTER_LOCK                       = 'allow-pointer-lock';
    case ALLOW_POPUPS                             = 'allow-popups';
    case ALLOW_POPUPS_TO_ESCAPE_SANDBOX           = 'allow-popups-to-escape-sandbox';
    case ALLOW_PRESENTATION                       = 'allow-presentation';
    case ALLOW_SAME_ORIGIN                        = 'allow-same-origin';
    case ALLOW_SCRIPTS                            = 'allow-scripts';
    case ALLOW_TOP_NAVIGATION                     = 'allow-top-navigation';
    case ALLOW_TOP_NAVIGATION_BY_USER_ACTIVATION  = 'allow-top-navigation-by-user-activation';
    case ALLOW_TOP_NAVIGATION_TO_CUSTOM_PROTOCOLS = 'allow-top-navigation-to-custom-protocols';
}
