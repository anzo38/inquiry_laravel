<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
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


    protected $table = 'questions';
    // protected $primaryKey = 'contacts_id';
    public function __construct(array $attributes = []) {
        // if($data != null){

        //     $this->fill($data);
        // }
        $this->attributes = [
            'contact_id' =>"",
            'question' =>"",

        ];

        $this->fillable = [
            'contact_id',
            'question',

        ];
        parent::__construct($attributes);
    }

    public function contacts()
    {
        return $this->belongsTo('App\Model\Inquiry');
    }
}
