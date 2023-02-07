<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessDisplayDeity()
    {
        $array = 
        [
            'name' => 'Blind Io',
            'mythology' => 'the Discworld',
            'association' => 'lightning',
            'objects' => 'a hammer'
        ];
        $expecetedOuptut = '<h2>Blind Io</h2>' 
        . '<p>Blind Io is a deity from the Discworld mythology,</p>'
        . '<p>is associated with lightning,</p>'
        . '<p> and is usually portrayed holding a hammer.</p>';
        $actualOutput = displayDeity($array);
        $this->assertEquals($expecetedOuptut, $actualOutput);
    }

    public function testFailureDisplayDeity()
    {
        $array = 
        [
            'blah' => 'Blind Io',
            'whatever' => 'the Discworld',
            'stuff' => 'lightning',
            'nnnnggggg' => 'a hammer'
        ];
        $this->expectException(Exception::class);
        displayDeity($array);
    }
}