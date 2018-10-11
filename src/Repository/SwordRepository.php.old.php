<?php
/**
 * Created by IntelliJ IDEA.
 * User: erwan
 * Date: 05/10/2018
 * Time: 09:43
 */

namespace App\Repository;

use App\Entity\Sword;

class SwordRepository
{
    private $sword;

    public function __construct()
    {
        $sword1 = new Sword();
        $sword1->setId(1);
        $sword1->setName('Machette Katana');
        $sword1->setImage('https://media3.hattila.com/900-large_default/machette-275-pouces-69cm-katana-etui.jpg');
        $sword1->setPrice(29);



        $sword2 = new Sword();
        $sword2->setId(2);
        $sword2->setName('Gold Lion Katana Sword');
        $sword2->setImage('https://www.coldsteel.com/media/catalog/product/cache/1/thumbnail/480x/17f82f742ffe127f42dca9de82fb58b1/8/8/88abk.jpg');
        $sword2->setPrice(20);



        $sword3 = new Sword();
        $sword3->setId(3);
        $sword3->setName('Honshu Boshin Katana');
        $sword3->setImage('https://www.coutellerie-tourangelle.com/images/Image/uc3176---honshu-boshin-katana-uc3176.jpg');
        $sword3->setPrice(30);



        $sword4 = new Sword();
        $sword4->setId(4);
        $sword4->setName('Épée Excalibur');
        $sword4->setImage('https://www.english-heritageshop.org.uk/imagprod/imaglarg/63075.jpg');
        $sword4->setPrice(30);



        $sword5 = new Sword();
        $sword5->setId(5);
        $sword5->setName('Épée longue elfe noir');
        $sword5->setImage('https://www.chevalier-du-drac.com/812-large_default/epee-longue-elfe-noir-en-latex.jpg');
        $sword5->setPrice(30);



        $sword6 = new Sword();
        $sword6->setId(6);
        $sword6->setName('Sabre Jack Sparrow');
        $sword6->setImage('https://www.repliquemangacine.fr/1356-tm_thickbox_default/sabre-jack-sparrow-pirates-des-caraibes.jpg');
        $sword6->setPrice(30);



        $sword7 = new Sword();
        $sword7->setId(7);
        $sword7->setName('Golden Sword');
        $sword7->setImage('https://ae01.alicdn.com/kf/HTB1_9vQNVXXXXbdapXXq6xXFXXX5/A-Tale-of-Worst-One-Stella-Vermillion-Cosplay-Wooden-Sword-Stage-Performance-Props.jpg_640x640.jpg');
        $sword7->setPrice(42);



        $sword8 = new Sword();
        $sword8->setId(8);
        $sword8->setName(' Demon Blade');
        $sword8->setImage('https://ae01.alicdn.com/kf/HTB1OboiJXXXXXbJaXXXq6xXFXXX2/Fairy-Tail-Erza-Scarlet-Demon-Blade-carmes-Sakura-Cosplay-Prop-venta.jpg');
        $sword8->setPrice(53);



        $sword9 = new Sword();
        $sword9->setId(9);
        $sword9->setName('Kirito Sword');
        $sword9->setImage('https://i.servimg.com/u/f17/18/01/23/27/elucid10.png');
        $sword9->setPrice(30);



        $sword10 = new Sword();
        $sword10->setId(10);
        $sword10->setName('Sabre laser Dark Vador');
        $sword10->setImage('https://static1.funidelia.com/9125-f4_large/sabre-laser-dark-vador.jpg');
        $sword10->setPrice(30);



        $sword11 = new Sword();
        $sword11->setId(11);
        $sword11->setName('Épée en bois');
        $sword11->setImage('https://www.rueducommerce.fr/medias/910608a5aee83b12a04046b574f9032f/p_580x580/epee-en-bois-39-x-13-cm.jpg');
        $sword11->setPrice(30);



        $sword12 = new Sword();
        $sword12->setId(12);
        $sword12->setName('Épée de diamant Minecraft');
        $sword12->setImage('https://www.sylvoe.com/images/TG8F48C_480.jpg');
        $sword12->setPrice(30);



        $this->swords = [
            $sword1,
            $sword2,
            $sword3,
            $sword4,
            $sword5,
            $sword6,
            $sword7,
            $sword8,
            $sword9,
            $sword10,
            $sword11,
            $sword12,
        ];
    }

    public function findAll(): array
    {
        return $this->swords;
    }
    public function findOneById(int $id): Sword
    {
        foreach ($this->swords as $sword) {
            if ($sword->getId() === $id) {
                return $sword;
            }
        }
    }
}