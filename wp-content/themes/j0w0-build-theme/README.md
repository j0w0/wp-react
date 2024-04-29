# Wordpress & React Theme Boilerplate

Wordpress theme with React and Bootstrap. Utilizes @wordpress/scripts and @wordpress/env.

## Development

Node.js and Docker are required for development:

1. CD into theme or plugin directory with a package.json file.
1. Install packages: `npm install`
1. Start dev server: `npm run wp-env start`
1. Enable incremental builds and hot reloading: `npm run start:hot`

Development using Local:

1. Start Local Worpress site
1. CD into theme or plugin directory with package.json file.
1. Watch files for changes: `npm run start`
1. Hot module reloading does not work with Local, must use Docker.

## Production

1. For production-ready builds: `npm run build`
