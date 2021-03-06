## Contributing

### Code style

**Two** space indent
naming rules: use underscores to separate name (It's a leagcy style problems, so just use it continuelly).

### Modifying the code
First, ensure that you have the latest [Node.js](http://nodejs.org/) and [npm](http://npmjs.org/) installed.

Test that grunt is installed globally by running `grunt --version` at the command-line.  If grunt isn't installed globally, run `npm install -g grunt` to install the latest version. _You may need to run `sudo npm install -g grunt`._

* Fork and clone the repo.
* Run `npm install` and `bower install` to install all dev dependencies (including grunt).
* Modify the `*.coffee` file.
* Run `grunt` to grunt this project.

Assuming that you don't see any red, you're ready to go. Just be sure to run `grunt` after making any changes, to ensure that nothing is broken.

### Submitting pull requests

1. Create a new branch, please don't work in your `master` branch directly.
1. Add failing tests for the change you want to make. Run `grunt` to see the tests fail.
1. Fix stuff.
1. Run `grunt` to see if the tests pass. Repeat steps 2-4 until done.
1. Open `_SpecRunner.html` unit test file(s) in actual browser to ensure tests pass everywhere.
1. Update the documentation to reflect any changes.
1. Push to your fork and submit a pull request.

### notes

Please don't edit files in the `dist` subdirectory and *.js files in `src` as they are generated via grunt.  
You'll find source code in the `src` subdirectory!  
use `bower install` or `component install` to install dependencies first.


### PhantomJS
While grunt can run the included unit tests via [PhantomJS](http://phantomjs.org/), this shouldn't be considered a substitute for the real thing. Please be sure to test the `_SpecRunner.html` unit test file(s) in _actual_ browsers.

See the [Why does grunt complain that PhantomJS isn't installed?](https://github.com/gruntjs/grunt/blob/master/docs/faq.md#why-does-grunt-complain-that-phantomjs-isnt-installed) guide in the [Grunt FAQ](https://github.com/gruntjs/grunt/blob/master/docs/faq.md) for help with installing or troubleshooting PhantomJS.
