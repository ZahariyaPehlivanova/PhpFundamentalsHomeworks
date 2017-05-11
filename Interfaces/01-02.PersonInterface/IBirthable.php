<?php
namespace PersonInterface;

interface IBirthable {
    public function getBirthdate() : string;
    public function setBirthdate(string $id);
}