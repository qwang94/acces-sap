<?php

namespace App\DataFixtures;

use App\Entity\Invoice;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Generator;
use Faker\Factory;

class InvoicesFixtures extends Fixture
{
    /**
     * @var Generator
     */
    protected $faker;

    public function load(ObjectManager $manager): void
    {
        $this->faker = Factory::create();
        for ($i = 0; $i < 150; $i++) {
            $invoice = new Invoice();
            $invoice->setName($this->faker->word);
            $invoice->setDescription($this->faker->text(200));
            $invoice->setHtAmount($this->faker->randomFloat(2,0, 100000));

            $manager->persist($invoice);
        }

        $manager->flush();
    }
}
