# brainbow
[![Version](https://img.shields.io/github/tag/watzek/brainbow.svg)](https://github.com/watzek/brainbow/tags)

a wordpress theme for showcasing beautiful neuroanatomy pictures and pedagogy

## Getting Started
### Prerequisites

- [NodeJS](https://nodejs.org/en/) & [yarn](yarnpkg.com) or [npm](https://www.npmjs.com/)
- [Docker](https://www.docker.com/) & [docker-compose](https://docs.docker.com/compose/install/)

### Installing

Clone the repository and install its dependencies:
```sh
git clone https://github.com/watzek/brainbow.git
cd brainbow
yarn # or npm install
```

### Developing

Open your favorite web browser. Then, run a development server with:
```sh
yarn run # or npm start
```

Wait a few moments and your browser should open a tab to <http://localhost:3000>. If you've just cloned the repository, you'll need to navigate to <http://localhost:3000/wp-setup> and set up wordpress. Then, you can log in at <http://localhost:3000/wp-admin>. 

You can make changes to the files in the `theme/` folder and your changes should appear automatically. Sass files in `theme/sass/` and javascript in `theme/js/` will be compiled and minified as you work.

## Deployment

The theme is deployed using the [WP Pusher](https://wppusher.com/) plugin. When commits are merged to master, the newest version is automatically pushed to the production WordPress instance.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/watzek/brainbow/tags).
