FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
        git \
        unzip \
        libaio1 \
        libonig-dev \
        libpq-dev \
    && docker-php-ext-install \
        pcntl \
        mbstring \
        pdo_pgsql \
        pdo_mysql

#Install instantclient
RUN curl https://download.oracle.com/otn_software/linux/instantclient/195000/instantclient-basic-linux.x64-19.5.0.0.0dbru.zip --output /tmp/instantclient-basic-linux.x64-19.5.0.0.0dbru.zip
RUN curl https://download.oracle.com/otn_software/linux/instantclient/195000/instantclient-sdk-linux.x64-19.5.0.0.0dbru.zip --output /tmp/instantclient-sdk-linux.x64-19.5.0.0.0dbru.zip
RUN unzip /tmp/instantclient-basic-linux.x64-19.5.0.0.0dbru.zip -d /usr/local/
RUN unzip /tmp/instantclient-sdk-linux.x64-19.5.0.0.0dbru.zip -d /usr/local/
RUN ln -s /usr/local/instantclient_19_5 /usr/local/instantclient

#Enable instantclient
ENV LD_LIBRARY_PATH /usr/local/instantclient/
RUN echo 'instantclient,/usr/local/instantclient/' | pecl install oci8 \
   && docker-php-ext-enable \
       oci8

#Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#Install SOAP
RUN rm /etc/apt/preferences.d/no-debian-php && apt-get update && apt-get install -y libxml2-dev php-soap && docker-php-ext-install soap
