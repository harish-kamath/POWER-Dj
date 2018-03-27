from django.db import models

class User(models.Model):
    username = models.CharField(max_length = 25)
    password = models.CharField(max_length = 25)
    name = models.CharField(max_length = 20, default='Name')
