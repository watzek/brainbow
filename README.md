# brainbow
[![Version](https://img.shields.io/github/tag/watzek/brainbow.svg)](https://github.com/watzek/brainbow/tags)
[![Build Status](https://travis-ci.org/watzek/brainbow.svg)](https://travis-ci.org/watzek/brainbow)

a wordpress theme for showcasing beautiful neuroanatomy pictures and pedagogy

## Getting Started
### Prerequisites

- [NodeJS](https://nodejs.org/en/) & [npm](https://www.npmjs.com/)
- [Docker](https://www.docker.com/) & [docker-compose](https://docs.docker.com/compose/install/)

### Installing

Clone the repository and install its dependencies:
```sh
git clone https://github.com/watzek/brainbow.git
cd brainbow
npm install
```

### Developing

Open your favorite web browser. Then, run a development server with:
```
npm start
```

Wait a few moments and your browser should open a tab to `http://localhost:3000`.

You can make changes to the files in the `theme/` folder and your changes should appear automatically. Sass files in `theme/sass/` and javascript in `theme/js/` will be compiled and minified as you work.

Place vendor javascript in the `theme/js/vendor` directory and it will be compiled into a separately loaded `vendor.js` file in the theme folder.

## Running the tests

Unit testing uses [ava](https://github.com/avajs/ava) to run the tests in the `test/` directory. You can run the full suite of tests with:
```
npm test
```
You can have ava watch the javascript files and re-run tests as you work with:
```
npm test -- --watch
``` 

## Deployment

The theme is deployed using the [WP Pusher](https://wppusher.com/) plugin. When commits are merged to master, the newest version is automatically pushed to the production WordPress instance.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/watzek/brainbow/tags).
