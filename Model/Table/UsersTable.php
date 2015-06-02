<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class UsersTable extends Table
{

    public function initialize(array $config)
    {
        $this->belongsToMany('UserCategories', [
            'joinTable' => 'users_user_categories',
        ]);
    }
}