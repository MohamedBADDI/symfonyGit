<?php

namespace FormationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class studentsControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/add');
    }

    public function testEditstudent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '(id)/editStudent');
    }

    public function testDeletestudent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '(id)/deleteStudent');
    }

    public function testShowstudents()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showStudents');
    }

    public function testAffectstudent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '(id)/affectStudent');
    }

}
