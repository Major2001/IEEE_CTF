FROM ubuntu:20.04

RUN apt-get update

RUN useradd -d /home/ctf/ -m -p ctf -s /bin/bash ctf
RUN echo "ctf:ctf" | chpasswd

WORKDIR /home/ctf

COPY babypwn1 .
COPY flag .
COPY ynetd .

RUN chown -R root:root /home/ctf
RUN chmod 4755 babypwn2
RUN chmod 600 flag

USER ctf
EXPOSE 1024
CMD ./ynetd -p 1024 ./babypwn1
