<?php


namespace Pyz\Zed\StringReverser\Business;


use Generated\Shared\Transfer\HelloSprykerTransfer;

interface StringReverserFacadeInterface
{
    /**
     * Specification:
     * - Reverses string.
     *
     * @api
     *
     * @param HelloSprykerTransfer $helloSprykerTransfer
     *
     * @return HelloSprykerTransfer
     */
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer;
}
