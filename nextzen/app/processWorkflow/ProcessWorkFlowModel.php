<?php

namespace App\processWorkflow;

use Illuminate\Database\Eloquent\Model;

class ProcessWorkFlowModel extends Model
{
    protected $table = 'process_workflow_table';
    protected $fillable =[
        'header',
        'text',
        'created_by',
        'soft_delete'
    ];

}
