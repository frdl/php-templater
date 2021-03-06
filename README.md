# php-templater
This package can process and render templates similar to AngularJS.

Templates {{my.var}}  for ['my'=>['var'=>'Hello, World']]

# Examples

## frdl\Templater\SimpleDotNotationReplacer
Based on regular expression.

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

## frdl\Templater\AdvancedReplacer
Based on https://github.com/wmde/php-vuejs-templating .

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
  '<div>
     <h1 ng-bind="title"></h1>
     <p>Message: {{test.message}}</p>
     <p ng-show="show">this should be hidden</p>
     <p ng-if="!show">this should be visible</p>
     <p><a ng-repeat="item in items">{{item.property|ucfirst}}</a></p>
    
    </div>');
  
/*
//Renders to:  
<div>
     <h1><p>Template Test Title</p></h1>
     <p>Message: Hello, World</p>
     
     <p>this should be visible</p>
     <p><a>Value1</a><a>Value2</a></p>
    
    </div>

*/
````
