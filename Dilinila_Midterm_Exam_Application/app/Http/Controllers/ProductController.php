<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Solo Leveling', 'price' => 500, 'description' => 'Follows the adventures of Sung Jinwoo in a world that is constantly threatened by monsters and evil forces. In his battles Sung transforms himself from the weakest hunter of all mankind to one of the strongest hunters in existence.'],
            ['name' => 'Sakamoto Days', 'price' => 1200, 'description' => 'Once the greatest hitman of all, Taro Sakamoto retired in the name of love. But when his past catches up, he must fight to protect his beloved family.'],
            ['name' => 'Blue Box', 'price' => 250, 'description' => 'The story is centered around Taiki, a rookie badminton player, who is suddenly unexpectedly brought closer to his long-time crush, Chinatsu, a star on the basketball team. For Taiki and his friends at the athletic and competitive Eimei Private High School, staying at the top of their game requires total focus.'],
            ['name' => 'Black Clover', 'price' =>450, 'description' => 'BLACK CLOVER follows the story of Asta (voiced in English by Dallas Reid), an orphaned boy who dreams of becoming the legendary Wizard King, the most powerful mage in the entire kingdom. Unfortunately Asta was born without the ability to use magic and he lives in a world where everyone can use magic.'],
            ['name' => 'Naruto', 'price' => 600, 'description' => 'The story follows Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.'],
            ['name' => 'Bleach', 'price' => 200, 'description' => 'Bleach follows the adventures of Ichigo Kurosaki, a high school student with the ability to see ghosts, and Rukia Kuchiki, a Shinigami. The early parts of the story focus mainly on the characters. As events unfold, the story begins to delve deeper into the world of these gods of death.'],
        ];

        return view('welcome', compact('products'));
    }
}
