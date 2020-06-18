<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Info extends Model
{
    protected $fillable = [
        'type','title','tags','info_content','receiver_wording','sender_id','info_cover_pic','created_at','updated_at'
    ];
    /**
     * sender():
     * retourne le diffuseur de l'information courante
     */
    public function sender()
    {
        return $this->belongsTo('App\User','sender_id','id');
    }
}