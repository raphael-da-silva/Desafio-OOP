<?php

/* 

autor: Raphael da Silva
Implementação do desafio de classe de upload com PHP

*/
class Upload
{
    private array $uploadInfo;

    public function __construct(
        string $uploadName
    ){
        $this->uploadInfo = $_FILES[$uploadName];
    }

    public function hasError(): bool
    {
        return isset($this->uploadInfo['error']);
    }

    public function execute(string $pathToSaveUploadFile): bool
    {
        return move_uploaded_file(
            $this->uploadInfo['tmp_name'], 
            $pathToSaveUploadFile
        );
    }

    public function __get($name): mixed
    {
        if($this->uploadInfo[$name]){
            return $this->uploadInfo[$name];
        }

        throw new Exception('Undefined value on upload info.');
    }
}