<?php

interface BuilderInterface {
    public function reset();
    public function stepA($fieldA):BuilderInterface;
    public function stepB($fieldB):BuilderInterface;
}