# php-templater
This package can process and render templates similar to AngularJS.
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



````php
$arr = [
    'show' => false,
    'test' => [
        'message' => 'Hello, World',
    ],
    'items' => [
        [ 'property' => 'value1' ],
        [ 'property' => 'value2' ],
    ],
];


echo \frdl\Templater\AdvancedReplacer::replace(\frdl\Context::create($arr),   
  '<div><p>Message: {{test.message}}</p><p ng-show="show">this should be hidden</p><p ng-show="!show">this should be visible</p><p><a v-for="item in items">{{item.property|uppercase}}</a></p></div>');
  
/*
//Renders to:  
<div>
<p>Message: Hello, World</p>
<p>this should be visible</p>
<p><a>VALUE1</a><a>VALUE2</a></p>
</div>

*/
````
