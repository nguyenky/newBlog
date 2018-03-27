<?php

namespace App\Repositories;

use App\Models\Profile;
use InfyOm\Generator\Common\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Validator;
use RemoteImageUploader\Factory;
class ProfileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'fullname',
        'phone',
        'address',
        'preview',
        'cv'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Profile::class;
    }
    public function uploadAvatar(array $attributes,$id){

        $result = Factory::create(config('uploadphoto.host'), config('uploadphoto.auth'))
                ->upload($attributes['avatar']->path());
        // $ext        = $attributes['avatar']->guessClientExtension();
        // $reName     = time().'.'.$ext;
        // $img = Image::make($attributes['avatar'])->resize(200, 200);
        // $img->save('storage/app/public/'.$reName);
        $profile = Profile::where('id',$id)->update(['avatar'=> $result]);
        // $url = url('storage/app/public/'.$reName);
        return $result;

    }
    public function showProfile($id){
        $profile = Profile::find($id);
        $arrayProfile = $profile->toArray();
        // $arrayProfile['url'] = url('storage/app/public/'.$profile->avatar);
        return $arrayProfile;
    }
}
