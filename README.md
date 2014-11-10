[brickandmortarphilly](http://www.brickandmortarphilly.com) [![Built with Grunt](https://cdn.gruntjs.com/builtwith.png)](http://gruntjs.com/) [![Build Status](https://travis-ci.org/amsross/com-brickandmortarphilly.png?branch=master)](https://travis-ci.org/amsross/com-brickandmortarphilly)
==============


## Development

1. Install global dependencies
	```
	npm install -g bower grunt-cli
	```

2. Install project dependencies
	```
	npm install # bower assets will be installed automatically
	```

3. Fire listeners
	```
	screen -S grunt -d -m grunt dev
	```

4. Do work...
	```
	vi <filename>
	git add <filenames>
	git commit
	git push origin master
	```

5. Kill listeners
	```
	screen -X -S grunt quit
	```
