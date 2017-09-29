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
[PhantomJS](http://phantomjs.org/), [CasperJS](http://casperjs.org/) & [Gulp](https://gulpjs.com/) are used for builds & tests. You can install them with:
```sh
npm install -g phantomjs casperjs gulp
```

### Developing

Open your favorite web browser. Then, run a development server with:
```
npm start
```

Wait a few moments and your browser should open a tab to `http://localhost:3000`.

You can make changes to the files in the `theme/` folder and your changes should appear automatically. Sass files in `theme/sass/` and javascript in `theme/js/` will be compiled and minified as you work.

## Running the tests

End-to-end testing uses the tests in the `test/` directory. You can run the full suite of tests with:
```
npm test
```

Wait a few moments for the docker container to start and then tests will run on port 8080.

## Deployment

The theme is deployed using the [WP Pusher](https://wppusher.com/) plugin. When commits are merged to master, the newest version is automatically pushed to the production WordPress instance.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/watzek/brainbow/tags).
