<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laratrust\Traits\LaratrustUserTrait;

/**
 * Class Users
 * @package App\Models
 * @version May 8, 2017, 5:56 am UTC
 */
class Users extends Model
{
    use LaratrustUserTrait;
    //use SoftDeletes;

    public $table = 'users';
    public $role_id;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'role_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'role_id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required|email',
        'role_id' => 'required'
    ];

     public static $createrules = [
        'email' => 'required|email|unique:users',
        'role_id' => 'required'
    ];

    public function getRole(){

        $role =  \App\Models\RoleUser::where('user_id', '=', $this->id)->get()->first();

        //echo $role->role_id; die();
        if($role)
            return $role;
        else
            return null;
    }

    public function getRoleName(){
        $role =  \App\Models\Role::find($this->getRole()->role_id);

        if($role)
            return $role->display_name;
        else
            return null;
    }   
    public static function boot()
    {
        parent::creating(function ($model) {
            if($model->password == '')
                $model->password = bcrypt('123456');


                $sent = \Illuminate\Support\Facades\Mail::send('auth.emails.new-user', ['model' => $model], function($message) use ($model)
                {
                    $message->to($model->email, $model->firstname . ' ' . $model->lastname)->subject('Welcome to Wondervend');
                });
           // $model->created_by = Auth::user()->id;
            return true;
        });

        parent::updating(function ($model) {

            
            return true;
        });
    }
    
}
