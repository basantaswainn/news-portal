<?php

namespace App\Domain\User\Enums;

/**
 * Enum for User Status.
 *
 * Provides a set of predefined, constant values for user account statuses.
 */
enum UserStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case BANNED = 'banned';
}