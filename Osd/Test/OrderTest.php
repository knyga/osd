<?php

use Osd\Osd;

class OrderTest extends \PHPUnit_Framework_TestCase {

    public function testOrderCase1() {
        $toBeFiles = ["file-page1.jpg", "file-page2.jpg", "file-page3.jpg", "file-page4.jpg", "file-page5.jpg", 
        "file-page6.jpg", "file-page7.jpg", "file-page8.jpg", "file-page9.jpg", "file-page10.jpg", "file-page11.jpg", 
        "file-page12.jpg", "file-page13.jpg", "file-page14.jpg", "file-page15.jpg", "file-page16.jpg", "file-page17.jpg",
         "file-page18.jpg", "file-page19.jpg", "file-page20.jpg", "file-page21.jpg", "file-page22.jpg", "file-page23.jpg", 
         "file-page24.jpg", "file-page25.jpg", "file-page26.jpg", "file-page27.jpg", "file-page28.jpg", "file-page29.jpg", 
         "file-page30.jpg", "file-page31.jpg", "file-page32.jpg", "file-page33.jpg", "file-page34.jpg", "file-page35.jpg", 
         "file-page36.jpg", "file-page37.jpg", "file-page38.jpg", "file-page39.jpg", "file-page40.jpg", "file-page41.jpg", 
         "file-page42.jpg", "file-page43.jpg", "file-page44.jpg", "file-page45.jpg", "file-page46.jpg", "file-page47.jpg", 
         "file-page48.jpg", "file-page49.jpg", "file-page50.jpg", "file-page51.jpg", "file-page52.jpg", "file-page53.jpg", 
         "file-page54.jpg", "file-page55.jpg", "file-page56.jpg", "file-page57.jpg", "file-page58.jpg", "file-page59.jpg", 
         "file-page60.jpg", "file-page61.jpg", "file-page62.jpg", "file-page63.jpg", "file-page64.jpg", "file-page65.jpg", 
         "file-page66.jpg", "file-page67.jpg", "file-page68.jpg", "file-page69.jpg", "file-page70.jpg", "file-page71.jpg", 
         "file-page72.jpg", "file-page73.jpg", "file-page74.jpg", "file-page75.jpg", "file-page76.jpg", "file-page77.jpg", 
         "file-page78.jpg", "file-page79.jpg", "file-page80.jpg", "file-page81.jpg", "file-page82.jpg", "file-page83.jpg", 
         "file-page84.jpg", "file-page85.jpg", "file-page86.jpg", "file-page87.jpg", "file-page88.jpg", "file-page89.jpg",
         "file-page90.jpg", "file-page91.jpg", "file-page92.jpg", "file-page93.jpg", "file-page94.jpg", "file-page95.jpg",
         "file-page96.jpg", "file-page97.jpg", "file-page98.jpg", "file-page99.jpg", "file-page100.jpg"];

        $asIsfiles = Osd::scandir(__DIR__.'/Resources/case1/');

        for($i=0, $cnt=count($toBeFiles); $i<$cnt; $i++) {
            $this->assertEquals($toBeFiles[$i], $asIsfiles[$i]);
        }
    }

    /**
     * @expectedException     WebExtractor\StashDriverFactory\Exception\DriverNotFoundException
     */
    // public function testCreateDriverNotFoundException() {
    //     $name = "myDriver";
    //     $this->factory->createDriver($name);
    // }
}