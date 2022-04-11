FROM node:14

WORKDIR /app

COPY package.json /app

RUN npm install

COPY . /app

ARG DEFAULT_PORT=100

ENV PORT $DEFAULT_PORT

EXPOSE $PORT

VOLUME [ "/app/feedback" ]

CMD [ "node", "server.js" ]