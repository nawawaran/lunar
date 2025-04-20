<?php

namespace Lunar\Admin\Enums;

enum PinAuditAction: string
{
    case CREATE = 'create';
    case CHANGE = 'change';
    case RESET = 'reset';
    case ATTEMPT = 'attempt';

    case LOCKED = 'locked';

}
