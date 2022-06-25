<?php
namespace app\Helper;

Trait Picturable{
    public function storeMedia($request){
        $path = public_path('images');
        if(!file_exists($path)){
            mkdir($path,0777,true);

        }

        $file = $request->file('picture');
        $fileName = uniqid() .'_' . trim(($file->getPictureOriginalName()));

        $this->picture =$fileName;
        $this->save();

        $file->move($path, $fileName);
        return $this;
    }
}