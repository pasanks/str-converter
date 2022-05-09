# Str-Converter

## Introduction

Simple string manipulator

> No frameworks of any type have been used on this application although third-party libraries were incorporated to ease development load.


## Before You Begin
Before you begin I recommend you read about the basic building blocks that assemble the application:
* Composer - The best way to understand PHP composer is through its [Official Website](https://getcomposer.org/), which has a [Getting Started](https://getcomposer.org/doc/00-intro.md) guide.
* PHP - PHP's [Official Website](https://www.php.net/) is a great starting point.


## Prerequisites
Make sure you have installed all of the following prerequisites on your development machine:
* Git - [Download & Install Git](https://git-scm.com/downloads). OSX and Linux machines typically have this already installed.
* PHP - [Download & InstallPHP](https://www.php.net/downloads) and the PHP package manager composer. If you encounter any problems, you can also use this [guide](https://www.php.net/manual/en/install.php) to install PHP.
* Composer - You're going to use the [Composer Package Manager](https://getcomposer.org/) to manage your PHP packages. Make sure you've installed PHP first, then install composer globally:




### Cloning The GitHub Repository

The recommended way to get Str-converter App is to use git to directly clone the repository:

```bash
$ git clone https://github.com/pasanks/str-converter.git
```

This will clone the latest version of the str-converter App repository to a **str-converter** folder.


## Installation

Once you've downloaded the application and installed all the prerequisites, you're just a few steps away from starting to use the application.

The application comes pre-bundled with a `composer.json` file that contains the list of packages you need to start your application.

To install the dependencies, run this in the application folder from the command line:

```bash
$ composer update
```

This command does a few things:
* First it will install the dependencies needed for the application to run.
* If you're running in a development environment, it will then also install development dependencies needed for testing and running your application.
* To update these packages later on, just run `composer update` again.


## Usage

### Running The Application

To run the application. Open up the downloaded directory on your terminal application and run:

```bash
$ bin/converter convert "STRING THAT YOU NEED TO MANIPULATE"

```

An argument must be provided when running the application.


> The generated report CSV files can be found within the root directory.

### Available Reports

- `output.csv` - Generate string csv.


### Help

If you're not sure about how to run the command or want to know what commands are available run please email me via : pasankavinga@gmail.com

