<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    /**
     * タイムスタンプ無効
     */
    public $timestamps = false;

    /**
     * 自動更新日付無効
     */
    const UPDATED_AT = null;

    /**
     * 自動作成日付無効
     */
    const CREATED_AT = null;

    //モデルのQuestion群が保存されている配列
    private $questions = [];





    protected $table = 'contacts';
    // protected $primaryKey = 'contacts_id';
    public function __construct(array $attributes = []) {



        $this->attributes = [
            'name' =>"",
            'e_mail' =>"",
            // 'question' =>"",
            'category' =>"",
            'date' => "",
            'time_start' => "",
            'time_end' => "",
            'course' => "",
            'comment' => "",
            'login_id' => "",
            'login_pass' => "",
        ];

        $this->fillable = [
            'name',
            'e_mail',
            // 'question',
            'category',
            'date',
            'time_start',
            'time_end',
            'course',
            'comment',
            'login_id',
            'login_pass',
        ];
        parent::__construct($attributes);
    }

    public function questions()
    {
        return $this->hasMany('App\Model\Question','contact_id');
    }

    public function setQuestions(Array $questions){
        $this->questions = $questions;
    }

    public function getQuestions():Array{
        return $this->questions;
    }

}
