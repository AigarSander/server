# Booking App
===============================

This web application is the code base for the teachers as a reference when they give their students an assignment to create a web application according to the given tasks using [Silex](http://silex.sensiolabs.org/).

## Getting started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

## Prerequisites

Needed software in your computer to run this software:

* php
```
sudo apt-get install php7.0-cli
sudo apt-get install php-xml
```

* [composer](https://getcomposer.org/download/)

* SQLite
```
sudo apt-get install php-sqlite3
```

### Installing

To install the software you have following options:

Cloning the project to your computer. If you have ssh access.

```
git clone git@gitlab.com:i-sepp/bcs-koolitus.git
```

Or download it manually from gitlab [page](https://gitlab.com/i-sepp/bcs-koolitus).

Then you need to have composer installed in your computer.
And then you need to install composer packages in your project.
```
composer install
```

## Running the tests

You can run the tests by this command:
```
vendor/bin/phpunit tests
```

## Built with
[Silex](http:silex.sensiolabs.org/) - The web framework used
[Composer](https://getcomposer.org/) - Dependency Management
[Twig](http://twig.sensiolabs.org/) - Php template engine
[Doctrine DBAL](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/index.html) - Database connection
[PHPUnit](https://phpunit.de/) - PHP testing framework

## Versioning

We use [SemVer](http://semver.org/) for versioning.
At the moment we have one version, which is 1.0.0

## Authors

* **Kadri Vahtramae** - *Inital work* - [Kadri Vahtramae](https://gitlab.com/KadriVahtramae)

* **Aigar Sander** - *Recreation(Studying purposes)*

See also the list of [contributors](www.i-smith.ee) who participated in this project.

## License

This project is licensed under the MIT License.
