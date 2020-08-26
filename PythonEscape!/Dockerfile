FROM php:7.2-apache
RUN apt-get update && apt-get install -y python
USER root
RUN echo "flag{EscapeTheSystem}" > /flag.txt
RUN chmod 755 /flag.txt
