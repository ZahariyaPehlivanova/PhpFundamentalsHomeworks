<?php

namespace SmartPhone;

interface ICall{
    public function call(string $number) : string;
}