<?php
namespace PersonInterface;

interface IIdentifiable {
    public function getId() : string;
    public function setId(string $id);
}