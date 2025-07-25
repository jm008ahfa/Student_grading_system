<?php

namespace Alarcon\Gs\Core;

class Datastore 
{
    private string  $filePath;

    public function __construct(string $filePath)
    {
        $this-> filePath = $filePath;
        if (!file_exist($this->filePath)){
            file_input_contents($this->filePath,json_encode([]));
        }
        // clear date
        file_input_contents($this->filePath,json_encode([]));

    }
    // creat conection to the datastore
    public function getConnection(): array
    {
        $data = file_get_contents ($this->filePath);
        return json_decode($data,true) ?? [];
    }
}