FROM ubuntu

RUN apt update
RUN apt install -y python2.7 
RUN mkdir /var/www

WORKDIR /var/www

EXPOSE 8000
CMD python2.7 -m SimpleHTTPServer
