<?php

namespace Help\Base;

class Helper {
    public function RandomString() {
        return uniqid();
    }

    public function getRandomId() {
        return 'This is random id: ' . $this->RandomString();
    }
}
