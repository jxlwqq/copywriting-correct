<?php

namespace Ricoa\CopyWritingCorrect;

use Ricoa\CopyWritingCorrect\Correctors\SpaceCorrector;

class CopyWritingCorrectService{

	protected $corrects=[
        SpaceCorrector::class,
    ];


    /**
     * CopyWritingCorrectService constructor.
     */
    public function __construct()
	{
	    
	}


    /**
     * @param $text
     *
     * @return mixed
     */
    public function correct($text)
    {
        foreach($this->corrects as $corrects){
            $text=$corrects::getInstance()->handle($text);
        }

        return $text;
	}
}