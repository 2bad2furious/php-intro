<?php

interface IA {
    function getWithType(): int;
}

class A implements IA {

    private $withoutType;

    /**
     * @var string
     */
    private $withoutStrictType;

    private int $withType;

    /**
     * A constructor.
     * @param        $withoutType
     * @param string $withoutStrictType
     * @param int    $withType
     */
    public function __construct(
        $withoutType,
        $withoutStrictType,
        int $withType
    ) {
        $this->withoutType = $withoutType;
        $this->withoutStrictType = $withoutStrictType;
        $this->withType = $withType;
    }

    // no override
    function getWithType(): int {
        return $this->withType;
    }
}


$a = new A([], "a", 2);
echo $a->getWithType(); // -> is used to access methods and properties
