<?php


namespace App\classes;


class Product
{
    public $products = [], $result = [];

    public function __construct()
    {
        $this->products = [
            0 => [
                'id' => 1,
                'name' => 'Custom Software Development',
                'price' => 1500,
                'description' => 'Custom software development is the process of creating a unique software application that solves a specific set of challenges. Typically, the custom software development process involves multiple steps to deliver the finished software application, including research, design, development, testing, maintenance, and support.',
                'image' => 'assets/img/c1.jpg'

            ],

            1 => [
                'id' => 2,
                'name' => 'Web Application Development',
                'price' => 20000,
                'description' => 'Web application development is the creation of application programs that reside on remote servers and are delivered to the user’s device over the Internet. A web application (web app) does not need to be downloaded and is instead accessed through a network. An end user can access a web application through a web browser such as Google Chrome, Safari, or Mozilla Firefox. A majority of web applications can be written in JavaScript, Cascading Style Sheets (CSS), and HTML5.',
                'image' => 'assets/img/c2.jpg'

            ],

            2 => [
                'id' => 3,
                'name' => 'Mobile Application Development',
                'price' => 16000,
                'description' => 'Mobile application development is the process of creating software applications that run on a mobile device, and a typical mobile application utilizes a network connection to work with remote computing resources. Hence, the mobile development process involves creating installable software bundles (code, binaries, assets, etc.) , implementing backend services such as data access with an API, and testing the application on target devices.',
                'image' => 'assets/img/c3.png'


            ],

            3 => [
                'id' => 4,
                'name' => 'Cloud Consulting',
                'price' => 25000,
                'description' => 'Cloud consultants educate businesses on the available cloud computing services and assist them in making decisions that will improve operations. Cloud consultants have the extensive technical knowledge and play important communication roles in cloud based solutions. In addition, they are responsible for explaining cloud computing services’ advantages to specific firms in terms that non-technical company representatives may comprehend.',
                'image' => 'assets/img/c4.jpg'
            ],

            4 => [
                'id' => 5,
                'name' => 'Software Prototyping',
                'price' => 16000,
                'description' => 'Software prototyping is the activity of creating prototypes of software applications, i.e., incomplete versions of the software program being developed. It is an activity that can occur in software development and is comparable to prototyping as known from other fields, such as mechanical engineering or manufacturing.',
                'image' => 'assets/img/c5.png'


            ],

            5 => [
                'id' => 6,
                'name' => 'Quality Assurance',
                'price' => 22000,
                'description' => 'Quality assurance (QA) and quality control (QC) are two terms that are often used interchangeably. Although similar, there are distinct differences between the two concepts. This page will explain the differences between quality control and quality management, and provide definitions and examples of each.',
                'image' => 'assets/img/c6.jpg'
            ],
        ];


    }

    public function getAllProduct()
    {
        return $this->products;
    }

    public function getProductById($id)
    {
        foreach ($this->products as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }
    }
}