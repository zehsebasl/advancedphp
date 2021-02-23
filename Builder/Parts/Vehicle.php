<?php

abstract class Vehicle 
{
    /**
     * @var object[]
     */
    public array $data = [];

    public function setPart(string $key, object $value)
    {
        $this->data[$key] = $value;
    }
}