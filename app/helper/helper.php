<?php

function uploadimage($request, $object, $filename, $filepath)
{
    if ($request->hasFile($filename)) {
        $file = $request->filename;
        $newname = time() . $file->getClientOriginalName();
        $file->move($filepath, $newname);
        $object->filename = $filepath . '/' . $newname;
    }
}
function alertv($message, $name)
{
    toast($message, $name);
}       
