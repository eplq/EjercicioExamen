#!/bin/bash

php ./vendor/bin/phpunit --testdox-html ./logs/tests/testResults.html --coverage-html ./logs/coverage/ --colors tests/
