<?php

/**
 * CodeMommy DateTimePHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\DateTimePHP;

use Carbon\Carbon;

/**
 * Class DateTime
 * @package CodeMommy\DateTimePHP
 */
class DateTime extends Carbon
{
    /**
     * DateTime constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}
