<?php

namespace App\Traits;

trait UploadTrait
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private function imageUpload($images, $imageColumn = null)
    {
        $uploadedImages = [];

        if(is_array($images)) 
        {
            foreach($images as $image) {
                $uploadedImages[] = [$imageColumn => $image->store('products', 'public')];       
            }
        } 
        else 
        {
            $uploadedImages = $images->store('logo', 'public');
        }

        return $uploadedImages;
    }
}
