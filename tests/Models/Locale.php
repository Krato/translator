<?php

/*
 * This file is part of Laravel Translator.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vinkla\Tests\Translator\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * This is the locale eloquent model class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class Locale extends Model
{
    /**
     * A list of methods protected from mass assignment.
     *
     * @var string[]
     */
    protected $guarded = ['_token', '_method'];
}
