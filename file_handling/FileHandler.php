<?php
    
class FileHandler{
    private $fileHandle;
    private $fileName;

    function __construct($fileName,$mode){
        $this->fileName=$fileName;
        $this->fileHandle=fopen($fileName,$mode);
        if(!$this->fileHandle){
            throw new Exception("File could not be opened");
        }
    }

    public function __destruct()
    {
        if($this->fileHandle){
            fclose($this->fileHandle);
            echo " <br/> File has been closed.\n <br/>";
        }
    }

    public function read(){
        $content=fread($this->fileHandle,filesize($this->fileName));
        return $content;
    }

    public function write($content){
        if($this->fileHandle){
            fwrite($this->fileHandle,$content);
            echo("Successful has been written.<br/>");
            return;
        }
        throw new Exception("File could not be write!");
    }
}
?>