<?php

namespace Lunar\Admin\Enums;

enum PinAuditActions: string
{
    case CREATE = 'create';
    case CHANGE = 'change';
    case RESET = 'reset';
    case ATTEMPT = 'attempt';
}
