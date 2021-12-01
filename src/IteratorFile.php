<?php

class IteratorFile implements Iterator
{
    protected $filename;
    public $file;
    public $keys;
    protected $first;


    public function __construct($filename){
        $this->filename = $filename;
        $this->file = fopen($filename, 'r');
        $this->keys = fgetcsv($this->file);
        $this->first = $this->keys;
    }

    public function current()
    {
        $array[$this->key()] =  $this->keys[1];
        return $array;
    }

    public function next(){
        $this->keys = fgetcsv($this->file);
    }

    public function key()
    {
        return  $this->keys[0];
    }

    public function valid()
    {
        return !feof($this->file);
    }

    public function rewind()
    {
        $this->keys = $this->first;
    }
}