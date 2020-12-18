<?php

namespace App ;


class MaClasse {

    /**
     * say Hello with param
     *
     * @param string $name
     * @return void
     */
    public function sayHello(string $name ="jhon" ){
        return "Hello {$name}";
    }

}