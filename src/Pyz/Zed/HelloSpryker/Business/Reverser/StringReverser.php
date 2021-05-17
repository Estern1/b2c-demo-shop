<?php


namespace Pyz\Zed\HelloSpryker\Business\Reverser;


use Generated\Shared\Transfer\HelloSprykerTransfer;

class StringReverser implements StringReverserInterface
{
    /**
     * @param HelloSprykerTransfer $stringToReverse
     *
     * @return HelloSprykerTransfer
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        $reversedString = strrev($helloSprykerTransfer->getOriginalString());
        $helloSprykerTransfer->setReversedString($reversedString);

        return $helloSprykerTransfer;
    }
}
