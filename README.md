# php-templater
Templates {{my.var}}  for ['my'=>['var'=>'Hello, World']]


````php
echo \frdl\Templater\SimpleDotNotationReplacer::replace(\frdl\Context::create($arr),  'Message: {{test.message}}');
````
