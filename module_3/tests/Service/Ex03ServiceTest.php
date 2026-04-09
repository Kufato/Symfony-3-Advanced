<?php

namespace App\Tests\Service;

use App\Service\Ex03Service;
use PHPUnit\Framework\TestCase;

class Ex03ServiceTest extends TestCase
{
    private Ex03Service $service;

    protected function setUp(): void
    {
        $this->service = new Ex03Service();
    }

    // Tests pour uppercaseWords
    public function testUppercaseWordsSimple(): void
    {
        $this->assertEquals('Hello World', $this->service->uppercaseWords('hello world'));
    }

    public function testUppercaseWordsSingleWord(): void
    {
        $this->assertEquals('Symfony', $this->service->uppercaseWords('symfony'));
    }

    public function testUppercaseWordsWithNumbers(): void
    {
        $this->assertEquals('Hello World 123', $this->service->uppercaseWords('hello world 123'));
    }

    // Tests pour countNumbers
    public function testCountNumbersWithDigits(): void
    {
        $this->assertEquals(3, $this->service->countNumbers('hello 123'));
    }

    public function testCountNumbersNoDigits(): void
    {
        $this->assertEquals(0, $this->service->countNumbers('hello world'));
    }

    public function testCountNumbersOnlyDigits(): void
    {
        $this->assertEquals(6, $this->service->countNumbers('123456'));
    }
}