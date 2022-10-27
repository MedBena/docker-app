FROM node:18-alpine as build 
# reactjs
WORKDIR /app

COPY ./reactjs/package.json ./

RUN npm install

COPY ./reactjs ./

RUN npm run build

CMD ["npm", "start"]
