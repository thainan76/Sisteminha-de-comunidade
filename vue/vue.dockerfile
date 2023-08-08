FROM node:16 as dev-stage
WORKDIR /app
COPY package*.json ./
RUN npm install

RUN npm install --save @ckeditor/ckeditor5-build-classic

RUN npm install primevue --save

RUN npm install primevue

RUN mkdir node_modules/.cache && chmod -R 777 node_modules/.cache

COPY ./ .

EXPOSE 8080

CMD [ "npm", "run", "serve"]

# FROM node:16 as build-stage
# WORKDIR /app
# COPY package*.json ./
# RUN npm install
# COPY ./ .
# RUN npm run build

# FROM nginx as production-stage
# EXPOSE 3000
# RUN mkdir /app
# COPY nginx.conf /etc/nginx/conf.d/default.conf
# COPY --from=build-stage /app/dist /app
