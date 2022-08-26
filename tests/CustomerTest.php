<?php

namespace App\Tests;

use App\Entity\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testSettingCustomerFirstName()
    {
        $customer = new Customer();
        $firstName = "John";

        $customer->setFirstName($firstName);

        $this->assertEquals($firstName, $customer->getFirstName());
    }

    public function testSettingCustomerLastName()
    {
        $customer = new Customer();
        $lastName = "Doe";

        $customer->setLastName($lastName);

        $this->assertEquals($lastName, $customer->getLastName());
    }


    public function testReturnsCustomerFullName()
    {
        $customer = new Customer();
        $customer->setFirstName("John");
        $customer->setLastName("Deo");

        $fullName = $customer->getFirstName() . '' . $customer->getLastName();

        $this->assertSame($fullName, $customer->getCustomerFullName());
    }
     
    /**
     * @test 
     */
    public function InstanceOfCustomer()
    {
        $customer=new Customer();
        $tt=$customer instanceof Customer;
        $this->assertSame(TRUE, $tt);

    }

}