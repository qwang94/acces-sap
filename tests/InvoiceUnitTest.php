<?php

namespace App\Tests;

use App\Entity\Invoice;
use PHPUnit\Framework\TestCase;

class InvoiceUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $invoice = new Invoice();
        $invoice->setName('testInvoice')
                ->setDescription('this is a description')
                ->setHtAmount(12345.22);

        $this->assertTrue($invoice->getName() === 'testInvoice');
        $this->assertTrue($invoice->getDescription() === 'this is a description');
        $this->assertEquals(12345.22, $invoice->getHtAmount());
    }

    public function testIsFalse(): void
    {
        $invoice = new Invoice();
        $invoice->setName('testInvoice')
            ->setDescription('this is a description')
            ->setHtAmount(12312.22);

        $this->assertFalse($invoice->getName() === 'NoInvoice');
        $this->assertFalse($invoice->getDescription() === 'this is NOT a description');
        $this->assertFalse($invoice->getHtAmount() === 222);
    }

    public function testIsEmpty(): void
    {
        $invoice = new Invoice();

        $this->assertEmpty($invoice->getName());
        $this->assertEmpty($invoice->getDescription());
        $this->assertEmpty($invoice->getHtAmount());
    }
}
