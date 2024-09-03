#HOW TO RUN




```bash 
cd <project>/
docker build -t 1.3-question . 
docker run -p 8080:80 -v "$(pwd)":/var/www/html 1.3-question
```


Access to http://localhost:8080