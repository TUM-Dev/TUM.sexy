<?php

class MainTest extends \PHPUnit\Framework\TestCase {

    public function testRouteResolving() {
        $router = new Route();

        // Normal redirect
        $this->assertEquals('https://menu.tum.sexy/', $router->getTargetOfSub('hunger.tum.sexy'));

        // Not found redirect
        $this->assertEquals('https://tum.sexy/', $router->getTargetOfSub('kjhdsfjkdfsgkjldsfgkjl.tum.sexy'));

        // SiteType redirect to moodle
        $this->assertStringContainsString('https://www.moodle.tum.de/course/view.php?id=100579', $router->getTargetOfSub('mgbs.tum.sexy'));

        // Normal redirect still works, even if it has moodle type assigned
        $this->assertStringContainsString('https://www14.in.tum.de/lehre/2025SS/theo/index.html.en', $router->getTargetOfSub('theo.tum.sexy'));
    }

    public function testJsonOutput() {
        $router = new Route();
        $this->assertNotEmpty($router->getResolvedArrays());
    }

    public function testIsAlphabetically(){
        $router = new Route();
        foreach($router->getArraysThatShouldBeSorted() as $array){
            $this->isAlphabetically($array);
        }
    }

    private function isAlphabetically($array){
        $prevkey = array_key_first($array);
            foreach($array as $key){
                $this->assertLessThanOrEqual(0, strcmp($prevkey,$key), "'$prevkey' should not be before '$key'");
                $prevkey = $key;
            }
    }
}
