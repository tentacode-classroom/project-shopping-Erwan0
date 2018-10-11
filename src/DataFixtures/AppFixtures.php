<?php
// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;
use App\Entity\Sword;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $katana = new Category();
        $katana->setName("Katana");

        $manager->persist($katana);


        $basic = new Category();
        $basic->setName("Basic");

        $manager->persist($basic);


        $excalibur = new Sword();
        $excalibur->setName('Excalibur');
        $excalibur->setPicture("./img/excalibur.jpg");
        $excalibur->setPrice("100");
        $excalibur->setCategory($basic);
        $excalibur->setNbViews('0');

        $manager->persist($excalibur);

        $Honshu_Boshin_Katana = new Sword();
        $Honshu_Boshin_Katana->setName('Honshu Boshin Katana');
        $Honshu_Boshin_Katana->setPicture("./img/Honshu_Boshin_Katana.jpg");
        $Honshu_Boshin_Katana->setPrice("120");
        $Honshu_Boshin_Katana->setCategory($katana);
        $Honshu_Boshin_Katana->setNbViews('0');

        $manager->persist($Honshu_Boshin_Katana);

        $Gold_Lion_Katana = new Sword();
        $Gold_Lion_Katana->setName('Gold Lion Katana Sword');
        $Gold_Lion_Katana->setPicture("./img/Gold_Lion_Katana_Sword.jpg");
        $Gold_Lion_Katana->setPrice("150");
        $Gold_Lion_Katana->setCategory($katana);
        $Gold_Lion_Katana->setNbViews('0');

        $manager->persist($Gold_Lion_Katana);
        $manager->flush();
    }
}