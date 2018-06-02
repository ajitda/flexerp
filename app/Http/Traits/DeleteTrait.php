<?php
namespace App\Http\Traits;


trait DeleteTrait
{
    public function delete($id)
    {
        Model::findOrFail($id)->delete();
        return redirect()->back();
    }
}