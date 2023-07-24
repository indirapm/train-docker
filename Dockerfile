FROM python
MAINTAINER indira@gmail.com

WORKDIR /var/www/html
COPY app.py app.py
#COPY . .
RUN pip3 install flask

EXPOSE 5000

CMD ["python3", "-m", "flask","run", "--host=0.0.0.0"]