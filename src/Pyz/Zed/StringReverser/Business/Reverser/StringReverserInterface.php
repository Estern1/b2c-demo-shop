<?php


namespace Pyz\Zed\StringReverser\Business\Reverser;


use Generated\Shared\Transfer\HelloSprykerTransfer;

interface StringReverserInterface
{
    /**
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
}
