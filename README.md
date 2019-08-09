# php-templater
Templates {{my.var}}  for ['my'=>['var'=>'Hello, World']]


````php
$arr = [
    'test' => [
        'message' => 'Hello, World',
    ],

];


echo \frdl\Templater\SimpleDotNotationReplacer::replace(\frdl\Context::create($arr), 
    'Message: {{test.message}}');
    //Message: Hello, World
````
