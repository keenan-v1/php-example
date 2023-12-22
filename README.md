# PHP Example with Docker

This was made using [Docker's PHP Language Guide](https://docs.docker.com/language/php/).

## Prerequisites
1. Latest version of [Docker](https://www.docker.com/products/docker-desktop/) for your system. 
2. A `git` [client](https://git-scm.com/downloads) to clone the repository with.
3. An editor of your choice, such as [VSCode](https://code.visualstudio.com/).

## Running
1. Clone the repository either using a terminal and `git` or via your editor: `git clone https://github.com/keenan-v1/php-example`
2. In a terminal window, type: `docker compose up --build` - wait until you see Apache logs.
3. In a browser, navigate to `http://localhost:9000`

**Note:** You can specify `-d` to disconnect from the logging output of Docker Compose. Example: `docker compose up --build -d`.

## Developing
1. Make changes to the files.
2. Press CTRL+C in the terminal running Docker Compose to stop it, or type `docker compose down` in the same folder.
3. Re-run `docker compose up --build`