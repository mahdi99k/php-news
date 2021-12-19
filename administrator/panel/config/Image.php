<?php

class Image
{
    public function uploadImage($image): string
    {
        $image_name = time() . rand(100000, 999999) . $image['name'];
        $directory = "images/" . $image_name;
        move_uploaded_file($image['tmp_name'], $directory);   // 1) address localhost    2)address new
        return $image_name;
    }
}