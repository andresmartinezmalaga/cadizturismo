<?php namespace System\Models;

use October\Rain\Database\Models\Revision as RevisionBase;

/**
 * Revision history model
 *
 *
 *
 */
class Revision extends RevisionBase
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'system_revisions';
}
