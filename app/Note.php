<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  /**
     * The table associated with the model.
     *
     * @var int
     */
    protected $id;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $title ;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $content;
}
